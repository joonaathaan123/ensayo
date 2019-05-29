<h1>Seguimiento Psicologico Institucional</h1><br><br>


<div class="form-group row">
    <label class="col-1">FECHA</label>
    <div class="col-11">
        <input type="date" class="form-control" value=<?php echo $key['fecha']; ?> name="fecha" placeholder="FECHA" disabled>
    </div>
</div>



<div class="form-row">
    <label class="col-1">NOMBRE</label>
    <div class="col-5">
        <input type="text" class="form-control"  value=<?php echo $key['nombreestudiate']; ?> name="nombreEstudiate" placeholder="NOMBRE DEL ESTUDIANTE" disabled>
    </div>

    <label class="col-2">IDENTIFICACION</label>
    <div class="col-4">
        <input type="text" class="form-control" value=<?php echo $key['identificacion']; ?>  name="identificacion" placeholder="IDENTIFICACION" disabled>
    </div>
</div><br>

<div class="form-row"> 

    <div class="form-group col-md-4">
        <label>FECHA DE NACIMIENTO</label>
        <input type="date" class="form-control" value=<?php echo $key['fechanacimiento']; ?>  name="fechaNacimiento" placeholder="FECHA DE NACIMIENTO" disabled>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">CIUDAD DE ORIGEN</label>
        <input type="text" class="form-control"  value=<?php echo $key['ciudadorigen']; ?> name="ciUdadOrigen" placeholder="CIUDAD DE ORIGEN" disabled>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">EDAD ACTUAL</label>
        <input type="text" class="form-control"  value=<?php echo $key['edadactual']; ?> name="edadActual" placeholder="EDAD ACTUAL" disabled>
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label>CURSO ACTUAL</label>
        <input type="text" class="form-control"  value=<?php echo $key['cursoactual']; ?> name="cursoActual" placeholder="CURSO ACTUAL" disabled>
    </div>
    <div class="form-group col-md-4">
        <label>REPITENCIA DE CURSO</label>
        <input type="text" class="form-control"  value=<?php echo $key['repitenciacurso']; ?> name="Repitenciacurso" placeholder="REPITENCIA DE CURSO" disabled>
    </div>
</div><br><hr>

<h5>ANTECEDENTES FAMILIARES</h5><hr><br>

<div class="form-group col-md-1o">
    <label>¿CON QUIEN VIVE EL ESTUDIANTE?</label>
    <textarea type="text" class="form-control"   name="viveEstudiante" placeholder="¿CON QUIEN VIVE EL ESTUDIANTE?" rows="3"
    disabled><?php echo $key['viveestudiante']; ?></textarea>
</div>
<div class="form-row">

    <div class="form-group col-md-4">
        <label>NOMBRE</label>
        <input type="text" class="form-control"  value=<?php echo $key['nombrev']; ?> name="nombre" placeholder="NOMBRE" disabled>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">EDAD</label>
        <input type="text" class="form-control"  value=<?php echo $key['edadv']; ?> name="edad" placeholder="EDAD" disabled>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">DIRECCION</label>
        <input type="text" class="form-control" value=<?php echo $key['direcciov']; ?>  name="direcciom" placeholder="DIRECCION" disabled>
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label>TELEFONO</label>
        <input type="text" class="form-control" value=<?php echo $key['telefonov']; ?>  name="telefono" placeholder="TELEFONO" disabled>
    </div>
    <div class="form-group col-md-4">
        <label>PROFESION</label>
        <input type="text" class="form-control" value=<?php echo $key['profesionv']; ?>  name="profesion" placeholder="PROFESION" disabled>
    </div>
</div><br><hr>

<h5 style="text-align: left">ANTECEDENTES DEL PADRE</h5><hr><br>


<div class="form-row">

    <div class="form-group col-md-4">
        <label>NOMBRE</label>
        <input type="text" class="form-control" value=<?php echo $key['nombrep']; ?>  name="nombreP" placeholder="NOMBRE" disabled>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">ESCOLARIZACION</label>
        <input type="text" class="form-control" value=<?php echo $key['escolarizacionp']; ?>  name="escolarizacionP" placeholder="ESCOLARIZACION" disabled>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">DIRECCION</label>
        <input type="text" class="form-control" value=<?php echo $key['direccionp']; ?>  name="direccionP" placeholder="DIRECCION" disabled>
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label>EDAD</label>
        <input type="text" class="form-control" value=<?php echo $key['edadp']; ?>  name="edadP" placeholder="EDAD" disabled>
    </div>
    <div class="form-group col-md-4">
        <label>OCUPACION</label>
        <input type="text" class="form-control" value=<?php echo $key['ocupacionp']; ?>  name="ocupacionP" placeholder="OCUPACION" disabled>
    </div>
    <div class="form-group col-md-4">
        <label for="inputPassword4">TELEFONO</label>
        <input type="text" class="form-control" value=<?php echo $key['telefonop']; ?>  name="telefonoP" placeholder="TELEFONO" disabled>
    </div>
</div>
<br><br><hr>

<h5 style="text-align: left"> ANTECEDENTES DE LA MADRE</h5><hr><br>


<div class="form-row">


    <div class="form-group col-md-4">
        <label>NOMBRE</label>
        <input type="text" class="form-control" value=<?php echo $key['nombrem']; ?>  name="nombreM" placeholder="NOMBRE" disabled>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">ESCOLARIZACION</label>
        <input type="text" class="form-control"  value=<?php echo $key['escolarizacionm']; ?> name="escolarizacionM" placeholder="ESCOLARIZACION" disabled>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">DIRECCION</label>
        <input type="text" class="form-control" value=<?php echo $key['direccionm']; ?>  name="direccionM" placeholder="DIRECCION" disabled>
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label>EDAD</label>
        <input type="text" class="form-control"  value=<?php echo $key['edadm']; ?> name="edadM" placeholder="EDAD" disabled>
    </div>
    <div class="form-group col-md-4">
        <label>OCUPACION</label>
        <input type="text" class="form-control"  value=<?php echo $key['ocupacionm']; ?> name="ocupacionM" placeholder="OCUPACION" disabled>
    </div>
    <div class="form-group col-md-4">
        <label for="inputPassword4">TELEFONO</label>
        <input type="text" class="form-control" value=<?php echo $key['telefonom']; ?>  name="telefonoM" placeholder="TELEFONO" disabled>
    </div>
</div><br><hr>

<h5 style="text-align: left"> OTROS</h5><hr><br>


<div class="form-row">

    <div class="form-group col-md-4">
        <label>NOMBRE</label>
        <input type="text" class="form-control" value=<?php echo $key['nombreo']; ?>  name="nombreO" placeholder="NOMBRE" disabled>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">ESCOLARIZACION</label>
        <input type="text" class="form-control" value=<?php echo $key['escolarizaciono']; ?>  name="escolarizacionO" placeholder="ESCOLARIZACION" disabled>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">DIRECCION</label>
        <input type="text" class="form-control" value=<?php echo $key['direcciono']; ?>  name="direccionO" placeholder="DIRECCION" disabled>
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label>EDAD</label>
        <input type="text" class="form-control" value=<?php echo $key['edado']; ?>  name="edadO" placeholder="EDAD" disabled>
    </div>
    <div class="form-group col-md-4">
        <label>OCUPACION</label>
        <input type="text" class="form-control" value=<?php echo $key['ocupaciono']; ?>  name="ocupacionO" placeholder="OCUPACION" disabled>
    </div>
    <div class="form-group col-md-4">
        <label for="inputPassword4">TELEFONO</label>
        <input type="text" class="form-control" value=<?php echo $key['telefonoo']; ?>  name="telefonoO" placeholder="TELEFONO" disabled>
    </div>
</div><br>



<button href="list_perfil.php" class="btn btn-primary btn-lg">Regresar <i class="fas fa-undo-alt"></i></button>