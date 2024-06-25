@extends('layouts.layout')

@section('main')

<main class="container rounded-5 px-5 py-4 w-75 mx-auto mt-5 shadow-sm">
    <h3 class="text-center mb-4">Library Management</h3>

    {{-- Add Book Button --}}
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('addpage') }}" class="btn btn-primary">Add Book</a>
    </div>

    {{-- Success or Error Messages --}}
    @if (Session::has('success-status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success-message') }}
        </div>
    @elseif (Session::has('delete-status'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('delete-message') }}
        </div>
    @endif

    {{-- Book List Table --}}
    <div class="table-responsive">
        <table class="table table-hover table-bordered rounded-5 w-100 mx-auto text-center">
            <thead class="table-primary">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Published Date</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->author }}</td>
                        <td>{{ $item->published_date }}</td>
                        <td>{{ $item->publisher }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>
                            <a href="library/{{ $item->id }}/read" class="btn btn-sm btn-primary">Show</a>
                            <a href="{{ route('library.edit', ['id' => $item->id]) }}" class="btn btn-sm btn-primary">Update</a>

                            <form action="library-destroy/{{ $item->id }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Pagination Links --}}
    {{ $data->links() }}

</main>

@endsection
