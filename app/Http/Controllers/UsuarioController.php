<?php

namespace App\Http\Controllers;

use App\Services\UnidadesService;
use App\Services\UsuarioService;
use Illuminate\Http\Request;
use App\Traits\ApiResponses;
use Illuminate\Http\Response;

class UsuarioController extends Controller
{
    use ApiResponses;

    /**
     * El servicio que consume el usuario
     * @var UsuarioService
     */
    public $usuarioService;

    /**
     * El servicio que consume la unidad
     * @var UnidadesService
     */
    public $unidadesService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UsuarioService $usuarioService, UnidadesService $unidadesService)
    {
        $this->usuarioService = $usuarioService;
        $this->unidadesService = $unidadesService;
    }

    /**
     * Retorna la lista de usuario
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
        //$this->unidadesService->obtenerUnidad($req->unidad_id);
        return $this->successResponse($this->usuarioService->createUsuario($req->all()), Response::HTTP_CREATED);
    }

    /**
     * Mustra la información de una usuario
     * @return Illuminate\Http\Response
     */
    public function show($usuario){
        return $this->successResponse($this->usuarioService->obtenerUsuario($usuario));
    }

    /**
     * Actualiza la información de usuario
     * @return Illuminate\Http\Response
     */
    public function update(Request $req, $usuario){
        return $this->successResponse($this->usuarioService->editarUsuario($req->all(), $usuario));
    }

    /**
     * Destruye un autor
     * @return Illuminate\Http\Response
     */
    public function destroy($usuario){
        return $this->successResponse($this->usuarioService->eliminarUsuario($usuario));
    }
}
