@extends('frontend.include.master')
@section('content')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Software Development </h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Software Developmet</a>
            </div>
        </div>
    </div>
    {{-- start  build perpose --}}
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="content_soft">
                    <p style="text-align: center">OUR ARTISANS CRAFT PERFECT WEBSITES</p>
                    <h2 style="text-align: center">How We Build The Perfect Software?</h2>
                    <p class=" text-center text-monospace">It takes a creative mind and an experienced software developer to
                        know exactly what a software
                        needs that will add <br>value to it.Our team of softwaredevelopers are<br>
                        nothing short of artisans as they are well versed in their craft. We design Software that leave
                        visitors in awe</p>
                </div>
                <div class="course mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mt-3 b_shadow wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2 img_course">
                                            <img src="{{ asset('frontend/img/web-development.png') }}" alt=""
                                                class="" height="100" width="100">
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-9 course_details">
                                            <h3>Software Development</h3>
                                            <p>With a skilled team, we put all our cards in play to design and build the
                                                perfect Software suited for the needs of your organization.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mt-3 b_shadow wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2 img_course">
                                            <img src="{{ asset('frontend/img/web-development.png') }}" alt=""
                                                class="" height="100" width="100">
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-9 course_details">
                                            <h3>Software Development</h3>
                                            <p>With a skilled team, we put all our cards in play to design and build the
                                                perfect Software suited for the needs of your organization.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mt-3  b_shadow wow fadeInRight" data-wow-delay="0.1s">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2 img_course">
                                            <img src="{{ asset('frontend/img/web-development.png') }}" alt=""
                                                class="" height="100" width="100">
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-9 course_details">
                                            <h3>Software Development</h3>
                                            <p>With a skilled team, we put all our cards in play to design and build the
                                                perfect Software suited for the needs of your organization.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mt-3  b_shadow wow fadeInRight" data-wow-delay="0.1s">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2 img_course">
                                            <img src="{{ asset('frontend/img/web-development.png') }}" alt=""
                                                class="" height="100" width="100">
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-9 course_details">
                                            <h3>Software Development</h3>
                                            <p>With a skilled team, we put all our cards in play to design and build the
                                                perfect Software suited for the needs of your organization.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>

    {{-- end build purpose --}}

    {{-- why perfect start --}}
    <section class="per_web mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="mt-3">
                        <h2 class="text-center">How We Create Perfectly Tailored Websites</h2>
                    </div>

                    <div class="row mt-5 mb-5">


                        <div class="col-md-3 ">
                            <div class="card b_shadow wow fadeInUp" data-wow-delay="0.1s">
                                <img class=" mt-5 img_course"
                                    src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                    alt="Card image cap" height="48px" width="48px">
                                <div class="card-body course_details">
                                    <h5 class="card-title text-center">Research</h5>
                                    <p class="text-center mt-3 mb-5 p-3">Scour scores of authentic data to find the best
                                        suited layout for your website as well as researching the best suitable
                                        keywords.</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="card b_shadow  wow fadeInUp" data-wow-delay="0.1s">
                                <img class=" mt-5 img_course"
                                    src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                    alt="Card image cap" height="48px" width="48px">
                                <div class="card-body course_details">
                                    <h5 class="card-title text-center">Research</h5>
                                    <p class="text-center mt-3 mb-5 p-3">Scour scores of authentic data to find the best
                                        suited layout for your website as well as researching the best suitable
                                        keywords.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card b_shadow wow fadeInUp" data-wow-delay="0.1s">
                                <img class=" mt-5 img_course"
                                    src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                    alt="Card image cap" height="48px" width="48px">
                                <div class="card-body course_details">
                                    <h5 class="card-title text-center">Research</h5>
                                    <p class="text-center mt-3 mb-5 p-3">Scour scores of authentic data to find the best
                                        suited layout for your website as well as researching the best suitable
                                        keywords.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card b_shadow wow fadeInUp" data-wow-delay="0.1s">
                                <img class=" mt-5 img_course"
                                    src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                    alt="Card image cap" height="48px" width="48px">
                                <div class="card-body course_details">
                                    <h5 class="card-title text-center">Research</h5>
                                    <p class="text-center mt-3 mb-5 p-3">Scour scores of authentic data to find the best
                                        suited layout for your website as well as researching the best suitable
                                        keywords.</p>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>

            </div>
            <div class="col-md-1"></div>
        </div>
        </div>
    </section>
    {{-- why perfect end --}}
    {{-- online identify --}}
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5 identify_content mt-5 mb-3">
                    <p>
                        SPECIAL CONSIDERATIONS FOR YOUR ONLINE IDENTITY</p>
                    <h2>Design Websites To Showcase The Identity Of Your Business Organization</h2>
                    <p class="mt-5">Your website is responsible for over 90% of your business processes and this figure
                        increases everyday. We make sure your website is created in the most perfect form possible that
                        suits the industry. The functionality of most websites is to convert visitors to sales and without
                        this, the website is rendered useless. With our trained web developers at work, your organization
                        will receive special treatment
                        as we ask questions and conduct thorough research to design a website that offers you the highest
                        ROI.</p>
                </div>

                <div class="col-md-5 identify_img mt-5">
                    <img src="{{ asset('frontend/img/beautiful-website.jpg') }}" alt="" height="100%"
                        width="100%">
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>

    </section>

    {{-- other web link start --}}
    <section class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-4 ">
                <div class="web_img">
                    <div class="mt-2">
                        <img src="{{ asset('frontend/img/other_web.png') }}" alt="" height="100%"
                            width="100%">
                    </div>
                    <div class="web_content text-white text-center ">
                        <h3 class="text-white mt-5">MCA Leads HUB</h3>
                        <p class="mt-3">Develop the entire application, managed social media profiles with paid
                            promotions, and provided graphic design support for their needs.</p>
                        <a href="" class="btn btn-primary  rounded-circle" style="margin:auto;color:white">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="col-md-4 ">
                <div class="web_img">
                    <div class="mt-2">
                        <img src="{{ asset('frontend/img/other_web.png') }}" alt="" height="100%"
                            width="100%">
                    </div>
                    <div class="web_content text-white text-center ">
                        <h3 class="text-white mt-5">MCA Leads HUB</h3>
                        <p class="mt-3">Develop the entire application, managed social media profiles with paid
                            promotions, and provided graphic design support for their needs.</p>
                        <a href="" class="btn btn-primary  rounded-circle" style="margin:auto;color:white">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="col-md-4 ">
                <div class="web_img">
                    <div class="mt-2">
                        <img src="{{ asset('frontend/img/other_web.png') }}" alt="" height="100%"
                            width="100%">
                    </div>
                    <div class="web_content text-white text-center ">
                        <h3 class="text-white mt-5">MCA Leads HUB</h3>
                        <p class="mt-3">Develop the entire application, managed social media profiles with paid
                            promotions, and provided graphic design support for their needs.</p>
                        <a href="" class="btn btn-primary  rounded-circle" style="margin:auto;color:white">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="col-md-4 ">
                <div class="web_img">
                    <div class="mt-2">
                        <img src="{{ asset('frontend/img/other_web.png') }}" alt="" height="100%"
                            width="100%">
                    </div>
                    <div class="web_content text-white text-center ">
                        <h3 class="text-white mt-5">MCA Leads HUB</h3>
                        <p class="mt-3">Develop the entire application, managed social media profiles with paid
                            promotions, and provided graphic design support for their needs.</p>
                        <a href="" class="btn btn-primary  rounded-circle" style="margin:auto;color:white">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-md-4 ">
                <div class="web_img">
                    <div class="mt-2">
                        <img src="{{ asset('frontend/img/other_web.png') }}" alt="" height="100%"
                            width="100%">
                    </div>
                    <div class="web_content text-white text-center ">
                        <h3 class="text-white mt-5">MCA Leads HUB</h3>
                        <p class="mt-3">Develop the entire application, managed social media profiles with paid
                            promotions, and provided graphic design support for their needs.</p>
                        <a href="" class="btn btn-primary  rounded-circle" style="margin:auto;color:white">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="col-md-4 ">
                <div class="web_img">
                    <div class="mt-2">
                        <img src="{{ asset('frontend/img/other_web.png') }}" alt="" height="100%"
                            width="100%">
                    </div>
                    <div class="web_content text-white text-center ">
                        <h3 class="text-white mt-5">MCA Leads HUB</h3>
                        <p class="mt-3">Develop the entire application, managed social media profiles with paid
                            promotions, and provided graphic design support for their needs.</p>
                        <a href="" class="btn btn-primary  rounded-circle" style="margin:auto;color:white">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </section>

    {{-- other web link end --}}
    {{-- Faqs start --}}
    <section class=" per_web container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="mx-auto text-center">
                    <h3 class="mt-4">FAQS</h3>
                    <p class="course_details">To get the fastest answer for any question simply contact us and ask
                        anything.</p>

                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class=" text-center pb-4">
                        <div style="height:50px;background-color:white;line-height:50px;font-size:25px">
                            <span>What if I am dissatisfied with the website designed for me?</span>
                            <span style="margin-left:30%"><i class="fa fa-angle-down" id="angle_down"
                                    style="display:inline" onclick="qustion()"></i></span>
                            <span style=""><i class="fa fa-angle-up" id="angle_up" style="display:none"
                                    onclick="qustion_stop()"></i></span>


                        </div>
                        <div class=" text-center pb-4" style="display: none" id="q_answer">

                            <div style="background-color:white;line-height:50px;font-size:25px" class="mt-2">
                                <span>If you are dissatisfied with the quality of our work, we can work on it after a
                                    discussion and redesign the website for you. If you are dissatisfied with the inability
                                    of your website to bring in customers, we can redesign it without any hidden
                                    costs.</span>


                            </div>
                        </div>

                    </div>
                    <div class=" text-center pb-4">
                        <div style="height:50px;background-color:white;line-height:50px;font-size:25px">
                            <span>

                                Can I get a daily update to see the progress of my website?</span>
                            <span style="margin-left:30%"><i class="fa fa-angle-down" id="angle_down1"
                                    style="display:inline" onclick="qustion1()"></i></span>
                            <span style=""><i class="fa fa-angle-up" id="angle_up1" style="display:none"
                                    onclick="qustion_stop1()"></i></span>


                        </div>
                        <div class=" text-center pb-4" style="display: none" id="q_answer1">

                            <div style="background-color:white;line-height:50px;font-size:25px" class="mt-2">
                                <span>Yes, we provide updates on the progress of your website to our clients whenever they
                                    require it and if they require an update
                                    on a daily basis, we would be obliged to provide the reports.</span>


                            </div>
                        </div>

                    </div>

                    <div class=" text-center pb-4">
                        <div style="height:50px;background-color:white;line-height:50px;font-size:25px">
                            <span>

                                Do you design your webpages to be accessible properly by all devices?</span>
                            <span style="margin-left:18%"><i class="fa fa-angle-down" id="angle_down2"
                                    style="display:inline" onclick="qustion2()"></i></span>
                            <span style=""><i class="fa fa-angle-up" id="angle_up2" style="display:none"
                                    onclick="qustion_stop2()"></i></span>


                        </div>
                        <div class=" text-center pb-4" style="display: none" id="q_answer2">

                            <div style="background-color:white;line-height:50px;font-size:25px" class="mt-2">
                                <span>As a part of our website testing process, we make sure the website is accessible
                                    through
                                    all devices and platforms that include cell phones, tabs and other portable devices
                                    running on different operating systems.
                                    We make sure the website is available on all devices perfectly before we launch the
                                    website.</span>


                            </div>
                        </div>

                    </div>

                    <div class=" text-center pb-4">
                        <div style="height:50px;background-color:white;line-height:50px;font-size:25px">
                            <span>Can your staff update my website for me in the near future after it has gone live?</span>
                            <span style="margin-left:8%"><i class="fa fa-angle-down" id="angle_down3"
                                    style="display:inline" onclick="qustion3()"></i></span>
                            <span style=""><i class="fa fa-angle-up" id="angle_up3" style="display:none"
                                    onclick="qustion_stop3()"></i></span>


                        </div>
                        <div class=" text-center pb-4" style="display: none" id="q_answer3">

                            <div style="background-color:white;line-height:50px;font-size:25px" class="mt-2">
                                <span>Yes we can monitor and update the website we’ve built for you in the foreseeable
                                    future since a website needs to be updated to
                                    keep up with changing trends. We can also update your website and create more pages if
                                    necessary.</span>


                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- faqs end --}}
    {{--seo start--}}
<section class="container mt-5">
    <div class="row">
        <div class="col-md-6 mt-5">
            <img src="{{asset('frontend/img/organic-ranking-seo.png')}}" height="100%" width="100%" alt="" class="b_shadow" style="border-radius:10% 0 20% 0">
        </div>
        <div class="col-md-6 mt-5 content_soft">
       <p>
        WE GET YOU UP THERE ON SEARCH ENGINES WITHOUT PAYING FOR ADS</p>
       <h2>Websites Built To Organically Rank On Google With SEO</h2>
      <p>It’s not always that ads work on google searches as most people are too skeptical about them. We conduct thorough keyword research to optimize your webpages to organically rank on Google. This eliminates the chances of you losing skeptical customers while attracting those who find exactly what they’re looking for. Optimize your webpages when you design your business website with us and we will unleash the power of your website and make it rank on search engines organically.</p>
    </div>
    </div>
</section>
        {{--seo end--}}
        {{-- showcase start --}}
<section class="showcase container-fluid mt-5">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 text-center mt-5"> <h1 class="text-white ">Showcase Your Excellence And Online<br> Presence With <br>Professionally Designed Websites.</h1>
        <a type="button" href="" class=" btn btn-info text-white mb-5">Grow Your Business</a></div>
    <div class="col-md-2"></div>

</div>
</section>
          {{-- showcase end --}}

          {{-- case studies start --}}
  <section class="container mt-5">
    <div class="row">

        <h2 class="text-center">Case Studies</h2>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                <div>
                    <label for="">Industry:</label>
                    <a href="" type="button" class="btn btn-light">Energy & Utility</a>
                </div>

                <div class="row mt-5">
                    <div class="col-md-4"><h3>94%</h3></div>
                      <div class="col-md-4"></div>
                        <div class="col-md-4"><h3>72%</h3></div>
                </div>
                <div>
                   <h4>Web Development Opportunities <br>& Marketing</h4>

                </div>
                <div>
                    <p>
                        We’ve been left astounded by the results we’ve got from their team of web developers who’ve multiplied our
                        quote yields by almost 50x. These are no new players, they’re experts in the game and deserve that recognition.
                         Give their services a go and experience the power of web development for yourself.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <h4 align="right">Barry Martin</h4>
                        <p align="right">Business Development Manager</p>
                    </div>
                      <div class="col-md-3">
                        <img src="{{asset('frontend/img/barry.jpg')}}" alt="" style="border-radius:50%" height="100%" width="100%">
                      </div>
                </div>
                </div>
              </div>
        </div>

    </div>

  </section>
            {{-- case studies end --}}
@endsection
@push('script')
    <script>
        function qustion() {

            document.getElementById('q_answer').style.display = 'inline';

            document.getElementById('angle_down').style.display = 'none';
            document.getElementById('angle_up').style.display = 'inline';

        }

        function qustion_stop() {
            document.getElementById('q_answer').style.display = 'none';
            document.getElementById('angle_up').style.display = 'none';
            document.getElementById('angle_down').style.display = 'inline';
        }


        function qustion1() {

            document.getElementById('q_answer1').style.display = 'inline';

            document.getElementById('angle_down1').style.display = 'none';
            document.getElementById('angle_up1').style.display = 'inline';

        }

        function qustion_stop1() {
            document.getElementById('q_answer1').style.display = 'none';
            document.getElementById('angle_up1').style.display = 'none';
            document.getElementById('angle_down1').style.display = 'inline';
        }

        function qustion2() {

            document.getElementById('q_answer2').style.display = 'inline';

            document.getElementById('angle_down2').style.display = 'none';
            document.getElementById('angle_up2').style.display = 'inline';

        }

        function qustion_stop2() {
            document.getElementById('q_answer2').style.display = 'none';
            document.getElementById('angle_up2').style.display = 'none';
            document.getElementById('angle_down2').style.display = 'inline';
        }



        function qustion3() {

            document.getElementById('q_answer3').style.display = 'inline';

            document.getElementById('angle_down3').style.display = 'none';
            document.getElementById('angle_up3').style.display = 'inline';

        }

        function qustion_stop3() {
            document.getElementById('q_answer3').style.display = 'none';
            document.getElementById('angle_up3').style.display = 'none';
            document.getElementById('angle_down3').style.display = 'inline';
        }
    </script>
@endpush
