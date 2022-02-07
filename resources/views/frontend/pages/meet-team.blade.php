@extends('layouts.frontend.app')

@section('pageContent')
    <div class="no-print" id="wrapper">
        <!-- Page Content -->
        <div id="page-content-wrapper" class="main-wrapper">

            <!-- Navbar -->
            @include('layouts.frontend.header-ground-block')

            <!-- <div class="container-fluid p-3"> -->
            <div class="body-wrapper">
                <main>
                    <!-- section 1 -->
                    <section class="meet-team-s1 py-100">
                        <div class="px-5">
                            <div class="custom-header text-center">
                                <h1>Meet Our Powerful Team</h1>
                                <p>Our team consist of Integrity, History, Talent, Innovation, Leadership, Transparency</p>
                            </div>
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="bio-wrap">
                                            <div class="button-wrap text-center">
                                                <a href="#" class="btn-shadow">History</a>
                                            </div>
                                            <div class="name mt-3 text-center">
                                                <h3>Shultz Wang</h3>
                                                <p>Project Oversight Manager</p>
                                            </div>
                                            <div class="picture mt-3 text-center">
                                                <img src="/img/meet-team/wang.jpg" alt="">
                                            </div>
                                            <div class="description text-center p-3">
                                                <p>Specialized tech development and assist to communicate with the coders</p>
                                                <p>Worked for Samsung Electronics, Google Oppo and Vivo</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="bio-wrap">
                                            <div class="button-wrap text-center">
                                                <a href="#" class="btn-shadow">Integrity</a>
                                            </div>
                                            <div class="name mt-3 text-center">
                                                <h3>Genevievette</h3>
                                                <p>General Lead Counsel</p>
                                            </div>
                                            <div class="picture mt-3 text-center">
                                                <img src="/img/meet-team/genevievette.jpg" alt="">
                                            </div>
                                            <div class="description text-center p-3">
                                                <p>Compliance Inspection and Examinations at the U.S. Securities and Exchange Commission (SEC) from 2001-2006</p>
                                                <p>Lead attorney for the largest LARGEST Ponzi Scheme of Bernie Madoff.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="bio-wrap">
                                            <div class="button-wrap text-center">
                                                <a href="#" class="btn-shadow">Talent</a>
                                            </div>
                                            <div class="name mt-3 text-center">
                                                <h3>Niranjan Singh</h3>
                                                <p>Technical Advisor</p>
                                            </div>
                                            <div class="picture mt-3 text-center">
                                                <img src="/img/meet-team/niranjan.jpg" alt="">
                                            </div>
                                            <div class="description text-center p-3">
                                                <p>Specializing in tech platforms especially in the blockchain field.
                                                    Graduated from Penn State University and has won a major hackathon at PSU.</p>
                                                <p>Owns blockchain consulting firm in Silicon Valley.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- section 2 -->
                    <section class="meet-team-s2 py-100">
                        <div class="container">
                            <div class="custom-header text-center">
                                <h3>Innovation, creativity, dedication, leadership</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="/img/meet-team/kim.jpg" alt="">
                                </div>
                                <div class="col-md-7">
                                    <div class="w-25 t-line mb-4"></div>
                                    <p class="h1">Han S. Kim</p>
                                    <div class="description">
                                        <p>Founder, CEO of OkGlobal Coin SWITCH Pte. Ltd.</p>
                                        <p>Business ownership experience in insurance, finance and technology.</p>
                                        <p>Currently operating doctors' malpractice insurance brokerage originally established 1999 and became No.1 in California.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- section 3 -->
                    <section class="meet-team-s3 py-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <a href="#" class="btn-shadow">Transparency</a>
                                    <h2 class="my-4">YouTube Docuseries</h2>
                                    <p>
                                        We are the ONLY project to be so transparent and only in the world with ISCs that will later convert to the first publicly owned non-profilt borderless blockchain banking system in the world
                                    </p>
                                </div>
                                <div class="col-md-8 d-flex">
                                    <div class="embed-responsive embed-responsive-4by2">
                                        <iframe src="https://www.youtube.com/embed/iK9Dsb8CeYM?t=87s" frameborder="0" allow="accelerometer; autoplay;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
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