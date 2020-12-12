@extends('layout')

@section('content')
    
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <!--<a  href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>-->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               
            </button>
            <div class="collapse navbar-collapse" >
                <ul class="navbar-nav text-uppercase ml-auto" class="nav nav-pills">
                    <li class="nav-item"><a  href="/service/create">HomePage</a></li>
                    <li class="nav-item"><a  href="/about">About</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <form action={{route('service.create')}} method="POST">
            @csrf
            <div class="container">
                <div class="masthead-subheading">Welcome To <br>Car Workshop Recommendation!</div>
                    <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01"><b>Service Types</b></label>
                            </div>
                                <select class="custom-select" id="inputGroupSelect01" name="service_id">
                                    ($service->count() > 0)
                                    @foreach ($service as $service)
                                    <option value="{{ $service->id }}">{{ $service->ServiceTypes }}</option>
                                    @endforeach
                                </select> &nbsp;
                            </div>
                                <br>
                <div>   
                    <button type="submit"  class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" >Tell Me More</a>
                </div>
        </form>
        
    </header>
    <iframe style="width:100%;height:400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.1222443928611!2d102.45280816524397!3d2.2213715381909607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1c2904d683dc3%3A0x216b1d164eba26a1!2sUniversiti%20Teknologi%20MARA%20Cawangan%20Melaka%20Kampus%20Jasin!5e1!3m2!1sen!2smy!4v1607354949493!5m2!1sen!2smy" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           
        <!-- <div id="googleMap" style="width:100%;height:400px;"></div>

        <script>
            function myMap() {
                 var mapProp= {
                    center:new google.maps.LatLng(2.22154,102.45312),
                        zoom:5, };
                    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
        </script>-->
    <!--href="/service/view"-->

  
  
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div align="center">
                <div class="col-lg-4 text-lg-center">Copyright © Car Workshop 2020</div>
                
            </div>
        </div>
    </footer>
   
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!--googlemaps
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>-->


