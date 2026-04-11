<?php 
require_once "public/plantilla.html";
startblock('article');
?>



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Documento</th>
      <th scope="col">Estudiante</th>
      <th scope="col"><?php echo $curso1?></th>
      <th scope="col"><?php echo $curso2?></th>
      <th scope="col"><?php echo $curso3?></th>
      <th scope="col"><?php echo $curso4?></th>
      <th scope="col">Promedio</th>
      <th scope="col">estado</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $cont = 0;
    foreach ($array_notas as $key) {
        $cont++;
        $prom = ($key->getCurso1() + $key->getCurso2() + $key->getCurso3() + $key->getCurso4()) /4;
        if($key->getCurso1() != "" && $key->getCurso2() != "" && $key->getCurso3() != "" && $key->getCurso4() != ""){
            $ins = "Terminada";
        }else{
            $ins = "en curso";
        }
    ?>

    <tr>
      <th scope="row"><?php echo $cont?></th>
      <td><?php echo $key->getCc()?></td>
      <td><?php echo $key->getEstudiante()?></td>
      <td><?php echo $key->getCurso1()?></td>
      <td><?php echo $key->getCurso2()?></td>
      <td><?php echo $key->getCurso3()?></td>
      <td><?php echo $key->getCurso4()?></td>
      <td><?php echo $prom?></td>
      <td><?php echo $ins?></td>
    </tr>

    <?php }?>


  </tbody>
</table>   
<?php  endblock();?>
