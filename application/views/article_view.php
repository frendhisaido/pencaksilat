<?php
$userid= $this->session->userdata('userid');
$username= $this->session->userdata('username');

?>
<html>
<head>
<title>Pencak Silat.com |<?php echo $title;?> .</title>

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

<!--navigation disini-->
<ul>
<?php
echo "<li>".anchor('start','Ke halaman utama.')."</li>";
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


<!--Article muncul disini-->
<p>
<h2><?php echo $title;?> </h2>
Posted at: <strong><?php echo $postdate;?></strong>
<p>
<?php echo $content;?>
</p>
</p>


<!--Form Comment muncul disini-->
<p>
<?php if(($userid != '')){?>
Add Comment:
<?php 
 echo form_open('articles/addcomment'); ?>
 
 <input type="hidden" name="userid" id="userid"
 value="<?php echo $userid;?>" />
 <input type="hidden" name="articleid" id="articleid"
 value="<?php echo $articleid;?>" />
 From: <?php echo $username;?>
 <br/>
 Comment:<br/>
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
    At <strong><?php echo $com->commentdate;?></strong> ||<strong><?php echo $com->username;?></strong>,say:
    <p>
    <?php echo $com->comment;?>
    </p>
    <?php
     $iniid= $com->idcomment;
     $usrnm= $com->username;
     if ($usrnm == $username){
       $del= array('articles','deletecomment',$iniid,$articleid);?>
    <a href="<?php echo site_url($del);?>">DELETE MY COMMENT.</a>
    <?php }?>
    </p>
 <?php endforeach; ?>
      <?php else:   ?>
      <h3>Belum ada komen.</h2>
      <?php endif;?>
</p>


</body>
</html>