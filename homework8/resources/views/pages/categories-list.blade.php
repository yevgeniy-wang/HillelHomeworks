@extends('layout')

@section('title', 'Categories')

@section('content')
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Actions</th>
        </tr>
        @forelse($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->title}}</td>
                <td>{{$category->slug}}</td>
                <td>
                    <p><a href="categories-delete.php?id={{$category->id}}">Delete</a></p>
                    <p><a href="categories-update.php?id={{$category->id}}">Update</a></p>
                </td>
            </tr>

        @empty
            <p>no categories</p>
        @endforelse
    </table>
    <a class="btn btn-secondary" href="categories-create.php">Add new category</a>