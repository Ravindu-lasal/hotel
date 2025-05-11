@extends('admin.layouts.master')

@section('content')
    <div class="pagetitle">
        <h1>{{$role->name}}</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item">Roles</li>
            <li class="breadcrumb-item active">{{$role->name}}</li>
        </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Assign Permissions</h5>
                        <form action="{{ url ('givepermissionsassign')}}" method="POST">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="roleid" value="{{$role->id}}">
                            <div class="row g-3">
                                @foreach ($permissions as $permission)
                                    <div class="col-md-4">
                                        <input 
                                            type="checkbox" 
                                            id="permission{{$permission->id}}" 
                                            name="permissions[]" 
                                            value="{{$permission->name}}" 
                                            {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }}>

                                        <label for="permission{{$permission->id}}" class="form-label">{{$permission->name}}</label>
                                        
                                    </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Assign Permissions</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
  <!-- End Page Title -->

  

