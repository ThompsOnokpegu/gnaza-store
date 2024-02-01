<form wire:submit.prevent="save">
  @php
      $save_button_text = "Publish Product";
  @endphp
  @include('backend.product.form')
</form>