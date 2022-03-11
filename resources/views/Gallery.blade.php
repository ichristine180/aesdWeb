@push('styles')
 <link  href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 @endpush

@extends('common.App')
@section('content')
<div class="sub-banner">
                <h4>Gallery </h4>
            </div>
            <!--Sub Banner End-->

           

            <!--Main Content Wrap Start-->
            <div class="bdha-content-wrap">
                <!--Scetion Filterable Gallery Start-->
                <section>
                    
                    <!--Filterable Wrap Start-->
                    <div class="bdha-filterable">
                       

                        <div class="row">
                            <!--Filterable Contant Start-->
                            <div class="bdha-filterable-contant" id="filterable-item-holder-1">
                                <!--Gallery Thumb Start-->
                                <div class="filterable-item all 1 col-md-3 col-sm-6">
                                    <div class="bdha-gallery-thumb img-effect-diflt">
                                        <figure><img src="extra-images/img1.JPG" alt=""></figure>
                                    </div>
                                </div>
                                <!--Gallery Thumb End-->
                                <!--Gallery Thumb Start-->
                                <div class="filterable-item all 2 col-md-3 col-sm-6">
                                    <div class="bdha-gallery-thumb img-effect-diflt">
                                        <figure><img src="extra-images/img2.JPG" alt=""></figure>
                                    </div>
                                </div>
                                <!--Gallery Thumb End-->
                                <!--Gallery Thumb Start-->
                                <div class="filterable-item all 1 3 4 col-md-3 col-sm-6">
                                    <div class="bdha-gallery-thumb img-effect-diflt">
                                        <figure><img src="extra-images/img3.JPG" alt=""></figure>
                                    </div>
                                </div>
                                <!--Gallery Thumb End-->
                                <!--Gallery Thumb Start-->
                                <div class="filterable-item all 4 2 col-md-3 col-sm-6">
                                    <div class="bdha-gallery-thumb img-effect-diflt">
                                        <figure><img src="extra-images/img4.JPG" alt=""></figure>
                                    </div>
                                </div>
                                <!--Gallery Thumb End-->
                                <!--Gallery Thumb Start-->
                                <div class="filterable-item all 1 2 col-md-3 col-sm-6">
                                    <div class="bdha-gallery-thumb img-effect-diflt">
                                        <figure><img src="extra-images/img5.JPG" alt=""></figure>
                                    </div>
                                </div>
                                <!--Gallery Thumb End-->
                                <!--Gallery Thumb Start-->
                                <div class="filterable-item all 2 4 3 col-md-3 col-sm-6">
                                    <div class="bdha-gallery-thumb img-effect-diflt">
                                        <figure><img src="extra-images/img6.jpg" alt=""></figure>
                                    </div>
                                </div>
                                <!--Gallery Thumb End-->

                                  <!--Gallery Thumb Start-->
                                  <div class="filterable-item all 4 2 col-md-3 col-sm-6">
                                    <div class="bdha-gallery-thumb img-effect-diflt">
                                        <figure><img src="extra-images/img7.JPG" alt=""></figure>
                                    </div>
                                </div>
                                <!--Gallery Thumb End-->
                                <!--Gallery Thumb Start-->
                                <div class="filterable-item all 1 2 col-md-3 col-sm-6">
                                    <div class="bdha-gallery-thumb img-effect-diflt">
                                        <figure><img src="extra-images/img8.JPG" alt=""></figure>
                                    </div>
                                </div>
                                <!--Gallery Thumb End-->
                                <!--Gallery Thumb Start-->
                                <div class="filterable-item all 2 4 3 col-md-3 col-sm-6">
                                    <div class="bdha-gallery-thumb img-effect-diflt">
                                        <figure><img src="extra-images/img9.jpg" alt=""></figure>
                                    </div>
                                </div>
                                <!--Gallery Thumb End-->
                            </div>
                            <!--Filterable Contant End-->
                        </div>
                    </div>
                    <!--Filterable Wrap End-->
                </section>
                <!--Scetion Filterable Gallery End-->
            </div>
            <!--Main Content Wrap End-->
            
           
@endsection