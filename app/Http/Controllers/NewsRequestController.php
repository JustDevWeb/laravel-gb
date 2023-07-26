<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class NewsRequestController extends Controller
{
    public function index(): View {
        return view('news.request');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required','phone'=>'required','email' => 'required','description' => 'required']);
        $formDataJson = $request->all();
        $formData = json_encode([$formDataJson]);

        if(!Storage::disk('local')->exists('orders/main-orders.json')){
            Storage::put('orders/main-orders.json', $formData);
        }else {
            $fileData = Storage::json('orders/main-orders.json');
            $fileData[] = $formDataJson;

            Storage::put('orders/main-orders.json', json_encode($fileData));
        }

        return response()->json(Storage::json('orders/main-orders.json'));

    }
}
