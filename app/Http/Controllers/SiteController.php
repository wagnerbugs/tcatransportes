<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Função responsável pelo carregamento da página inicial
     *
     * @return void
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Função responsável pelo carregamento da página institucional - sobre nós
     *
     * @return void
     */
    public function sobre()
    {
        return view('sobre');
    }

    /**
     * Função responsável pelo carregamento da página serviços
     *
     * @return void
     */
    public function servicos()
    {
        return view('servicos');
    }

    /**
     * Função responsável pelo carregamento da página contato
     *
     * @return void
     */
    public function contato()
    {
        return view('contato');
    }

    /**
     * Função responsável pelo armazenamento do contato
     *
     * @return void
     */
    public function contatoForm()
    {
        return view('contato');
    }
}
