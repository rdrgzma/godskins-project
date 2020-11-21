<?php

namespace App\Http\Controllers;

use App\Skin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $skins= Skin::all();
       return view('site.skin-create',compact('skins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.skin-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skin = new Skin();
        $data = $request->only('nome','descricao','valor','raridade','image');
        if ($request->hasFile('image') && $request->file('image')->isValid()){
           $skin->imagem = $request->image->store('skins');
        }
        $skin->nome = $data['nome'];
        $skin->descricao = $data['descricao'];
        $skin->valor = $data['valor'];
        $skin->raridade = $data['raridade'];
        $skin->save();
        return redirect()->route('skin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        $skin=Skin::findOrFail($id);
        return view('site.skin', compact('skin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skin  $skin
     * @return \Illuminate\Http\Response
     */
    public function edit(Skin $skin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skin  $skin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skin $skin)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skin  $skin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = $request->only('id');
       $skin = Skin::find($data['id']);
       if(Storage::exists($skin->imagem)){
           Storage::delete($skin->imagem);
       }
       $skin->delete();
        return redirect()->route('skin.index');
    }
}
