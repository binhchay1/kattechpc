@extends('layouts.admin')

@section('title', 'Users | Vasinfor')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl container-p-y">
        <h4 class="fw-bold py-3 mb-4">Users</h4>
    </div>
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Avatar</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Date of birth</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach($users as $user)
                                <tr>
                                    <td><strong>{{ $user->id }}</strong></td>
                                    <td>{{ $user->name }}</td>
                                    <td class="d-flex justify-content-center">
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li></li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up ml-3" title="{{ $user->name }}">
                                                @if(strtolower($user->gender) == 'male')
                                                <img src="{{ $user->profile_photo_path != null ? asset($user->profile_photo_path) : asset('image/avatars/1.png') }}" alt="user-avatar" class="rounded-circle" />
                                                @elseif(strtolower($user->gender) == 'female')
                                                <img src="{{ $user->profile_photo_path != null ? asset($user->profile_photo_path) : asset('image/avatars/2.png') }}" alt="user-avatar" class="rounded-circle" />
                                                @else
                                                <img src="{{ $user->profile_photo_path != null ? asset($user->profile_photo_path) : asset('image/avatars/3.png') }}" alt="user-avatar" class="rounded-circle" />
                                                @endif
                                            </li>
                                        </ul>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ ucfirst($user->gender) }}</td>
                                    <td>{{ $user->dob }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ ucfirst($user->role) }}</td>
                                    @if($user->status == 1)
                                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                                    @else
                                    <td><span class="badge bg-label-warning me-1">Deleting</span></td>
                                    @endif
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @if ($users->hasPages())
                <div class="col-12 clearfix text-right d-flex justify-content-end">
                    {{ $users->appends($_GET)->links("pagination::bootstrap-4") }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection