@extends('admin.master')
@section('body')
    <div class="container-fluid mt-5 ">
       <div class="row" >
           <div class="col-md-8 offset-2">
               <div class="card">
                   <div class="card-header">
                       <h2>Add category form</h2>
                         <p class="text-center text-red-600">{{session('message')}}</p>
                   </div>
                   <hr>
                   <div class="card-body table-responsive">
                       <table class="table table-bordered table-hover table-striped" >
                           <thead>
                                  <tr>
                                      <td>Sl</td>
                                      <td>Category Name</td>
                                      <td>Image</td>
                                      <td>Status</td>
                                      <td>Action</td>
                                  </tr>
                           </thead>
                           @foreach($categories as $category)
                           <tbody>

                                  <tr>
                                      <td>{{$loop->iteration}}</td>
                                      <td>{{$category->category_name}}</td>
                                      <td>
                                          <img src="{{asset($category->image)}}" alt="" style="height: 70px; width: 70px">
                                      </td>
                                      <td>{{$category->status==1?'Active':'Inactive'}}</td>
                                      <td class="d-flex" style="gap: 14px" >
                                          @if($category->status==1)
                                              <a href="{{route('status',['id'=>$category->id])}}" class="btn btn-outline-warning">Inactive</a>
                                          @else
                                          <a href="{{route('status',['id'=>$category->id])}}" class="btn btn-outline-success" >Active</a>
                                          @endif
                                          <a href="" class="btn btn-outline-primary" >Edit</a>
                                          <from action="" method="post">
                                              @csrf
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                          </from>
                                      </td>

                                  </tr>

                           </tbody>
                           @endforeach
                       </table>
                   </div>
               </div>
           </div>
       </div>
    </div>
@endsection
