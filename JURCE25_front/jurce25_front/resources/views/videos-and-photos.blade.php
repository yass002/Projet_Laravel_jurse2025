@extends('navbar') 

@section('content') 
           {{$moch_s}}
        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Videos & Photos
                </h3>
            </div>
        </div>

        <div class="container mb-5">

            <h3>Videos</h3>

            <div class="row justify-content-center">

                <div class="col-lg-4 mb-4">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/NmfHXlv7ngI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 mb-4">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Dwk9pOh0-Jg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 mb-4">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/xHO0TyYbzFM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 mb-4">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/8_onPe3Vltg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 mb-4">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/WtqGpXLVJkk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                
            </div>

            <h3>Photos</h3>

            <div id="photos" class="d-flex align-items-stretch row col-mb-50">

            </div>

            <div id="loadMoreButton" class="text-center">
                <a class="button button-3d button-large button-rounded button-purple mt-5" onclick="handleLoadMore()">Load More</a>
            </div>

        </div>

        @endsection