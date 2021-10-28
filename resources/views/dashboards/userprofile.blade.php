@extends('dashboards.layout')

@section('title', "User Profile")

@section('stylesheets')
<style>
.no-pointer{
  cursor: default;  

}

</style>

@endsection
@section('content-header', "User Profile")
@section('content')

<div class="container-fluid">
    <div class="container mt-5">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-header">
                    <h3 class="card-title">User Profile</h3>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            {{-- <div class="col-md-12"> --}}
                                <div class="col-md-3 menu">
                                    <div class="sidemenu text-center pt-2">
                                        <img src="{{asset($userData->user_image)}}" alt="user" width="150px" class="img-fluid rounded-circle my-3 border border-warning shadow">
                                        <ul class="list-group">
                                            <a href="{{  Session::get('id')==$userData->user_id ? "/myquestion" : "javascript:void(0) " }}"  class="list-group-item btn-outline-secondary {{  Session::get('id')==$userData->user_id ? "" : "no-pointer" }}">Question : <strong>{{$userData->discuss->count()}}</strong> </a>
                                            <a href="{{  Session::get('id')==$userData->user_id ?  "/myanswer" : "javascript:void(0) " }}" class="list-group-item btn-outline-secondary {{  Session::get('id')==$userData->user_id ? "" : "no-pointer" }}">Answer : <strong>{{$userData->answers->count()}}</strong></a>
                                          </ul>
                                    </div>
                                </div>
                                <div class="col-md-9 content p-2">
                                    @if (Session::get('id')==$userData->user_id)
                                        <a href=" {{route('config',Session::get('id'))}} " >
                                            <span class="text-muted float-right">edit
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    
                                    @endif
                                <p class="mt-5 h3 font-weight-bold text-warning">
                                    <a href="/user/{{$userData->user_id}}" class="text-decoration-none"> {{$userData->user_name}}</a>
                                </p>
                                    <h5 class="my-3">Description :</h5>
                                    <p class="bg-light p-3 rounded">{{$userData->user_description}}</p>
                                </div>
    
                            {{-- </div> --}}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- endprofile -->
    
    <!-- Question -->
    <div class="container">
        <div class="card border-warning">
            <div class="card-header">
                <div class="py-2 text-dark sticky-top rounded bg-warning" >
                    <div class="container text-center">
                        <h4>Question List</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @foreach ($discussList as $item)
                    <div class="card border-info">
                        <div class="card-header">
                            @if ($item->discuss_status=='1')
                            <span class="badge badge-pill badge-success float-right">
                              Solved
                            </span>
                            @else
                                <span class="badge badge-pill badge-danger float-right">
                                Unsolved
                                </span>
                            @endif
                            <div class="user-block">
                                <img class="img-circle" src="{{asset($item->users->user_image)}}" alt="User Image">
                                <span class="username">
                                    <a href="/discussion/{{$item->discuss_id}}">{{$item->discuss_title}}</a>
                                </span>
                                <span class="description"><a href="#">{{$item->topics->topic_name}}</a></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12"> 
                                <p>{{ $item->discuss_content }}</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <span>Last Update: {{$item->updated_at->diffForHumans()}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{ $discussList->links() }}
    </div>
</div>
@endsection

@section('scripts')
    {{--  --}}
@endsection








