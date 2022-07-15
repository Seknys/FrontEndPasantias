<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class homeController extends Controller
{

    public function index() //Funcion index es la que se ejecuta al cargar la pagina y encargada de crear la vista home
    {
        return view('home'); //Retorna la vista home.blade.php que esta en la carpeta resources/views
    }

 
   
    
    public function store(Request $request) // Funcion store es la que se ejecuta al enviar el formulario y encargada de guardar los datos  
    {
        $this->validate($request, [ //Validacion de los datos del formulario para que no se envie hasta que el usuario ingrese algo en cada campo
            'github_name' => 'required'
        ]);
        $user = $request; //Se guarda el valor del campo github_name en la variable user
        
         return view('display', compact('user')); //Redirecciona a la vista displayUser con el parametro github_name que es el que se ingreso en el formulario
    
        
    }
 

}
