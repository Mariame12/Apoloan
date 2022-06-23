<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class AnnonceController extends Controller
{
 
  function list(){
      if (isset($_COOKIE['token'])) {
        $response=Http::withHeaders(['Authorization' =>"Bear ".$_COOKIE['token']])->get("http://www.oumardev.com:5400/apoloanapi/annonce/list")->json();
        return view('Annonces.list',['response'=>$response]);
      // echo var_dump($response); 
      }  
      else{
          return view('Presentation.accueil');
      }
      
    }
    function postlist(){
      if (isset($_COOKIE['token'])) {
        $response=Http::withHeaders(['Authorization' =>"Bear ".$_COOKIE['token']])->get("http://www.oumardev.com:5400/apoloanapi/post/list")->json();
        return view('Annonces.listpost',['response'=>$response]);
      //echo var_dump($response); 
      }  
      else{
          return view('Presentation.accueil');
      }
      
    }
    public function Create( Request $request){
     if (isset($_COOKIE['token'])) {
      return view('Annonces.create');
     }  
      else{
        return view('Presentation.accueil');
      }
  }

    public function store(Request $request){
    
      $response=Http::withHeaders(['Authorization' =>"Bear ".$_COOKIE['token']])->post("http://www.oumardev.com:5400/apoloanapi/annonce/create", [
        'type'=> $request->type,
        'duree'=> $request->duree,
        'montant'=> intval($request->montant),
        'modalitePaiement'=>intval($request->modalitePaiement)
        
    ])->json();
      //echo var_dump($response); 
      return redirect()->route('annoncelist');
  }

  public function edit()
    {
        return view('Annonces.edit');
    } 

    public function update(Request $request)
    {
        //
        $this->validate($request, [
          'duree'=>'required',
          'montant' => 'required',
          'modalitePaiement' => 'required',
               
        ]);
        $response=Http::withHeaders(['Authorization' =>"Bear ".$_COOKIE['token']])->patch('http://www.oumardev.com:5400/apoloanapi/annonce', [
          'idAnnonce'=>intval( $request->idAnnonce),
          'duree'=> $request->duree,
          'montant'=> intval($request->montant),
          'modalitePaiement'=>intval($request->modalitePaiement)
        ])->json();
        return redirect()->route('annoncelist');
       // echo var_dump($response);
        
    }
    public function show_delete()
    {
        return view('Annonces.delete');
    } 

    public function delete(Request $request)
    {
      $response=Http::withHeaders(['Authorization' =>"Bear ".$_COOKIE['token']])->delete('http://www.oumardev.com:5400/apoloanapi/annonce', [
        'idAnnonce'=>intval( $request->idAnnonce),
      ])->json();
      echo var_dump($response);
      return redirect()->route('annoncelist');
    }

    
}
