<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poin;
use App\Models\PenerimaPoin;

class PoinController extends Controller
{
    public function index($id_user = null)
    {
        if ($id_user) {
            $poinUser = PenerimaPoin::where('id_penerima', $id_user)
                ->with('poin')
                ->get();
        } else {
            // If $id_user is not provided, you might want to retrieve all records or handle it accordingly.
            $poinUser = PenerimaPoin::with('poin')->get();
        }

        // Adjust the view name to 'Point'
        return view('Point', compact('poinUser'));
    }
}
