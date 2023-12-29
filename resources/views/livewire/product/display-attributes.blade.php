<div class="card mb-4">
    <h5 class="card-header">Attributes</h5>
    <div class="card-body">
      <table class="table">
        <thead>
            <th>Name</th>
            <th>Slug</th>
            <th>Options</th>
        </thead>
        <tbody>
            @foreach($attributes as $attribute)

            <tr>
                <td>{{ $attribute['name'] }}</td>
                <td>{{ $attribute['slug'] }}</td>
                <td>{{ $attribute['values'] }}</td>
                
            </tr>

            @endforeach
            
        </tbody>
      </table>
    </div>
</div>