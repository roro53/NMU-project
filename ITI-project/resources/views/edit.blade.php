<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Posts - New Mansoura Blog</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Manage Posts</h1>
        <div class="card shadow-lg">
            <div class="card-body">
                <h2 class="card-title text-center text-secondary">Update Post</h2>
                <form action="{{ route('create_post') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="post-title" class="form-label fw-bold">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $post->title }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="post-description" class="form-label fw-bold">Description</label>
                        <textarea name="description" class="form-control" id="post-description" rows="5" required>{{ $post->description }}</textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-4">Update Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
