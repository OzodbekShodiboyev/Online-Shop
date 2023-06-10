<div>
    <div class="py-3 py-md-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border" wire:ignore>
                        @if ($product->productImages)
                            {{-- <img src="{{ asset($product->productImages[0]->image) }}" class="w-100" alt="Img"> --}}
                            <div class="exzoom" id="exzoom">
                                <div class="exzoom_img_box">
                                    <ul class='exzoom_img_ul'>
                                        @foreach ($product->productImages as $itemImg)
                                            <li>
                                                <img src="{{ asset($itemImg->image) }}"
                                                    style="margin-top: 50.8817px; width: 328px; height: 100%" />
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="exzoom_nav"></div>
                                <p class="exzoom_btn">
                                    <a href="javascript:void(0);" class="exzoom_prev_btn">
                                        < </a>
                                            <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                                </p>
                            </div>
                        @else
                            @lang('image_no')
                        @endif
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{ $product->name }}

                        </h4>
                        <hr>
                        <div>
                            <span class="selling-price">${{ $product->selling_price }}</span>
                            <span class="original-price">${{ $product->original_price }}</span>
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
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>@lang('public.description')</h4>
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
                                    <div class="product-card p-2"style="height: 38 0px">
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
                                            <div class="">
                                                <span class="selling-price fs-4">$
                                                    {{ number_format($relatedProductItem->selling_price) }}</span>
                                                <span class="original-price text-dark fs-6">$
                                                    {{ number_format($relatedProductItem->original_price) }}</span>
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
                                        <div class="product-card" style="height: 370px">
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
                                                <div>
                                                    <span class="selling-price ">$
                                                        {{ number_format($relatedProductItem->selling_price) }}</span>
                                                    <span class="original-price text-dark fs-6">$
                                                        {{ number_format($relatedProductItem->original_price) }}</span>
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
<div class="container-fluid bg-dark text-secondary pt-5" >
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="text-secondary text-uppercase mb-4">{{ $appSetting->website_name ?? 'Sayt Nomi' }}</h5>
            <p class="mb-4">{{ $appSetting->page_title ?? 'Qisqa malumot' }}</p>
            <p class="mb-2"><i
                    class="fa fa-map-marker-alt text-white mr-3"></i>{{ $appSetting->address ?? 'Address' }}
            </p>
            <p class="mb-2"><i class="fa fa-envelope text-white mr-3"></i>Telegram:
                {{ $appSetting->telegram }}
            </p>
            <p class="mb-0"><i class="fa fa-phone-alt text-white mr-3"></i>{{ $appSetting->phone1 ?? 'phone' }}
            </p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="text-secondary text-uppercase mb-4">@lang('public.quick_shop')</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a href="/" class="text-secondary mb-2"><i
                                class="fa fa-angle-right mr-2"></i>@lang('public.main')</a>
                        <a href="{{ url('/new-arrivals') }}" class="text-secondary mb-2"><i
                                class="fa fa-angle-right mr-2"></i>@lang('public.new_product')</a>
                        <a href="{{ url('wishlist') }}" class="text-secondary mb-2"><i
                                class="fa fa-angle-right mr-2"></i>@lang('public.sorted')</a>
                        <a href="{{ url('cart') }}" class="text-secondary mb-2"><i
                                class="fa fa-angle-right mr-2"></i>@lang('public.basket')</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h6 class="text-secondary text-center mt-4 mb-3">@lang('public.join_us')</h6>
                    {{-- {{dd($appSetting)}} --}}
                    <div class="d-flex m-3">
                        @if ($appSetting->telegram)
                            <a class="btn text-light" style="width: 600px; background-color:#229ED9; "
                                href="{{ $appSetting->telegram }}" target="_blank"><i class="fab fa-telegram">
                                    Telegram</i></a>
                        @endif


                    </div>
                    <div class="d-flex m-3">
                        @if ($appSetting->instagram)
                            <a class="btn text-light"
                                style="width: 600px;   background: #f09433; 
                                background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
                                background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
                                background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
                                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );"
                                href="{{ $appSetting->instagram }}" target="_blank"><i class="fab fa-instagram">
                                    Instagram</i></a>
                        @endif
                    </div>
                    <div class="d-flex m-3">
                        @if ($appSetting->facebook)
                            <a class="btn text-light" style="width: 600px;   background: #3b5998 ; "
                                href="{{ $appSetting->facebook }}" target="_blank"><i class="fab fa-facebook">
                                    Facebook</i></a>
                        @endif
                    </div>
                    <div class="d-flex m-3">
                        @if ($appSetting->youtube)
                            <a class="btn text-light" style="width: 600px;   background: #c4302b ; "
                                href="{{ $appSetting->youtube }}" target="_blank"><i class="fab fa-youtube"> You
                                    Tube</i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
