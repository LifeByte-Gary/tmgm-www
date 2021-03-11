<?php


namespace App\Traits;


use App\Models\ExceptionLog;
use Illuminate\Support\Facades\Request;
use Throwable;

trait ExceptionLogTrait
{
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
