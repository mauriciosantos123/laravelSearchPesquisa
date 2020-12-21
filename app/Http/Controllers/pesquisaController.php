<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesquisas;

class pesquisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        //search

        //$search_text = $_GET['search'];
        $search_text = $request->search;
        if(strlen($search_text)> 0){
        $pesquisas = Pesquisas::where('nome','LIKE','%'.$search_text.'%')->orwhere('email','LIKE','%'.$search_text.'%')->orwhere('telefone','LIKE','%'.$search_text.'%')->get();
        }else {


        $search_text = $request->q;
            if(strlen($search_text)>0){

                $pesquisas = Pesquisas::where('nome','LIKE',$search_text.'%')->get();
            }else{

            
        
        
        $pesquisas = Pesquisas::orderBy('nome')->get();
 
            }
        }


   //return view('browse.index', compact('users'));
        
        return view('layout.Main', compact('pesquisas') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    return view('layout.create', ['action'=>route('registrar_novo'), 'method'=>'post']);


    if($request->has('Pesquisa')){
        $data['$pesquisa'] = pesquisa::search($request->get('Pesquisa'))->get();  
    }else{
        $data['$pesquisa'] = pesquisa::get();
    }
    return view('layout.Main', $data);
   


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
   
        // dd($request->all());
        pesquisas::create
        ([
                'nome' => $request->nome,
                'email' => $request->email,
                'telefone' => $request->telefone,


        ]);
        $url = $request->get('redirect_to', route('layout.Main'));
        if (! $request->has('cancel') ){
            $dados = $request->all();
            Equipamento::create($dados);
            $request->session()->flash('message', 'Equipamento cadastrado com sucesso');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->to($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
