
<div class="row">
	<div class="col-xs-12 text-center">
		<b>No. <?php echo $numero;?>-<?php echo $year;?></b><br>
		<br>
	<br>
<strong>
	<b>CERTIFICACION DE ACTAS DE GRADUACION</b> </strong><br>
	</div>
	<br>
</div> <br>
<?php $meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];?>
<?php $fechaArray = explode("-", $titulos->FechaGraduacion);?>
<br>
<p> <br> La infrascrita Directora  del Colegio La Esperanza Jalapa Guatemala, <strong>CERTIFICA:</strong> tener a la vista el <strong>Acta número <?php echo convertir($titulos->Num_Acta);?> guión <?php echo convertir($titulos->Anio);?></strong> (<?php echo $titulos->Num_Acta."-".$titulos->Anio?>), folio número <strong><?php echo convertir($titulos->NumeroFolio);?></strong>, del Libro de Actas de Graduación número <?php echo convertir($titulos->LibroActaGrad);?>, en donde consta que el/la alumno <strong><?php echo $titulos->nombre;?></strong>,
	 sostuvo su examen de graduación, <strong>el <?php echo convertir($fechaArray[2]);?> de <?php echo $meses[(int)$fechaArray[1]];?> de <?php echo convertir($fechaArray[0]);?> (<?php echo $fechaArray[2];?>/<?php echo $fechaArray[1];?>/<?php echo $fechaArray[0];?>)</strong>, habiéndosele conferido el Título de: <strong>
		 <?php echo $titulos->carrera;?></strong>.
	 <br>
	 <br>
	 Se extiende la presente certificación, en Jalapa, a <?php echo convertir(date("d")) . " dias del mes de " . $meses[(int)date("m")] . " del año " . convertir(date("Y"));?>

  </p>
	<br>

	<br>
<br>
<div class="row">
	<div class="col-xs-12 text-right">
		<p>(F)_______________________________</p>
		<p>Profa. Lucia Barrientos de Quijada  <br>
      Directora</p>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 text-left">
		<h5>Vo.Bo.</h5>
		<p>(F)_______________________________</p>
		<p> Prof. William Carias  <br>
            			Sub-Director
</p>

	</div>
</div>
<br><br>
<p> /<?php echo $this->session->userdata("NombreUsuario")?></p>
