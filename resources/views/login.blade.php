<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #23252a;
        }

        .box {
            position: relative;
            width: 380px;
            height: 450px;
            background: #1c1c1c;
            border-radius: 8px;
            overflow: hidden;
            padding: 10px;
        }

        .box::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg, transparent, transparent, #45f3ff, #45f3ff, #45f3ff);
            z-index: 1;
            transform-origin: bottom right;
            animation: animate 6s linear infinite;
        }

        .box::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg, transparent, transparent, #45f3ff, #45f3ff, #45f3ff);
            z-index: 1;
            transform-origin: bottom right;
            animation: animate 6s linear infinite;
            animation-delay: -3s;
        }

        .borderLine::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg, transparent, transparent, #ff2770, #ff2770, #ff2770);
            z-index: 1;
            transform-origin: bottom right;
            animation: animate 6s linear infinite;
            animation-delay: -1.5s;
        }

        .borderLine::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg, transparent, transparent, #ff2770, #ff2770, #ff2770);
            z-index: 1;
            transform-origin: bottom right;
            animation: animate 6s linear infinite;
            animation-delay: -4.5s;
        }


        @keyframes animate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }

        }

        .box form {
            position: absolute;
            inset: 4px;
            background: #222;
            padding: 50px 40px;
            border-radius: 8px;
            z-index: 2;
            display: flex;
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .box form h2 {
            color: #fff;
            font-weight: 500;
            text-align: center;
            letter-spacing: 0.1em;
        }

        .box form .inputBox {
            position: relative;
            width: 300px;
            margin-top: 35px;
        }

        .box form .inputBox input {
            position: relative;
            width: 100%;
            padding: 20px 10px 10px;
            background: transparent;
            outline: none;
            border: none;
            box-shadow: none;
            color: #23242a;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
            z-index: 10;
        }

        .box form .inputBox span {
            position: absolute;
            left: 0;
            padding: 20px 0px 10px;
            pointer-events: none;
            color: #8f8f8f;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
        }

        .box form .inputBox input:valid~span,
        .box form .inputBox input:focus~span {
            color: #fff;
            font-size: 0.75em;
            transform: translateY((-34px));
        }

        .box form .inputBox i {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #fff;
            border-radius: 4px;
            overflow: hidden;
            transition: 0.5s;
            pointer-events: none;
        }

        .box form .inputBox input:valid~i,
        .box form .inputBox input:focus~i {
            height: 44px;
        }

        .box form .links {
            display: flex;
            justify-content: space-between;
        }

        .box form .links a {
            margin: 10px 0;
            font-size: 0.75em;
            color: #8f8f8f;
            text-decoration: none;
        }

        .box form .links a:hover,
        .box form .links a:nth-child(2) {
            color: #fff;
        }

        #submit {
            border: none;
            outline: none;
            padding: 9px 25px;
            cursor: pointer;
            font-size: 0.9em;
            border-radius: 4px;
            font-weight: 600;
            width: 100px;
            margin-top: 10px;
        }

        #submit:active {
            opacity: 0.8;
        }

        .welcome{
            border: none;
            outline: none;
            padding: 9px 25px;
            cursor: pointer;
            font-size: 0.9em;
            border-radius: 4px;
            font-weight: 600;
            margin-top: 10px;
            color: #fff;
            text-decoration: none
        }
    </style>
</head>

<body>
    <div class="box">
        <span class="borderLine"></span>

            <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            
            <h2>Login in</h2>

            <div class="inputBox">
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" autocomplete="off" required>

                <span>Email</span>
                <i></i>
                
            </div>
            <div class="inputBox">
                <input type="password" name="password" class="form-control" autocomplete="off" required>
                <span>Password</span>
                <i></i>
                
            </div>
          
            <button class="btn btn-primary" type="submit"  id="submit" >Login</button>

            <a href="/" class="welcome">Back To Home</a>

        </form>
    </div>
</body>

</html>