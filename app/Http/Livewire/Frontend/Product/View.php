<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Wishlist;

class View extends Component
{
    public $category, $product, $prodColorSelectedQuantity, $quantityCount = 1, $productColorId;

    public function addToWishList(int $productId)
    {
        if (Auth::check()) {
            if (Wishlist::where('user_id', auth()->user()->id)->where('product_id', $productId)->exists()) {
                session()->flash('message', 'Product is already in your wishlist');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Already in your wishlist',
                    'type' => 'warning',
                    'status' => 409
                ]);

                return false;
            } else {
                Wishlist::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $productId

                ]);
                $this->emit('wishlistAddedUpdated');
                session()->flash('message', 'Product added to your wishlist successfully');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Added to wishlist successfully',
                    'type' => 'info',
                    'status' => 200
                ]);
            }
        } else {
            session()->flash('message', 'Please login to continue');
            $this->dispatchBrowserEvent('message', [
                'text' => 'Please login to continue',
                'type' => 'info',
                'status' => 401
            ]);
            return false;
        }
    }

    public function incrementQuantity()
    {
        if ($this->quantityCount < 10) {
            $this->quantityCount++;
        }
    }

    public function decrementQuantity()
    {
        if ($this->quantityCount > 1) {
            $this->quantityCount--;
        }
    }

    public function addToCart(int $productId)
    {
        if (Auth::check()) {

            if ($this->product->where('id', $productId)->where('status', '0')->exists()) {

                // Check for Product Color Quantity and add to Cart
                if ($this->product->productColors()->count() > 1) {

                    if ($this->prodColorSelectedQuantity != NULL) {

                        if (Cart::where('user_id', auth()->user()->id)
                            ->where('product_id', $productId)
                            ->where('product_color_id', $this->productColorId)
                            ->exists()
                        ) {
                            $this->dispatchBrowserEvent('message', [
                                'text' => 'Product Already Added!',
                                'type' => 'warning',
                                'status' => 404
                            ]);
                        } else {
                            $productColor = $this->product->productColors()->where('id', $this->productColorId)->first();
                            if ($productColor->quantity > 0) {

                                if ($productColor->quantity > $this->quantityCount) {

                                    // Insert Product to Cart
                                    Cart::create([
                                        'user_id' => auth()->user()->id,
                                        'product_id' => $productId,
                                        'product_color_id' => $this->productColorId,
                                        'quantity' => $this->quantityCount
                                    ]);

                                    $this->emit('cartAddedUpdated');
                                    $this->dispatchBrowserEvent('message', [
                                        'text' => 'Product Added to Cart.',
                                        'type' => 'success',
                                        'status' => 200
                                    ]);
                                } else {
                                    $this->dispatchBrowserEvent('message', [
                                        'text' => 'Only ' . $productColor->quantity . ' Products Available in Stock!',
                                        'type' => 'warning',
                                        'status' => 404
                                    ]);
                                }
                            } else {
                                $this->dispatchBrowserEvent('message', [
                                    'text' => 'Out of Stock!',
                                    'type' => 'warning',
                                    'status' => 404
                                ]);
                            }
                        }
                    } else {
                        $this->dispatchBrowserEvent('message', [
                            'text' => 'Please Select Product Color!',
                            'type' => 'info',
                            'status' => 401
                        ]);
                    }
                } else {

                    if (Cart::where('user_id', auth()->user()->id)->where('product_id', $productId)->exists()) {

                        $this->dispatchBrowserEvent('message', [
                            'text' => 'Product Already Added!',
                            'type' => 'warning',
                            'status' => 404
                        ]);

                    } else {

                        if ($this->product->quantity > 0) {

                            if ($this->product->quantity > $this->quantityCount) {

                                // Insert Product to Cart
                                Cart::create([
                                    'user_id' => auth()->user()->id,
                                    'product_id' => $productId,
                                    'quantity' => $this->quantityCount
                                ]);

                                $this->emit('cartAddedUpdated');
                                $this->dispatchBrowserEvent('message', [
                                    'text' => 'Product Added to Cart.',
                                    'type' => 'success',
                                    'status' => 200
                                ]);
                            } else {
                                $this->dispatchBrowserEvent('message', [
                                    'text' => 'Only ' . $this->product->quantity . ' Products Available in Stock!',
                                    'type' => 'warning',
                                    'status' => 404
                                ]);
                            }
                        } else {
                            $this->dispatchBrowserEvent('message', [
                                'text' => 'Out of Stock!',
                                'type' => 'warning',
                                'status' => 404
                            ]);
                        }
                    }
                }
            } else {
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Product does not exist!',
                    'type' => 'warning',
                    'status' => 404
                ]);
            }
        } else {
            $this->dispatchBrowserEvent('message', [
                'text' => 'Please Login to add to Cart!',
                'type' => 'info',
                'status' => 401
            ]);
        }
    }

    public function colorSelected($productColorId)
    {
        $this->productColorId = $productColorId;
        $productColor = $this->product->productColors()->where('id', $productColorId)->first();
        $this->prodColorSelectedQuantity = $productColor->quantity;

        if ($this->prodColorSelectedQuantity == 0) {
            $this->prodColorSelectedQuantity = 'outOfStock';
        }
    }

    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.frontend.product.view', [
            'category' => $this->category,
            'product' => $this->product
        ]);
    }
}
