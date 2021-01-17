<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.index')->with('images', auth()->user()->images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        if($request->type == 'private'){
            $image = Image::create([
                'user_id' => auth()->user()->id,
                'public' => false
            ]);
            $filenameToStore = $this->uploadImage($request->file('file'), $image->id, 'private');
            $image->image = $filenameToStore;
            $image->save();
        }else {
            $image = Image::create([
                'user_id' => auth()->user()->id,
                'public' => true
            ]);
            $filenameToStore = $this->uploadImage($request->file('file'), $image->id, 'public');
            $image->image = $filenameToStore;
            $image->save();

        }
        return response()->json($request->type == 'private');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //

        $images = Image::findOrFail($request->delete);

        foreach ($images as $image) {
                abort_if(auth()->user()->id !== $image->user->id, 403);
            if($image->public){
                Storage::delete('public/'.$image->image);
                $image->delete();
            }else{
                Storage::delete('private/'.$image->image);
                $image->delete();
            }
        }

        session()->flash('success', "Image(s) have been deleted successfully");
        return back();
    }

    public function createPublic(Request $request)
    {
        return view('dashboard.addImage')->with('type', 'public');
    }

    public function createPrivate(Request $request)
    {
        return view('dashboard.addImage')->with('type', 'private');
    }

    protected function uploadImage($image, $imageID, $path){

        $extension = $image->extension();
        $filenameToStore = md5($imageID) . '.' . $extension;
        $image->storeAs($path, $filenameToStore);
        return $filenameToStore;
    }

    public function getImage(Image $image)
    {
        if(auth()->user()->id !== $image->user->id){
            return null;
        }
        $storagePath = storage_path('app/private/' . $image->image);
        return response()->file($storagePath);
    }

    public function delete()
    {
        return view('dashboard.delete')->with('images', Image::paginate(30));
    }


}
