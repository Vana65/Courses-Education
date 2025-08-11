@extends('theme.master')
@section('title', '-My Blogs')
@section('content')
    @include('theme.partials.hero', ['title' => 'My Blogs'])
    <div class="container my-5">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-body">
                <table class="table table-striped table-hover table-bordered align-middle text-center">
                    <thead class="table">
                        <tr>
                            <th scope="col">title</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($blogs) > 0)
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td>
                                        <a class="text-dark" href="#" target="_blank">{{ $blog->name }}</a>
                                    </td>
                                    <td><a href="#" class="btn btn-warning btn-sm me-2">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                    </tbody>
                </table>
                @if (count($blogs) > 0)
                    {{ $blogs->links('pagination::bootstrap-4') }}
                @endif

            </div>
        </div>
    </div>
@endsection
