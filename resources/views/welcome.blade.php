@extends('layouts.layout')


@section('homeactive')
    active
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(43, 57, 64, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Find The Perfect Job That You
                                    Deserved</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at
                                    sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A
                                    Job</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A
                                    Talent</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(43, 57, 64, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Find The Best Startup Job That
                                    Fit You</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at
                                    sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A
                                    Job</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A
                                    Talent</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Search Start -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn " data-wow-delay="0.1s" style="padding: 30px;">
        @auth
        <div class=" d-flext mb-2 ">
            <img class="img-circle img-bordered-sm rounded-circle " style="height:40px;width: 40;" src="/img/com-logo-1.jpg" alt="user image">
            <span class="username text-white">

                {{ auth()->user()->name }}
            </span>
        </div>
        @endauth
        <div class="container">

            <div class="row g-2">

                <div class="col-md-10">
                    <div class="row g-2">

                        <form action="/">
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                            <button class="btn btn-dark" type="submit">Go</button>
                          </div>
                        </form>

                        {{-- <div class="col-md-4">
                            <select class="form-select border-0">
                                <option selected>Category</option>
                                <option value="1">Category 1</option>
                                <option value="2">Category 2</option>
                                <option value="3">Category 3</option>
                            </select>
                        </div> --}}
                        {{-- <div class="col-md-2">
                            <button class="btn btn-dark border-0 w-100">Search</button>
                        </div> --}}
                        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible" id="divT" style="visibility:visible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success!</strong> {{ session('message') }}
              </div>
              @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0 about-bg rounded overflow-hidden">
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100" src="img/about-1.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 15%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid" src="img/about-3.jpg" style="width: 85%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-100" src="img/about-4.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Jobs Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Jobs List</h1>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">

                <div class="tab-content">


                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        @foreach ($job as $jobs)
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="{{ $jobs->logo ? asset('storage/'.$jobs->logo) : asset('/img/com-logo-1.jpg')}}"
                                            alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">{{ $jobs->title }}</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>{{ $jobs->location }}</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>{{ $jobs->job_nature }}</span>
                                            <span class="text-truncate me-0"><i
                                                    class="far fa-money-bill-alt text-primary me-2"></i>${{ $jobs->salary }}</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">

                                            <a class="btn btn-primary" href="/postjob/{{ $jobs->id }}">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i
                                                class="far fa-calendar-alt text-primary me-2"></i>Date Line: {{ $jobs->Date_line }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                        <a class="btn btn-primary py-3 px-5" href="/joblist">Load more
                        </a>

                        </div>

                    </div>


                </div>

            </div>
        </div>

    </div>
    <!-- Jobs End -->
    @endsection



