<?php
$userid= $this->session->userdata('userid');
$username= $this->session->userdata('username');
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
      <div id="content">
        <h1>Tambah Comment</h1>
        
        <!--Article muncul disini-->
      <p>
      <h2><?php echo $title;?> </h2>
      Posted at : <strong><?php echo $postdate;?></strong>
      <p>
      <?php echo $content;?>
      </p>
      </p>
      
      
      <!--Form Comment muncul disini-->
      <p>
      <?php if(($userid != '')){?>
      <b>Add Comment</b> :
      <?php 
       echo form_open('articles/addcomment'); ?>
       
       <input type="hidden" name="userid" id="userid"
       value="<?php echo $userid;?>" />
       <input type="hidden" name="articleid" id="articleid"
       value="<?php echo $articleid;?>" />
       
       From : <b><?php echo $username; ?></b>
       <br/>
       Comment :<br/>
       <textarea name="comment" id="comment" cols="50" rows="10">
       </textarea>
       <br/>
       <input type="submit" value="Comment" />
       <?php echo form_close();?>
      </p>
      <?php }else{?>
      <p>
      You need to <?php echo anchor('login','login/signup!');?> to comment.
      </p>
      <?php }?>
      
      <!--Comments muncul disini-->
      <p>
       <?php if(isset($comments)) : foreach($comments as $com) : ?>
          <p>
          At <strong><?php echo $com->commentdate;?></strong> || <strong><?php echo $com->username;?></strong>,say:
          <p>
          <?php echo $com->comment;?>
          </p>
          <?php
           $iniid= $com->idcomment;
           $usrnm= $com->username;
           if ($usrnm == $username){
             $del= array('articles','deletecomment',$iniid,$articleid);?>
          <a href="<?php echo site_url($del);?>">DELETE COMMENT.</a>
          <?php }?>
          </p>
       <?php endforeach; ?>
            <?php else:   ?>
            <h3>Belum ada komen.</h2>
            <?php endif;?>
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