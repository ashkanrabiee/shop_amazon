<?php

namespace App\Http\Controllers\Admin\Market;

use Illuminate\Http\Request;
use App\Models\Market\Product;
use App\Models\Market\Guarantee;
use App\Http\Controllers\Controller;

class GuaranteeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product)
    {
        return view('admin.market.product.guarantee.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Product $product)
    {
        return view('admin.market.product.guarantee.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Product $product)
    {
        $validated = $request->validate([
                'name'              =>  'required',
                'price_increase'    =>  'required|numeric'
        ]);
        $inputs = $request->all();
        $inputs['product_id'] = $product->id;
        $guarantee = Guarantee::create($inputs);
        return redirect()->route('admin.market.guarantee.index', $product->id)->with('swal-success', 'گارانتی شما با موفقیت ثبت شد');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, Guarantee $guarantee)
    {
        $guarantee->delete();
        return back();
    }
}
