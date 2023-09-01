<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function hello(Request $request): string
    {

        $name = $request->input('name');

        return "Hello $name";
    }

    public function nestedInput(Request $request): string
    {
        $name = $request->input('name.first');
        return "Hello $name from nested input";
    }

    public function getAllInput(Request $request): string
    {
        $input = $request->input();

        return json_encode($input);
    }

    public function getAllInputWhereName(Request $request): string
    {
        $input = $request->input('products.*.name');
        return json_encode($input);
    }

    public function getQueryParam(Request $request): string
    {
        $input = $request->query('price');
        return "Harga Product : $input";
    }

    public function getAllQueryParam(Request $request): string
    {
        $input = $request->query();
        return json_encode($input);
    }
}