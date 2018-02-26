<?php

namespace App\Http\Controllers\Home;

use App\Repositories\Eloquent\CategoryRepository;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }

    public function show($id)
    {

    }
}
