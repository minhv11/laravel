<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ChitietController extends Controller
{
    public function detail(string $id)
    {
        $detail = Product::findOrFail($id);
        // return view('chitiet', compact('detail'));
        return view('chitiet', compact('detail'));
    }
}
