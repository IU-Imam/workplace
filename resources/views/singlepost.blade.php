@extends('layouts.app')

@section('content')

@section('navigation')
  <li><a class="btn head-btn2" href="{{ url('/') }}">Home</a></li>
  <li><a class="btn head-btn1" href="{{ url('findjob') }}">Find Jobs</a></li>
  <li><a class="btn head-btn2" href="{{ url('postjob') }}">Post A Job</a></li>
  <li><a class="btn head-btn2" href="{{ url('about') }}">About</a></li>
@endsection
 <div class="single-job-items  mb-10">
                                    <div class="job-items">
                                        
                                        <div class="company-img ">
                                           
                                            <a href="#"><img src="{{ Storage::url($post->post_img) }}" alt="{{ $post->jobtitle }}" width="100" height="100"></a>
                                    
                                        </div>
                                       
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4><li><a href="./findjob/{{ $post->post_id }}">{{ ucfirst($post->jobtitle) }}</a></li></h4>
                                            </a>
                                            <ul>
                                                <li>
                                                    
                                                        <a href="./findjob/{{ $post->id }}">{{ ucfirst($post->company) }}</a>
                                                    </li>
                                                    <li>
                                                    
                                                        <a href="./findjob{{ $post->id }}">{{ ucfirst($post->location) }}</a>
                                                    </li>
                                                    <li>
                                                       <a href="./findjob/{{ $post->id }}">{{ ucfirst($post->salary) }}</a>
                                                        </li>

                                             </ul>
                                             
                                        </div>
                                            
                                        </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="">{{ ucfirst($post->jobtype) }}</a>
                                        <span>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans(['parts' => 2])}}</span>
                                    </div>
                                    
                                </div>
                                 <div class="card ">
                                                <div class="card-header">
                                                Job Details
                                            </div>
                                            <div class ="card-body">
                                                <pre class="lead">
                                                    <p class="text-left">
                                             {{ $post->post_details }}
                                                    </p>
                                                </pre>
                                             
                                            </div>
                                            </div>
                               
                                @endsection