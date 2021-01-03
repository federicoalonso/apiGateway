<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiResponses;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use App\services\UsersServices;
use App\Services\UnidadesServices;

class UserController extends Controller
{
    use ApiResponses;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $usersService;

    public $unidadesServices;

    public function __construct(UsersServices $usersService, UnidadesServices $unidadesServices)
    {
        $this->usersService = $usersService;
        $this->unidadesServices = $unidadesServices;
    }
    /**
     * Retorna la lista de usuario
     * @return Illuminate\Http\Response
     */
    public function index(){

        
        return $this->successResponse($this->usersService->obtenerUsuarios());
          
      }
  

    /**
     * Crea una instancia de usuario
     * @return Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $this->unidadesServices->obtenerUnidad($req->unidad_id);
        
        return $this->successResponse($this->usersService->crearUsuario($req->all()), Response::HTTP_CREATED);
    }

    /**
     * Mustra la información de un usuario
     * @return Illuminate\Http\Response
     */
    public function show($usuario)
    {
        return $this->successResponse($this->usersService->obtenerUsuario($usuario));
    }

    /**
     * Actualiza la información de usuario
     * @return Illuminate\Http\Response
     */
    public function update(Request $req, $usuario)
    {
        return $this->successResponse($this->usersService->editarUsuario($req->all(),$usuario));
    }

    /**
     * Destruye una usuario
     * @return Illuminate\Http\Response
     */
    public function destroy($usuario)
    {
        return $this->successResponse($this->usersService->eliminarUsuario($usuario));
    }
}
