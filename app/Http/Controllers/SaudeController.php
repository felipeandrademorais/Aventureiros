<?php

namespace App\Http\Controllers;

use App\Saude;
use Exception;
use Illuminate\Http\Request;

class SaudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('saude');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensagem = null;

        try{
            Saude::create($request->all());
            $mensagem = true;
        }catch(Exception $e){
            throw new Exception("Erro ao enviar o cadastro! Entre em contato conosco através da aba contato");
        }
        
        return view('home', ['mensagem' => $mensagem]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Saude  $saude
     * @return \Illuminate\Http\Response
     */
    public function show(Saude $saude)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Saude  $saude
     * @return \Illuminate\Http\Response
     */
    public function edit(Saude $saude)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Saude  $saude
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saude $saude)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Saude  $saude
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saude $saude)
    {
        //
    }
}
