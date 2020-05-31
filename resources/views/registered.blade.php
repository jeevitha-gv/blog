@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">USER DATA</div>

                <div class="card-body">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Created Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>
        @foreach($users as $row)
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
              <td>{{ $row->created_at }}</td>
              <td><a href="/user-edit/{{ $row['id'] }}" class="btn btn-success" style="color: white;background-color: #21579B;">Update</a>
                   <a href="/user-delete/{{ $row['id'] }}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
        
      
    </tbody>
    </table>
    </div>
  </div>
</div>
</div>
</div>
</div>
    @endsection

    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
