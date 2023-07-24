@extends('layouts/master')

@section('title', 'Users')

@section('content')
<!-- Invoice table -->
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row ">
                <div class="col-auto me-auto ">
                    <h5 class="mb-0">List Data Users</h5>
                </div>
                <div class="col-auto">
                    @can('users.create')
                    <a href="{{ route('users.create') }}" class="btn btn-primary">Create</a>
                    @endcan

                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover zero-configuration">
                    <thead>
                        <tr>
                            <th width='10px' style="text-align: center">No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th width='150px' class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($users as $user)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role->title ?? "--"}}</td>
                            <td class="text-center">
                                @can('users.show')
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-icon btn-success btn-sm">
                                    <span class="ti ti-eye"></span>
                                </a>
                                @endcan
                                @can('users.edit')
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-icon btn-warning btn-sm">
                                    <span class="ti ti-edit"></span>
                                </a>
                                @endcan
                                @can('users.delete')
                                <form action="{{ route('users.destroy', $user->id) }}" class="d-inline-block"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="btn btn-icon btn-danger btn-sm">
                                        <span class="ti ti-trash"></span>
                                    </button>
                                </form>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /Invoice table -->
@endsection
