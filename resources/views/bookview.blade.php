@extends('layouts.app')

@section('content')
<div id="wrapper" class="text-center">
    <h1> {{ $book[0]->title }} </h1>
</div>

<table class="table table-dark text-center">
    <thead>
        <th>Id</th>
        <th>Author</th>
        <th>Subtitle</th>
        <th>Description</th>
        <th>Available to Checkout</th>
    </thead>
    <tbody>
        <tr>
            <td>
                {{ $book[0] -> id }}
            </td>
            <td>
                {{ $book[0]->author }}
            </td>
            <td>
                {{ $book[0]->subtitle }}
            </td>
            <td>
                {{ $book[0]->description }}
            </td>
            <td>
                {{ $book[0]->available }}
            </td>

        </tr>
    </tbody>

</table>


    @if(Auth::User() != null)
        @if($book[0]->available)
        <div class="form-group row">
            <div class="offset-sm-3">
                <form method="POST" action="checkout">
                    @csrf
                         <input type="hidden" name="book_id" value="{{ $book[0]->id }}" />
                         <input type="submit" type="submit" class="btn btn-primary" value="Checkout" />
                </form>
            </div>
        </div>
        @endif
        @if(Auth::User()->librarian)
            @if(!$book[0]->available)
                <div class="form-group row">
                     <div class="offset-sm-3">
                        <form method="POST" action="update">
                            @csrf
                                <input type="hidden" name="book_id" value="{{ $book[0]->id }}" />
                                <input type="submit" type="submit" class="btn btn-primary" value="Checkin" />
                        </form>
                    </div>
                </div>
            @endif
        @endif

    @endif

   
@endsection