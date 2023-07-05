<?php

namespace App\Http\Livewire;

use App\Models\Job;
use App\Models\Graduate;
use Livewire\Component;
use Illuminate\Support\Str;


class CrudJob extends Component{

    public $isOpen=false;

    public $search,$job;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'job.Titulo'=>'required',
        'job.Descripcion'=>'required',
        'job.company_id'=>'required',

    ];

    public function render(){
        $jobs=job::where('Titulo','LIKE','%'.$this->search.'%')->latest('id')->paginate(6);
        $graduates = Graduate::all();
        return view('livewire.crud-job',compact('jobs','graduates'));
    }

    public function create(){
        $this->isOpen=true;
        $this->ruteCreate=true;
        $this->reset('job');
    }

    public function store(){
        $this->validate();
        if(!isset($this->job['id'])){
            job::create($this->job);
        }else{
            $job=job::find($this->job['id']);
            $job->Titulo=$this->job['Titulo'];
            $job->Descripcion=$this->job['Descripcion'];
            $job->company_id=$this->job['company_id'];
            $job->save();
        }
        $this->reset(['isOpen','job']);
        $this->emitTo('Crudjob','render');
    }

    public function delete(job $item){
        $item->delete();
    }

    public function edit($job){
        $this->job=$job;
        //dd($this->job);
        $this->isOpen=true;
    }

}
