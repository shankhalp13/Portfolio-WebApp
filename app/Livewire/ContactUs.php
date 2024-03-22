<?php

namespace App\Livewire;
use App\Models\Registration;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactUs extends Component
{
    ##[Validate(['required', 'email'])]
    public $email;
    public $phone;
    public $name;
    public $subject;
    public $message;
    public $loginId;
    public $captcha;

//public $submitted = false;
    public function render()
    {
        return view('livewire.contact-us',[
            'email'=> $this->email,
            'phone'=> $this->phone,
            'name'=> $this->name,
        ]);
    }

    public function mount($loginId)
    {
        $login = Registration::find($loginId); //assigning the login credentials in the page
        if($login!=null){
            $this->email = $login->email;
            $this->phone = $login->phonenumber;
            $this->name = $login->name;
        }

    }

    public function store(){

        // $messages = [
        //     'g-recaptcha-response.required' => 'You must check the reCAPTCHA.',
        //     'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
        // ];

        $messages = [
            'captcha.required' => 'You must check the reCAPTCHA.',
            'captcha.captcha' => 'Captcha error! try again later or contact site admin.',
        ];

        $this->validate([
            'captcha' => 'required|captcha',
            'email'=> 'required|email',
            'phone'=> 'required',
            'name'=> 'required',
            'subject'=>'required',
            'message'=>'required',

        ]);



        // $validator = $this->validate([
        //     'g-recaptcha-response' => 'required|captcha'
        // ], $messages);

        // if ($validator->fails()) {
        //     return back()
        //                 ->withErrors($validator)
        //                 ->withInput($request->all());
        // }

        $contact = new Contact;
        $contact->fullname = $this->name;
        $contact->email = $this->email;
        $contact->phonenumber = $this->phone;
        $contact->subject = $this->subject;
        $contact->message = $this->message;

        if($contact->save()){
            toastr()->success('Data has been saved successfully!');
            Session::flash('success',true);
            $this->reset();

            //$this->submitted= true;
        }

    }
}
