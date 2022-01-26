<h3>Daftar Menu</h3> 
<div class="menus">
    <?php foreach($data['menu'] as $menu):?>
    <div class="menu">
        <img src="<?=$menu['gambar'];?>" alt="">
        <p><?= $menu['jenis_ikan'];?></p>
    </div>
    <?php endforeach;?>
</div>