<?php


namespace App\classes;

class ErrorHandler
{
    public function handleErrors($error_number, $error_message, $error_file, $error_line)
    {
        $error = "[{$error_number}] An Error occurred in file {$error_file}, on line $error_line: $error_message}";
        $environment = getenv('APP_ENV');

        if($environment === 'production' )
        {
            $whoops = new \Whoops\Run;
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
            $whoops->register();
        }else{
            $data = [
                'to' => 'jasoncharlesrogers@gmail.com',
                'subject' => 'System Error',
                'view' => 'Errors',
                'name' => 'admin',
                'body' => $error
            ];
            ErrorHandler::emailAdmin($data)->outputFriendlyError();
        }
    }
    public function outputFriendlyError()
    {
        ob_end_clean();
        view('errors/generic');
        exit;
    }

    public static function emailAdmin($data)
    {
        $mail = new Mail();
        $mail->send($data);
        return new static;
    }
}