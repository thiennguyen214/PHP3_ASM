<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../de1/fontawesome-free-6.4.2-web/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css" />
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>
    <div class="container active" id="container">
        <div class="form-container sign-up">
            <form action="{{ route('postRegister') }}" method="post">
                @csrf
                <h2>Create Account</h2>
                <span>or use your email for registeration</span>
                <input type="text" placeholder="Full Name" name="fullname" />
                @error('fullname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="text" placeholder="User Name" name="username" />
                @error('username')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="email" placeholder="Email" name="email" />
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="password" placeholder="Password" name="password" />
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="password" placeholder="Confirm Password" name="confirm_password" />
                @error('confirm_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="register"><a href="{{ route('login') }}">Sign In</a></button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome!</h1>
                    <p>
                        Register with your personal details to use all of site features
                    </p>
                    <button class="hidden" id="register"><a href="{{ route('login') }}">Sign Up</a></button>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        const container = document.getElementById("container");
        const registerBtn = document.getElementById("register");
        const loginBtn = document.getElementById("login");

        registerBtn.addEventListener("click", () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener("click", () => {
            container.classList.remove("active");
        });
    </script> --}}
</body>

</html>
