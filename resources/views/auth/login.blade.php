<!DOCTYPE html>
<html lang="en">
<head>
    
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<style >
        *  
        {
         font-family: 'Lato' , sans-serif;
        }

        body 
        {
         background-color: aquamarine;
        }

        .login-div 
        {
            margin: 100px auto;
            width: 350px;
            background-color: white;
            padding: 30px 60px 60px 60px; 
            border-radius: 15%;

        }

        .logo 
        {
            background-color: aquamarine;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin: auto;
            margin-bottom: 10px;
            margin-left: auto;
            margin-right: auto;
            
        }

        .logo img
        {
            width: 100%;
        }

        .title
        {
            text-align: center;
            color: #505050;
            font-weight: bolder;
            font-size: 35px;
        }

        .form
        {
            width: 100%;
            margin-top: 30px;
        }

        .form input
        {
            font-size: 18px;
            padding: 10px 20px 10px 5px;
            border: none;
            outline: none;
            background: none;

        }

        .username, .password
        {
         display: block;
         border-radius: 30px;
         border: 1px solid rgba(0, 0, 0, 0.2);
         padding: 15px;
         margin: 10px 0;
        }
        .form svg
        {
            height: 25px;
            margin-bottom: -5px;
            margin-left: 10px;
            margin-right: 5px;
        }

        .btn
        {
            width: 100%;
            padding: 12px 10px;
            border: none;
            font-size: 18px;
            border-radius: 30px;
            background-color: rgb(58, 73, 121);
            color: white;
            margin-bottom: 5px;
        }
        .form-control {
            width: 230px
        }

    </style>
</head>
<body>
    <div class="login-div">
      <div class="logo">
          <img src="/assets/images/brand/logo.jpg" alt="">
      </div>
       
      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
            <div class="title">Login</div>
      
                <div class="form">
        
                    <div class="username">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                            <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                        </svg>
                        <input id="email" type="email" class="form-control" name="email" placeholder="E-Mail" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <br><strong style="color: rgb(255, 0, 0)">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="password">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
                        </svg>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <br><strong style="color: rgb(255, 0, 0)">{{ $errors->first('password') }}</strong>
                            </span>
                        @endif                    </div>
                    <button type="submit" class="btn" onclick="">Login</button>
                </div>
        </form>
          
      </div>

    </div>
</body>
</html>