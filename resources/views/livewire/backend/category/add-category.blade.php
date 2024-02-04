<div class="row">
    <div class="card mb-4">
      <form wire:submit.prevent="addCategory">
        <h5 class="card-header">Add New Category</h5>
        <div class="card-body">
          
          <div>
            <div class="mb-3">
              
                <input
                  type="text"
                  wire:model='name'
                  class="form-control"
                  id="name"
                  placeholder="Category Name"
                  aria-describedby="defaultFormControlHelp"
                />
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
              
            </div>
          </div>
          <div class="d-flex align-content-center flex-wrap gap-3">
            <a wire:navigate href="" class="btn btn-outline-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Add Category</button>
            
            </div>
        </div>
      </form>
    </div>
    
    @livewire('backend.category.categories')
</div>