@extends('frontend.include.master')
@section('content')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Career</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Career</a>
            </div>
        </div>
    </div>
    {{-- //ekit start --}}
    <section class="ekit container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <h2 class="ekit_heading">
                        iBOS, The Fastest Growing Software Company in Bangladesh With <span class="year">15 Years</span>
                        of Experience
                    </h2>
                    <p>
                        <span style=" color: rgb(117, 157, 225)">iBOS</span> – Intelligent Business Operating System,
                        growing to become one of the best Software Company in Bangladesh, is focused on bringing in the
                        finest business solutions of the country that will make business automation more manageable than
                        ever. We believe in young minds who know how to put innovation and efficiency on the same page.

                        Discover fulfilling roles, from software development to project management, and contribute to
                        groundbreaking solutions that shape the future of technology. Elevate your career with us – where
                        your skills, creativity, and aspirations converge to create a meaningful impact.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="approach">Approach of Work</h2>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="row">
                            <div class="col-md-4 "><img src="{{ asset('frontend/img/think.jpeg') }}" alt=""
                                    height="50px" width="50px">
                            </div>
                            <div class="col-md-8 mt-2">Analytical Thinking</div>
                            <div class="mt-3">
                                <p>
                                    We prefer bottom-up thinking. We experiment, gain knowledge, strategize, and then
                                    execute.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 mt-5">
                        <div class="row">
                            <div class="col-md-4 "><img src="{{ asset('frontend/img/think.jpeg') }}" alt=""
                                    height="50px" width="50px">
                            </div>
                            <div class="col-md-8 mt-2">Analytical Thinking</div>
                            <div class="mt-3">
                                <p>
                                    We prefer bottom-up thinking. We experiment, gain knowledge, strategize, and then
                                    execute.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 mt-5">
                        <div class="row">
                            <div class="col-md-4 "><img src="{{ asset('frontend/img/think.jpeg') }}" alt=""
                                    height="50px" width="50px">
                            </div>
                            <div class="col-md-8 mt-2">Analytical Thinking</div>
                            <div class="mt-3">
                                <p>
                                    We prefer bottom-up thinking. We experiment, gain knowledge, strategize, and then
                                    execute.
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6 mt-5">
                        <div class="row">
                            <div class="col-md-4 "><img src="{{ asset('frontend/img/think.jpeg') }}" alt=""
                                    height="50px" width="50px">
                            </div>
                            <div class="col-md-8 mt-2">Analytical Thinking</div>
                            <div class="mt-3">
                                <p>
                                    We prefer bottom-up thinking. We experiment, gain knowledge, strategize, and then
                                    execute.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6  box">

                <div class=" ekit_img">
                    <img src="{{ asset('frontend/img/legel.jpg') }}" alt="" width="100%" height="100%">
                </div>
                <div class=" ekit_content wow fadeInRight">
                    <div class="row">
                        <div class="col-md-4 text-center mt-5"><a href=""
                                style="font-size:30px;padding:30px;background-color:blue; color:white"><i
                                    class="fas fa-phone"></i></a></div>
                        <div class="col-md-8">
                            <h3>Official Contact (Admin)</h3>
                            <p>01xxxxxxx</p>
                        </div>
                    </div>
                </div>


            </div>


        </div>

    </section>
    {{-- why we best --}}
    <section class="container why-best">
        <div class="row">
            <div class="col-md-12">
                <div class="best-heading">
                    <h2 class="text-center" style="margin-top: 20vh;color:#2c327c">
                        What Makes us one of the Best Software Company in Bangladesh?
                    </h2>
                </div>
                <div class="best_content text-center mt-4" style="font-size:18px">
                    <p>
                        Starting our journey officially in 2020, we have grown rapidly to become one of the leading software
                        companies in Bangladesh. Curious to know how we achieved such a feat within such short time? Here’s
                        how we have become one of the best software company in Bangladesh in 2024.
                    </p>
                </div>

            </div>

            <ul class="nav nav-tabs  nav-justified best_nav" id="myTab" role="tablist">
                <li class="nav-item " role="presentation">
                    <button class="nav-link active btn btn-lg" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true"><i class="far fa-star"
                            style="margin-right: 10%"></i>Exceptional Talents</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn btn-lg" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false"> <i
                            class="fas fa-circle-notch" style="margin-right: 10%"></i>Agile Work Process</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn btn-lg" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                        type="button" role="tab" aria-controls="contact" aria-selected="false"> <i
                            class="fas fa-user" style="margin-right: 10%"></i>Customer Centric</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">

                        <div class="col-md-5 ">
                            <div class="exep_img">
                                <img src="{{ asset('frontend/img/Exceptional-Talent-at-iBOS-Limited.jpg') }}"
                                    alt="" height="304" width="456">
                            </div>

                        </div>
                        <div class="col-md-7">
                            <div class=" exep_content justified">
                                <h2>A Winning Team of Exceptional Talents</h2>
                                <p style="font-size: 18px">We boast about the resources we have that makes us one of the
                                    leading software company in Bangladesh. Handpicked talents graduating from top
                                    institutes in Bangladesh joins our team as fresher and grows themselves into top talents
                                    with the help of our highly experienced and versatile leaders.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">


                        <div class="col-md-7">
                            <div class=" exep_content justified">
                                <h2>A Winning Team of Exceptional Talents</h2>
                                <p style="font-size: 18px">We boast about the resources we have that makes us one of the
                                    leading software company in Bangladesh. Handpicked talents graduating from top
                                    institutes in Bangladesh joins our team as fresher and grows themselves into top talents
                                    with the help of our highly experienced and versatile leaders.</p>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="exep_img">
                                <img src="{{ asset('frontend/img/Exceptional-Talent-at-iBOS-Limited.jpg') }}"
                                    alt="" height="304" width="456">
                            </div>

                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">

                        <div class="col-md-5 ">
                            <div class="exep_img">
                                <img src="{{ asset('frontend/img/Exceptional-Talent-at-iBOS-Limited.jpg') }}"
                                    alt="" height="304" width="456">
                            </div>

                        </div>
                        <div class="col-md-7">
                            <div class=" exep_content justified">
                                <h2>A Winning Team of Exceptional Talents</h2>
                                <p style="font-size: 18px">We boast about the resources we have that makes us one of the
                                    leading software company in Bangladesh. Handpicked talents graduating from top
                                    institutes in Bangladesh joins our team as fresher and grows themselves into top talents
                                    with the help of our highly experienced and versatile leaders.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- open position start --}}
    <section class="container open-position">
        <div class="row">
            <div class="col-md-12 open_content text-center">
                <h2 style="color:#2c327c">Open Positions</h2>
                <p style="font-size: 18px">Explore the open positions at the leading software company in Bangladesh and
                    apply in the position that suits your qualifications and interest most.</p>
            </div>

            <div class="col-md-12 mt-5">
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">Name Of The Position</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Apply Procedure</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>

                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>

                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    {{-- A Way OF life --}}
    <section class="container up_events">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h1 class="pro-hed-content  main-heading text-dark text-center">A way Of Life</h1>

                    <p style="font-size: 18px; text-align:center">The culture at iBOS is more than just a set of
                        values—it's a vibrant community of passionate individuals dedicated to pushing boundaries and
                        fostering innovation. Embracing a collaborative and inclusive environment, we thrive on creativity
                        and teamwork.</p>
                </div>
            </div>


            <div class="upcoming_event_slide col-md-12   pb-5" style="background-color: rgb(242, 237, 237)">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner mt-5">
                        <div class="carousel-item active">
                            <img src="{{ asset('frontend/img/web-1.jpg') }}" class="d-block w-100" alt="...">

                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/img/web-2.jpg') }}" class="d-block w-100" alt="...">

                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/img/web-3.jpg') }}" class="d-block w-100" alt="...">

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </div>

            <div class="text-center mt-3" style="font-size:30px">
                <a href="" class="btn btn-info btn-lg">Follow Us ON Linkdin
                </a>

            </div>
        </div>

    </section>

    <section class="container-fluid resume">
        <div class="row">
            <div class="col-md-6 resume_content">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <h2 class="text-center" style="font-size: 40px">You can submit your Resume here!</h2>
                        <p class="text-center" style="font-size: 20px">Interested to join the fastest growing software
                            company in Bangladesh? Submit your Resume here, we’ll contact with you as soon as possible.</p>
                        <a href="" class=" justify-content-center btn btn-primary btn-lg"
                            style="background-color:#4975ba">Submit Your Resume Here <i
                                class="far fa-arrow-alt-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <img src="{{asset('frontend/img/resume.svg')}}" alt="" height="70%" width="70%">
            </div>

        </div>
        <div class="col-md-8  level b_shadow pb-4">
            <div class="row">
                <div class="col-md-12 level_heading">
                <h1 class="text-center">Level Up Your <span class="year">Business</span> With the Finest Solutions</h1>
                </div>
                <div class="col-md-2"> </div>
                <div class="col-md-8">
                    <div class="row">
                        
                        <div class="col-md-12"><div class="d-flex">
                            <a href="" class="schedule btn btn-primary" style="text-transform: uppercase ;width:45%;">Schedule A Demo</a>
                                  <span class="or" > OR </span>
                            <a href="" class="company btn btn-info" style="text-transform: uppercase ;width:50%;">Company Profile</a>
                        </div></div>
                   
                    </div>
                </div>
             </div>
                <div class="col-md-2"> </div>
            </div>
        </div>
        </div>

    </section>
@endsection
