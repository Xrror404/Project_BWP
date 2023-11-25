<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use App\Models\Announcement;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{


    public function index(Request $request)
    {
        // Fetch announcements using Eloquent model
        $announcements = $this->getAnnouncements();
        return response()->view('home', [
            'announcements' => $announcements,
        ]);
    }
    public function getAnnouncements()
    {
        $announcements = Announcement::paginate(10); // Fetch 10 records per page

        return $announcements;
    }
}
