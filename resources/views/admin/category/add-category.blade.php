@extends('admin.master')
@section('body')
    <div class="container-fluid mt-5 ">
        <div class="container ">
           <div class="col-md-8 offset-2">
              <div class="row radius-20"  style="background-color: silver">
                 <div class="card-body table table-bordered">
                     <div class="card-header">
                         <h2>Category</h2>
                     </div>
                     <div class="card-body">
                         <form action="{{route('new.category')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <div>
                                 <label>Category Name</label>
                                 <input type="text" name="category_name" class="form-control">
                             </div>
                             <div>
                                 <label>Image</label>
                                 <input type="file" name="image" class="form-control">
                             </div>
                             <div>
                                 <button class="btn btn-outline-success form-control" value="submit" type="submit">Submit</button>
                             </div>
                         </form>
                     </div>
                 </div>
              </div>
           </div>
        </div>
    </div>
@endsection
