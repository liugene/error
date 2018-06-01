<?php

namespace linkphp\error\exception;

use linkphp\error\ErrorHandle;
use linkphp\error\Error;

class Console extends ErrorHandle
{

    public function handle(Error $error)
    {
        $error_info = "run {$error->getErrorType()}: \n";
        $error_info .= "message: {$error->getMessage()} \n";
        $error_info .= "file: {$error->getFile()} \n";
        $error_info .= "line: {$error->getLine()} \n";
        $error_info .= "datetime: {$error->getTimestamp()} \n";
        $error_info .= "trace: {$error->getTrace()} \n";

        exit($error_info);
    }

}