{{ Form::open(array('url' => 'signup','method' => 'post', 'class' => 'custom')) }}

@include('members._signUpForm')
{{ Form::close() }}


{{ Form::open(array('url' => 'login','method' => 'get', 'class' => 'custom')) }}
        @include('members._loginForm')
{{ Form::close() }}

