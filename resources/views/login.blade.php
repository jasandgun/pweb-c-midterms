@extends('layout')

@section('title', "Login")

@section('stylesheets')

@endsection

@section('content')
<div class="job_details_area bg-its-2">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-lg-offset-3" style="height: 600px;">
                    <div class="apply_job_form white-bg mt-5">
                        <h3 style="text-align:center" class="mb-30">Login</h3>
                        @if(Session::get('error'))
                        <div class="alert alert-danger" role="alert">
                            <strong>Error:</strong> {{ Session::get('error') }}
                        </div>
                        @endif
                        @if(Session::get('status'))
                        <div class="alert alert-info" role="alert">
                            {{ Session::get('status') }}
                        </div>
                        @endif
						<form method="POST" action="{{ route('login_users') }}" >
                        @csrf
							<div class="mt-10">
								<input type="email" name="email" placeholder="Email address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" class="single-input" value=" {{old('email')}} ">
                                    @error('email')
                                    <div>
                                        <small class="text-danger"> {{$message}} </small>
                                    </div>
                                    @enderror
							</div>
							<div class="mt-10 mb-5">
								<input type="password" name="password" placeholder="Password" 
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" class="single-input">
                                    @error('password')
                                    <div>
                                        <small class="text-danger"> {{$message}} </small>
                                    </div>
                                    @enderror
							</div>
                            <div class="input-group-icon mt-10">
                                <div class="col-lg">
                                    <div class="text-center">
                                        
                                        <button type="submit" class="btn btn-block btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row mt-4">
                            <div class="col text-center">
                                Belum punya akun? <a href="/register">Daftar disini!</a>
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

@endsection
