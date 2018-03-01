<!DOCTYPE html>
<html lang="en">
@include ('layouts.head')
<body>
@include('layouts.nav')
@include('layouts.toptitle')
<div class="container">

  <div class="row">
    
    @yield('content')

    @include('layouts.sidebar')

  

  </div>
  
</div>
  @include ('layouts.footer')
</body>
</html>





