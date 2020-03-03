@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Article
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('articles.update', $article->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Article Title:</label>
                    <input type="text" class="form-control" name="title" value={{ $article->title }} />
                </div>
                <div class="form-group">
                    <label for="price">Article Body :</label>
                    <input type="text" class="form-control" name="body" value={{ $article->body }} />
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
