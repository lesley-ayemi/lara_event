@extends('layouts.master')


@section('content')

{{-- Form Slider Starts  --}}

<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-lg-6 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Business Leaders <br><span>Conference 2019</span></h1>
        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="icon-calendar mr-2"></span>20-23 November 2019 - Los Angeles CA</p>
        <div id="timer" class="d-flex">
                      <div class="time" id="days"></div>
                      <div class="time pl-3" id="hours"></div>
                      <div class="time pl-3" id="minutes"></div>
                      <div class="time pl-3" id="seconds"></div>
                    </div>
      </div>
      <div class="col-lg-2 col"></div>
      <div class="col-lg-4 col-md-6 mt-0 mt-md-5">
      <form method="POST" action="{{route('register')}}" class="request-form ftco-animate">
        @csrf
              <h2>Join Conference</h2>
                    <div class="form-group">
                      <input id="name" placeholder="Enter Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                    <div class="form-group">
                        <input id="email" placeholder="Enter Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                    </div>

                    <div class="form-group">
                        <input name="phone_number" type="tel" class="form-control" placeholder="Enter your Phone">
                        @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <input id="password" placeholder="Enter Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                    <div class="form-group">
                            <div class="checkbox">
                               <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                            </div>
                        </div>
            <div class="form-group">
              <input type="submit" value="Join now" class="btn btn-primary py-3 px-4">
            </div>
                </form>
      </div>
    </div>
  </div>
</div>

{{-- Form Slider Ends  --}}

{{-- mini info starts  --}}

<section class="ftco-section services-section bg-primary">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-placeholder"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Venue</h3>
            <p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
          </div>
        </div>      
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-world"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Transport</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>    
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-hotel"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Hotel</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-cooking"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Restaurant</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>      
      </div>
    </div>
  </div>
</section>

{{-- mini info end  --}}


  {{-- Abouts Us Starts  --}}

 <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
                </div>
                <div class="col-md-7 wrap-about py-md-5 ftco-animate">
          <div class="heading-section mb-5 pt-5 pl-md-5">
              <div class="pr-md-5 mr-md-5">
                <h2 class="mb-4">What is all about us?</h2>
            </div>

            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
            <p><a href="#" class="btn btn-primary">Join now</a></p>
          </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-3">Conference Schedule</h2>
      </div>
    </div>
    <div class="ftco-schedule">
                <div class="row">
        <div class="col-md-3 nav-link-wrap text-center text-md-right">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">First Day <span>21 July 2019</span></a>

              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Second Day <span>22 July 2019</span></a>

              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Third Day <span>23 July 2019</span></a>

            </div>
          </div>
          <div class="col-md-9 tab-wrap">
            
            <div class="tab-content" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                  <div class="speaker-wrap ftco-animate d-md-flex">
                      <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div>
                      <div class="text">
                          <h2><a href="#">Introduction to Business Leaders</a></h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <span class="time">09:00 am - 4:30 pm</span>
                          <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
                      </div>
                  </div>
                  <div class="speaker-wrap ftco-animate d-md-flex">
                      <div class="img speaker-img" style="background-image: url(images/staff-2.jpg);"></div>
                      <div class="text">
                          <h2><a href="#">Introduction to Business Leaders</a></h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <span class="time">09:00 am - 4:30 pm</span>
                          <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
                      </div>
                  </div>
                  <div class="speaker-wrap ftco-animate d-md-flex">
                      <div class="img speaker-img" style="background-image: url(images/staff-3.jpg);"></div>
                      <div class="text">
                          <h2><a href="#">Introduction to Business Leaders</a></h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <span class="time">09:00 am - 4:30 pm</span>
                          <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
                      </div>
                  </div>
              </div>

              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                  <div class="speaker-wrap ftco-animate d-md-flex">
                      <div class="img speaker-img" style="background-image: url(images/staff-4.jpg);"></div>
                      <div class="text">
                          <h2><a href="#">Introduction to Business Leaders</a></h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <span class="time">09:00 am - 4:30 pm</span>
                          <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
                      </div>
                  </div>
                  <div class="speaker-wrap ftco-animate d-md-flex">
                      <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div>
                      <div class="text">
                          <h2><a href="#">Introduction to Business Leaders</a></h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <span class="time">09:00 am - 4:30 pm</span>
                          <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
                      </div>
                  </div>
                  <div class="speaker-wrap ftco-animate d-md-flex">
                      <div class="img speaker-img" style="background-image: url(images/staff-2.jpg);"></div>
                      <div class="text">
                          <h2><a href="#">Introduction to Business Leaders</a></h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <span class="time">09:00 am - 4:30 pm</span>
                          <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
                      </div>
                  </div>
              </div>
              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                  <div class="speaker-wrap ftco-animate d-md-flex">
                      <div class="img speaker-img" style="background-image: url(images/staff-3.jpg);"></div>
                      <div class="text">
                          <h2><a href="#">Introduction to Business Leaders</a></h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <span class="time">09:00 am - 4:30 pm</span>
                          <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
                      </div>
                  </div>
                  <div class="speaker-wrap ftco-animate d-md-flex">
                      <div class="img speaker-img" style="background-image: url(images/staff-4.jpg);"></div>
                      <div class="text">
                          <h2><a href="#">Introduction to Business Leaders</a></h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <span class="time">09:00 am - 4:30 pm</span>
                          <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
                      </div>
                  </div>
                  <div class="speaker-wrap ftco-animate d-md-flex">
                      <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div>
                      <div class="text">
                          <h2><a href="#">Introduction to Business Leaders</a></h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <span class="time">09:00 am - 4:30 pm</span>
                          <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
        </div>
</section>
    
    {{-- About Us Ends  --}}


    {{-- News Letter  --}}
    
<section class="ftco-section-parallax ftco-section ftco-no-pt">
  <div class="parallax-img d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-lg-7 text-center heading-section ftco-animate">
          <h2>Subcribe to our Newsletter</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          <div class="row d-flex justify-content-center mt-4 mb-4">
            <div class="col-md-8">
              <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
@endsection