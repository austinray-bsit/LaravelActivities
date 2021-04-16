  
@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <a class="btn button btn-primary" style="margin-bottom:20px;" href="/posts/create">Create New</a>
            <a class="btn button btn-success" style="margin-bottom:20px;" href="/posts">Go Back</a>
            
            <div class="card">       
                <div class="card-body">
                    Title : {{ $post->Title }} <br>
                    Description : {{ $post->Description }} <br>
                    Created At : {{ $post->created_at }} <br>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection