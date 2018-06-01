<?php

namespace linkphp\error;

class ErrorHandle
{

    public function handle(Error $error)
    {
        $data = [
            'file'    => $error->getFile(),
            'line'    => $error->getLine(),
            'error_type' => $error->getErrorType(),
            'message'   => $error->getMessage(),
            'datetime'  => $error->getTimestamp(),
            'trace'    => $error->getTrace()
        ];
        extract($data);
        include($error->getErrorView());
    }

}
