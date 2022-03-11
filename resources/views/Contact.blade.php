@push('styles')
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endpush
@extends('common.App')
@section('content')
<div class="sub-banner">

    <!--Main Content Wrap Start-->
    <div class="bdha-content-wrap">
        <div class="center">
            <div class="title">
                <h3 class="center">CONTACT US</h3>
            </div>
        </div>
        <!--Error Section Start-->
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!--Content Info Wrap Start-->
                        <div class="contact-info-wrap">
                            <h4 class="widget-title">Contact Information</h4>

                            <!--Content Info Thumb Start-->
                            <div class="info-thumb">
                                <h6>Address</h6>
                                <p>P.O Box: 3770 kigali-Rwanda</p>
                            </div>
                            <!--Content Info Thumb End-->
                            <!--Content Info Thumb Start-->
                            <div class="info-thumb">
                                <h6>Email</h6>
                                <p><a href="mailto:mail@company.com">info@aesd.org.rw </a></p>
                            </div>
                            <!--Content Info Thumb End-->
                            <!--Content Info Thumb Start-->
                            <div class="info-thumb">
                                <h6>Cellphone</h6>
                                <p><a href="#">+250 788 530 335 </a></p>
                                <p><a href="#">+250 788 350 829 </a></p>
                            </div>
                            <!--Content Info Thumb End-->
                        </div>
                        <!--Content Info Wrap End-->
                    </div>

                    <div class="col-md-9">
                        <div class="contactus-form">
                            <form method="get" action="#" id="commentform" class="comment-form">
                                <div class="kode-left-comment-sec">
                                    <div class="kf-input">
                                        <input placeholder="Name*" name="author" type="text" value="" data-default="Name*" size="30">
                                    </div>
                                    <div class="kf-input">
                                        <input placeholder="Email*" name="email" type="text" value="" data-default="Email*" size="30">
                                    </div>
                                    <div class="kf-input">
                                        <input placeholder="Phone number" name="phonenumber" type="text" value="" data-default="Website" size="30">
                                    </div>
                                </div>
                                <div class="kf-input ">
                                    <textarea placeholder="Comments*" name="comment"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <p class="form-submit"><input name="submit" type="submit" class="submit bg-pink" value="Send Now"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Error Section End-->
    </div>
    <!--Main Content Wrap End-->



    @endsection