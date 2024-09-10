@extends('layouts.app')

@section('content')
@section('navigation')
  <li><a class="btn head-btn2" href="{{ url('/') }}">Home</a></li>
  <li><a class="btn head-btn2" href="{{ url('findjob') }}">Find Jobs</a></li>
  <li><a class="btn head-btn2" href="{{ url('postjob') }}">Post A Job</a></li>
  <li><a class="btn head-btn2" href="{{ url('about') }}">About</a></li>
@endsection
<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-8">
   <div class="card">
<form 
        id="formAccountSettings" 
        method="POST" 
        action="{{ route('profile.update',auth()->id()) }}" 
        enctype="multipart/form-data"
        class="needs-validation" 
        role="form"
        novalidate
    >
    @csrf
    <div class="card-body">
        <div class="row">
            
            <div class="company-img ">
                                           
                                            <a href="#"><img src="/avatars/{{ Auth::user()->user_img}}" alt="{{ auth()->user()->name }}" width="100" height="100"></a>
                                    
                                        </div>
            <div class="company-img">
          <input type="file" class="form-control-file" id="user_img" name="user_img" accept="image/*" value="{{ auth()->user()->user_img }}">
        </div>

            <div class="mb-3 col-md-6">
                <label for="name" class="form-label">{{ trans('Name')}}</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ auth()->user()->name }}" autofocus="" required>
                <div class="invalid-tooltip">{{ trans('required')}}</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">{{ trans('Email')}}</label>
                <input class="form-control" type="text" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="john.doe@example.com">
                <div class="invalid-tooltip">{{ trans('required')}}</div>
            </div>
            <li><a class="btn" href="{{ url('/change-password') }}">Change Password</a></li>
            <div class="mt-2">
                <button type="submit" class="btn me-2">{{ trans('Save_changes')}}</button>
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
@endsection
