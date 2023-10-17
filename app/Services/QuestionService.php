<?php

namespace App\Services;

use App\Repositories\Question\QuestionRepository;
use App\Repositories\Question\QuestionRepositoryInterface;

class QuestionService
{

    public function __construct(private QuestionRepository $questionRepository)
    {
        app()->make(QuestionRepositoryInterface::class);
    }

    public function create($request)
    {
        $this->questionRepository->createQuestion($request);
    }

    public function update($request,$question)
    {
        $this->questionRepository->updateQuestion($request,$question);
    }

    public function destroy($question)
    {
        $this->questionRepository->deleteQuestion($question);
    }
}
