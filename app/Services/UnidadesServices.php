<?php
use App\Traits\ConsumesExternalService;


namespace App\Services;

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




}