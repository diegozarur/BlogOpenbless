@extends('blog.master')
@section('body')



<h1>Contato OpenBless</h1>

<div class="post-container container">
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif


{!! Form::open(array('url' => 'enviar', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('nome', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us!', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}

</div>

@stop