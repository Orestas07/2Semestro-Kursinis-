<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budger</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }} ">
    {{-- @vite(['resources/js/app.js']) --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.umd.js" integrity="sha512-gQhCDsnnnUfaRzD8k1L5llCCV6O9HN09zClIzzeJ8OJ9MpGmIlCxm+pdCkqTwqJ4JcjbojFr79rl2F1mzcoLMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/59bcbfb8a3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    {{-- <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.js" integrity="sha512-tQYZBKe34uzoeOjY9jr3MX7R/mo7n25vnqbnrkskGr4D6YOoPYSpyafUAzQVjV6xAozAqUFIEFsCO4z8mnVBXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
</head>
<body>
        
    <div class="containergoal">

        <!-- NavBar Start-->
        <div class="header">
            <header>
                <nav>
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                        <i class="fas fa-bars"></i>
                    </label>
                    <label class="logo"><a class="textnone" href="{{route('dashboard')}}">Budger</a></label>
                    <ul class="nav_link">
                    <li><a class="active" href="{{route('dashboard')}}">DashBoard</a></li>
                    <li><a href="{{route('budget')}}">Budget</a></li>
                    <li><a href="{{route('goals')}}">Goals</a></li>
                    <li><a href="{{route('profile')}}">Profile</a></li>
                </ul>  
                </nav>
            </header>
        </div>
        <!-- NavBar End-->

        @yield("content")



        <div class="footer">
            <footer>
                <div class="waves">
                    <div class="wave" id="wave1"></div>
                    <div class="wave" id="wave2"></div>
                    <div class="wave" id="wave3"></div>
                    <div class="wave" id="wave4"></div>
                </div>
            <ul class="menu">
                <li><a href="#"> Home</a></li>
                <li><a href="#">Budget </a></li>
                <li><a href="#"> Spending</a></li>
            </ul>
            <p>Budger @2022| All Rights Reserved</p>
            </footer>
        </div>
        <!-- Footer End-->

    </div>


</body>
</html>