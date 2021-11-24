<?php

namespace App\Http\Controllers; 

class MensageController extends Controller
{
    public function store()
    {

       request()->validate([
           'nombre'

       ]); 

        
        return 'Datos Validados'; 
    }

}


?>