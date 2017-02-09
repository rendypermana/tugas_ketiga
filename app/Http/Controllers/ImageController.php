<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Image;
use Validator;

class ImageController extends Controller {

   public function index()
   {
      $images = Image::paginate(10);
      return view('images-list')->with('images', $images);
   }

   public function create()
   {
      return view('add-new-image');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store(Request $request)
   {
      // Validation //
        $validation = Validator::make($request->all(), [
            'title'     => 'required',
            'gambar'     => 'required|image|mimes:jpeg,png|min:1|max:5000'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );
        }

        // Process valid data & go to success page //
        $image = new Image;

        $file = $request->file('gambar');
        $destination_path = public_path('image_uploads/');
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destination_path, $filename);
        
        $image->image = $filename;
        $image->title = $request->input('title');;
        $image->save();

        return redirect('/image')->with('message','You just uploaded an image!');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id_image)
   {
      $image = Image::find($id_image);
      return view('image-detail')->with('image', $image);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id_image)
   {
      $image = Image::find($id_image);
      return view('edit-image')->with('image', $image);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update(Request $request, $id_image)
   {
      // Validation //
        $validation = \Validator::make($request->all(), [
            'title' => 'required',
            'gambar'    => 'sometimes|image|mimes:jpeg,png|min:1|max:5000'
        ]);

        // Check if it fails //
        if( $validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );
        }

        // Process valid data & go to success page //
        $image = Image::find($id_image);

         if( $request->hasFile('gambar') ){
           $file = $request->file('gambar');
           $destination_path = public_path('image_uploads/');
           $filename = str_random(6).'_'.$file->getClientOriginalName();
           $file->move($destination_path, $filename);
           $image->file = $destination_path . $filename;
           $image->image = $filename;
           $image->save();
          }
        
        $image->title = $request->input('title');
        $image->save();

        return redirect('/image')->with('message','You just updated an image!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
      $image = Image::find($id);
      $image->delete();
      return redirect('/image')->with('message','You just deleted an image!');
   }

}
