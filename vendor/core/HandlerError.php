<?

namespace vendor\core;

    class HandlerError
    {
        public function __construct()
        {
            if(DEBUG)
                error_reporting(-1);
            else error_reporting(0);

            set_error_handler([$this,'errorHandler']);
            register_shutdown_function([$this, 'fatalErrorHandler']);
            set_exception_handler([$this, 'exceptionHendler']);
        }

        public function errorHandler($errno, $errstr, $errfile, $errline)
        {
            $this->logErrors($errstr, $errfile, $errline);
            $this->displayError($errno, $errstr, $errfile, $errline);

            return true;
        }

        private function displayError($errno, $errstr, $errfile, $errline, $response = 500)
        {
            http_response_code($response);
            if($response == 404)
            {
                include WWW . '/errors/404.html';
                //die;
            }
            if(DEBUG)
                include WWW . '/errors/dev.php';
            else include WWW . '/errors/prod.php';
            die;
        }

        public function fatalErrorHandler()
        {
            $error = error_get_last();
            
            if(!empty($error) AND $error['type'] & ( E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR))
            {
                $this->logErrors($error['message'], $error['file'], $error['line']);
                ob_end_clean();
                $this->displayError($error['type'], $error['message'], $error['file'], $error['line']);
            }
            else ob_end_flush();
        }

        public function exceptionHendler($e)
        {
            $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
            $this->displayError('Exception', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
        }

        private function logErrors($message = '', $file = '', $line = '')
        {
            error_log("[" . date('Y-m-d H:i:s') . "] Error text: {$message} | File: {$file} | 
            Line: {$line}\n=================================================================\n", 3, ROOT .'/tmp/errors.log');
        }
    }

?>