<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;

Class UsersServices
{

    use ConsumesExternalService;

    /**
     * base uri a ser usado por el servicio de usuario
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.users.base_uri');
    }


    /**
     * obtiene lista completa de usuarios desde el servicio de usuarios del gateway
     */
    public function obtenerUsuarios()
    {

        
        return $this->performRequest('GET', '/users');
    }

 
    public function crearUsuario($data){

        return $this->performRequest('POST', '/user', $data);
    }

    public function obtenerUsuario($usuario){
        return $this->performRequest('GET', "/user/{$usuario}");

    }

    public function editarUsuario($data, $usuario){
        return $this->performRequest('PUT', "/user/{$usuario}", $data);
    }

    public function eliminarUsuario($usuario){

        return $this->performRequest('DELETE', "/user/{$usuario}");
    }




}