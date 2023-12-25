<?php
include_once "../server/rolecontrol.php";
$customCSS = array(
    '<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">',
    '<link href="../assets/plugins/DataTables/style.css" rel="stylesheet">'
);
$customJAVA = array(
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/plugins/printer/main.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>',
    '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>'
);

$page_title = 'SMS Bomber TR';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');
include 'enbuyukbenimaminakodumuncocuklari.php';

?>
<!--<div class="page-content">-->
<!--BAŞLANGIC-->

<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">SMS Bomber - Sadece Türkiye Numaraları için Geçerlidir !</h4>
					<h4 class="card-title mb-4">Saldırı 2/3 Dakika İcinde Gidecekdir!</h4>
                    <p class="mb-1">
                    <p>Saldırı Atılıcak Telefon Numarası Girin ! Örn: 5554992455</p>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="tc" role="tabpanel">

                            <input class="form-control" type="text" name="phone" id="phone" placeholder="Telefon Numarası"><br>
                            <center class="nw">
                                <button onclick="checkNumber()" id="sorgula" name="yolla" class="btn waves-effect waves-light btn-rounded btn-primary" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-rocket"></i> Saldırı Yap! </button>
                                </center>
                            <div class="table-responsive">
						  <h9 style="color: #00e5ff class=" card-title"><h9 class="card-title" id="e" style="background-image: url(https://media.giphy.com/media/eYRGWfchREFUUlXT7P/giphy.gif); font-size:17px;">iyi Sorgular!<span class="stats-change stats-change-info"></span></h9> 
            👑<h4 style="color: #6495edf" class="stats-text"><?php echo $_SESSION['k_adi'] ?></h4>
			<div class="slide cycle-slide" style="position: absolute; top: 214px; left: 0px; z-index: 99; opacity: 1; display: block; visibility: hidden;"><h1 style="color: #66D4DE; text-shadow: 0px 0px 10px #66D4DE;">BAKIMDAYIZ..<strong class="baslik"></strong></h1></div><div class="slide cycle-slide cycle-slide-active" style="position: absolute; top: 0px; left: 0px; z-index: 98; visibility: visible; opacity: 1; display: block;"><h1 style="color: #66D4DE; text-shadow: 0px 0px 10px #66D4DE;"><strong class="baslik" style="color: #red; text-shadow: 0px 0px 10px #F15C5C;"><br>
			
                                <table id="zero-conf" class="table table-hover" style="width:100%">
                                    <thead>
                                    </thead>
                                    <tbody id="jojjoojj">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<p>             <strong><br><font style="color: white; font-size:26px;"> | </font> <a href="" class="birebir" style="color: yellow; text-shadow: 0px 0px 10px #F15C5C; font-size:26px; font-family: monospace; font-weight: bold;">    </a><font style="color: white; font-size:26px;"> |</font><br></strong> 
<script type="text/javascript">
    function clearResults() {

        $("#jojjoojj").html(
            '<tr class="odd"><td valign="top" colspan="21" class="dataTables_empty">No data available in table</td></tr>'
        );

        $("#phone").val("");
        $("#adet").val("");
    }
</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
     <script>
                                            function checkNumber() {
                /*return Swal.fire({
                    icon: "warning",
                    title: "Oooooopss...",
                    text: "Bu çözüm şu an bakımdadır!"
                });*/
                                                
                                        
                                                    $.Toast.showToast({
                                                        "title": "Gönderim Başlatıldı, sekme açık olduğu sürece SMS Bomber devam edecektir... Boomber işlemi bitmeden diğer sorguları kullanmazsınız!",
                                                        "icon": "loading",
                                                        "duration": 3000
                                                    });
                                                    $.ajax({
                                                    url: "../api/smsboomb/api.php",
                                                    type: "POST",
                                                    data: {
                                                        phone: $("#phone").val(),
                                                        adet: $("#adet").val(),
														
                                                    },
                                                    success: (res) => {
                                                        if (res) {
                                                            var json = JSON.parse(res);
                                                         
                                                            $('tbody').html("");
                                                    $.each(json, function(key, value) {
                                                        var bilmemhatirlarmisinnn = $("#adet").val();
                                                        var soylekumralimbenimadimneydi = $("#phone").val();

                                                        
                                                        $('tbody').append('<tr>' +
                                                            '<td>+90' +  soylekumralimbenimadimneydi + '</td>' +
                                                            '<td>' + bilmemhatirlarmisinnn + '</td>' +
                                                            '<td><b>Michtu API Service</b></td>' +
                                                            '<td style="color: #fff;"><b>root@zohak</b></td>' +
                                                            
                                                            
                                                            '</tr>');
                                                    });
                                                        } else {
                                                            alert("Hata oluştu!");
                                                            return;
                                                        }
                                                    },
                                                    error: () => {
                                                        alert("Hata oluştu!");
                                                    }
                                                    
                                                });
                                            }
                                        
                                        </script>


    </div>
    <!--BİTİŞ-->
    <?php
    include('inc/footer_native.php');
    include('inc/footer_main.php');
    ?>