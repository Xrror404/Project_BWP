<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use App\Models\Announcement;
use App\Models\FilePenting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('success', 'Logout successful');
    }
    public function RedirectTo(Request $request)
    {
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
