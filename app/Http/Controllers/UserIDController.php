<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewFile;

class UserIDController extends Controller
{

    public function generateID(Request $request)
    {
        //$UserID= $request->input('filenames');
        return md5(uniqid(rand(), true));
    }
}