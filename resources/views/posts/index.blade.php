@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <a href="/posts/create" type="button" class="btn btn-primary" style="margin-bottom: 15px;">Add New Record</a>
                <div class="card">
                    <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Title </th>
                                <th> Description </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                     <tbody>
                     @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->Title }}</td>
                                        <td>{{ $post->Description }}</td>
                                        <td><a href="/posts/{{ $post->id }}"  type="button" class="btn btn-success">View</a></td>
                                        <td> <a  href="/posts/{{$post->id}}/edit" class="btn btn-primary"> Edit </a> </td>
                                        <td>
                                        <form method="POST" action=" {{ route('posts.destroy', $post->id)}}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        </td>
                                    </tr> 
                    @endforeach
                     </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

<script>
    var app = @json($posts);
    console.log(app)
    </script>

@endsection