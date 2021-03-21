                <!-- this tranfers content in the ifram of the index page -->
                @extends('logindex')
            <!-- this means adding the yeild to the template index -->
      
            <!--start the section to be runed on the iframe-->
             @section('iframe')
            <!--start the section to be runed on the iframe-->

    <div class="login">
        <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
            <section class="login_content">
                <form method="POST" action="/login">
                 @csrf
                    <h1>Login Form</h1>
                    <div>
                        <input type="email" class="form-control" placeholder="input email" required="Required" name="email" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="Required" name="password"/>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit">Log In</button>
                          <!-- a class="btn btn-default submit" href="index.html">Log in</a>  -->
                         <a class="reset_pass" href="#">Lost your password?</a>
                    </div>
                </form>

                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">New to site?
                    <a href="#signup" class="to_register"> Create Account </a>
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
        </div>
        </div>
  </div>
  @endsection