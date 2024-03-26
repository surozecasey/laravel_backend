<x-app-layout>
    <<div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5 class="card-title">Category</h5>
            <a href="{{ route('category.create') }}" class="btn btn-primary">Create Category</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Category</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td><a href="{{route('category.edit',$category->id) }}">Edit</a>  <a href="">Delete</a></td>
                        </tr>
                    @endforeach

                </tbody>

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
