<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;


class SiteController extends Controller
{
    
    /* Retourne le view de l'accueil */
    public function accueil()
    {
        $accueil = Site::all();
        return view("interface.accueil");
    }


    /* Retourne la deuxième page */
    public function uneAutrePage()
    {
        return view("interface.pagedeux");
    }
    

    /* Ceci retourne la page du formulaire, en ajoutant en même temps le formulaire qui est en extends */
    public function envoiFichier(){
        $accueil = Site::all();
        return view("form.envoifichier");
    }

    
}
