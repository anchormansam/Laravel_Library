@extends('layouts.app')

@section('content')


<h2>Book Queue</h2>
 
 <form method="post" action="/addbook" enctype="multipart/form-data">
     {{ csrf_field() }}
     <div class="form-group row">
         <label for="titleid" class="col-sm-3 col-form-label">Book Title</label>
         <div class="col-sm-9">
             <input name="title" type="text" class="form-control" id="titleid" placeholder="Book Title">
         </div>
     </div>
     <div class="form-group row">
         <label for="authorid" class="col-sm-3 col-form-label">Author</label>
         <div class="col-sm-9">
             <input name="publisher" type="text" class="form-control" id="publisherid"
                    placeholder="Author">
         </div>
     </div>
     <div class="form-group row">
         <label for="isCheckedoutid" class="col-sm-3 col-form-label">Is it Available</label>
         <div class="col-sm-9">
             <input name="releasedate" type="text" class="form-control" id="releasedateid"
                    placeholder="Can I Checkout this book?">
         </div>
     </div>
    
     <!-- <div class="form-group row">
         <div class="offset-sm-3 col-sm-9">
             <button type="submit" class="btn btn-primary">Checkout Book</button>
         </div>
     </div> -->
     <div class="form-group row">
         <div class="offset-sm-3 col-sm-9">
             <button type="submit" class="btn btn-primary">Add to Library</button>
         </div>
     </div>
 </form>

@endsection 

