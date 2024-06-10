@extends('layouts.layout')

@section('content')

<div class="container myy-2">
    <h2>Book List</h2>

    <div class="mb-3 justify-content-end">
        <a href="{{ route('addpage') }}" class="btn btn-primary">Add Book</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publised Date</th>
                <th>Publiser</th>
                <th>Stock</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($books as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->author }}</td>
                    <td>{{ $item->published_date }}</td>
                    <td>{{ $item->publisher }}</td>
                    <td>{{ $item->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
