<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UseController extends Controller
{
    public function loginAdmin()
    {
        return view('admin.admin-login');
    }

    public function homeAdmin()
    {
        return view('admin.admin-home');
    }

    public function formsAdmin()
    {
        return view('admin.admin-forms');
    }

    public function login()
    {
        return view('front.login');
    }

    public function home()
    {
        return view('front.home');
    }

    public function agendamento()
    {
        return view('front.form-agendamento');
    }

    public function contato()
    {
        return view('front.contato');
    }

    public function feedback()
    {
        return view('front.feedback');
    }

    public function cursoHome()
    {
        return view('front.home-curso');
    }

    public function portifolio()
    {
        return view('front.protifolio');
    }

    public function cursoCards()
    {
        return view('front.curso.cards-curso');
    }
}
