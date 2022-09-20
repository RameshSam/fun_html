<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ben 10 Omniniverse</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
        }
        body
        {
            width: 100%;
            height: 100vh;
            display: flex;
            background: white;
            justify-content: center;
            align-items: center;
        }
        .border1
        {
            width: 300px;
            height: 300px;
            background: white;
            border-radius: 50%;
            overflow: hidden;
            position: absolute;
            top: 50px;
            right: 50px;
            border: none;
            outline: none;
            transform: rotate(90deg); 
        }
        .border
        {
            width: 400px;
            height: 400px;
            background: black;
            border-radius: 50%;
            position: fixed;
            overflow: hidden;
            border: 2rem solid black;
            border-right:5rem solid green;
            border-left: 5rem solid white;
            outline: none;
            transform:rotateZ(225deg);
            animation: animate 2s alternate infinite; 
        }
        @keyframes animate
        {
            100%
            {
                transform: rotate(315deg);
                border-right-color: red;
     
            }
        }
        .box
        {
            width: 50%;
            height: 50%;
            
            display: inline-block; 
        }
        .black
        {
            background: black;
        }
        .white
        {
            background: white;
        }
        .green1
        {
            background: green;

        }
        .green
        {
            background: green;
            animation: animate1 2s alternate infinite;
        }
        @keyframes animate1
        {
            100%
            {
                background: #ff0000;
            }
        }
    </style>
</head>
<body>
    <div class="border">
        <?php
     for ($i=1; $i <= 2 ; $i++) { 
         for ($j=1; $j <= 2; $j++) { 
             if(($i+$j) % 2 == 0)
             {
                echo"<div class='box black'></div>";
             }
             else
             {
                 echo"<div class='box green'></div>";
             }
            
         }
         echo "<br>";
     }
        ?>
        <div class="border1">
        <?php
     for ($i1=1; $i1 <= 2 ; $i1++) { 
         for ($j1=1; $j1 <= 2; $j1++) { 
             if(($i1+$j1) % 2 == 0)
             {
                echo"<div class='box white'></div>";
             }
             else
             {
                echo"<div class='box green'></div>";
             }
            
         }
         echo "<br>";
     }
        ?>
    </div>
    </div>
</body>
</html>