<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public $products, $category, $brandInputs = [], $priceInput;

    protected $queryString = [
        'brandInputs' => ['except' => '', 'as' => 'brand'],
        'priceInput' => ['except' => '', 'as' => 'price'],
    ];

    public function mount($category)
    {
        $this->category = $category;
    }

    public function render()
    {
        $this->products = $this->getFilteredProducts();

        $categoryBrands = $this->getCategoryBrands();

        return view('livewire.frontend.product.index', [
            'products' => $this->products,
            'category' => $this->category,
            'categoryBrands' => $categoryBrands,
        ]);
    }

    public function getFilteredProducts()
    {
        $query = Product::where('category_id', $this->category->id)
            ->where('status', '0');

        if (!empty($this->brandInputs)) {
            $query->whereIn('brand', $this->brandInputs);
        }

        if ($this->priceInput === 'high-to-low') {
            $query->orderBy('selling_price', 'desc');
        } elseif ($this->priceInput === 'low-to-high') {
            $query->orderBy('selling_price', 'asc');
        }

        return $query->get();
    }

    public function getCategoryBrands()
    {
        return Category::findOrFail($this->category->id)
            ->brands()
            ->where('status', '0')
            ->get();
    }
}
