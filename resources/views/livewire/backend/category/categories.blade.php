
<div class="card mb-4">
    <h5 class="card-header">Available Categories</h5>
    <div class="row">
        <div class="col-lg-12">
          @if(session()->has('permission'))
            <div class="alert alert-danger">
              {{ session('permission') }}
            </div>
          @endif
            <div class="table-responsive text-nowrap">
                <table class="table card-table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>NAME</th>
                      <th>PRODUCTS</th>
                      <th>ADDED ON</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    @forelse ($categories as $category)
                    <tr id="{{ $category->id }}">
                        <td><a href="{{ route('category.destroy',$category->id) }}" style="text-decoration:underline;">{{ $category->id }}</a></td> 
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->products->count() }}</td>
                        <td><span class="">{{ $category->created_at->toDayDateTimeString() }}</span></td>
                        <td><a wire:navigate class="dropdown-item" href="{{ route('category.destroy',$category->id) }}"><span style="color:red"><i class="bx bx-trash me-1"></i>Delete</span></a></td>
                    </tr>
                    @empty
                        <tr>
                            <td>You don't have any categories yet!</td>
                        </tr>   
                    @endforelse
                  </tbody>
                </table>
              </div>
        </div>
    </div> 
</div>
