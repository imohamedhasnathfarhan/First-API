<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class patient extends Controller
{
    //{}
    function getpatientdata()
    {
        return["Message"=>"Yeah it's patient data working"];
    }
}
