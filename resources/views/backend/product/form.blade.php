<div class="row">
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
        <div class="d-flex flex-column justify-content-center">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Menu/</span> Add New</h4>
        </div>
        <div class="d-flex align-content-center flex-wrap gap-3">
        <a wire:navigate href="{{ route('products') }}" class="btn btn-outline-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">{{ $save_button_text}}</button>
        
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
                id="product_name"
                placeholder="Product Name"
                aria-describedby="defaultFormControlHelp"
              />
              @error('form.name')
                  <span class="error">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
                <select wire:model='form.category_id'id="category" class="form-select">
                  <option>Category</option>
                  @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($form->category_id) @selected($category->id == $form->category_id) @endif>{{ $category->name }}</option>
                  @endforeach
                </select>
                @error('form.category_id')
                  <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="description" class="form-label">Description</label>
                <textarea wire:model='form.description' class="form-control" id="description" rows="3"></textarea>
                @error('form.description')
                  <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <label class="form-label mt-3" for="productImage">Product Image</label>
            <div class="button-wrapper dropzone needsclick dz-clickable">
                <label for="product_image" class="btn btn-primary me-2 mb-4 needsclick dz-clickable" tabindex="0">
                  <span class="d-none d-sm-block">{{ $save_button_text == "Update Product" ? "Replace Image" : "Upload Image"}}</span>
                  <i class="bx bx-upload d-block d-sm-none"></i>
                  <input
                    type="file"
                    wire:model="form.product_image"
                    id="product_image"
                    hidden
                  /> 
                </label>
                <p class="text-muted mb-0">Allowed JPEG,JPG, or PNG. Max size of 300K</p>
                {{-- <img id="preview" src="" alt="your image" class="mt-3" style="display:none;" width="200"/>        --}}
                @if ($form->product_image)
                  @if(gettype($form->product_image) != "string")
                    <img src="{{ $form->product_image->temporaryUrl() }}" id="product_image_preview" width="200">
                  @endif
                @endif
                @if (gettype($form->product_image)=="string")
                  <img src="{{ env('BASE_URL').$form->product_image}}" class="mt-3" alt="" width="200">   
                @endif
            </div>
            @error('form.product_image') <div class="error">{{ $message }}</div> @enderror
            
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
                <input wire:model='form.regular_price' type="text" class="form-control" id="regular_price" placeholder="Regular Price" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
              </div>
              @error('form.regular_price')
              <span class="error">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <div class="input-group">
                <span class="input-group-text">₦</span>
                <input wire:model='form.sales_price' type="text" class="form-control" id="sales_price" placeholder="Sales Price" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
              </div>
              @error('form.sales_price')
              <span class="error">{{ $message }}</span>
              @enderror
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="salesStartDate" class="form-label">Sale Starts</label>
                    <input wire:model='form.sales_start_date' id="salesStartDate" class="form-control" type="datetime-local" value="2021-06-18T12:30:00" id="sale_start">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="salesEndDate" class="form-label">Sale Ends</label>
                    <input wire:model='form.sales_end_date' id="salesEndDate" class="form-control" type="datetime-local" value="2021-06-18T12:30:00" id="sale_end">
                </div>
            </div>
            
            <div class="mb-3">
                <select wire:model='form.discount_type' id="discount_type" class="form-select">
                  <option>Discount Type</option>
                  <option value="Percentage">Percentage</option>
                  <option value="Fixed">Fixed Amount</option>
                </select>
            </div>
            <input
              wire:model='form.discount_amount'
              type="number"
              class="form-control"
              id="discount_amount"
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
            id="stock_quantity"
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
            id="low_stock_threshold"
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
            id="sku"
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
            id="seo"
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
            id="keywords"
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