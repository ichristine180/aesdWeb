@push('styles')
 <link  href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 @endpush

@extends('common.App')
@section('content')
  <!--Sub Banner Start-->
            <div class="sub-banner">
                <h4>AESD Reports</h4>
            </div>
            <!--Sub Banner End-->

           

            <!--Main Content Wrap Start-->
            <div class="bdha-content-wrap">

                <!--Causes Thumb Scetion Start-->
                <section class="">

                    <div class="container">

                        <div class="capabilities-outer-wrapper">

                           
                           <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <!--Community Services Thumb Start-->
                                <div class="community-services-thumb about-services-thumb rprt-bg">
                                    <div class="icon-bg"></div>
                                    <h6 class="community-services-title"><a href="#">TRAINING REPORT</a></h6>
                                    <p>Church leaders from Nyarubaka, kabacuzi, Mwendo and Cyeza clusters</p>
                                    <a href="{{ asset('reportdocs/CONFLICT RESOLUTION TRAINING REPORT.pdf')}}" target="blank">
                                        <h5>Vew report</h5>
                                    </a>
                                </div>
                                <!--Community Services Thumb End-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--Community Services Thumb Start-->
                                <div class="community-services-thumb about-services-thumb rprt-bg">
                                    <div class="icon-bg"></div>
                                    <h6 class="community-services-title"><a href="#">BCSM PROJECT PROPOSAL</a></h6>
                                    <p>AESD (Action des Eglises Evangéliques pour la promotion de la Santé et Développement)</p>
                                    <a href="{{ asset('reportdocs/AESD - BCSM Proposal FINAL.pdf')}}" target="blank">
                                        <h5>Vew report</h5>
                                    </a>
                                </div>
                                <!--Community Services Thumb End-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--Community Services Thumb Start-->
                                <div class="community-services-thumb about-services-thumb rprt-bg">
                                    <div class="icon-bg"></div>
                                    <h6 class="community-services-title"><a href="#">AESD achievements report</a></h6>
                                    <p>Differect activites accross the country</p>
                                    <a href="{{ asset('reportdocs/AESD 1 Pager designed 31.7.12.pdf')}}" target="blank">
                                        <h5>Vew report</h5>
                                    </a>
                                </div>
                                <!--Community Services Thumb End-->
                                
                            </div>
                           </div>
                           <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <!--Community Services Thumb Start-->
                                <div class="community-services-thumb about-services-thumb rprt-bg">
                                    <div class="icon-bg"></div>
                                    <h6 class="community-services-title"><a href="#">AESD projects report</a></h6>
                                    <p>Since we started we participated in different projects</p>
                                    <a href="{{ asset('reportdocs/AESD 2 Pager-Low Res.pdf')}}" target="blank">
                                        <h5>Vew report</h5>
                                    </a>
                                </div>
                                <!--Community Services Thumb End-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--Community Services Thumb Start-->
                                <div class="community-services-thumb about-services-thumb rprt-bg">
                                    <div class="icon-bg"></div>
                                    <h6 class="community-services-title"><a href="#">AESD Financial report</a></h6>
                                    <p>Audited financial statements for year ended 31 March 2021
                                    </p>
                                    <a href="{{ asset('reportdocs/AESD Financial Statments for the year ended 31March 2021 (1).pdf')}}" target="blank">
                                        <h5>Vew report</h5>
                                    </a>
                                </div>
                                <!--Community Services Thumb End-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--Community Services Thumb Start-->
                                <div class="community-services-thumb about-services-thumb rprt-bg">
                                    <div class="icon-bg"></div>
                                    <h6 class="community-services-title"><a href="#">Project proposal report</a></h6>
                                    <p>Church and Community Transformation for poverty reduction</p>
                                    <a href="{{ asset('reportdocs/CCT Project proposal 2021-2024.pdf')}}" target="blank">
                                        <h5>Vew report</h5>
                                    </a>
                                </div>
                                <!--Community Services Thumb End-->
                            </div>
                           </div>
                           <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <!--Community Services Thumb Start-->
                                <div class="community-services-thumb about-services-thumb rprt-bg">
                                    <div class="icon-bg"></div>
                                    <h6 class="community-services-title"><a href="#">AESD achievements report (Kinyarwanda)</a></h6>
                                    <p>Differect activites accross the country (Kinyarwanda)</p>
                                    <a href="{{ asset('reportdocs/AESD 2 Pager-Kinyarwanda.pdf')}}" target="blank">
                                        <h5>Vew report</h5>
                                    </a>
                                </div>
                                <!--Community Services Thumb End-->
                                
                            </div>
                           </div>

                        </div>

                        
                    </div>
                </section>
                <!--Causes Thumb Scetion End-->

            </div>
           
          
           
@endsection