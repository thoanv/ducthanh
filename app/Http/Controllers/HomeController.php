<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository as CategoryRepo;
use App\Repositories\PostRepository as PostRepo;
use App\Repositories\SlideRepository as SlideRepo;
use Illuminate\Http\Request;
use App\Repositories\ProductRepository as ProductRepo;
use App\Repositories\AboutURepository as AboutURepo;
use App\Models\Category;

class HomeController extends Controller
{
    protected $slideRepo;
    protected $categoryRepo;
    protected $postRepo;
    protected $productRepo;
    protected $aboutURepo;

    public function __construct(AboutURepo $aboutURepo,ProductRepo $productRepo, SlideRepo $slideRepo, CategoryRepo $categoryRepo, PostRepo $postRepo)
    {
        $this->slideRepo = $slideRepo;
        $this->categoryRepo = $categoryRepo;
        $this->postRepo = $postRepo;
        $this->productRepo = $productRepo;
        $this->aboutURepo = $aboutURepo;
    }
    public function index()
    {
        $slides = $this->slideRepo->getByStatus(true);
        $categories = $this->categoryRepo->getCategoriesFeatured();
        $about = $this->aboutURepo->find(1);
        foreach ($categories as $key =>  $category){
            $child_categories = $this->categoryRepo->getListChildCategoriesById($category['id']);
            $categories[$key]['child_categories'] = $child_categories;
            $categories[$key]['all_products'] = $category->products->merge($category->subproducts);
        }
        return view('home',[
            'slides' => $slides,
            'categories' => $categories,
            'about'  => $about
        ]);
    }
}
