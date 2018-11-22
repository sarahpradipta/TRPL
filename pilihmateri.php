<?php

          <?php
          include('database.php');
          $judulmateri = $_POST['judul materi'];
          $isi = $_POST['isi'];
          $link = $_POST['link'];
          $sql=mysqli_query ($db,"SELECT * FROM materi WHERE judul materi = '$judulmateri' AND isi = '$isi' AND link = '$link'");
           ?>

           <?php if (mysqli_num_rows($query)>0) {?>
             <?php
    while ($data = mysqli_fetch_array($query)){
      ?>

      <tr>
    <td scope="row"><?php echo $data ["judul materi"];?></td>
    <td scope="row"><?php echo $data ["isi"];?></td>
    <td scope="row"><?php echo $data ["link"];?></td>
    <td scope="row"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modaledit<?php echo $data['id_pelajaran']; ?>"><span>Edit</span></button></td>
    <td scope="row"><a class="btn btn-light" href="hapus.php?id_user=<?php echo $data["id_pelajaran"]; ?>"><span>Hapus</span></a></td>
</tr>
