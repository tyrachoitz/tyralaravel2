@extends('layout')

@section('content')
    
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <!--<a  href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>-->
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" 
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
                    
                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav text-uppercase ml-auto" class="nav nav-pills">
                        <li class="nav-item"><a href="javascript:history.back()" >Back</a></li>
                        <li class="nav-item"><a  href="/service/main">HomePage</a></li>
                    </ul>
                </div>
        </div>
    </nav>
    

   
    <section class="container" id="sc_workshop" align="center">
            <h2 class="section-heading text-uppercase"><b>DETAILS RECOMMENDATION WORKSHOP</b></h2><br><br>
            <div  align="center">
                    <div >
                        <div class="card" style="width: 50rem;">
                            <img class="card-img-top" src="{{asset($carwork->image_url)}}"  width="800" height="400">
                            <div class="card-body">
                                <h4 class="card-text">{{$carwork->Shopname}}</h4>
                                <p class="card-text">{{$carwork->Address}}</p>
                                <p class="card-text">{{$carwork->PhoneNo}}</p>
                                <p class="card-text">{{number_format($rating,1)}} stars</p>
                                <p class="card-text"><div class="mapouter"><div class="gmap_canvas">
                                    <iframe width="600" height="300" id="gmap_canvas" src="{{$carwork->embeded_url}}" 
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/mapv2/"></a>
                                        
                               
                            </div>
                        </div>
                    </div>
            </div>
    </section>
    
  
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div align="center">
                <div class="col-lg-4 text-lg-center">Copyright © Car Workshop 2020</div>
            </div>
        </div>
    </footer>
   
    <!-- Bootstrap core JS
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>-->
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>


