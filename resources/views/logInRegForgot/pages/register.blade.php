                <!-- this tranfers content in the ifram of the index page -->
                @extends('logindex')
            <!-- this means addiLogInRegForgot.template.ng the yeild to the template index -->
      
            <!--start the section to be runed on the iframe-->
             @section('iframe')
            <!--start the section to be runed on the iframe-->
        <div id="register" class="animate form registration_form">
          <section class="login_content">
          <form method="POST" action="/register">
                 @csrf
                <h1>Create Account</h1>
                <div>
                  <input type="text" class="form-control" placeholder="Username" required="" name="username"/>
                </div>
                <div>
                  <input type="email" class="form-control" placeholder="Email" required="" name="email" />
                </div>
                <div>
                  <input type="password" class="form-control" placeholder="Password" required="" name="password" />
                </div>
                <div>
                  <input type="password" class="form-control" placeholder="Input Password Again" required="" name="password_confimation" />
                </div>
                <div>
                  <button type="submit" class="btn btn-default submit">Submit</button>
                </div>
              </form>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            
          </section>
        </div>
        @endsection