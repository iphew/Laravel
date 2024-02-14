<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Multiplication</title>
</head>

<body>
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="title">
            <h1>MULTIPLICATION TABLE</h1>
        </div>
        <div class="input mb-3 w-25 p-3 d-flex gap-1">
            <input type="text" id="value" class="input" placeholder="ใส่ตัวเลข"
                aria-label="" aria-describedby="basic-addon1">
            <button class="btn btn-primary" id="button">คำนวน</button>
        </div>
        <div style="color:white">
            <p id="text"></p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#button").click(function() {
                const p = $("#text");
                const value = parseInt($("#value").val());
                let result = "";
                for (let i = 1; i <= 12; i++) {
                    result += `${value} x ${i} = ${value * i}<br>`;
                }
                p.html(result);
            });
        });
    </script>
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

        .input {
            display: flex;
            justify-content: center;
            gap: 5px;
        }

        .title {
            color: rgb(255, 255, 255);
            padding-top: 40px;
            padding-bottom: 100px;
        }
    </style>
</body>
</html>
