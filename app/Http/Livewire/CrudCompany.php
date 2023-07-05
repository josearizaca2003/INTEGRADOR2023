<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;
use Illuminate\Support\Str;

class CrudCompany extends Component
{
    public $isOpen=false;
    public $search,$company;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'company.Nombre'=>'required',
        'company.Direccion'=>'required',
        'company.Sector'=>'required',
    ];

    public function render()
    {
        $companies=Company::where('Nombre','LIKE','%'.$this->search.'%')->paginate(6);
        return view('livewire.crud-company',compact('companies'));
    }
    public function create(){
        $this->isOpen=true;
    }
    public function store(){
        $this->validate();
        if(!isset($this->company['id'])){
            Company::create($this->company);
        }else{
            $company=Company::find($this->company['id']);
            $company->Nombre=$this->company['Nombre'];
            $company->Direccion=$this->company['Direccion'];
            $company->Sector=$this->company['Sector'];
            $company->save();
        }
        $this->reset(['isOpen','company']);
        $this->emitTo('CrudCompany','render');
    }
    public function delete(Company $item){
        $item->delete();
    }
    public function edit($company){
        $this->company=$company;
        $this->isOpen=true;
    }
    // public function updatedCompanyName(){
    //     $this->company['slug']=Str::slug($this->company['name']);
    // }

}
