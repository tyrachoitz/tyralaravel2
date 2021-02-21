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
                    <li class="nav-item"><a  href="/service/main">HomePage</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    

        <section class="container" id="sc_workshop">
        <h2 class="section-heading text-uppercase" align="center">LISTS RECOMMENDATION WORKSHOPS</h2>
        <br><br>
            <div class="row">
                @foreach($matchedResults as $result)
                    <div class="col-md-3" align="center">
                        <div class="card" style="width: 17 rem; height: 34rem; padding-right: 0.75rem; " align="center" >
                            <img  class="card-img-top" src="{{asset($result['workshop']->image_url)}}" alt="Card image cap" width="30" height="240">
                            <div class="card-body">
                                <h6 class="card-title">{{$result['workshop']->Shopname}}</h6>
                                <p class="card-text">{{$result['workshop']->Address}}</p>
                                <p class="card-text">{{$result['workshop']->Rating}}</p>
                                <p class="card-text">{{number_format($result['score'],1)}} stars</p>

                                <form method="post" action="{{route('carwork.detail',['id' => $result['workshop']->id  ])}}">
                                 @csrf 

                                
                                 <input type="hidden"  name="rating" value="{{$result['score']}}"/> 

                                <br>
                                
                                <button input class="btn btn-primary" type="submit">VIEW DETAILS</button>
                                <br>
                                <br>
                                </form>
                               
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


