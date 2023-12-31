<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic"
        rel="stylesheet"
        type="text/css"
    />
    <!-- css -->
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/bootstrap.grid.css" />
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/style.css" />
    <title>Log In</title>
</head>
<body>
<!-- Log In -->
<section class="log-in-area">
    <div class="container-alt set-bg">
        <div class="brand-logo">
            <a href="#"><img src="{{asset('assets/frontend')}}/img/logo.png" alt="logo" /></a>
        </div>
        <div class="login-text">
            <h2 class="wlcm-text">Welcome Back</h2>
            <h3 class="login-title">Log In Now</h3>
            <p>Please login to continue using our app</p>
        </div>
        <form action="{{route('super.admin.login')}}" method="post" style="margin-top: -39px;">
                @if(Session::has('error'))
                    <h4 class="loginerror">{{ Session::get('error')}}</h4>
                @endif
            @csrf
            <input type="hidden" name="device_token"  id="dvtoken" />
            <input type="email" name="email" placeholder="Email" />
            <input type="password" name="password" placeholder="Password" />
            <div class="forgot-link">
                <a href="#">Forgot Password</a>
            </div>
            <input type="submit" value="Log In" />
        </form>
        <div class="login-text">
            <p class="sign-up-text">
                Don't have an account? <a href="#">Sign Up</a>
            </p>
{{--            <p>Or connect with</p>--}}
        </div>
{{--        <ul class="social-link">--}}
{{--            <li>--}}
{{--                <a href="#">--}}
{{--                    <svg--}}
{{--                        version="1.1"--}}
{{--                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                        xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                        width="17"--}}
{{--                        height="17"--}}
{{--                        viewBox="0 0 17 17"--}}
{{--                    >--}}
{{--                        <g></g>--}}
{{--                        <path--}}
{{--                            d="M12.461 5.57l-0.309 2.93h-2.342v8.5h-3.518v-8.5h-1.753v-2.93h1.753v-1.764c0-2.383 0.991-3.806 3.808-3.806h2.341v2.93h-1.465c-1.093 0-1.166 0.413-1.166 1.176v1.464h2.651z"--}}
{{--                            fill="#000000"--}}
{{--                        />--}}
{{--                    </svg>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M22,3.999c-0.78,0.463-2.345,1.094-3.265,1.276c-0.027,0.007-0.049,0.016-0.075,0.023c-0.813-0.802-1.927-1.299-3.16-1.299 c-2.485,0-4.5,2.015-4.5,4.5c0,0.131-0.011,0.372,0,0.5c-3.353,0-5.905-1.756-7.735-4c-0.199,0.5-0.286,1.29-0.286,2.032 c0,1.401,1.095,2.777,2.8,3.63c-0.314,0.081-0.66,0.139-1.02,0.139c-0.581,0-1.196-0.153-1.759-0.617c0,0.017,0,0.033,0,0.051 c0,1.958,2.078,3.291,3.926,3.662c-0.375,0.221-1.131,0.243-1.5,0.243c-0.26,0-1.18-0.119-1.426-0.165 c0.514,1.605,2.368,2.507,4.135,2.539c-1.382,1.084-2.341,1.486-5.171,1.486H2C3.788,19.145,6.065,20,8.347,20 C15.777,20,20,14.337,20,8.999c0-0.086-0.002-0.266-0.005-0.447C19.995,8.534,20,8.517,20,8.499c0-0.027-0.008-0.053-0.008-0.08 c-0.003-0.136-0.006-0.263-0.009-0.329c0.79-0.57,1.475-1.281,2.017-2.091c-0.725,0.322-1.503,0.538-2.32,0.636 C20.514,6.135,21.699,4.943,22,3.999z"/></svg>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#">--}}
{{--                    <svg--}}
{{--                        version="1.1"--}}
{{--                        xmlns="http://www.w3.org/2000/svg"--}}
{{--                        xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                        width="17"--}}
{{--                        height="17"--}}
{{--                        viewBox="0 0 17 17"--}}
{{--                    >--}}
{{--                        <g></g>--}}
{{--                        <path--}}
{{--                            d="M0.698 5.823h3.438v10.323h-3.438v-10.323zM2.438 0.854c-1.167 0-1.938 0.771-1.938 1.782 0 0.989 0.74 1.781 1.896 1.781h0.021c1.198 0 1.948-0.792 1.938-1.781-0.011-1.011-0.74-1.782-1.917-1.782zM12.552 5.583c-1.829 0-2.643 1.002-3.094 1.709v-1.469h-3.427c0 0 0.042 0.969 0 10.323h3.427v-5.761c0-0.312 0.032-0.615 0.114-0.843 0.251-0.615 0.812-1.25 1.762-1.25 1.238 0 1.738 0.948 1.738 2.333v5.521h3.428v-5.917c0-3.167-1.688-4.646-3.948-4.646z"--}}
{{--                            fill="#000000"--}}
{{--                        />--}}
{{--                    </svg>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
    </div>
</section>



<script src="{{asset('assets/frontend')}}/js/jquery-3.3.1.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<script>
    var firebaseConfig = {
        apiKey: "AIzaSyBqU_lOmKGScd5v7PjMmtLuQlN7i2DpLsM",
        authDomain: "designer-muse.firebaseapp.com",
        projectId: "designer-muse",
        storageBucket: "designer-muse.appspot.com",
        messagingSenderId: "789382647348",
        appId: "1:789382647348:web:a67a47be57a37dc0648461",
        measurementId: "G-02Y8JCVDCQ"
    };
    firebase.initializeApp(firebaseConfig);

    const messaging = firebase.messaging();

    startFCM()
    function startFCM() {
        messaging
            .requestPermission()
            .then(function () {
                return messaging.getToken()
            })
            .then(function (response) {
                $('#dvtoken').val(response)
            }).catch(function (error) {
            alert(error);
        });
    }
</script>
</body>
</html>
