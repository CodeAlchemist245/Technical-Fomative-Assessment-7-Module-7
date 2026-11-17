<!DOCTYPE html>
<html>

<head>
    <title>Create Customer</title>
</head>

<body>

    <h1>Create Customer</h1>

    <form method="POST" action="/customers/store">
        @csrf

        <label>Full Name</label><br>
        <input type="text" name="full_name" value="{{ old('full_name') }}">

        @error('full_name')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>

        <label>Email</label><br>
        <input type="email" name="email" value="{{ old('email') }}">

        @error('email')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">
            Save Customer
        </button>

    </form>

</body>

</html>