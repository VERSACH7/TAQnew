      <!-- header -->
       @include('newtemplates.gentemplate.header')
      <!-- header -->
      
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/slide/cameroun-femme-marche-c2d-rodrig-mbock-slide1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>TAG</span></h2>
                <p class="animate__animated animate__fadeInUp">Campaign on Projects for the people and causes you care about and aslo for a better tomorrow</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Create a TAG</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/images.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Our Mission</h2>
                <p class="animate__animated animate__fadeInUp">We have in heart the development of our nation, Boosting Growth and inproving living standards</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/couve\ -\ Patricia\ Willocq.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">How we Opperate</h2>
                <p class="animate__animated animate__fadeInUp">Join us in making a difference by either creating a campaign or donating for one</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="carousel-item" style="background-image:url('assets/img/slide/Slide-1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">How to Make a Donations</h2>
                <p class="animate__animated animate__fadeInUp">Making a difference is caring for going the extra mile of donating is unmessurable and makes u special <b>here is how to make a difference DONATE or create a CAMPAIGN for someone you care about</b> </p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  
      <!-- ======= Top Projects Section ======= -->
        @include('newtemplates.pages.topProjects')
      <!-- End Top Projects Section -->

      <!---======= Trending On Tag-->
        @include('newtemplates.pages.trending')
      <!--Trending On Tag-->

      <!--start of sucess stories-->
      @include('newtemplates.pages.successStory')
      <!--end of sucess stories-->

      <!-- ======= About us Section ======= -->
        @include('newtemplates.pages.aboutUs')
      <!-- End About us Section -->

      <!-- ======= Counter Section ======= -->
        @include('newtemplates.pages.counter')
      <!-- End Counter Section -->

      <!-- ======= Services Section ======= -->
        @include('newtemplates.pages.services')
      <!-- End Services Section -->

      <!-- ======= project categories ======= -->
        @include('newtemplates.pages.projectCategories')
      <!--project categories-->

      <!-- ======= Frequently Asked Questions Section ======= -->
        @include('newtemplates.pages.faq')
      <!-- End Frequently Asked Questions Section -->

      <!-- ======= Contact Us Section ======= -->
        @include('newtemplates.pages.contactUs')
      <!-- End Contact Us Section -->


