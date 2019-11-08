@extends('layouts.app')

@section('content')

<div id="wrapper2" class="text-center">
    <h2>Index of Books</h2>
</div>   

    <table class="table">
        <thead class="thead-dark text-center">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Subtitle</th>
                <th>Description</th>
            </tr>
        </thead>
    @foreach ($books as $book)
    <tbody class="tbody-light text-center">
        <tr>
            <td>
                <a href="/bookview/{{ $book->title }}">{{ $book->title }}</a>
            </td>
            <td>
                {{ $book->author }}
            </td>
            <td>
                {{ $book->subtitle }}
            </td>
            <td>
                {{ $book->description }}
            </td>
        </tr>
    </tbody>

    @endforeach

    </table>

@endsection 
