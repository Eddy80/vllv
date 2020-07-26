<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Auth;
use App\Packet;
use App\Lesson;
use App\Expert;
use App\Comment;
use App\Manshet;
use App\Uservideo;
use App\Lessonvideo;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function packets()  //array $data
    {
        $packets = Packet::All();
        $lessonsnew = Lesson::orderBy('id', 'desc')->take(3)->get();
        $lessonspopular = Lesson::orderBy('totalviewcount', 'desc')->take(3)->get();
        $experts = Expert::All();
        $comments = Comment::All();
        $manshets = Manshet::All();
        return view('home')->with(['packets'=>$packets, 'manshets'=>$manshets, 'comments'=>$comments, 'experts'=>$experts, 'lessonsnew'=>$lessonsnew, 'lessonspopular'=>$lessonspopular]);
    }

    public function cabinet()
    {


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
}
