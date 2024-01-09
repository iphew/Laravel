<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./HW3.css">
</head>

<body>
    <div class="container">
        <div class="title">
            <h1>MULTIPLICATION TABLE {{ $num }}</h1>
        </div>
        <div class="top">
            @for ($i = 1; $i <= 24; $i++)
                {{ $num }} x {{ $i }} = {{ $num * $i }} <br />
            @endfor
        </div>
    </div>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #343a40;
            display: flex;
            justify-content: center;
        }

        .container {
            height: 80vh;
            display: flex;
            justify-content: center;
            flex-direction: column;
            top: 50px;
        }

        .top {
            background: linear-gradient(rgb(245, 100, 52), rgb(254, 227, 51));
            font-size: 28;
            width: 100%;
            height: 24rem;
            overflow: scroll;
            overflow-x: hidden;
            display: flex;
            justify-content: center;
            padding-top: 5px;
            border-radius: 10px;
        }

        .title {
            color: rgb(255, 255, 255);
            padding-top: 40px;
            padding-bottom: 100px;
        }

        /*---------- CUSTOM SCROLLBAR ----------*/
        ::-webkit-scrollbar {
            width: 15px;
        }

        ::-webkit-scrollbar-track {
            background: rgb(171, 119, 29);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(rgb(139, 86, 39), rgb(81, 50, 19));
            border-radius: 10px;
        }
    </style>
</body>

</html>
