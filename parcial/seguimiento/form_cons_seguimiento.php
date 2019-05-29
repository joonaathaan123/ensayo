<h1>Seguimiento Psicologico Institucional</h1><br><br>


<div class="form-group row">
    <label class="col-1">FECHA</label>
    <div class="col-11">
        <input type="date" class="form-control" value=<?php echo $key['fecha']; ?> name="fecha" placeholder="FECHA" required>
    </div>
</div>



<div class="form-row">
    <label class="col-1">NOMBRE</label>
    <div class="col-5">
        <input type="text" class="form-control"  value=<?php echo $key['nombreestudiate']; ?> name="nombreEstudiate" placeholder="NOMBRE DEL ESTUDIANTE" required>
    </div>

    <label class="col-2">IDENTIFICACION</label>
    <div class="col-4">
        <input type="text" class="form-control" value=<?php echo $key['identificacion']; ?>  name="identificacion" placeholder="IDENTIFICACION" required>
    </div>
</div><br>

<div class="form-row"> 

    <div class="form-group col-md-4">
        <label>FECHA DE NACIMIENTO</label>
        <input type="date" class="form-control" value=<?php echo $key['fechanacimiento']; ?>  name="fechaNacimiento" placeholder="FECHA DE NACIMIENTO" required>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">CIUDAD DE ORIGEN</label>
        <input type="text" class="form-control"  value=<?php echo $key['ciudadorigen']; ?> name="ciUdadOrigen" placeholder="CIUDAD DE ORIGEN" required>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">EDAD ACTUAL</label>
        <input type="text" class="form-control"  value=<?php echo $key['edadactual']; ?> name="edadActual" placeholder="EDAD ACTUAL" required>
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label>CURSO ACTUAL</label>
        <input type="text" class="form-control"  value=<?php echo $key['cursoactual']; ?> name="cursoActual" placeholder="CURSO ACTUAL" required>
    </div>
    <div class="form-group col-md-4">
        <label>REPITENCIA DE CURSO</label>
        <input type="text" class="form-control"  value=<?php echo $key['repitenciacurso']; ?> name="Repitenciacurso" placeholder="REPITENCIA DE CURSO" required>
    </div>
</div><br><hr>

<h5>ANTECEDENTES FAMILIARES</h5><hr><br>

<div class="form-group col-md-1o">
    <label>¿CON QUIEN VIVE EL ESTUDIANTE?</label>
    <textarea type="text" class="form-control"   name="viveEstudiante" placeholder="¿CON QUIEN VIVE EL ESTUDIANTE?" rows="3"
        required><?php echo $key['viveestudiante']; ?></textarea>
</div>
<div class="form-row">

    <div class="form-group col-md-4">
        <label>NOMBRE</label>
        <input type="text" class="form-control"  value=<?php echo $key['nombrev']; ?> name="nombrev" placeholder="NOMBRE" required>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">EDAD</label>
        <input type="text" class="form-control"  value=<?php echo $key['edadv']; ?> name="edadv" placeholder="EDAD" required>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">DIRECCION</label>
        <input type="text" class="form-control" value=<?php echo $key['direcciov']; ?>  name="direccionv" placeholder="DIRECCION" required>
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label>TELEFONO</label>
        <input type="text" class="form-control" value=<?php echo $key['telefonov']; ?>  name="telefonov" placeholder="TELEFONO" required>
    </div>
    <div class="form-group col-md-4">
        <label>PROFESION</label>
        <input type="text" class="form-control" value=<?php echo $key['profesionv']; ?>  name="profesionv" placeholder="PROFESION" required>
    </div>
</div><br><hr>

<h5 style="text-align: left">ANTECEDENTES DEL PADRE</h5><hr><br>


<div class="form-row">

    <div class="form-group col-md-4">
        <label>NOMBRE</label>
        <input type="text" class="form-control" value=<?php echo $key['nombrep']; ?>  name="nombreP" placeholder="NOMBRE" required>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">ESCOLARIZACION</label>
        <input type="text" class="form-control" value=<?php echo $key['escolarizacionp']; ?>  name="escolarizacionP" placeholder="ESCOLARIZACION" required>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">DIRECCION</label>
        <input type="text" class="form-control" value=<?php echo $key['direccionp']; ?>  name="direccionP" placeholder="DIRECCION" required>
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label>EDAD</label>
        <input type="text" class="form-control" value=<?php echo $key['edadp']; ?>  name="edadP" placeholder="EDAD" required>
    </div>
    <div class="form-group col-md-4">
        <label>OCUPACION</label>
        <input type="text" class="form-control" value=<?php echo $key['ocupacionp']; ?>  name="ocupacionP" placeholder="OCUPACION" required>
    </div>
    <div class="form-group col-md-4">
        <label for="inputPassword4">TELEFONO</label>
        <input type="text" class="form-control" value=<?php echo $key['telefonop']; ?>  name="telefonoP" placeholder="TELEFONO" required>
    </div>
</div>
<br><br><hr>

<h5 style="text-align: left"> ANTECEDENTES DE LA MADRE</h5><hr><br>


<div class="form-row">


    <div class="form-group col-md-4">
        <label>NOMBRE</label>
        <input type="text" class="form-control" value=<?php echo $key['nombrem']; ?>  name="nombreM" placeholder="NOMBRE" required>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">ESCOLARIZACION</label>
        <input type="text" class="form-control"  value=<?php echo $key['escolarizacionm']; ?> name="escolarizacionM" placeholder="ESCOLARIZACION" required>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">DIRECCION</label>
        <input type="text" class="form-control" value=<?php echo $key['direccionm']; ?>  name="direccionM" placeholder="DIRECCION" required>
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label>EDAD</label>
        <input type="text" class="form-control"  value=<?php echo $key['edadm']; ?> name="edadM" placeholder="EDAD" required>
    </div>
    <div class="form-group col-md-4">
        <label>OCUPACION</label>
        <input type="text" class="form-control"  value=<?php echo $key['ocupacionm']; ?> name="ocupacionM" placeholder="OCUPACION" required>
    </div>
    <div class="form-group col-md-4">
        <label for="inputPassword4">TELEFONO</label>
        <input type="text" class="form-control" value=<?php echo $key['telefonom']; ?>  name="telefonoM" placeholder="TELEFONO" required>
    </div>
</div><br><hr>

<h5 style="text-align: left"> OTROS</h5><hr><br>


<div class="form-row">

    <div class="form-group col-md-4">
        <label>NOMBRE</label>
        <input type="text" class="form-control" value=<?php echo $key['nombreo']; ?>  name="nombreO" placeholder="NOMBRE" required>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">ESCOLARIZACION</label>
        <input type="text" class="form-control" value=<?php echo $key['escolarizaciono']; ?>  name="escolarizacionO" placeholder="ESCOLARIZACION" required>
    </div>

    <div class="form-group col-md-4">
        <label for="inputPassword4">DIRECCION</label>
        <input type="text" class="form-control" value=<?php echo $key['direcciono']; ?>  name="direccionO" placeholder="DIRECCION" required>
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label>EDAD</label>
        <input type="text" class="form-control" value=<?php echo $key['edado']; ?>  name="edadO" placeholder="EDAD" required>
    </div>
    <div class="form-group col-md-4">
        <label>OCUPACION</label>
        <input type="text" class="form-control" value=<?php echo $key['ocupaciono']; ?>  name="ocupacionO" placeholder="OCUPACION" required>
    </div>
    <div class="form-group col-md-4">
        <label for="inputPassword4">TELEFONO</label>
        <input type="text" class="form-control" value=<?php echo $key['telefonoo']; ?>  name="telefonoO" placeholder="TELEFONO" required>
    </div>
</div><br>



<button  class="btn btn-primary btn-lg">Modificar <i class="fas fa-user-edit"></i></button>