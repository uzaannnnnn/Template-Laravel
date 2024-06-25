@extends('layouts.layout')

@section('main')

<div class="container">
    <div class="header">
        <h1>book Update</h1>
        <a href="{{ url('book') }}" class="btn-back">Back</a>
    </div>
    <form action="{{ url('book/'.$book->id.'') }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ $book->title }}">
            @error('title')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" id="author" name="author" value="{{ $book->author }}">
            @error('author')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" id="publisher" name="publisher" value="{{ $book->publisher }}">
            @error('publisher')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="published_date">Published Date</label>
            <input type="date" id="published_date" name="published_date" value="{{ $book->published_date }}">
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" id="stock" name="stock" value="{{ $book->stock }}">
            @error('stock')
            <span style="color: red">{{ $message }}</span>
        @enderror
        </div>
        <div class="form-group">
            <button type="submit">Save</button>
        </div>
    </form>
</div>

@endsection
