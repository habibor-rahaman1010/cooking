@extends('share.common')
@section('title', 'Home')

@section('content')

<!--This is my slider sextion here start section--- --->
    <div>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="5000">
                <img src="{{asset('assets/images/slider/slide_01.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button class="mybtn mb-48">Check Out Now</button>
                    <h5 class="text-white text-5xl">Cooking is Easy, We Will Prove it to You! </h5>
                    <p class="text-white">Some representative placeholder content for the first slide.</p>
                </div>
              </div>

              <div class="carousel-item" data-bs-interval="4000">
                <img src="{{asset('assets/images/slider/slide_02.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button class="mybtn mb-48">Check Out Now</button>
                  <h5 class="text-white text-5xl">Cooking is Easy, We Will Prove it to You!</h5>
                  <p class="text-white">Some representative placeholder content for the second slide.</p>
                </div>
              </div>

              <div class="carousel-item" data-bs-interval="4000" >
                <img src="{{asset('assets/images/slider/slide_03.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button class="mybtn mb-48">Check Out Now</button>
                  <h5 class="text-white text-5xl">Cooking is Easy, We Will Prove it to You!</h5>
                  <p class="text-white">Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
<!--This is my slider sextion here End section--- --->


<!-- This is my chefs section here start section-->
    <div class="">
        <div class="container">
            <div class="text-xl-center mt-20">
                <p class="n">Round the Globe </p>
                <h1 class="header">Our Cooking Chefs </h1>
            </div>

            <div>
                <?php 
                    $img = [
                        'assets/images/chef/chef1.jpg',
                        'assets/images/chef/chef2.jpg',
                        'assets/images/chef/chef3.jpg',
                        'assets/images/chef/chef4.jpg',
                        'assets/images/chef/chef5.jpg',
                    ];
                    $name = [
                      'Exotic Cuisines', 
                      'Baking & Pastry',
                      'Fish, Meat & Poultry',
                      'French Desserts',
                      'International Cuisine',
                      'Seafood & Wine',
                    ]; 
                    shuffle($name);
                    shuffle($img);   
                ?>
                <div class="mt-8 row row-cols-1 row-cols-md-3 g-4">
                    @for ($i = 2; $i < count($img); $i++)
                    <div class="col">
                        <div class="card h-100">
                          <img src="{{$img[$i]}}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$name[$i]}}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last updated {{$i}} mins ago</small>
                          </div>
                        </div>
                      </div>
                    @endfor
                </div>
                
                <?php 
                    $img2 = [
                        'assets/images/chef/chef1.jpg',
                        'assets/images/chef/chef2.jpg',
                        'assets/images/chef/chef3.jpg',
                        'assets/images/chef/chef4.jpg',
                        'assets/images/chef/chef5.jpg',
                    ]; 
                   
                    shuffle($img2);   
                ?>

                <div class="m-8 row row-cols-1 row-cols-md-3 g-4">
                    @for ($i = 2; $i < count($img2); $i++)
                    <div class="col">
                        <div class="card h-100">
                          <img src="{{$img2[$i]}}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$name[$i]}}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last updated {{$i}} mins ago</small>
                          </div>
                        </div>
                      </div>
                    @endfor
                  </div>
            </div>
        </div>
    </div>
<!-- This is my chefs section here start section-->



<!-- This is my Hero section here start section-->
    <div class="text-3xl text-center mt-24 mb-5 text-green-800">Our Achievements </div>
    <div class="hero d-flex">
        <div class="heroPart1">
          <div> <img src="{{asset('assets/images/hero/hero.jpg')}}" alt="" srcset=""> </div>
        </div>

        <div class="heroPart1">
          <div class="achieve">
            <p>Our Achievements</p>
            <h1>Hello, Welcome to Cooking Zone! </h1>
            <div class="item d-flex align-items-sm-start">
              <i class="icon fa fa-trophy"></i>
              <div>
                <h3>We Are Winners of 50 Competitions</h3>
                <p>Salami corned beef short loin sausage meatloaf fatback andouille kielbasa frankfurter sirloin alcatra beef ribs.</p>
              </div>
            </div>

            <div class="item d-flex align-items-sm-start">
              <i class="icon fa fa-group"></i>
              <div>
                <h3>27 Professional Chefs-Trainers</h3>
                <p>Ham hock jerky tail kevin, buffalo shoulder doner venison leberkas pig beef burgdoggen flank ribeye picanha burgdoggen.</p>
              </div>
            </div>

            <div class="item d-flex align-items-sm-start">
              <i class="icon fa fa-hourglass-2"></i>
              <div>
                <h3>Guaranteed Fast Employment</h3>
                <p>Ball tip landjaeger pork chop, kielbasa shank filet mignon cow burgdoggen cupim buffalo porchetta. Ribeye beef ribs flank.</p>
              </div>
            </div>

            
            
          </div>
        </div>
    </div> <br> <br>
<!-- This is my hero section here start section-->


<!-- This is my time schedule section here start section-->
<div class="time-section">
    <div class="container">
        <div class="text-center">
          <p> updated schedule </p>
          <h3>Timetable of Classes </h3>
        </div>

        <?php
            $schedule = [
              'assets/images/schedule/chef1.jpg',
              'assets/images/schedule/chef2.jpg',
              'assets/images/schedule/chef3.jpg',
              'assets/images/schedule/chef4.jpg',
              'assets/images/schedule/chef5.jpg',
              'assets/images/schedule/chef6.jpg',
              'assets/images/schedule/chef7.jpg',
              'assets/images/schedule/chef8.jpg',
              'assets/images/schedule/chef9.jpg',
          ];
          $chefs = [
            'Curabitur gravida dui quam',
            'Nullam pharetra tristique purus',
            'Cras viverra diam mattis',
            'Fish, Meat & Poultry',
            'International Cuisine from Alexander Lamb',
            'Praesent sit amet nulla',
            ' Aenean vitae nunc in justo',
            'Nullam vitae nisl laoreet aliquam',
            'Consectetur adipiscing elit',
            'Exotic Cuisine for Connoisseurs of Exotics',
            'Maecenas interdum vel est non lobortis',
          ];
          shuffle($chefs);
          shuffle($schedule);
        ?>
        
        @for ($i = 0; $i < count($schedule); $i++)
          <div class="item-schedule">
              <img src="{{$schedule[$i]}}" width="200" alt="" srcset="">
              <div class="item-schedule2">
                <div class="content">
                  <h4>{{$chefs[$i]}}</h4>
                  <i class="icon2 fa fa-calendar color-main2"></i>29 Apr, 19 - 11 Jun, 23
                  <i class="icon2 fa fa-clock-o color-main2"></i>12:00 am - 12:00 am
                  <i class="icon2 fa fa-user color-main2"></i> Admin
                </div>
                <div>
                  <button class="b btn btn-success">schedule Now</button>
                </div>
              </div>
          </div>
        @endfor

    </div>
</div>
<!-- This is my time schedule section here end section-->


<!-- This is my swipper section start-->
<div class="content_data"> 
  <section id="reviews" class="pt-5 mb-2">
    <h3 class="text-center">Reviews Our Clients</h3>
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="shadow p-3">
            <p>
              You will find number of recipe online. Some might be correctly posted some may not. Recipes what you read will not be the same what you find after preparation. There are number of recipes you will find online which are incorrect. So in order to get right recipes.
            </p>
            <div class="d-flex align-items-center">
              <img
                height="60"
                width="60"
                class="rounded-pill me-2"
                src="{{asset('assets/images/review/user1.webp')}}"
                alt=""
              />
              <h6>Harun Or Roshid</h6>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="shadow p-3">
            <p>
              You will find number of recipe online. Some might be correctly posted some may not. Recipes what you read will not be the same what you find after preparation. There are number of recipes you will find online which are incorrect. So in order to get right recipes.
            </p>
            <div class="d-flex align-items-center">
              <img
                height="60"
                width="60"
                class="rounded-pill me-2"
                src="{{asset('assets/images/review/user2.jpg')}}"
                alt=""
              />
              <h6>Arman Malek</h6>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="shadow p-3">
            <p>
              You will find number of recipe online. Some might be correctly posted some may not. Recipes what you read will not be the same what you find after preparation. There are number of recipes you will find online which are incorrect. So in order to get right recipes.
            </p>
            <div class="d-flex align-items-center">
              <img
                height="60"
                width="60"
                class="rounded-pill me-2"
                src="{{asset('assets/images/review/user3.jpeg')}}"
                alt=""
              />
              <h6>Rohman Khan</h6>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="shadow p-3">
            <p>
              You will find number of recipe online. Some might be correctly posted some may not. Recipes what you read will not be the same what you find after preparation. There are number of recipes you will find online which are incorrect. So in order to get right recipes.
            </p>
            <div class="d-flex align-items-center">
              <img
                height="60"
                width="60"
                class="rounded-pill me-2"
                src="{{asset('assets/images/review/user4.jpg')}}"
                alt=""
              />
              <h6>Bidushkat Dsas</h6>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="shadow p-3">
            <p>
              You will find number of recipe online. Some might be correctly posted some may not. Recipes what you read will not be the same what you find after preparation. There are number of recipes you will find online which are incorrect. So in order to get right recipes.
            </p>
            <div class="d-flex align-items-center">
              <img
                height="60"
                width="60"
                class="rounded-pill me-2"
                src="{{asset('assets/images/review/user5.jpg')}}"
                alt=""
              />
              <h6>Asduoa Janikla</h6>
            </div>
          </div>
        </div>
      </div>
      <!-- If we need navigation buttons -->
      <div onclick="swiper.slidePrev()" class="swiper-button-prev"></div>
      <div onclick="swiper.slideNext()" class="swiper-button-next"></div>
    </div>
  </section>
</div>

<!-- This is my swipper section end-->

@endsection