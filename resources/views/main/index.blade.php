@extends('layouts.layout')

@section('main')

<main class="container rounded-5 px-5 py-4 w-75 mx-auto mt-5 shadow-sm">
    <h3 class="text-center mb-4">Library Management</h3>

    {{--  Success or Error Messages
    @if (Session::has('success-status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success-message') }}
        </div>
    @elseif (Session::has('delete-status'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('delete-message') }}
        </div>
    @endif  --}}

    {{-- Add Book Button --}}
    <div class="mt-4 justify-content-between d-flex px-4    ">
        <form action="{{ route('showpage') }}" method="GET" class="d-flex">
            <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Serchh....">
            <button type="sumbit" class="btn btn-primary text-light ml-2">Serch</button>
        </form>
        <a href="{{ route('exportPdf') }}" class="btn btn-outline-dark">Exsport PDF</a>
        <a href="{{ route('addpage') }}" class="btn btn-primary">Add Book</a>
    </div>

    {{-- Book List Table --}}
    <div class="">

    </div>

    <div class="table-responsive mt-5">
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

                            <a href="{{ route('edit', $item->id) }}" class="btn btn-warning">Edit</a>

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
