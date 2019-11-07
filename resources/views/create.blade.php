@extends('layouts.app')

@section('content')


<h2>Book Queue</h2>
 
 <form method="post" action="" enctype="multipart/form-data">
     {{ csrf_field() }}
     <div class="form-group row">
         <label for="titleid" class="col-sm-3 col-form-label">Book Title</label>
         <div class="col-sm-9">
             <input name="title" type="text" class="form-control" id="title" placeholder="Book Title">
         </div>
     </div>
     <div class="form-group row">
         <label for="authorid" class="col-sm-3 col-form-label">Author</label>
         <div class="col-sm-9">
             <input name="author" type="text" class="form-control" id="author"
                    placeholder="Author">
         </div>
     </div>
     <div class="form-group row">
         <label for="authorid" class="col-sm-3 col-form-label">Subtitle</label>
         <div class="col-sm-9">
             <input name="subtitle" type="text" class="form-control" id="subtitle"
                    placeholder="Subtitle">
         </div>
     </div>
     <div class="form-group row">
         <label for="authorid" class="col-sm-3 col-form-label">Description</label>
         <div class="col-sm-9">
             <input name="description" type="text" class="form-control" id="description"
                    placeholder="Description">
         </div>
     </div>


     <div class="form-group row">
         <div class="offset-sm-3 col-sm-9">

         
             <button type="submit" class="btn btn-primary">Submit</button>
         </div>
     </div>
 </form>

@endsection 