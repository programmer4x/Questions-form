<?php

namespace App\Http\Controllers;

use App\Http\Requests\Form_Question\StoreFormQuestionRequest;
use App\Http\Requests\Form_Question\UpdateFormQuestionRequest;
use App\Http\Resources\FormQuestionResource;
use App\Models\FormQuestion;
use App\Repositories\FormQuestion\FormQuestionRepositoryInterface;
use App\Services\FormQuestionService ;
use Illuminate\Routing\Controller;

class FormQuestionController extends Controller
{


    public function __construct(private FormQuestionRepositoryInterface $formQuestionRepository, private FormQuestionService $formQuestionService)
    {
    }

    public function index()
    {
        return $this->formQuestionRepository->getAllForm();
    }

    public function store(StoreFormQuestionRequest $request)
    {
        $Form = $this->formQuestionService->create($request);
        return new FormQuestionResource($Form);
    }

    public function update(int $id , UpdateFormQuestionRequest $request)
    {
        $formQuestion = FormQuestion::find($id);
        $form = $this->formQuestionService->update($formQuestion, $request);
        return new FormQuestionResource($form);
//        return $Form;
    }

    public function destroy(int $id)
    {
        return $this->formQuestionRepository->deleteForm($id);
    }
}
