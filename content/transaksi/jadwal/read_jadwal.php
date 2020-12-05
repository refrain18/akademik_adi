<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Transaksi Jadwal</h1>
        <div class="btn-toolbar mb-2 mb-md-0"></div>
</div>

      <a class="btn btn-primary" href="?tj=add_jadwal"><i class="fa fa-plus"></i> Tambah Jadwal pelajaran </a>      
      </br>
      </br> 
      <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Kode Pelajaran</th>
              <th>Nama Pelajaran</th>
              <th>NIP</th>
              <th>Nama Guru</th>
              <th>Hari</th>
              <th>Jam</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>

          <?php 
            $no = 0;
            $jadwal=$mysqli->query("SELECT * FROM jadwal INNER JOIN pelajaran on jadwal.kd_pelajaran = pelajaran.kd_pelajaran
            INNER JOIN guru on jadwal.nip = guru.nip
            ");
            while($m=mysqli_fetch_array($jadwal)){
            $no++;    
          ?>  

          <?php 
            include"paging_jadwal.php";
            $p   = new paging_smpbinainsancendikia;
            $batas  = 5;
            $posisi = $p->cariPosisi($batas);
            $jadwal=$mysqli->query("SELECT * FROM jadwal INNER JOIN pelajaran on jadwal.kd_pelajaran = pelajaran.kd_pelajaran
            INNER JOIN guru on jadwal.nip = guru.nip
            ORDER BY kd_jadwal ASC LIMIT  $posisi,$batas");
            $no=0;
            while($m=mysqli_fetch_array($jadwal)){   
            $no++;
          ?>

            <tr>
              <th scope="row"><?php echo $no;?></th>
              <td><?php echo $m['kd_pelajaran']; ?></td>
              <td><?php echo $m['nm_pelajaran']; ?></td>
              <td><?php echo $m['nip']; ?></td>
              <td><?php echo $m['nm_guru']; ?></td>
              <td><?php echo $m['hari']; ?></td>
              <td><?php echo $m['jam']; ?></td>
              <td>
               <a class="btn btn-secondary btn-sm" href="?tj=edit_jadwal&kd_jadwal=<?php echo $m['kd_jadwal'];?>"><i class="fa fa-pencil">Edit</i></a> | 
               <a class="btn btn-danger btn-sm" href="?tj=delete_jadwal&kd_jadwal=<?php echo $m['kd_jadwal'];?>"><i class="fa fa-trash-o">Delete</i></a>
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
              $jmldata     = mysqli_num_rows($mysqli->query("SELECT * FROM jadwal"));
              $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
              $linkHalaman = $p->navHalaman($_GET['home'], $jmlhalaman);
              echo " <li  class='page-item'> $linkHalaman </li>"; 
          ?>
          
          </ul>
        </nav>
      </div>