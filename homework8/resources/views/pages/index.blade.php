@extends('layout')

@section('title', 'Homepage')

@section('content')
    <h2 class="m-3">Homepage</h2>

    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="categories-list.php">Categories</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="posts-list.php">Posts</a>
        </li>
    </ul>