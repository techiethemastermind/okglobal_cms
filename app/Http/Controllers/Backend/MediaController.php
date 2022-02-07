<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Traits\FileUploadTrait;

class MediaController extends Controller
{
    use FileUploadTrait;

    /**
     * File Upload
     */
    public function uploadFile(Request $request)
    {
        $image = $request->file('fileImage');
        $image_url = $this->saveImage($image, 'upload');

        return response()->json([
            'success' => true,
            'url' => $image_url
        ]);
    }
}
