<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        // Get company photos from public/images/company
        $companyImages = [];
        $companyPath = public_path('images/company');
        
        if (File::exists($companyPath)) {
            $files = File::files($companyPath);
            foreach ($files as $file) {
                if (in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                    $companyImages[] = 'images/company/' . $file->getFilename();
                }
            }
        }

        return view('home', compact('companyImages'));
    }

    public function history()
    {
        return view('history');
    }

    public function location()
    {
        return view('location');
    }
}
