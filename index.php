<?php
session_start();
include "connect.php";
error_reporting(0);
  if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
    include "login.php";
  }else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Workflow Nilai</title>
<link href="img/icon.png" rel="shortcut icon" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="jscript/font.js"></script>
<script src="jscript/jquery.js"></script>
<script type="text/javascript">  
//<![CDATA[
$(document).ready(function() {  
$(".bgsGRVMnu li").hover(function(){  
$(this).find('span').animate({ opacity: 0 }, 400);        
$(this).find('a').animate({paddingLeft:"50px"}, 400); },
function(){  
$(this).find('span').animate({ opacity: 1 }, 400);  
$(this).find('a').animate({paddingLeft: "28px"}, 400);  
});
});  
//]]>
</script>
</head>
<div id="header">
<?php
 $sql = mysql_query("SELECT * FROM login WHERE id_user = '$_SESSION[id_user]'");
	  while ($arr = mysql_fetch_array($sql)){
		$nama = $arr['nama'];
	  }
?>
	<div id="icon_user"><img src="img/user.png" width="50" height="50" /></div>
    <div class="user">Welcome <?php echo "$nama"; ?><br/><div id="logout"><a href="logout.php">Logout</a></div></div>
</div>
 <div id="logo">Workflow<div class="description">Nilai Mata Kuliah</div></div>

	<div id="sidebar">
	  <ul class="bgsGRVMnu">
      	<li><a href="?mod=home">Home</a></li>
        <li><a href="?mod=input">Input Nilai</a></li>
        <li><a href="?mod=view">Lihat Nilai</a></li>
        <li><a href="?mod=help">Bantuan</a></li>
        <li><a href="?mod=user">User</a></li>
      </ul>
	</div>
  
  <div id="content">
    <?php include "content.php" ?>
  </div>
<body>
</body>
</html>
<?php
  }
?>
