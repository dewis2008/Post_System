<x-layout>
    <div class="container">
        @foreach($posts as $post)
            <div class="card mb-4 mt-4">
                <div class="card-body text-center">
                    <h5 class="card-title mb-3">{{ $post->title }}</h5>
                    <p class="card-text mb-4">{{ Str::limit($post->content, 100) }}</p>
                    
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-info mx-1">View</a>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning mx-1">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mx-1" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center mb-4">
            <a href="{{ route('posts.create') }}" class="btn btn-primary mt-3">Create New Post</a>
        </div>
    </div>
</x-layout>