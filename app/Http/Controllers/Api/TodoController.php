<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response as Response;

class TodoController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $user = auth()->user();
        $todos = Todo::with('user')
            ->where('user_id', $user->id)
            ->get();

        return $this->apiSuccess($todos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TodoRequest $request): JsonResponse
    {
        $request->validated();

        $user = auth()->user();
        $todo = new Todo($request->all());
        $todo->user()->associate($user);
        $todo->save();

        return $this->apiSuccess($todo->load('user'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo): JsonResponse
    {
        return $this->apiSuccess($todo->load('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TodoRequest $request, Todo $todo): JsonResponse
    {
        $request->validated();
        $todo->todo = $request->todo;
        $todo->label = $request->label;
        $todo->done = $request->done;
        $todo->save();

        return $this->apiSuccess($todo->load('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo): JsonResponse
    {
        if (auth()->user()->id == $todo->user_id) {
            $todo->delete();
            return $this->apiSuccess($todo);
        }

        return $this->apiError(
            'Unauthorized',
            Response::HTTP_UNAUTHORIZED
        );
    }
}
