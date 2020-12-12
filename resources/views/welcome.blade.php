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
                    <li class="nav-item"><a  href="/">HomePage</a></li>
                    <li class="nav-item"><a  href="/about">About</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To <br>Car Workshop Recommendation!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <div class="input-group mb-3">
            @foreach ($services as $services)
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01"><b>Service Types</b></label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>{{ $services->id }}</option>
                  <!-- < option value="1">Car Repair and Maintenance</option>
                  <option value="3">Tyres</option>
                  <option value="2">Spare Parts</option>-->
                </select> &nbsp;
            </div>
            @endforeach
               <br>
        <div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
    </header>
  
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
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


