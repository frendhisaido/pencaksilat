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
      <h1>About Pencak Silat</h1>
      <p>Pencak silat atau silat (berkelahi dengan menggunakan teknik pertahanan diri) ialah seni bela diri Asia yang berakar dari budaya Melayu. Seni bela diri ini secara luas dikenal di Indonesia, Malaysia, Brunei, dan Singapura tapi bisa pula ditemukan dalam berbagai variasi di berbagai negara sesuai dengan penyebaran suku Melayu, seperti di Filipina Selatan dan Thailand Selatan. Berkat peranan para pelatih asal Indonesia, saat ini Vietnam juga telah memiliki pesilat-pesilat yang tangguh.
      Induk organisasi pencak silat di Indonesia adalah IPSI (Ikatan Pencak Silat Indonesia). Persilat (Persekutuan Pencak Silat Antara Bangsa), adalah nama organisasi yang dibentuk oleh Indonesia, Singapura, Malaysia dan Brunei Darussalam untuk mewadahi federasi-federasi pencak silat di berbagai negara.</p>
      
      <h2>Sejarah</h2>
      <p>Tradisi silat diturunkan secara lisan dan menyebar dari mulut ke mulut, diajarkan dari guru ke murid. Karena hal itulah catatan tertulis mengenai asal mula silat sulit ditemukan. Di Minangkabau, silat atau silek diciptakan oleh Datuk Suri Diraja dari Pariangan, Tanah Datar, di kaki Gunung Marapi pada abad XI.[1] Kemudian silek dibawa dan dikembangkan oleh para perantau Minang ke seluruh Asia Tenggara.</p>
      <p>Kebanyakan sejarah silat dikisahkan melalui legenda yang beragam dari satu daerah ke daerah lain. Seperti asal mula silat aliran Cimande yang mengisahkan tentang seorang perempuan yang menyaksikan pertarungan antara harimau dan monyet dan ia mencontoh gerakan tarung hewan tersebut. Asal mula ilmu bela diri di Indonesia kemungkinan berkembang dari keterampilan suku-suku asli Indonesia dalam berburu dan berperang dengan menggunakan parang, perisai, dan tombak. Seperti yang kini ditemui dalam tradisi suku Nias yang hingga abad ke-20 relatif tidak tersentuh pengaruh luar.</p>
      <p>Silat diperkirakan menyebar di kepulauan nusantara semenjak abad ke-7 masehi, akan tetapi asal mulanya belum dapat dipastikan. Meskipun demikian, silat saat ini telah diakui sebagai budaya suku Melayu dalam pengertian yang luas,[2] yaitu para penduduk daerah pesisir pulau Sumatera dan Semenanjung Malaka, serta berbagai kelompok etnik lainnya yang menggunakan lingua franca bahasa Melayu di berbagai daerah di pulau-pulau Jawa, Bali, Kalimantan, Sulawesi, dan lain-lainnya juga mengembangkan sebentuk silat tradisional mereka sendiri. Dalam Bahasa Minangkabau, silat itu sama dengan silek. Sheikh Shamsuddin (2005)[3] berpendapat bahwa terdapat pengaruh ilmu beladiri dari Cina dan India dalam silat. Bahkan sesungguhnya tidak hanya itu. Hal ini dapat dimaklumi karena memang kebudayaan Melayu (termasuk Pencak Silat) adalah kebudayaan yang terbuka yang mana sejak awal kebudayaan Melayu telah beradaptasi dengan berbagai kebudayaan yang dibawa oleh pedagang maupun perantau dari India, Cina, Arab, Turki, dan lainnya. Kebudayaan-kebudayaan itu kemudian berasimilasi dan beradaptasi dengan kebudayaan penduduk asli. Maka kiranya historis pencak silat itu lahir bersamaan dengan munculnya kebudayaan Melayu. Sehingga, setiap daerah umumnya memiliki tokoh persilatan yang dibanggakan. Sebagai contoh, bangsa Melayu terutama di Semenanjung Malaka meyakini legenda bahwa Hang Tuah dari abad ke-14 adalah pendekar silat yang terhebat.[4] Hal seperti itu juga yang terjadi di Jawa, yang membanggakan Gajah Mada.</p>
      <p>Perkembangan dan penyebaran silat secara historis mulai tercatat ketika penyebarannya banyak dipengaruhi oleh kaum Ulama, seiring dengan penyebaran agama Islam pada abad ke-14 di Nusantara. Catatan historis ini dinilai otentik dalam sejarah perkembangan pencak silat yang pengaruhnya masih dapat kita lihat hingga saat ini. Kala itu pencak silat telah diajarkan bersama-sama dengan pelajaran agama di surau-surau. Silat lalu berkembang dari sekedar ilmu beladiri dan seni tari rakyat, menjadi bagian dari pendidikan bela negara untuk menghadapi penjajah. Disamping itu juga pencak silat menjadi bagian dari latihan spiritual.</p>
      <p>Silat berkembang di Indonesia dan Malaysia (termasuk Brunei dan Singapura) dan memiliki akar sejarah yang sama sebagai cara perlawanan terhadap penjajah asing. [4] . Setelah zaman kemerdekaan, silat berkembang menjadi ilmu bela diri formal. Organisasi silat nasional dibentuk seperti Ikatan Pencak Silat Indonesia (IPSI) di Indonesia, Persekutuan Silat Kebangsaan Malaysia (PESAKA) di Malaysia, Persekutuan Silat Singapore (PERSIS) di Singapura, dan Persekutuan Silat Brunei Darussalam (PERSIB) di Brunei. Telah tumbuh pula puluhan perguruan-perguruan silat di Amerika Serikat dan Eropa. Silat kini telah secara resmi masuk sebagai cabang olah raga dalam pertandingan internasional, khususnya dipertandingkan dalam SEA Games.</p>
    
      <h2>Istilah dalam Pencak Silat</h2>
        <h3>Sikap dan Gerak</h3>
        <p>Pencak silat ialah sistem yang terdiri atas sikap (posisi) dan gerak-gerik (pergerakan). Ketika seorang pesilat bergerak ketika bertarung, sikap dan gerakannya berubah mengikuti perubahan posisi lawan secara berkelanjutan. Segera setelah menemukan kelemahan pertahanan lawan, maka pesilat akan mencoba mengalahkan lawan dengan suatu serangan yang cepat.</p>
        
        <h3>Langkah</h3>
        <p>Ciri khas dari Silat adalah penggunaan langkah. Langkah ini penting di dalam permainan silat yang baik dan benar. Ada beberapa pola langkah yang dikenali, contohnya langkah tiga dan langkah empat.</p>
        
        <h3>Teknik atau Buah</h3>
        <p>Pencak Silat memiliki macam yang banyak dari teknik bertahan dan menyerang. Secara tradisional istilah teknik ini dapat disamakan dengan buah. Pesilat biasa menggunakan tangan, siku, lengan, kaki, lutut dan telapak kaki dalam serangan. Teknik umum termasuk tendangan, pukulan, sandungan, sapuan, mengunci, melempar, menahan, mematahkan tulang sendi, dan lain-lain.</p>
        
        <h3>Jurus</h3>
        <p>Pesilat berlatih dengan jurus-jurus. Jurus ialah rangkaian gerakan dasar untuk tubuh bagian atas dan bawah, yang digunakan sebagai panduan untuk menguasai penggunaan tehnik-tehnik lanjutan pencak silat (buah), saat dilakukan untuk berlatih secara tunggal atau berpasangan. Penggunaan langkah, atau gerakan kecil tubuh, mengajarkan penggunaan pengaturan kaki. Saat digabungkan, itulah Dasar Pasan, atau aliran seluruh tubuh.</p>
      
      <h2>Aspek dan Bentuk</h2>
      <p>
      Terdapat 4 aspek utama dalam pencak silat, yaitu:
      <ol>
        <p><li><b>Aspek Mental Spiritual</b> : Pencak silat membangun dan mengembangkan kepribadian dan karakter mulia seseorang. Para pendekar dan maha guru pencak silat zaman dahulu seringkali harus melewati tahapan semadi, tapa, atau aspek kebatinan lain untuk mencapai tingkat tertinggi keilmuannya.</li></p>
        <p><li><b>Aspek Seni Budaya</b> : Budaya dan permainan "seni" pencak silat ialah salah satu aspek yang sangat penting. Istilah Pencak pada umumnya menggambarkan bentuk seni tarian pencak silat, dengan musik dan busana tradisional.</li></p>
        <p></p><li><b>Aspek Bela Diri</b> : Kepercayaan dan ketekunan diri ialah sangat penting dalam menguasai ilmu bela diri dalam pencak silat. Istilah silat, cenderung menekankan pada aspek kemampuan teknis bela diri pencak silat.</li></p>
        <p></p><li><b>Aspek Olah Raga</b> : Ini berarti bahwa aspek fisik dalam pencak silat ialah penting. Pesilat mencoba menyesuaikan pikiran dengan olah tubuh. Kompetisi ialah bagian aspek ini. Aspek olah raga meliputi pertandingan dan demonstrasi bentuk-bentuk jurus, baik untuk tunggal, ganda atau regu.</li></p>
      </ol>
      </p>
      
      <p>Bentuk pencak silat dan padepokannya (tempat berlatihnya) berbeda satu sama lain, sesuai dengan aspek-aspek yang ditekankan. Banyak aliran yang menemukan asalnya dari pengamatan atas perkelahian binatang liar. Silat-silat harimau dan monyet ialah contoh dari aliran-aliran tersebut. Adapula yang berpendapat bahwa aspek bela diri dan olah raga, baik fisik maupun pernapasan, adalah awal dari pengembangan silat. Aspek olah raga dan aspek bela diri inilah yang telah membuat pencak silat menjadi terkenal di Eropa.</p>
      <p>Bagaimanapun, banyak yang berpendapat bahwa pokok-pokok dari pencak silat terhilangkan, atau dipermudah, saat pencak silat bergabung pada dunia olah raga. Oleh karena itu, sebagian praktisi silat tetap memfokuskan pada bentuk tradisional atau spiritual dari pencak silat, dan tidak mengikuti keanggotaan dan peraturan yang ditempuh oleh Persilat, sebagai organisasi pengatur pencak silat sedunia.</p>
      
      <h2>Tingkat kemahiran</h2>
      <p>
      Secara ringkas, murid silat atau pesilat dibagi menjadi beberapa tahap atau tingkat kemahiran, yaitu:
        <ol>
          <p><li><b>Pemula</b>, diajari semua yang tahap dasar seperti kuda-kuda,teknik tendangan, pukulan, tangkisan, elakan,tangkapan, bantingan, olah tubuh, maupun rangkaian jurus dasar perguruan dan jurus standar IPSI</li></p>
          <p><li><b>Menengah</b>, ditahap ini, pesilat lebih difokuskan pada aplikasi semua gerakan dasar, pemahaman, variasi, dan disini akan mulai terlihat minat dan bakat pesilat, dan akan disalurkan kepada masing-masing cabang, misalnya Olahraga & Seni Budaya.</li></p>
          <p><li><b>Pelatih</b>, hasil dari kemampuan yang matang berdasarkan pengalaman di tahap pemula, dan menengah akan membuat pesilat melangkah ke tahap selanjutnya, dimana mereka akan diberikan teknik - teknik beladiri perguruan, dimana teknik ini hanya diberikan kepada orang yang memang dipercaya, dan mampu secara teknik maupun moral, karena biasanya teknik beladiri merupakan teknik tempur yang sangat efektif dalam melumpuhkan lawan / sangat mematikan.</li></p>
          <p><li><b>Pendekar</b>, merupakan pesilat yang telah diakui oleh para sesepuh perguruan, mereka akan mewarisi ilmu-ilmu rahasia tingkat tinggi.</li></p>
        </ol>
      </p>
      
      <h2>Pencak Silat di dunia</h2>
      <p>Pencak Silat telah berkembang pesat selama abad ke-20 dan telah menjadi olah raga kompetisi di bawah penguasaan dan peraturan Persilat (Persekutuan Pencak Silat Antara Bangsa, atau The International Pencak Silat Federation). Pencak silat sedang dipromosikan oleh Persilat di beberapa negara di seluruh 5 benua, dengan tujuan membuat pencak silat menjadi olahraga Olimpiade. Persilat mempromosikan Pencak Silat sebagai kompetisi olah raga internasional. Hanya anggota yang diakui Persilat yang diizinkan berpartisipasi pada kompetisi internasional.
      Kini, beberapa federasi pencak silat nasional Eropa bersama dengan Persilat telah mendirikan Federasi Pencak Silat Eropa. Pada 1986 Kejuaraan Dunia Pencak Silat pertama di luar Asia, mengambil tempat di Wina, Austria.
      Pada tahun 2002 Pencak Silat diperkenalkan sebagai bagian program pertunjukan di Asian Games di Busan, Korea Selatan untuk pertama kalinya. Kejuaraan Dunia terakhir ialah pada 2002 mengambil tempat di Penang, Malaysia pada Desember 2002.
      Selain dari upaya Persilat yang membuat pencak silat sebagai pertandingan olahraga, masih ada banyak aliran-aliran tua tradisional yang mengembangkan pencak silat dengan nama Silek dan Silat di berbagai belahan dunia. Diperkirakan ada ratusan aliran (gaya) dan ribuan perguruan.</p>
      
      <h2>Padepokan Pencak Silat Indonesia</h2>
      <p>Padepokan adalah istilah Jawa yang berarti sebuah kompleks perumahan dengan areal cukup luas yang disediakan untuk belajar dan mengajar pengetahuan dan keterampilan tertentu. Padepokan yang disediakan untuk belajar dan mengajar Pencak Silat dinamakan Padepokan Pencak Silat. Di Minangkabau, Sumatera Barat, tempat belajar silat dinamakan sasaran silek yang biasanya hampir dimiliki oleh setiap nagari pada masa dahulunya.</p>
      <p>Padepokan Pencak Silat Indonesia (PnPSI) adalah padepokan berskala nasional dan internasional yang berlokasi di di tas lahan yang luasnya sekitar 5,2 hektar di kompleks Taman Mini Indonesia Indah. Luas total bangunannya sekitar 8.700 m2 dan luas total selasar-selasarnya sekitar 5.000 m2. Padepokan ini secara resmi dibuka oleh Presiden Soeharto pada tanggal 20 April 1997.</p>
      <p>
      Padepokan Pencak Silat Indonesia (PnPSI) mempunyai sekurang-kurangnya 5 fungsi, yakni :
        <ol>
          <p><li>Sebagai pusat informasi, pendidikan, penyajian dan promosi berbagai hal yang menyangkut Pencak Silat.</li></p>
          <p><li>Sebagai pusat berbagai kegiatan yang berhubu-ngan dengan upaya pelestarian, pengembangan, penyebaran dan pening-katan citra Pencak Silat dan nilai-nilainya.</li></p>
          <p><li>Sebagai sarana untuk memperkokoh persatuan dan kesatuan masyarakat Pencak Silat Indonesia.</li></p>
          <p><li>Sebagai sarana untuk mempererat persahabatan diantara masyarakat Pencak Silat di berbagai negara.</li></p>
          <p><li>Sebagai sarana untuk memasyarakatkan 2 kode etik manusia Pencak Silat, yakni : Prasetya Pesilat Indonesia dan Ikrar Pesilat.</li></p>
        </ol>
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