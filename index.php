<?php ?>
<!DOCtype html>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Into the matrix</title>

    <style>

        body {

            background-image: url('IMG/matrixBackground.png');

        }

        #Login {

            color: green;
            margin-left: 45%;
            margin-top: 2%;

        }

        #Logo {

            background-image: url('IMG/IntoTheMatrixLogo.png');
            width: 100%;
            height: 120px;
            display: inline-block;
            border-style: solid;
            border-color: green;

        }

        #column{

            width: 90%;
            height: 1000px;
            border-style: solid;
            border-color: black;
            margin-left: 5%;
            background-color: white;



        }


    </style>


</head>

<body>

<div id="Logo">


</div>

<div id="column">

    <div id="Login">
        <?php include 'PHP/PasswordProtect.php' ?>
    </div>

</div>


</body>