<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body  style="background-color: #161516;">
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        @include('admin.body')
    

      @include('admin.script')
  </body>
</html>