      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DATA GURU</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>

      <a class="btn btn-primary" href="index.php?gu=add_guru"><i class="fa fa-plus"></i> Tambah Data Guru</a>
    </br>
    </br>
      <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>NIP</th>
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
            $guru=$mysqli->query("SELECT * FROM guru");
            while($m=mysqli_fetch_array($guru)){
            $no++;    
          ?>  

          <?php 
            include"paging_guru.php";
            $p   = new paging_smpbinainsancendika;
            $batas  = 5;
            $posisi = $p->cariPosisi($batas);
            $guru=$mysqli->query("SELECT * FROM guru 
            ORDER BY nm_guru ASC LIMIT  $posisi,$batas");
            $no=0;
            while($m=mysqli_fetch_array($guru)){   
            $no++;
          ?>

            <tr>
              <th scope="row"><?php echo $no;?></th>
              <td><?php echo $m['nip']; ?></td>
              <td><?php echo $m['nm_guru']; ?></td>
              <td><?php echo $m['jenkel']; ?></td>
              <td><?php echo $m['agama']; ?></td>
              <td><?php echo $m['tmpt_lahir']; ?>, <?php echo $m['tgl_lahir']; ?></td>
              <td><?php echo $m['alamat']; ?></td>
              <td>
               <a class="btn btn-secondary btn-sm" href="index.php?hal=edit_guru&nip=<?php echo $m['nip'];?>"><i class="fa fa-pencil">Edit</i></a>  
               <a class="btn btn-danger btn-sm" href="index.php?hal=delete_guru&nip=<?php echo $m['nip'];?>"><i class="fa fa-trash-o">Delete</i></a>
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
              $jmldata     = mysqli_num_rows($mysqli->query("SELECT * FROM guru"));
              $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
              $linkHalaman = $p->navHalaman($_GET['home'], $jmlhalaman);
              echo " <li  class='page-item'> $linkHalaman </li>"; 
          ?>
          
          </ul>
        </nav>
      </div>