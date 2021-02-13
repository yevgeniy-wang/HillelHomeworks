@extends('layout')

@section('title', 'Posts')

@section('content')
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Body</th>
            <th>Category ID</th>
            <th>Actions</th>
        </tr>
        @forelse($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->category_id}}</td>
                <td>
                    <p><a href="posts-delete.php?id={{$post->id}}">Delete</a></p>
                    <p><a href="posts-update.php?id={{$post->id}}">Update</a></p>
                </td>
            </tr>

        @empty
            <p>no posts</p>
        @endforelse
    </table>
    <a class="btn btn-secondary" href="posts-create.php">Add new post</a>