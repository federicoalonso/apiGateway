<?php

namespace App\Http\Controllers;

use App\Services\UsuarioService;
use Illuminate\Http\Request;
use App\Traits\ApiResponses;

class UsuarioController extends Controller
{
    use ApiResponses;

    /**
     * El servicio que consume el usuario
     * @var UsuarioService
     */
    public $usuarioService;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UsuarioService $usuarioService)
    {
        $this->usuarioService = $usuarioService;
    }

    /**
     * Retorna la lista de usuarios
     * @return Illuminate\Http\Response
     */
    public function index(){
        return $this->successResponse($this->usuarioService->obtenerUsuarios());
    }

    /**
     * Crea una instancia de usuario
     * @return Illuminate\Http\Response
     */
    public function store(Request $req){
    }

    /**
     * Mustra la información de un usuario
     * @return Illuminate\Http\Response
     */
    public function show($usuario){
    }

    /**
     * Actualiza la información de usuario
     * @return Illuminate\Http\Response
     */
    public function update(Request $req, $usuario){
    }

    /**
     * Destruye un autor
     * @return Illuminate\Http\Response
     */
    public function destroy($usuario){
    }
}
