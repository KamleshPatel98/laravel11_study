<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Brand::select('id','name','status')->paginate(1);
        return view('brand', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:100|string|unique:brands'
        ]);
        try {
            Brand::create(['name'=>$request->name]);
            return back()->with('success','Brand added successfully!');
        } catch (\Exception $ex) {
            return back()->with('error',$ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        $records = Brand::select('id','name','status')->paginate(1);
        return view('brand', compact('records','brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    { 
        $request->validate([
            'name' => [
                'required','max:100','string',
                Rule::unique('brands')->ignore($brand->id) 
            ],
        ]);
        try {
            Brand::where('id',$brand->id)->update(['name'=>$request->name]);
            return to_route('brands.index')->with('success','Brand updated successfully!');
        } catch (\Exception $ex) {
            return back()->with('error',$ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        try {
            $brand->delete();
            return to_route('brands.index')->with('success','Brand deleted successfully!');
        } catch (\Exception $ex) {
            return back()->with('error',$ex->getMessage());
        }
    }
}
