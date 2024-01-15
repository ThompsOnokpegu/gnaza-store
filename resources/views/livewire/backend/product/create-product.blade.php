<div class="row">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product /</span> Add New</h4>
    <div class="col-md-8">
      <div class="card mb-4">
        <h5 class="card-header">Product Info</h5>
        <div class="card-body">
          <div>
            <input
              type="text"
              class="form-control mb-3"
              id="defaultFormControlInput"
              placeholder="Product Name"
              aria-describedby="defaultFormControlHelp"
            />
            
            <div class="mb-3">
                <select id="defaultSelect" class="form-select">
                  <option>Category</option>
                  @foreach($categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                  @endforeach
                </select>
            </div>
            <div>
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <h5 class="card-header">Pricing</h5>
        <div class="card-body">
          <div>
            <div class="input-group mb-3">
                <span class="input-group-text">₦</span>
                <input type="text" class="form-control" placeholder="Regular Price" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">₦</span>
                <input type="text" class="form-control" placeholder="Sales Price" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="salesStartDate" class="form-label">Sale Starts</label>
                    <input class="form-control" type="datetime-local" value="2021-06-18T12:30:00" id="html5-datetime-local-input">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="salesStartDate" class="form-label">Sale Ends</label>
                    <input class="form-control" type="datetime-local" value="2021-06-18T12:30:00" id="html5-datetime-local-input">
                </div>
            </div>
            
            <div class="mb-3">
                <select id="defaultSelect" class="form-select">
                  <option>Discount Type</option>
                  <option value="Percentage">Percentage</option>
                  <option value="Fixed">Fixed Amount</option>
                </select>
            </div>
            <input
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
      <div class="card mb-4">
        <h5 class="card-header">Attributes</h5>
        <div class="card-body">
          
          <div class="mb-3">
            <label for="defaultSelect" class="form-label">Product Type</label>
            <select wire:model.live='product_type'id="defaultSelect" class="form-select">
              <option value="simple">Simple Product</option>
              <option value="variable">Variable Product</option>
            </select>
            
          </div>
          <small class="text-light fw-semibold">Add Attributes</small>
            @forelse($attributes as $attribute)
              <div class="form-check form-check-inline mt-3">
                <input class="form-check-input" type="checkbox" id="{{ $attribute->slug }}" value="{{ $attribute->id }}" />
                <label class="form-check-label" for="{{ $attribute->slug }}">{{ $attribute->name }}</label>
              </div>
            @empty
              <div class="alert alert-info">
                No available attributes!
              </div>
            @endforelse
          <div class="mt-2 mb-3">
            <select class="js-example-basic-multiple mb-3 form-select" id="sizes" name="product_sizes[]" multiple="multiple">
                <option value="S">Small</option>
                <option value="M">Medium</option>
                <option value="L">Large</option>
                <option value="XL">Xtra Large</option>
            </select>               
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <h5 class="card-header">Inventory</h5>
        <div class="card-body">         
            <input
            type="number"
            class="form-control mb-3 mt-5"
            id="defaultFormControlInput"
            placeholder="Stock Quantity"
            aria-describedby="defaultFormControlHelp"
            />
            <input
            type="number"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="Low Stock Threshold"
            aria-describedby="defaultFormControlHelp"
            />
            <div id="defaultFormControlHelp mb-3" class="form-text">
                Alert me when stock gets to this level.
            </div>
            <input
            type="text"
            class="form-control mt-3 mb-3"
            id="defaultFormControlInput"
            placeholder="SKU"
            aria-describedby="defaultFormControlHelp"
            />
            
            <div class="">
                <small class="text-light fw-semibold">Availability</small>
                <div class="form-check mt-1">
                    <input name="stock" class="form-check-input" type="radio" value="" id="in-stock">
                    <label class="form-check-label" for="in-stock"> Instock </label>
                </div>
                <div class="form-check">
                    <input name="stock" class="form-check-input" type="radio" value="" id="out-of-stock" checked="">
                    <label class="form-check-label" for="out-of-stock"> Out of Stock </label>
                </div>
                
                </div>
            </div>
        </div>
      <div class="card mb-4">
        <h5 class="card-header">SEO</h5>
        <div class="card-body">
            <input
            type="text"
            class="form-control mb-3"
            id="defaultFormControlInput"
            placeholder="Meta Title"
            aria-describedby="defaultFormControlHelp"
          />
            <div>
                <label for="exampleFormControlTextarea1" class="form-label">Meta Description</label>
                <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <input
            type="text"
            class="form-control mb-3"
            id="defaultFormControlInput"
            placeholder="Keywords"
            aria-describedby="defaultFormControlHelp"
          />
          <div id="defaultFormControlHelp" class="form-text">
            3 words that best describe this product.
          </div>
        </div>
      </div>
    </div>
</div>