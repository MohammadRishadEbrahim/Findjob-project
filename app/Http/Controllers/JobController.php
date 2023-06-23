<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('welcome',[
             'job'=>Job::latest()->filter(request(['title','search']))->paginate(4)
        ]);

}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postjob');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $formValidate=$request->validate(
            [
                'title'=>'required',
                'vacancy'=>'required',
                'job_nature'=>'required',
                'salary'=>'required',
                'location'=>'required',
                'description'=>'required',
                'company'=>'required',
                'qualifications'=>'required',
                'date_line'=>'required'

            ]
        );

        if($request->hasFile('logo')){
            $formValidate['logo']=$request->file('logo')->store('logos','public');
        }
        $formValidate['user_id']=auth()->id();

        Job::create($formValidate);
        return redirect('/postjob/manage')->with('message','Job succesfuly Post');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('detail',['job'=>$job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('edit',[
            'jobs'=>$job
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        if($job->user_id != auth()->id()){
            abort(404,'unautorize user');
        }
        $formValidate=$request->validate(
            [
                'title'=>'required',
                'vacancy'=>'required',
                'job_nature'=>'required',
                'salary'=>'required',
                'location'=>'required',
                'description'=>'required',
                'company'=>'required',
                'qualifications'=>'required',
                'date_line'=>'required'

            ]
        );
        if($request->hasFile('logo')){
            $formValidate['logo']=$request->file('logo')->store('logos','public');
        }
        $job->update($formValidate);

        return back()->with('message','post Successfully Update');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        if($job->user_id != auth()->id()){
            abort(404,'unautorize user');
        }
        $job->delete();
        return redirect('/postjob/manage')->with('message','Post Successfully Deleted !');
    }

    public function alllist(){
        $n_of_page=3;
        $page = request('page');
        if($page==null){
            $page=1;
        }else{
            $page=(int)$page;
        }
        $Blog = Job::all();
        $len= count($Blog);
        if ($page>1){
            $prev=$page-1;
        }else{
            $prev=null;
        }
        if($page<ceil($len/$n_of_page)){
            $nxt=$page+1;
        }else{
            $nxt=null;
        }
        return view('listing',[
            'job'=>Job::latest()->paginate(4),
            'next'=>$nxt,
            'prev'=>$prev,
            'blog'=>$Blog

        ]);
    }
    public function manage(){


        $n_of_page=3;
        $page = request('page');
        if($page==null){
            $page=1;
        }else{
            $page=(int)$page;
        }
        $Blog = Job::all();
        $len= count($Blog);
        if ($page>1){
            $prev=$page-1;
        }else{
            $prev=null;
        }
        if($page<ceil($len/$n_of_page)){
            $nxt=$page+1;
        }else{
            $nxt=null;
        }
        return view('manage',[
            'job'=>auth()->user()->job()->get(),
            'next'=>$nxt,
            'prev'=>$prev
        ]);
    }

public function contact(){
    return view('layouts.contact');
}

public function about(){
    return view('layouts.about');
}



}

