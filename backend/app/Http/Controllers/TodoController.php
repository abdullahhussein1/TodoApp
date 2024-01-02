<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('id')->get();
        return response()->json($todos);
    }

    public function show($id)
    {
        $todo = Todo::findOrFail($id);
        return response()->json($todo);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $data = $validator->validated();
        $newTodo = Todo::create($data);

        return response()->json($newTodo, 201);
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'string',
            'note' => 'nullable|string',
            'completed' => 'boolean',
            'pinned' => 'boolean',
            'remind_date' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $data = $validator->validated();
        $todo->update($data);

        return response()->json([
            'msg' => 'Todo updated',
            'result' => $todo,
        ]);
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return response()->json($todo);
    }
}
