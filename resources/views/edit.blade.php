@extends('layouts.layout')
@section('content')
<div class="col-md-6 container-fluid ">

    <div class="wow fadeInUp" data-wow-delay="0.5s">
         <header class="text-center mt-4">
            <h2 class="text-2xl font-bold uppercase mb-1"> Edit Job </h2>
            <p class="mb-3">Edit a Job to find a Empolayee</p>
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible" id="divT" style="visibility: visible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success!</strong> {{ session('message') }}
              </div>
              @endif
        </header>
        <form action="/postjob/{{ $jobs->id }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="title" class="form-control" id="name" value="{{ $jobs->title }}" placeholder="Title">
                        <label for="title">Title</label>
                    </div>
                    @error('title')
                    <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
                 @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="number" name="vacancy" value="{{ $jobs->vacancy }}" class="form-control"  placeholder="Vacancy">
                        <label for="vacancy">Vacancy</label>
                    </div>
                    @error('vacancy')
                    <p class=" text-danger text-danger "  style="font-size: 12px">{{ $message }}</p>
                 @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="job_nature" value="{{ $jobs->job_nature }}" class="form-control"  placeholder="Job nature">
                        <label for="job_nature">Job_nature</label>
                    </div>
                    @error('job_nature')
                    <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
                 @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="salary" value="{{ $jobs->salary }}" class="form-control" placeholder="Salary">
                        <label for="salary">Salary</label>
                    </div>
                    @error('salary')
                    <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
                 @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="location" value="{{ $jobs->location }}" class="form-control" placeholder="Location">
                        <label for="location">Location</label>
                    </div>
                    @error('location')
                    <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
                 @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="date" name="date_line" value="{{ $jobs->Date_line}}" class="form-control" placeholder="Date line">
                        <label for="date_line">Date line</label>
                    </div>
                    @error('date_line')
                    <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
                 @enderror
                </div>


                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" value="{{ $jobs->description }}" name="description" placeholder="Job description here" id="message" style="height: 150px"></textarea>
                        <label for="description">Description</label>
                    </div>
                    @error('description')
                    <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
                 @enderror

                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" value="{{ $jobs->responsibility }}" name="responsibility" placeholder="Responsibility here" id="message" style="height: 150px"></textarea>
                        <label for="responsibility">Responsibility</label>
                    </div>
                    @error('responsibility')
                    <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
                 @enderror
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" value="{{ $jobs->qualifications }}" name="qualifications" placeholder="Qualifications here" id="message" style="height: 150px"></textarea>
                        <label for="qualifications">Qualifications</label>
                    </div>
                    @error('qualifications')
                    <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
                 @enderror
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" value="{{ $jobs->company }}" name="company" placeholder="Company description here" id="message" style="height: 150px"></textarea>
                        <label for="company">Company</label>
                    </div>
                    @error('company')
                    <p class=" text-danger text-danger " style="font-size: 12px">{{ $message }}</p>
                 @enderror
                </div>
                <div class="col-md-6">
                    <div class="mb-6 "> <label for="logo" class="d-inline-block text-lg mb-2"> Company Logo </label> <input
                        type="file" name="logo" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                     </div>
                     <div class="h-100 w-100 "><img src="{{ $jobs->logo ? asset('storage/'.$jobs->logo) : asset('/img/com-logo-1.jpg') }}" alt=""></div>
                    </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>

</div>

  @endsection
