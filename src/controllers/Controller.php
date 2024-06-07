<?php

class Controller {
    public function render($fileName) {
        $path = './views/' . $fileName . ".php";
        if(file_exists($path)){
            require_once $path;
        } else {
            echo "File not found";
        }
    }
}