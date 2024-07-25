@extends('interface.layout')
@section('title','listing')

@section('content')


        
       <div class="hero inner-page" style="background-image: url('images/hero_1_a.jpg');">
        
        <div class="container">
          <div class="row align-items-end ">
            <div class="col-lg-5">

               <div class="intro">
                <h1><strong>Listings</strong></h1>
                <div class="custom-breadcrumbs"><a href="{{route('index')}}">Home</a> <span class="mx-2">/</span> <strong>Listings</strong></div>
              </div>

            </div>
          </div>
        </div>
      </div> 



      

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Car Listings</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>


        <div class="row">
        @foreach($cars as $car)
 
 <div class="col-md-6 col-lg-4 mb-4">

   <div class="listing d-block  align-items-stretch">
     <div class="listing-img h-100 mr-4">
     <img src="/storage/{{$car->filename}}" alt="Image" class="img-fluid">
   
     
     </div>
     <div class="listing-contents h-100">
       <h3>{{$car->Title}}</h3>
       <div class="rent-price">
         <strong>{{$car->price}}</strong><span class="mx-1">/</span>day
       </div>
       <div class="d-block d-md-flex mb-3 border-bottom pb-3">
         <div class="listing-feature pr-4">
           <span class="caption">Luggage:</span>
           <span class="number">{{$car->luggage}}</span>
         </div>
         <div class="listing-feature pr-4">
           <span class="caption">Doors:</span>
           <span class="number">{{$car->door}}</span>
         </div>
         <div class="listing-feature pr-4">
           <span class="caption">Passenger:</span>
           <span class="number">{{$car->passenger}}</span>
         </div>
       </div>
       <div>
         <p>{{$car->Content}}</p>
         <p><a href="{{route('single',[$car->id])}}" class="btn btn-primary btn-sm">Rent Now</a></p>
       </div>
     </div>

   </div>
 </div>
@endforeach
        
<!-- 
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="images/car_6.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
                <h3>Mitsubishi Pajero</h3>
                <div class="rent-price">
                  <strong>$389.00</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">8</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">4</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">4</span>
                  </div>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum, voluptatem quibusdam.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="images/car_5.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
                <h3>Nissan Moco</h3>
                <div class="rent-price">
                  <strong>$389.00</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">8</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">4</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">4</span>
                  </div>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum, voluptatem quibusdam.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>

            </div>
          </div>
          

          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="images/car_4.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
                <h3>Honda Fitta</h3>
                <div class="rent-price">
                  <strong>$389.00</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">8</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">4</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">4</span>
                  </div>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum, voluptatem quibusdam.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="images/car_3.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
                <h3>Skoda Laura</h3>
                <div class="rent-price">
                  <strong>$389.00</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">8</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">4</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">4</span>
                  </div>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum, voluptatem quibusdam.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="images/car_2.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
                <h3>Mazda LaPuta</h3>
                <div class="rent-price">
                  <strong>$389.00</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">8</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">4</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">4</span>
                  </div>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum, voluptatem quibusdam.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>

            </div>
          </div>
          

          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="images/car_1.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
                <h3>Buick LaCrosse</h3>
                <div class="rent-price">
                  <strong>$389.00</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">8</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">4</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">4</span>
                  </div>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum, voluptatem quibusdam.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>

            </div>
          </div> -->

        </div>
        <div class="row">
          <div class="col-5">
            <div class="custom-pagination">
              <a href="#">1</a>
              <span>2</span>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Testimonials</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                <div class="author-name">
                  <span class="d-block">Mike Fisher</span>
                  <span>Owner, Ford</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                <div class="author-name">
                  <span class="d-block">Jean Stanley</span>
                  <span>Traveler</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                <div class="author-name">
                  <span class="d-block">Katie Rose</span>
                  <span >Customer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

