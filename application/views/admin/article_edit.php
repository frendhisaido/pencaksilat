<?php
      $type= $this->session->userdata('type');
      if(($type == 'user') || ($type == '')){
        redirect ('/start');
      }
        $datestring = "%Y-%m-%d %h:%i";
?>

<html>
<head>
  <title>Pencak Silat Ilkom UPI</title>
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
      <li><?php echo anchor('start/c_event/','Event'); ?></li>
      <li><?php echo anchor('start/c_gallery/','Gallery'); ?></li>
      <li><?php echo anchor('start/c_about_us/','About'); ?></li>
      <li><?php echo anchor('start/c_contact_us/','Contact Us'); ?></li>
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
    <div id="container">
      <div id="content">
        <h1>Edit News</h1>
        
        <div id="preview">
        <p>
        
        <h3>Title : <?php echo $title; ?></h3>
        <b>Content</b> : <?php echo $content; ?>
        </p>
        </div>
        
        --------------------------------------------------------------------------------------------------------------------------------------------------------
        
        <div id="editor">
          <?php echo form_open('articles/updatenow');?>

          <b><label for="title">Title : </label></b>
          <input type="text" name="title" id="title" 
          value="<?php echo $title;?>"/>
          
          <br><br>
          <b>Date : <?php echo mdate($datestring); ?></b>
          
          <br><br>
          <b>Content : <br/></b>
          <textarea name="content" id="content" cols="50" rows="10">
          <?php echo $content;?>
          </textarea>
          
          <input type="hidden" name="articleid" id="articleid"
          value="<?php echo $articleid;?>"/>
          
          <input type="submit" value="Ubah"/>
          <?php echo form_close();?>  
        </div>
        
        <?php
          echo anchor('start','Ke halaman utama.');
        ?>
          <br/>
        <?php 
          echo anchor('login/out','logout!');
        ?>
  
        
      </div> 
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