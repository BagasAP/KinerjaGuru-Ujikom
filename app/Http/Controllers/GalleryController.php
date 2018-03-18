<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function upload(Request $request)
    {
    	$extension = $request->file('file')->getClientOriginalExtension();
        $dir = 'uploads/images';
        $filename = time() . '_' . rand() . '.' . $extension;

        if (!empty($request->old_pic) and $request->old_pic !== '')
        {
            if(file_exists('uploads/images/'.$request->old_pic))
                unlink('uploads/images/'.$request->old_pic);
        }

         $request->file('file')->move($dir, $filename);

        return $filename;
        
    }

    public function remove($filename)
    {
    	if (file_exists(public_path('uploads/images/'.$filename)))
    		unlink(public_path('uploads/images/'.$filename));

    	return 'true';
    }

    public function uploadMultiple(Request $request)
    {

        $files = [];

        foreach ($request->file('file') as $file) {

            $extension = $file->getClientOriginalExtension();
            $dir = public_path('uploads/images/');
            $filename = time() . '_' . rand() . '.' . $extension;
            $file->move($dir, $filename);

            $files[] = $filename;

        }

        return $files;

    }
}
