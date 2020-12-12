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
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    

        <section class="container" id="sc_workshop">
        <h2 class="section-heading text-uppercase">LISTS RECOMMENDATION WORKSHOPS</h2>
            <div class="row">
                @foreach($matchedResults as $result)
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://fakeimg.pl/286x180/" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$result['workshop']->Shopname}}</h5>
                                <p class="card-text">{{$result['workshop']->Address}}</p>
                                <p class="card-text">{{$result['workshop']->Rating}}</p>
                                <a href="#" class="btn btn-primary">VIEW DETAIL</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
  
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


