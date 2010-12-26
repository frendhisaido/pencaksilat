<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>pendekarupi.com | pencak silat universitas pendidikan indonesia</title>
<link href="<?php echo base_url();?>css/stylesilat.css" rel="stylesheet" type="text/css" media="all" />

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
      ?><a>Login</a></li>
    </ul>
  </div>
  <div id="page">
    <div id="content">
      <div class="post">
        <h2 class="title"><a href="#">Welcome to Creevykeel </a></h2>
        <p class="meta">Posted by <a href="#">Someone</a> on March 10, 2008
          &nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
        <div class="entry">
          <p><img src="images/img08.jpg" width="143" height="143" alt="" class="alignleft border" />This is <strong>Creevykeel </strong>, a free, fully standards-compliant CSS template designed by FreeCssTemplates<a href="http://www.nodethirtythree.com/"></a> for <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.  The picture in this template is from <a href="#">PDPhoto.org</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 2.5</a> license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)          </p>
          <p class="clearfix">&nbsp;</p>
        </div>
      </div>
      <div class="post">
        <h2 class="title"><a href="#">Phasellus pellentesque turpis </a></h2>
        <p class="meta">Posted by <a href="#">Someone</a> on March 8, 2008
          &nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
        <div class="entry">
          <p><img src="images/img09.jpg" alt="" width="143" height="143" class="alignleft" />Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. </p>
          <p class="clearfix">&nbsp;</p>
        </div>
      </div>
      <div style="clear: both;">&nbsp;</div>
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
            <li><a href="#">Aliquam libero</a></li>
            <li><a href="#">Consectetuer adipiscing elit</a></li>
            <li><a href="#">Metus aliquam pellentesque</a></li>
            <li><a href="#">Suspendisse iaculis mauris</a></li>
            <li><a href="#">Urnanet non molestie semper</a></li>

            <li><a href="#">Proin gravida orci porttitor</a></li>
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
  <p>Copyright &copy; 2010 TemplateName. Designed by <a href="http://www.freecsstemplates.org/"><strong>CSS Templates</strong></a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></p>
</div>


</body>
</html>
