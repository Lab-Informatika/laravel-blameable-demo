@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@csrf

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $post->title) }}">
</div>

<div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" class="form-control" id="content" rows="3">{{ old('content', $post->content) }}</textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
