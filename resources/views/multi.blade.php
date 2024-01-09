<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mutiplication</title>
</head>

<body>
    <form action="/multi" method="POST">
        @csrf
        <div class="container">
            <div class="title">
            <h1>MULTIPLICATION TABLE</h1>
        </div>
        <div class="input">
            <input type="number" required name="num" placeholder="input number">
            <button type="submit">Submit</button>
        </div>
        </div>
    </form>
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
