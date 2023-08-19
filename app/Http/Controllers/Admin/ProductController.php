<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('admin.products.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $colors = Color::where('status', '0')->get();
        return view('admin.products.create', compact('categories', 'brands', 'colors'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'small_description' => 'required',
            'description' => 'required',
            'original_price' => 'required',
            'original_price' => 'nullable',
            'quantity' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category_id = $request->category_id;
        $name = $request->name;
        $slug = $request->slug;
        $brand = $request->brand;
        $small_description = $request->small_description;
        $description = $request->description;
        $original_price = $request->original_price;
        $selling_price = $request->has('selling_price') ? $request->selling_price : null; 
        $quantity = $request->quantity;
        $trending = $request->trending == true ? '1' : '0';
        $featured = $request->featured == true ? '1' : '0';
        $status = $request->status == true ? '1' : '0';
        $meta_title = $request->meta_title;
        $meta_keyword = $request->meta_keyword;
        $meta_description = $request->meta_description;

        $product = new Product;
        $product->category_id = $category_id;
        $product->name = $name;
        $product->slug = $slug;
        $product->brand = $brand;
        $product->small_description = $small_description;
        $product->description = $description;
        $product->original_price = $original_price;
        $product->selling_price = $selling_price;
        $product->quantity = $quantity;
        $product->trending = $trending;
        $product->featured = $featured;
        $product->status = $status;
        $product->meta_title = $meta_title;
        $product->meta_keyword = $meta_keyword;
        $product->meta_description = $meta_description;
        $product->save();

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/products/';
            $i = 1;
            foreach ($request->file('image') as $imageFile) {
                $extension = $imageFile->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $extension;
                $imageFile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath . $filename;

                $product->productImages()->create([
                    'product_id' => $product->id,
                    'image' => $finalImagePathName,
                ]);
            }
        }

        if ($request->colors) {
            foreach ($request->colors as $key => $color) {
                $product->productColors()->create([
                    'product_id' => $product->id,
                    'color_id' => $color,
                    'quantity' => $request->colorquantity[$key] ?? 0,
                ]);
            }
        }

        return redirect('admin/products')->with('message', "Mahsulot qo'shildi");
    }


    public function edit(int $product_id)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $product = Product::findOrFail($product_id);
        $product_color = $product->productColors->pluck('color_id')->toArray();
        $colors = Color::whereNotIn('id', $product_color)->get();
        return view('admin.products.edit', compact('categories', 'brands', 'product', 'colors'));
    }

    public function updat(ProductFormRequest $request, int $product_id)
    {
        $product = Product::findOrFail($product_id);
        $validatedData = $request->validated();

        $category = Category::findOrFail($validatedData['category_id']);

        $product->category_id = $validatedData['category_id'];
        $product->name = $validatedData['name'];
        $product->slug = Str::slug($validatedData['slug']);
        $product->brand = $validatedData['brand'];
        $product->small_description = $validatedData['small_description'];
        $product->description = $validatedData['description'];
        $product->original_price = $validatedData['original_price'];
        $product->selling_price = $validatedData['selling_price'] ?? 0;
        $product->quantity = $validatedData['quantity'];
        $product->trending = $request->trending == true ? '1' : '0';
        $product->featured = $request->featured == true ? '1' : '0';
        $product->status = $request->status == true ? '1' : '0';
        $product->meta_title = $validatedData['meta_title'];
        $product->meta_keyword = $validatedData['meta_keyword'];
        $product->meta_description = $validatedData['meta_description'];

        $product->save();

        // Update product colors
        $existingColors = $product->productColors->pluck('color_id')->toArray();
        $updatedColors = $request->colors ?? [];


        // Add/update colors
        if ($request->colors) {
            foreach ($request->colors as $key => $color) {
                $quantity = $request->colorquantity[$key] ?? 0;
                $productColor = $product->productColors()->where('color_id', $color)->first();
                if ($productColor) {
                    // Update existing color quantity
                    $productColor->quantity = $quantity;
                    $productColor->save();
                } else {
                    // Add new color
                    $product->productColors()->create([
                        'product_id' => $product->id,
                        'color_id' => $color,
                        'quantity' => $quantity,
                    ]);
                }
            }
        }

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/products/';
            $i = 1;
            foreach ($request->file('image') as $imageFile) {
                $extension = $imageFile->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $extension;
                $imageFile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath . $filename;

                $product->productImages()->create([
                    'product_id' => $product->id,
                    'image' => $finalImagePathName,
                ]);
            }
        }

        return redirect('/admin/products')->with('message', "Mahsulot ma'lumotlari o'zgartirildi");
    }



    public function destroyImage(int $product_image_id)
    {
        $productImage = ProductImage::findOrFail($product_image_id);
        if (File::exists($productImage->image)) {
            File::delete($productImage->image);
        }
        $productImage->delete();
        return redirect()->back()->with('message', "Mahsulot rasmi o'chirildi");
    }

    public function destroy(int $product_id)
    {
        $product = Product::findOrFail($product_id);

        // Delete related product images
        foreach ($product->productImages as $image) {
            if (File::exists($image->image)) {
                File::delete($image->image);
            }
            $image->delete();
        }

        // Delete product colors
        $product->productColors()->delete();

        $product->delete();

        return redirect()->back()->with('message', "Mahsulot o'chirildi");
    }

    public function updateProdColorQty(Request $request, $prod_color_id)
    {
        $productColorData = Product::findOrFail($request->product_id)
            ->productColors()->where('id', $prod_color_id)->first();
        $productColorData->update([
            'quantity' => $request->qty
        ]);
        return response()->json(['message' => "Mahsulot Rangining soni o'zgartirildi"]);
    }

    public function deleteProdColor($prod_color_id)
    {
        $prodColor = ProductColor::findOrFail($prod_color_id);
        $prodColor->delete();
        return response()->json(['message' => "Mahsulot rangi o'chirildi"]);
    }
}
