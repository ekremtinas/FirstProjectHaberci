<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Haberci</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<style type="text/css">
td img {display: block;}
</style>
</head>


<bgsound src="ses/ses1.mp3" loop="4">

	<div id="page">
	  <div id="header">
        
			<div class="div4" id="logo"> HABERCİ.com |SİTE HARİTASI|TR|EN|FR|İT|RS|AR  <img src="eklenti/Ara.jpg" width="188" height="27" usemap="#Map" class="img1">
              <map name="Map">
                <area shape="rect" coords="137,3,158,24" href="#">
              </map>
			</div>
			<div id="navigation">
				<a href="checkout.php" class="cart"></a>
				<ul>
				  <li class="selected">
						<a href="index.php">ANASAYFA</a>
				  </li>
					<li>
					  <a href="news.php">SON DAKİKA</a>
					</li>
					<li>
						<a href="scents.php">SPOR</a>
					</li>
					<li>
					  <a href="shop.php">SİYASET</a>
					</li>
					<li>
						<a href="about.php">HAKKIMIZDA</a>
					</li>
					<li>
						<a href="blog.php">Blog</a>
					</li>
					<li>
						<a href="contact.php">GEZİ</a>
					</li>
			  </ul>
		</div>
        <div><img src="images/banner.jpg" width="954" height="98"></div>
      </div>
	  <div id="contents">
	    <div id="adbox">
	      <p>&nbsp;</p>
	      <div class="div3">
	        <marquee>
	          SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA SONDAKİKA
            </marquee>
	      </div>
	      <table width="944" height="2391" border="0">
		      <tr>
		        <th width="673" height="476" scope="row"><table width="694" height="517" border="0">
		          <tr>
		            <th height="513" scope="row"><p>
		              <embed src="script7/script1/script7.htm" width="660" height="518"></embed>
		            </p></th>
	              </tr>
	            </table></th>
		        <th width="261" rowspan="6" scope="row">
                 <?php 
				 include("bag.php");
				 $sorgu=mysql_query("select * from sagdaki_haber");
				 while($dizi=mysql_fetch_array($sorgu))
				 {
				 ?><table width="220" height="160" border="0">
		          <tr>
		            <th height="99" scope="row"><a href="haberdetay.php"><img src="images/<?php echo $dizi[0]; ?>" alt="" width="193" height="127" border="0"></a></th>
	              </tr>
		          <tr>
                 
		            <th height="55" scope="row"><span class="font2"><?php echo $dizi[1]; ?></span>
	                  <hr></th>
	              </tr>
	            </table> 
				<?php
                }
				?>
                </th>
            </tr>
		      <tr>
		        <th height="22" bgcolor="#E75050" scope="row">&nbsp;</th>
	        </tr>
		      <tr>
		        <th height="240" scope="row"><div id="featured">
		          <h3 class="font123"> Türkiye Gündeminde Son Dakika....</h3>
		          <ul>
		            <li>
		              <embed src="script4/script4.htm" width="578" height="430"></embed>
		            </li>
	              </ul>
	            </div></th>
	          </tr>
		      <tr>
		        <th height="20" scope="row">&nbsp;</th>
	        </tr>
		      <tr>
		        <th height="440" scope="row"><table width="675" height="419" border="0">
                  <tr>
	                  <th height="23" bgcolor="#E75050" class="div5" scope="row">Video Galeri</th>
                    </tr>
	                <tr>
	                  <th scope="row"><table width="657" height="384" border="0">
                        <tr>
	                        <td width="214" height="196"><iframe width="214" height="190" src="https://www.youtube.com/embed/pRH8akyb3Sc" frameborder="0" allowfullscreen></iframe></td>
	                        <td width="215"><iframe width="214" height="190" src="https://www.youtube.com/embed/uv1h5J9n1WI" frameborder="0" allowfullscreen></iframe></td>
	                        <td width="206"><iframe width="214" height="190" src="https://www.youtube.com/embed/aaq7F1EVpxA" frameborder="0" allowfullscreen></iframe></td>
                        </tr>
	                      <tr>
	                        <td><iframe width="214" height="190" src="https://www.youtube.com/embed/JLguvXD4iv8" frameborder="0" allowfullscreen></iframe></td>
	                        <td><iframe width="214" height="190" src="https://www.youtube.com/embed/hR817PC3Sxo" frameborder="0" allowfullscreen></iframe></td>
	                        <td><iframe width="214" height="190" src="https://www.youtube.com/embed/MlDn9I4LE8o" frameborder="0" allowfullscreen></iframe></td>
                          </tr>
                      </table></th>
                    </tr>
                  </table>
                <p>&nbsp;</p></th>
	          </tr>
		      <tr>
		        <th height="20" scope="row"><iframe name="I15" align="center" marginWidth="0" marginHeight="0" frameBorder="0" width="700" scrolling="no" height="31" src="http://cilekweb.com/webaraclar/doviz10.asp"></iframe></th>
	        </tr>
		      <tr>
		        <th height="22" colspan="2" bgcolor="#E75050" class="div5" scope="row">FOTO GALERİ</th>
	          </tr>
		      <tr>
		        <th colspan="2" align="left" valign="bottom" scope="row"><table width="938" height="485" border="0">
		          <tr>
                  <?php 
				  $sorgu=mysql_query("select * from foto_galeri1");
				  while($dizi=mysql_fetch_array($sorgu))
				  {
				   ?> 
		            <th width="244" height="237" scope="row"><img src="images/foto galeri/<?php echo $dizi[0]; ?>" width="212" height="206"></a></th>
		            <?php
                    }
					?>
	              </tr>
		          <tr>
		            <?php 
				  $sorgu1=mysql_query("select * from foto_galeri2");
				  while($dizi1=mysql_fetch_array($sorgu1))
				  {
				   ?> 
		            <th width="244" height="237" scope="row"><img src="images/foto galeri/<?php echo $dizi1[0]; ?>" width="212" height="206"></a></th>
		            <?php
                    }
					?>
	            </table></th>
	          </tr>
		      <tr>
		        <th colspan="2" align="left" valign="bottom" bgcolor="#E75050" class="font123" scope="row">SON DAKİKA FOTOLARI</th>
	        </tr>
		      <tr>
		        <th colspan="2" align="left" valign="bottom" scope="row"><table width="938" height="485" border="0">
		          <tr>
		           <?php 
				  $sorgu2=mysql_query("select * from son_dakika_fotolari1");
				  while($dizi2=mysql_fetch_array($sorgu2))
				  { ?>
                    <th width="244" height="237" scope="row"><img src="images/foto galeri/<?php echo $dizi2[0]; ?>" alt="" width="214" height="206"></a></th>
                  <?php
                  }
		            ?>
	              </tr>
		          <tr>
                   <?php 
				  $sorgu3=mysql_query("select * from son_dakika_fotolari2");
				  while($dizi3=mysql_fetch_array($sorgu3))
				  { ?>
		            <th height="231" scope="row"><img src="images/foto galeri/<?php echo $dizi3[0]; ?>" alt="" width="214" height="206"></a></th>           
		            <?php
                    }
		           ?>
	              </tr>
	            </table></th>
	        </tr>
		      <tr>
		        <th colspan="2" align="left" valign="bottom" bgcolor="#00FF00" class="font123" scope="row">SPOR FOTOLARI</th>
	        </tr>
		      <tr>
		        <th colspan="2" align="left" valign="bottom" scope="row"><table width="938" height="485" border="0">
		          <tr>
                   <?php 
				  $sorgu4=mysql_query("select * from spor_fotolari1");
				  while($dizi4=mysql_fetch_array($sorgu4))
				  { ?>
                  
		             <th width="244" height="237" scope="row"><img src="images/foto galeri/<?php echo $dizi4[0]; ?>" alt="" width="214" height="206"></a></th>
		          <?php } ?>
	              </tr>
		          <tr>
                   <?php 
				  $sorgu5=mysql_query("select * from spor_fotolari2");
				  while($dizi5=mysql_fetch_array($sorgu5))
				  { ?>
		            <th height="231" scope="row"><img src="images/foto galeri/<?php echo $dizi5[0]; ?>" alt="" width="214" height="206"></a></th>       <?php } ?>
		            
	              </tr>
	            </table></th>
	        </tr>
		      <tr>
		        <th colspan="2" align="left" valign="bottom" bgcolor="#FF3300" class="font123" scope="row">SİYASET FOTOLARI</th>
	        </tr>
		      <tr>
		        <th colspan="2" align="left" valign="bottom" scope="row"><table width="938" height="485" border="0">
		          <tr>
                   <?php 
				  $sorgu6=mysql_query("select * from siyaset_fotolari1");
				  while($dizi6=mysql_fetch_array($sorgu6))
				  { ?>
		            <th width="244" height="237" scope="row"><img src="images/foto galeri/<?php echo $dizi6[0]; ?>" alt="" width="214" height="206"></a></th>
		          <?php  } ?>
	              </tr>
		          <tr>
                   <?php 
				  $sorgu7=mysql_query("select * from siyaset_fotolari2");
				  while($dizi7=mysql_fetch_array($sorgu7))
				  { ?>
		            <th height="231" scope="row"><img src="images/foto galeri/<?php echo $dizi7[0]; ?>" alt="" width="214" height="206"></a></th>
		            <?php } ?>
	              </tr>
	            </table></th>
	        </tr>
		      <tr>
		        <th colspan="2" align="left" valign="bottom" bgcolor="#33CCCC" class="font123" scope="row">GEZİ FOTOLARI</th>
	        </tr>
		      <tr>
		        <th colspan="2" align="left" valign="bottom" scope="row"><table width="938" height="485" border="0">
		          <tr>
                  <?php 
				  $sorgu8=mysql_query("select * from gezi_fotolari1");
				  while($dizi8=mysql_fetch_array($sorgu8))
				  { ?>
		            <th width="244" height="237" scope="row"><img src="images/foto galeri/<?php echo $dizi8[0]; ?>" alt="" width="214" height="206"></a></th>
                    <?php } ?>
		            
	              </tr>
		          <tr>
                   <?php 
				  $sorgu9=mysql_query("select * from gezi_fotolari2");
				  while($dizi9=mysql_fetch_array($sorgu9))
				  { ?>
		            <th height="231" scope="row"><img src="images/foto galeri/<?php echo $dizi9[0]; ?>" alt="" width="214" height="206"></a></th>
                    <?php } ?>
		            
	              </tr>
	            </table></th>
	        </tr>
		      <tr>
		        <th height="256" colspan="2" align="left" valign="bottom" bgcolor="#000000" scope="row"><div id="links">
		          <div>
		            <h3>Blog</h3>
		            <ul class="blog">
		              <li> &#8226; <a href="blog.php">Çok güzel olmuş bravo<span class="time">01 Aralı 2015</span></a></li>
		              <li> &#8226; <a href="blog.php">güzel:)<span class="time">01 Kasım 2015</span></a></li>
		              <li> &#8226; <a href="blog.php">biraz değişiklik lazım<span class="time">17 Aralık 2015</span></a></li>
	                </ul>
	              </div>
		        </div>
		          <div class="hava"><div style="width:300px;height:210px;text-align:center; font-size: 10px; color:#FFF;"><script type="text/javascript">var mynetWidgets = {service: "havadurumu",widget: "3gunluk",city: "konya", theme:"mynet"};</script><script type="text/javascript" src="http://s.mynet.com/nocache/widget.js"></script> <a href="" title="Tüm Konya Haberleri"></a></div></div>
		          <div id="sidebar">
		            <form action="index.php" method="post" id="newsletter">
		              <h3>Bültenimize abone olun</h3>
		              <input type="text" value="" class="txtfield">
		              <input type="submit" value="Sign up!" class="btn">
	                </form>
		            <div id="connect">
		              <h3>Bağlanın</h3>
		              <ul>
		                <li> <a href="#" target="_blank" class="twitter"></a></li>
		                <li> <a href="#" target="_blank" class="googleplus"></a></li>
		                <li> <a href="#" target="_blank" class="facebook"></a></li>
		                <li> <a href="http://freewebsitetemplates.com/go/youtube/" target="_blank" class="vimeo">
	                    </a></li>
	                  </ul>
	                </div>
                </div></th>
	        </tr>
          </table>
	      <p class="div5">&nbsp;</p>
	      <p>
	    </div>
	    <div id="footer"></div>
	</div>
    </div>
</body>
</html>