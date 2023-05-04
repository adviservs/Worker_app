<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        foreach ($workers as $worker) {
            dump($worker->name);
        }

//        $workers = Worker::first();
//        $worker->new_attr = 'new attr'; // add a new attribute
//        dd($worker);

//        $workers = Worker::all();
//        dd($workers);
    }

    public function show()
    {
        $worker = Worker::all();
        dd($worker->toArray());
//        $worker = Worker::find(2);
//        dd($worker);
    }

    public function create()
    {
        $worker = [
            'name' => 'Mark',
            'surname' => 'Markov',
            'email' => 'Markov@mail.ru',
            'age' => 20,
            'description' => 'I am Mark',
            'is_married' => false,
        ];

        Worker::create($worker);

        return 'Mark was created';
    }

    public function update()
    {
        $worker = Worker::find(2);

//        $worker->name = 'New Name';
//        $worker->save();

        $worker->update([
            'name' => 'Karl',
            'surname' => 'Petrov',
            'email' => 'Petrov@mail.ru',
            'age' => 28,
            'description' => 'I am Karl',
            'is_married' => 1,
        ]);

        return 'Change name and surname';
    }

    public function delete()
    {
        $worker = Worker::find(2);
        $worker->delete();
        return 'One worker was deleted';
    }
}
