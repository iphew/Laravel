<!DOCTYPE html>
<html>

<head>
    <title>Javascript 101</title>
</head>

<body>
    <h1 id="myh1">Javascript</h1>
    <button onclick="alert('Hello World!')">Click Me!</button>
    <input type="text" id="my_number">
    <button onclick="myFunction()">submit number</button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Hello World - document.ready")
            console.log($('#myh1').text())
            console.log($('#my_number').val())
            $('myh1').text("Javascript 101")
            $('my_number').val(100)
        });

        function myFunction() {
            console.log(document.getElementById('my_number').value)
            console.log('Click submit number')
        }
        console.log("Hello World!");
        let myval;
        myval = '10';
        myval2 = '2';
        console.log(myval,myval2);
        myval3 = parseInt(myval) + myval2;
        console.log(myval3);
        myval3 = myval - myval2;
        console.log(myval3);
        myval3 = myval * myval2;
        console.log(myval3);
        myval3 = myval / myval2;
        console.log(myval3);
    </script>
    <script>
        let myval4 = [1,2,3,4];

        myval4[5] = 5;
        myval4[6] = [6,5,4,5];
        console.log(myval4);

        for (let i = 0; i < myval4.length; i++) {
            console.log(myval4[i])
        }
        myval4.forEach((value, index)=> {
            console.log("in forEach", value)
        });

        console.log(document.getElementById('myh1').innerHTML)
        /*
        // php
        foreach($myval4 as $index => $value){

        }
        */
    </script>
</body>

</html>

