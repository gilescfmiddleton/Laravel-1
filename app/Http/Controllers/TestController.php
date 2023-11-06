<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
 
function showAboutPage(Request $request)

{
    dd($request->name);
    return "Hello";
}

function showAboutDetails($name)
{
$person = [
    "name" => $name,
    "email" => "giles@example.com"
];

return response ()->json($person);

}

}
