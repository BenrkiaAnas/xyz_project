<?php

namespace App\Http\Controllers;
use App\Faq;
use DB;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    // Prevent Other To Access These Routes
    public function __construct()
    {
        $this->middleware('auth')->except(['showFaqClient']);
    }
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
            return view('back.faqs')->with('faqs',$faqs);
        }else{
            $faqs=array();
            return view('back.faqs')->with('faqs',$faqs);
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

    return view('back.editFaq',['faq'=>$faq,'question_ar'=>$question->ar,'reponse_ar'=>$reponse->ar,'question'=>$question->fr,'reponse'=>$reponse->fr]);

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
    $ar_d['fr'] = $request->question;
    $ar_d['ar'] = $request->question_ar;

    $ar_rr['fr'] = $request->reponse;
    $ar_rr['ar'] = $request->reponse_ar;
    $questions = json_encode($ar_d);
    $reponses = json_encode($ar_rr);
    $faq->question = $questions;
    $faq->reponse = $reponses;
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


    // Function Show Faq's In The Client Side
    public function showFaqClient()
    {
        $faqs=Faq::where("status",1)->get();
        $faqs =$faqs->toArray();
        foreach($faqs as $key => $val)
        {
            $faqs[$key]['question']=json_decode($val['question'],true);
            $faqs[$key]['reponse']=json_decode($val['reponse'],true);
        }
        if($faqs)
        {
            return view('front.faq_page')->with('faqs',$faqs);
        }else{
            $faqs = array();
            return view('front.faq_page')->with('faqs',$faqs);
        }

    }

}
