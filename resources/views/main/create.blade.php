@extends('layouts.layout')

@section('main')

<main class="container border border-4 border-top-0 border-button-0 border-primary rounded-5 px-5 py-4 w-75 mx-auto mt-5" style="height: 600px;">
  <h3>Add Book</h3>
  <form class="row g-3 w-75 mx-auto mt-5" action="create" method="POST">
    @csrf
    <div class="col-md-6">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" name="title" placeholder="Enter Title" id="title">
      @error('title')
      <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
      <label for="author" class="form-label">author</label>
      <input type="text" class="form-control @error('author') is-invalid @enderror" value="{{ old('author') }}" name="author" placeholder="Enter the author's Name" id="author">
      @error('author')
      <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
      <label for="published_date" class="form-label">published date</label>
      <input type="date" class="form-control @error('published_date') is-invalid @enderror" value="{{ old('published_date') }}" name="published_date">
      @error('published_date')
      <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
      <label for="publisher" class="form-label">publisher</label>
      <input type="text" class="form-control @error('publisher') is-invalid @enderror" value="{{ old('publisher') }}" name="publisher" placeholder="Enter the publisher's Name" id="publisher">
      @error('publisher')
      <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
      <label for="stock" class="form-label">stock</label>
      <input type="number" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') }}" name="stock" placeholder="stock" id="stock">
      @error('stock')
      <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-6 mt-5 px-4">
        <a href="{{ route('showpage') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="col-6 mt-5 justify-content-end d-flex px-4">
        <button class="btn btn-primary" type="submit">Save</button>
    </div>

  </form>
</main>

@endsection
