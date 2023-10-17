<?php

namespace App\Repositories\Answer;

interface AnswerRepositoryInterface
{
    public function getAllAnswer();
    public function createAnswer($request);
    public function updateAnswer($request, $answer);
    public function deleteAnswer($Answer);
    public function getAnswerById($id);
}
