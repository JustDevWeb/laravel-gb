<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getNews(int $id = null) {
        $quantityNews = 5;
        $news = [];

        if($id != null) {
            return [
                "id" => $id,
                "category" => "news",
                "title" => fake()->jobTitle(),
                "author" => fake()->name(),
                "image" => fake()->imageUrl(),
                "status" => "ACTIVE",
                "description" => fake()->text(100),
                "created_at" => now()->format("d-m-Y H:i")
            ];
        }

        $categories = $this->getCategories();
        for($i=0 ; $i < count($categories); $i++){
        for($j=0; $j < $quantityNews; $j++) {
            $news[] = [
                "id" => $j === 0 ? ++$j : $j,
                "category"=> $categories[$i],
                "title" => fake()->jobTitle(),
                "author" => fake()->name(),
                "image" => fake()->imageUrl(),
                "status" => "ACTIVE",
                "description" => fake()->text(100),
                "created_at" => now()->format("d-m-Y H:i")
            ];
        }

        }

        return $news;

    }

    public function getCategories (){
        $categories = ["news","sport","movies","politics","socials"];

        return $categories;
    }

    public function getNewsByCategory (string $category): Array{

        $filteredByCategory = array_filter($this->getNews(),function ($news) use (&$category){
            return ($news["category"] == $category);
        });

        return $filteredByCategory;
    }

}
