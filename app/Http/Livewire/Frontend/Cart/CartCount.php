<?php

namespace App\Http\Livewire\Frontend\Cart;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartCount extends Component
{
    public $cartCount;

<<<<<<< HEAD
    protected $listener = ['CartAddedUpdated' => 'checkCartCount'];
=======
    protected $listeners = ['CartAddedUpdated' => 'checkCartCount',];
>>>>>>> 50c06c31621adb8f86ce8f6812edea1651fd3052

    public function checkCartCount()
    {
        if(Auth::check()){
            return $this->cartCount = Cart::where('user_id', auth()->user()->id)->count();
        }else{
            return $this->cartCount = 0;
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