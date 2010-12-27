<?php
$userid= $this->session->userdata('userid');
if(!isset($userid)){
  redirect('login');
}
  $datestring = "%Y-%m-%d %h:%i";
?>
<html>
<head>
<title>Pencak Silat.com | Admin panel.</title>

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

<div id="container">
  <div id="editor">
    <?php echo form_open('articles/create');?>
    <p>
    <label for="title">Title:</label>
    <input type="text" name="title" id="title"/>
    </p>
    
    <p>
    Date: <?php echo mdate($datestring);?>
    </p>
    
    <p>
    Content: <br/>
    <textarea name="content" id="content" cols="50" rows="10">
    </textarea>
    </p>
    
    <input type="hidden" name="userid" id="userid"
    values="<?php echo $userid;?>"/>
    
    <input type="submit" values="Submit"/>
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
          <h3>
              Title:<?php echo $row->title;?>
          </h3>
        <br/>
              Date: <?php echo $row->postdate;?>
        <br/>      
              Content: <?php echo $row->content;?>
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
</div>


</body>
</html>