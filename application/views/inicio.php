<div id="container">
  <h1>Recetas</h1>
  <div id="body">
    <ul class="list-group">
      <?php foreach ($listaItems as $key=>$item) { ?>
        <li class="list-group-item">
          <a href="<?php echo base_url() . 'lista/ficha/' .($key + 1) ?>">
            <?php echo $item["nombre"]; ?>
          </a>
        </li>
        <?php } ?>
    </ul>
  </div>
