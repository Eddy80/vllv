<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Lesson;
use App\Lessonvideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Uservideo;
use App\Packet;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $user = User::where('email', $request->get('email'))
            ->where('password',md5($request->get('password')))
            ->first();


        if ($user){
            Auth::login($user);
            $currentuser = Auth::user();

            $packets = Packet::All();
            $uservideos = Uservideo::where('userid', $currentuser->id)->get();

            //dd($uservideos);
            $videonames = (array) null;
            $percents = (array) null;
            foreach ($uservideos as $uservideo) {
              $v = Lessonvideo::where('lessonid', $uservideo->lessonid)->where('videoid', $uservideo->id)->get('name');
              $lessonvideocount = Lessonvideo::where('lessonid', $uservideo->lessonid)->count();
            //  dd($lessonvideocount);
              $uservideocount = Uservideo::where('userid', $currentuser->id)->where('lessonid', $uservideo->lessonid)->count();
            //  dd($uservideocount);
              $percent = round($uservideocount* 100 / $lessonvideocount);
              array_push($videonames, $v[0]['name'] );
              array_push($percents, $percent );

            }

            // dd($videonames);

            //echo var_dump($uservideos);
        //    return redirect('cab')->with(['packets'=>$packets, 'uservideos'=>$uservideos ]);
          return view('cab')->with(['packets'=>$packets, 'videonames'=>$videonames,'percents'=>$percents, 'uservideos'=>$uservideos]);//->with('currentuser'=>$currentuser);
        }
        return redirect()->back()->with('status','Yalnış email və ya parol');
    }




    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


}
