<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Exercise extends Controller
{
    //
    public function index(): View {
        return view('generate-exercises');
    }

    public function store(Request $request) {
        $request->validate(
            [
                'addition' => 'required_without_all:subtraction,multiplication,division',
                'subtraction' => 'required_without_all:addition,multiplication,division',
                'multiplication' => 'required_without_all:addition,subtraction,division',
                'division' => 'required_without_all:addition,subtraction,multiplication',

                'min_number' => 'required|integer|lt:max_number',
                'max_number' => 'required|integer|gt:min_number',

                'quantity' => 'required|integer|gt:0'
            ],
            [
                'addition.required_without_all' => 'Please select at least one operation!',
                'subtraction.required_without_all' => 'Please select at least one operation!',
                'multiplication.required_without_all' => 'Please select at least one operation!',
                'division.required_without_all' => 'Please select at least one operation!',
                'min_number.required' => 'Please enter a minimum number!',
                'max_number.required' => 'Please enter a maximum number!',
                'min_number.integer' => 'Please enter an integer!',
                'max_number.integer' => 'Please enter an integer!',
                'min_number.lt' => 'Please enter a number less than the maximum number!',
                'max_number.gt' => 'Please enter a number greater than the minimum number!',
                'quantity.required' => 'Please enter a quantity!',
                'quantity.integer' => 'Please enter an integer!',
                'quantity.gt' => 'Please enter a number greater than 0!',
                
            ]
            );
        // dd($request->all());
    }
}
