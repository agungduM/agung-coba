<?=$this->extend('layout/tamplate'); ?>

<?=$this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Komik:</h1>
            <a href="/komik/create" class="btn btn-primary mb-3">Tambah Data komik</a>
<table class="table">
  <thead>
    
    <tr>
      <th scope="col">No</th>
      <th scope="col">Sampul</th>
      <th scope="col">Judul</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
  <?php foreach($komik as $k): ?> 
  <tr>
      <th scope="row"><?=$i++;?></th>
      <td><img src="/img/<?=$k['sampul']?>" alt="" class="sampul" ></td>
      <td><?=$k['judul']?></td>
      <td>
        <a href="/komik/<?=$k['slug'];?>"class="btn btn-success">Detail</a>
      </td>
    </tr>
    <?php endforeach; ?>
</tbody>

</table>
        </div>
    </div>
</div>
<?=$this->endSection(); ?>