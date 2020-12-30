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
    public function obtenerUsers()
    {

        
        return $this->performRequest('GET', '/users');
    }






}