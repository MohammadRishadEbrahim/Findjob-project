@extends('layouts.layout')

@section('content')
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-12">
                <div class="d-flex align-items-center mb-5">
                    <img class="flex-shrink-0 img-fluid border rounded" src="{{$Applier->logo ? asset('storage/'.$Applier->logo) : asset('/img/com-logo-1.jpg')}}" alt="" style="width: 80px; height: 80px;">
                    <div class="text-start ps-4">
                        <h3 class="mb-3">{{ $Applier->name }}</h3>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Submit At : {{ $Applier->created_at}}</span>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="mb-2">Email</h4>
                    <p><a href="mailto:{{ $Applier->email }}">{{ $Applier->email }}</a></p>
                    <h4 class="mb-2">Portfolio</h4>
                    <p><a href="http://{{ $Applier->website }}" target="_blank">{{ $Applier->website }}</a></p>
                    <h4 class="mb-3 text-center">Coverletter</h4>
                    <p class="mb-3 text-start">{{ $Applier->coverletter }}</p>

                </div>


            </div>





        </div>
    </div>
</div>
@endsection
