      <!-- this tranfers content in the ifram of the index page -->
            @extends('index')
        <!-- this means adding the yeild to the template index -->

@section('iframe')<!--start the section to be runed on the iframe-->

<section id="about" class="about"><!--start of sucess stories-->
  <div class="container">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active"><!--first slide-->
          <!-- <img src="assets/img/apple-touch-icon-new.png" class="d-block w-100" alt="..."> -->
          <!--new-->
       <div class="card text-white bg-dark mx-auto" style="width: 720px;">
        <div class="card-header">
          <p class="text-end"><b style="color:rgb(150, 0, 100) ; font-size: larger">NEW</b></p>
        </div>
        <div class="row mt-2 mb-2">
          <div class="col-md-8">
            <img src="assets/img/ProjTag/Bikalo football dream.png" class="img-fluid" alt="Cameroon communiities fighting covid" >
      </div>
         <div class="col-md-4 ">
            <div class="card-body ">
             <h2 class="card-title"><b>Create Tag Team Fundraising</b></h2>
          <p class="card-text">
            <div class="ul">
              <ul class="list-group list-group-item-dark">
                <li class="list-group-item">Collaborate with team members to rally support </li>
                <li class="list-group-item">Keep track of contributions and manage your team </li>
                <li class="list-group-item">Motivate team members with fundraising leaderboards </li>
              </ul>
            </div>
            
          </p>
       </div>
      </div>
          </div>
      </div> 

          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div><!--end first slide-->
        
        <div class="carousel-item"><!--start second slide-->
          <!-- <img src="..." class="d-block w-100" alt="..."> -->

          <div class="card mx-auto bg-primary text-white" style="width: 1152px;">
            <div class="card-header">
              <p class="text-end"><b style="color:rgb(150, 0, 100) ; font-size: larger">NEW</b></p>
            </div>
            <div class="row mt-2 mb-2">
              <div class="col-md-8">
                <img src="assets/img/New/Team.png" class="img-fluid" alt="Cameroon communiities fighting covid" >
          </div>
             <div class="col-md-4 dark">
                <div class="card-body">
                 <h2 class="card-title"><b>Create Tag Team Fundraising</b></h2>
              <p class="card-text">
                <div class="ul">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Collaborate with team members to rally support </li>
                    <li class="list-group-item">Keep track of contributions and manage your team </li>
                    <li class="list-group-item">Motivate team members with fundraising leaderboards </li>
                  </ul>
                </div>
                
              </p>
           </div>
          </div>
              </div>
          </div> 
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div><!--end second slide-->

        <div class="carousel-item"><!--start third slide-->
          <!-- <img src="..." class="d-block w-100" alt="..."> -->

          <div class="card mx-auto bg-secondary text-white" style="width: 1152px;">
            <div class="card-header">
              <p class="text-end"><b style="color:rgb(150, 0, 100) ; font-size: larger">NEW</b></p>
            </div>
            <div class="row mt-2 mb-2">
              <div class="col-md-8">
                <img src="assets/img/New/Team.png" class="img-fluid" alt="Cameroon communiities fighting covid" >
          </div>
             <div class="col-md-4 dark">
                <div class="card-body">
                 <h2 class="card-title"><b>Create Tag Team Fundraising</b></h2>
              <p class="card-text">
                <div class="ul">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Collaborate with team members to rally support </li>
                    <li class="list-group-item">Keep track of contributions and manage your team </li>
                    <li class="list-group-item">Motivate team members with fundraising leaderboards </li>
                  </ul>
                </div>
                
              </p>
           </div>
          </div>
              </div>
          </div> 
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div><!--end third slide-->
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon " aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>

  </div>

</section><!--end of sucess stories-->
@endsection <!-- this ends the section frame-->