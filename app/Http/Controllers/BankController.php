<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function refilsansbank()
    {
         return view('Bank.refil');
    }


    public function active()
    {
        return view('Bank.activation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function activestore(Request $request)
    {
        $response=Http::withHeaders(['Authorization' =>"Bear ".$_COOKIE['token']])->post("http://www.oumardev.com:5400/apoloanapi/fetchtoecobank", [
            'Name'=> $request->Name,
            'CardNumber'=> $request->CardNumber,
            'Expiry'=>$request->Expiry,
            'CVV'=>$request->CVV
            
        ])->json();
        //   echo var_dump($response); 
          return redirect()->route('userinfo');
    }
    public function refilsansbankstore(Request $request)
    {
        $response=Http::withHeaders(['Authorization' =>"Bear ".$_COOKIE['token']])->post("http://www.oumardev.com:5400/apoloanapi/useraccount/refil", [
            'montant'=> intval($request->montant)
        ])->json();
        // echo var_dump($response);
        return redirect()->route('userinfo');
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
