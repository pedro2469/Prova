<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;

use App\Models\ModelProduto;

class ProdutoController extends Controller
{

    private ModelProduto $objProduto;

    public function __construct()
    {
        $this->objProduto = new ModelProduto();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto=$this->objProduto->all();
        return view('produtos', compact('produto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("createProduto");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoRequest $request)
    {

        $cadastro = $this->objProduto->create([

           'codigo'=>$request->codigo,
           'nome'=>$request->nome,
           'precoUnitario'=>$request->preco

        ]);

        if($cadastro){
            return redirect("produtos");
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
        $produto = $this->objProduto->find($id);
        return view('visualizarProduto', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = $this->objProduto->find($id);
        return view('createProduto', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdutoRequest $request, $id)
    {
       $this->objProduto->where(['id'=>$id])->update([

           'id' => $id,
           'codigo'=>$request->codigo,
           'nome' =>$request->nome,
           'precoUnitario'=>$request->preco

       ]);

       return redirect('produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this->objProduto->destroy($id);
        return($del)?"sim":"nao";
    }


}
