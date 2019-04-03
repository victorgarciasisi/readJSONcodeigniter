<div id="container">
  <h1><?php echo $itemPorId["nombre"]; ?></h1>
  <div id="body">
    <ul class="list-group">
      <li class="list-group-item"><p><strong>Descripción: </strong><br>
        <?php echo str_replace(".", '.<br>',$itemPorId["descripcion"]); ?> </p>
      </li>
      <li class="list-group-item"><p><strong>Ingredientes:</strong><br>
        <?php echo str_replace(".", '.<br>',$itemPorId["ingredientes"]); ?></p>
      </li>
      <li class="list-group-item"><p><a href="<?php echo base_url() ?>">Volver</a></p>
      </li>
    </ul>
  </div>
