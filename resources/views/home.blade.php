@extends('layouts.app')

@section('content')

@section('navigation')
  <li><a class="btn head-btn1" href="{{ url('/') }}">Home</a></li>
  <li><a class="btn head-btn2" href="{{ url('findjob') }}">Find Jobs</a></li>
  <li><a class="btn head-btn2" href="{{ url('postjob') }}">Post A Job</a></li>
  <li><a class="btn head-btn2" href="{{ url('about') }}">About</a></li>
@endsection
@endsection
