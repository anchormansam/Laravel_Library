@extends('layouts.app')

@section('content')


<h2>Index of Books</h2>
    
    <table>
     
    @foreach ($books as $book)
        <tr>
            <td>
                {{ $book->title }}
            </td>
            <td>
                {{ $book->author }}
            </td>
            <td>
                {{ $book->subtitle }}
            </td>
        </tr>
    @endforeach

    </table>

     <div class="form-group row">
         <div class="offset-sm-3 col-sm-9">
             <button type="submit" class="btn btn-primary">Add to Library</button>
         </div>
     </div>
 </form>

@endsection 
