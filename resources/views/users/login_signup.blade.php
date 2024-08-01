<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <style>
        .form-outline {
            position: relative;

        }

        .form-control:focus::placeholder {
            visibility: hidden;
        }

        .label {
            padding: 2px;
            position: absolute;
            transition: 0.2s;
            transition-timing-function: ease;
            transition-timing-function: cubic-bezier(0.25, 0.1, 0.25, 1);
            pointer-events: none;
            font-size: 1rem;
            background-color: #fff;
            display: none
        }

        .form-control:focus+label,
        .form-control:not(:placeholder-shown)+label {
            display: block;
            left: 10px;
            top: -12px;
            color: #6366f1;
            font-size: 0.8rem;
            z-index: 10;
        }

        /* #818cf8; */
    </style>

</head>

<body>

    @php
        $social_icons = 'btn btn-link btn-floating mx-1 text-gray-500 h-12 w-12 rounded-full hover:bg-gray-300  ';
        $input_field =
            'changePlaceholder form-control w-full px-3 py-2 border rounded-lg focus:border-indigo-500 focus:outline-none ';
        $active = 'bg-indigo-400 text-white';
        $button =
            'inline-block font-semibold text-black bg-gray-300 rounded h-10 w-32 flex items-center justify-center ';


            $googleAuthUrl = route('google-auth');
        $icons = <<<HTML
<button type="button" class="{$social_icons}">

    <i class="fab fa-facebook-f"></i>
</button>
<button type="button" class="{$social_icons}">
    <a href="{$googleAuthUrl}">
        <i class="fab fa-google"></i>
    </a>
    
</button>
<button type="button" class="{$social_icons}">
    <i class="fab fa-twitter"></i>
</button>
<button type="button" class="{$social_icons}">
    <i class="fa-brands fa-linkedin"></i>
</button>
HTML;


    @endphp



    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md mt-4">
            <!-- Pills navs -->
            <ul class="flex justify-around mb-6">
                <li class="nav-item">
                    <a class="nav-link {{ $button }}  {{ $active }} " id="tab-login"
                        href="#pills-login">LOGIN</a>


                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $button }}   " id="tab-register" href="#pills-register">REGISTER</a>

                </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div id="pills-content">
                <!-- Pills login -->
                <div id="pills-login" class="tab-pane fade show active">

                    <form method="POST"  action='/users/authenticate' class="bg-white p-6 rounded-lg shadow-md">
                        @csrf
                        <div class="text-center mb-3">
                            <p class="text-lg font-semibold">Sign in with:</p>
                            <div class="social_accounts">
                                {!! $icons !!}
                            </div>
                        </div>
                        <p class="text-center font-medium">or:</p>
                        <div class="mb-4 form-outline">

                            <input type="email" id="loginName" placeholder="Email or username"
                                class=" {{ $input_field }}" name="email" value="{{ old('email') }}">


                            <label for="loginName" class="block text-gray-500 label">Email or username</label>
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="mb-4 form-outline">

                            <input type="password" id="loginPassword" placeholder="Password"
                                class="{{ $input_field }}" name="password" value="{{ old('password') }}">

                            <label for="loginName" class="block text-gray-500 label">Password</label>
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>



                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center">
                                <input type="checkbox" id="loginCheck" class="form-check-input ">
                                <label for="loginCheck" class="ml-2 text-gray-700">Remember me</label>
                            </div>
                            <a href="#!" class="text-indigo-500 hover:underline">Forgot password?</a>
                        </div>
                        <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-lg">Sign in</button>
                        <div class="text-center mt-4">
                            <p>Not a member? <a href="#!" class="text-indigo-500 hover:underline">Register</a></p>
                        </div>
                    </form>

                </div>
                <!-- Pills register -->
                <div id="pills-register" class="tab-pane fade hidden">
                    <form method="POST" action="/users" class="bg-white p-6 rounded-lg shadow-md">
                        @csrf
                        <div class="text-center mb-3">
                            <p class="text-lg font-semibold">Sign up with:</p>
                            {!! $icons !!}
                        </div>
                        <p class="text-center font-medium">or:</p>

                        <div class="mb-4 form-outline">
                            <input type="text" id="registerFullName" placeholder="Full Name"
                                class="{{ $input_field }}" name="name" value="{{ old('name') }}">
                            <label for="registerFullName" class="block text-gray-500 label">Full Name</label>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4 form-outline">
                            <input type="email" id="registerEmail" placeholder="Email"
                                class="{{ $input_field }}" name="email" value="{{ old('email') }}">
                            <label for="registerEmail" class="block text-gray-500 label">Email</label>
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4 form-outline">
                            <input type="password" id="registerPassword" placeholder="Password"
                                class="{{ $input_field }}" name="password" value="{{ old('password') }}">
                            <label for="registerPassword" class="block text-gray-500 label">Password</label>
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4 form-outline">
                            <input type="password" id="registerRepeatPassword" placeholder="Repeat Password"
                                class="{{ $input_field }}" name="password_confirmation"
                                value="{{ old('password_confirmation') }}">
                            <label for="registerRepeatPassword" class="block text-gray-500 label">Repeat
                                Password</label>
                            @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex justify-center items-center mb-4">
                            <input type="checkbox" id="registerCheck" class="form-check-input">
                            <label for="registerCheck" class="ml-2 text-gray-500">I have read and agree to the
                                terms</label>
                        </div>

                        <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-lg"
                            id="signupbtn">Sign up</button>
                    </form>

                </div>
            </div>

        </div>
    </div>


    <script>
        //https://chatgpt.com/c/5a5b76e9-1f43-41ef-9360-baaf72ae2e20
        function switchTab(activeTabId, inactiveTabId, activeContentId, inactiveContentId) {
            document.getElementById(activeTabId).addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById(activeContentId).classList.remove('hidden');
                document.getElementById(inactiveContentId).classList.add('hidden');
                this.classList.add(...'{{ $active }}'.split(' '));
                document.getElementById(inactiveTabId).classList.remove(...'{{ $active }}'.split(' '));
                localStorage.setItem('activeTab', activeTabId);
            });
        }

        switchTab('tab-login', 'tab-register', 'pills-login', 'pills-register');
        switchTab('tab-register', 'tab-login', 'pills-register', 'pills-login');

        document.addEventListener('DOMContentLoaded', function() {
            const activeTab = localStorage.getItem('activeTab') || 'tab-login';
            document.getElementById(activeTab).click();
        })
    </script>
</body>

</html>
