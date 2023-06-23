<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , Job $job)
    {
        $formValidate = $request->validate([
            'name'=>['required','min:4'],
            'email'=>['required','email'],
            'website'=>'required',
            'coverletter'=>'required'
        ]);
        if($request->hasFile('logo')){
            $formValidate['logo']=$request->file('logo')->store('logos','public');
        }
        $formValidate['job_id']=$job->id;
        Customer::create($formValidate);
        return redirect('/')->with('message','You successfully Apply for job');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
     //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('/apply/applier')->with('message','Successfully Delete Applier');
    }



    public function applier(){


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
        return view('applier',[
            'job'=>auth()->user()->job()->get(),
            'next'=>$nxt,
            'prev'=>$prev
        ]);
    }

    public function showApplier(Customer $customer){
        return view('showapplier',[
            'Applier'=>$customer
        ]);
}
}
