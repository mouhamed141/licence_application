<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class urlController extends Controller
{
    //
    public function home(){
        return view("layouts.home");
    }

    public function indexAdmin(){

        return view("admin.dashboard-admin");
    }

    public function userAdmin(){

        return view("admin.utilisateur");
    }

    public function indexAssistant(){

        return view("assistant.dashboard-assistant");
    }


    public function indexBureau(){

        return view("bureau.dashboard-bureau");
    }

    public function indexDivision(){

        return view("division.dashboard-division");
    }

}
