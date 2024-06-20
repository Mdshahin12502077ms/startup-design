@extends('frontend.include.master')
@section('content')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Booking Management System</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Booking Management System</a>
            </div>
        </div>
    </div>

    {{-- session start --}}
    <section class="container">
        <div class="row">


            <div class="col-md-12 col-sm-12">
                <h2 class="sbc-heading">Session Border Controller (SBC)</h2>
                <p style="margin-bottom: 40px;">REVE Session Border Controller (SBC) is a powerful and scalable Class 4
                    Softswitch platform for communication service providers. With REVE SBC, your network security becomes
                    robust and promising. Our virtual session border controller has distributed architecture for network
                    availability & resiliency to prevent any threat. Powered with a real-time billing platform with
                    intelligent routing, REVE SBC telecom software makes your IP wholesale business more scalable. You can
                    manage your wholesale VoIP traffic seamlessly with REVE SBC.</p>
            </div>

        </div>

    </section>
    {{-- session end --}}

    <section id="" class="" style="padding: 30px 0 0;">
        <div class="container">
            <div class="row">
                <div class="text-center col-md-12">
                    <h2 class="sbc-heading">Why REVE Session Border Controller (SBC)?</h2>
                </div>
            </div>
            <div class="card b_shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 wow zoomIn">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img_responsive">
                                        <img src="{{ asset('frontend/img/sbc1.svg') }}" alt="" height="100"
                                            width="100" class="">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="sbc_content">
                                        <p>Robust network security under<br>
                                            heavy loads & DoS attacks</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow zoomIn">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img_responsive">
                                        <img src="{{ asset('frontend/img/sbc2.svg') }}" alt="" height="100"
                                            width="100" class="">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="sbc_content">
                                        <p>Distributed Architecture<br>
                                            for media & signaling</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 wow zoomIn">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img_responsive">
                                        <img src="{{ asset('frontend/img/sbc3.svg') }}" alt="" height="100"
                                            width="100" class="">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="sbc_content">
                                        <p>Session Capacity of up to 30K<br>
                                            Concurrent Calls with 2000 CPS</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 wow zoomIn">
                            <div class="row">
                                <div class="col-md-4 ">
                                    <div class="img_responsive">
                                        <img src="{{ asset('frontend/img/sbc4.svg') }}" alt="" height="100"
                                            width="100" class="">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="sbc_content">
                                        <p>Flexible & intelligent call routing<br>
                                            & policy management</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 wow zoomIn">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img_responsive">
                                        <img src="{{ asset('frontend/img/sbc5.svg') }}" alt="" height="100"
                                            width="100" class="">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="sbc_content">
                                        <p>Performs the role of a Class 4<br>
                                            Softswitch for your Wholesale Business</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 wow zoomIn">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img_responsive">
                                        <img src="{{ asset('frontend/img/Real-time-01.svg') }}" alt=""
                                            height="100" width="100" class="">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="sbc_content mt-5">
                                        <p>Real-time Billing<br>
                                            Platform Integrated</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="container ">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs  nav-justified product-desc" id="myTab" role="tablist"
                    >
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active nav_height" id="exclusive-tab" data-bs-toggle="tab" data-bs-target="#exclusive"
                            type="button" role="tab" aria-controls="exclusive" aria-selected="true">EXCLUSIVE FEATURES</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link nav_height" id="key-tab" data-bs-toggle="tab" data-bs-target="#key"
                            type="button" role="tab" aria-controls="key" aria-selected="false">KEY FEATURES</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link nav_height" id="TECHNICAL-tab" data-bs-toggle="tab" data-bs-target="#TECHNICAL"
                            type="button" role="tab" aria-controls="TECHNICAL" aria-selected="false">TECHNICAL SPECIFICATIONS</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link nav_height" id="SYSTEM-tab" data-bs-toggle="tab" data-bs-target="#SYSTEM"
                            type="button" role="tab" aria-controls="SYSTEM" aria-selected="false">SYSTEM ARCHITECTURE</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link nav_height" id="RESOURCES-tab" data-bs-toggle="tab" data-bs-target="#RESOURCES"
                            type="button" role="tab" aria-controls="RESOURCES" aria-selected="false">RESOURCES</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="exclusive" role="tabpanel" aria-labelledby="exclusive-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div >
                                        <h2 class="pro-hed-content  main-heading  text-center"
                                        >Only SBC with Cutting-Edge Next Generation Features</h2>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card b_shadow wow fadeInRight " >
                                        <img src="{{asset('frontend/img/Rate-Plan-Normalization.png')}}" class="card-img  mx-auto mt-3 " alt="..."  style="height: 100px; width:100px">
                                        <div class="card-body">
                                          <h3 class="card-title text-center">Rate Plan Normalization</h3>

                                            <ul style="margin-left: 15px" class="mt-2">
                                                <li>Conversion of any termination client’s rate plan format to native format</li>
                                                <li>Easy uploading of VoIP rate plans and conversion into respective templates</li>
                                                <li>Auto conversion of all templates into native rate plan format</li>
                                            </ul>


                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card b_shadow wow fadeInRight " >
                                        <img src="{{asset('frontend/img/Rate-Plan-Normalization.png')}}" class="card-img  mx-auto mt-3 " alt="..."  style="height: 100px; width:100px">
                                        <div class="card-body">
                                          <h3 class="card-title text-center">Rate Plan Normalization</h3>

                                            <ul style="margin-left: 15px" class="mt-2">
                                                <li>Conversion of any termination client’s rate plan format to native format</li>
                                                <li>Easy uploading of VoIP rate plans and conversion into respective templates</li>
                                                <li>Auto conversion of all templates into native rate plan format</li>
                                            </ul>


                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card b_shadow wow fadeInRight " >
                                        <img src="{{asset('frontend/img/Rate-Plan-Normalization.png')}}" class="card-img  mx-auto mt-3 " alt="..."  style="height: 100px; width:100px">
                                        <div class="card-body">
                                          <h3 class="card-title text-center">Rate Plan Normalization</h3>

                                            <ul style="margin-left: 15px" class="mt-2"  >
                                                <li>Conversion of any termination client’s rate plan format to native format</li>
                                                <li>Easy uploading of VoIP rate plans and conversion into respective templates</li>
                                                <li >Auto conversion of all templates into native rate plan format</li>
                                            </ul>


                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card b_shadow wow zoomIn " >
                                        <img src="{{asset('frontend/img/Rate-Plan-Normalization.png')}}" class="card-img  mx-auto mt-3 " alt="..."  style="height: 100px; width:100px">
                                        <div class="card-body">
                                          <h3 class="card-title text-center">Rate Plan Normalization</h3>

                                            <ul style="margin-left: 15px" class="mt-2">
                                                <li>Conversion of any termination client’s rate plan format to native format</li>
                                                <li>Easy uploading of VoIP rate plans and conversion into respective templates</li>
                                                <li>Auto conversion of all templates into native rate plan format</li>
                                            </ul>


                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card b_shadow wow zoomIn " >
                                        <img src="{{asset('frontend/img/Rate-Plan-Normalization.png')}}" class="card-img  mx-auto mt-3 " alt="..."  style="height: 100px; width:100px">
                                        <div class="card-body">
                                          <h3 class="card-title text-center">Rate Plan Normalization</h3>

                                            <ul style="margin-left: 15px" class="mt-2">
                                                <li>Conversion of any termination client’s rate plan format to native format</li>
                                                <li>Easy uploading of VoIP rate plans and conversion into respective templates</li>
                                                <li>Auto conversion of all templates into native rate plan format</li>
                                            </ul>


                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card b_shadow wow zoomIn " >
                                        <img src="{{asset('frontend/img/Rate-Plan-Normalization.png')}}" class="card-img  mx-auto mt-3 " alt="..."  style="height: 100px; width:100px">
                                        <div class="card-body">
                                          <h3 class="card-title text-center">Rate Plan Normalization</h3>

                                            <ul style="margin-left: 15px" class="mt-2"  >
                                                <li>Conversion of any termination client’s rate plan format to native format</li>
                                                <li>Easy uploading of VoIP rate plans and conversion into respective templates</li>
                                                <li >Auto conversion of all templates into native rate plan format</li>
                                            </ul>


                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade wow zoomIn" id="key" role="tabpanel" aria-labelledby="key-tab">
                     <div class="container">
                        <div class="row">
                            <div class="colo-md-12 ">
                                <div >
                                    <h2 class="pro-hed-content  main-heading  text-center"
                                    >Core Features of Session Border Controller</h2>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5 ">
                              <div class="key_content justified">
                                <h2>Secure & Reliable</h2>
                                <p>Integrated intelligent firewall for security attacks and theft of service from malformed packets, Denial of Service (DoS) attacks. Enhanced security/encryption services to protect your business privacy and ensure Compliance,
                                     Fraud & Anomaly Management with Two-Factor Authentication & Role-Based Access Control.</p>
                              </div>
                            </div>
                            <div class="col-md-5">
                                <div class="key_img">
                                    <img src="{{asset('frontend/img/Secure-01.svg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-1"></div>

                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <div class="key_img">
                                    <img src="{{asset('frontend/img/distributed-01.svg')}}" alt="">
                                </div>

                            </div>
                            <div class="col-md-5">
                                <div class="key_content justified">
                                    <h2>Distributed Architecture & SIP Interoperability</h2>
                                    <p>REVE Session Border Controller assures independent & on-demand dynamic scaling of signaling and media traffic. Media Transcoding for flexible SIP session routing. Complete WebRTC & SIP interoperability to support your business with features like video call without any additional plugins.</p>
                                  </div>
                            </div>
                            <div class="col-md-1"></div>

                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                              <div class="key_content justified">
                                <h2>Secure & Reliable</h2>
                                <p>Integrated intelligent firewall for security attacks and theft of service from malformed packets, Denial of Service (DoS) attacks. Enhanced security/encryption services to protect your business privacy and ensure Compliance,
                                     Fraud & Anomaly Management with Two-Factor Authentication & Role-Based Access Control.</p>
                              </div>
                            </div>
                            <div class="col-md-5">
                                <div class="key_img">
                                    <img src="{{asset('frontend/img/Secure-01.svg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-1"></div>

                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <div class="key_img">
                                    <img src="{{asset('frontend/img/distributed-01.svg')}}" alt="">
                                </div>

                            </div>
                            <div class="col-md-5">
                                <div class="key_content justified">
                                    <h2>Distributed Architecture & SIP Interoperability</h2>
                                    <p>REVE Session Border Controller assures independent & on-demand dynamic scaling of signaling and media traffic. Media Transcoding for flexible SIP session routing. Complete WebRTC & SIP interoperability to support your business with features like video call without any additional plugins.</p>
                                  </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                     </div>
                    </div>
                    <div class="tab-pane fade wow fadeInLeft" id="TECHNICAL" role="tabpanel" aria-labelledby="TECHNICAL-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 main-heading text-center "><h2 class="pro-hed-content  main-heading  text-center">Technical Specification of SBC</h2></div>
                                <div class="col-md-12 tech-features">
                                    <div class="row" style="margin-top:10px;">
                                        <div class="col-md-6 col-sm-6 ">
                                            <h3 >Technical Specification</h3>
                                            <table width="100%">
                                                <tbody>
                                                    <tr class="first-row">
                                                        <td width="30%">Supported Protocols: </td>
                                                        <td width="70%">H.323, SIP (RFC 3261), SIP-I, SIP-T<br/>Media: RTP</td>
                                                    </tr>

                                                    <tr class="second-row">
                                                        <td>Codec Support: </td>
                                                        <td>Audio:In conversion mode: OPUS, G.711, G.729 and in G.723 AMR, Transparent mode all Standard codec<br/> Video : H.263, H.264</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Web Server: </td>
                                                        <td>Jakarta, Apache</td>
                                                    </tr>

                                                    <tr>
                                                        <td>SMS: </td>
                                                        <td>SMPP &amp; HTTP</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Database: </td>
                                                        <td>Oracle, MySQL</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Platform: </td>
                                                        <td>Linux / Unix Based</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Architecture: </td>
                                                        <td>Supports distributed Architecture for Robust deployment</td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2"></td>
                                                    </tr>
                                                </tbody>
                                                <tbody></tbody>
                                            </table>
                                            <h3>Supported Protocols &amp; Session Control</h3>
                                            <ul>
                                                <li>SIP v.2.0 (RFC 3261, RFC 4566), SIP-I</li>
                                                <li>SMPP v3.4 protocol for SMS and HTTP</li>
                                                <li>SIP REDIRECT</li>
                                                <li>RADIUS</li>
                                                <li>RFC 3863, 3428, 3903, 3515</li>
                                                <li>Caller-Carrier PTIME isolation</li>
                                                <li>Media Monitor</li>
                                               <!-- <li>RAW IPDRs / Rated CDRs posted</li>
                                                <li>to Mediation Server / Local Memory</li>-->
                                                <li>SIP Header Manipulation/Topology Hiding</li>
                                                <li>Error Code Adaptation</li>
                                                <li>Support for Proxy and Non Proxy</li>
                                            </ul>
                                        </div>

                                        <div class="col-md-5 col-sm-6">
                                            <h3>Tones &amp; Media Functions</h3>
                                            <ul>
                                                <!--<li>All standard Codec in Transparent Mode:<br>G.711, G.723.1, G.726, G.729a, G.729b,  G.729ab, iLBC, G.722,</li>
                                                <li>AMR-NB, AMRWB, GSM Codec Support etc.</li>
                                                <li>Codec Transcoding based on Voice Codec (OPUS,G711,G729)</li>
                                                <li>Auto In band / Out band DTMF over IP (INFO, RFC 2833)</li>
                                                <li>Media: RTP, RTCP</li>--><li>T.38 Fax Relay Protocol</li>
                                            </ul>
                                            <h3>System Architecture</h3>
                                            <ul>
                                                <li>1+1 Hot Standby</li>
                                                <li>Supports distributed Architecture for Robust deployment</li>
                                                <li>Real time data backup</li>
                                                <!--<li>Web Server: Jakarta, Apache Tomcat</li>
                                                <li>Database: Oracle, MySQL, PostgreSQL &amp; MS-SQL</li>-->
                                            </ul>

                                            <h3>WebRTC Functionality</h3>
                                            <ul>
                                                <li>Compatible with any client that complies with WebRTC standards.</li>
                                                <li>SIP over Secure WebSocks</li>
                                                <li>ICE/STUN</li>
                                                <li>SIP Internetworking</li>
                                            </ul>

                                            <h3>Installation Platforms</h3>
                                            <ul>
                                                <li>Supports Unix/Linux Based Platform</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                          <div class="tab-pane fade wow fadeInRight" id="SYSTEM" role="tabpanel" aria-labelledby="SYSTEM-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div >
                                            <h2 class="pro-hed-content  main-heading  text-center"
                                            >Core Features of Session Border Controller</h2>
                                        </div>


                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <img src="{{asset('frontend/img/sbc-diagram-new.png')}}" alt="">
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </div>
                          </div>
                    <div class="tab-pane fade wow zoomIn" id="RESOURCES" role="tabpanel" aria-labelledby="RESOURCES-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div >
                                        <h2 class="pro-hed-content  main-heading  text-center"
                                        >Resources</h2>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <div class="img_content  mx-auto">
                                        <h2>Brochure
                                        </h2>
                                        <img src="{{asset('frontend/img/brosure.png')}}" alt="" width="100px" height="141px" class="mx-auto">
                                    </div>

                                    <a href="" type="button" class="btn btn-info download_btn mx-auto mt-3"><i class="fa fa-download" style="margin-right:10%"></i>Download</a>
                                </div>

                                <div class="col-md-3 text-center">
                                    <div class="img_content  mx-auto">
                                        <h2>Data Sheet
                                        </h2>
                                        <img src="{{asset('frontend/img/brosure.png')}}" alt="" width="100px" height="141px" class="mx-auto">
                                    </div>

                                    <a href="" type="button" class="btn btn-info download_btn mx-auto mt-3"><i class="fa fa-download" style="margin-right:10%"></i>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- //upcoming heading start --}}
    <section class="container up_events">
        <div class="row">
            <div class="col-md-12">
                <div >
                    <h2 class="pro-hed-content  main-heading  text-center"
                    >Upcoming Events & Glimpse of Past Events</h2>
                </div>
            </div>

             <div class="col-md-3"></div>
            <div class="upcoming_event_slide col-md-6  b_shadow pb-5" style="background-color: rgb(242, 237, 237)">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                  <div class="past_heading text-center mt-3 "><h2 style="color:#67a6e6">Past Events</h2></div>
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner mt-5">
                      <div class="carousel-item active">
                        <img src="{{asset('frontend/img/web-1.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h4 class="text-white">14 February 2024</h4>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('frontend/img/web-2.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h4 class="text-white">14 February 2024</h4>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('frontend/img/web-3.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-center">
                            <h4 class="text-white">14 February 2024</h4>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  <div class="text-center mt-3" style="font-size:30px">
                    <a href="" ><u>More Past Events</u>
                        <div><i class="fa fa-angle-double-down"></i></div>


                    </a>

                  </div>

            </div>
            <div class="col-md-3"></div>
        </div>

    </section>

    {{-- dialer middle heading start --}}
<section class="dialer container">
    <div class="row">
        <div class="col-md-12">
            <div class="dialer-heading">
                <h2 class="pro-hed-content  main-heading  text-center" style="margin-top: 20vh"
                >Looking for a SBC for Your Business?</h2>
                <h5 class="text-center">Please fill in your Details for a Free Demo</h5>
            </div>
        </div>
        <form action="" class="mt-5">
            <div class="row">
                <div class="col-md-6 mt-3 ">
                    <div class="mb-3">

                        <input type="text" class="form-control pb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name*">

                      </div>
                </div>
                {{-- <div class="col-md-2"></div> --}}
                <div class="col-md-6 mt-3">
                    <div class="mb-3">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-3"> <input type="text" readonly class="form-control pb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+88"></div>
                           <div class="col-md-8">
                            <input type="text" class="form-control pb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number*">
                           </div>
                            </div>



                          </div>
                      </div>
                </div>

                <div class="col-md-6 mt-3">
                    <div class="mb-3">

                        <input type="text" class="form-control pb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last name*">

                      </div>
                </div>

                <div class="col-md-6  mt-3">
                    <div class="mb-3">

                      <select class="form-select pb-3" name="" id="">
                        <option value="" selected>Are You Currently Into TelecomBussiness?</option>
                        <option value="">Yes</option>
                       <option value="">No</option>
                      </select>

                      </div>
                </div>

                <div class="col-md-6  mt-3">
                    <div class="mb-3">

                        <input type="email" class="form-control pb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email*">

                      </div>
                </div>

                <div class="col-md-6  mt-3">
                    <div class="mb-3">

                      <select class="form-select pb-3 " name="" id="">
                        <option value="" selected>Type Of Business</option>
                        <option value="">WholeSale VOip</option>
                       <option value="">Retail VOip</option>
                      </select>

                      </div>
                </div>


                <div class="col-md-6  mt-3">
                    <div class="mb-3">

                        <input type="text" class="form-control pb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company Name*">

                      </div>
                </div>

                <div class="col-md-6  mt-3">
                    <div class="mb-3">

                      <select class="form-select pb-3" name="" id="">
                        <option value="" selected>Are You Using  Any WholeSale  Switch?</option>
                        <option value="">Yes</option>
                       <option value="">No</option>
                      </select>

                      </div>
                </div>

                <div class="col-md-6  mt-3">
                    <div class="mb-3">

                      <select class="form-select pb-3" name="" id="">
                        <option value="" selected>Bangladesh</option>
                        <option value="">India</option>
                       <option value="">Japan</option>
                      </select>

                      </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <button type="button" class="btn btn-primary  btn-lg">Submit</button>
            </div>
        </form>

    </div>

</section>

@endsection
