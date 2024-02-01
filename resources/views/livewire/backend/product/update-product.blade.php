<form wire:submit.prevent="save">
    @php
        $save_button_text = "Update Product";
    @endphp
    @include('backend.product.form')
</form>
