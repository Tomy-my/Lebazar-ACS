<?php 
session_start();

if (empty($_SESSION['admin']))
{
    header('Location: login.php');
    exit();
}
else
{
?>
<html>
<head>
<title>Redirection en HTML</title>

<meta http-equiv="refresh" content="0; URL=account.php?update_id=<?php echo $_SESSION['admin']; ?>">
</head>

<body>
</body>
</html>
<?php
}
?>