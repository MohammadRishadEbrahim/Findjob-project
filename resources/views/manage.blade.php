@extends('layouts.layout')

@section('content')
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
                                   <a href="/postjob/{{ $jobs->id }}"><img class="flex-shrink-0 img-fluid border rounded" src="{{ $jobs->logo ? asset('storage/'.$jobs->logo) : asset('/img/com-logo-1.jpg')}}"
                                    alt="" style="width: 80px; height: 80px;"></a>
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
                                    <div class="d-flex mb-3 p-2">

                                        <a class="btn btn-primary mx-2" href="/postjob/{{ $jobs->id }}/edit">Edit</a>
                                        <form action="/postjob/{{ $jobs->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>


                                    </div>
                                    <small class="text-truncate"><i
                                            class="far fa-calendar-alt text-primary me-2"></i>Date Line: {{ $jobs->Date_line }}</small>
                                </div>
                            </div>
                        </div>

                    @endforeach


                    <div class="d-flex justify-content-center "> <ul class="pagination">
                        @if ($prev)
                        <li class="page-item"><a class="page-link" href="/postjob/manage?page={{ $prev }}">Previous</a></li>
                        @else
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>

                        @endif
                        @if ($next)
                        <li class="page-item"><a class="page-link" href="/postjob/manage?page={{ $next }}">Next</a></li>
                          @else
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        @endif

                      </ul></div>

                    </div>

                </div>


            </div>

        </div>
    </div>
@endsection





@section('manageactive')
active
@endsection
