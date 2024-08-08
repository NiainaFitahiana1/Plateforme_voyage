<?php

namespace App\Http\Controllers\Gestion;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PayementController extends Controller
{
    public function showpage($id){
        $article=Article::find("id");
        return view("article.payement", compact(
            "article",
        ));
    }
}
