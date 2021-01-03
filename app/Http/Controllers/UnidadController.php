<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Traits\ApiResponses;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use App\Services\UnidadesServices;

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
    public $unidadesServices;

    public function __construct(unidadesServices $unidadesServices)
    {
        $this->unidadesServices = $unidadesServices;
    }

    //

    /**
     * Retorna la lista de unidades
     * @return Illuminate\Http\Response
     */
    public function index(){

        
        return $this->successResponse($this->unidadesServices->obtenerUnidades());
          
      }
  

    /**
     * Crea una instancia de unidad
     * @return Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        return $this->successResponse($this->unidadesServices->crearUnidad($req->all()), Response::HTTP_CREATED);
    }

    /**
     * Mustra la información de un unidad
     * @return Illuminate\Http\Response
     */
    public function show($unidad)
    {
        return $this->successResponse($this->unidadesServices->obtenerUnidad($unidad));
    }

    /**
     * Actualiza la información de unidad
     * @return Illuminate\Http\Response
     */
    public function update(Request $req, $unidad)
    {
        return $this->successResponse($this->unidadesServices->editarUnidad($req->all(),$unidad));
    }

    /**
     * Destruye una unidad
     * @return Illuminate\Http\Response
     */
    public function destroy($unidad)
    {
        return $this->successResponse($this->unidadesServices->eliminarUnidad($unidad));
    }
}
