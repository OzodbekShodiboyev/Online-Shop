<div>
    <div class="py-3 py-md-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border" wire:ignore>
                        @if (!empty($product->productImages))
                            <div class="exzoom" id="exzoom">
                                <div class="exzoom_img_box">
                                    <ul class='exzoom_img_ul'>
                                        @foreach ($product->productImages as $itemMedia)
                                            @if (in_array(pathinfo($itemMedia->image, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
                                                <li>
                                                    <img src="{{ asset($itemMedia->image) }}"
                                                        style="margin-top: 50.8817px; width: 328px; height: 100%" />
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <p class="exzoom_btn">
                                    <a href="javascript:void(0);" class="exzoom_prev_btn">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="exzoom_next_btn">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </p>
                            </div>
                        @else
                            @lang('image_no')
                        @endif


                        <div class="mt-3">
                            @foreach ($product->productImages as $itemMedia)
                                @if (in_array(pathinfo($itemMedia->image, PATHINFO_EXTENSION), ['mp4', 'webm', 'oga', 'ogx', 'ogm']))
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{ $product->name }}
                        </h4>
                        <hr>
                        <div>
                            @if ($product->selling_price > 0)
                                <h5>{{ number_format($product->selling_price) }} UZS</h5>
                                <h6 class="text-muted ml-2"><del>{{ number_format($product->original_price) }} UZS</del>
                                </h6>
                            @else
                                <h5 class="ml-2">{{ number_format($product->original_price) }} UZS</h5>
                            @endif
                        </div>
                        <div>
                            @if ($product->productColors->count() > 0)
                                @if ($product->productColors)
                                    <div class="btn-group" role="group"aria-label="Basic radio toggle button group">
                                        @foreach ($product->productColors as $colorItem)
                                            <input type="radio" class="btn-check" name="btnradio"
                                                id="btnradio{{ $colorItem->id }}"
                                                wire:click="colorSelected({{ $colorItem->id }})">
                                            <label class="btn btn-outline-dark"
                                                style="background-color: {{ $colorItem->color->code }}"
                                                for="btnradio{{ $colorItem->id }}" id="colorButton"><span
                                                    style="color: black; text-shadow: 0px 0px 12px white;">{{ $colorItem->color->name }}</span></label>
                                        @endforeach
                                    </div>

                                @endif
                                <div>
                                    @if ($this->prodColorSelectedQuantity == 'outOfStock')
                                        <label class="btn-sm py-1 mt-2 text-white bg-danger">@lang('public.out_stock')</label>
                                    @elseif($this->prodColorSelectedQuantity > 0)
                                        <label class="btn-sm py-1 mt-2 text-white bg-success">@lang('public.instock')</label>
                                    @endif
                                </div>
                            @else
                                @if ($product->quantity)
                                    <label class="btn-sm py-1 mt-2 text-white bg-success">@lang('public.instock')</label>
                                @else
                                    <label class="btn-sm py-1 mt-2 text-white bg-danger">@lang('public.out_stock')</label>
                                @endif
                            @endif
                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1" wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount" value="{{ $this->quantityCount }}"
                                    readonly class="input-quantity" />
                                <span class="btn btn1" wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="button" wire:click="addToCart({{ $product->id }})"
                                class="btn-success btn btn1">
                                <span wire:loading.remove wire:target="addToCart">
                                    <i class="fa fa-shopping-cart"></i>@lang('public.add_bas')
                                </span>
                                <span wire:loading wire:target="addToCart">@lang('public.adding')</span>
                            </button>
                            <button type="button" wire:click="addToWishList({{ $product->id }})" class="btn btn1">
                                <span wire:loading.remove wire:target="addToWishList">
                                    @if (session()->has('message'))
                                        <i class="fa fa-heart"></i>@lang('public.added')
                                    @else
                                        <i class="fa fa-heart"></i>@lang('public.add')
                                    @endif

                                </span>
                                <span wire:loading wire:target="addToWishList">@lang('public.adding')</span>
                            </button>
                        </div>

                        <div class="mt-3">
                            <h5 class="mb-0">@lang('public.short_desc')</h5>
                            <p>
                                {!! $product->small_description !!}
                            </p>

                        </div>


                    </div>
                </div>
            </div>
            <div class="row" style="display: flex">
                @foreach ($product->productImages as $itemMedia)
                    @if (!in_array(strtolower(pathinfo($itemMedia->image, PATHINFO_EXTENSION)), ['png', 'jpeg', 'jpg']))
                        <div class="col-md-3 mt-3">
                            <div class="card ">
                                <video controls alt="Video" style="width: 270px; height: 225px">
                                    <source src="{{ asset($itemMedia->image) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col-md-9 mt-3">
                    <div class="card" style="height: 225px">
                        <div class="card-header bg-white" >
                            <h4>@lang('public.description')</h4>
                        </div>
                        <div class="card-body overflow-auto" style="padding-top: 0.7rem; padding-bottom: 0.6rem;">
                            <p>
                                {!! $product->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-3 py-md-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h3>
                        @if ($category)
                            {{ $category->name }} - @lang('public.con_prod')
                        @endif

                    </h3>
                    <div class="underline"></div>
                    <hr>
                </div>

                <div class="col-md-12">
                    @if ($category)
                        <div class="owl-carousel owl-theme four-carousel">
                            @foreach ($category->relatedProducts as $relatedProductItem)
                                <div class="item mb-3">
                                    <div class="product-card p-2">
                                        <div class="product-card-img ">
                                            @if ($relatedProductItem->productImages->count() > 0)
                                                <a class="p-4"
                                                    href="{{ url('/collections/' . $relatedProductItem->category->slug . '/' . $relatedProductItem->slug) }}">
                                                    <img src="{{ asset($relatedProductItem->productImages[0]->image) }}"
                                                        alt="{{ $relatedProductItem->name }}">
                                                </a>
                                            @endif
                                        </div>
                                        <div class="product-card-body">
                                            <p class="product-brand">{{ $relatedProductItem->brand }}</p>
                                            <h5 class="product-name">
                                                <a
                                                    href="{{ url('/collections/' . $relatedProductItem->category->slug . '/' . $relatedProductItem->slug) }}">
                                                    {{ $relatedProductItem->name }}
                                                </a>
                                            </h5>
                                            <div class="d-flex align-items-center  mt-2">
                                                @if ($relatedProductItem->selling_price > 0)
                                                    <h6>{{ number_format($relatedProductItem->selling_price) }} UZS
                                                    </h6>
                                                    <h6 class="text-muted ml-3">
                                                        <del>{{ number_format($relatedProductItem->original_price) }}
                                                            UZS</del>
                                                    </h6>
                                                @else
                                                    <h6 class="ml-2">
                                                        {{ number_format($relatedProductItem->original_price) }} UZS
                                                    </h6>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="p-2">
                            <h5>@lang('public.no_prod')</h5>
                        </div>

                    @endif
                </div>

            </div>
        </div>
    </div>
    <div class="py-3 py-md-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h3>
                        @if ($product)
                            Brand: {{ $product->brand }} - @lang('public.con_prod')
                        @endif


                    </h3>
                    <div class="underline"></div>
                    <hr>
                </div>
                <div class="col-md-12">
                    @if ($category)
                        <div class="owl-carousel owl-theme four-carousel">
                            @foreach ($category->relatedProducts as $relatedProductItem)
                                @if ($relatedProductItem->brand == "$product->brand")
                                    <div class="item mb-5">
                                        <div class="product-card">
                                            <div class="product-card-img">
                                                @if ($relatedProductItem->productImages->count() > 0)
                                                    <a
                                                        href="{{ url('/collections/' . $relatedProductItem->category->slug . '/' . $relatedProductItem->slug) }}">
                                                        <img src="{{ asset($relatedProductItem->productImages[0]->image) }}"
                                                            alt="{{ $relatedProductItem->name }}">
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="product-card-body">
                                                <p class="product-brand">{{ $relatedProductItem->brand }}</p>
                                                <h5 class="product-name">
                                                    <a
                                                        href="{{ url('/collections/' . $relatedProductItem->category->slug . '/' . $relatedProductItem->slug) }}">
                                                        {{ $relatedProductItem->name }}
                                                    </a>
                                                </h5>
                                                <div class="d-flex align-items-center  mt-2">
                                                    @if ($relatedProductItem->selling_price > 0)
                                                        <h6>{{ number_format($relatedProductItem->selling_price) }} UZS
                                                        </h6>
                                                        <h6 class="text-muted ml-3">
                                                            <del>{{ number_format($relatedProductItem->original_price) }}
                                                                UZS</del>
                                                        </h6>
                                                    @else
                                                        <h6 class="ml-2">
                                                            {{ number_format($relatedProductItem->original_price) }}
                                                            UZS</h6>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <br>
                    @else
                        <div class="p-2">
                            <h5>@lang('public.no_prod')</h5>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Footer Start -->
@include('layouts.footer')
<!-- Footer End -->
@livewireScripts
@push('scripts')
    <script>
        $(function() {
            $("#exzoom").exzoom({
                // thumbnail nav options
                "navWidth": 60,
                "navHeight": 60,
                "navItemNum": 5,
                "navItemMargin": 7,
                "navBorder": 1,
                "autoPlay": false,
                "autoPlayTimeout": 2000
            });
            $('.four-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dot: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>
@endpush

