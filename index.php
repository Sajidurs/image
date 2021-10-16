<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New project</title>
  </head>
  <body>
    <style>
      .images{
        background: url('<?php $a =array('2.jpg','3.jpg','4.jpg','5.jpg','6.jpg'); echo $a[array_rand($a)];?>');
        background-repeat: no-repeat;
    background-position: center;
    width: 300px;
    height: 300px;
    margin-left: 500px;
      }
      .images h2 {
    text-align: center;
}
    </style>

    <div class="images">
      <h2>২ মিনিটের খেলা</h2>
    </div>



  </body>
</html>