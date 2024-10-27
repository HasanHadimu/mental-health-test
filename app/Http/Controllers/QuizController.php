<?php

namespace App\Http\Controllers;

use App\Models\QuizResponse;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function create()
{
    return view('quiz.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'question_1' => 'required|integer|between:0,3',
        'question_2' => 'required|integer|between:0,3',
        'question_3' => 'required|integer|between:0,3',
        'question_4' => 'required|integer|between:0,3',
        'question_5' => 'required|integer|between:0,3',
        'question_6' => 'required|integer|between:0,3',
        'question_7' => 'required|integer|between:0,3',
        'question_8' => 'required|integer|between:0,3',
    ]);

    $score = array_sum($validated);
    $interpretation = $this->interpretScore($score);

    QuizResponse::create(array_merge($validated, ['user_id' => auth()->id()]));

    return view('quiz.result', compact('score', 'interpretation'));
}

private function interpretScore($score)
{
    if ($score >= 0 && $score <= 4) return 'Tidak Ada Kecemasan';
    if ($score >= 5 && $score <= 9) return 'Kecemasan Ringan';
    if ($score >= 10 && $score <= 14) return 'Kecemasan Sedang';
    if ($score >= 15 && $score <= 19) return 'Kecemasan Berat';
    return 'Kecemasan Sangat Berat';
}

}
