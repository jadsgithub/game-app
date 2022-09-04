<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public static function decodeDate($date)
    {
        if ($date) {
            return date('d/m/Y', strtotime($date));
        } else {
            return '';
        }
    }
}
