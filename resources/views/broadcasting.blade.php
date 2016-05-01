@extends('layouts.app')

@section('content')
    <script src="http://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/3.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.log = function(message) {
            if (window.console && window.console.log) {
                window.console.log(message);
            }
        };

        var pusher = new Pusher('eba16a6dd6c34de5f856');
        var channel = pusher.subscribe('test_channel');

        channel.bind('App\\Events\\ShowMessage', function(data) {
            console.log(data);
            $('#messages').append('<div class="alert alert-' + data.type + '">' + data.message + '</div>');
        });
    </script>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Broadcasting</div>

                    <div id="messages" class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection