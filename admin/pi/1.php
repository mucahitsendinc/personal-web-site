<div class="container-fluid">
<div class="row">
<div class="col-12 col-md-6 col-sm-12">
 <h1>
Bilgiler</h1>
<div id="yap">
<form method="POST" action="core/blog.php">
<input type="text" name="kategori" placeholder="Kategori">
<input type="text" name="baslik" placeholder="Başlık">
<input type="text" name="link" placeholder="Link (link-yaz.html)">
<input type="text" name="tanitim" placeholder="Tanıtım Yazısı">
<input type="text" name="resim" placeholder="Resim linki">
<input type="text" name="tarih" placeholder="Tarih (Şubat 2)">
<input type="text" name="vip" placeholder="VİP=? (1=Öne çıkar 0=Çıkarma)">
<div class="itemler">
<ul>
<li onclick="ekle('resim')">
Resim Ekle</li>
<li onclick="ekle('paragraf')">
Paragraf Ekle</li>
<li onclick="ekle('baslik')">
Başlık Ekle</li>
<li onclick="ekle('link')">
Link Ekle</li>
<li onclick="ekle('video')">
Video Ekle</li>
</ul>
</div>
<div id="eklenecek">
<div id="resimekle">
<input type="text" name="" id="resimyazisi" placeholder="resim linki gir">
</div>
<div id="paragrafekle">
<input type="text" name="" id="paragrafyazisi"  placeholder="paragraf yazısı gir">
</div>
<div id="baslikekle">
<input type="text" name=""  id="baslikyazisi" placeholder="başlık yazısı gir">
</div>
<div id="link">
<input type="text" name="" id="linkyazisilink"  placeholder="linki gir">
<input type="text" name=""  id="linkyazisimetin" placeholder="gözükecek metini gir">
</div>
<div id="video">
<input type="text" name="" id="videoyazisi"  placeholder="video linkinin sonunu(örn:QTR53cgdfh) gir">
</div>
<input type="button" name="" value="Ekle" onclick="itemleriekle()">
</div>
<textarea name="textarea" id="yazi" placeholder="İçeriğini yaz" onkeypress="onizle()">
</textarea>
<input type="button" value="Ön İzle" onclick="onizlendi()">
<input style="display:none;" id="submit" type="submit" value="Gönder">
</form>
</div>
</div>
<div class="col-12 col-md-6 col-sm-12">
<h1>
Ön izleme</h1>
<div id="onizleme" >
<h3>
asd</h3>
<div class="baslik">
Başlık</div>
<div class="">
</div>
</div>
</div>
</div>