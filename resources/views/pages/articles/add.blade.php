@extends("layouts.dashboard")

@section('content')
    <h2 class="text-primary text-2xl text-center my-8">Create an article</h2>
    <form class="flex flex-col md:flex-row justify-around items-start px-4" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="flex flex-col w-full md:w-auto">
            <label class="flex flex-col mb-4">
                <span class="font-semibold text-secondary text-xl">Title :</span>
                <input required name="title" type="text" value="{{ old('title') }}"
                       class="text-secondary border-b-2 border-primary"/>
            </label>
            @if ($errors->has('title'))
                <span class="text-primary text-sm">{{ $errors->first('title') }}</span>
            @endif
            <label class="flex flex-col mb-4">
                <span class="font-semibold text-secondary text-xl">Wallpaper :</span>
                <input required name="picture" type="file" value="{{ old('picture') }}"
                       class="text-secondary border-b-2 border-primary"/>
            </label>
            @if ($errors->has('picture'))
                <span class="text-primary text-sm">{{ $errors->first('picture') }}</span>
            @endif
            <label class="flex flex-col mb-4">
                <span class="font-semibold text-secondary text-xl">Description <span class="text-sm text-light">(max 255 characters)</span> :</span>
                <textarea name="description" maxlength="255"
                          class="text-secondary border-b-2 border-primary resize-y min-h-32 focus:outline-none">{{ old('description') }}</textarea>
            </label>
            @if ($errors->has('description'))
                <span class="text-primary text-sm">{{ $errors->first('description') }}</span>
            @endif
        </div>
        <div class="flex flex-col justify-start w-full md:w-1/2">
            <label for="description" class="font-semibold text-secondary text-xl mt-2">Content :</label>
            <textarea class="content" name="content">{{ old('content') }}</textarea>
            @if ($errors->has('content'))
                <span class="text-primary text-sm">{{ $errors->first('content') }}</span>
            @endif
            <button type="submit"
                    class="mt-4 rounded bg-primary text-default uppercase px-4 py-2 tracking-widest hover:shadow hover:bg-default hover:text-primary transition-all duration-300 ease-out">
                Create
            </button>
        </div>
        <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
        <script>
            tinymce.init({
                selector: 'textarea.content',
                height: '700px',
                plugins: 'code',
                toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code',
            });
        </script>
    </form>
@endsection
