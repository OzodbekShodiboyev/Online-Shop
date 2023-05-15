<div class="col-md-3">
    @if ($category->brands)

        <div class="card">
            <div class="card-header">
                <h4>Brands</h4>
            </div>
            <div class="card-body">
                @foreach ($category->brands as $brandItem)
                    <label class="d-block">
                        <input type="checkbox" wire:model="brandInputs" value="{{ $brandItem->name }}" />
                        {{ $brandItem->name }}
                    </label>
                @endforeach
            </div>
        </div>
    @endif

    <div class="card mt-3">
        <div class="card-header">
            <h4>Price</h4>
        </div>
        <div class="card-body">
            <label class="d-block">
                <input type="radio" name="priceSort" wire:model="priceInput" value="high-to-low" /> High to Low
            </label>
            <label class="d-block">
                <input type="radio" name="priceSort" wire:model="priceInput" value="low-to-high" /> Low to High
            </label>
        </div>
    </div>

</div>
