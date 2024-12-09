<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function filter(Request $request)
    {
        // Get the query parameter from the request
        $query = $request->input('query');
        
        // Search for products by name or category
        $results = Product::where('name', 'LIKE', "%{$query}%")
            ->orWhere('category', 'LIKE', "%{$query}%")
            ->get();

        // Return the results as a JSON response
        return response()->json($results);
    }
}
