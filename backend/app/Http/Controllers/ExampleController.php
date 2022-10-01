<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getPokemonExample()
    {
        $data = [
            ['id'=>1,'name'=>'Bulbasaur'],
            ['id'=>2,'name'=>'Ivysaur'],
            ['id'=>3,'name'=>'Venusaur'],
            ['id'=>4,'name'=>'Squirtle'],
            ['id'=>5,'name'=>'Wartortle'],
            ['id'=>6,'name'=>'Blastoise'],
            ['id'=>7,'name'=>'Charmander'],
            ['id'=>8,'name'=>'Charmeleon'],
            ['id'=>9,'name'=>'Charizard'],
        ];

        return response()->json([
            'success' => true,
            'message' =>'List Contoh Pokemon',
            'data'    => $data
        ], 200);
    }
}
