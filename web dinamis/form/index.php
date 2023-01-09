<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>form get dan post</title>
</head>
<body>
    <form>
        <div>
            <label>Nama</label><br>
            <input type="text" name="nama" placeholder=" masukan Nama">
        </div>
        <div>
            <label>email</label><br>
            <input type="text" name="email" placeholder=" masukan email">
        </div>
        <div>
            <button>Submit</button>
        </div>
        <?php
        // berfungsi untuk mengubah nilai menjadi null jika form tidak di isi
        $nama =$_GET['nama'];
        $email=$_GET['email'];

        echo "Nama = {$nama}<br>";
        echo "Email ={$email}";
        ?>
    </form>
</body>
</html>