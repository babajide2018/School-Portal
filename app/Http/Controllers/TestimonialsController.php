<?php


namespace App\Http\Controllers;


use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\TeachersGallery;


class TestimonialsController extends Controller
{


    /**
     * Listing Of images gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Testimonial::get();
        return view('testimonials-upload',compact('images'));
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
            'testimonial' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);


        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);


        $input['name'] = $request->name;
        $input['testimonial'] = $request->testimonial;
        Testimonial::create($input);

        return back()
            ->with('success','Testimonial has been added successfully.');
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::find($id)->delete();
        return back()
            ->with('success','Teacher record removed successfully.');
    }
}
