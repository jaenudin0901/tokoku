<h3>Daftar Menu</h3> 
<div class="products">
    <?php foreach($data['menu'] as $menu):?>
    <div class="product">
        <a href="<?=BASEURL;?>menu/detail/<?= $menu['id'];?>">
        <img src="<?= BASEURL; ?>/img/<?=$menu['gambar'];?>" alt="">
        <p><?= $menu['nama_menu'];?></p></a>
    </div>
    <?php endforeach;?>
</div>