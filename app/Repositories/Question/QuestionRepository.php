<?php

namespace App\Repositories\Question;

use App\Models\Question;

class QuestionRepository implements QuestionRepositoryInterface
{

    public function getAllQuestions()
    {
        return Question::with('FormQuestion')->get();
    }

    public function createQuestion($request)
    {
        return Question::create([
            'FormQuestion_id' => $request->FormQuestion_id,
            'title'           => $request->title,
            'type'            => $request->type,
        ]);
    }

    public function updateQuestion($request, $question)
    {
        $question->update([
            'title' => $request->title
        ]);

        return $question;
    }

    public function deleteQuestion($question)
    {
        return $question->delete();
    }

    public function getQuestionById($id)
    {
        Question::find($id);
    }
}
