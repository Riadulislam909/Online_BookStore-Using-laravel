@extends('backend.layouts.master')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Manage Users
      </div>
      <div class="card-body">
        @include('backend.partials.messages')
        <table class="table table-hover table-striped"  id="dataTable">
          <thead>
            <tr>
              <th>#</th>
              <th>User First Name</th>
              <th>Email</th>
              <th>Phone No</th>
              <th>Street Address</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>#</td>
              
              <td>{{ $user->first_name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->phone_no }}</td>
              <td>{{ $user->street_address }}</td>
              
              <td>
                
                <a href="#deleteModal{{ $user->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{!! route('admin.user.delete', $user->id) !!}"  method="post">
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-danger">Permanent Delete</button>
                        </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>

              </td>
            </tr>
            @endforeach
          </tbody>

         

        </table>
      </div>
    </div>

  </div>
</div>
<!-- main-panel ends -->
@endsection
