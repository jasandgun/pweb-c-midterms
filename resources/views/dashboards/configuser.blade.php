@extends('dashboards.layout')

@section('title', "Konfigurasi akun")

@section('stylesheets')
@endsection

@section('content-header',"Konfigurasi Akun")


@section('content')
<div class="content">
  <div class="container-fluid">
    @if(session('status'))
    <div class="alert alert-success" role="alert">
      {{session('status')}}
    </div>
    @endif
    <div class="card">
      <div class="card-header">
        <h3>Data Akun</h3>
      </div>
      <div class="card-body">
        <ul class="list-group">
          <li class="list-group-item dropdown">Username : {{Session::get('name')}}</li>
          <li class="list-group-item">Email : {{Session::get('email')}}</li>
          <li class="list-group-item">Description : {{Session::get('desc')}}</li>
        </ul>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h3 class="font-weight-light my-2">Ubah data akun</h3>
      </div>
      <div class="card-body">
        <div class="card">
          <div class="card-header">
            <h4>Username</h4>
          </div>
          <div class="card-body">
            <form method="POST" action=" {{route('configusername',Session::get('id'))}} ">
              @csrf
              <div class="input-group mb-3">
                <input type="text" id="username" name="username" class="form-control" placeholder="username.." aria-label="username" aria-describedby="button-email">
                <div class="input-group-append">
                  <button class="btn btn-outline-warning" type="submit" id="button-email">Submit</button>
                </div>
              </div>
              @error('username')
              <div>
                  <small class="text-danger"> {{$message}} </small>
              </div>
              @enderror
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Description</h4>
          </div>
          <div class="card-body">
            <form method="POST" action=" {{route('configdesc',Session::get('id'))}} ">
              @csrf
              <div class="form-group">
                <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Your description"></textarea>
                @error('desc')
                <div>
                    <small class="text-danger"> {{$message}} </small>
                </div>
                @enderror
              </div>
              <button class="btn btn-warning" type="submit">Submit</button>
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Email</h4>
          </div>
          <div class="card-body">
            <form method="POST" action=" {{route('configemail',Session::get('id'))}} ">
              @csrf
              <div class="input-group mb-3">
                <input type="email" id="email" name="email" class="form-control" placeholder="email.." aria-label="email" aria-describedby="button-email">
                <div class="input-group-append">
                  <button class="btn btn-outline-warning" type="submit" id="button-email">Submit</button>
                </div>
              </div>
              @error('email')
              <div>
                  <small class="text-danger"> {{$message}} </small>
              </div>
              @enderror
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Password</h4>
          </div>
          <div class="card-body">
            <form method="POST" action=" {{route('configpassword',Session::get('id'))}} ">
              @csrf
              <div class="form-group">
                <label for="passwordinput">Password</label>
                <input type="password" name="password" class="form-control" id="passwordinput" placeholder="password.." >
                @error('password')
                <div>
                    <small class="text-danger"> {{$message}} </small>
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="passwordinputconfirm">Retype Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="passwordinputconfirm"  placeholder="retype password..">
              </div>
              <button type="submit" class="btn btn-warning">Submit</button>
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Profile Image</h4>
          </div>
          <div class="card-body">
            <form method="POST" action=" {{route('configprofil',Session::get('id'))}} " enctype='multipart/form-data'>
              @csrf
              <div class="form-group">
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="profil" id="berkas" accept=".jpeg,.png,.jpg">
                    <label class="custom-file-label" id='idberkas'for="logo">Upload Profile Image</label>
                  </div>
                </div>
                @error('profil')
                <div>
                    <small class="text-danger"> {{$message}} </small>
                </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-warning">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@section('scripts')
    {{--  --}}
    <script type="application/javascript">
        $('#berkas').change(function(e2){
            var fileName2 = e2.target.files[0].name;
            // dd(fileName2);
            $('#idberkas').html(fileName2);
        });
    </script>
@endsection