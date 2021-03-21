<!DOCTYPE html>
<html lang="en">

   <!-- linking to the head.blade.php-->
  @include('newtemplates.gentemplate.head')

<body>

  <!-- ======= Header ======= -->
    @include('newtemplates.gentemplate.header') 
  <!-- End Header -->

  <!-- main body --> 
  <!-- only this part will change -->
    @yield('iframe')
  <!-- main baody ends -->

  <!-- ======= Footer ======= -->
    @include('newtemplates.gentemplate.footer')
  <!-- Footer ends -->

</body>

</html>