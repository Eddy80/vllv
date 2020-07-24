<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Packet;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

     /*
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    */


  public function packets()  //array $data
  {
      $packets = Packet::All();
      return view('packetssection')->with(['packets'=>$packets]);
  }


  public function register(Request $request)  //array $data
  {
      $packets = Packet::All();
      return view('auth.register')->with(['packets'=>$packets, 'packetid'=>$request->packetid]);
  }

    public function create(Request $request)  //array $data
    {
      //dd($request);

        $validator =  $this->validate($request,[
            'firstname'=> 'required|min:2',
            'lastname'=> 'required|min:2',
            'email'=> 'required|email|unique:users',
            'password'=> 'required',
        ]);

        $user = User::add($request->all());


        Auth::login($user);
        $currentuser = Auth::user();
        $packets = Packet::All();
        return view('cab')->with(['packets'=>$packets]);
       //  return redirect('/cab');
    }

}
