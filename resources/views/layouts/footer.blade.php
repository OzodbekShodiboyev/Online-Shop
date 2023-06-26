    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">{{ $appSetting->website_name ?? 'Sayt Nomi' }}</h5>
                <p class="mb-4">{{ $appSetting->page_title ?? 'Qisqa malumot' }}</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>
                    {{ $appSetting->address ?? 'Address' }}</p>
                <p class="mb-2"><i class="fab fa-telegram mr-3"></i>Telegram: {{ $appSetting->telegram }}</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-white mr-3"></i>{{ $appSetting->phone1 ?? 'phone' }}</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-5 mb-5">
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
                    <div class="col-md-6 mb-5 float-end">

                        @if ($appSetting->telegram)
                            {{-- <a class="btn text-light" style="width: 600px; background-color:#229ED9; "
                            href="{{ $appSetting->telegram }}" target="_blank"><i class="fab fa-telegram">
                                Telegram</i></a> --}}
                        @endif

                        <h6 class="text-secondary text-uppercase mb-3">@lang('public.join_us')</h6>

                        <div class="d-flex">
                            @if ($appSetting->telegram)
                                <a class="btn btn-success btn-square mr-2" href="{{ $appSetting->telegram }}"
                                    target="_blank"><i class="fab fa-telegram"></i></a>
                            @endif

                            @if ($appSetting->instagram)
                                <a class="btn btn-success btn-square mr-2" href="{{ $appSetting->instagram }}"
                                    target="_blank"><i class="fab fa-instagram"></i></a>
                            @endif

                            @if ($appSetting->facebook)
                            <a class="btn btn-success btn-square mr-2" href="{{ $appSetting->facebook }}"
                                target="_blank"><i class="fab fa-facebook"></i></a>
                            @endif

                            @if ($appSetting->youtube)
                            <a class="btn btn-success btn-square mr-2" href="{{ $appSetting->youtube }}"
                                target="_blank"><i class="fab fa-youtube"></i></a>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer End -->


        <a href="#" class="btn btn-success back-to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- Back to Top -->

        <br> <br> <br>


        {{-- <div class="container-fluid bg-dark text-secondary mt-5 pt-5" id="footer">
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
        {{-- <div class="d-flex m-3">
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
</div> --}}
