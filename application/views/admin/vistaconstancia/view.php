
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

<br>
<p> <br> La infrascrita Directora  del Colegio La Esperanza Jalapa Guatemala, <strong>CERTIFICA:</strong> tener a la vista el <strong>Acta numero <?php echo $titulos->Num_Acta;?> - <?php echo $titulos->Anio;?></strong>, folio número <?php echo $titulos->NumeroFolio;?>, del Libro de Actas de Graduación número <?php echo $titulos->LibroActaGrad;?> en donde consta que el/la alumno <strong><?php echo $titulos->nombre;?></strong>
	 sostuvo su examen de graduación el <?php echo $titulos->FechaGraduacion;?> habiéndosele conferido el Título de: <strong>
		 <?php echo $titulos->carrera;?></strong>.
	 <br>
	 <br>
	 Se extiende la presente certificación, en Jalapa, <?php echo "el " . date("d") . " del " . date("m") . " de " . date("Y");?>

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
