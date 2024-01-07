@extends('navbar') 

@section('content') 
           {{$s}}
        <div class="section mt-0 py-5">
            <div class="container">
                <h3 class="mb-0">
                    Sponsors
                </h3>
            </div>
        </div>

        <div class="py-1">
            <div class="container mb-5">

                The following organizations are supporting us:

                <div class="justify-content-center">
                    <ul class="clients-grid grid-4 grid-sm-2 grid-xm-2 grid-md-4 my-5 mb-5">

                        <li class="grid-item mx-auto"><img src="{{ $empleado->src}}" alt="{{ $empleado->alt}}"></a></li>
                    </ul>
                </div>

                If your organization/society/company is interested to support the JURSE 2023 event, please contact us at <a class="text-decoration-underline" href="mailto:zedd2@iacm.forth.gr">zedd2@iacm.forth.gr</a>

            </div>
        </div>

        @endsection