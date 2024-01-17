<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SoftwebDevOps</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Century Gothic', serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            min-height: 100vh;
            margin: 0;
            position: relative;
            width: 100%;
            min-height: 100vh;
            background: url("{{ asset('assets/img/banners/log_bg.jpg') }}") rgba(0, 0, 0, 0.507);
            background-repeat: no-repeat;
            background-size: cover;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.425);
            /* Adjust the opacity as needed */
            box-shadow: 0 0 10px 0 black;
            /* Adjust the shadow properties as needed */
            z-index: -1;
        }

        .card {
            width: 27%;
            height: auto;
            padding: 20px;
            border: 1px solid white;
            background: rgba(255, 255, 255, 0.158);
            border-radius: 8px;
            margin-left: auto;
            margin-right: 150px;
            height: auto;
            padding: 20px;
            transition: transform 0.5s ease-in-out;
        }

        .card>form {
            width: 90%;
            margin: 0px auto;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            border: none;
            outline: none;
            margin-top: 10px !important;
            margin-bottom: 10px !important;
            transition: border-color 0.6s ease-in-out;
        }

        .form-control:focus,
        .form-control:active {
            border: 2px solid red;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: red;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px !important;
            margin-bottom: 10px !important;
            transition: background-color 0.3s ease-in-out;
        }

        .btn:hover {
            background-color: black;
            color: white;
        }

        .btn_link {
            color: #ff0000;
            text-align: center;
            list-style-type: none;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .btn_link:hover {
            color: #ffffff;
        }

        label {
            color: white;
        }
    </style>
</head>

<body>
    <div class="card">
        @yield('content')
    </div>
</body>

</html>
