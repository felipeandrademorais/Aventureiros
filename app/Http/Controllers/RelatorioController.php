<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Saude;
use PDF;

class RelatorioController extends Controller
{
    public function index()
    {
        $cadastro = Saude::all();  
        
        $cadastro = DB::table('cadastro')
            ->join('saude', 'cadastro.id', '=', 'saude.id_cadastro')
            ->get();

        $relatorio = PDF::loadView('relatorio/cadastro', compact('cadastro'));

        return $relatorio->setPaper('a4')->stream('relatorio.pdf');
    }
}
