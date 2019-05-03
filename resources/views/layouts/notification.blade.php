{{--success--}}
@if(Session::has('success'))
<div>
    <div class="session alert alert-success" role="alert" id="session">
        <div class="container">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> {{Session::get('success')}}
        </div>
    </div>
</div>
@endif

@if(Session::has('danger'))
<div>
    <div class="session alert alert-danger" role="alert" id="session">
        <div class="container">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Failed!</strong> {{Session::get('danger')}}
        </div>
    </div>
</div>
@endif