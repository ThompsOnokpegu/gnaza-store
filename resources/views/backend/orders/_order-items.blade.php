@foreach($order_items as $item)

<tr>
    <td>
        <div class="d-flex justify-content-start align-items-center text-nowrap">
            <div class="avatar-wrapper">
                <div class="avatar me-2">
                    @php
                        $product = App\Models\Product::where('id',$item->id)->first();
                    @endphp
                    <img src="{{ url(env('BASE_URL') . $product->product_image) }}" alt="product" class="rounded-2">
                </div>
            </div>
            <div class="d-flex flex-column">
                <h6 class="text-body mb-0">{{ $item->name }}</h6>
                <small class="text-muted">QTY: {{ $item->quantity }}</small>
            </div>
        </div>
    </td>
    <td>{{ '₦'.number_format($item->price,2) }}</td>
    
    <td><span class="">{{ '₦'.number_format($item->quantity * $item->price,2) }}</span></td>
</tr>

@endforeach