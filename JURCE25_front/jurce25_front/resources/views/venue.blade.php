@extends('navbar') 

@section('content') 
           

        <section id="slider" class="slider-element vh-50" style="background: url('images/cccc1.png') center center; background-size: cover;"></section>
           
        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Conference Venue
                </h3>
            </div>
        </div>


        <div class="py-1 mb-3">
            <div class="container">
                
                <p>
                    The conference will take place at the <a class="text-decoration-underline" href="https://www.cccc.gr/en" target="_blank">Cultural Conference Center of Heraklion</a> in Crete, Greece.
                </p>

                <div class="row">

                    <div class="col-md-9 mt-0">
                        <h4 class="mb-4">About</h4>
                        <p>
                            A place of excellent possibilities and 
                            infrastructure, a center of promotion as well as production of culture, that gives space to artistic expression 
                            in all the arts and cultures. The fruit of a long and multi-faceted effort, the Cultural and Conference Center 
                            of Heraklion (PSKI) is a boast and a cultural stake for the municipal council which supported all stages of this project since 1975, starting from the decision and reaching the completion of its 
                            construction and its delivery to the citizens of Heraklion, Crete, Greece, the Mediterranean. 
                        </p>
                    </div>

                    <div class="col-md-3">
                        <img src="images/cccc3.png" alt="">
                    </div>

                </div>

            </div>
        </div>

        <div class="py-1 mb-5">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <img id="venue-image" src="images/hall.png" alt="">
                    </div>

                    <div class="col-md-9 mt-0">
                        <h4 class="mb-0">Facilities</h4>
                        <p>
                            <ul class="my-list">
                                <li> <i class="icon-ok-sign"></i>&nbsp; The <b class="underline" onclick="showVenueImage('images/hall.png')">Concert Hall</b> has a capacity of 215 seats, and includes the required stage space and technical equipment.</li>
                                <li> <i class="icon-ok-sign"></i>&nbsp; The <b class="underline" onclick="showVenueImage('images/stage.png')">Experimental Stage</b> with 180 seats and a stage dedicated to movie screenings, chamber music concerts, recitals, plays, lectures and other presentations.</li>
                                <li> <i class="icon-ok-sign"></i>&nbsp; The <b class="underline" onclick="">Seminar Room</b> with 180 seats and equipment supporting the organization of conferences, workshops, exhibitions, etc., with the ability to be divided into two sections of equal capacity.</li>
                            </ul>
                        </p>
                    </div>

                </div>

                <div class="divider divider-center"><i class="icon-globe-africa"></i></div>

                <iframe class="w-100 mt-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2301.5594938632066!2d25.12992566584432!3d35.333394494779704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x149a5987e50bedd9%3A0xab0037183204b1d2!2sCultural%20Conference%20Center%20of%20Heraklion!5e0!3m2!1sen!2sgr!4v1650026080910!5m2!1sen!2sgr" height="300px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            </div>
        </div>

        @endsection