<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name, $slug, $status, $brand_id, $category_id;
    public $showModal = false;

    protected $rules = [
        'name' => 'required|string',
        'slug' => 'required|string',
        'status' => 'nullable',
        'category_id' => 'required|exists:categories,id',
    ];

    public function resetInput()
    {
        $this->name = null;
        $this->slug = null;
        $this->status = null;
        $this->brand_id = null;
        $this->category_id = null;
    }

    public function createBrand()
    {
        $this->validate();

        Brand::create([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'status' => $this->status == true ? '1' : '0',
            'category_id' => $this->category_id,
        ]);

        session()->flash('success', "Brand qo'shildi");
        $this->resetInput();
    }

    public function editBrand($brandId)
    {
        $brand = Brand::findOrFail($brandId);
        $this->brand_id = $brand->id;
        $this->name = $brand->name;
        $this->slug = $brand->slug;
        $this->status = $brand->status;
        $this->category_id = $brand->category_id;
        $this->showModal = true;
    }

    public function updateBrand()
    {
        $this->validate();

        $brand = Brand::findOrFail($this->brand_id);
        $brand->update([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'status' => $this->status == true ? '1' : '0',
            'category_id' => $this->category_id,
        ]);

        session()->flash('success', "Brand o'zgartirildi");
        $this->resetInput();
        $this->showModal = false;
    }

    public function render()
    {
        $brands = Brand::with('category')->paginate(10);
        $categories = Category::all();

        return view('livewire.admin.brand.index', compact('brands', 'categories'));
    }
}
