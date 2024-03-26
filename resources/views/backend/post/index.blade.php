<x-app-layout>
    <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Posts</h5>
                <a href="{{ route('post.create') }}" class="btn btn-primary">Create Post</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Views</th>
                            <th>Tags</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post )
                            <tr>
                            <td>{{ $post->id }}</td>
                            <td><img src="{{ asset($post->image) }}" width="100" alt=""></td>
                            <td>{{ $post->title }}</td>
                            <td>
                                @foreach ($post->categories as $category )
                                <b class="badge bg-light">{{ $category->name }}</b>
                                @endforeach
                            </td>
                            <td>{{ $post->views }}</td>
                            <td>{{ $post->tags }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td><a href="{{ route('post.edit', $post->id)}}" class="btn btn-primary">Edit</a></td>
                            <td><a href="#" class="btn btn-primary">Delete</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
    </div>
</x-app-layout>
