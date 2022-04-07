<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $part2 = json_decode(file_get_contents(storage_path() . "/part2.json"), true);
        echo "<pre>";
        // print_r($part2);
        // $split = part2::paginate(10);
        foreach ($part2 as $key => $value) {
            print_r($part2);
        }
    }
}
