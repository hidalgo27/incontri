<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithFileUploads;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class Reservations extends Component
{
    use WithFileUploads;

    public $date;
    public $time;
    public $guess;
    public $occasion;
    public $name;
    public $email;
    public $phone;
    public $description;
    public $success;
    public $totalSteps = 3;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }

    public function render()
    {
        $times=['11:30pm','12:00pm','12:30pm','1:00pm','1:30pm','2:00pm','2:30pm','3:00pm','3:30pm',
                '4:00pm','4:30pm','5:00pm','5:30pm','6:00pm','6:30pm','7:00pm','7:30pm',
                '8:00pm','8:30pm','9:00pm'];
        $people=['1','2','3','4','5','6','7','8'];
        return view('livewire.reservations',compact('times','people'));
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }


    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'date'=>'required',
                'time'=>'required',
            ]);
        }
        elseif($this->currentStep == 2){
            $this->validate([
                'guess'=>'required',
            ]);
        }
        elseif($this->currentStep == 3){
            $this->validate([
                'name'=>'required',
                'email'=>'required',
                'phone'=>'required',
            ]);
        }
    }
    public function load_submit(){
        return 'loading';
    }
    public function register(){
        $this->resetErrorBag();
        $this->validateData();
        $from ="admin@incontrimachupicchu.com";
        $email=$this->email;
        $name=$this->name;
        try {
            Mail::send(['html' => 'page.email.cliente'], ['nombre' => $this->name],
                function ($messaje) use ($email, $name) { $messaje->to($this->email, $this->name)
                    ->subject('INCONTRI')
                    ->from('admin@incontrimachupicchu.com', 'INCONTRI');
            });
            Mail::send(['html' => 'page.email.contact'], [
                    "date"=>$this->date,
                    "time"=>$this->time,
                    "guess"=>$this->guess,
                    "occasion"=>$this->occasion,
                    "name"=>$this->name,
                    "email"=>$this->email,
                    "phone"=>$this->phone,
                    "description"=>$this->description,
                ],
                function ($messaje) use ($from) { $messaje->to($from, 'INCONTRI')
                    ->subject('INCONTRI - Reserva')
                    ->from('admin@incontrimachupicchu.com', 'INCONTRI');
            });
            $this->reset('date');
            $this->reset('time');
            $this->reset('guess');
            $this->reset('occasion');
            $this->reset('email');
            $this->reset('phone');
            $this->reset('name');
            $this->reset('description');
            $this->success = __('message.aux_4');

        }
        catch (Exception $e){
            return $e;
        }
    }
}
