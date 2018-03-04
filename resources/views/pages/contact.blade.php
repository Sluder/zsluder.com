@extends('layouts.base')

@section('content')
    <div class="contact content">
        <div class="container">
            <div class="col-md-8">
                <div class="sub-header">
                    <p>Contact Me</p>
                </div>
                @if (Session::has('message'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        </div>
                    </div>
                @endif
                @foreach ($errors->all() as $error)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        </div>
                    </div>
                @endforeach

                <form action="{{ route('contact.submit') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Name</label>
                        {{ Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) }}
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
                    </div>
                    <div class="form-group">
                        <label for="Message">Message</label>
                        {{ Form::textarea('message', null, ['class' => 'form-control', 'required' => 'required']) }}
                    </div>
                    <button class="btn" type="submit">Submit</button>
                </form>
            </div>
            <div class="col-md-4 sidebar">
                <h4 class="accent">Zachary Sluder</h4>
                <p><i class="fa fa-envelope"></i> {{ env('MAIL_USERNAME') }}</p>
                <p><i class="fa fa-phone"></i> (740) 463-1150</p>
                <p><i class="fa fa-map-marker"></i> Dayton Ohio, United States</p>
            </div>
        </div>
    </div>
@endsection
