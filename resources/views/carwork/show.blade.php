@extends( 'layout')


@section('content')

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <!--<a  href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
           
        </button>
        <div class="collapse navbar-collapse" >
            <ul class="navbar-nav text-uppercase ml-auto" class="nav nav-pills">
                <li class="nav-item"><a  href="/">HomePage</a></li>
                
            </ul>
        </div>
    </div>
</nav>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">LISTS RECOMMENDATION WORKSHOPS</h2>
                    
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                    
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/assets/img/view/Merlimau Tyre & Auto Service Centre.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$carwork->Shopname}}</div>
                                <div class="portfolio-caption-subheading text-muted">{{$carwork->Address}}</div>
                                <div class="portfolio-caption-subheading text-muted">{{$carwork->Rating}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
   <!-- Footer -->
<footer class="text-center">
  
  <p>Copyright © Car Workshop 2020 </p> 
</footer> 
</body>
</html>
@endsection