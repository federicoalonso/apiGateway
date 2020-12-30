<?php

namespace App\Http\Controllers;

use App\Services\UnidadesService;
use Illuminate\Http\Request;
use App\Traits\ApiResponses;

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
    }

    /**
     * Crea una instancia de unidad
     * @return Illuminate\Http\Response
     */
    public function store(Request $req){
    }

    /**
     * Mustra la información de un unidad
     * @return Illuminate\Http\Response
     */
    public function show($unidad){
    }

    /**
     * Actualiza la información de unidad
     * @return Illuminate\Http\Response
     */
    public function update(Request $req, $unidad){
    }

    /**
     * Destruye un autor
     * @return Illuminate\Http\Response
     */
    public function destroy($unidad){
    }
}
