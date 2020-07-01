<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Http\Resources\QuestionIndexResource;
use App\Http\Resources\QuestionShowResource;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        return QuestionIndexResource::collection(Question::orderBy('created_at', 'asc')->paginate(15));
    }

    public function show($id)
    {
        return new QuestionShowResource(Question::findOrFail($id));
    }

    public function create(QuestionRequest $request)
    {

    }
}
