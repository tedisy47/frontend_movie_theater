

<div class="row">
  <!-- /.col-md-6 -->
  <div class="col-lg-12">
    <div class="card">
      <img class="card-img-top" src="<?=$film['cover']?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?=$film['title']?> </h5><br/>
        <p class="text-info"><?=$film['status']?></p>
        <p>Geenre :<?=$film['geenre']['geenre_title']?></p>
        <p class="card-text"><?=substr($film['sinopsis'], 0,50)?></p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
  <div class="card-header">
    Schedule
  </div>
  <div class="card-body">
    <?php if (empty($schedule)): ?>
      <p>Belum Ada jadwal buat film ini</p>
    <?php else: ?>

   <table class="table table-striped">
     <thead>
       <tr>
         <th>Theater</th>
         <th>Time</th>
       </tr>
     </thead>
     <tbody>
       <?php foreach ($schedule as $key => $value):?>
        <tr>
          <td><?=$value['teather']['room']?></td>
          <td><?=$value['time']?></td>
        </tr>
       <?php endforeach ?>
     </tbody>
   </table>
   <?php endif ?> 
  </div>
</div>
  </div>
</div>