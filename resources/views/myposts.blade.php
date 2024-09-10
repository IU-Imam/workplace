@extends('layouts.app')

@section('content')

@section('navigation')
  <li><a class="btn head-btn2" href="{{ url('/') }}">Home</a></li>
  <li><a class="btn head-btn2" href="{{ url('findjob') }}">Find Jobs</a></li>
  <li><a class="btn head-btn2" href="{{ url('postjob') }}">Post A Job</a></li>
  <li><a class="btn head-btn2" href="{{ url('about') }}">About</a></li>
@endsection

 @forelse($myposts as $mypost)
 
     
 
 <div class="single-job-items  mb-10">
                                    <div class="job-items">
                                        
                                        <div class="company-img ">
                                           
                                            <a href="#"><img src="{{ Storage::url($mypost->post_img) }}" alt="{{ $mypost->jobtitle }}" width="100" height="100"></a>
                                    
                                        </div>
                                       
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4><li><a href="./findjob/{{ $mypost->id }}">{{ ucfirst($mypost->jobtitle) }}</a></li></h4>
                                            </a>
                                            <ul>
                                                <li>
                                                    <i class="fas fa-map-marker-alt">
                                                        <a href="./findjob/{{ $mypost->id }}">{{ ucfirst($mypost->company) }}</a>
                                                    </li>
                                                    <li>
                                                    <i class="fas fa-map-marker-alt">
                                                        <a href="./findjob{{ $mypost->id }}">{{ ucfirst($mypost->location) }}</a>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-map-marker-alt "><a href="./findjob/{{ $mypost->id }}">{{ ucfirst($mypost->salary) }}</a>
                                                        </li>

                                             </ul>
                                             
                                        </div>
                                            
                                        </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="">{{ ucfirst($mypost->jobtype) }}</a>
                                        <span>{{ Carbon\Carbon::parse($mypost->created_at)->diffForHumans(['parts' => 2])}}</span>
                                    </div>
                                    
                                </div>
                                 <div class="card ">
                                                <div class="card-header">
                                                Job Details
                                            </div>
                                            <div class ="card-body">
                                                <pre class="lead">
                                                    <p class="text-left">
                                             {{ $mypost->post_details }}
                                                    </p>
                                                </pre>
                                             
                                            </div>
                                            </div>
                                             @empty
                                        <p class="text-warning card ">No Job Posts available</p>
                                    </section>
                                    
                                    @endforelse
                              
                                @endsection