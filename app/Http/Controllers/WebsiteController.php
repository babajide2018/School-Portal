<?php

namespace App\Http\Controllers;


use App\Models\Event;
use App\Models\ImageGallery;
use App\Models\TeacherGallery;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //

    public function index()
    {


        /*$images = ImageGallery::take(6)->get();*/
        $teacher_details_div_one = TeacherGallery::where('id', '<=', '10')->get();
        $teacher_details_div_two = TeacherGallery::where('id', '>', '10')->get();
        $images = ImageGallery::where('id', '<', '8')->get();

        $events = Event::latest('id')->take(5)->get();
        return view('welcome', ([
            'teacher_details_div_one' => $teacher_details_div_one,
            'teacher_details_div_two' => $teacher_details_div_two,
            'images' => $images,
            'events' => $events,
        ]));

    }

    public function about(){

        $teachers = TeacherGallery::all();
        $events = Event::latest('id')->take(5)->get();
        return view('about', ([
            'teachers' => $teachers,
             'events' => $events,
        ]));
    }

    public function gallery(){

        $images = ImageGallery::all();
        $events = Event::latest('id')->take(5)->get();
        return view('gallery', ([
            "images" => $images,
            'events' => $events,
        ]));
    }



    public function teachers(){

        $teachers = TeacherGallery::all();
        $events = Event::latest('id')->take(5)->get();
        return view('teachers', ([
            'teachers' => $teachers,
            'events' => $events,
        ]));
    }

    public function testimonials(){

        $testimonials = Testimonial::all();
        $events = Event::latest('id')->take(5)->get();
        return view('testimonials', ([
            "testimonials" => $testimonials,
            'events' => $events,
        ]));
    }

    public function contact(){

        $events = Event::latest('id')->take(5)->get();
        return view('contact', ([
            'events' => $events
        ]));
    }


}
