<div class="row">
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
        <div class="d-flex flex-column justify-content-center">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Menu/</span> Add New</h4>
        </div>
        <div class="d-flex align-content-center flex-wrap gap-3">
        <a wire:navigate href="{{ route('products') }}" class="btn btn-outline-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Publish Product</button>
        
        </div>
    </div>
    <div class="col-md-8">
      <div class="card mb-4">
        <h5 class="card-header">Product Info</h5>
        <div class="card-body">
          
          <div>
            <div class="mb-3">
              <input
                type="text"
                wire:model='form.name'
                class="form-control"
                id="defaultFormControlInput"
                placeholder="Product Name"
                aria-describedby="defaultFormControlHelp"
              />
              @error('form.name')
                  <span class="error">{{ $message }}</span>
              @enderror
            </div>
            
            
            <div class="mb-3">
                <select wire:model='form.category'id="defaultSelect" class="form-select">
                  <option>Category</option>
                  @foreach($categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach
                    <option value="Earrings">Earrings</option>
                </select>
                @error('form.category')
                  <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea wire:model='form.description' class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('form.description')
                  <span class="error">{{ $message }}</span>
                @enderror
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <h5 class="card-header">Pricing</h5>
        <div class="card-body">
          <div>
            <div class="mb-3">
              <div class="input-group">
                <span class="input-group-text">₦</span>
                <input wire:model='form.regular_price'type="text" class="form-control" placeholder="Regular Price" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
              </div>
              @error('form.regular_price')
              <span class="error">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <div class="input-group">
                <span class="input-group-text">₦</span>
                <input wire:model='form.sales_price'type="text" class="form-control" placeholder="Sales Price" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
              </div>
              @error('form.sales_price')
              <span class="error">{{ $message }}</span>
              @enderror
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="salesStartDate" class="form-label">Sale Starts</label>
                    <input wire:model='form.sales_start_date' class="form-control" type="datetime-local" value="2021-06-18T12:30:00" id="html5-datetime-local-input">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="salesStartDate" class="form-label">Sale Ends</label>
                    <input wire:model='form.sales_end_date' class="form-control" type="datetime-local" value="2021-06-18T12:30:00" id="html5-datetime-local-input">
                </div>
            </div>
            
            <div class="mb-3">
                <select wire:model='form.discount_type' id="defaultSelect" class="form-select">
                  <option>Discount Type</option>
                  <option value="Percentage">Percentage</option>
                  <option value="Fixed">Fixed Amount</option>
                </select>
            </div>
            <input
              wire:model='form.discount_amount'
              type="number"
              class="form-control"
              id="defaultFormControlInput"
              placeholder="Discount Value"
              aria-describedby="defaultFormControlHelp"
            />
            <div id="defaultFormControlHelp" class="form-text">
              Discount amount: fixed amount or percentage value.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <h5 class="card-header">Inventory</h5>
        <div class="card-body"> 
          <div class="mb-3">
            <input
            wire:model='form.stock_quantity'
            type="number"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="Stock Quantity"
            aria-describedby="defaultFormControlHelp"
            />
            @error('form.stock_quantity')
              <span class="error">{{ $message }}</span>
            @enderror
          </div>        
          <div class="mb-3">
            <input
            wire:model='form.low_stock_threshold'
            type="number"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="Low Stock Threshold"
            aria-describedby="defaultFormControlHelp"
            />
            <div id="defaultFormControlHelp mb-3" class="form-text">
                Alert me when stock gets to this level.
            </div>
          </div>
          <div class="mb-3">
            <input
            wire:model='form.sku'
            type="text"
            class="form-control mt-3"
            id="defaultFormControlInput"
            placeholder="SKU"
            aria-describedby="defaultFormControlHelp"
            />
            @error('form.sku')
              <span class="error">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-3">
            <div class="">
              <small class="text-light fw-semibold">Availability</small>
              <div class="form-check mt-1">
                  <input wire:model="form.status" class="form-check-input" type="radio" value="in-stock" id="in-stock">
                  <label class="form-check-label" for="in-stock"> Instock </label>
              </div>
              <div class="form-check">
                  <input wire:model="form.status" class="form-check-input" type="radio" value="out-of-stock" id="out-of-stock" checked="">
                  <label class="form-check-label" for="out-of-stock"> Out of Stock </label>
              </div>
              
              </div>
            </div>
          </div>
        </div>
      <div class="card mb-4">
        <h5 class="card-header">SEO</h5>
        <div class="card-body">
            <input
            wire:model='form.meta_title'
            type="text"
            class="form-control mb-3"
            id="defaultFormControlInput"
            placeholder="Meta Title"
            aria-describedby="defaultFormControlHelp"
          />
            <div>
                <label for="exampleFormControlTextarea1" class="form-label">Meta Description</label>
                <textarea wire:model='form.meta_description'class="form-control mb-3" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <input
            wire:model='form.keywords'
            type="text"
            class="form-control mb-3"
            id="defaultFormControlInput"
            placeholder="Keywords"
            aria-describedby="defaultFormControlHelp"
          />
          <div id="defaultFormControlHelp" class="form-text">
            3 words that best describe this form.
          </div>
        </div>
      </div>
    </div>
  </div>