<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center mt-4 mb-4">{{ $post->title }}</h1>
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-4">
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning mx-1">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline mx-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary mx-1">Back to Posts</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
