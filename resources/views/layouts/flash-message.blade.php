
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block" id="successMessage" style="background: #3ae73a;height: 25px;">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block" style="background: red;height: 25px;">
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
