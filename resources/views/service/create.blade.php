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
                                    ($service->count() > 0) <!--pngil data dari event server dan nk data dri sequel ace -->
                                    @foreach ($service as $service) <!--set kan value untuk kalau  type 1 and type 2-->
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
    <div id="map_canvas" style="width: 1450px; height:500px;"></div>
        
     

  
  
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div align="center">
                <div class="col-lg-4 text-lg-center">Copyright © Car Workshop 2020</div>
                
            </div>
        </div>
    </footer>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.11&sensor=false" type="text/javascript"></script>
    <script type="text/javascript">
        // check DOM Ready
        $(document).ready(function() 
        {
            // execute
            (function() 
            {
                // map options
                var options = 
                {
                    zoom: 12,
                     center: new google.maps.LatLng(2.225775827756976, 102.4530672171879), // centered US
                        mapTypeId: google.maps.MapTypeId.ROADMAP,  
                };
                // init map
                var map = new google.maps.Map(document.getElementById('map_canvas'), options);
                  var marker = new google.maps.Marker
                  ({
                     position:new google.maps.LatLng(2.225775827756976, 102.4530672171879),
                        animation:google.maps.Animation.BOUNCE
                  });
                  marker.setMap(map);
                
                //yong
                var marker = new google.maps.Marker
                  ({
                    position: new google.maps.LatLng(2.152463983919641, 102.42728021240687),
                     map: map,
                      title: 'Click Me ' + 1
                  });
                   (function(marker) 
                   {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() 
                        {
                          infowindow = new google.maps.InfoWindow
                          ({
                               content: 'Hello, World!!'
                           });
                         infowindow.open(map, marker);
                       });
                  })
                    (marker);

                    //tiam
               var marker2 = new google.maps.Marker
               ({
                    position: new google.maps.LatLng(2.1580562442061213, 102.42023706986383),
                       map: map,
                        title: 'Click Me ' + 1
               });

                   (function(marker2) 
                   {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() 
                        {
                          infowindow = new google.maps.InfoWindow
                          ({
                               content: 'Hello, World!!'
                           });
                              infowindow.open(map, marker);
                       });
                    })
                    (marker2);

               //heng
               var marker2 = new google.maps.Marker
               ({
                    position: new google.maps.LatLng(2.2855473328974734, 102.52289798319543),
                       map: map,
                        title: 'Click Me ' + 1
               });

                   (function(marker2) 
                   {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() 
                        {
                          infowindow = new google.maps.InfoWindow
                          ({
                               content: 'Hello, World!!'
                           });
                              infowindow.open(map, marker);
                       });
                    })
                    (marker2);

                    //huat
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.301992619760568, 102.47283261583017),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //bina
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.2881958810883494, 102.49159482466698),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                     //merlimau tyre
                     var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.15108138507256, 102.42653782977388),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                     //mustaffa
                     var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.3205707344266755, 102.43853008849707),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                     //ehk
                     var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.171294862969922, 102.43298588339003),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //tan
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.3062039103162575, 102.41518414344056),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //tt
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.2987946281050213, 102.40625775270236),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //omar
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.139647561505197, 102.43022179869888),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //amy
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.2891878451659093, 102.40145123461494),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //wafa
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.1683816178782314, 102.43348371468102),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //mizi
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.1510017910704686, 102.46788360853498),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //hairul
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.163250415938521, 102.4296390394328),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //peak
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.1401127207991886, 102.42440694254098),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //huat
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.1562391344867335, 102.42743339423788),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //tin
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.17585693409613, 102.43602916536591),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //varage
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.1631425345023407, 102.42814305190888),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //kim
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.1560670823923593, 102.4275056158152),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //varage
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.1631425345023407, 102.42814305190888),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //kim
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.1560670823923593, 102.4275056158152),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //zali
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.159403310705078, 102.47831530870789),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //syah
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.1561633159191396, 102.42404128309639),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //azwan
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.1610536313613085, 102.42911917121972),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //sri
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.1331633693806977, 102.42127623517514),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //tan
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.2849344595108962, 102.42321117457638),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //tt
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.2934101449362054, 102.40534521468652),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                     //proton
                     var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.3022677362666073, 102.40934766621521),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //lim
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.3063502796467374, 102.41552747546226),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //makhdad
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.2950390403265186, 102.26541361241688),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //aircond
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.281148905617001, 102.28271569004522),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //bb
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.1365789026641404, 102.4229237055711),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);

                    //jrol
                    var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(2.264413189260681, 102.50750711563991),
                       map: map,
                      title: 'Click Me ' + 1
                   });

                   (function(marker2) {
                       //add click event
                        google.maps.event.addListener(marker, 'click', function() {
                          infowindow = new google.maps.InfoWindow({
                               content: 'Hello, World!!'
                            });
                         infowindow.open(map, marker);
                       });
                    })(marker2);



                    
            })();
        });
        </script>
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
    <!--googlemaps
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>-->


