<?php

namespace App\Http\Controllers;
use App\Newsletter;
use Illuminate\Http\Request;

class NewslettersController extends Controller
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
    public function store(Request $request)
    {
        $news =new Newsletter();
        $news->nom=$request->nom;
        $news->email=$request->email;
        $news->save();
                return redirect('/');
    }

    
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mail()
    {
        $titre = 'Newletters';
        $nom ->this->nom;
        $email->this->email;
        $contenu = 'Bonjour! <br />Nom  : '. $nom.'<br />';
        $from = "From: hello <jbado96àgmail.com>\nMime-Version:";
        $from .= " 1.0\nContent-Type: text/html; charset=ISO-8859-1\n";
        mail($email,$titre,$contenu,$from)->with('envoyer avec succès');
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
