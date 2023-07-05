<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Company;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Job $job){
        /* dd($job); */
        $ultimas=Job::latest('id')->take(5)->get();
        return view('posts.show',compact('job','ultimas'));
    }
    public function search(Company $company){
        $jobs=Job::where('company_id',$company->id)->get();
        $companies=Company::all();
        return view('posts.search',compact('jobs','companies'));
    }
}
