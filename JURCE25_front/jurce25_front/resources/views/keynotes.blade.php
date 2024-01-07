@extends('navbar') 

@section('content') 
           

        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Keynotes
                </h3>
            </div>
        </div>

        <div class="container mb-5">
        @foreach ($allkeynote as $links)  
                        <h6></h6>
                        
            <div class="text-center">
                <h3>Keynote Speakers</h3>
                
                <div class="row">

                    <div class="col-lg-3 py-5 px-4 mb-5">
                        <img src="images/keynotes/gustau.png" alt="">
                    </div>

                    <div class="col-lg-3 text-start mb-5">
                        <h4 class="blue-color">Gustau Camps-Valls</h4>

                        <p>
                            Prof. Gustau Camps-Valls (born 1972 in València) is a Physicist and Full Professor in Electrical Engineering in
                            the Universitat de València, Spain, where lectures on machine learning, remote sensing and signal processing.
                            He is the Head of the Image and Signal Processing (ISP) group, an interdisciplinary group of 40 researchers
                            working at the intersection of AI for Earth and Climate sciences.
                        </p>

                        website: <a class="text-decoration-underline" href="https://isp.uv.es/" target="_blank">https://isp.uv.es</a>
                    </div>
                </div>
            </div>


            @endforeach

        </div>
        @endsection