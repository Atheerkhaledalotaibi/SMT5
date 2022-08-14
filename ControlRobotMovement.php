<!DOCTYPE html>
<html lang="ar" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Control Robot Movement AKU</title>

    <style>
        body {
            background-color: white;
            text-align: center;
            color: black;
            padding-top: 10%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        #forward {
            float: top;
            margin-top: 5em;
        }
        
        #right {
            float: right;
        }
        
        #left {
            float: left;
        }
        
        #backward {
            margin-top: 0.5%;
        }
        
        button {
            float: center;
            text-align: center;
            font-size: 14px;
            padding: 10px;
            width: 60px;
            height: 40px;
            background: #ffff;
            border: 1px solid #efeae9;
            border-radius: 5px;
            cursor: pointer;
            color: #000;
        }
    </style>

</head>

<body>
    <form action="cRm.php" method="GET">
        <div id="forward">
            <button value="f" name="forward">أمام</button>
        </div>
        <div id="lsr">
            <button value="l" name="left">يسار</button>
            <button value="s" name="stop">توقف</button>
            <button value="r" name="right">يمين</button>
        </div>
        <div id="backward">
            <button value="b" name="backward">خلف</button>
        </div>
    </form>
</body>

</html>