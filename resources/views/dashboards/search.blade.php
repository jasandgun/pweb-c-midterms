@extends('dashboards.layout')

@section('title', "Search")

@section('stylesheets')
@endsection

@section('content-header',"Welcome ".Session::get('name')." in Stay Under Flow!")


@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="title">Search discussion</h3>
                </div>
                <div class="card-body">
                  <ul class="products-list product-list-in-box">
                    @if ($searchDiscussList->count() > 0)
                    @foreach ($searchDiscussList as $discus)
                    <li class="item">
                      <div class="card">
                        <div class="card-header">
                          <a href="discussion/{{$discus->discuss_id}}" class="product-title">{{ $discus->discuss_title }}</a>
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
                            <img src="{{asset(Session::get('profil'))}}" alt="Product Image">
                            <a href="#" class="product-title">{{ $discus->users->user_name }}</a>
                          </div>
                          <span class="float-right">
                            Last Update : {{$discus->updated_at}}
                          </span>
                        </div>
                      </div>
                    </li>
                    @endforeach
                    @else
                    <h3 class="title">Tidak ada data.</h3>
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
          {{ $searchDiscussList->links() }}
        </div>
      </div>
      <!-- /.container-fluid -->

    </section>
    <!-- /.section -->
  <!-- /.content-wrapper -->

@endsection

@section('scripts')
    {{--  --}}
@endsection








