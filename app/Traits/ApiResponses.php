<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponses
{
    /**
     * Construye una respuesta de éxito
     * @param string|array $data
     * @param int $code
     * @return Illuminate\Http\Response
     */
    public function successResponse($data, $code = Response::HTTP_OK){
        return response($data, $code)->header('Content-Type', 'application/json');
    }

    /**
     * Construye una respuesta de error
     * @param string $mensaje
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($mensaje, $code){
        return response()->json(['error' => $mensaje, 'code'=>$code], $code);
    }

    /**
     * Construye un mensaje de erro
     * @param string $mensaje
     * @param int $code
     * @return Illuminate\Http\Response
     */
    public function errorMessage($mensaje, $code){
        return response($mensaje, $code)->header('Content-Type', 'application/json');
    }

    /**
     * Construye una respuesta de éxito
     * @param string|array $data
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function validResponse($data, $code = Response::HTTP_OK){
        return response()->json(['data' =>$data], $code);
    }
}