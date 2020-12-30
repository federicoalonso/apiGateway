<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Traits\ApiResponses;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use App\services\UsersServices;

class UserController extends Controller
{
    use ApiResponses;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $usersService;

    public function __construct(UsersServices $usersService)
    {
        $this->usersService = $usersService;
    }
/**
     * retorna lista de usuarios
     */
    public function index(){

        
      return $this->successResponse($this->usersService->obtenerUsers());
        
    }

    
    /**
     * crea instancia de usuarios
     */
    public function store(Request $request)
    {
        

        
    }

    /**
     * mostrar info de un usuario en particular
     */
    public function show($usuario){

        
        
    }

    /**
     * actualiza informacion de usuarios
     */
    public function update(Request $request, $usuario){

       

    }

    
    /**
     * remueve un usuario
     */
    public function destroy($usuario){

      
        
    }
}
