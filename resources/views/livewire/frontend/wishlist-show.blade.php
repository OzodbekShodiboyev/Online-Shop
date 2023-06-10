<div style="min-height: 220px;">
    @if ($wishlist->isEmpty())
        <div class="fs-1 fw-bold text-center" style="margin-top: 10%">@lang('public.not_found')</div>
    @else
        <div class="py-3 py-md-5 bg-light">
            <div class="container">
                <h3>Tanlangan</h3>
                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <div class="shopping-cart">

                            <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Mahsulotlar</h4>
                                    </div>
                                    <div class="col-md-2">
                                        <h4>Narxi</h4>
                                    </div>
                                    <div class="col-md-2">
                                        <h4>O'chirish</h4>
                                    </div>
                                </div>
                            </div>

                            @forelse ($wishlist as $wishlistItem)
                                @if ($wishlistItem->product)
                                    <div class="cart-item">
                                        <div class="row">
                                            <div class="col-md-6 my-auto">
                                                <a
                                                    href="{{ url('collections/' . $wishlistItem->product->category->slug . '/' . $wishlistItem->product->slug) }}">
                                                    <label class="product-name">
                                                        <img src="{{ $wishlistItem->product->productImages[0]->image }}"
                                                            style="width: 50px; height: 50px"
                                                            alt=" {{ $wishlistItem->product->name }}">
                                                        {{ $wishlistItem->product->name }}
                                                    </label>
                                                </a>
                                            </div>
                                            <div class="col-md-2 my-auto">
                                                <label class="price"> ${{ $wishlistItem->product->selling_price }}
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-12 my-auto">
                                                <div class="remove">
                                                    <button type="button"
                                                        wire:click="removeWishlistItem({{ $wishlistItem->id }})"
                                                        class="btn btn-danger btn-sm">
                                                        <span wire:loading.remove
                                                            wire:target="removeWishlistItem({{ $wishlistItem->id }})">
                                                            <i class="fa fa-trash"></i> O'chirish
                                                        </span>
                                                        <span wire:loading
                                                            wire:target="removeWishlistItem({{ $wishlistItem->id }})">
                                                            <i class="fa fa-trash"></i> O'chirilmoqda
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @empty
                                <h4></h4>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
