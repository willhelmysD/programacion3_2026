<?php 
require_once "public/plantilla.html";
startblock('article');
?>

<div class="row">
  <div class="col-md-12">
    <h1>Gestion de notas Administracion Ruta 3</h1>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Documento</th>
      <th scope="col">Estudiante</th>
      <th scope="col"><?php echo $curso1?></th>
      <th scope="col">Periodo</th>
      <th scope="col"><?php echo $curso2?></th>
      <th scope="col">Periodo</th>
      <th scope="col"><?php echo $curso3?></th>
      <th scope="col">Periodo</th>
      <th scope="col"><?php echo $curso4?></th>
      <th scope="col">Periodo</th>
      <th scope="col"><?php echo $curso5?></th>
      <th scope="col">Periodo</th>
      <th scope="col"><?php echo $curso6?></th>
      <th scope="col">Periodo</th>  
      <th scope="col"><?php echo $curso7?></th>
      <th scope="col">Periodo</th>                       
      
      <th scope="col">Promedio</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $cont = 0;
    foreach ($array_notas as $key) {
        $cont++;
        $prom = ($key->getCurso1() + $key->getCurso2() + $key->getCurso3() + $key->getCurso4()+ $key->getCurso5()  + $key->getCurso6() + $key->getCurso7()) /7;
        if(
          $key->getCurso1() != "" && $key->getCurso2() != "" && 
          $key->getCurso3() != "" && $key->getCurso4() != "" && 
          $key->getCurso5() != "" && $key->getCurso6() != "" &&
          $key->getCurso7() != ""
        ){
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
      <td><?php echo $key->getPeriodo1()?></td>
      <td><?php echo $key->getCurso2()?></td>
      <td><?php echo $key->getPeriodo2()?></td>
      <td><?php echo $key->getCurso3()?></td>
      <td><?php echo $key->getPeriodo3()?></td>
      <td><?php echo $key->getCurso4()?></td>
      <td><?php echo $key->getPeriodo4()?></td>
      <td><?php echo $key->getCurso5()?></td>
      <td><?php echo $key->getPeriodo5()?></td>
      <td><?php echo $key->getCurso6()?></td>
      <td><?php echo $key->getPeriodo6()?></td> 
      <td><?php echo $key->getCurso7()?></td>
      <td><?php echo $key->getPeriodo7()?></td>       
      <td><?php echo $prom?></td>
      <td><?php echo $ins?></td>
    </tr>

    <?php }?>


  </tbody>
</table>   
<?php  endblock();?>
