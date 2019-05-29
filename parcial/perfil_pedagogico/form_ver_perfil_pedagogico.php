<h1>Perfil Pedagógico</h1><br><br>

<div class="form-row">

   

    <div class="col-md-4 mb-3">
        <label>Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $key['nombre']; ?>"
        disabled>
    </div>

    <div class="col-md-4 mb-3">
        <label>Edad</label>
        <input type="text" class="form-control" name="edad" placeholder="Edad" value="<?php echo $key['edad']; ?>"
        disabled>
    </div>

    <div class="col-md-4 mb-3">
        <label>Fecha De Naciemiento</label>
        <input type="date" class="form-control" name="fecha" placeholder="Fecha De Nacimiento" value="<?php echo $key['fecha']; ?>"
        disabled>
    </div>

</div>
<br>

<h5>DESCRIPCIÓN DEL ESTUDIANTE</h5><br>




<div class="form-row">


    <label class="col-sm-2 col-form-label">Socioafectiva</label>
    <div class="col-sm-10">
        <textarea type="text" class="form-control" name="socioafectiva" placeholder="Socioafectiva" rows="3" disabled><?php echo $key['socioafectiva']; ?></textarea>
    </div>
</div> <br>

<div class="form-row">
    <label class="col-sm-2 col-form-label">Cognitiva</label>
    <div class="col-sm-10">
        <textarea type="text" class="form-control" name="cognitiva" placeholder="Cognitiva" rows="3" disabled><?php echo $key['cognitiva']; ?></textarea>
    </div>
</div> <br>

<div class="form-row">
    <label class="col-sm-2 col-form-label">Comunicación</label>
    <div class="col-sm-10">
        <textarea type="text" class="form-control" name="comunicacion" placeholder="Comunicación" rows="3" disabled><?php echo $key['comunicacion']; ?></textarea>
    </div>
</div> <br>

<div class="form-row">
    <label class="col-sm-2 col-form-label">Moral Y Espiritual</label>
    <div class="col-sm-10">
        <textarea type="text" class="form-control" name="moral" placeholder="Moral Y Espiritual" rows="3" disabled><?php echo $key['moral']; ?></textarea>
    </div>
</div><br>
<div class="form-row">

    <div class="col-md-6 mb-3">
        <label>Fortalezas</label>
        <textarea type="text" class="form-control" name="fortalezas" placeholder="Fortalezas" rows="3" disabled><?php echo $key['fortalezas']; ?></textarea>
    </div>

    <div class="col-md-6 mb-3">
        <label>Debilidades</label>
        <textarea type="text" class="form-control" name="debilidades" placeholder="Debilidades" rows="3" disabled><?php echo $key['debilidades']; ?></textarea>
    </div>

</div>

<div class="form-row">

    <label class="col-sm-2 col-form-label">Barreras En El Aprendizaje</label>
    <div class="col-sm-10">
        <textarea type="text" class="form-control" name="barreras" placeholder="Barreras En EL Aprendizaje" rows="3"
        disabled><?php echo $key['barreras']; ?></textarea>
    </div>

</div><br>

<div class="form-row">

    <label class="col-sm-2 col-form-label ">Estrategias Utilizadas En EL Aula</label>
    <div class="col-sm-10">
        <textarea type="text" class="form-control" name="estrategias" placeholder="Estrategias Utilizadas En El Aula"
            rows="3" disabled><?php echo $key['estrategias']; ?></textarea>
    </div>






</div><br><br>

<button href="list_perfil.php" class="btn btn-primary btn-lg">Regresar <i class="fas fa-undo-alt"></i></button>
