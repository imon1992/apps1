@extends('task1.layout')

@section('content')
    {{ $errors->first('name'); }}
    {{ $errors->first('message');}}
    {{--{{ $errors->second('message'); }}--}}

    <form class="form-horizontal" method="post" action="">
        <div class="form-group">
            <label for="FullName" class="col-sm-2 control-label">Name</label>
            <div class=" col-md-5">
                <input type="text" class="form-control" id="FullName" name="name">
            </div>
        </div>

        <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Message</label>
            <div class=" col-md-5">
                <textarea class="form-control " rows="3" id="message" name="message" ></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2  col-md-5">
                <button type="submit" class="btn btn-default">Send</button>
            </div>
        </div>
    </form>

@stop
