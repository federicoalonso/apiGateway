<?php

namespace App\Services;

use App\Traits\ConsumesExternalServices;

class UnidadesService {
    use ConsumesExternalServices;

    /**
     * Es la url base a ser utilizada en el servicio de usuarios
     * @var string;
     */
    public $baseUri;

    /**
     * Clave secreta a ser utilizada en el servicio de usuarios
     * @var string;
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.unidades.base_uri');
        $this->secret = config('services.unidades.secret');
    }

    /**
     * Obtiene la lista completa de unidades desde el servicio de unidades
     * @return string
     */
    public function obtenerUnidades(){
        return $this->performRequest('GET', '/unidades');
    }

    /**
     * Crea una Unidad
     * @return string
     */
    public function createUnidades($data){
        return $this->performRequest('POST', '/unidad', $data);
    }

    /**
     * Obtiene una Unidad
     * @return string
     */
    public function obtenerUnidad($unidad){
        return $this->performRequest('GET', "/unidad/{$unidad}");
    }

    /**
     * Editar una Unidad
     * @return string
     */
    public function editarUnidad($data, $unidad){
        return $this->performRequest('PUT', "/unidad/{$unidad}", $data);
    }

    /**
     * Eliminar una Unidad
     * @return string
     */
    public function eliminarUnidad($unidad){
        return $this->performRequest('DELETE', "/unidad/{$unidad}");
    }
}