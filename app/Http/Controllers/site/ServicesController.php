<?php

namespace App\Http\Controllers\site;

use App\Models\Services;

class ServicesController
{
    public function services(){
        $services = Services::orderBy('seq', 'ASC')->get();
        return view('site.services', compact('services'));
    }
}
