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

    public function __construct()
    {
        $this->baseUri = config('services.unidades.base_uri');
        
    }
}