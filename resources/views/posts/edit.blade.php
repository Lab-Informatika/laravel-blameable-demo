@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Post</div>

                    <div class="card-body">
                        <form action="{{ route('posts.update', $post) }}" method="post">

                            @method('patch')

                            @include('posts.partials.fields')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
