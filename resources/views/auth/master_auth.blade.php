<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
            crossorigin="anonymous"></script>
    <style>
        body {
            width: 100vw;
            height: 100vh;
            {{--            background-image: url("{{asset('assets/image/background.jpg')}}");--}}
 background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<div class="col-8 d-flex p-3 bg-primary">
    <div class="col-6">
        <img src="{{asset('assets/image/login.png')}}" class="w-100">
    </div>
    <div class="col-6 p-3">
        <h4 class="text-center">User Login</h4>
        <form action="" method="post" class="row">
           <div class="col-12 my-2">
               <label for="email">Email:</label>
               <input type="text" id="email" placeholder="Email" class="form-control">
           </div>
            <div class="col-12 my-2">
                <label for="password">Password:</label>
                <input type="text" id="password" placeholder="Password" class="form-control">
            </div>
            <div class="col-12 my-2 d-flex justify-content-end">
                <button class="btn btn-primary px-4">Login</button>
            </div>
        </form>
    </div>

</div>

</body>
</html>
