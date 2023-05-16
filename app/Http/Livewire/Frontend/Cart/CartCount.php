<?php

namespace App\Http\Livewire\Frontend\Cart;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartCount extends Component
{
<<<<<<< HEAD
    public $cartCount, $quantityCount;

    protected $listener = ['CartAddedUpdated' => 'checkCartCount'];
=======
    public $cartCount;
>>>>>>> 268f1b759dba8fbea1ff75ca421e2f37060aa52a
    protected $listeners = ['CartAddedUpdated' => 'checkCartCount',];

    public function checkCartCount()
    {
        if(Auth::check()){
            return $this->cartCount = Cart::where('user_id', auth()->user()->id)->count();
        }else{
            return $this->cartCount = 0;
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
    public function render()
    {
        $this->cartCount = $this->checkCartCount();
        return view('livewire.frontend.cart.cart-count',[
            'cartCount' => $this->cartCount
        ]);

        
    }
}