<?php

namespace App\Http\Livewire;
use App\Models\Query;
use Livewire\Component;

class QueryComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $category;
    public $gender;
    public $age;
    public $weight;
    public $location;
    public $message;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'category'=> 'required', 
            'gender'=> 'required', 
            'age'=> 'required', 
            'weight'=> 'required', 
            'location'=> 'required', 
            'message' => 'required'

        ]);
    }
    public function sendMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
           'category'=> 'required', 
            'gender'=> 'required', 
            'age'=> 'required', 
            'weight'=> 'required', 
            'location'=> 'required',
            'message' => 'required'

        ]);
        $queries = new Query();
        $queries ->name = $this->name;
        $queries ->email = $this->email;
        $queries ->phone = $this->phone;
        $queries ->category = $this->category;
        $queries->gender = $this->gender;
        $queries->age=$this->age;
        $queries->weight=$this->weight;
        $queries->location=$this->location;
        $queries ->message = $this->message;
        $queries->save();
        session()->flash('query_message','Thanks ,Your query has been sent successfully!');
        return redirect()->route('queries');

    }
    public function render()
    {
        return view('livewire.query-component');
    }
}
