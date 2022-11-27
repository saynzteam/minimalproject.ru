<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <!-- <meta charset="WINDOWS-1251"> -->
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="saynz">
	<meta name="description" content="Игровой сервер в Garry's Mod / Гаррис мод / ДаркРП">
	<meta name="keywords" content="сервер,оптимизация,лучший сервер,оч классный,античит,сервер в гаррис мод,гаррис мод,даркрп, DarkRP, Garry's Mod, красивый сервер, красивый">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta property="og:title" content="MinimalRP">
	<meta property="og:type" content="website">
	<meta property="og:description" content="Сеть серверов в игре Garry's Mod Medium RolePlay сегмента.">
	<meta property="og:image" content="https://media.discordapp.net/attachments/761645091596140587/761647058431770634/welcomegifrus.gif?width=1202&height=302">
	<meta property="og:url" content="https://media.discordapp.net/attachments/761645091596140587/761647058431770634/welcomegifrus.gif?width=1202&height=302">
	<title>minimalproject.ru</title>
	<link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">
	<!-- <link href="core/css/tailwind.css" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<style>
    body{
        background-color: #414044;
        color:white;
    }
	* {
		font-family: 'Nunito', sans-serif;
        margin: 5px;
        padding: 5px;
	}

    *, ::after, ::before {
    box-sizing: border-box;
    text-align: center;
    border-width: 0;
    border-style: solid;
    border-color: #e2e8f0;
}
	</style>
</head>
<h3>Список банов</h3>
<a style="color:white" href="https://2cyr.com/decode/">Универсальный декодер нечитаемых символов</a>
<table>
    <tr>
      <th>№</th>
      <th>Забанен | Steam ID</th>
      <th>Причина</th>
      <th>Администратор</th>
      <th>Срок</th>
   </tr>
   </th>
<?php
$db_host='hzrvm.beget.tech';
$db_name='hzrvm_samadmin';

$db_user='hzrvm_samadmin';
$db_pass='HIDDEN';
@mysql_connect($db_host,$db_user,$db_pass);
@mysql_select_db($db_name);

$result=mysql_query("SELECT * FROM `sam_bans` ORDER BY `id` DESC");

while ($row=mysql_fetch_array($result)){
    

    echo "<tr>\n\t<td>".$row["id"]."</td>"."\n\t"."<td>"."".$row["steamid"]."</td>"."\n\t"."<td>"."".$row["reason"]."</td>"."\n\t"."<td>".$row["admin"]."</td>"."\n\t"."\n";
    if ($row["unban_date"] == 0)
    {
        echo "<td><span style='color: red'>". "Навсегда \n\t"."</tr>";
 
    }else{
        echo "<td><span style='color: orange'>"."Временно\n\t"."</tr>";
    }
}

mysql_close();
?>
</table>
	<script src="core/jquery/jquery3.5.1.js"></script>
	<script src="core/other.js"></script>
</body>
