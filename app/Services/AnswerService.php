<?php

namespace App\Services;

use App\Repositories\Answer\AnswerRepository;
use App\Repositories\Answer\AnswerRepositoryInterface;

class AnswerService
{
    public function __construct(private AnswerRepository $answerRepository)
    {
        app()->make(AnswerRepositoryInterface::class);
    }

    public function create($request)
    {
        $this->answerRepository->createAnswer($request);
    }

    public function update($request,$answer)
    {
        $this->answerRepository->updateAnswer($request,$answer);
    }

    public function destroy()
    {

    }
}
