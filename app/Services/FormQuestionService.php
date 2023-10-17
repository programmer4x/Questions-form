<?php

namespace App\Services;

use App\Repositories\FormQuestion\FormQuestionRepositoryInterface;
use Illuminate\Http\Request;

class FormQuestionService
{
    public function __construct(private FormQuestionRepositoryInterface $formQuestionRepository)
    {
        app()->make(FormQuestionRepositoryInterface::class);
    }

    public function create($request)
    {
        return $this->formQuestionRepository->createForm($request);
    }

    public function update(int $id, Request $request)
    {
        return $this->formQuestionRepository->updateForm($id,$request);
    }

    public function destroy(int $id)
    {
        return $this->formQuestionRepository->deleteForm($id);
    }

}
