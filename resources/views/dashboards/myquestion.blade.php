@extends('dashboards.layout')

@section('title', "My Question")

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
              <h3 class="title">My Question</h3>
            </div>
            <div class="card-body">
              <ul class="products-list product-list-in-box">
                @foreach ($discussList as $discus)
                <li class="item">
                  <div class="card">
                    <div class="card-header">
                      <button type="button" class="float-left btn btn-sm btn-default" data-toggle="modal" id="editdisc{{ $discus->discuss_id }}" data-idstd="{{ $discus->discuss_id }}" data-target="#modal-edit-{{ $discus->discuss_id }}">
                        <span> Edit
                          <i class="fa fa-edit" aria-hidden="true"></i>
                        </span>
                      </button>
                      {{-- Modal --}}
                      <div class="modal fade" id="modal-edit-{{ $discus->discuss_id }}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Edit Discussion {{ $discus->discuss_title }}</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <form id="contact_form" action="{{route('myquestion-edit',$discus->discuss_id)}}" method="POST" enctype = "multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <div class="form-group">
                                  <label>Judul Forum</label>
                                  <input type="text" name="judul" class="form-control" value="{{$discus->discuss_title}}" id="idInputJudul" placeholder="Judul Forum">
                                </div>
                                <div class="form-group">
                                    <label for="inputKategori">Topics</label>
                                    <select name="topic" class="form-control" id="inputKategori">
                                        @php
                                            $listTopics=App\Topics::all();
                                        @endphp
                                        @foreach ($listTopics as $item)
                                          <option value="{{ $item->topic_id }}" {{  strcmp($item->topic_id,$discus->topics->topic_id)==0 ? "selected" : "" }}>{{ $item->topic_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label for="inputKategori">Status</label>
                                  <select name="status"  class="form-control" id="inputKategori">
                                      
                                    <option value="0" {{  strcmp("0",$discus->discuss_status)==0 ? "selected" : "" }}>Unsolved</option>
                                    <option value="1" {{  strcmp("1",$discus->discuss_status)==0 ? "selected" : "" }}>Solved</option>
                                      
                                  </select>
                              </div>
                                
                                <div class="form-group">
                                    <label for="inputPosition">Pertanyaan</label>
                                    <textarea class="form-control" name="pertanyaan" id="idPertanyaan" cols="30" rows="10">{{$discus->discuss_content}}</textarea>
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
                      <a href="{{route('myquestion-delete',$discus->discuss_id)}}">
                        <button type="button" onclick="return confirm('Are you sure you want to delete this item?');" class="float-right btn btn-sm btn-default">
                          <span> Delete
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </span>
                        </button>

                      </a>

                    </div>
                    <div class="card-body">
                      <div class="product-img">
                        <img src="{{asset($discus->users->user_image)}}" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="/discussion/{{ $discus->discuss_id }}" class="product-title">{{ $discus->discuss_title }}
                          @if ($discus->discuss_status=='1')
                            <span class="badge badge-pill badge-success float-right">
                              Solved
                            </span>
                          @else
                            <span class="badge badge-pill badge-danger float-right">
                              Unsolved
                            </span>
                          @endif
                        </a>
                        <span class="product-description">{{ $discus->discuss_content  }}</span>
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
        {{ $discussList->links() }}
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








