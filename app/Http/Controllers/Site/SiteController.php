<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function __construct(){
        // $this->middleware('auth');

        // verifica autenticação somente nas routes listadas
        // $this->middleware('auth')
        // ->only([
        //     'contato',
        //     'categoria'
        // ]);

        // verifica autenticação em todas as routes, menos as listadas
        // $this->middleware('auth')
        // ->except([
        //     'index',
        //     'contato'
        // ]);
    }

    public function index()
    {
    	return 'Home Page do Site';
    }

    public function contato()
    {
    	return 'Página de Contato';
    }

    public function categoria($id)
    {
    	return "Listagem dos posts da categoria: {$id}";
    }

    public function categoriaOp($id = 1)
    {
    	return "Listagem dos posts da categoria: {$id}";
    }
}