<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<h1>login please</h1>
 @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
@enderror
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">emailzz</label>

        <div class="col-md-6">
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            {{-- <input
            id="username"
            type="text"
            class="form-control @error('username') is-invalid @enderror"
            name="username"
            value="{{ old('username') }}"
            required
            autocomplete="username"
            autofocus
          /> --}}


        </div>
    </div>

    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

        <div class="col-md-6">
            <input id="password" type="password"  name="password" required autocomplete="current-password">

            {{-- @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror --}}
        </div>
    </div>

         <button type="submit" class="btn btn-primary">login</button>


</form>


</body>
</html>
