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
    if( $request->action === "refresh")
    return  redirect('/faqForm');
    elseif($request->action === "list")
    return redirect('faqs');
}
//la fonction d'edition de faq

public function edit(Request $request,$id)
{
    $faq=Faq::findOrFail($id);
    return view('editFaq',['faq'=>$faq]);

}
public function update(Request $request,$id)
{
    $validatedData = $request->validate([
        'question' => 'required',
        'reponse' => 'required',
    ]);
    $faq=Faq::findOrFail($id);
    $faq->question=$request->question;
    $faq->reponse=$request->reponse;
    $faq->save();
    return redirect('faqs');
}

/*cette fonction permet de retourner la liste des users associeé a une alerte si deja existé */
public function activeDesactive(Request $request)
{
   $faq=Faq::find($request->id);
   $faq->status=$request->status;
   $faq->update();
   if($faq->update()){
    return Response()->json('success');
   }else{
    return Response()->json('error');
   }
}

}
