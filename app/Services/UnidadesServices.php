<?php

namespace App\Services;
use App\Traits\ConsumesExternalService;


Class UnidadesServices
{

    use ConsumesExternalService;

    /**
     * base uri a ser usado por el servicio de usuario
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.unidades.base_uri');
    }


    public function obtenerUnidades(){

        return $this->performRequest('GET', '/unidades');
    }

    public function crearUnidad($data){

        return $this->performRequest('POST', '/unidad', $data);
    }

    public function obtenerUnidad($unidad){
        return $this->performRequest('GET', "/unidad/{$unidad}");

    }

    public function editarUnidad($data, $unidad){
        return $this->performRequest('PUT', "/unidad/{$unidad}", $data);
    }

    public function eliminarUnidad($unidad){

        return $this->performRequest('DELETE', "/unidad/{$unidad}");
    }

}