@extends('frontend.include.master')
@section('content')


<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Know Our Client</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Client</a>
        </div>
    </div>
</div>
     <section class="container-fluid mx-auto ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 " style="margin:auto">
                <ul class="nav nav-pills  justify-content-center mb-3" id="pills-tab" role="tablist" style="">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="All-description-tab" data-bs-toggle="pill" data-bs-target="#All"
                            type="button" role="tab" aria-controls="pills-description" aria-selected="true"
                            style= "color:black">
                            All
                        </button>
                    </li>
                    <li class="nav-item mx-2" role="presentation" style="background-color: #E8ECF0;">
                        <button class="nav-link" id="goverment-tab" data-bs-toggle="pill" data-bs-target="#goverment"
                            type="button" role="tab" aria-controls="pills-review" aria-selected="true"
                            style= "color:black">
                            Goverment
                        </button>
                    </li>
                    <li class="nav-item mx-2" role="presentation"style="background-color: #E8ECF0;">
                        <button class="nav-link" id="non-goverment-tab" data-bs-toggle="pill"
                            data-bs-target="#non-goverment" type="button" role="tab" aria-controls="pills-policy"
                            aria-selected="true" style= "color:black">
                            Non-Goverment(Customized Software)
                        </button>
                    </li>

                    <li class="nav-item mx-2" role="presentation"style="background-color: #E8ECF0;">
                        <button class="nav-link" id="Hr-Payroll-tab" data-bs-toggle="pill" data-bs-target="#Hr-Payroll"
                            type="button" role="tab" aria-controls="pills-policy" aria-selected="true"
                            style= "color:black">
                            HR & Payroll
                        </button>
                    </li>
                    <li class="nav-item mx-2" role="presentation"style="background-color: #E8ECF0;">
                        <button class="nav-link" id="poss-tab" data-bs-toggle="pill" data-bs-target="#poss" type="button"
                            role="tab" aria-controls="pills-policy" aria-selected="true" style= "color:black">
                            Poss
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-2"> </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 mt-3">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="All" role="tabpanel"
                                aria-labelledby="All-description-tab">
                                <div class="row">
                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="goverment" role="tabpanel" aria-labelledby="goverment-tab">
                                <div class="row">
                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>


                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="non-goverment" role="tabpanel"
                                aria-labelledby="non-goverment-tab">
                                <div class="row">
                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="Hr-Payroll" role="tabpanel" aria-labelledby="Hr-Payroll-tab">
                                <div class="row">
                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="card main_card b_shadow" style="width: 100%">

                                            <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                                class="card-img-top  mx-auto mt-3 " alt="..."
                                                style="height: 77%;width:60%">

                                            <div class="card-body slider pb-5">

                                                <div class="content">
                                                    <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                        Ministry of Agriculture</h3>
                                                    <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                    <p class="text-white description">ERP Software</p>
                                                </div>

                                            </div>

                                        </div>
                                     <div>
                                        <p class="text-center">Bangladesh Parjatan Corporation</p>
                                     </div>

                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="poss" role="tabpanel" aria-labelledby="poss-tab">
                               <div class="row">
                                <div class="col-md-3 mt-2">
                                    <div class="card main_card b_shadow" style="width: 100%">

                                        <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                            class="card-img-top  mx-auto mt-3 " alt="..."
                                            style="height: 77%;width:60%">

                                        <div class="card-body slider pb-5">

                                            <div class="content">
                                                <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                    Ministry of Agriculture</h3>
                                                <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                <p class="text-white description">ERP Software</p>
                                            </div>

                                        </div>

                                    </div>
                                 <div>
                                    <p class="text-center">Bangladesh Parjatan Corporation</p>
                                 </div>

                                </div>

                                <div class="col-md-3 mt-2">
                                    <div class="card main_card b_shadow" style="width: 100%">

                                        <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                            class="card-img-top  mx-auto mt-3 " alt="..."
                                            style="height: 77%;width:60%">

                                        <div class="card-body slider pb-5">

                                            <div class="content">
                                                <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                    Ministry of Agriculture</h3>
                                                <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                <p class="text-white description">ERP Software</p>
                                            </div>

                                        </div>

                                    </div>
                                 <div>
                                    <p class="text-center">Bangladesh Parjatan Corporation</p>
                                 </div>

                                </div>


                                <div class="col-md-3 mt-2">
                                    <div class="card main_card b_shadow" style="width: 100%">

                                        <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                            class="card-img-top  mx-auto mt-3 " alt="..."
                                            style="height: 77%;width:60%">

                                        <div class="card-body slider pb-5">

                                            <div class="content">
                                                <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                    Ministry of Agriculture</h3>
                                                <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                <p class="text-white description">ERP Software</p>
                                            </div>

                                        </div>

                                    </div>
                                 <div>
                                    <p class="text-center">Bangladesh Parjatan Corporation</p>
                                 </div>

                                </div>

                                <div class="col-md-3 mt-2">
                                    <div class="card main_card b_shadow" style="width: 100%">

                                        <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                            class="card-img-top  mx-auto mt-3 " alt="..."
                                            style="height: 77%;width:60%">

                                        <div class="card-body slider pb-5">

                                            <div class="content">
                                                <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                    Ministry of Agriculture</h3>
                                                <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                <p class="text-white description">ERP Software</p>
                                            </div>

                                        </div>

                                    </div>
                                 <div>
                                    <p class="text-center">Bangladesh Parjatan Corporation</p>
                                 </div>

                                </div>

                                <div class="col-md-3 mt-2">
                                    <div class="card main_card b_shadow" style="width: 100%">

                                        <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                            class="card-img-top  mx-auto mt-3 " alt="..."
                                            style="height: 77%;width:60%">

                                        <div class="card-body slider pb-5">

                                            <div class="content">
                                                <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                    Ministry of Agriculture</h3>
                                                <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                <p class="text-white description">ERP Software</p>
                                            </div>

                                        </div>

                                    </div>
                                 <div>
                                    <p class="text-center">Bangladesh Parjatan Corporation</p>
                                 </div>

                                </div>

                                <div class="col-md-3 mt-2">
                                    <div class="card main_card b_shadow" style="width: 100%">

                                        <img src="{{ asset('frontend/img/Bangladesh-Agricultural-University.png') }}"
                                            class="card-img-top  mx-auto mt-3 " alt="..."
                                            style="height: 77%;width:60%">

                                        <div class="card-body slider pb-5">

                                            <div class="content">
                                                <h3 class="text-white title line-bottom-theme-colored2 mt-0 mb-20">
                                                    Ministry of Agriculture</h3>
                                                <p class="section-title section-title-sm position-relative pb-3 "></p>

                                                <p class="text-white description">ERP Software</p>
                                            </div>

                                        </div>

                                    </div>
                                 <div>
                                    <p class="text-center">Bangladesh Parjatan Corporation</p>
                                 </div>

                                </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-1"></div>
                </div>

            </div>

        </div>



    </section>
@endsection
