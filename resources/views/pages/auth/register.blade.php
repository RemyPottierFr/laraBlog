@extends('layouts.app')

@section('content')
    <form method="POST" class="flex flex-col justify-center items-center my-12 shadow-md rounded py-8">
        {{ csrf_field() }}
        <label class="flex flex-col text-xl">
            <span class="font-semibold text-secondary">Name (first and lastname) :</span>
            <input required name="name" type="text" value="{{ old('name') }}" class="focus:outline-none px-2 text-secondary border-b-2 border-primary"/>
        </label>
        @if ($errors->has('name'))
            <span>{{ $errors->first('name') }}</span>
        @endif
        <label class="flex flex-col text-xl">
            <span class="font-semibold text-secondary">Job :</span>
            <input required name="job" type="text" value="{{ old('job') }}" class="focus:outline-none px-2 text-secondary border-b-2 border-primary"/>
        </label>
        @if ($errors->has('job'))
            <span>{{ $errors->first('job') }}</span>
        @endif
        <label class="flex flex-col text-xl">
            <span class="font-semibold text-secondary">Email :</span>
            <input required name="email" type="email" value="{{ old('email') }}"
                   class="focus:outline-none px-2 text-secondary border-b-2 border-primary"/>
        </label>
        @if ($errors->has('email'))
            <span>{{ $errors->first('email') }}</span>
        @endif
        <label class="flex flex-col text-xl mt-4">
            <span class="font-semibold text-secondary">Password :</span>
            <input required name="password" type="password" value="{{ old('password') }}"
                   class="focus:outline-none px-2 text-secondary border-b-2 border-primary"/>
        </label>
        @if ($errors->has('password'))
            <span>{{ $errors->first('password') }}</span>
        @endif
        <label class="flex flex-col text-xl mt-4">
            <span class="font-semibold text-secondary">Confirm password :</span>
            <input required name="password_confirmation" type="password" value="{{ old('password_confirmation') }}"
                   class="focus:outline-none px-2 text-secondary border-b-2 border-primary"/>
        </label>
        @if ($errors->has('password_confirmation'))
            <span>{{ $errors->first('password_confirmation') }}</span>
        @endif
        <button type="submit"
                class="mt-4 rounded bg-primary text-default uppercase px-4 py-2 tracking-widest hover:shadow hover:bg-default hover:text-primary transition-all duration-300 ease-out">
            Register
        </button>
        <p class="text-secondary mt-8">You already have an account ? Go <a href="{{ route("login") }}"
                                                                               class="text-primary">login</a></p>
    </form>
@endsection
