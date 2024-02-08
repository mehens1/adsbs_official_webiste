<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationsController extends Controller
{
    //
    public function index()
    {
        $publications = Publication::all();
        
        $data = [
            'page_title' => 'Publications',
            'page_class' => 'publication',
            'publications' => $publications
        ];
        return view('publication', $data);
    }
    
    public function addTagToPublication($publicationId, Array $tags)
    {
        $publication = Publication::find($publicationId);

        // Add tags to publication
        $publication->tags()->sync([1,3,5]);

        // Get all tags for publication
        $publication->tags();
    }

    public function subpage($page)
    {
        $pub = Publication::where('title', $page)->first();
        $publications = Publication::all();

        $data = [
            'page_title' => $page,
            'page_class' => 'publication',
            'publications' => $publications,
            'pub' => $pub,
            'author' => $pub->user
        ];

        return view('pub', $data);
    }
}
