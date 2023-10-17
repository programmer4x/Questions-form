<?php

namespace App\Http\Controllers;

use App\Http\Requests\Question\StoreQuestionRequest;
use App\Http\Requests\Question\UpdateQuestionRequest;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use App\Repositories\Question\QuestionRepositoryInterface;
use App\Services\QuestionService;
use Illuminate\Routing\Controller;

class QuestionController extends Controller
{
    protected QuestionService $questionService;
    protected QuestionRepositoryInterface $questionRepository;


    public function __construct(QuestionRepositoryInterface $questionRepository, QuestionService $questionService)
    {
        $this->questionService    = $questionService;
        $this->questionRepository = $questionRepository;
    }
    public function index()
    {
        return $this->questionRepository->getAllQuestions();
    }

    public function store(StoreQuestionRequest $request)
    {
        $Question = $this->questionService->create($request);
        return new QuestionResource($Question);
    }

    public function update(UpdateQuestionRequest $request, Question $question)
    {
        $this->questionService->update($request,$question);
        return new QuestionResource($question);
    }

    public function destroy(Question $question)
    {
        return $this->questionService->destroy($question);
    }
}
