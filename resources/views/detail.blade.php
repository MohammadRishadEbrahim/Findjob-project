@extends('layouts.layout')

@section('content')
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-8">
                <div class="d-flex align-items-center mb-5">
                    <img class="flex-shrink-0 img-fluid border rounded" src="{{$job->logo ? asset('storage/'.$job->logo) :  asset('/img/com-logo-2.jpg') }}" alt="" style="width: 80px; height: 80px;">
                    <div class="text-start ps-4">
                        <h3 class="mb-3">{{ $job->title }}</h3>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $job->location }}</span>
                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{ $job->job_nature }}</span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>${{ $job->salary }}</span>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="mb-3">Job description</h4>
                    <p>{{ $job->description }}</p>
                    {{-- <h4 class="mb-3">Responsibility</h4>
                    <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                    </ul> --}}
                    <h4 class="mb-3">Qualifications</h4>
                    <p>{{ $job->qualifications }} </p>

                </div>
                @auth

                @else


                <div class="">
                    <h4 class="mb-4">Apply For The Job</h4>
                    <form action="/apply/{{ $job->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">

                                <div class="col-12 col-sm-6">
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Your Name">
                                    @error('name')
                                    <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
                                 @enderror
                                </div>

                            <div class="col-12 col-sm-6">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Your Email">
                                @error('email')
                                <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
                             @enderror
                            </div>

                            <div class="col-12 col-sm-6">
                                <input type="text"  name="website" value="{{ old('website') }}" class="form-control" placeholder="Portfolio Website">
                                @error('website')
                                <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
                             @enderror
                            </div>

                            <div class="col-12 col-sm-6">
                                <input type="file" name="logo" class="form-control bg-white">
                            </div>

                            <div class="">
                                <textarea class="form-control" name="coverletter" value="{{ old('coverletter') }}" rows="5" placeholder="Coverletter"></textarea>
                                @error('coverletter')
                                <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                @endauth
            </div>

            <div class="col-lg-4">
                <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Job Summery</h4>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: {{ $job->created_at }}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: {{ $job->vacancy }} Position</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: {{ $job->job_nature }}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: ${{ $job->salary }}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Location: {{ $job->location }}</p>
                    <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: {{ $job->Date_line }}</p>
                </div>
                <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Company Detail</h4>
                    <p class="m-0">Ipsum dolor ipsum accusam stet et et diam dolores, sed rebum sadipscing elitr vero dolores. Lorem dolore elitr justo et no gubergren sadipscing, ipsum et takimata aliquyam et rebum est ipsum lorem diam. Et lorem magna eirmod est et et sanctus et, kasd clita labore.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Job Detail End -->

@endsection
