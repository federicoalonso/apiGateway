<?php

namespace App\Services;

use App\Traits\ConsumesExternalServices;

class UsuarioService {
    use ConsumesExternalServices;

    /**
     * Es la url base a ser utilizada en el servicio de usuarios
     * @var string;
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.users.base_uri');
    }

    /**
     * Obtiene la lista completa de usuarios desde el servicio de usuarios
     * @return string
     */
    public function obtenerUsuarios(){
        return $this->performRequest('GET', '/users');
    }
}