<?php

namespace App\Http\Controllers;


class CheckinController extends Controller
{
    public function index($name, $rev)
    {
        return [$name, $rev];
    }
}
