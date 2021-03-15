<?php


namespace App\Traits;


use App\Models\ExceptionLog;
use Illuminate\Support\Facades\Request;
use JetBrains\PhpStorm\ArrayShape;
use Throwable;

trait ExceptionLogTrait
{
    #[ArrayShape(['user_ip' => "null|string", 'code' => "int", 'message' => "string", 'file' => "string", 'line' => "int", 'trace' => "array|string", 'request_url' => "mixed|string", 'request_data' => "false|mixed|string"])]
    public static function convertException(Throwable $exception, $request = null, $stringOnly = false): array
    {
        return [
            'user_ip' => Request::ip(),
            'code' => $exception->getCode(),
            'message' => $exception->getMessage(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
            'trace' => $stringOnly ? $exception->getTraceAsString() : $exception->getTrace(),
            'request_url' => is_null($request) ? '' : $request->fullUrl(),
            'request_data' => is_null($request) ? '' : ($stringOnly ? json_encode($request->all()) : $request->all()),
        ];
    }

    public static function logException(Throwable $exception, $request = null)
    {
        $data = self::convertException($exception, $request, true);
        ExceptionLog::create($data);
    }
}
