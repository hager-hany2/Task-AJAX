<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class questionsController extends Controller
{
    public function questions($id)
    {
        $question = Questions::where('category_id', $id)->get();
        return response()->json($question);
    }
}
