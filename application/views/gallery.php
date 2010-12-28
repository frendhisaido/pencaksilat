<html>
<head>
  <title>pendekarupi.com | pencak silat universitas pendidikan indonesia</title>
  <link href="<?php echo base_url(); ?>css/stylesilat.css" rel="stylesheet" type="text/css" media="all" />
  
  <!-- <link href="<?php echo base_url(); ?>css/demo.css" rel="stylesheet" type="text/css" media="all" /> -->
  <link href="<?php echo base_url(); ?>css/jquery.superbox.css" rel="stylesheet" type="text/css" media="all" />
  
  <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.superbox.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.superbox-min.js"></script>
  <script type="text/javascript">
    $(function(){
      $.superbox.settings = {
        closeTxt: "Close",
        loadTxt: "Loading...",
        nextTxt: "Next",
        prevTxt: "Previous"
      };
      $.superbox();
    });
  </script>
  <script type="text/javascript">
    
  </script>
  
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
        <h1>Gallery Pencak Silat</h1>
        
        <div id="mode-gallery">
                
          <a href="http://sphotos.ak.fbcdn.net/hphotos-ak-ash1/hs737.ash1/163070_1823008494537_1219971517_2157259_4153955_n.jpg" rel="superbox[gallery][my_gallery_2][500x500]">
            <img src="http://sphotos.ak.fbcdn.net/hphotos-ak-ash1/hs737.ash1/163070_1823008494537_1219971517_2157259_4153955_n.jpg" width="75" height="75" alt="" /></a>
          <a href="http://sphotos.ak.fbcdn.net/hphotos-ak-snc4/hs1338.snc4/163070_1823008534538_1219971517_2157260_6333558_n.jpg" rel="superbox[gallery][my_gallery_2][500x500]">
            <img src="http://sphotos.ak.fbcdn.net/hphotos-ak-snc4/hs1338.snc4/163070_1823008534538_1219971517_2157260_6333558_n.jpg" width="75" height="75" alt="" /></a>
          <a href="http://sphotos.ak.fbcdn.net/hphotos-ak-snc4/hs1338.snc4/163070_1823008574539_1219971517_2157261_1355514_n.jpg" rel="superbox[gallery][my_gallery_2][500x500]">
            <img src="http://sphotos.ak.fbcdn.net/hphotos-ak-snc4/hs1338.snc4/163070_1823008574539_1219971517_2157261_1355514_n.jpg" width="75" height="75" alt="" /></a>   
          <a href="http://sphotos.ak.fbcdn.net/hphotos-ak-snc4/hs1358.snc4/163070_1823008614540_1219971517_2157262_333117_n.jpg" rel="superbox[gallery][my_gallery_2][500x500]">
            <img src="http://sphotos.ak.fbcdn.net/hphotos-ak-snc4/hs1358.snc4/163070_1823008614540_1219971517_2157262_333117_n.jpg" width="75" height="75" alt="" /></a>
          <a href="http://sphotos.ak.fbcdn.net/hphotos-ak-ash1/hs737.ash1/163070_1823008654541_1219971517_2157263_1806391_n.jpg" rel="superbox[gallery][my_gallery_2][500x500]">
            <img src="http://sphotos.ak.fbcdn.net/hphotos-ak-ash1/hs737.ash1/163070_1823008654541_1219971517_2157263_1806391_n.jpg" width="75" height="75" alt="" /></a>
          <a href="http://sphotos.ak.fbcdn.net/hphotos-ak-ash1/hs771.ash1/166163_1823009294557_1219971517_2157265_3961615_n.jpg" rel="superbox[gallery][my_gallery_2][500x500]">
            <img src="http://sphotos.ak.fbcdn.net/hphotos-ak-ash1/hs771.ash1/166163_1823009294557_1219971517_2157265_3961615_n.jpg" width="75" height="75" alt="" /></a>
          <a href="http://sphotos.ak.fbcdn.net/hphotos-ak-snc6/hs031.snc6/166163_1823009334558_1219971517_2157266_7614651_n.jpg" rel="superbox[gallery][my_gallery_2][500x500]">
            <img src="http://sphotos.ak.fbcdn.net/hphotos-ak-snc6/hs031.snc6/166163_1823009334558_1219971517_2157266_7614651_n.jpg" width="75" height="75" alt="" /></a>
          <a href="http://sphotos.ak.fbcdn.net/hphotos-ak-snc6/hs011.snc6/166163_1823009374559_1219971517_2157267_2446916_n.jpg" rel="superbox[gallery][my_gallery_2][500x500]">
            <img src="http://sphotos.ak.fbcdn.net/hphotos-ak-snc6/hs011.snc6/166163_1823009374559_1219971517_2157267_2446916_n.jpg" width="75" height="75" alt="" /></a>
          <a href="http://sphotos.ak.fbcdn.net/hphotos-ak-snc6/hs011.snc6/166163_1823009414560_1219971517_2157268_5894313_n.jpg" rel="superbox[gallery][my_gallery_2][500x500]">
            <img src="http://sphotos.ak.fbcdn.net/hphotos-ak-snc6/hs011.snc6/166163_1823009414560_1219971517_2157268_5894313_n.jpg" width="75" height="75" alt="" /></a>
          <a href="http://sphotos.ak.fbcdn.net/hphotos-ak-snc6/hs031.snc6/166163_1823009454561_1219971517_2157269_2944205_n.jpg" rel="superbox[gallery][my_gallery_2][500x500]">
            <img src="http://sphotos.ak.fbcdn.net/hphotos-ak-snc6/hs031.snc6/166163_1823009454561_1219971517_2157269_2944205_n.jpg" width="75" height="75" alt="" /></a>
                    
        </div> 
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