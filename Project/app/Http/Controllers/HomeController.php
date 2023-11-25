<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use App\Models\Announcement;
use App\Models\FilePenting;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{


    public function index(Request $request)
    {
        // Fetch announcements using Eloquent model
        $announcements = $this->getAnnouncements();
        $ImportantFile=$this->getImportantFile();
        return response()->view('home', [
            'announcements' => $announcements,
            'ImportantFile'=>$ImportantFile
        ]);
    }
    public function getAnnouncements()
    {
        $announcements = Announcement::paginate(10); 
        return $announcements;
    }
    public function getImportantFile()
    {
        $ImportantFile = FilePenting::paginate(10); 

        return $ImportantFile;
    }
}
