<?php
      $type= $this->session->userdata('type');
      if(($type == 'user') || ($type == '')){
        redirect ('/start');
      }
        $userid= $this->session->userdata('userid');
        $username= $this->session->userdata('username');
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
    
    <h1>Selamat Datang <?php echo $username; ?></h1>
    <h2>Tambah Konten</h2>
    
    <?php echo form_open('articles/create');?>
    <input type="hidden" name="userid" id="userid" value="<?php echo $userid;?>"/>
    
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
  </div>
  <br/>
  
  <div id="contents">
  <h2>
  Disini contents:
  </h2>
  <?php if(isset($konten)) : foreach($konten as $row) : ?>
      <p>
      <?php
      $iniid= $row->articleid;
      $edit= array('articles','viewedit',$iniid);
      $del= array('articles','deletenow',$iniid);
      ?>
          <h2>
              Title: <h3><?php echo $row->title;?></h3>
          </h2>
        <br/>
              <strong>Date:</strong> <?php echo $row->postdate;?>
        <br/>      
              <strong>Content:</strong> <?php echo $row->content;?>
        <br/>
              <p>
              <ul>
              <li><a href="<?php echo site_url($edit);?>">EDIT</a></li>
              <li><a href="<?php echo site_url($del);?>">DELETE</a></li>
              </ul>
              </p>
      </p>    
        
  <?php endforeach; ?>
  
  <?php else:   ?>
  <h2>Belum ada konten.</h2>
  <?php endif;?>
    </div>
    <!-- end #content -->
    <div id="sidebar">
      <h2>Disini Konten(??)</h2>
      INI BUAT APA?
      
    <!-- end #sidebar -->
    <div style="clear: both;">&nbsp;</div>
  </div>
</div>
<div id="footer">
  
</div>


</body>
</html>