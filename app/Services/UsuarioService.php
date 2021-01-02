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

    /**
     * Clave secreta para consumir en el servicio de usuarios
     * @var string;
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.users.base_uri');
        $this->secret = config('services.users.secret');
    }

    /**
     * Obtiene la lista completa de usuarios desde el servicio de usuarios
     * @return string
     */
    public function obtenerUsuarios(){
        return $this->performRequest('GET', '/users');
    }

    /**
     * Crea una Usuario
     * @return string
     */
    public function createUsuario($data){
        return $this->performRequest('POST', '/user', $data);
    }

    /**
     * Obtiene una Usuario
     * @return string
     */
    public function obtenerUsuario($usuario){
        return $this->performRequest('GET', "/user/{$usuario}");
    }

    /**
     * Editar una Usuario
     * @return string
     */
    public function editarUsuario($data, $usuario){
        return $this->performRequest('PUT', "/user/{$usuario}", $data);
    }

    /**
     * Eliminar una Usuario
     * @return string
     */
    public function eliminarUsuario($usuario){
        return $this->performRequest('DELETE', "/user/{$usuario}");
    }
}