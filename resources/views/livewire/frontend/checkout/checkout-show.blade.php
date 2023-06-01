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
                                Mahsulotning umumiy miqdori :
                                <span class="float-end">${{ $this->totalProductAmount }}</span>
                            </h4>
                            <hr>
                            <small>* Mahsulotlar 3-5 kun ichida yetkazib beriladi.</small>
                            <br />
                            <small>* Soliq va boshqa to'lovlar kiritilgan ?</small>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="shadow bg-white p-3">
                            <h4 class="text-primary">
                                Umumiy ma'lumotlar
                            </h4>
                            <hr>


                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>To'liq Ismi</label>
                                    <input type="text" wire:model.defer="fullname" class="form-control"
                                        placeholder="Enter Full Name" />
                                    @error('fullname')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Telefon raqami</label>
                                    <input type="number" wire:model.defer="phone" class="form-control"
                                        placeholder="Enter Phone Number" />
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Email Address</label>
                                    <input type="email" wire:model.defer="email" class="form-control"
                                        placeholder="Enter Email Address" />
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Pin-code (Zip-code)</label>
                                    <input type="number" wire:model.defer="pincode" class="form-control"
                                        placeholder="Enter Pin-code" />
                                    @error('pincode')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Yashash manzili</label>
                                    <textarea wire:model.defer="address" class="form-control" rows="2"></textarea>
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>To'lov usulini tanlang: </label>
                                    <div class="d-md-flex align-items-start">
                                        <div class="nav col-md-3 flex-column nav-pills me-3" id="v-pills-tab"
                                            role="tablist" aria-orientation="vertical">
                                            <button wire:loading.attr="disabled" class="nav-link active fw-bold"
                                                id="cashOnDeliveryTab-tab" data-bs-toggle="pill"
                                                data-bs-target="#cashOnDeliveryTab" type="button" role="tab"
                                                aria-controls="cashOnDeliveryTab" aria-selected="true">Yetkazib berish</button>
                                            <button wire:loading.attr="disabled" class="nav-link fw-bold"
                                                id="onlinePayment-tab" data-bs-toggle="pill"
                                                data-bs-target="#onlinePayment" type="button" role="tab"
                                                aria-controls="onlinePayment" aria-selected="false">Online
                                                Buyurtma</button>
                                        </div>
                                        <div class="tab-content col-md-9" id="v-pills-tabContent">
                                            <div class="tab-pane active show fade" id="cashOnDeliveryTab"
                                                role="tabpanel" aria-labelledby="cashOnDeliveryTab-tab" tabindex="0">
                                                <h6>Yetkazib berish</h6>
                                                <hr />
                                                <button type="button" wire:loading.attr="disabled"
                                                    wire:click="codOrder" class="btn btn-primary">
                                                    <span wire:loading.remove wire:target="codOrder">
                                                        Yetkazib berish
                                                    </span>
                                                    <span wire:loading wire:target="codOrder">
                                                        Yetkazib berilmoqda
                                                    </span>
                                                </button>

                                            </div>
                                            <div class="tab-pane fade" id="onlinePayment" role="tabpanel"
                                                aria-labelledby="onlinePayment-tab" tabindex="0">
                                                <h6>Online buyurtma</h6>
                                                <hr />
                                                <button type="button" class="btn btn-warning">Hoziroq buyurtma bering</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @else
                            <div class="card col-md-3 shadow text-center p-md-5" style="margin-left: 37%">
                                <h4>Toʻlov uchun savatda hech qanday mahsulot yoʻq</h4>
                                <a href="{{ url('collections') }}" class="btn btn-warning">Hoziroq sotib oling</a>
                            </div>
    @endif

</div>
</div>

</div>
</div>
</div>
</div>
