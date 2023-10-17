<?php

namespace App\Repositories\Question;

interface QuestionRepositoryInterface
{
    public function getAllQuestions();

    public function createQuestion($request);
    public function updateQuestion($request, $question);
    public function deleteQuestion($question);
    public function getQuestionById($id);
}
