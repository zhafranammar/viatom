<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\QuestionExam;
use Symfony\Component\Console\Question\Question;

class ExamController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $exam = Exam::where('user_id', $user_id)->orderBy('score', 'desc')->first();
        return view('exam.index', compact('exam'));
    }

    public function history()
    {
        $user_id = auth()->user()->id;
        $exams = Exam::where('user_id', $user_id)->get();
        return view('exam.history', compact('exams'));
    }

    public function result()
    {
        return view('exam.result', compact('exam'));
    }

    public function start()
    {
        $exam = Exam::create([
            'user_id' => auth()->user()->id,
            'number_of_questions' => 1,
            'score' => 0,
            'start_time' => now(),
        ]);
        $question = QuestionExam::first();
        return view('exam.question', compact('exam', 'question'));
    }

    public function nextQuestion(Request $request)
    {
        $exam = Exam::where('user_id', auth()->user()->id)->latest()->first();
        $question = QuestionExam::where('id', $exam->number_of_questions)->first();
        $exam->number_of_questions += 1;

        if ($request->answer == $question->option_true) {
            $exam->score += 1;
        }

        $exam->save();
        if ($exam->number_of_questions > QuestionExam::count()) {
            $exam->finish_time = now();
            $exam->save();
            return redirect()->route('exams.result', $exam);
        } else {
            $question = QuestionExam::where('id', $exam->number_of_questions)->first();
            return view('exam.question', compact('exam', 'question'));
        }
    }
}
