<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
@include('Admin.components.style')
</head>
<body>
  <div class="container-scroller">


    <!-- partial:partials/_navbar.html -->
@include('Admin.components.navbar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('Admin.components.sidebar')

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
@yield('content')


        </div>


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @include('Admin.components.script')

  <!-- plugins:js -->

</body>

</html>

