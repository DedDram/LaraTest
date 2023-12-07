<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .screen {
            background-color: #f2f6fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .screen .group-wrapper {
            background-color: #f2f6fa;
            max-width: 100%;
            max-height: 100%;
            position: relative;
        }

        .screen .group {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        * {
            -webkit-font-smoothing: antialiased;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<div class="screen">
    <div class="group-wrapper"><a href="/products"> <img class="group" src="/images/group.png" alt="Group Image"></a></div>
</div>
</body>
</html>
