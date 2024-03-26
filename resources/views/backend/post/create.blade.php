<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>Create Post</h5>
            <a href="{{ route("post.index") }}" class=btn btn-primary>Go Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Title<span>*</span></label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>

                <div class="form-group">
                    <label for="description">Description <span>*</span></label>
                    <textarea name="description" class="summernote"></textarea>
                </div>

                <div class="form-group">
                    <label for="tags">Tag <span>(Optional)</span></label>
                    <input id="tags" class="form-control" type="text" name="tags">
                </div>

                {{-- <div class="form-group">
                    <label for="category">Select Categories</label>
                    <select id="category" class="form-control" name="category[]" multiple>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" >{{ $category->name }}</option></option>
                        @endforeach
                    </select>
                </div> --}}

                <div class="form-group">
                    <label for="category">Select Categories</label>
                        <div class="pretty p-icon p-smooth">
                            @foreach ($categories as $category)
                                <input id="category" value="{{ $category->id }}" type="checkbox" class="state p-success"  name="category[]"/>
                                <label  class="state p-success">{{ $category->name }}</label>
                            @endforeach
                        </div>
                </div>

                <div class="=form=group">

                </div>
            <

                <div class="form-group">
                    <label for="image">Image <span>*</span></label>
                    <input id="image" class="form-control" type="file" name="image" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Save Record</button>


            </form>
        </div>
    </div>
</x-app-layout>
