@extends('dashboards.layout')

@section('title', "Create Discussion")

@section('stylesheets')
@endsection

@section('content')

{{-- main content --}}

<section class="content">
   

  <div class="container-fluid">
  <form method="POST" role="form" id="quickForm" action="{{ route('create-discussion') }}">
      @csrf
      <div class="row justify-content-center">
          <div class="col-lg-6">
              <div class="card card-primary">

                  <div class="card-header">
                      <h3 class="card-title">Start New Forum</h3>
                  </div>

                  <div class="card-body">
                      <div class="form-group">
                          <label>Judul Forum</label>
                          <input type="text" name="judul" class="form-control" id="idInputJudul" placeholder="Judul Forum">
                      </div>

                      <div class="form-group">
                          <label for="inputKategori">Topics</label>
                          <select name="topic" class="form-control" id="inputKategori">
                              @php
                                  $listTopics=App\Topics::all();
                              @endphp
                              @foreach ($listTopics as $item)
                                <option value="{{ $item->topic_id }}">{{ $item->topic_name}}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="inputPosition">Pertanyaan</label>
                          <textarea class="form-control" name="pertanyaan" id="idPertanyaan" cols="30" rows="10"></textarea>
                          {{-- <input type="text" name="position" class="form-control" id="inputPosition" placeholder="Posisi Pekerjaan/jabatan"> --}}
                      </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="submitbtn btn btn-primary">Submit</button>
                  </div>
              </div>
          </div>
      </form>
  </div>
</section>
@endsection

@section('scripts')
    {{--  --}}
@endsection








