<?=$this->extend('layout/tamplate'); ?>


<?=$this->section('content'); ?>

<div class="class">
    <div class="row">
        <div class="col">
        <h1 class="md-2">DETAIL KOMIK</h1>
        <div class="card mb-8" style="max-width: 540px;">
      <div class="row g-0">
          <div class="col-md-4">
      <img src="/img/<?= $komik['sampul']; ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$komik['judul']; ?></h5>
        <p class="card-text"><b>Penulis:</b><?=$komik['penulis']; ?></p>
        <p class="card-text"><b>Penerbit:</b><?=$komik['penerbit']; ?></p>
        <a href=""class="btn btn-warning">EDIT</a>
        <a href="" class="btn btn-danger">HAPUS</a>
</br>
        <a href="/komik">
            kembali ke daftar komik
        </a>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</div>

<?=$this->endSection(); ?>