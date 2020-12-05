<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DATA SISWA</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
</div>
      <a class="btn btn-primary" href="?sis=add_siswa"><i class="fa fa-plus"></i> Tambah Data Siswa </a>
      </br>
      </br>
      <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Kelas</th>
              <th>NIS</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Agama</th>
              <th>TTL</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>


          <?php 
            $no = 0;
            $siswa=$mysqli->query("SELECT * FROM siswa INNER JOIN kelas on siswa.kd_kelas = kelas.kd_kelas");
            while($m=mysqli_fetch_array($siswa)){
            $no++;    
          ?>  

          <?php 
            include"paging_siswa.php";
            $p   = new paging_smpbinainsancendikia;
            $batas  = 5;
            $posisi = $p->cariPosisi($batas);
            $siswa=$mysqli->query("SELECT * FROM siswa INNER JOIN kelas on siswa.kd_kelas = kelas.kd_kelas
            ORDER BY kelas.kd_kelas  ASC LIMIT  $posisi,$batas");
            $no=0;
            while($m=mysqli_fetch_array($siswa)){   
            $no++;
          ?>

            <tr>
              <th scope="row"><?php echo $no;?></th>
              <td><center><?php echo $m['nm_kelas']; ?></center></td>
              <td><?php echo $m['nis']; ?></td>
              <td><?php echo $m['nm_siswa']; ?></td>
              <td><?php echo $m['jenkel']; ?></td>
              <td><?php echo $m['agama']; ?></td>
              <td><?php echo $m['tmpt_lahir']; ?>, <?php echo $m['tgl_lahir']; ?></td>
              <td><?php echo $m['alamat']; ?></td>
              <td>
               <a class="btn btn-secondary btn-sm" href="?sis=edit_siswa&nis=<?php echo $m['nis'];?>"><i class="fa fa-pencil">Edit</i></a> | 
               <a class="btn btn-danger btn-sm" href="?sis=delete_siswa&nis=<?php echo $m['nis'];?>"><i class="fa fa-trash-o">Delete</i></a>
              </td>
            </tr>


            <?php } ?>
            
          </tbody>
        </table>

      <div class="halaman">
        <nav aria-label="...">
          <ul class="pagination">

          <?php } ?>
          <?php 
              $jmldata     = mysqli_num_rows($mysqli->query("SELECT * FROM siswa"));
              $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
              $linkHalaman = $p->navHalaman($_GET['home'], $jmlhalaman);
              echo " <li  class='page-item'> $linkHalaman </li>"; 
          ?>
          
          </ul>
        </nav>
      </div>