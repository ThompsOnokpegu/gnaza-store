<!-- CreateProduct.blade.php -->

<div>
    <!-- Step 1: Display create product view -->
    <form>
        <div class="mb-3">
            <!-- Step 2: User selects product type -->
            <label for="productType" class="form-label">Select Product Type:</label>
            <select wire:model.live="productType" class="form-select" id="productType">
                <option value="simple">Simple</option>
                <option value="variable">Variable</option>
            </select>
        </div>
        <!-- Step 3: Display available product attributes -->
        @if($productType == 'variable')
            <div class="mb-3">
                <label for="pattributes" class="form-label">Select Attribute(s):</label>
                <select multiple wire:model="selectedAttributes" class="form-select" id="pattributes">
                    @foreach($attributes as $attribute)
                        <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                    @endforeach
                </select>
            </div>
        @endif
       @php
           dd($selectedAttributes);
       @endphp
        <!-- Step 5: Display attribute options -->
        @foreach($selectedAttributes as $selectedAttribute)

            <div class="mb-3">
                <label for="attributeOptions{{ $selectedAttribute }}" class="form-label">Select Option(s) for :</label>
                <select multiple wire:model="selectedOptions.{{ $selectedAttribute }}" class="form-select" id="attributeOptions{{ $selectedAttribute }}">
                    @foreach($attributeOptions[$selectedAttribute] as $option)
                        <option value="{{ $option->id }}">{{ $option->value }}</option>
                    @endforeach
                </select>
            </div>
        @endforeach
        
        <!-- Step 7: Input fields for price and stock quantity -->
        @foreach($productVariations as $variation)
            <div class="mb-3">
                <label for="price{{ $variation['id'] }}" class="form-label">Price for {{ $variation['name'] }}:</label>
                <input type="number" wire:model="productVariations.{{ $variation['id'] }}.price" class="form-control" id="price{{ $variation['id'] }}">
                
                <label for="stock{{ $variation['id'] }}" class="form-label">Stock Quantity for {{ $variation['name'] }}:</label>
                <input type="number" wire:model="productVariations.{{ $variation['id'] }}.stock" class="form-control" id="stock{{ $variation['id'] }}">
            </div>
        @endforeach
        
        <!-- Step 9: Save product information -->
        <button wire:click.prevent="saveProduct" class="btn btn-primary">Save Product</button>
    </form>
</div>

