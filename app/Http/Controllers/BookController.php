<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Noticia;

use App\Models\User;

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

        $noticia->Fake=0;
        // Image upload
        if($request->hasFile('Imagem') && $request->file('Imagem')->isValid()){
            $requestImagem = $request->Imagem;
            
            $extension=$requestImagem->Extension();
            
            $imageName=md5($requestImagem->getClientOriginalName().strtotime("now")).".".$extension;
            
            $requestImagem->move(public_path('img/noticias'),$imageName);
            
            $noticia->Imagem=$imageName;
        }
        if($noticia->Titulo && $noticia->Texto && $noticia->Imagem){
            $user=auth()->user();
            $noticia->ID_Usuario=$user->id;
    
            $noticia->save();
    
            return redirect('/')->with('msg','Notícia cadastrada com sucesso!');
        }else{
            return view('noticias.erro');
        }
        
    }    
    
    
    public function exibirNoticia($id)
    {
        $noticia=Noticia::find($id);

        $autorNoticia=User::where('id',$noticia->ID_Usuario)->first()->toArray();
        
        return view('noticias.exibir',['noticia'=>$noticia,'autorNoticia'=>$autorNoticia]);
    }
    
    public function editarNoticia($id)
    {
        $noticia=Noticia::find($id);

        return view('noticias.editar',['noticia'=>$noticia]);
    }

    public function updateNoticia(Request $request){

        $data = $request->all();

        // Image upload
        if($request->hasFile('Imagem') && $request->file('Imagem')->isValid()){
            $requestImagem = $request->Imagem;
  
            $extension=$requestImagem->Extension();
  
            $imageName=md5($requestImagem->getClientOriginalName().strtotime("now")).".".$extension;
  
            $requestImagem->move(public_path('img/noticias'),$imageName);
  
            $data['Imagem']=$imageName;
          }

        Noticia::find($request->id)->update($data);

        return redirect('/')->with('msg','Notícia editada com sucesso!');
    }

    public function listarNoticiasFake() {
        $noticias =Noticia::where('Fake','>',0);
        return view('noticias.listar-fake',['noticias'=>$noticias]);
    }
}