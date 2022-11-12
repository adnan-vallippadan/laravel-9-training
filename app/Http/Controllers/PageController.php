<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function testController() {
        return "Test Data";
    }

    public function addNumbers($a, $b) {
        return $a + $b;
    }

    public function contact() {
        return view('pages.contact');
    }

    public function hello($name) {
        return view('pages.hello', [
            'name' => $name
        ]);
    }
}
