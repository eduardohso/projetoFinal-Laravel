<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Noticia;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias=Noticia::all();
        return view('index',['noticias'=>$noticias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cadastroNoticia()
    {
        return view('noticias.cadastro');
    }  
    
    public function salvarNoticia(Request $request)
    {
        $noticia = new Noticia;

        $noticia->Titulo=$request->Titulo;
        $noticia->Texto=$request->Texto;
        $noticia->ID_Usuario=0;
        $noticia->Fake=0;

        // Image upload
        if($request->hasFile('Imagem') && $request->file('Imagem')->isValid()){
          $requestImagem = $request->Imagem;

          $extension=$requestImagem->Extension();

          $imageName=md5($requestImagem->getClientOriginalName().strtotime("now")).".".$extension;

          $requestImagem->move(public_path('img/noticias'),$imageName);

          $noticia->Imagem=$imageName;
        }

        $noticia->save();

        return redirect('/')->with('msg','Notícia cadastrada com sucesso!');
    }    
    
    public function editarNoticia()
    {
        return view('noticias.editar');
    }
    
    public function exibirNoticia($id)
    {
        $noticia=Noticia::find($id);

        return view('noticias.exibir',['noticia'=>$noticia]);
    }
}