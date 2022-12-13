

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" {{ URL::asset('css/style.css'); }} ">
    <script src="https://kit.fontawesome.com/59bcbfb8a3.js" crossorigin="anonymous"></script>
    <script src="node_modules/chart.js/dist/chart.js"></script>
</head>
<body class="body1">
    <div class="container1" id="main"> 
        <div class="sign-up">
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <h1>Create Account</h1>
                <div class="social-container">
                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
                </div>
                <input type="registerName" name="name" placeholder="Name" required>
                <input type="registerEmail" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Repeat Password" required>
                <button type="submit" name="register_btn">Sign Up</button>
            </form>
        </div>
        <div class="sign-in">
            <form method="POST" action="{{ route('login') }}">
             @csrf
                <h1>Sign in</h1>
                <div class="social-container">
                <?php if (isset($_GET['error1'])) { ?>
     		<p class="error1"><?php echo $_GET['error1']; ?></p>
     	<?php } ?>
                </div>
                <input type="text" name="email" placeholder="Name" required>
                <input type="password" name="password" placeholder="Password" required>
                <a href="">Forget your password?</a>       
                <button type="submit" name="login_btn">Sign In</a></button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h1>Welcome back!</h1>
                    <p>To keep connected please log in</p>
                    <Button id="signIn">Sign In</Button>
                </div>
                <div class="overlay-right">
                    <h1>Hello!</h1>
                    <p>Enter your personal details and create an account</p>
                    <Button id="signUp">Sign In</Button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const main = document.getElementById('main');

        signUpButton.addEventListener('click',()=>{
            main.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click',()=>{
            main.classList.remove("right-panel-active");
        });
    </script>
</body>
</html>
