<div>
    @if ($this->totalProductAmount != 0)
        <div class="py-3 py-md-4 checkout" style="height: 780px; overflow: auto;">
            <div class="container">
                <h4>Sotib olish</h4>
                <hr>

                <div class="row">

                    <div class="col-md-12 mb-4">
                        <div class="shadow bg-white p-3">
                            <h4 class="text-primary">
                                @lang('public.total_product')
                                <span class="float-end">{{ $this->totalProductAmount }} UZS</span>
                            </h4>
                            <hr>
                            <small>@lang('public.deleivre')</small>
                            <br />
                            <small>@lang('public.pay_soliq')</small>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="shadow bg-white p-3">
                            <h4 class="text-primary">
                                @lang('public.all_info')
                            </h4>
                            <hr>


                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>
                                        @lang('public.name')
                                    </label>
                                    <input type="text" wire:model.defer="fullname" class="form-control"
                                        placeholder="@lang('public.enter_name')" />
                                    @error('fullname')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>@lang('public.phone')</label>
                                    <input type="number" wire:model.defer="phone" class="form-control"
                                        placeholder="@lang('public.enter_phone')" />
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>
                                        @lang('public.user_email')
                                    </label>
                                    <input type="email" wire:model.defer="email" class="form-control"
                                        placeholder="@lang('public.enter_mail')" />
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>@lang('public.pincode') (Zip-Kod)</label>
                                    <input type="number" wire:model.defer="pincode" class="form-control"
                                        placeholder="@lang('public.enter_codes')" />
                                    @error('pincode')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>@lang('public.adress_loc')</label>
                                    <textarea wire:model.defer="address" class="form-control" rows="2"></textarea>
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>@lang('public.payment'): </label>
                                    <div class="d-md-flex align-items-start">
                                        <div class="nav col-md-3 flex-column nav-pills me-3" id="v-pills-tab"
                                            role="tablist" aria-orientation="vertical">
                                            <button wire:loading.attr="disabled" class="nav-link active fw-bold"
                                                id="cashOnDeliveryTab-tab" data-bs-toggle="pill"
                                                data-bs-target="#cashOnDeliveryTab" type="button" role="tab"
                                                aria-controls="cashOnDeliveryTab" aria-selected="true">@lang('public.offline_buy')</button>
                                            <button wire:loading.attr="disabled" class="nav-link fw-bold"
                                                id="onlinePayment-tab" data-bs-toggle="pill"
                                                data-bs-target="#onlinePayment" type="button" role="tab"
                                                aria-controls="onlinePayment" aria-selected="false">@lang('public.online_buy')</button>
                                        </div>
                                        <div class="tab-content col-md-9" id="v-pills-tabContent">
                                            <div class="tab-pane active show fade" id="cashOnDeliveryTab"
                                                role="tabpanel" aria-labelledby="cashOnDeliveryTab-tab" tabindex="0">
                                                <h6>@lang('public.offline_buy')</h6>
                                                <hr />
                                                <button type="button" wire:loading.attr="disabled"
                                                    wire:click="codOrder" class="btn btn-primary">
                                                    <span wire:loading.remove wire:target="codOrder">
                                                        @lang('public.offline_buy')
                                                    </span>
                                                    <span wire:loading wire:target="codOrder">
                                                        @lang('public.offline_buying')
                                                    </span>
                                                </button>

                                            </div>
                                            <div class="tab-pane fade" id="onlinePayment" role="tabpanel"
                                                aria-labelledby="onlinePayment-tab" tabindex="0">
                                                <h6>@lang('public.online_buy')</h6>
                                                <hr />
                                                <button type="button" class="btn btn-warning">@lang('public.now_buy')</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @else
                            <div class="card col-md-3 shadow text-center p-md-5" style="margin-left: 37%">
                                <h4>
                                    @lang('public.notproduct')
                                </h4>
                                <a href="{{ url('collections') }}" class="btn btn-warning">@lang('public.h_s_o')</a>
                            </div>
    @endif

</div>
</div>

</div>
</div>
</div>
</div>
