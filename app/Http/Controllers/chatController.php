<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Http\CEOResource;

class chatController extends Controller
{
    public function index()
    {
        $base = Message::all();
        return response([ 'base' => BaseResource::collection($base), 'message' => 'Retrieved successfully'], 200);
    }
}
