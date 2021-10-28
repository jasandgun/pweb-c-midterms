@extends('layout')

@section('title', "Register")

@section('stylesheets')

@endsection

@section('content')
<div class="job_details_area bg-its-2">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-lg-offset-3" style="height: 600px;">
                    <div class="apply_job_form white-bg mt-5">
                        <h3 style="text-align:center" class="mb-30">Register</h3>
                        @if(Session::get('error'))
                        <div class="alert alert-info" role="alert">
                            <strong>Error:</strong> {{ Session::get('error') }}
                        </div>
                        @endif
						<form method="POST" action="{{ route('store_users') }}" enctype='multipart/form-data'>
                        @csrf
                            <div class="mt-10">
                                <input type="text" name="username" placeholder="Username" 
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" class="single-input" value="{{old('username')}}">
                                    @error('username')
                                    <div>
                                        <small class="text-danger"> {{$message}} </small>
                                    </div>
                                    @enderror
                            </div>
                            <div class="mt-10">
								<input type="email" name="email" placeholder="Email address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" class="single-input" value="{{old('email')}}">
                                    @error('email')
                                    <div>
                                        <small class="text-danger"> {{$message}} </small>
                                    </div>
                                    @enderror
							</div>
							<div class="mt-10">
								<input type="password" name="password" placeholder="Password" 
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" class="single-input ">
                                    @error('password')
                                    <div>
                                        <small class="text-danger"> {{$message}} </small>
                                    </div>
                                    @enderror
                            </div>
                            <div class="mt-10">
								<input type="password" name="password_confirmation" placeholder="Password Confirmation" 
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Retype Password'" class="single-input ">
                                    @error('password_confirmation')
                                    <div>
                                        <small class="text-danger"> {{$message}} </small>
                                    </div>
                                    @enderror
                            </div>
                            <div class="mt-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <button type="button" id="inputGroupFileAddon03"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                      </button>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" name="profil" id="berkas" accept=".jpeg,.png,.jpg" aria-describedby="inputGroupFileAddon03">
                                      <label class="custom-file-label" id='idberkas'for="logo">Upload Profile Image</label>
                                    </div>
                                </div>
                                @error('profil')
                                    <div>
                                        <small class="text-danger"> {{$message}} </small>
                                    </div>
                                    @enderror
                            </div>
                            <input type="hidden" name="description" value="Give some description">
                            <div class="input-group-icon mt-10">
                                <div class="col-lg">
                                    <div class="text-center">
                                        
                                        <button type="submit" class="btn btn-block btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row mt-4">
                            <div class="col text-center">
                                Sudah punya akun? <a href="/login">Login disini!</a>
                            </div>
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
