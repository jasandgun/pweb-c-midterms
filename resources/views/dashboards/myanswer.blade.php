@extends('dashboards.layout')

@section('title', "My Answer")

@section('stylesheets')
@endsection
@section('content-header',"Welcome ".Session::get('name')." in Stay Under Flow!")
@section('content')


  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              <h3 class="title">My Answer</h3>
            </div>
            <div class="card-body">
              <ul class="products-list product-list-in-box">
            @foreach ($answerList as $item)
                <li class="item">
                  <div class="card">
                    <div class="card-header">
                      <button type="button" class="float-left btn btn-sm btn-default" data-toggle="modal" id="editdisc{{ $item->answer_id }}" data-idstd="{{ $item->answer_id }}" data-target="#modal-edit-{{ $item->answer_id }}">
                        <span> Edit
                          <i class="fa fa-edit" aria-hidden="true"></i>
                        </span>
                      </button>
                      {{-- Modal --}}
                      <div class="modal fade" id="modal-edit-{{ $item->answer_id }}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Edit Comments/Answer</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <form id="contact_form" action="{{route('myanswer-edit',$item->answer_id)}}" method="POST" enctype = "multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <div class="form-group">
                                    <label for="inputPosition">Comment</label>
                                    <textarea class="form-control" name="comment" id="idPertanyaan" cols="30" rows="10">{{$item->answer_content}}</textarea>
                                    {{-- <input type="text" name="position" class="form-control" id="inputPosition" placeholder="Posisi Pekerjaan/jabatan"> --}}
                                </div>
                                <button type="submit" id="submitForm" class="btn btn-default">Save</button>
                            </form>
                            </div>
                            <div class="modal-footer justify-content-left">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      {{-- Modal --}}
                      <a href="{{route('myanswer-delete',$item->answer_id)}}">
                        <button type="button" onclick="return confirm('Are you sure you want to delete this item?');" class="float-right btn btn-sm btn-default">
                          <span> Delete
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </span>
                        </button>
                      </a>

                    </div>
                    <div class="card-body">
                      <div class="product-img">
                        <img src="{{asset($item->users->user_image)}}" alt="Product Image">
                      </div>
                      <div class="">
                        <a href="/discussion/{{$item->discuss->discuss_id}}" class="product-title">{{$item->discuss->discuss_title}}
                          @if ($item->discuss->discuss_status=='1')
                            <span class="badge badge-pill badge-success float-right">
                              Solved
                            </span>
                          @else
                            <span class="badge badge-pill badge-danger float-right">
                              Unsolved
                            </span>
                          @endif
                        </a>
                        <span class="product-description">
                              {{$item->answer_content}}
                        </span>
                      </div>
                    </div>

                  </div>
                </li>
            @endforeach
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
        {{ $answerList->links() }}
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>

@endsection

@section('scripts')
    {{--  --}}
@endsection








