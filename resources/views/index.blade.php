@extends('partials.layout')

@section('meta')

<title>HOME | {{config('app.name')}}</title>

@endsection

@section('css')


@endsection

@section('main_content')
<div class="bg-primary">
    <div class="container">
        <!-- Hero Section -->
        <div class="row align-items-center g-0">
            <div class="col-xl-5 col-lg-6 col-md-12">
                <div class="py-5 py-lg-0">
                    <h1 class="text-white display-4 fw-bold">Welcome to Geeks UI Learning Application
                    </h1>
                    <p class="text-white-50 mb-4 lead">
                        Hand-picked Instructor and expertly crafted courses, designed for the modern students and entrepreneur.
                    </p>
                    <a href="pages/course-filter-list.html" class="btn btn-success">Browse Courses</a>
                    <a href="pages/sign-in.html" class="btn btn-white">Are You Instructor?</a>
                </div>
            </div>
            <div class=" col-xl-7 col-lg-6 col-md-12 text-lg-end text-center">
                <img src="/assets/images/hero/hero-img.png" alt="" class="img-fluid" />
            </div>
        </div>
    </div>
</div>
<div class="bg-white py-4 shadow-sm">
    <div class="container">
        <div class="row align-items-center g-0">
            <!-- Features -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                <div class="d-flex align-items-center">
                    <span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4 "> <i
            class="fe fe-video"> </i></span>
                    <div class="ms-3">
                        <h4 class="mb-0 fw-semi-bold">30,000 online courses</h4>
                        <p class="mb-0">Enjoy a variety of fresh topics</p>
                    </div>
                </div>
            </div>
            <!-- Features -->
            <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                <div class="d-flex align-items-center">
                    <span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4 "> <i
            class="fe fe-users"> </i></span>
                    <div class="ms-3">
                        <h4 class="mb-0 fw-semi-bold">Expert instruction</h4>
                        <p class="mb-0">Find the right instructor for you</p>
                    </div>
                </div>
            </div>
            <!-- Features -->
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="d-flex align-items-center">
                    <span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4 "> <i
            class="fe fe-clock"> </i></span>
                    <div class="ms-3">
                        <h4 class="mb-0 fw-semi-bold">Lifetime access</h4>
                        <p class="mb-0">Learn on your schedule</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content -->
<div class="pt-lg-12 pb-lg-3 pt-8 pb-6">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h2 class="mb-0">Recommended to you</h2>
            </div>
        </div>
        <div class="position-relative">
            <ul class="controls " id="sliderFirstControls">
                <li class="prev">
                    <i class="fe fe-chevron-left"></i>
                </li>
                <li class="next">
                    <i class="fe fe-chevron-right"></i>
                </li>
            </ul>
            <div class="sliderFirst">
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-react.jpg" alt="" class="rounded-top-md card-img-top"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">How to
                easily create a website with React</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Beginner
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(7,700)</span>
                            </div>
                            <!-- Price -->
                            <div class="lh-1 mt-3">
                                <span class="text-dark fw-bold">$600</span>
                                <del class="fs-6 text-muted">$750</del>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Morris Mccoy</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-graphql.jpg" alt="" class="rounded-top-md card-img-top"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">GraphQL:
                introduction to graphQL for beginners</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                </svg> Advance
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(9,300)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Ted Hawkins</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-angular.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Angular -
                the complete guide for beginner</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Beginner
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(8,890)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Juanita Bell</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-python.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">The
                Python
                Course: build web application</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Intermediate
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(13,245)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Claire Robertson</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-graphql.jpg" alt="" class="rounded-top-md card-img-top"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">GraphQL:
                introduction to graphQL for beginners</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                </svg> Advance
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(9,300)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Ted Hawkins</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-angular.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Angular -
                the complete guide for beginner</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Beginner
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(8,890)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Juanita Bell</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-python.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">The
                Python
                Course: build web application</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Intermediate
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(13,245)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Claire Robertson</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pb-lg-3 pt-lg-3">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h2 class="mb-0">Most Popular</h2>
            </div>
        </div>
        <div class="position-relative">
            <ul class="controls " id="sliderSecondControls">
                <li class="prev">
                    <i class="fe fe-chevron-left"></i>
                </li>
                <li class="next">
                    <i class="fe fe-chevron-right"></i>
                </li>
            </ul>
            <div class="sliderSecond">
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-gatsby.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Gatsby
                JS:
                build blog with GraphQL and React</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Beginner
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(9,370)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-5.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Morris Mccoy</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-javascript.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Getting
                Started with JavaScript</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                </svg> Advance
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(5,245)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Ted Hawkins</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-css.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">CSS:
                ultimate CSS course from beginner to advanced</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Beginner
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(17,000)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-7.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Juanita Bell</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-wordpress.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Wordpress:
                complete WordPress theme & plugin development</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Intermediate
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(16,500)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-8.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Claire Robertson</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-javascript.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Getting
                Started with JavaScript</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                </svg> Advance
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(5,245)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Ted Hawkins</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-css.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">CSS:
                ultimate CSS course from beginner to advanced</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Beginner
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(17,000)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-7.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Juanita Bell</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-wordpress.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Wordpress:
                complete WordPress theme & plugin development</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Intermediate
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(16,500)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-8.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Claire Robertson</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pb-lg-8 pt-lg-3 py-6">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h2 class="mb-0">Trending</h2>
            </div>

        </div>
        <div class="position-relative">
            <ul class="controls" id="sliderThirdControls">
                <li class="prev">
                    <i class="fe fe-chevron-left"></i>
                </li>
                <li class="next">
                    <i class="fe fe-chevron-right"></i>
                </li>
            </ul>
            <div class="sliderThird">
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-react.jpg" alt="" class="card-img-top rounded-top-md">
                        </a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2"><a href="pages/course-single.html" class="text-inherit">How to
                easily create a website with React</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Beginner
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(12,245)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-9.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Morris Mccoy</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-graphql.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">GraphQL:
                introduction to graphQL for beginners</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                </svg> Advance
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(15,350)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-10.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Ted Hawkins</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-angular.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Angular -
                the complete guide for beginner</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Beginner
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(6,600)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Juanita Bell</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-python.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">The
                Python
                Course: build web application</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Intermediate
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(2,500)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Claire Robertson</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-graphql.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">GraphQL:
                introduction to graphQL for beginners</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                </svg> Advance
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(15,350)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-10.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Ted Hawkins</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-angular.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Angular -
                the complete guide for beginner</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Beginner
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(6,600)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Juanita Bell</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <!-- Card -->
                    <div class="card  mb-4 card-hover">
                        <a href="pages/course-single.html" class="card-img-top"><img src="/assets/images/course/course-python.jpg" alt="" class="card-img-top rounded-top-md"></a>
                        <!-- Card Body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">The
                Python
                Course: build web application</a></h4>
                            <!-- List -->
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                  <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                  <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                </svg> Intermediate
                                </li>
                            </ul>
                            <div class="lh-1">
                                <span>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning me-n1"></i>
                <i class="mdi mdi-star text-warning"></i>
              </span>
                                <span class="text-warning">4.5</span>
                                <span class="fs-6 text-muted">(2,500)</span>
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="">
                                </div>
                                <div class="col ms-2">
                                    <span>Claire Robertson</span>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted bookmark">
                                        <i class="fe fe-bookmark  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection