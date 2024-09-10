@extends('layouts.app')

@section('navigation')
  <li><a class="btn head-btn2" href="{{ url('/') }}">Home</a></li>
  <li><a class="btn head-btn2" href="{{ url('findjob') }}">Find Jobs</a></li>
  <li><a class="btn head-btn1" href="{{ url('postjob') }}">Post A Job</a></li>
  <li><a class="btn head-btn2" href="{{ url('about') }}">About</a></li>
@endsection

@section('content')
<div class="container">
  <form method="POST" action="{{ route('postjob') }}" enctype="multipart/form-data">
    @csrf
    <!-- single-job-content -->
    <div class="single-job-items mb-30">
      <label for="post_img" class="form-label">COMPANY LOGO</label>
      <div class="job-items">
        <div class="company-img">
          <input type="file" class="form-control-file" id="post_img" name="post_img" accept="image/*">
        </div>
        <div class="card-body">
          <div class="job-tittle job-tittle2">
            <div class="row">
              <div class="mb-3 col-md-6 mt-2">
                <label for="name" class="form-label">{{ trans('JOB Title')}}</label>
                <input class="form-control" type="text" id="jobtitle" name="jobtitle" required >
                <div class="invalid-tooltip">{{ trans('required')}}</div>
              </div>
              <ul>
                <li>
                  <label for="name" class="form-label">{{ trans('COMPANY')}}</label>
                  <input class="form-control" type="text" id="company" name="company" >
                </li>
                <li>
                  <label for="name" class="form-label">{{ trans('LOCATION')}}</label>
                  <input class="form-control" type="text" id="location" name="location" >
                </li>
                <li>
                  <label for="name" class="form-label">{{ trans('SALARY RANGE')}}</label>
                  <input class="form-control" type="text" id="salary" name="salary" >
                </li>
                <li> 
                  <label for="jobtype" class="form-label">Job Type</label>
                  <div class="form-control ">
                    <select name="jobtype" id="jobtype">
                      <option id="jobtype" value="Full Time">Full Time</option>
                      <option id="jobtype" value="Part Time">Part Time</option>
                      <option id="jobtype" value="Remote">Remote</option>
                      <option id="jobtype" value="Freelance">Freelance</option>
                    </select>
                  </div>
                </li>
              </ul>
              <li>
                  <label for="post_details" class="form-label mt-2">{{ trans('Post Details')}}</label>
                  <textarea class="form-control" type="text" id="post_details" name="post_details" ></textarea>
                </li>
            </div>
            <input  type="submit" class="btn mt-3">
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
