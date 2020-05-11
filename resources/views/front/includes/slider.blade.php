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