@extends('dashboards.layout')

@section('title', "Discussion {{$topic->topic_name}}")

@section('stylesheets')
@endsection

@section('content-header',"Welcome ".Session::get('name')." in Stay Under Flow!")


@section('content')
<section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                <h3 class="title">Discussion About {{$topic->topic_name}}</h3>
               
              </div>
              <div class="card-body">
                <ul class="products-list product-list-in-box">
                  @if ($topic->discuss->count() > 0)
                  @foreach ($topicList as $discus)
                  <li class="item">
                    <div class="card">
                      <div class="card-header">
                        <a href="{{ route('discussion', $discus->discuss_id) }}" class="product-title">{{ $discus->discuss_title }}</a>
                        @if ($discus->discuss_status=='1')
                          <span class="badge badge-pill badge-success float-right">
                            Solved
                          </span>
                        @else
                          <span class="badge badge-pill badge-danger float-right">
                            Unsolved
                          </span>
                        @endif
                      </div>
                      <div class="card-body">
                        <div class="product-info">
                          <span class="product-description">{{ $discus->discuss_content  }}</span>
                        </div>
                      </div>
                      <div class="card-footer">
                        <div class="product-img">
                          <img src="{{asset($discus->users->user_image)}}" alt="Product Image">
                          <a href="#" class="product-title">{{ $discus->users->user_name }}</a>
                        </div>
                        <span class="float-right">
                          Last Update : {{$discus->updated_at->diffForHumans()}}
                        </span>
                      </div>
                    </div>
                  </li>
                  @endforeach
                  @else
                  <h3 class="title">Tidak ada diskusi.</h3>
                  @endif
                  <!-- /.item -->
                </ul>
              </div>
  
          </div>
          <!-- DISCUSSION LIST -->
          <div class="box box-primary">
            
            <!-- /.box-header -->
            <div class="box-body">
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        {{ $topic->discuss()->paginate(2)->render() }}
      </div>
    </div>
    <!-- /.container-fluid -->

  </section>
    
@endsection