

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/css/style.css">
    <link rel="icon" href="http://www.free-icons-download.net/images/search-icon-845.png">


    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <title>Cek TPS</title>

    <style type="text/css">
        .modal-body-faq {padding: 0px;}
        .modal-body-main {padding: 30px;}
        .checkout{
            background-color: #fff;
            border:1px solid #eaefe9;
            font-size: 14px;}

        .panel{margin-bottom: 0px;}
        .checkout-step {
            border-top: 1px solid #f2f2f2;
            color: #666;
            font-size: 14px;
            padding: 30px;
            position: relative;}

        .checkout-step-number {
            border-radius: 50%;
            border: 1px solid #666;
            display: inline-block;
            font-size: 12px;
            height: 32px;
            margin-right: 26px;
            padding: 6px;
            text-align: center;
            width: 32px;}

        .checkout-step-title{ 
            font-size: 18px;
            font-weight: 500;
            vertical-align: middle;
            display: inline-block; 
            margin: 0px;
        }

        .checkout-step-body{
            padding-left: 60px;
            padding-top: 30px;}
            
    </style>
</head>

<body>

    <div id="logreg-forms">
        <form class="form-main">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Cek TPS Anda</h1>

            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required="" autofocus="">
            <input type="text" id="nik" name="nik" class="form-control" placeholder="Masukkan No. KTP/NIK" required="">
            
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#cari" name="cari" value="Cari"><i class="fas fa-search"></i> Cari</button>
			<button class="btn btn-secondary" data-toggle="modal" data-target="#faq" style="font-size:12px; margin-left: auto; display: block; margin-top: 10px;" type="button" id="btn-faq">FAQ</button>
        </form>
    </div>

<!-- Modal cari -->
    <div class="modal fade" id="cari" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body-main">
            <div class="ambil_data"></div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal FAQ -->
	<div class="modal fade" id="faq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-question"></i> FAQ</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-bodyfaq">
	        <div id="accordion" class="checkout">
                <div class="panel checkout-step">
                    <div><span class="checkout-step-number">1</span>
                        <h4 class="checkout-step-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" > Apakah aplikasi ini aman ?</a></h4>
                    </div>
                    <div id="collapseOne" class="collapse in">
                        <div class="checkout-step-body">
                            <p>Ya, Aplikasi ini aman dikarenakan tidak menyimpan inputan data apapun. Aplikasi ini hanya merredirect data ke API web resmi KPU bisa di cek disini </p><a href="https://lindungihakpilihmu.kpu.go.id/">https://lindungihakpilihmu.kpu.go.id/</a><p>Namun, apabila data Anda tersimpan di Web KPU maka itu di luar lingkup Aplikasi ini.</p>
                            <a class="btn btn-primary " role="button" data-toggle="collapse" href="#collapseTwo" >Next</a>
                        </div>
                    </div>
                </div>

                <div class="panel checkout-step">
                    <div role="tab" id="headingTwo"> <span class="checkout-step-number">2</span>
                        <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" > Darimana sumber data diambil ? </a> </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="checkout-step-body">
                            <p>Sumber Data yang digunakan dalam Aplikasi ini berasal dari Redirect API dari website resmi KPU. </p>
                            <a class="btn btn-primary" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> Next </a>
                        </div>
                    </div>
                </div>

                <div class="panel checkout-step">
                    <div role="tab" id="headingThree"> <span class="checkout-step-number">3</span>
                        <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"  > Boleh menyebar luaskan ? </a> </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="checkout-step-body">
                        <p>Boleh saja karena ini project gabut XD</p>
                        </div>
                    </div>
                </div>
          	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
    </div>

 <script type="text/javascript">
    $(document).ready(function(){
        $('#cari').on('show.bs.modal', function (e) {
            var nama = $('#nama').val();
            var nik = $('#nik').val();
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'POST',
                url : '{{ url_for('cari')}}',
                data :  {
                    nama: nama, 
                    nik: nik
                },
                success : function(data){
                
                var json_data = $.parseJSON(data);
                $("#cari").modal('show');
                $('.ambil_data').html(json_data.html);//menampilkan data ke dalam modal

                }
            });
         });
    });
  </script>

</body>
</html>
