<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Traits\ApiResponses;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use App\services\UnidadesService;

class UnidadController extends Controller
{
    use ApiResponses;
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     /**
      * servicio del que va a consumir las unidades
      */
    public $unidadesService;

    public function __construct(UnidadesService $unidadesService)
    {
        $this->unidadesService = $unidadesService;
    }

    //

    /**
     * Retorna la lista de unidades
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Crea una instancia de unidad
     * @return Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        
    }

    /**
     * Mustra la información de un unidad
     * @return Illuminate\Http\Response
     */
    public function show($unidad)
    {
        
    }

    /**
     * Actualiza la información de unidad
     * @return Illuminate\Http\Response
     */
    public function update(Request $req, $unidad)
    {
        
    }

    /**
     * Destruye una unidad
     * @return Illuminate\Http\Response
     */
    public function destroy($unidad)
    {
        
    }
}
