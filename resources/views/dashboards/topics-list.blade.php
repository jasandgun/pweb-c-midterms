@extends('dashboards.layout')

@section('title', "Topic")

@section('stylesheets')
@endsection

@section('content-header',"Welcome ".Session::get('name')." in Stay Under Flow!")
@section('content')


  <!-- Main content -->
  <section class="content">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Topic List</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-md-12">
          @foreach ($topicList as $item)
          
            <div class="card col-md-12" >
                <div class="card-header bg-warning ">{{$item->topic_name}}
                    <a href="{{ route('topic-discussion',$item->topic_slug)}}">
                        <button class="btn btn-success float-right">
                            <span>View More</span>
                        </button>
                    </a>
                </div>
                <div class="card-body bg-light">
                    <p class="card-text">{{$item->topic_description}}</p>
                </div>
            </div>
          @endforeach
        
        </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>

@endsection

@section('scripts')
    {{--  --}}
@endsection








