<?php

namespace App\Http\Controllers\API;

use App\Models\Basic;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Basic as BasicResource;

class BasicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basics=Basic::all();

        return BasicResource::collection($basics);
    }

   
    public function show($category)
    {
        $categorymodel=Category::where('category_english','LIKE',$category)->first();
        $category_id=$categorymodel->id;
        //$basics = Basic::where('category_id',$category_id)->paginate(3);
        $basics = Basic::where('category_id',$category_id)->get();
      
        if($basics!=null)
        return BasicResource::collection($basics);
        else return null;
    }

}
