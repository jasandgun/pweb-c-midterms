<?php

namespace App\Http\Controllers;

use App\Discuss;
use App\Answers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class DiscussController extends Controller
{
    public function createDiscussion(Request $request){
        try {
            Discuss::create(
                [
                    'discuss_user_id' =>  $request->session()->get('id'),
                    'discuss_topic_id'=> $request->input('topic'),
                    'discuss_title'=> $request->input('judul'),
                    'discuss_content'=> $request->input('pertanyaan'),
                ]
            );
            Session::flash('success', "Forum Diskusi Berhasil dibuat");
            return redirect('create-discussion');
            // return view('dashboards.create-discussion');

        } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
            $errorMsg = $e->errorInfo[2];
            if ($errorCode == 1062) {
                return redirect('/');
            }
            Session::flash('error', $errorMsg);
            return redirect('create-discussion');
            // return view('dashboards.create-discussion');
        }
        
        
    }
    public function createList(Request $request){
        $discussList=Discuss::where('discuss_user_id', $request->session()->get('id'))->paginate(10);
        // dd($discussList);
        return view('dashboards.myquestion',compact('discussList'));
    }
    public function recentList(Request $request){
        $recentDiscussList=Discuss::orderBy('updated_at', 'DESC')->paginate(10);
        // dd($discussList);
        return view('dashboards.dashboard',compact('recentDiscussList'));
    }
    public function searchList(Request $request){
        $searchDiscussList=Discuss::Where('discuss_title', 'like', '%' . $request->search . '%')->orderBy('updated_at', 'DESC')->paginate(10);
        // dd($discussList);
        return view('dashboards.search',compact('searchDiscussList'));
    }
    public function discussion(Request $request,$dis_id ){
        $discussion=Discuss::where('discuss_id',$dis_id)->first();
        
        $answer=Answers::where('answer_discuss_id',$dis_id)->get()->sortBy('created_at');
        // dd($answer);
        return view('dashboards.discussion',compact('discussion','answer'));
    }

    public function editDiscussion(Request $request,$disc_id){
        // dd($request->input('pertanyaan'));
        // $discuss= Discuss::where('discuss_id',$disc_id)->limit(1);
        $discuss= Discuss::find($disc_id);
        $discuss->discuss_title= $request->input('judul');
        $discuss->discuss_topic_id= $request->input('topic');
        $discuss->discuss_status= $request->input('status');
        $discuss->discuss_content= $request->input('pertanyaan');
        $discuss->save();
        return back();

    }
    public function deleteDiscussion(Request $request,$disc_id){
        // dd($request->input('pertanyaan'));
        // $discuss= Discuss::where('discuss_id',$disc_id)->limit(1);
        $discuss= Discuss::find($disc_id);
        $discuss->delete();
        return redirect(route('myquestion'));

    }
    
    


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
     * @param  \App\Discuss  $discuss
     * @return \Illuminate\Http\Response
     */
    public function show(Discuss $discuss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discuss  $discuss
     * @return \Illuminate\Http\Response
     */
    public function edit(Discuss $discuss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discuss  $discuss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discuss $discuss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discuss  $discuss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discuss $discuss)
    {
        //
    }
}
