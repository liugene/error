<?php

namespace linkphp\error\exception;

use linkphp\error\ErrorHandle;
use linkphp\error\Error;

class Json extends ErrorHandle
{

    public function handle(Error $error)
    {
        $error_info = [
            "type" => "run {$error->getErrorType()}",
            "errorMessage" => $error->getMessage(),
            "errorFile" => $error->getFile(),
            "errorLine" => $error->getLine(),
            "errorTime" => $error->getTimestamp(),
            "errorTrace" => $error->getTrace(),
        ];

        exit(json_encode($error_info,JSON_UNESCAPED_UNICODE));
    }

}