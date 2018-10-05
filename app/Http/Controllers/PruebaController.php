<?php

namespace Laradex\Http\Controllers;

use Laradex\Http\Controllers\Controller;

class PruebaController extends Controller {
    public function prueba1($param, $param2){
        return 'Estoy dentro de PruebaController y mi nombre es '.$param.' '.$param2;
    }
}

