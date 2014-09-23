@extends('layouts/default')
@section('body')

{{ Form::open(array('url' => 'login', 'method' => 'post')) }}
                <div class="body bg-gray">
                @if(Session::has('error'))
                    <p class="alert alert-info">{{ Session::get('error') }}</p>
                @endif
                
                    @foreach($errors->get('userid') as $message)
                   <p class="errors"> {{ $message}} </p>
                    @endforeach
                
                    <div class="form-group">
                        <input type="text" name="userid" class="form-control" placeholder="User ID"/>
                    </div>
                    
                    @foreach($errors->get('password') as $message)
                    <p class="errors"> {{ $message}} </p>
                    @endforeach
                
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button> 
                </div>
{{ Form::close() }}  

@stop