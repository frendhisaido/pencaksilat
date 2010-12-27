<?php
$userid= $this->session->userdata('userid');
if(!isset($userid)){
  redirect('login');
}
  $datestring = "%Y-%m-%d %h:%i";
?>

<html>
<head>
  <title>pendekarupi.com | pencak silat universitas pendidikan indonesia</title>
  <link href="<?php echo base_url(); ?>css/stylesilat.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
<div id="wrapper">
    <div id="logo">
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
    
    <h1>Selamat Datang <?php echo $username; ?></h1>
    <h2>Tambah Konten</h2>
    
    <?php echo form_open('articles/create');?>
    <input type="hidden" name="userid" id="userid" values="<?php echo $userid;?>"/>
    
    <table>
      <tr>
        <td>Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo mdate($datestring); ?></td>
      </tr>
      <tr>
        <td>Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="title" size="50" id="title"/></td>
      </tr>
      <tr>
        <td>Content &nbsp;:</td>
      </tr
      <tr>
        <td><textarea name="content" id="content" cols="50" rows="10"></textarea></td>
      </tr>
      <tr>
        <td><input type="submit" value="Submit"/></td>
      </tr>
    </table>
    
    <?php echo form_close();?>
    
    <p>Ini Admin panel.</p>
    <?php
    //link ke halaman utama
    echo anchor('start','Ke halaman utama.');
    ?>
    <br/>
    <?php
    //ini link buat logout
    echo anchor('login/out','logout!');
    ?>
    
    </div>
    <!-- end #content -->
    <div id="sidebar">
      <h2>Disini Konten</h2>
      
      ------------------------------------------------------
      <?php if(isset($konten)) : foreach($konten as $row) : ?>
      <h3>Title : "<?php echo $row->title; ?>"</h3>
      <table>
        <tr>
          <td>Date</td>
          <td>: <?php echo $row->postdate; ?></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>: <?php echo $row->content; ?></td>
      </table>
      ------------------------------------------------------
  <?php endforeach; ?>
  
  <?php else:   ?>
  <h2>Belum ada konten.</h2>
  <?php endif;?>
      
    <!-- end #sidebar -->
    <div style="clear: both;">&nbsp;</div>
  </div>
</div>
<div id="footer">
  
</div>


</body>
</html>