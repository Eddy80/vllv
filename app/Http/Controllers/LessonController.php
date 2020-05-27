<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Lessonvideo;
use App\Expert;
use Auth;

class LessonController extends Controller
{

    public static function lastindex()
    {
        $lessons = Lesson::orderBy('id', 'desc')->skip(0)->take(3)->get();
        $lessons->author = 'elshad';
        return  $lessons;
    }

    public static function index()
    {
        $lessons = Lesson::All();
        $user = Auth::user();
        //$expert = Expert::where('id', $lessonid->authorid)->get();
        return view('lessons', ['lessons'=>$lessons,  'currentuser'=>$user]);

        //return  $lessons;
    }

    public function lessonload($lessonid)
    {
        $lesson = Lesson::find($lessonid);
        $videos = Lessonvideo::where('lessonid', $lessonid)->get();
        $user = Auth::user();

        return view('lesson', ['lesson'=>$lesson, 'videos'=>$videos, 'currentuser'=>$user]);
    }
}
