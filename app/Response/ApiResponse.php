<?php

namespace App\Response;

use Illuminate\Contracts\Support\Responsable;

class ApiResponse implements Responsable
{
    /**
     * Create a new class instance.
     */
    protected int $httpCode;
    protected string $errorMessage;
    protected array $result;
    protected array $errors;

    public function __construct(int $httpCode, array $result = [], string $errorMessage = '')
    {
        //
        $this->httpCode = $httpCode;
        $this->result = $result;
        $this->errorMessage = $errorMessage;
    }

    public function toResponse($request)
    {
        $payload = match (true) {
            $this->httpCode >= 500 => ['error_message' => 'Erro de Servidor'],
            $this->httpCode >= 400 => ['error_message' => $this->errorMessage, 'result' => $this->result],
            $this->httpCode >= 200 => ['result' => $this->result]
        };

        return response()->json(
            data : $payload,
            status:$this->httpCode,
            options: JSON_UNESCAPED_UNICODE

        );
    }

    public static function ok(array $data){
        return new static(200,$data);
    }

    public static function created(array $data){
        return new static(201,$data);
    }

    public static function notFound(array $data ,string $errorMessage = "Item nao encontrado"){
        return new static(404,$data, errorMessage: $errorMessage);
    }
    public static function serverError(string $errorMessage = "Erro de Servidor"){
        return new static(500, errorMessage: $errorMessage);
    }
}
