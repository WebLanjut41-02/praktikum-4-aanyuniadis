<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Data Artikel</h3>
        </div>

        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id Artikel</th>
                <th>Judul Artikel</th>
                <th>Tanggal Terbit</th>
                <th>Pengarang</th>
                <th>Isi</th>
                <th>Foto Artikel</th>
              </tr>
            </thead>

            <tbody>
              <?php 
                $artikel = $this->session->daftar_artikel;

                foreach ($artikel as $data) {

               ?>

              <tr>
               <td><?php echo $data->id_artikel ?></td>
                <td><?php echo $data->judul_artikel ?></td>
                <td><?php echo $data->tgl_terbit ?></td>
                <td><?php echo $data->pengarang ?></td>
                <td><?php echo $data->isi ?></td>
                <td><?php echo $data->foto_artikel ?></td>
              </tr>
              <?php } ?>
            </tbody>

          </table>
        </div>

      </div>

    </section>





    <!-- Main content -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->