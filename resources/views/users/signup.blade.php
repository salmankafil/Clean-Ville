<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <title>Sign Up - Public Space Cleaning Scheduler</title>
    
</head>

<body>
    <div class="icon-container">
        <a href="/homepage" class="home-link">
            <i class="fas fa-home"></i>
        </a>
        <a href="/contact" class="contact-link">
            <i class="fas fa-envelope"></i>
        </a>
        </div>
    <div class="logo">
            <img src="{{ asset('images/signup.png') }}" alt="Website Logo"> 
            <p>Where Community Unites for a Greener Tomorrow! </p>   
            <p>Join CleanVille, Let's Create a Cleaner World Together!</p>      
    </div>


    <div class="signup-container">
        <form class="signup-form" method="POST" action="/users">
            @csrf
            <h2>Register</h2>

            <div>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" value="{{old('name')}}" >
            @error('name')
            <p class="error">{{$message}}</p>
            @enderror

            </div>

            <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"  value="{{old('email')}}" >
            @error('email')
            <p class="error">{{$message}}</p>
            @enderror

            </div>

            <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="{{old('password')}}" >
            @error('password')
            <p class="error">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="password">Confirm Password:</label>
            <input type="password" id="password" name="password_confirmation" value="{{old('password_confirmation')}}">
            @error('password_confirmation')
            <p class="error">{{$message}}</p>
            @enderror
        </div>

            <button type="submit" class="cta-button">Register</button>
        </form>
        <div class="extra-links">
            <p>Already have an account? <a href="/login">Log in here</a></p>
        </div>
    </div>
</body>
</html>
