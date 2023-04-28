<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      #divBusca{
        background-color:#fff;
        border:solid 1px;
        border-radius:20px 20px 20px 20px;
        width:285px;
        outline: 0;
        position: fixed;
      }

      #txtBusca{
        float:left;
        background-color:transparent;
        padding-left:6px;
        font-style:italic;
        font-size:16px;
        border:none;
        height:28px;
        width:240px;
        outline: 0;
      }
      #lupa{
        position: relative;
        border-radius:20px 20px 20px 20px;
        padding-top: 2px;
        
      }
    </style>
</head>
<body>
<div id="divBusca">
  <input type="text" id="txtBusca" placeholder=" Buscar..."/>
  <img src="https://i.postimg.cc/Wzz4ZttN/image.png" height="25" width="23" id="lupa"/>
  
</div>
</body>
</html>