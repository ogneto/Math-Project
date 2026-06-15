<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ExerciseController extends Controller
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

                'min_number' => 'required|integer|lt:max_number|gt:0',
                'max_number' => 'required|integer|gt:min_number|gt:0',

                'quantity' => 'required|integer|gt:0|lt:51'
            ],
            [
                'addition.required_without_all' => 'Please select at least one operation!',
                'subtraction.required_without_all' => 'Please select at least one operation!',
                'multiplication.required_without_all' => 'Please select at least one operation!',
                'division.required_without_all' => 'Please select at least one operation!',
                'min_number.required' => 'Please enter a minimum number!',
                'max_number.required' => 'Please enter a maximum number!',
                'min_number.integer' => 'Please enter a minimum number as an integer!',
                'max_number.integer' => 'Please enter a maximum number as an integer!',
                'min_number.lt' => 'Please enter a minimum number less than the maximum number!',
                'max_number.gt' => 'Please enter a maximum number greater than the minimum number!',
                'quantity.required' => 'Please enter a quantity!',
                'quantity.integer' => 'Please enter a quantity as an integer!',
                'quantity.gt' => 'Please enter a quantity greater than 0!',
                'min_number.gt' => 'Please enter a minimum number greater than 0 or positive!',
                'quantity.lt' => 'The maximum number of exercises is 50.',
            ]
            );

        $operations= [];
        $operations = $this->getOperations($request);
        $minValue = $request->min_number;
        $maxValue = $request->max_number;
        $quantity = $request->quantity;
        
        $exercises = [];
        $exercises = $this->generateExercises($operations, $minValue, $maxValue, $quantity);

        dd($exercises);

    }




    private function getOperations(Request $request) {
        $operations = [];
        if($request->has('addition')) {
            $operations[] = '+';
        }
        if($request->has('subtraction')) {
            $operations[] = '-';
        }
        if($request->has('multiplication')) {
            $operations[] = '*';
        }
        if($request->has('division')) {
            $operations[] = '/';
        }

        return $operations;
    } 

    private function generateExercises(array $operations, int $minValue, int $maxValue, int $quantity) {
        $exercises = [];
        for ($i=0; $i < $quantity ; $i++) { 
            $operation = $operations[array_rand($operations)];
            $n1 = rand($minValue, $maxValue);
            $n2 = rand($minValue, $maxValue);

            switch ($operation) {
                case '+':
                    $exercise = "$n1 + $n2";
                    $sollution = $n1 + $n2;
                    break;
                case '-':
                    $exercise = "$n1 - $n2";
                    $sollution = $n1 - $n2;
                    break;
                case '*':
                    $exercise = "$n1 x $n2";
                    $sollution = $n1 * $n2;
                    break;
                case '/':
                    while ($n2 == 0) {$n2 = rand($minValue, $maxValue);}
                    $exercise = "$n1 ÷ $n2";
                    $sollution = $n1 / $n2;  
                    break;
                default:
                    $exercise = "There was a mistake";
                    $sollution = 0;  
                    break;
            }

            $exercises[] = [
                'number' => $i,
                'exercise' => $exercise,
                'sollution' => $sollution,
            ];
        }
        return $exercises;
    }
}
