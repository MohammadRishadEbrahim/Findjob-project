<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public function scopeFilter($query , array $filters){
        if($filters['title'] ?? false){
            $query->where('title','like','%'.request('title').'%');
        }
        if($filters['search'] ?? false){
            $query->where('title','like','%'.request('search').'%')
            ->orWhere('job_nature','like','%'.request('search').'%')
            ->orWhere('location','like','%'.request('search').'%');
        }
    }


    public function customers(){
        return $this->hasMany(Customer::class,'job_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}
