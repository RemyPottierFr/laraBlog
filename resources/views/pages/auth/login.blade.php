@extends('layouts.app')

@section('content')
    <form method="POST" class="flex flex-col justify-center items-center my-12 shadow-md rounded py-8">
        {{csrf_field()}}
        @if ($errors->has('auth'))
            <span class="text-primary text-sm">{{ $errors->first('auth') }}</span>
        @endif
        <label class="flex flex-col text-xl">
            <span class="font-semibold text-secondary">Email :</span>
            <input required name="email" type="email" value="{{ old('email') }}"
                   class="text-secondary border-b-2 border-primary"/>
        </label>
        @if ($errors->has('email'))
            <span class="text-primary text-sm">{{ $errors->first('email') }}</span>
        @endif
        <label class="flex flex-col text-xl mt-4">
            <span class="font-semibold text-secondary">Password :</span>
            <input required name="password" type="password" class="text-secondary border-b-2 border-primary"/>
        </label>
        @if ($errors->has('password'))
            <span class="text-primary text-sm">{{ $errors->first('password') }}</span>
        @endif
        <button type="submit"
                class="mt-4 rounded bg-primary text-default uppercase px-4 py-2 tracking-widest hover:shadow hover:bg-default hover:text-primary transition-all duration-300 ease-out">
            Login
        </button>
        <p class="text-secondary mt-8">You don't have any account here ? Go <a href="{{ route("register") }}"
                                                                        class="text-primary">register</a></p>
    </form>
@endsection
