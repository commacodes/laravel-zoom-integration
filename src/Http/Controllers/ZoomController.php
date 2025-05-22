<?php

namespace Commacode\ZoomIntegration\Http\Controllers;

use Illuminate\Http\Request;

class ZoomController extends Controller {
    public function showMeeting($id) {
        return view('zoom::meeting', compact('id'));
    }
}
