<?php
//Proteksi Halaman
if($this->session->userdata('akses_level') == ""){
    $this->session->set_flashdata('sukses', 'Silakan login dahulu');
    redirect(base_url('login'),'refresh');
}
?>

<?php 
    include('add.php');
?>

<?php 
    //Notifikasi
    if($this->session->flashdata('sukses')){
        echo '<div class="alert alert-success"><i class="fa fa-check"></i> ';
        echo $this->session->flashdata('sukses');
        echo '</div>';
    }
?>
<table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th><center>CROP</center></th>
            <th><center>JENIS MEDIA</center></th>
            <th><center>WADAH</center></th>                 
            <th><center>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach($karakter as $data) { ?>
        <tr class="odd gradeX">
            <td><?= $i; ?></td>
            <td><center><?= $data->nama_crop ?></center></td>
            <td width="180px"><?= $data->jenis_media ?></td>
            <td><?= $data->wadah ?></td>         
            <td width="200px"><center>
                <a href="<?php echo base_url('karakter/read/') ?> " class="btn btn-info btn-xs"><i class="fa fa-search"></i> Detail</a>

                <a href="<?php echo base_url('karakter/update/'.$data->id) ?> " class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Update</a>

                <?php include('delete.php'); ?>


            </center></td>
        </tr>  
        <?php $i++; } ?>                                      
    </tbody>
</table>


                    
            