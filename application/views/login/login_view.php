<html>
<head>
<title>Login!</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>
<body>
<?php $username= $this->session->userdata('username');?>
<?php 
if($error = '')
{}else{
echo $error;
}?>
<h2> <b> Halaman login pencak silat</b> <h2>
Halo <?php echo $username;?> ! :)
<form action="<?=base_url();?>index.php/login/proseslogin" method="post">
<table border="0" align="center">
<tr>
<td> Username</td>
<td> <input name="username" type="text"> </td>
</tr>
<tr>
<td> Password</td>
<td> <input name="password" type="password"> </td>
</tr>
<tr>
<td> &nbsp; </td>
<td> <input name="submit" type="submit" value="login"> </td>
</tr>
</table>
Belum punya akun? <?php echo anchor('login/register','Daftar sekarang!');?>
</form>

</body>
</html>