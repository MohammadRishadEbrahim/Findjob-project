@extends('layouts.layout')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Applicants List</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">

                    @foreach ($job as $jobs )


                    @foreach ($jobs->customers as $applier )
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="{{$applier->logo ? asset('storage/'.$applier->logo) : asset('/img/com-logo-1.jpg') }}" alt="" style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">{{ $applier->name }}</h5>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Apply For : {{ $applier->job->title }}</span>

                                </div>

                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex  p-2">
                                    <a class="btn btn-primary m-2" href="/apply/applier/{{ $applier->id }}">Details</a>
                                    <form action="/apply/applier/{{ $applier->id }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-danger m-2">Delete</button>
                                    </form>


                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Submit at : {{ $applier->created_at }}</small>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    @endforeach

                </div>
            </div>
            <div class="d-flex justify-content-center "> <ul class="pagination">
                @if ($prev)
                <li class="page-item"><a class="page-link" href="/postjob/applier?page={{ $prev }}">Previous</a></li>
                @else
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>

                @endif
                @if ($next)
                <li class="page-item"><a class="page-link" href="/joblist?page={{ $next }}">Next</a></li>
                @else
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                @endif


            </ul></div>



            </div>
        </div>
    </div>



@endsection

@section('applieracitve')
active
@endsection
