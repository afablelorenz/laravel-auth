@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)


                    <tr>
                        <th>{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->author}}</td>
                        <td>{{$post->date}}</td>
                        <td>
                            <a href="{{route('admin.posts.show',$post)}}" class="btn">Show</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @dump($posts)
        <div>
            <ul>


            </ul>
        </div>
    </div>
</div>
@endsection
