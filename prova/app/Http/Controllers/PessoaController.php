<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoaRequest;

use App\Models\Model\ModelPessoa;

class PessoaController extends Controller
{

    private ModelPessoa $objPessoa;

    public function __construct()
    {
        $this->objPessoa=new ModelPessoa();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoa=$this->objPessoa->all();
        return view('index', compact('pessoa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("createPessoa");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PessoaRequest $request)
    {

        $cadastro = $this->objPessoa->create([
            'nome'=>$request->nome,
            'cpf'=>$request->cpf,
            'dataNascimento'=>$request->dataNascimento
        ]);
        if($cadastro){
            return redirect("pessoas");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pessoa= $this->objPessoa->find($id);
        return view ('visualizarPessoa', compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = $this->objPessoa->find($id);
        return view('createPessoa',compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PessoaRequest $request, $id)
    {
        $this->objPessoa->where(['id'=>$id])->update([

            'id'=>$id,
            'nome'=>$request->nome,
            'cpf'=>$request->cpf,
            'dataNascimento'=>$request->dataNascimento

        ]);
        return redirect('pessoas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objPessoa->destroy($id);

        return ($del)?"Sim":"Nao";
    }
}
