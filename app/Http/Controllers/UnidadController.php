<?php

namespace App\Http\Controllers;

use App\Services\UnidadesService;
use Illuminate\Http\Request;
use App\Traits\ApiResponses;
use Illuminate\Http\Response;

class UnidadController extends Controller
{
    use ApiResponses;
    /**
     * El servicio que consume las unidades
     * @var UnidadesService
     */
    public $unidadesService;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UnidadesService $unidadesService)
    {
        $this->unidadesService = $unidadesService;
    }

    /**
     * Retorna la lista de unidades
     * @return Illuminate\Http\Response
     */
    public function index(){
        return $this->successResponse($this->unidadesService->obtenerUnidades());
    }

    /**
     * Crea una instancia de unidad
     * @return Illuminate\Http\Response
     */
    public function store(Request $req){
        return $this->successResponse($this->unidadesService->createUnidades($req->all()), Response::HTTP_CREATED);
    }

    /**
     * Mustra la información de una unidad
     * @return Illuminate\Http\Response
     */
    public function show($unidad){
        return $this->successResponse($this->unidadesService->obtenerUnidad($unidad));
    }

    /**
     * Actualiza la información de unidad
     * @return Illuminate\Http\Response
     */
    public function update(Request $req, $unidad){
        return $this->successResponse($this->unidadesService->editarUnidad($req->all(), $unidad));
    }

    /**
     * Destruye un autor
     * @return Illuminate\Http\Response
     */
    public function destroy($unidad){
        return $this->successResponse($this->unidadesService->eliminarUnidad($unidad));
    }
}
