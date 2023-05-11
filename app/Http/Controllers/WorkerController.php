<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\StoreRequest;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();

        return view('worker.index', compact('workers'));

    }

    public function show(Worker $worker)
    {
      return view('worker.show', compact('worker'));
    }

//    index
//    show

//    create
//    store

//    edit
//    update

//    delete (destroy)


    public function create()
    {
        return view('worker.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);
        Worker::create($data);

        return redirect()->route('worker.index');
    }
    public function update()
    {
        $worker = Worker::find(3);

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
