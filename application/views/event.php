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
      <h1>Event Pencak Silat</h1>
      
      <p>
        <ul>
          <p><a href="http://silatindonesia.com/2010/12/kejuaraan-dunia-pencak-silat-ke-14-di-padepokan-pencak-silat-taman-mini-indonesia-indah-jakarta-12-17-desember-2010/"><li><img border="0" src="<?php echo base_url(); ?>image/event3.gif"></li></a></p>
          <p><li><a href="http://pencaksilat.wordpress.com/category/event/"><img border="0" src="<?php echo base_url(); ?>image/event1.jpg"></a></li></p>          
          <li></li>
        </ul>
      </p>
            
    </div>
    <!-- end #content -->
    <div id="sidebar">
      <ul>
        <li>
          <h2>Pencak Silat Ilkom UPI</h2>
          <p>Merupakan sarana bagi para penikmat pencak silat di universitas pendidikan indonesia,
          khususnya jurusan ilmu komputer.</p>
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