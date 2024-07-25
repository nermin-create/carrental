@extends('interface.layout')
@section('title','testimonials')

@section('content')



      <div class="hero inner-page" style="background-image: url('images/hero_1_a.jpg');">
        
        <div class="container">
          <div class="row align-items-end ">
            <div class="col-lg-5">

              <div class="intro">
                <h1><strong>Testimonials</strong></h1>
                <div class="custom-breadcrumbs"><a href="{{route('index')}}">Home</a> <span class="mx-2">/</span> <strong>Testimonials</strong></div>
              </div>

            </div>
          </div>
        </div>
      </div>

    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Testimonials</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>
      
        <div class="row">
       @foreach($testimons as $testi)
          <div class="col-lg-4 mb-4">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>{{$testi->content}}</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="/storage/{{$testi->filename}}" alt="Image" class="img-fluid mr-3">
                <div class="author-name">
                  <span class="d-block">{{$testi->name}} </span>
                  <span>{{$testi->position}} </span>
                 
                </div>
              </div>
           
            </div>
          </div>
          @endforeach
       
          
        </div>
      </div>
    </div>

   <!-- end content -->
@endsection

