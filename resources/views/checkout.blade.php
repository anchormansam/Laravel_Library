@extends('layouts.app')

@section('content')


<h2>Index of Books</h2>
    
    <table>
     
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Subtitle</th>
            <th>Description</th>
         </tr>
    @foreach ($books as $book)
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


    @endforeach

    </table>

     <div class="form-group row">
         <div class="offset-sm-3 col-sm-9">
             <button type="submit" class="btn btn-primary">Checkout</button>
         </div>
     </div>
 </form>

@endsection 
