<html>
<head>
  <title>pendekarupi.com | pencak silat universitas pendidikan indonesia</title>
  <link href="<?php echo base_url(); ?>css/stylesilat.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
<div id="wrapper">
    <div id="logo">
      <h1><a href="#">PENCAK SILAT ILKOM UPI</a></h1>
      <p>Pencak Silat Ilmu Komputer Universitas Pendidikan Indonesia</p>
    </div>
  <div id="header">
  </div>
  <div id="menu">
    <ul>
      <li class="first"><a href="#" accesskey="1" title="">Home</a></li>
      <li><a href="#" accesskey="2" title="">Event</a></li>
      <li><a href="#" accesskey="3" title="">Gallery</a></li>
      <li><a href="#" accesskey="4" title="">About Us</a></li>
      <li><a href="#" accesskey="5" title="">Contact Us</a></li>
      <li><?php 
      $username= $this->session->userdata('username');
      if($username == ''){
      echo anchor('login','login/signup!');
      }else{
        echo anchor('login/out','logout!');
      }
      ?></li>
    </ul>
  </div>
  <div id="page">
    <div id="content">
    
    <?php $username= $this->session->userdata('username');?>
    <?php 
      if($error = '')
      {}else{
      echo $error;
      }
    ?>
    
      <h1>Halaman Login Pencak Silat</h1>
      <form action="<?=base_url();?>index.php/login/proseslogin" method="post">
        <table border="0">
        <tr>
          <td>Username</td>
          <td>: <input name="username" type="text"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>: <input name="password" type="password"></td>
        </tr>
        <tr>
          <td></td>
          <td>&nbsp;&nbsp;<input name="submit" type="submit" value="login"> |
            Belum punya akun? <?php echo anchor('login/register','Daftar sekarang!');?>
          </td>
        </tr>
        </table>
      </form>
      
    </div>
    <!-- end #content -->
    <div id="sidebar">
      <ul>
        <li>
          <h2>pendekarupi.com</h2>
          <p>Adalah wadah media informasi pencak silat mahasiswa universitas pendidika indonesia</p>
        </li>
        <li>
          <h2>Berita Harian</h2>
          <ul>
          <?php if(isset($konten)) : foreach($konten as $trow) : ?>
            <li><a href="#"><?php echo $trow->title;?></a></li>
            <?php endforeach; ?>
            <?php else:   ?>
            <li><a href="#">Belum ada konten.</a></li>
            <?php endif;?>
          </ul>
        </li>
        
        
        <li>
          <h2>Recent Post</h2>
          <ul>
            <li><a href="#">Aliquam libero</a></li>
            <li><a href="#">Consectetuer adipiscing elit</a></li>
            <li><a href="#">Metus aliquam pellentesque</a></li>
            <li><a href="#">Urnanet non molestie semper</a></li>
            <li><a href="#">Proin gravida orci porttitor</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- end #sidebar -->
    <div style="clear: both;">&nbsp;</div>
  </div>
</div>
<div id="footer">
  <p>Pencak Silat</p>
</div>


</body>
</html>