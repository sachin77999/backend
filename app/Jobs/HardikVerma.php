<?php

namespace App\Jobs;
use App\Models\QuizData;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class HardikVerma implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $quizData;
    public function __construct(array $quizdata)
    {
        $this->quizData=$quizdata;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $quiz=new QuizData;
$quiz->category=$this->quizData['category'];
$quiz->question=$this->quizData['question'];
$quiz->correctOption=$this->quizData['correctOption'];
$quiz->save();

    }
}
