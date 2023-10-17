<?php

namespace App\Providers;

use App\Repositories\Answer\AnswerRepository;
use App\Repositories\Answer\AnswerRepositoryInterface;
use App\Repositories\FormQuestion\FormQuestionRepository;
use App\Repositories\FormQuestion\FormQuestionRepositoryInterface;
use App\Repositories\Question\QuestionRepository;
use App\Repositories\Question\QuestionRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(FormQuestionRepositoryInterface::class , FormQuestionRepository::class);
        $this->app->bind(QuestionRepositoryInterface::class , QuestionRepository::class);
        $this->app->bind(AnswerRepositoryInterface::class, AnswerRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
