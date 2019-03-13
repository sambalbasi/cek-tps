

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
    <title>Informasi Detail</title>

    <style type="text/css">
        .modal-body {padding: 0px;}

        .image{
            width: auto;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
        }
    </style>
</head>

<body>

    <div id="logreg-forms">
        <form class="form-signin" action="{{ url_for('index') }}" method="post">
                <script>console.log('{{ value['message'] }}');</script>
                <script>console.log('{{ value['data']['nama'] }}');</script>



<!--             <img src="https://ya-webdesign.com/images/success-sign-png-6.png" class="image">

            <p>*Anda dapat memberikan hak suara anda</p>


            <img src="https://cybra.com/wp-content/uploads/2015/04/678069-sign-error-512.png" class="image">

            <p>*Nggak Bisa</p> -->






<!-- b = "lol" -->

{% if value['message'] == 'success' %}
<img src="https://ya-webdesign.com/images/success-sign-png-6.png" class="image">

<p>*Anda dapat memberikan hak suara anda</p>
<h5>Nama Lengkap</h5>
<p>{{ value['data']['nama'] }}</p>
<h5>Nama Lengkap</h5>
<p>{{ value['data']['namaKabKota'] }}</p>
<p>{{ value['data']['namaKecamatan'] }}</p>
<p>{{ value['data']['namaKelurahan'] }}</p>
<h5>Nama Lengkap</h5>
<p>{{ value['data']['nik'] }}</p>
<h5>Nama Lengkap</h5>
<p>{{ value['data']['tempat_lahir'] }}</p>
<h5>Nama Lengkap</h5>
<p>{{ value['data']['tps'] }}</p>
{%else %}
<script>console.log('gagal');</script>
<img src="https://cybra.com/wp-content/uploads/2015/04/678069-sign-error-512.png" class="image">

<p style="text-aligh:center;">ANDA BELUM TERDAFTAR ATAU KOMBINASI NIK DAN NAMA SALAH.</p>
{% endif %}






<!--             <h5>Nama Lengkap</h5>
            <p>aaaaaaaaaaaaaaaaaaaaaaa</p>
            <h5>Nama Lengkap</h5>
            <p>aaaaaaaaaaaaaaaaaaaaaaa</p>
            <h5>Nama Lengkap</h5>
            <p>aaaaaaaaaaaaaaaaaaaaaaa</p>
            <h5>Nama Lengkap</h5>
            <p>aaaaaaaaaaaaaaaaaaaaaaa</p> -->

            
            <button class="btn btn-primary btn-block" type="submit" name="cari"><i class="fas fa-search"></i> Cari Lagi</button>
        </form>
    </div>


</body>
</html>
