
@extends('navbar') 

@section('content') 

        <div class="parent vh-50">
            <section id="slider" class="slider-element vh-50" style="background: url('https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/6a/09/e9/caption.jpg?w=600&h=400&s=1') center center; background-size: cover;"></section>
            <div class="child">
                <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                    <h1 class="white-text">Joint Urban Remote Sensing Event</h1>
                    <span class="white-text"><b>TUNISIA</b></span>
                    <h2 class="mt-3 fw-normal text-capitalize text-light white-text">5 - 7 May 2025</h2>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row gutter-40 col-mb-80">

                <div id="desktop-description" class="postcontent col-lg-9" style="padding-bottom: 20px !important;">
                @foreach ($alllinks as $link)        
                    <div class="my-8 row">
                        <div class="col-lg-12 text-center">
                            <a class="button button-3d button-large button-rounded button-yellow button-wide" href="{{$link->links}}" target="_blank">{{$link->description}}</a>
                        </div>
                      
                    </div>
                    @endforeach
                    <p>
                        The <a class="text-decoration-underline" href="http://jurse.org/" target="_blank"><b>Joint Urban Remote Sensing Event (JURSE)</b></a> is a 
                        forum of excellence where researchers, practitioners and students present, share, and discuss their latest findings and results. 
                        A very dynamic version of the JURSE organized by the Remote Sensing Lab of FORTH in Heraklion, Greece in May 2023.
                    </p>

                    <p>
                        <b>
                            This event is committed to introduce innovative methodologies and technological resources recently 
                            employed to investigate the manifold aspects of the urban environment through orbital and airborne remote sensing data.
                        </b>
                    </p>

                    <p>
                        Emerging topics like new methods for urban land cover and land use classification with detailed discrimination of urban targets, 
                        3D modeling of urban buildings, forecast and impact assessment of natural and man-made hazards in urban areas, urban social studies, 
                        urban ecology, urban climatology, as well as data fusion, algorithms and techniques for Earth Observation data interpretation were approached.
                    </p>

                    <img data-enlargeable width="100%" style="cursor: zoom-in" class="w-100 mb-4" src="images/jurse-group-photo.png" alt="">

                </div>

                <div id="mobile-description" class="postcontent col-lg-9" style="padding-bottom: 20px !important;">

                    <div class="my-4 row">
                        <div class="col-lg-6 text-center">
                            <a class="button button-3d button-large button-rounded button-yellow button-wide" href="https://ieeexplore.ieee.org/xpl/conhome/10144111/proceeding" target="_blank">IEEE JURSE 2023 PROCEEDINGS</a>
                        </div>
                        <div class="col-lg-6 text-center">
                            <a class="button button-3d button-large button-rounded button-pale-red button-wide" href="https://www.grss-ieee.org/wp-content/uploads/2023/03/cfp_JURSE23_revised.pdf" target="_blank">IEEE J-STARS CALL FOR PAPERS</a>
                        </div>
                    </div>

                    <p>
                        The <a class="text-decoration-underline" href="http://jurse.org/" target="_blank"><b>Joint Urban Remote Sensing Event (JURSE)</b></a> is a 
                        forum of excellence where researchers, practitioners and students present, share, and discuss their latest findings and results. 
                        A very dynamic version of the JURSE organized by the Remote Sensing Lab of FORTH in Heraklion, Greece in May 2023.
                    </p>

                    <p>
                        <b>
                            This event is committed to introduce innovative methodologies and technological resources recently 
                            employed to investigate the manifold aspects of the urban environment through orbital and airborne remote sensing data.
                        </b>
                    </p>

                    <p>
                        Emerging topics like new methods for urban land cover and land use classification with detailed discrimination of urban targets, 
                        3D modeling of urban buildings, forecast and impact assessment of natural and man-made hazards in urban areas, urban social studies, 
                        urban ecology, urban climatology, as well as data fusion, algorithms and techniques for Earth Observation data interpretation were approached.
                    </p>

                    <img data-enlargeable width="100%" style="cursor: zoom-in" class="w-100 mb-4" src="images/jurse-group-photo.png" alt="">

                    <div class="text-center mt-4 mb-1">
                  
                       
                        <a class="twitter-timeline" href="https://twitter.com/JURSE2023" data-tweet-limit="1" data-dnt="true"></a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                    </div>

                </div>

                <!-- ========== RECENT POSTS ========== -->
                <div id="recent-posts" class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap" style="height: 100%; overflow: hidden;">

                        <div class="widget clearfix text-center">

                            <h4 class="mt-5 mb-1">Recent Posts</h4>

                            <div class="twitter-desktop">
                            @foreach ($alltweets as $links)  
                        <h6>{{$links->link}} : {{$links->date_tweet}}</h6>
                        @endforeach   
                                <a class="twitter-timeline" data-height="750" data-dnt="true" href="https://twitter.com/JURSE2023?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="section mb-0">
            <div class="container text-center">

                <h3 class="titular-title gradient-horizon gradient-text">Meet the organizers</h3>
                @foreach ($allorganizer as $organizer)  
                        
                <div class="row ">
                    <div class="col">
                        <img src="{{$organizer->src}}" width="300px" alt="{{$organizer->alt}}">
                        
                    </div>
                    
                   
                </div>
                <br>
                    <br>
                @endforeach 
                <h4 class="mt-4 mb-3">in collaboration with</h4>
                <a href="https://ccbsconference.gr"><img src="https://thumbnail.imgbin.com/11/5/1/imgbin-institute-of-electrical-and-electronics-engineers-engineering-ieee-computer-society-science-halberd-UdHyuj9DGYJPJkNVGTgnZFq0j_t.jpg" width="250px" alt=""></a>

            </div>
        </div>

        @endsection