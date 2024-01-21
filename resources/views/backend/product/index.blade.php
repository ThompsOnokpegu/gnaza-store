@extends('backend.layouts.main')

@section('content')
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Stock</th>
                <th>SKU</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
          @forelse($products as $product)
             <tr wire:key='{{ $product->id }}'>
                <td><a wire:navigate href="{{ route('product.edit',$product->slug) }}"><img src="{{ asset('/backend/assets/img/avatars/5.png') }}" alt="Avatar" class="rounded-2" width=40></i> <span class="fw-medium"><span>{{ $product->name }}</span></a></td>
                <td>₦{{ $product->regular_price }}</td>
                <td>{{ $product->stock_quantity }}</td>
                <td>{{ $product->sku }}</td>
                <td><span class="badge bg-label-{{ $product->status=='in-stock' ? 'success':'warning' }} me-1">{{ $product->status }}</span></td>
                <td>
                  {{-- <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" wire:navigate href="{{ route('product.edit',$product->slug) }}"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                      <a class="dropdown-item" wire:navigate href="{{ route('product.destroy',$product->slug) }}"><i class="bx bx-trash me-1"></i>Delete</a>
                    </div>
                  </div> --}}
                  <a class="dropdown-item" wire:navigate href="{{ route('product.destroy',$product->slug) }}"><span style="color:red"><i class="bx bx-trash me-1"></i>Delete</span></a>
                </td>
              </tr>
          @empty
              <td colspan="6">No products found!</td>
          @endforelse
        </tbody>
    </table>
  </div>
@endsection