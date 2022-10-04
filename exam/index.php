<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" ?>
</head>

<body>

    <div class="logo">
        <h1>Logo</h1>
    </div>
    <div class="container-fluid bg-primary text-white text-center">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-sm-1 text-start align-middle bg-dark">
                    <h5 style="color:white;">HOME</h5>
                </div>
                <div class="col-sm-4">
                    <input><button>Search</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    // koneksi dengan mysql
    $host = mysqli_connect('localhost', 'root', '', 'news');
    /*
        query untuk menampilkan gambar paling baru pertama
    */
    $sql = mysqli_query($host, "select* from berita as a order by a.create_at desc limit 1");


    ?>
    <div class="container border">
        <div class="row">
            <div class="col-sm-8">
                <div>
                    <?php
                    $a = 0;
                    while ($data = mysqli_fetch_array($sql)) {
                        $a++;
                        if ($a == 1) {
                    ?>
                            <!-- <?php echo $data['gambar']; ?> -->
                            <img class="w-100" src="assets/img/<?php echo $data['gambar']; ?>" />
                            <p class="text-rata justify-content-center"><?php echo $data['konten']; ?>
                            </p>
                        <?php }  ?>
                </div>
            <?php } ?>
            <div class="container justify-content-center">
                <div class="row">
                    <?php
                    /*
                    menampilkan data paling baru tanpa pertama
                    */
                    $sql2 = mysqli_query($host, "select* from berita as a order by a.create_at desc limit 3 offset 1");
                    while ($data2 = mysqli_fetch_array($sql2)) {
                    ?>
                        <div class="col-4"><img src="assets/img/<?php echo $data2['gambar']; ?>" />
                            <p class="justify-content-center"><?php echo $data2['konten']; ?></p>
                            <p class="text-end"><a href="#">Continue Reading>></a></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
            </div>

            <div class="col-sm-4">
                <div class="row">
                    <?php
                    /*
                    query yang digunakan untuk menampilkan paling banyak dilihat
                    */
                    $sql3 = mysqli_query($host, "select* from berita as a order by a.jumlah_read desc limit 5 offset 0");
                    while ($data3 = mysqli_fetch_array($sql3)) {
                    ?>
                        <div class="col-sm-4">
                            <img src="assets/img/<?php echo $data3['gambar']; ?>" width="80" height="80" />
                        </div>
                        <div class="col-sm-8">
                            <p>
                                <?php echo $data3['konten_ringkas'];
                                ?>
                            </p>
                        </div>
                        <hr>
                    <?php }
                    mysqli_close($host); ?>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container border img-thumbnail">
        <h1>
            <center>GALLERY</center>
        </h1>
        <div class="row">
            <!-- 
                untuk menampilkan gambar
             -->
            <?php for ($count = 1; $count <= 12; $count++) { ?>
                <div class="col-2 my-2">
                    <img class="w-100 rounded" src="assets/img/img<?php echo $count; ?>.jpg" width="174" height="174" />
                </div>
            <?php } ?>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>



















<!-- 
    Referensi: https://www.petanikode.com/bootstrap-grid/;
 -->