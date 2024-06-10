@extends('layouts.layout')

@section('main')

    <main class="container border border-4 border-top-0 border-bottom-0 border-primary rounded-5 px-5 py-4 w-75 mx-auto mt-5"
        style="height: 600px;">
        <h3 class="">Library Management</h3>

        <div class="mt-4 justify-content-end d-flex px-4">
            <a href="{{ route('addpage') }}"><button class="btn btn-primary text-light">Add</button></a>
        </div>

        <table class="table table-hover rounded-5 table-bordered w-100 mx-auto mt-5 text-center">
            <thead class="table-primary">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Published Date</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->author }}</td>
                        <td>{{ $item->published_date }}</td>
                        <td>{{ $item->publisher }}</td>
                        <td>{{ $item->stock }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}

    </main>
@endsection
