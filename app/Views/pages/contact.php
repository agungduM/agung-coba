<?=$this->extend('layout/tamplate'); ?>

<?=$this->Section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
        <h2>Our Contact Information</h2>
        <p>Feel free to reach out to us through the following channels:</p>
        <?php foreach($alamat as $a): ?>
            <table>
        <td>
            <tr>tipe:<?=$a['tipe']; ?></tr><br>
            <tr>jalan:<?=$a['kota']; ?></tr>
           
        </td>
        </table>
        <?php endforeach; ?>
        </div>
    </div>
</div>

<?=$this->endSection(); ?>