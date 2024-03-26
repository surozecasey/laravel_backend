<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>Post</h5>
            <a href="{{ route("post.index") }}" class=btn btn-primary>Go Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Title<span>*</span></label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $post->title }}">
                </div>

                <div class="form-group">
                    <label for="description">Description <span>*</span></label>
                    <textarea name="description" class="summernote" value="{{ $post->description }}"></textarea>
                </div>

                <div class="form-group">
                    <label for="tags">Tag <span>(Optional)</span></label>
                    <input id="tags" class="form-control" type="text" name="tag" value="{{ $post->tags }}">
                </div>

                <div class="form-group">
                    <label for="image">Image <span>*</span></label>
                    <input id="image" class="form-control" type="file" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>




            </form>
        </div>
    </div>
</x-app-layout>
