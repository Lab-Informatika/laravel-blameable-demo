@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Posts
                </div>

                <div class="card-body">
                    <div class="text-right mb-3">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm">
                            Create
                        </a>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Created By</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->createdBy->name }}</td>
                                    <td>
                                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-info btn-sm">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No Data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
