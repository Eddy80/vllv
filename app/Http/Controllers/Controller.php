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
      return view('cab')->with(['packets'=>$packets]);
    }
}
