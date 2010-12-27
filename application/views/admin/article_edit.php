<?php
      $type= $this->session->userdata('type');
      if(($type == 'user') || ($type == '')){
        redirect ('/start');
      }
        $datestring = "%Y-%m-%d %h:%i";
?>
<html>
<head>
<title>Pencak Silat.com | Edit panel.</title>

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

<p>Ini edit panel.</p>
<?php
echo anchor('start','Ke halaman utama.');
?>
<br/>
<?php 
        echo anchor('login/out','logout!');
?>
<div id="editor">
    <?php echo form_open('articles/updatenow');?>
    <p>
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" 
    value="<?php echo $title;?>"/>
    </p>
    
    <p>
    Date: <?php echo mdate($datestring);?>
    </p>
    
    <p>
    Content: <br/>
    <textarea name="content" id="content" cols="50" rows="10">
    <?php echo $content;?>
    </textarea>
    </p>
    
    <input type="hidden" name="articleid" id="articleid"
    value="<?php echo $articleid;?>"/>
    
    <input type="submit" values="Submit"/>
    <?php echo form_close();?>  
  </div>
  <div id="preview">
  <p>
          <h3>
              Title:<?php echo $title;?>
          </h3>
        <br/>
              Content: <?php echo $content;?>
        <br/>
      </p>
  </div>
  
</body>
</html>