<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        // some logic
        /*
        $users = [
            [
                'name' => 'Alex',
                'age' => 30,
            ],
            [
                'name' => 'Dan',
                'age' => 25,
            ],
            [
                'name' => 'John',
                'age' => 17,
            ],
        ];

        return view(
            'dashboard',
            [
                'users' => $users,
            ]
        );
        */

        

        // dump($idea::all());

        return view('dashboard',[
            'ideas' => Idea::orderBy('created_at', 'DESC')->get(),
        ]);
    }
}
