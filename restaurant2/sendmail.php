<?php
$to="apeacejoke@gmail.com";
$subject="website message";

$message="
<html>
<head>
</head>
<body>
<table>
<tr>
<th>sname</th>
<th>email</th>
<th>phone</th>
<th>message</th></tr>

<tr>
<td>'".$_POST['sname']."'</td>
<td>'".$_POST['email']."'</td>
<td>'".$_POST['phone']."'</td>
<td>'".$_POST['message']."'</td>
</tr>
</table>
</body>
</html>
";
$headers.='From:exquiste.diner'."\r\n";
$mail=mail($to,$subject,$message,$headers);
if ($mail)
{
echo"<script>alert('Thanks')</script>";
}
else
{

}
?>