<div class="row">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Attributes /</span> Add New</h4>
    <div class="col-md">
      <div class="card mb-4">
        <div class="card-body">
          @if(session()->has('saved'))
            <div class="alert alert-success">
              {{ session('saved') }}
            </div>
          @endif
          <div>
            <input
              type="text"
              wire:model ="name"
              class="form-control mb-3"
              id="defaultFormControlInput"
              placeholder="Attribute Name"
              aria-describedby="defaultFormControlHelp"
            />
            <input
              type="text"
              wire:model = "slug"
              class="form-control mb-3"
              id="defaultFormControlInput"
              placeholder="Slug"
              aria-describedby="defaultFormControlHelp"
            />
            
            <div class="alert alert-info">
                To delete an attribute value, just make the field empty!
            </div>
            <label for="attribute">Attribute Values</label>
            <div class="row">
                <div class="col-md-12">
                    <table>
                        <tbody>
                            <tr>
                                @for($i=0;$i<$count;$i++)
                                    <td>
                                        <input type="text" wire:model="attribute_values.{{ $i }}" class="form-control" id="defaultFormControlInput" placeholder="Value" aria-describedby="defaultFormControlHelp"/>
                                    </td>
                                @endfor
                                <td><button wire:click.prevent="add" class="btn btn-outline-primary">Add Attribute Value</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
          <div wire:loading>
            Saving...
          </div>
          <button wire:loading.remove wire:click.prevent="saveAttribute" class="btn btn-primary mt-3">Save</button>
        </div>
      </div>
      @livewire('display-attributes')
    </div>
</div>
