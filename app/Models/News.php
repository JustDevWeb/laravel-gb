<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = "news";

    public function getAll(): Collection {
    return DB::table($this->table)
        ->join('categories', 'categories.id' , '=', 'news.category_id')
        ->select('news.*','categories.title as categoryTitle')
        ->get();
    }

    public function getItemById($id): mixed {
    return DB::table($this->table)->find($id);
    }
}
