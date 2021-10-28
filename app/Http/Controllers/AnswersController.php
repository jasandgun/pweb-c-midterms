<?php

namespace App\Http\Controllers;

use App\Answers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class AnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendAnswer(Request $request,$dis_id){
        try {
            Answers::create(
            [
                    'answer_user_id' =>  $request->session()->get('id'),
                    'answer_discuss_id'=> $dis_id,
                    'answer_content'=> $request->input('komentar'),
            ]
            );
            // Session::flash('success', "Forum Diskusi Berhasil dibuat");
            // return redirect('create-discussion');
            return back();

        } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
            $errorMsg = $e->errorInfo[2];
            if ($errorCode == 1062) {
                return back();;
            }
            // Session::flash('error', $errorMsg);
            return back();;
            // return view('dashboards.create-discussion');
        }
        
        
    }
    public function answerList(Request $request){
        $answerList=Answers::where('answer_user_id',$request->session()->get('id'))->orderBy('created_at')->paginate(10);
        
        return view('dashboards.myanswer',compact('answerList'));
    }

    public function editAnswer(Request $request,$answ_id){
        // dd($request->input('pertanyaan'));
        // $answ= Discuss::where('discuss_id',$disc_id)->limit(1);
        $answ= Answers::find($answ_id);
        $answ->answer_status= $request->input('status');
        $answ->answer_content= $request->input('comment');
        $answ->save();
        return back();

    }
    public function deleteAnswer(Request $request,$answ_id){
        // dd($request->input('pertanyaan'));
        // $answ= Discuss::where('discuss_id',$disc_id)->limit(1);
        $answ= Answers::find($answ_id);
        $answ->delete();
        return back();

    }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function show(Answers $answers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function edit(Answers $answers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answers $answers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answers $answers)
    {
        //
    }
}
