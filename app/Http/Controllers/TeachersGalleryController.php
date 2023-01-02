<?php

namespace App\Http\Controllers;

use App\Models\TeacherGallery;
use Illuminate\Http\Request;

class TeachersGalleryController extends Controller
{
    //



    /**
     * Listing Of images gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = TeacherGallery::get();
        return view('teacher-image-gallery',compact('images'));
    }


    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'subject' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ]);

        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);

        $input['name'] = $request->name;
        $input['subject'] = $request->subject;
        TeacherGallery::create($input);

        return back()
            ->with('success','Teacher record Uploaded successfully.');
    }

    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TeacherGallery::find($id)->delete();
        return back()
            ->with('success','Teacher record removed successfully.');
    }

}
