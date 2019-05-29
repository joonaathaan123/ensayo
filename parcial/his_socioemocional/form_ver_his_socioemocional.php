<h1>Historial Socioemocional</h1><br><br>

<div class="form-row">


    <div class="col-md-4 mb-3">
        <label>Nº De Identificacion</label>
        <input type="text" class="form-control" value="<?php echo $key['numeroid']; ?>" name="identificacion" placeholder="Nº De Identificacion" disabled>
    </div> 

    <div class="col-md-4 mb-3">
        <label>Nombres</label>
        <input type="text" class="form-control" value="<?php echo $key['nombres']; ?>" name="nombres" placeholder="Nombre" disabled>
    </div>

    <div class="col-md-4 mb-3">
        <label>Apellidos</label>
        <input type="text" class="form-control" value="<?php echo $key['apellidos']; ?>" name="apellidos" placeholder="Apellidos" disabled>
    </div>

</div><br>


<div class="form-group row">
    <label class="col-4">TIEMPO LIBRE</label>
    <div class="col-8">
        <textarea type="text" class="form-control" name="tiempoLibre" placeholder="TIEMPO LIBRE"
         rows="3" disabled><?php echo $key['tiempo_libre']; ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-4">RELACIONES INTERPERSONALES</label>
    <div class="col-8">
        <textarea type="text" class="form-control" name="relacionesInterpersonales" placeholder="RELACIONES INTERPERSONALES"
            rows="3" disabled><?php echo $key['r_interpersonale']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label class="col-4">COMPORTAMIENTO Y ESTADO DE ANIMO</label>
    <div class="col-8">
        <textarea type="text" class="form-control" name="comportamiento" placeholder="COMPORTAMIENTO Y ESTADO DE ANIMO"
            rows="3" disabled><?php echo $key['com_est_animo']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label class="col-4">EVENTOS TRAUMATICOS</label>
    <div class="col-8">
        <textarea type="text" class="form-control" name="eventosTraumaticos" placeholder="EVENTOS TRAUMATICOS" rows="3"
            disabled><?php echo $key['eventos_trau']; ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-4">PROYECTO DE VIDA</label>
    <div class="col-8">
        <textarea type="text" class="form-control" name="proyectoVida" placeholder="PROYECTO DE VIDA"
         rows="3" disabled><?php echo $key['proy_vida']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label class="col-4">ANTECEDENTE DE SALUD</label>
    <div class="col-8">
        <textarea type="text" class="form-control" name="antecedenteSalud" placeholder="ANTECEDENTE DE SALUD"
         rows="3" disabled><?php echo $key['antecedente_salud']; ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-4">ANTECEDENTE DE ATENCIÓN POR PSICOLOGIA/ PSIQUIATRICA/ TERAPIA OCUPACIONAL/
        NEUROPSICOLOGIA, ETC.</label>
    <div class="col-8">
        <textarea type="text" class="form-control" name="antecedenteAtencion" placeholder="ANTECEDENTE DE ATENCIÓN POR PSICOLOGIA/ PSIQUIATRICA/ TERAPIA OCUPACIONAL/ NEUROPSICOLOGIA, ETC."
            rows="4" disabled><?php echo $key['antecedente_ap']; ?></textarea>
    </div>
</div>
<button href="list_perfil.php" class="btn btn-primary btn-lg">Regresar <i class="fas fa-undo-alt"></i></button>

