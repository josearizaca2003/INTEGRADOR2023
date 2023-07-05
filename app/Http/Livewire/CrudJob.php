<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;
use Illuminate\Support\Str;


class CrudJob extends Component
{

    public $isOpen=false;
    public $search,$job;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'job.Titulo'=>'required',
        'job.Descripcion'=>'required',
        'job.company_id '=>'required',
    ];

    public function render()
    {
        $jobs=Job::where('Titulo','LIKE','%'.$this->search.'%')->paginate(10);
        return view('livewire.crud-job',compact('jobs'));
    }
    public function create(){
        $this->isOpen=true;
    }
    public function store(){
        $this->validate();
        if(!isset($this->job['id'])){
            Job::create($this->job);
        }else{
            $job=Job::find($this->job['id']);
            $job->Titulo=$this->job['Titulo'];
            $job->Descripcion=$this->job['Descripcion'];
            $job->company_id=$this->job['company_id'];
            $job->save();
        }
        $this->reset(['isOpen','job']);
        $this->emitTo('CrudJob','render');
    }
    public function delete(Job $item){
        $item->application()->delete();

        $item->delete();
        /* DB::beginTransaction();

        try {
            // Eliminar las filas dependientes en la tabla "aplicaciones"
            DB::table('aplications')->where('job_id', $item)->delete();

            // Eliminar la fila principal en la tabla "trabajos"
            DB::table('jobs')->where('id', $item)->delete();

            DB::commit();

            session()->flash('success', 'Filas eliminadas correctamente.');
        } catch (\Exception $e) {
            DB::rollback();

            session()->flash('error', 'Error al eliminar las filas: ' . $e->getMessage());
        } */



    }
    public function edit($job){
        $this->job=$job;
        $this->isOpen=true;
    }
    public function updatedJobName(){
        $this->job['slug']=Str::slug($this->job['name']);
    }
}
