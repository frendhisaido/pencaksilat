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
      <li class="first"><?php echo anchor('start','Home'); ?></li>
      <li><?php echo anchor('c_event/','Event'); ?></li>
      <li><?php echo anchor('c_gallery/','Gallery'); ?></li>
      <li><?php echo anchor('c_about_us/','About'); ?></li>
      <li><?php echo anchor('c_contact_us/','Contact Us'); ?></li>
      <?php
      $type= $this->session->userdata('type');
      if($type == ''){
      echo   "<li>".anchor('login','login/signup!')."</li>";
      }else{                
        echo "<li>".anchor('login/out','logout!')."</li>";
        if($type == 'admin'){
        echo "<li>".anchor('articles','panel news')."</li>";
        }else if($type == 'user'){
        echo "<li>".anchor('start/navto/user','User Panel')."</li>";  
        }
      }
?>
    </ul>
  </div>
  <div id="page">
    <div id="content">
      
      <h1>Silahkan Isikan Data Diri Anda!</h1>
      <form action="<?php echo site_url();?>/login/add_user" method="POST">
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
          <td>Ulangi Password</td>
          <td>: <input name="repassword" type="password"/></td>
        </tr>
        <tr>
          <td>Email</td>
          <td>: <input name="email" type="email"/></td>
        </tr>
        <tr>
          <td></td>
          <td>&nbsp;&nbsp;<input name="submit" type="submit" value="Daftar"> </td>
        </tr>
        </table>
      </form>
      
    </div>
    <!-- end #content -->
    <div id="sidebar">
      <ul>
        <li>
          <h2>Pencak Silat Ilkom UPI</h2>
          <p>Merupakan sarana bagi para penikmat pencak silat di universitas pendidikan indonesia,
          khususnya jurusan ilmu komputer.</p>
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