<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\ContactMail;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }
    public function form1_data(Request $request)
    {
        // dd($request->all());
        // dd($request->except('_token'));
        // dd($request->only(['name','age']));
        $name = $request->name;
        $age = $request->age;
        $email = $request->email;
       return "Welcome $name your age is $age and your email is $email";
    }

        public function form2()
        {
            return view('forms.form2');
        }

        public function form2_data(Request $request)
        {
            // dd($request->all());

            // $name = $request->name;
            // $email = $request->email;
            // $message = $request->message;
            // return view('forms.form2_data',compact('name','email','message'));

            // Mail::to('admin@example.com')->send(new ContactUsMail($request->except('_token')));

        }

        public function form3()
        {
            return view('forms.form3');
        }

        public function form3_data(Request $request)
        {
            // dd($request->all());
            $name = htmlspecialchars($request->name);
            $email = htmlspecialchars($request->email);
            $age = htmlspecialchars($request->age);

            // $rules= [];
            // foreach ($request->all() as $key => $value) {
            //         $rules[$key] = 'required'; //make the rules of all inputs as an associative array called $rules ,$key is the input name
            // }
            // $request->validate($rules);
            // dump($rules);

            $request->validate([
                'name' => 'required | min:4',
                'email' => 'required',
                'age' => 'required|numeric|gt:18|lt:100' //gt: mean greater than ,lt: less than
            ]);


            return view('forms.form3_data',compact('name','email','age'));
            // return view(route('forms.form3_data'));
        }

        public function form4()
        {
            return view(('forms.form4'));
        }

        public function form4_data(Request $request)
        {
            $request->validate([
                'image' => 'required|image|mimes:png,jpg|max:1024' //['required','image','mimes:png,jpg','max:1024'] rules as an array
            ]);

            // dd($request->all());
            // $img_name = rand().rand().$request->file('image')->getClientOriginalName().time().'.'.$request->file('image')->getClientOriginalExtension();
            // $img_name = rand().time().$request->file('image')->getClientOriginalName();
            // $image = $request->file('image');
            $img_name = rand().'.'.rand().rand().'.'.rand().'_n.'.$request->file('image')->getClientOriginalExtension(); //Facebook nameing way
            $request->file('image')->move(public_path('uploads'),$img_name);
            return view('forms.form4_data',compact('img_name'));
        }

        public function full_form()
        {
            return view('forms.full_form');
        }


        public function full_form_data(Request $request)
        {
            // dd($request->all());

            $name = $request->name;
            $email = $request->email;
            $age = $request->age;
            $image = $request->image;
            $bio = $request->bio;
            $phone = $request->phone;
            $gender = $request->gender;
            $intersets = $request->intersets;
            $country = $request->country;

            $request->validate([
                'name' => 'required|max:50|min:4',
                'email' => 'required',
                'age' => 'required|numeric|gt:18|lt:100',
                'bio' => 'required',
                'image' => 'required|mimes:jpg,png|max:2048',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'gender' => 'required',
                'intersets' => 'required',
                'country' => 'required',
             ]);

            $img_name =rand().'-'.rand().'-'.time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'),$img_name);



            return view('forms.full_form_data',compact('name','email','age','img_name','bio','phone','gender','intersets','country'));

        }

        public function contact_us()
        {
                return view('forms.contact_us');
        }

        public function contact_us_data(Request $request)
        {
            // dd($request->all());

            $request->validate([
                'name' => 'required|min:3',
                'email' => 'required',
                'message' => 'required',
                'image' => 'required|image|mimes:png,jpg|max:2048',
            ]);

            $name = $request->name;
            $email = $request->email;
            $message = $request->message;

            $img_name = rand().'_'.rand().time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $img_name);

            $data = $request->except('_token');
            $data['image'] = $img_name;

            // dd($request->all());



            Mail::to('ahmed.zo.2001.sa@gmail.com')->send(new ContactMail($data));
        }
}
