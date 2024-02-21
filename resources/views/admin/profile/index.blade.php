@extends('layouts.admin')

@section('title', 'Profile | Vasinfor')

@section('css')
<style type="text/css">
    .disable-links {
        pointer-events: none;
    }
</style>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account /</span> My Profile</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                @if(Auth::user()->gender == 'male')
                                <img src="{{ Auth::user()->profile_photo_path != null ? asset(Auth::user()->profile_photo_path) : asset('image/avatars/1.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                @elseif(Auth::user()->gender == 'female')
                                <img src="{{ Auth::user()->profile_photo_path != null ? asset(Auth::user()->profile_photo_path) : asset('image/avatars/2.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                @else
                                <img src="{{ Auth::user()->profile_photo_path != null ? asset(Auth::user()->profile_photo_path) : asset('image/avatars/3.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                @endif
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="upload" name="image" class="account-file-input" hidden accept="image/png, image/jpeg, image/jpg" onchange="readURL(this);" />
                                    </label>
                                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>
                                    <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input class="form-control" type="text" id="name" name="name" value="{{ Auth::user()->name }}" autofocus />
                                    @error('name')
                                    <div class="mb-2 mt-2 font-medium text-sm text-red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-control" type="text" id="gender" name="gender" value="{{ Auth::user()->gender }}">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                    @error('gender')
                                    <div class="mb-2 mt-2 font-medium text-sm text-red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control" type="text" name="email" id="email" value="{{ Auth::user()->email }}" placeholder="email@example.com" readonly />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="role" class="form-label">Role</label>
                                    <input class="form-control" type="text" id="role" name="role" value="{{ ucfirst(Auth::user()->role) }}" autofocus readonly />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="dob" class="form-label">Date of birth</label>
                                    <input class="form-control" type="date" id="dob" name="dob" value="{{ Auth::user()->dob }}" autofocus />
                                    @error('dob')
                                    <div class="mb-2 mt-2 font-medium text-sm text-red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{ Auth::user()->address }}" />
                                    @error('address')
                                    <div class="mb-2 mt-2 font-medium text-sm text-red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phone">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">VN (+84)</span>
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="0941232134" value="{{ Auth::user()->phone }}" />
                                    </div>
                                    @error('phone')
                                    <div class="mb-2 mt-2 font-medium text-sm text-red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card">
                    <h5 class="card-header">Change password</h5>
                    <div class="card-body">
                        <form action="{{ route('admin.user.change.password') }}" method="post">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="current_password" class="form-label">Current Password</label>
                                    <input class="form-control" type="text" id="current_password" name="current_password" />
                                    @error('current_password')
                                    <div class="mb-2 mt-2 font-medium text-sm text-red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <input class="form-control" type="text" id="new_password" name="new_password" />
                                    @error('new_password')
                                    <div class="mb-2 mt-2 font-medium text-sm text-red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="confirm_new_password" class="form-label">Confirm New Password</label>
                                    <input class="form-control" type="text" id="confirm_new_password" name="confirm_new_password" />
                                    @error('confirm_new_password')
                                    <div class="mb-2 mt-2 font-medium text-sm text-red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mt-5">
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                        @if(Auth::user()->status == \App\Enums\Status::ACTIVE_ACCOUNT)
                        <div class="mb-3 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                                <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" onchange="deleteUserHandle(this)" />
                            <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                        </div>
                        <a href="{{ route('admin.user.delete') }}" class="btn btn-danger disable-links" id="buttonDelete">Deactivate Account</a>
                        @else
                        <div class="mb-3 col-12 mb-0">
                            <div class="alert alert-danger">
                                <h6 class="alert-heading fw-bold mb-1">Your account is still alive but after <span id="countDownDelete" style="font-size:20px"></span> it will be deleted!</h6>
                                <p class="mb-0">Once you can recover your account right now. Please click on below for recover it.</p>
                            </div>
                        </div>
                        <a href="{{ route('admin.user.recovery') }}" class="btn btn-primary">Recovery Account</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    <?php if (isset($delayDate)) { ?>
        const delayDate = Date.parse('<?php echo $delayDate; ?>');
        var countDownDate = new Date(delayDate).getTime();
        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("countDownDelete").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countDownDelete").innerHTML = "EXPIRED";
            }
        }, 1000);
    <?php } ?>;
</script>
@endsection