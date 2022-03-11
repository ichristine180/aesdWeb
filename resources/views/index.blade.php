@push('styles')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endpush

@extends('common.App')
@section('content')
<div class="main-banner">
    <!--Banner Slide Wrap Start-->
    <ul class="main-slider">
        <li>
            <!--Banner Thumb START-->
            <p data-rel="prettyphoto[]">
                <img src="extra-images/slide-1.jpg" alt="" id="img-1" />
            <div class="kode-caption-wrapper position-left">
                <div class="kode-caption-inner container">
                    <div class="kode-caption border-top">
                        <div class="kode-caption-title">We conduct ourselves at all times with honesty,trustworthiness and open communication</div>
                    </div>
                </div>
            </div>
            </p>
            <!--Banner Thumb End-->
        </li>
        <li>
            <!--Banner Thumb START-->
            <p data-rel="prettyphoto[]">
                <img src="{{ asset('extra-images/slide-3.jpg')}}" alt="">
            <div class="kode-caption-wrapper position-right">
                <div class="kode-caption-inner container">
                    <div class="kode-caption border-top">
                        <div class="kode-caption-title">We conduct ourselves<span>at all times with honesty,</span></div>
                        <div class="kode-caption-text">trustworthiness and open communication</div>
                        <div class="kode-autor-link">- Buddha</div>
                    </div>
                </div>
            </div>
            </p>
            <!--Banner Thumb End-->
        </li>


    </ul>
    <!--Banner Slide Wrap End-->
    <!--Banner Slide Navigation Wrap Start-->

    <!--Banner Slide Navigation Wrap End-->
</div>
<!--Main Banner End-->



<!--Main Content Wrap Start-->
<div class="bdha-content-wrap">
    <div class="welcome-outer-wrap">
        <!--Welcome Wrap Start-->
        <div class="welcome-wrap-bg container">
            <div class="container">
                <div class="col-md-6">
                    <!--Welcome Title Wrap Start-->
                    <div class="welcome-title-wrap">
                        <div class="welcome-title">
                            <h6>Welcome to AESD website</h6>
                            <p>Action Des Eglise Evangeliques Pour La Promotion De la Sante et le development </p>
                        </div>
                        <p>AESD is a faith based organization (FBO) founded in 1995 with the aim of addressing some of the health and development needs of Rwanda through the network of evangelical churches. In 1996, it was established as a development agency of the Evangelical Alliance of Rwanda AER in Rwanda. It is important to note that the organisation was formed in the aftermath of the 1994 devastating war and genocide.</p>

                    </div>
                    <!--Welcome Title Wrap End-->
                </div>
                <div class="col-md-6">
                    <!--Services Wrap Start-->

                    <div class="bdha-services-wrap">
                        <h3>Our focus:</h3>
                        <!--Services Start-->
                        <div class="bdha-services">
                            <img class="icon-box-2" src="{{ asset('extra-images/meeting.jpg')}}">
                            <div class="text-overflow">
                                <h6><a href="#">VULNERABLE SUPPORT</a></h6>
                                <p>supporting survivors of the genocide through integrated health services...</p>
                            </div>
                        </div>
                        <!--Services End-->
                        <!--Services Start-->
                        <div class="bdha-services">
                            <img class="icon-box-2" src="{{ asset('extra-images/handshake.jpg')}}">
                            <div class="text-overflow">
                                <h6><a href="#">CHURCH & COMMUNITY TRANSFORMATION</a></h6>
                                <p>We believe that the church is central in all community...</p>
                            </div>
                        </div>
                        <!--Services End-->

                        <!--Services Start-->
                        <div class="bdha-services">
                            <img class="icon-box-2" src="{{ asset('extra-images/smile.jpg')}}">
                            <div class="text-overflow">
                                <h6><a href="#">CONFLICT RESOLUTION</a></h6>
                                <p>We are promoting, protecting, advocating and defending Child Rights...</p>
                            </div>
                        </div>
                        <!--Services End-->
                        <!--Services Start-->
                        <div class="bdha-services">
                            <img class="icon-box-2" src="{{ asset('extra-images/family-small....jpg')}}">
                            <div class="text-overflow">
                                <h6><a href="#">CHILD PROTECTION</a></h6>
                                <p>Litigation is expensive and time-consuming and pits conflicting parties against each other...</p>
                            </div>
                        </div>
                        <!--Services End-->


                    </div>
                    <!--Services Wrap End-->
                </div>
            </div>
        </div>
        <!--Welcome Wrap End-->
    </div>


    <!--Our Team Scetion End-->
    <section class="bdha-content-wrap">
        <div class="center" style="margin-bottom: 20px;">
            <div class="title">
                <h5>Our Achievements</h5>
            </div>
        </div>
        <div class="container">
            <!--Scetion Heading End-->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <!--Community Services Thumb Start-->
                    <div class="community-services-thumb about-services-thumb light-blue">
                        <div class="icon-bg"></div>
                        <h6 class="community-services-title"><a href="#">Over view</a></h6>
                        <p>AESD has been on the forefront in mobilizing the evangelical churches to actively participate in health and development issues in their communities.</p>
                    </div>
                    <!--Community Services Thumb End-->
                </div>
                <div class="col-md-4 col-sm-6">
                    <!--Community Services Thumb Start-->
                    <div class="community-services-thumb about-services-thumb blue-bg">
                        <div class="icon-bg"></div>
                        <h6 class="community-services-title"><a href="#">HIV action clubs</a></h6>
                        <p>140 HIV action clubs have been formed by churches in the east, west as well as the Kigali provinces. The clubs promote HIV awareness amongst young people through drama, poems and songs.</p>
                    </div>
                    <!--Community Services Thumb End-->
                </div>
                <div class="col-md-4 col-sm-6">
                    <!--Community Services Thumb Start-->
                    <div class="community-services-thumb about-services-thumb lightred-bg">
                        <div class="icon-bg"></div>
                        <h6 class="community-services-title"><a href="#">Budgeting and Development Planning</a></h6>
                        <p>1200 community members have been empowered on community Participation in Budgeting and Development Planning.</p>
                    </div>
                    <!--Community Services Thumb End-->
                </div>


            </div>


            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <!--Community Services Thumb Start-->
                    <div class="community-services-thumb about-services-thumb lightgreen-bg">
                        <div class="icon-bg"></div>
                        <h6 class="community-services-title"><a href="#">Water harvest</a></h6>
                        <p>80 Water harvest tanks provided in the communities. </p>
                    </div>
                    <!--Community Services Thumb End-->
                </div>

                <div class="col-md-4 col-sm-6">
                    <!--Community Services Thumb Start-->
                    <div class="community-services-thumb about-services-thumb darkorange-bg">
                        <div class="icon-bg"></div>
                        <h6 class="community-services-title"><a href="#">Conflicts resolution</a></h6>
                        <p>180 church leaders trained on conflict resolution, Healing and reconciliation</p>
                    </div>
                    <!--Community Services Thumb End-->
                </div>

                <div class="col-md-4 col-sm-6">
                    <!--Community Services Thumb Start-->
                    <div class="community-services-thumb about-services-thumb purple-bg">
                        <div class="icon-bg"></div>
                        <h6 class="community-services-title"><a href="#">households</a></h6>
                        <p>500 households received saving stoves</p>
                    </div>
                    <!--Community Services Thumb End-->
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <!--Community Services Thumb Start-->
                    <div class="community-services-thumb about-services-thumb lightgreen-bg">
                        <div class="icon-bg"></div>
                        <h6 class="community-services-title"><a href="#">self-help groups</a></h6>
                        <p>250 self-help groups created and trained.</p>
                    </div>
                    <!--Community Services Thumb End-->
                </div>

                <div class="col-md-4 col-sm-6">
                    <!--Community Services Thumb Start-->
                    <div class="community-services-thumb about-services-thumb darkorange-bg">
                        <div class="icon-bg"></div>
                        <h6 class="community-services-title"><a href="#">Drug abuse training</a></h6>
                        <p>300 youth trained on drug abuse and changed their behaviors </p>
                    </div>
                    <!--Community Services Thumb End-->
                </div>

                <div class="col-md-4 col-sm-6">
                    <!--Community Services Thumb Start-->
                    <div class="community-services-thumb about-services-thumb lightred-bg">
                        <div class="icon-bg"></div>
                        <h6 class="community-services-title"><a href="#">church and community transformation</a></h6>
                        <p>212 local church leaders have been envisioned on church and community transformation.</p>
                    </div>
                    <!--Community Services Thumb End-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <!--Community Services Thumb Start-->
                    <div class="community-services-thumb about-services-thumb darkorange-bg">
                        <div class="icon-bg"></div>
                        <h6 class="community-services-title"><a href="#">Poor families support</a></h6>
                        <p>175 cows and 362 gots provided to poor families </p>
                    </div>
                    <!--Community Services Thumb End-->
                </div>

                <div class="col-md-4 col-sm-6">
                    <!--Community Services Thumb Start-->
                    <div class="community-services-thumb about-services-thumb lightred-bg">
                        <div class="icon-bg"></div>
                        <h6 class="community-services-title"><a href="#">Nursery set up</a></h6>
                        <p>1600 community members trained on nursery set up, management and distribution. </p>
                    </div>
                    <!--Community Services Thumb End-->
                </div>
            </div>
        </div>
        <!--Scetion Heading Start-->
        <div class="bdha-content-wrap">
            <div class="center">
                <div class="title">
                    <h5>Our Staff Team</h5>
                </div>
            </div>
            <!--Team Section Start-->
            <section class="team-page1">
                <div class="container">
                    <div class="row">
                        <!--Team Thumb Start-->
                        <div class="col-md-3 col-sm-6">
                            <div class="bdha-team gray-background img-effect-diflt">
                                <img src="extra-images/gahungu.jpeg" alt="" class="rounded-circle">
                                <!--Team Thumb Caption Start-->
                                <div class="team-caption text">
                                    <h3 class="team-title"><a href="#">Dr Bunini GAHUNGU </a></h3>
                                    <h5>Founder and Executive Director</h5>
                                </div>
                                <!--Team Thumb Caption End-->
                            </div>
                        </div>
                        <!--Team Thumb End-->
                        <!--Team Thumb Start-->
                        <div class="col-md-3 col-sm-6">
                            <div class="bdha-team gray-background img-effect-diflt ">

                                <img src="extra-images/sage.jpeg" alt="" class="rounded-circle">


                                <!--Team Thumb Caption Start-->
                                <div class="team-caption text">
                                    <h3 class="team-title"><a href="#">Mr Mukiza Sage</a></h3>
                                    <h5>Finance Manager </h5>
                                </div>
                                <!--Team Thumb Caption End-->
                            </div>
                        </div>
                        <!--Team Thumb End-->
                        <!--Team Thumb Start-->
                        <div class="col-md-3 col-sm-6">
                            <div class="bdha-team gray-background img-effect-diflt">
                                <img src="extra-images/user4.jpeg" alt="" class="rounded-circle">
                                <!--Team Thumb Caption Start-->
                                <div class="team-caption text">
                                    <h3 class="team-title"><a href="#">Mr Jules Ruhumuriza </a></h3>
                                    <h5>Program Manager </h5>
                                </div>
                                <!--Team Thumb Caption End-->
                            </div>
                        </div>
                        <!--Team Thumb End-->
                        <!--Team Thumb Start-->
                        <div class="col-md-3 col-sm-6">
                            <div class="bdha-team gray-background img-effect-diflt">

                                <img src="extra-images/user2.jpeg" alt="" class="rounded-circle">


                                <!--Team Thumb Caption Start-->
                                <div class="team-caption text">
                                    <h3 class="team-title"><a href="#">IGIHOZO Christine</a></h3>
                                    <h5>Field coordinator </h5>
                                </div>
                                <!--Team Thumb Caption End-->
                            </div>
                        </div>
                        <!--Team Thumb End-->



                    </div>
                </div>

            </section>
        </div>
    </section>

    <!--Our Team Scetion End-->
</div>
<!--Scetion Heading End-->
<div class="bdha-content-wrap">
    <div class="center">
        <div class="title">
            <h5>Our Board members</h5>
        </div>
    </div>
    <!--Team Section Start-->
    <section class="team-page1">
        <div class="container">
            <div class="row">

                <!--Team Thumb Start-->
                <div class="col-md-3 col-sm-6">
                    <div class="bdha-team gray-background img-effect-diflt">
                        <img src="extra-images/avatar2.png" alt="" class="rounded-circle">
                        <!--Team Thumb Caption Start-->
                        <div class="team-caption text">
                            <h3 class="team-title"><a href="#">MUKOBWAJANA Clémentine </a></h3>
                            <!-- <h5>Member</h5> -->
                        </div>
                        <!--Team Thumb Caption End-->
                    </div>
                </div>
                <!--Team Thumb End-->
                <!--Team Thumb Start-->
                <div class="col-md-3 col-sm-6">
                    <div class="bdha-team gray-background img-effect-diflt">
                        <img src="extra-images/avatar2.png" alt="" class="rounded-circle">
                        <!--Team Thumb Caption Start-->
                        <div class="team-caption text">
                            <h3 class="team-title"><a href="#">NYIRAKARAMBI Evanis</a></h3>
                            <!-- <h5>Member</h5> -->
                        </div>
                        <!--Team Thumb Caption End-->
                    </div>
                </div>
                <!--Team Thumb End-->
                <!--Team Thumb Start-->
                <div class="col-md-3 col-sm-6">
                    <div class="bdha-team gray-background img-effect-diflt">
                        <img src="extra-images/avatar2.png" alt="" class="rounded-circle">
                        <!--Team Thumb Caption Start-->
                        <div class="team-caption text">
                            <h3 class="team-title"><a href="#">Nyirabitanga Alice </a></h3>
                            <!-- <h5>Member</h5> -->
                        </div>
                        <!--Team Thumb Caption End-->
                    </div>
                </div>
                <!--Team Thumb End-->
                <!--Team Thumb Start-->
                <div class="col-md-3 col-sm-6">
                    <div class="bdha-team gray-background img-effect-diflt">
                        <img src="extra-images/avatar2.png" alt="" class="rounded-circle">
                        <!--Team Thumb Caption Start-->
                        <div class="team-caption text">
                            <h3 class="team-title"><a href="#">Bshp Dr MUSHIMIRIMANA Didas</a></h3>
                            <!-- <h5>Member</h5> -->
                        </div>
                        <!--Team Thumb Caption End-->
                    </div>
                </div>
                <!--Team Thumb End-->
                <!--Team Thumb Start-->
                <div class="col-md-3 col-sm-6">
                    <div class="bdha-team gray-background img-effect-diflt">
                        <img src="extra-images/avatar2.png" alt="" class="rounded-circle">
                        <!--Team Thumb Caption Start-->
                        <div class="team-caption text">
                            <h3 class="team-title"><a href="#">BISHOP NYIRINKINDI Ephraïm</a></h3>
                            <!-- <h5>Member</h5> -->
                        </div>
                        <!--Team Thumb Caption End-->
                    </div>
                </div>
                <!--Team Thumb End-->
                <!--Team Thumb Start-->
                <div class="col-md-3 col-sm-6">
                    <div class="bdha-team gray-background img-effect-diflt">
                        <img src="extra-images/avatar2.png" alt="" class="rounded-circle">
                        <!--Team Thumb Caption Start-->
                        <div class="team-caption text">
                            <h3 class="team-title"><a href="#">Rev MBABAZI MUHOZA Josue</a></h3>
                            <!-- <h5>Member</h5> -->
                        </div>
                        <!--Team Thumb Caption End-->
                    </div>
                </div>
                <!--Team Thumb End-->


            </div>
        </div>
    </section>
</div>

<!--Main Content Wrap End-->
@endsection