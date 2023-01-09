<html>
    <head>

        <body>
        <h1>Menampilkan Data Buku</h1>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
        <table border ="1">
            <tr>
                
                <th>ID Buku</th>
                <th>Katalog</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Aksi</th>
             </tr>

             <!-- Menampilkan Data Buku -->
        <?php 
        include 'koneksi.php';
        $buku = mysqli_query($koneksi, "select*from buku");
        foreach($buku as $row){
            echo "<tr>";
            echo "<td>".$id = $row['id_buku'] ."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            ?>
            <td>
            <td><a href="proses.php?id_buku=<?php echo $row['id_buku'] ?>">HAPUS</a></td>
            
				
            </td>
            
            <?php
            echo "</tr>";
        }
        
        ?>
        </table>
            </body>
    </head>
</html>