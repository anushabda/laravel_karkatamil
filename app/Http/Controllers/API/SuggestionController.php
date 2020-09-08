<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Suggestion as SuggestionResource;

class SuggestionController extends Controller
{
    public function index()
    {
        $suggestions=Category::inRandomOrder()->limit(3)->get();
       // $suggestions=Category::where('category_english','Letters')->get();

        return SuggestionResource::collection($suggestions);
    }
}
