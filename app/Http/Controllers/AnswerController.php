<?php

namespace App\Http\Controllers;

use App\Http\Requests\Answer\StoreAnswerRequest;
use App\Http\Requests\Answer\UpdateAnswerRequest;
use App\Http\Resources\AnswerResource;
use App\Models\Answer;
use App\Repositories\Answer\AnswerRepository;
use App\Services\AnswerService;
use Illuminate\Routing\Controller;

class AnswerController extends Controller
{
    protected AnswerService $answerService ;
    protected AnswerRepository $answerRepository;

    public function index()
    {
        $this->answerRepository->getAllAnswer();
    }

    public function create(StoreAnswerRequest $request)
    {
        $answer = $this->answerService->create($request);
        return new AnswerResource($answer);
    }

    public function update(UpdateAnswerRequest $request, Answer $answer)
    {
        $answer = $this->answerService->update($request, $answer);
        return new AnswerResource($answer);
    }

    public function destroy(Answer $answer)
    {
       return $this->answerService->destroy($answer);
    }
}
