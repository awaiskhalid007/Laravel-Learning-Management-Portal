@extends('courses.partials.layout')

@section('meta')

<title>Course Details | {{config('app.name')}}</title>

@endsection

@section('main_content')
{{-- Body --}}

<div class="pt-lg-8 pb-lg-16 pt-8 pb-12 bg-primary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div>
                    <h1 class="text-white display-4 fw-semi-bold">{{ $course->title }}</h1>
                    <p class="text-white mb-6 lead">
                        {{ $course->description }}
                    </p>
                    <div class="d-flex align-items-center">
                        <a href="#" class="bookmark text-white text-decoration-none">
                            <i class="fe fe-bookmark text-white-50 me-2"></i>Bookmark
                        </a>

                        <span class="text-white ms-3"><i class="fe fe-user text-white-50"></i> 1200 Enrolled </span>
                        <span class="ms-4">
				            <i class="mdi mdi-star me-n1 text-warning"></i>
				            <i class="mdi mdi-star me-n1 text-warning"></i>
				            <i class="mdi mdi-star me-n1 text-warning"></i>
				            <i class="mdi mdi-star me-n1 text-warning"></i>
				            <i class="mdi mdi-star me-n1-half text-warning"></i>
				            <span class="text-white">(140)</span>
                        </span>
                        <span class="text-white ms-4 d-none d-md-block">
			            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="3" y="8" width="2" height="6" rx="1" fill="#DBD8E9"></rect>
							<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
							<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
			            </svg>
			            <span class="align-middle">
		            		{{ $course->level }}
			            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="pb-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 mt-n8 mb-4 mb-lg-0">
                <!-- Card -->
                <div class="card rounded-3">
                    <!-- Card header -->
                    <div class="card-header border-bottom-0 p-0">
                        <div>
                            <!-- Nav -->
                            <ul class="nav nav-lb-tab" id="tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="table-tab" data-bs-toggle="pill" href="#table" role="tab" aria-controls="table" aria-selected="true">Contents</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="description-tab" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="false">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="review-tab" data-bs-toggle="pill" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="transcript-tab" data-bs-toggle="pill" href="#transcript" role="tab" aria-controls="transcript" aria-selected="false">Transcript</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="faq-tab" data-bs-toggle="pill" href="#faq" role="tab" aria-controls="faq" aria-selected="false">FAQ</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="tab-content" id="tabContent">
                            <div class="tab-pane fade show active" id="table" role="tabpanel" aria-labelledby="table-tab">
                                <!-- Card -->
                                <div class="accordion" id="courseAccordion">
                                    <div>
                                        <!-- List group -->
                                        <ul class="list-group list-group-flush">
                                        	@if(!empty($sections))
						                	@php 
						                		$i = 1;
						                	@endphp
						                	@foreach($sections as $obj)
	                                            <li class="list-group-item px-0">
	                                                <a class="h4 mb-0 d-flex align-items-center text-inherit text-decoration-none" data-bs-toggle="collapse" href="#{{$obj->name}}" aria-expanded="false" aria-controls="{{$obj->name}}">
	                                                    <div class="me-auto">
	                                                        {{$obj->name}}
	                                                    </div>
	                                                    <span class="chevron-arrow ms-4">
	                          								<i class="fe fe-chevron-down fs-4"></i>
	                       								</span>
	                                                </a>
	                                                <div class="collapse" id="{{$obj->name}}" data-bs-parent="#courseAccordion">
	                                                    <div class="pt-3 pb-2">
	                                                    	@if(!$obj->lectures->isEmpty())
	                            								@foreach($obj->lectures as $lec)
		                                                        <a href="course-resume.html" class="mb-2 d-flex justify-content-between align-items-center text-inherit text-decoration-none">
		                                                            <div class="text-truncate">
		                                                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle me-2"><i class="mdi mdi-play fs-4"></i></span>
		                                                                <span>{{$lec->title}}</span>
		                                                            </div>
		                                                            {{-- <div class="text-truncate">
		                                                                <span>1m 41s</span>
		                                                            </div> --}}
		                                                        </a>
	                                                        @endforeach
	                                                        @else
	                                                     	   <div class="alert alert-info">
								                            		No lectures available in this section
                            									</div>
	                                                        @endif
	                                                    </div>
	                                                </div>
	                                            </li>
	                                        @endforeach
	                                        @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <!-- Description -->
                                <div class="mb-4">
                                    <h3 class="mb-2">Course Descriptions</h3>
                                    <p>
                                        If you’re learning to program for the first time, or if you’re coming from a different language, this course, JavaScript: Getting Started, will give you the basics for coding in JavaScript. First, you'll discover the types of applications that can be
                                        built with JavaScript, and the platforms they’ll run on.
                                    </p>
                                    <p>
                                        Next, you’ll explore the basics of the language, giving plenty of examples. Lastly, you’ll put your JavaScript knowledge to work and modify a modern, responsive web page. When you’re finished with this course, you’ll have the skills and knowledge in JavaScript
                                        to create simple programs, create simple web applications, and modify web pages.
                                    </p>
                                </div>
                                <h4 class="mb-3">What you’ll learn</h4>
                                <div class="row mb-3">
                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="d-flex mb-2">
                                                <i class="far fa-check-circle text-success me-2 mt-2"></i>
                                                <span>Recognize the importance of understanding your objectives when addressing an audience.</span>
                                            </li>
                                            <li class="d-flex mb-2">
                                                <i class="far fa-check-circle text-success me-2 mt-2"></i>
                                                <span>Identify the fundaments of composing a successful close.</span>
                                            </li>
                                            <li class="d-flex mb-2">
                                                <i class="far fa-check-circle text-success me-2 mt-2"></i>
                                                <span>Explore how to connect with your audience through crafting compelling stories.</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <ul class="list-unstyled">
                                            <li class="d-flex mb-2">
                                                <i class="far fa-check-circle text-success me-2 mt-2"></i>
                                                <span>Examine ways to connect with your audience by personalizing your content.</span>
                                            </li>
                                            <li class="d-flex mb-2">
                                                <i class="far fa-check-circle text-success me-2 mt-2"></i>
                                                <span>Break down the best ways to exude executive presence.</span>
                                            </li>
                                            <li class="d-flex mb-2">
                                                <i class="far fa-check-circle text-success me-2 mt-2"></i>
                                                <span>Explore how to communicate the unknown in an impromptu communication.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Maecenas viverra condimentum nulla molestie condimentum. Nunc ex libero, feugiat quis lectus vel, ornare euismod ligula. Aenean sit amet arcu nulla.</p>
                                <p>Duis facilisis ex a urna blandit ultricies. Nullam sagittis ligula non eros semper, nec mattis odio ullamcorper. Phasellus feugiat sit amet leo eget consectetur.</p>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <!-- Reviews -->
                                <div class="mb-3">
                                    <h3 class="mb-4">How students rated this courses</h3>
                                    <div class="row align-items-center">
                                        <div class="col-auto text-center">
                                            <h3 class="display-2 fw-bold">4.5</h3>
                                            <i class="mdi mdi-star me-n1 text-warning"></i>
                                            <i class="mdi mdi-star me-n1 text-warning"></i>
                                            <i class="mdi mdi-star me-n1 text-warning"></i>
                                            <i class="mdi mdi-star me-n1 text-warning"></i>
                                            <i class="mdi mdi-star me-n1-half text-warning"></i>
                                            <p class="mb-0 fs-6">(Based on 27 reviews)</p>
                                        </div>
                                        <!-- Progress bar -->
                                        <div class="col pt-3 order-3 order-md-2">
                                            <div class="progress mb-3" style="height: 6px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress mb-3" style="height: 6px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress mb-3" style="height: 6px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress mb-3" style="height: 6px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress mb-0" style="height: 6px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-auto col-6 order-2 order-md-3">
                                            <!-- Rating -->
                                            <div>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <span class="ms-1">53%</span>
                                            </div>
                                            <div>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-light"></i>
                                                <span class="ms-1">36%</span>
                                            </div>
                                            <div>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-light"></i>
                                                <i class="mdi mdi-star me-n1 text-light"></i>
                                                <span class="ms-1">9%</span>
                                            </div>
                                            <div>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-light"></i>
                                                <i class="mdi mdi-star me-n1 text-light"></i>
                                                <i class="mdi mdi-star me-n1 text-light"></i>
                                                <span class="ms-1">3%</span>
                                            </div>
                                            <div>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-light"></i>
                                                <i class="mdi mdi-star me-n1 text-light"></i>
                                                <i class="mdi mdi-star me-n1 text-light"></i>
                                                <i class="mdi mdi-star me-n1 text-light"></i>
                                                <span class="ms-1">2%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- hr -->
                                <hr class="my-5" />
                                <div class="mb-3">
                                    <div class="d-lg-flex align-items-center justify-content-between mb-5">
                                        <!-- Reviews -->
                                        <div class="mb-3 mb-lg-0">
                                            <h3 class="mb-0">Reviews</h3>
                                        </div>
                                        <div>
                                            <!-- Form -->
                                            <form class="form-inline">
                                                <div class="d-flex align-items-center me-2">
                                                    <span class="position-absolute ps-3">
							                            <i class="fe fe-search"></i>
							                        </span>
                                                    <input type="search" class="form-control ps-6" placeholder="Search Review" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Rating -->
                                    <div class="d-flex border-bottom pb-4 mb-4">
                                        <img src="../assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle avatar-lg" />
                                        <div class=" ms-3">
                                            <h4 class="mb-1">
                                                Max Hawkins
                                                <span class="ms-1 fs-6 text-muted">2 Days ago</span>
                                            </h4>
                                            <div class="fs-6 mb-2">
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                            </div>
                                            <p>Lectures were at a really good pace and I never felt lost. The instructor was well informed and allowed me to learn and navigate Figma easily.</p>
                                            <div class="d-lg-flex">
                                                <p class="mb-0">Was this review helpful?</p>
                                                <a href="#" class="btn btn-xs btn-primary ms-lg-3">Yes</a>
                                                <a href="#" class="btn btn-xs btn-outline-white ms-1">No</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Rating -->
                                    <div class="d-flex border-bottom pb-4 mb-4">
                                        <img src="../assets/images/avatar/avatar-3.jpg" alt="" class="rounded-circle avatar-lg" />
                                        <div class=" ms-3">
                                            <h4 class="mb-1">Arthur Williamson <span class="ms-1 fs-6 text-muted">3 Days ago</span>
                                            </h4>
                                            <div class="fs-6 mb-2">
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                            </div>
                                            <p>Its pretty good.Just a reminder that there are also students with Windows, meaning Figma its a bit different of yours. Thank you!</p>
                                            <div class="d-lg-flex">
                                                <p class="mb-0">Was this review helpful?</p>
                                                <a href="#" class="btn btn-xs btn-primary ms-lg-3">Yes</a>
                                                <a href="#" class="btn btn-xs btn-outline-white ms-1">No</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Rating -->
                                    <div class="d-flex border-bottom pb-4 mb-4">
                                        <img src="../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar-lg" />
                                        <div class=" ms-3">
                                            <h4 class="mb-1">Claire Jones <span class="ms-1 fs-6 text-muted">4 Days ago</span></h4>
                                            <div class="fs-6 mb-2">
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                            </div>
                                            <p>
                                                Great course for learning Figma, the only bad detail would be that some icons are not included in the assets. But 90% of the icons needed are included, and the voice of the instructor was very clear and easy to understood.
                                            </p>
                                            <div class="d-lg-flex">
                                                <p class="mb-0">Was this review helpful?</p>
                                                <a href="#" class="btn btn-xs btn-primary ms-lg-3">Yes</a>
                                                <a href="#" class="btn btn-xs btn-outline-white ms-1">No</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Rating -->
                                    <div class="d-flex">
                                        <img src="../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle avatar-lg" />
                                        <div class=" ms-3">
                                            <h4 class="mb-1">
                                                Bessie Pena
                                                <span class="ms-1 fs-6 text-muted">5 Days ago</span>
                                            </h4>
                                            <div class="fs-6 mb-2">
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                                <i class="mdi mdi-star me-n1 text-warning"></i>
                                            </div>
                                            <p>
                                                I have really enjoyed this class and learned a lot, found it very inspiring and helpful, thank you!

                                            </p>
                                            <div class="d-lg-flex">
                                                <p class="mb-0">Was this review helpful?</p>
                                                <a href="#" class="btn btn-xs btn-primary ms-lg-3">Yes</a>
                                                <a href="#" class="btn btn-xs btn-outline-white ms-1">No</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="transcript" role="tabpanel" aria-labelledby="transcript-tab">
                                <!-- Description -->
                                <div>
                                    <h3 class="mb-3">Transcript from the "Introduction" Lesson</h3>
                                    <div class="mb-4">
                                        <h4>Course Overview <a href="#" class="text-primary ms-2 h4">[00:00:00]</a></h4>
                                        <p class="mb-0">
                                            My name is John Deo and I work as human duct tape at Gatsby, that means that I do a lot of different things. Everything from dev roll to writing content to writing code. And I used to work as an architect at IBM. I live in Portland, Oregon.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>Introduction <a href="#" class="text-primary ms-2 h4">[00:00:16]</a></h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>Why Take This Course? <a href="#" class="text-primary ms-2 h4">[00:00:37]</a></h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>A Look at the Demo Application <a href="#" class="text-primary ms-2 h4">[00:00:54]</a></h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>Summary <a href="#" class="text-primary ms-2 h4">[00:01:31]</a></h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab pane -->
                            <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                                <!-- FAQ -->
                                <div>
                                    <h3 class="mb-3">Course - Frequently Asked Questions</h3>
                                    <div class="mb-4">
                                        <h4>How this course help me to design layout?</h4>
                                        <p>
                                            My name is Jason Woo and I work as human duct tape at Gatsby, that means that I do a lot of different things. Everything from dev roll to writing content to writing code. And I used to work as an architect at IBM. I live in Portland, Oregon.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>What is important of this course?</h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>Why Take This Course?</h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <h4>Is able to create application after this course?</h4>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                        <p>
                                            We'll dive into GraphQL, the fundamentals of GraphQL. We're only gonna use the pieces of it that we need to build in Gatsby. We're not gonna be doing a deep dive into what GraphQL is or the language specifics. We're also gonna get into MDX. MDX is a way
                                            to write React components in your markdown.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 mt-lg-n22">
                <!-- Card -->
                <div class="card mb-3 mb-4">
                    <div class="p-1">
                        <div class="d-flex justify-content-center position-relative rounded py-10 border-white border rounded-3 bg-cover" style="background-image: url(/uploads/thumbnails/{{ $course->filename }});">
                            <a class="popup-youtube icon-shape rounded-circle btn-play icon-xl text-decoration-none" href="{{ $course->url }}">
                                <i class="fe fe-play"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="d-grid">
                            @if(empty($user))
                                <button class="btn btn-outline-primary" onclick="openLoginModal()">Login to Enrol</button>
                            @else
                                <form action="{{route('course.enrol')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="student_id" value="{{$user->id}}" />
                                    <input type="hidden" name="instructor_id" value="{{$instructor->id}}" />
                                    <input type="hidden" name="course_id" value="{{$course->id}}" />
                                    @if($enrolCount == 0)
                                    <button class="btn btn-outline-primary" type="submit">Enrol to get Access</button>
                                    @endif
                                </form>
                                @if($enrolCount != 0)
                                    <a href="/courses/{{$course->id}}/watch">
                                        <button class="btn btn-primary">Watch Course</button>
                                    </a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="card">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="position-relative">
                                @if($instructor->img == null || $instructor->img == "")
                                <img src="../assets/images/avatar/avatar-3.jpg" alt="" class="rounded-circle avatar-xl" />
                                @else
                                <img src="uploads/profiles/{{$instructor->img}}" alt="" class="rounded-circle avatar-xl" />
                                @endif
                                {{-- <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip" data-placement="top" title="Verifed">
                                    <img src="../assets/images/svg/checked-mark.svg" alt="" height="30" width="30" />
                                </a> --}}
                            </div>
                            <div class="ms-4">
                                <h4 class="mb-0">{{$instructor->name}}</h4>
                                <p class="mb-1 fs-6">{{$instructor->title}}</p>
                                <span class="fs-6"><span class="text-warning">4.5</span><span class="mdi mdi-star text-warning me-2"></span>Instructor Rating</span>
                            </div>
                        </div>
                        <div class="border-top row mt-3 border-bottom mb-3 g-0">
                            <div class="col">
                                <div class="pe-1 ps-2 py-3">
                                    <h5 class="mb-0">11,604</h5>
                                    <span>Students</span>
                                </div>
                            </div>
                            <div class="col border-start">
                                <div class="pe-1 ps-3 py-3">
                                    <h5 class="mb-0">{{$instructor->course_count}}</h5>
                                    <span>Courses</span>
                                </div>
                            </div>
                            <div class="col border-start">
                                <div class="pe-1 ps-3 py-3">
                                    <h5 class="mb-0">12,230</h5>
                                    <span>Reviews</span>
                                </div>
                            </div>
                        </div>
                        <a href="instructor-profile.html" class="btn btn-outline-white btn-sm">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card -->
        {{-- <div class="pt-12 pb-3">
            <div class="row d-md-flex align-items-center mb-4">
                <div class="col-12">
                    <h2 class="mb-0">Related Courses</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card mb-4 card-hover">
                        <a href="course-single.html" class="card-img-top"><img src="../assets/images/course/course-react.jpg" alt="" class="card-img-top rounded-top-md" /></a>
                        <!-- Card body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2"><a href="course-single.html" class="text-inherit">How to
                easily create a website with React</a></h4>
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
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs" alt="" />
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
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card mb-4 card-hover">
                        <a href="course-single.html" class="card-img-top"><img src="../assets/images/course/course-graphql.jpg" alt="" class="card-img-top rounded-top-md" /></a>
                        <!-- Card body -->
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2"><a href="course-single.html" class="text-inherit">GraphQL:
                introduction to graphQL for beginners</a></h4>
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
                        <!-- Card footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="../assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-xs" alt="" />
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
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card mb-4 card-hover">
                        <a href="course-single.html" class="card-img-top"><img src="../assets/images/course/course-angular.jpg" alt="" class="card-img-top rounded-top-md" /></a>
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2"><a href="course-single.html" class="text-inherit">Angular -
                the complete guide for beginner</a></h4>
                            <ul class="mb-3 list-inline">
                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m</li>
                                <li class="list-inline-item">
                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0
                                0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <!-- Card footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs" alt="" />
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
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card mb-4 card-hover">
                        <a href="course-single.html" class="card-img-top"><img src="../assets/images/course/course-python.jpg" alt="" class="card-img-top rounded-top-md" /></a>
                        <div class="card-body">
                            <h4 class="mb-2 text-truncate-line-2"><a href="course-single.html" class="text-inherit">The Python
                Course: build web application</a></h4>
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
                        <!-- Card footer -->
                        <div class="card-footer">
                            <div class="row align-items-center g-0">
                                <div class="col-auto">
                                    <img src="../assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="" />
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
        </div> --}}
    </div>
</div>
  

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="addSectionModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="padding-bottom: 0!important;">
      <div class="modal-header">
        <h4 class="modal-title" id="addSectionModalLabel1">
          Login
        </h4>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" onclick="dismissModal()">
            <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        @if(count($errors) > 0)
            @if($errors->first() == 'email_not_match')
                <div class="alert alert-warning">
                    Email address is invalid. Please try again.
                </div>
            @endif
            @if($errors->first() == 'pass_not_match')
                <div class="alert alert-warning">
                    Password is invalid. Please try again.
                </div>
            @endif
            @if($errors->first() == 'banned')
                <div class="alert alert-warning">
                    You are currently banned. Please contact customer support.
                </div>
            @endif
        @endif
        <form action="{{route('student.login')}}" method="post">
        @csrf
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" value="{{old('password')}}">
            </div>
            <br>
            <hr>
            <input type="hidden" name="enrol_page" value="1">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-md">Login</button>
                <button type="button" class="btn btn-default btn-md" onclick="dismissModal()">Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script> 

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    function openLoginModal()
    {
        $("#loginModal").modal('show');
    }
</script>

@if(count($errors) > 0)
    @if($errors->first() == 'email_not_match' || $errors->first() == 'pass_not_match' || $errors->first() == 'banned')
        <script>
            $(document).ready(function(){
                $("#loginModal").modal('show');
            });
        </script>
    @endif
@endif
@endsection

