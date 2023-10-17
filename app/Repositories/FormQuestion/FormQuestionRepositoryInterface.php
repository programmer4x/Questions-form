<?php

namespace App\Repositories\FormQuestion;
use Illuminate\Http\Request;
interface FormQuestionRepositoryInterface
{
    public function getAllForm();

    public function createForm(Request $request);

    public function updateForm($id, Request $reauest);

    public function deleteForm($id);

    public function getFormById($id);
}
