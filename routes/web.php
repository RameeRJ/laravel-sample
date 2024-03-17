<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function (Illuminate\Http\Request $request) {
    // Your POST request handling logic here
    $name = $request->input('name');
    $age = $request->input('age');
    $city = $request->input('city');

    // Outputting submitted data in a centered table format
    $output = "<div style='text-align: center;'>";
    $output .= "<h2 style='color: #ff0000;'>Submitted Data:</h2>";
    $output .= "<div style='position: relative;'>";
    $output .= "<table style='width: 60%; margin: 0 auto; border-collapse: collapse;'>";
    $output .= "<tr><td style='color: #333; padding: 10px;'><strong>Name:</strong></td><td style='padding: 10px;'>$name</td></tr>";
    $output .= "<tr><td style='color: #333; padding: 10px;'><strong>Age:</strong></td><td style='padding: 10px;'>$age</td></tr>";
    $output .= "<tr><td style='color: #333; padding: 10px;'><strong>City:</strong></td><td style='padding: 10px;'>$city</td></tr>";
    $output .= "</table>";
    $output .= "<div style='position: absolute; top: 100%; left: 0; width: 100%; background-image: url(\"/download\"); background-size: cover; height:450px;'></div>";
    $output .= "</div>";
    $output .= "</div>";

    return $output;
});




