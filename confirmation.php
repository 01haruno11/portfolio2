<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>

<body>

<h2>問合せ内容</h2>    

<form action="mailto.php" method="post">

<table border="1">
<tr>
<td>名前</td>
<td><?php echo $_POST["name"]; ?></td>
</tr>
<tr>
<td>メールアドレス</td>
<td><?php echo $_POST["mail"]; ?></td>
</tr>
<td>問い合わせ内容</td>
<td><?php echo $_POST["message"]; ?></td>
</tr>
</table>

<input type="submit" value="Submit" />
</form>
    
 <!-- formからデータを受け取る -->
    <?php
    echo $_POST['name'].'<br>';
    echo $_POST['email'].'<br>';
    echo $_POST['message'].'<br>';
    ?>

</body>
    
</html>
