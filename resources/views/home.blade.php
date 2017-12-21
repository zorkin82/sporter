@extends('layout')

@section('content')
    <section class="g-mb-100">
        <div class="container">
            <div class="row">
                <!-- Profile Sidebar -->
                <div class="col-lg-3 g-mb-50 g-mb-0--lg">
                    <!-- User Image -->
                    <div class="u-block-hover g-pos-rel">
                        <figure>
                            <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="{{asset('img-temp/400x450/img5.jpg')}}" alt="Image Description">
                        </figure>

                        <!-- Figure Caption -->
                        <figcaption class="u-block-hover__additional--fade g-bg-black-opacity-0_5 g-pa-30">
                            <div class="u-block-hover__additional--fade u-block-hover__additional--fade-up g-flex-middle">
                                <!-- Figure Social Icons -->
                                <ul class="list-inline text-center g-flex-middle-item--bottom g-mb-20">
                                    <li class="list-inline-item align-middle g-mx-7">
                                        <a class="u-icon-v1 u-icon-size--md g-color-white" href="#!">
                                            <i class="icon-note u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item align-middle g-mx-7">
                                        <a class="u-icon-v1 u-icon-size--md g-color-white" href="#!">
                                            <i class="icon-notebook u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item align-middle g-mx-7">
                                        <a class="u-icon-v1 u-icon-size--md g-color-white" href="#!">
                                            <i class="icon-settings u-line-icon-pro"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Figure Social Icons -->
                            </div>
                        </figcaption>
                        <!-- End Figure Caption -->

                        <!-- User Info -->
                        <span class="g-pos-abs g-top-20 g-left-0">
                  <a class="btn btn-sm u-btn-primary rounded-0" href="#!">{{ Auth::user()->name }}</a>
                  <small class="d-block g-bg-black g-color-white g-pa-5">Project Manager</small>
                </span>
                        <!-- End User Info -->
                    </div>
                    <!-- User Image -->

                    <!-- Sidebar Navigation -->
                    <div class="list-group list-group-border-0 g-mb-40">
                        <!-- Overall -->
                        <a href="page-profile-main-1.html" class="list-group-item justify-content-between active">
                            <span><i class="icon-home g-pos-rel g-top-1 g-mr-8"></i> Overall</span>
                            <span class="u-label g-font-size-11 g-bg-white g-color-main g-rounded-20 g-px-10">2</span>
                        </a>
                        <!-- End Overall -->

                        <!-- Profile -->
                        <a href="page-profile-profile-1.html" class="list-group-item list-group-item-action justify-content-between">
                            <span><i class="icon-cursor g-pos-rel g-top-1 g-mr-8"></i> Profile</span>
                        </a>
                        <!-- End Profile -->

                        <!-- Users Contacts -->
                        <a href="page-profile-users-1.html" class="list-group-item list-group-item-action justify-content-between">
                            <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Users Contacts</span>
                        </a>
                        <!-- End Users Contacts -->

                        <!-- My Projects -->
                        <a href="page-profile-projects-1.html" class="list-group-item list-group-item-action justify-content-between">
                            <span><i class="icon-layers g-pos-rel g-top-1 g-mr-8"></i> My Projects</span>
                            <span class="u-label g-font-size-11 g-bg-primary g-rounded-20 g-px-10">9</span>
                        </a>
                        <!-- End My Projects -->

                        <!-- Comments -->
                        <a href="page-profile-comments-1.html" class="list-group-item list-group-item-action justify-content-between">
                            <span><i class="icon-bubbles g-pos-rel g-top-1 g-mr-8"></i> Comments</span>
                            <span class="u-label g-font-size-11 g-bg-pink g-rounded-20 g-px-8">24</span>
                        </a>
                        <!-- End Comments -->

                        <!-- Reviews -->
                        <a href="page-profile-reviews-1.html" class="list-group-item list-group-item-action justify-content-between">
                            <span><i class="icon-heart g-pos-rel g-top-1 g-mr-8"></i> Reviews</span>
                        </a>
                        <!-- End Reviews -->

                        <!-- History -->
                        <a href="page-profile-history-1.html" class="list-group-item list-group-item-action justify-content-between">
                            <span><i class="icon-fire g-pos-rel g-top-1 g-mr-8"></i> History</span>
                        </a>
                        <!-- End History -->

                        <!-- Settings -->
                        <a href="page-profile-settings-1.html" class="list-group-item list-group-item-action justify-content-between">
                            <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i> Settings</span>
                            <span class="u-label g-font-size-11 g-bg-cyan g-rounded-20 g-px-8">3</span>
                        </a>
                        <!-- End Settings -->
                    </div>
                    <!-- End Sidebar Navigation -->

                </div>
                <!-- End Profile Sidebar -->

                <!-- Profile Content -->
                <div class="col-lg-9">

                </div>
                <!-- End Profile Content -->
            </div>
        </div>
    </section>

@endsection
