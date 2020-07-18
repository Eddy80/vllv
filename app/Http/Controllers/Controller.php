<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Packet;
use App\Lesson;
use App\Expert;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function packets()  //array $data
    {
        $packets = Packet::All();
        $lessonsnew = Lesson::orderBy('id', 'desc')->take(3)->get();
        $lessonspopular = Lesson::orderBy('totalviewcount', 'desc')->take(3)->get();
        $experts = Expert::All();
        return view('home')->with(['packets'=>$packets,'experts'=>$experts, 'lessonsnew'=>$lessonsnew, 'lessonspopular'=>$lessonspopular]);
    }
}
