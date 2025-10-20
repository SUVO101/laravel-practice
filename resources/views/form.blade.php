<!DOCTYPE html>
<html lang="en" data-theme="dracula">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form fill up</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
</head>

<body class="flex justify-center items-center h-screen">

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
                    <input type="email" class="input" placeholder="jhonera@google.com" name="email" value="{{ old('email') }}" />
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



</body>

</html>