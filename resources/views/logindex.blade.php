<!DOCTYPE html>
<html lang="en">

   <!-- linking to the head.blade.php-->
  @include('logInRegForgot.template.head1')

<body>

  <!-- ======= Header ======= -->
    <!-- @include('logInRegForgot.template.header1')  -->
  <!-- End Header -->

  <!-- main body --> 
  <!-- only this part will change -->
    @yield('iframe')
  <!-- main baody ends -->

  <!-- ======= Footer ======= -->
    @include('logInRegForgot.template.footer1')
  <!-- Footer ends -->

</body>

</html>