<?php

namespace App\Http\Controllers;
use App\Faq;
use DB;
use Illuminate\Http\Request;

class FaqController extends Controller
{

  // la fonction d'affichage du faqs 
    public function getFaqs()
    {  
        $faqs=Faq::all();
        if($faqs)
        {
            return view('faqs',['faqs'=>$faqs]);
        }else{
            $faqs=array();
            return view('faqs',['faqs'=>$faqs]);
        }
    }
// la fonction de creation du faqs

public function create(Request $request)
{   
    $validatedData = $request->validate([
        'question' => 'required',
        'reponse' => 'required',
    ]);
    $faq=Faq::create([
        'question' => $request->question,
        'reponse' => $request->reponse,
    ]);
    return  redirect('/faqs');
}

}
