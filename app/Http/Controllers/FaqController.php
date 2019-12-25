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
        $faqs =$faqs->toArray();
        foreach($faqs as $key => $val)
        {
            $faqs[$key]['question']=json_decode($val['question'],true);
            $faqs[$key]['reponse']=json_decode($val['reponse'],true);
        }
       // print_r($faqs);exit;
        if($faqs)
        {
            return view('back.faqs',['faqs'=>$faqs]);
        }else{
            $faqs=array();
            return view('back.faqs',['faqs'=>$faqs]);
        }
    }
// la fonction de creation du faqs

public function create(Request $request)
{   
    $validatedData = $request->validate([
        'question' => 'required',
        'reponse' => 'required',
        'question_ar'=>'required',
        'reponse_ar'=>'required',
    ]);
    $ar_d['fr'] = $request->question;
    $ar_d['ar'] = $request->question_ar;

    $ar_rr['fr'] = $request->reponse;
    $ar_rr['ar'] = $request->reponse_ar;
    $questions=json_encode($ar_d);
    $reponses=json_encode($ar_rr);
   

    $faq=Faq::create([
        'question' => $questions,
        'reponse' => $reponses,
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
    $reponse= json_decode($faq->reponse);
    $question=json_decode($faq->question);
    return view('back.editFaq',['faq'=>$faq,'question_ar'=>$question[1],'reponse_ar'=>$reponse[1],'question'=>$question[0],'reponse'=>$reponse[0]]);

}
public function update(Request $request,$id)
{
    $validatedData = $request->validate([
        'question' => 'required',
        'reponse' => 'required',
        'question_ar'=>'required',
        'reponse_ar'=>'required',
    ]);
    $faq=Faq::findOrFail($id);
    $questions=json_encode([$request->question,$request->question_ar], JSON_UNESCAPED_UNICODE);
    $reponses=json_encode([$request->reponse,$request->reponse_ar], JSON_UNESCAPED_UNICODE);
    $faq->question=$questions;
    $faq->reponse=$reponses;
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
