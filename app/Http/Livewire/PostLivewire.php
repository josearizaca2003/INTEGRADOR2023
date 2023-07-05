<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class PostLivewire extends Component
{
    use WithPagination;
    public function render()
    {
        $jobs=Job::paginate(6);
        $companies=Company::all();
        return view('livewire.post-livewire',compact('jobs','companies'));
    }
}
