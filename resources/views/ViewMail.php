<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <h2>Ung dung kiem tra emal hop le</h2>
    <table>
        <tr>
            <td>Nhap email: </td>
            <td><input type="text" name="email" placeholder="Nhap email can kiem tra"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Submit</button></td>
        </tr>
    </table>
</form>
<?php
if(!empty(request('email'))){
     if(!$check){
         echo 'Dung dinh dang Email';
     } else
         {echo 'Sai dinh dang email'; }
}
?>
</body>
</html>
