<?php
// waranyoo pomelofashion / challenges 2022


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $data = json_decode(file_get_contents(storage_path() . "/Appendix1.json"), true);

        echo "<pre>";
        // print_r($data); GET Data from json file
        // echo "-------------------------------------------------------" . "<br>";
        $level_0 = $data[0];  // level 0
        $level_1 = $data[1];  // level 1
        $level_2 = $data[2];  // level 2


        /// move json object level 2 into level 1
        foreach ($level_1 as $item => $val) {
            if ($level_1[$item]["id"] == 12) {
                array_push($level_1[$item]["children"], $level_2[0], $level_2[1]);
            } else if ($level_1[$item]["id"] == 13) {
                array_push($level_1[$item]["children"], $level_2[2]);
            }
        }
        //print_r($level_1);


        /// move json object level 1 into level 0

        foreach ($level_0 as $key => $value) {
            array_push($level_0[$key]["children"], $level_1);
            print_r($level_0);
        }
    }
}
