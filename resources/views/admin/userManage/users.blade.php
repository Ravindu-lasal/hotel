@extends('admin.layouts.master')

@section('content')
<div class="pagetitle">
    <h1>Permissions</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Permissions</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <!-- Extra Large Modal -->
  <div class="d-flex justify-content-end mb-3">
    <button
      type="button"
      class="btn btn-primary"
      data-bs-toggle="modal"
      data-bs-target="#AddpermissionsModal">
      Add Users Deatils
    </button>
  </div>

@include('admin.userManage.addusers')

  <!-- End Extra Large Modal-->


   <!-- Start room details section-->
      <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!-- Table with stripped rows -->
              <table class="table datatable table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>User name</th>
                    <th>User email</th>
                    <th>User Role Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($users as $user)
                       <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                {{$role->name}}
                            @endforeach
                        <td>
                            <div class="d-flex justify-content-center align-items-center gap-3">
                                        <!-- Edit button -->
                                <a href="#" data-bs-toggle="modal" data-bs-target="#{{$user->id}}Modal">
                                    <i class="bi bi-pencil-square fs-3 text-primary"></i>
                                </a>
                                
                                        <!-- Delete button -->
                                <a href="userdelete/{{$user->id}}" onclick="return confirm('Are you sure you want to Delete this Booking?')">
                                    <i class="bi bi-x-square fs-4 text-danger"></i>
                                </a>
                            </div>
                        </td>
                                
                                @include('admin.userManage.editusers') 
                       </tr>
                   @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End room details section-->
@endsection