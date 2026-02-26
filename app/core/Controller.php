<?php

class Controller {
    public function view(string $view, ?array $data = null){

        extract($data);

        $path = __DIR__ . "/../views/$view.php";

        if(file_exists($path))
            require_once $path;
        else 
            print 'A view solicitada não foi encontrada';
    }
}