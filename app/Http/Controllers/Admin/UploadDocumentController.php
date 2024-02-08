<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UploadDocumentController extends Controller
{
    //
    public function uploadDocument(Request $request){
        // Get file
        $file = $request->file('file');

        // Get file name
        $fileName = $file->getClientOriginalName();

        // Get storage path
        $filePath = '/uploads/documents/' . $fileName;

        return Storage::disk('public')->put($filePath, File::get($file));

        return true;
    }
}
