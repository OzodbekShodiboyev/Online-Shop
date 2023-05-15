
<div>
    <div class="py-3 py-md-5 bg-light mb-4">
        <div class="container">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                        @if ($product->productImages)
                            <img src="{{ asset($product->productImages[0]->image) }}" class="w-100" alt="Img">
                        @else
                            Mo image added
                        @endif
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{ $product->name }}

                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / {{ $product->category->name }} / {{ $product->name }}
                        </p>
                        <div>
                            <span class="selling-price">${{ $product->selling_price }}</span>
                            <span class="original-price">${{ $product->original_price }}</span>
                        </div>
                        <div>
                            @if($product->productColors->count() > 0)
                            @if($product->productColors)
                            <div class="btn-group" role="group"aria-label="Basic radio toggle button group">
                                @foreach ($product->productColors as $colorItem)
                                <input type="radio" class="btn-check" name="btnradio"
                                    id="btnradio{{ $colorItem->id }}"
                                    wire:click="colorSelected({{ $colorItem->id }})">
                                <label class="btn btn-outline-dark"
                                    style="background-color: {{ $colorItem->color->code }}"
                                    for="btnradio{{ $colorItem->id }}" id="colorButton"><span style="color: black; text-shadow: 1px 1px 2px white;">{{ $colorItem->color->name }}</span></label>

                                {{-- <label class="colorSelectionLabel"
                                style="background-color: {{ $colorItem->color->code }}"
                                wire:click="colorSelected({{ $colorItem->id }})">
                                
                            </label> --}}
                            @endforeach
                                </div>
                                
                                @endif
                                <div>
                                @if($this->prodColorSelectedQuantity == 'outOfStock')
                                <label class="btn-sm py-1 mt-2 text-white bg-danger">Out of Stock</label>
                            @elseif($this->prodColorSelectedQuantity > 0)
                                <label class="btn-sm py-1 mt-2 text-white bg-success">In Stock</label>
                            @endif
                            </div>
    
                            @else
                            @if($product->quantity)
                            <label class="btn-sm py-1 mt-2 text-white bg-success">In Stock</label>
                        @else
                            <label class="btn-sm py-1 mt-2 text-white bg-danger">Out of Stock</label>
                        @endif
                            @endif
                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1" wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount" value="{{ $this->quantityCount }}" readonly class="input-quantity" />
                                <span class="btn btn1" wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="button" wire:click="addToCart({{ $product->id }})" class="btn btn1">
                                 <i class="fa fa-shopping-cart"></i> Add To Cart
                            </button>

                            <button type="button" wire:click="addToWishList({{ $product->id }})" class="btn btn1">
                                <span wire:loading.remove>
                                    <i class="fa fa-heart"></i> Add To Wishlist
                                </span>
                                <span wire:loading wire:target="addToWishList">Adding...</span>
                            </button>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0">Small Description</h5>
                            <p>
                                {!! $product->small_description !!}
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>Description</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                {!! $product->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@livewireScripts