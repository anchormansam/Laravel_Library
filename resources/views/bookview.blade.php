@extends('layouts.app')



@section('content')

<!-- @if(Auth::User()->librarian) -->

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

    <div class="form-group row">
         <div class="offset-sm-3">
            <form method="POST" action="checkout">
             @csrf
                <input type="hidden" name="book_id" value="{{ $book[0]->id }}" />
            
                <input type="submit" type="submit" class="btn btn-primary" value="Checkout" />
             </form>
         </div>
     </div>
<!-- @endif -->

@endsection