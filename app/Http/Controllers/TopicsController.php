<?php

namespace App\Http\Controllers;

use App\Topics;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function list(){
        $topicList=Topics::all();
        // dd($topicList);
        return view('dashboards.topics-list',compact('topicList'));
    }
    public function topicDiscussionList($slug){
        $topic=Topics::where('topic_slug',$slug)->first();
        $topicList=$topic->discuss()->paginate(8);
        // dd($topic);
        return view('dashboards.discussion-by-topics',compact('topic','topicList'));
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
     * @param  \App\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function show(Topics $topics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function edit(Topics $topics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topics $topics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topics  $topics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topics $topics)
    {
        //
    }
}
