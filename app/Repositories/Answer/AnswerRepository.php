<?php

namespace App\Repositories\Answer;

use App\Models\Answer;

class AnswerRepository implements AnswerRepositoryInterface
{

    public function getAllAnswer()
    {
        return Answer::with('Question')->get();
    }

    public function createAnswer($request)
    {
        return Answer::create([
            'question_id' => $request->question_id,
            'answer'      => $request->answer,
        ]);
    }

    public function updateAnswer($request, $answer)
    {
        $answer->update([
            'answer' => $answer->answer,
        ]);
        return $answer;
    }

    public function deleteAnswer($Answer)
    {
        return $Answer->delete();
    }

    public function getAnswerById($id)
    {
        return Answer::find($id);
    }
}
