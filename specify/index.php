<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Kasus Spesifik CSS </title>
    <style type="text/css">
        p {
            color:red;
        }
        div p {
            color : green;
        }
        #aaa{
            color : orange;
        }
        body div p {
            color :yellow;
        }
        div p.kalimat {
            color : silver;
        }
    </style>
</head>
<body>
    <div>
        <p id="aaa">
            Sedang Belajar CSS..
        </p>
    </div>
</body>
</html>