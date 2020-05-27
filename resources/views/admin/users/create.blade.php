@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div>
                    <strong class="ml-2">
                        Create User
                    </strong>
                </div>

            </div>
        </div>
        <div class="card-body">

            {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}

                <div class='form-group'>
                {!! Form::label('name','Name : ') !!}
                {!! Form::text('name',null, ['class' => 'form-control']) !!}
                </div>

                <div class='form-group'>
                    {!! Form::label('email','Email : ') !!}
                    {!! Form::text('email',null, ['class' => 'form-control']) !!}
                </div>

                <div class='form-group'>
                    {!! Form::label('phone_number','Phone : ') !!}
                    {!! Form::text('',null, ['class' => 'form-control']) !!}
                </div>

                <div class='form-group'>
                    {!! Form::label('role_id','Role : ') !!}
                    {!! Form::select('role_id',[''=>'Choose Options..']+$roles,null, ['class' => 'form-control']) !!}
                </div>

                <div class='form-group'>
                    {!! Form::label('is_active','Status : ') !!}
                    {!! Form::select('is_active',array(1=>'Active', 0=>'Not Active'),0, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password','Password : ') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('photo_id','Photo KTP : ') !!}
                    <br>
                    {!! Form::file('photo_id', null,['class'=>'form-control']) !!}
                </div>

                @include('includes.error_form')

                <div class='form-group'>
                {!! Form::submit('Submit', ['class'=>'btn btn-primary float-right']) !!}
                </div>


            {!! Form::close() !!}
            {{-- <form action="{{route('admin.users.store')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">User</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <button class="btn btn-success float-right">Create User</button>
            </form> --}}
        </div>
    </div>
@endsection
