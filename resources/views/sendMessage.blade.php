@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Send Broadcast Message</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/send-message') }}">
                        {!! csrf_field() !!}

                        @if(session()->has('ok'))
                            <div class="alert alert-success">Enviado com sucesso!</div>
                        @endif

                        <div class="form-group">
                            <label class="col-md-4 control-label">Type</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="type">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Message</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="message">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
