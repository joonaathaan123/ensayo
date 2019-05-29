<h1>Notificacion De Caso En Psicologia</h1><br><br>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="inputEmail4">FECHA</label>
        <input type="date" class="form-control" value="<?php echo $key['fecha']; ?>" name="fecha" placeholder="FECHA" disabled>
    </div>
    <div class="form-group col-md-4">
        <label for="inputPassword4">EDAD</label>
        <input type="text" class="form-control" value="<?php echo $key['edad']; ?>" name="edad" placeholder="Edad" disabled>
    </div>
    <div class="form-group col-md-4">
        <label for="inputPassword4">GRADO</label>
        <input type="text" class="form-control" value="<?php echo $key['grado']; ?>" name="grado" placeholder="GRADO" disabled>
    </div>
</div><br><br>

<div class="form-group row">
    <label class="col-2">ESTUDIANTE:</label>
    <div class="col-10">
        <input type="text" class="form-control" value="<?php echo $key['estudiante']; ?>" name="estudiante" placeholder="ESTUDIANTE" disabled>
    </div>
</div>

<div class="form-group row">
    <label class="col-2">ASISTENTES:</label>
    <div class="col-10">
        <input type="text" class="form-control" value="<?php echo $key['asistencia']; ?>" name="asistentes" placeholder="ASISTENTES" disabled>
    </div>
</div>

<div class="form-group row">
    <label class="col-2">MOTIVO</label>
    <div class="col-10">
        <textarea type="text" class="form-control" name="motivo" placeholder="MOTIVO" rows="3" disabled><?php echo $key['motivo']; ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-2">DESCRIPCION (Registre aquí la situación presentada y la forma como la
        ha manejado hasta el momento)</label>
    <div class="col-10">
        <textarea type="text" class="form-control" name="descripcion" placeholder="DESCRIPCION" rows="8" disabled><?php echo $key['descripcion']; ?></textarea>
    </div>
</div>

<div class="form-group">
    <label>COMENTARIOS GENERALES:</label>
    <textarea type="text" class="form-control" name="comentarios" placeholder="COMENTARIOS GENERALES" rows="3" disabled><?php echo $key['comentariog']; ?></textarea>
</div>

<div class="form-group row">
    <label class="col-2">COMPROMISOS DEL DOCENTE:</label>
    <div class="col-10">
        <textarea type="text" class="form-control" name="compromisoDocente" placeholder="COMPROMISOS DEL DOCENTE" rows="3" disabled><?php echo $key['compromisodoc']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label class="col-2">COMPROMISOS DE LOS PADRES:</label>
    <div class="col-10">
        <textarea type="text" class="form-control" name="compromisoPadres" placeholder="COMENTARIOS DE LOS PADRES" rows="3" disabled><?php echo $key['compromisopad']; ?></textarea>
    </div>
</div>

<div class="form-group">
    <label>CONCLUSIONES:</label>
    <textarea type="text" class="form-control" name="conclusiones" placeholder="CONCLUSIONES" rows="3" disabled><?php echo $key['conclusiones']; ?></textarea>
    <br>
</div>
<button href="list_not_pedagogica.php" class="btn btn-primary btn-lg">Regresar <i class="fas fa-undo-alt"></i></button>