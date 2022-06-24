<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //metodo  para la pagina principal y demas enlaces del menui

    public function index(){

        $posts = Post::latest('id')->paginate(3);
        

        return view('home.index', compact('posts'));
    }

  


    //metodo quienes somos
    public function whoweare(){
        return view('home.quienes-somos');
    }

    //atencion al ciudadano
    public function attention(){
        return view('home.atencion-al-ciudadano');
    }

    // formulario de contacto y datos de contacto 
    public function contact(){
        return view('home.contacto');
    }

    //glosario de terminos claves
    public function glossary(){
        return view('home.glosario');
    }

    //preguntas frecuentes
    public function questions(){
        return view('home.preguntas');
    }

    //normativas y legalidades 
    public function regulations(){
        return view('home.normativas');
    }

}
