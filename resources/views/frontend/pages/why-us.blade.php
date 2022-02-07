@extends('layouts.frontend.app')

@section('pageContent')
    <div class="no-print" id="wrapper">
        <!-- Page Content -->
        <div id="page-content-wrapper" class="main-wrapper">

            <!-- Navbar -->
            @include('layouts.frontend.header-ground-flex')

            <!-- <div class="container-fluid p-3"> -->
            <div class="body-wrapper">
                <main>
                    <!-- Hero part -->
                    <section class="banner why-us-banner py-100"  style="background-image: url('/img/why-us/background.png');">
                        <div class="px-5 pt-80">
                            <div class="custom-header text-center">
                                <h1>Problems being solved with our project</h1>
                            </div>
                            <div class="container img-container mt-5">
                                <img src="{{ asset('img/money-project/6things_v2.png') }}" alt="" class="display-img">
                            </div>
                        </div>
                    </section>

                    <!-- What does our project do -->
                    <section class="why-us-s1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-container">
                                        <img src="{{ asset('img/why-us/invester_1.png') }}" alt="" class="display-img">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="p-5">
                                        <div class="w-25 t-line mb-3"></div>
                                        <h1 class="title mb-4">What does our project do?</h1>
                                        <div class="description">
                                            <ul>
                                                <li>
                                                    We will replace all government fiat currency with our own 
                                                    <strong>REAL decentralized blockchain</strong> 
                                                    based community controlled money
                                                </li>
                                                <li>
                                                    We will back our money with various assets such as 
                                                    <strong>gold, silver, properties, services.</strong>
                                                </li>
                                                <li>
                                                    We will <strong>offset inflation loss</strong> 
                                                    by generating an income stream from routine financial services and investments.
                                                </li>
                                                <li>
                                                    We will, for the first time in history of our species, have the OPTIONAL ability to add our 
                                                    <strong>own identity to our own money</strong> 
                                                    to eliminate the risks from theft or even negligent loss.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Section -->
                    <section class="why-us-s2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="w-25 t-line ml-5"></div>
                                    <div class="p-5">
                                        <p class="h1">No other projects address the important issue of REAL money necessary at this point in our life more than possibly EVER.</p>
                                        <p class="h1">We are fixing government fiat currency and problems that exit with current cryptocurrency.</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="img-container">
                                        <img src="{{ asset('img/why-us/invester_2.png') }}" alt="" class="display-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>

            @include('layouts.frontend.footer')
        </div>
    </div>
@endsection