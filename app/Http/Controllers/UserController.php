<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UseresService;
use App\Services\UsuarioService;
use Illuminate\Http\Request;
use App\Traits\ApiResponses;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use ApiResponses;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Retorna la lista de unidades
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return $this->validResponse($users);
    }

    /**
     * Crea una instancia de unidad
     * @return Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ];
        $this->validate($req, $rules);

        $this->authorize('create', new User);

        $campos = $req->all();
        $campos['password'] = Hash::make($req->password);
        $user = User::create($campos);
        return $this->validResponse($user, Response::HTTP_CREATED);
    }

    /**
     * Mustra la información de un unidad
     * @return Illuminate\Http\Response
     */
    public function show($user, Request $req)
    {
        $uni = User::findOrFail($user);
        $this->authorize('view', $uni);
        return $this->validResponse($uni);
    }

    /**
     * Actualiza la información de unidad
     * @return Illuminate\Http\Response
     */
    public function update(Request $req, $user)
    {
        $rules = [
            'name' => 'max:255',
            'email' => 'email|unique:users,email, ' . $user,
            'password' => 'min:8|confirmed',
        ];

        $this->validate($req, $rules);
        
        $user->fill($req->all());

        if($req->has(('password'))){
            $user->password = Hash::make($req->password);
        }

        if ($user->isClean()) {
            return $this->errorResponse('Al menos un valor debe cambiar', Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $user->save();
        return $this->validResponse($user);
    }

    /**
     * Destruye una unidad
     * @return Illuminate\Http\Response
     */
    public function destroy($user)
    {
        $uni = User::findOrFail($user);
        $uni->delete();
        return $this->validResponse($uni);
    }

    /**
     * Identifica al usuario actual
     * @return Illuminate\Http\Response
     */
    public function identificador(Request $req)
    {
        return $this->validResponse($req->user());
    }
}
