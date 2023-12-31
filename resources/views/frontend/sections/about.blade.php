  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>About</h2>
        
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{asset('frontend/assets/img/profile-img.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>UI/UX Designer &amp; Web Developer.</h3>
          <p class="fst-italic">
            {{-- {{$about}} --}}
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$about[0]->Birthday}}</span></li>
                {{-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li> --}}
                {{-- <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li> --}}
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$about[0]->City}}</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$about[0]->Age}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$about[0]->Degree}}</span></li>
                {{-- <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li> --}}
              </ul>
            </div>
          </div>
          {!! $about[0]->description !!} 
        </div>
      </div>

    </div>
  </section><!-- End About Section -->
