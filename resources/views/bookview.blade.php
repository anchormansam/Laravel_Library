@extends('layouts.app')



@section('content')
<h1> {{ $book[0]->title }} </h1>

<table>
    <thead>
        <th>Author</th>
        <th>Subtitle</th>
        <th>Description</th>
    </thead>
    <tbody>
        <tr>
            <td>
                {{ $book[0]->author }}
            </td>
            <td>
                {{ $book[0]->subtitle }}
            </td>
            <td>
                {{ $book[0]->description }}
            </td>
        </tr>
    </tbody>

</table>

@endsection