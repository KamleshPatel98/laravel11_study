<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplement;

class SupplementController extends Controller
{
    public function index() {
        return view('supplement');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'quantity' => 'required|integer',
        ]);

        $supplement = Supplement::create($validated);
        return response()->json(['status' => 'success', 'data' => $supplement]);
    }
}
