@extends('layouts.layout')

@section('title')
new form page
@endsection

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
    {{-- here we call the `store` method of form controller --}}
    <form action="{{ route('form.store') }}" method="post">
        {{-- here we take @csrf directive , which is mandatory for any form --}}
        @csrf
        <div class="card-body">
            <fieldset class="fieldset">

                <label class="label">Name</label>
                <input type="text" class="input" placeholder="jhon era" name="name" value="{{ old('name') }}" />
                @error('name')
                    <div class="text-red-400">{{ $message }}</div>
                @enderror

                <label class="label">Email</label>
                <input type="email" class="input" placeholder="jhonera@google.com" name="email"
                    value="{{ old('email') }}" />
                @error('email')
                    <div class="text-red-400">{{ $message }}</div>
                @enderror

                <label class="label">Password</label>
                <input type="password" class="input" placeholder="Password" name="password" />
                @error('password')
                    <div class="text-red-400">{{ $message }}</div>
                @enderror

                <label class="label">Confirm Password</label>
                <input type="password" class="input" placeholder="Confirm Password" name="confirm_password" />
                @error('confirm_password')
                    <div class="text-red-400">{{ $message }}</div>
                @enderror

                <button class="btn btn-success mt-4" type="submit">Sign-up</button>
                @if($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                @endif
            </fieldset>
        </div>
    </form>
    <div>

    </div>
</div>
</div>
@endsection