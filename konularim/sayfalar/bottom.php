 </div>
 </div>
          
            
            
           
          </div>





            </div>
          </div>
          </div> <div class="col-12 col-md-4 col-sm-12">
            <div class="tops">
              <div class="toph">Mücahit'in Önerileri</div>
   <?php 
        $sayi=mysql_num_rows(mysql_query("select * from konular"));
        if($sayi<10){
          for ($i=0; $i < $sayi; $i++) { 
            $q=mysql_query("select * from konular where konu_id=".($sayi-$i)." and vip=1");
            if ($bak=mysql_fetch_assoc($q)) {
              $resim=$bak['resim'];
              $baslik=$bak['baslik'];
              $kategori=$bak['kategori'];
              if($kategori=="ipk"){ $kategori="İNTERNETTEN PARA KAZANMAK"; }
              $tanitim=$bak['tanitim'];
              $tarih=$bak['tarih'];
              $ekleyen=$bak['ekleyen'];
              $icerikid=$bak['icerik'];
              $ccc="'";
            echo '
                  
                  
                  <div class="top"><a href="'.$icerikid.'">
                   <div class="container-fluid">
                    <div class="row">
                      <div class="col-6">
                        <img class="oneri" src="'.$c.$resim.$c.'">
                      </div>
                      <div class="col-6">
                        <h1 class="oneribas">'.$kategori.'</h1>
                        <h2>'.$baslik.'</h2>
                         
                         <span class="ekleyenkismi"><span>'.$ekleyen.'</span> ekledi </span>
                      </div>
                    </div>
                   </a> </div></div>
                   <div class="bosluk"></div>
                  ';}}
            }else{
            for ($i=0; $i < 10; $i++) { 
            $q=mysql_query("select * from konular where konu_id=".($sayi-$i)." and vip=1");
            if ($bak=mysql_fetch_assoc($q)) {
              $resim=$bak['resim'];
              $baslik=$bak['baslik'];
              $kategori=$bak['kategori'];
              if($kategori=="ipk"){ $kategori="İNTERNETTEN PARA KAZANMAK"; }
              $tanitim=$bak['tanitim'];
              $tarih=$bak['tarih'];
              $ekleyen=$bak['ekleyen'];
              $icerikid=$bak['icerik'];
              $ccc="'";
            echo '
                  
                  
                  <div class="top"><a href="'.$icerikid.'">
                   <div class="container-fluid">
                    <div class="row">
                      <div class="col-6">
                        <img class="oneri" src="'.$c.$resim.$c.'">
                      </div>
                      <div class="col-6">
                        <h1 class="oneribas">'.$kategori.'</h1>
                        <h2>'.$baslik.'</h2>
                         
                         <span class="ekleyenkismi"><span>'.$ekleyen.'</span> ekledi </span>
                      </div>
                    </div>
                   </a> </div></div>
                   <div class="bosluk"></div>
                  ';
            }
          }
        
          
          
        }
    



    

  ?>

</div>
            </div>
          </div>
        </div>
      </div>




  </div>
  </div>
  </div>

 
    <!-- ASDADSADSA32342424233333333333333333333333ASD -->
    <div class="footer">
      <div class="container">
        

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tüm Hakları Saklıdır | Bu Blog   <a href="http://mucahitcreator.rf.gd/?open=instagram" target="_blank" >MÜCAHİT SENDİNÇ</a>in dir
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/jquery.countdown.min.js"></script>
  <script src="../js/bootstrap-datepicker.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.fancybox.min.js"></script>
  <script src="../js/jquery.sticky.js"></script>
  <script src="../js/jquery.mb.YTPlayer.min.js"></script>




  <script src="../js/main.js"></script>

</body>

</html>