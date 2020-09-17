

<div class="row">
  <!-- /.col-md-6 -->
  <?php foreach ($film as $key => $value):?>
  <div class="col-lg-3">
    <div class="card">
      <img class="card-img-top" src="<?=$value['cover']?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?=$value['title']?> </h5><br/>
        <p class="text-info"><?=$value['status']?></p>
        <p>Geenre :<?=$value['geenre']['geenre_title']?></p>
        <p class="card-text"><?=substr($value['sinopsis'], 0,50)?></p>
        <a href="<?=site_url('home/detail/'.$value['id'])?>" class="btn btn-primary">Detail</a>
      </div>
    </div>
  </div>
  <?php endforeach;?>
</div>