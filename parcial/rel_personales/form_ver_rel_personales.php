<h1 style="text-align: center">Relaciones Familiares</h1>
<hr><br>
<div class="form-row">

    <div class="col-md-4 mb-3">
        <label>Nº De Identificacion</label>
        <input type="text" class="form-control" name="identificacion" placeholder="Nº De Identificacion" value="<?php echo $key['numeroid']; ?>" disabled>
    </div>

    <div class="col-md-4 mb-3">
        <label>Nombres</label>
        <input type="text" class="form-control" name="nombres" placeholder="Nombre" value="<?php echo $key['nombres']; ?>" disabled>
    </div>

    <div class="col-md-4 mb-3">
        <label>Apellidos</label>
        <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" value="<?php echo $key['apellidos']; ?>" disabled>
    </div>

</div><br>



<h5 style="text-align: left ">valores de relaciones del estudiante</h5>
<hr><br>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Familiares</th>
            <th scope="col">Excelente</th>
            <th scope="col">Bueno</th>
            <th scope="col">Regular</th>
            <th scope="col">Mala</th>
            <th scope="col">No Aplica</th>
        </tr>
    </thead>
    <tbody>
        <!-- padre -->
        <?php
        //excelente
        if ($key['vr_ep'] == "excelente") {
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionP" value="excelente"  checked>
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionP" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php   
        // bueno
        }elseif($key['vr_ep'] == "bueno"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionP" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionP" value="bueno" checked>
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // regular  
        }elseif($key['vr_ep'] == "regular"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionP" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionP" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="regular" checked >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // malo
        }elseif($key['vr_ep'] == "malo"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionP" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionP" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="malo"  checked>
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // no aplica
        }elseif($key['vr_ep'] == "no_aplica"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionP" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionP" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionP" value="no_aplica" checked >
                </div>
            </td>
          
        </tr>
        <?php  
        //cierre de if del padre
        }
        ?>
        
        
        <!-- madre -->
        
        <?php
        //excelente
        if ($key['vr_em'] == "excelente") {
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionM" value="excelente" checked>
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionM" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php   
        // bueno
        }elseif($key['vr_em'] == "bueno"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionM" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionM" value="bueno" checked>
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // regular  
        }elseif($key['vr_em'] == "regular"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionM" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionM" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="regular" checked >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // malo
        }elseif($key['vr_em'] == "malo"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionM" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionM" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="malo"  checked>
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // no aplica
        }elseif($key['vr_em'] == "no_aplica"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionM" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionM" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionM" value="no_aplica" checked >
                </div>
            </td>
          
        </tr>
        <?php  
        //cierre de if del madre
        }
        ?>



        <!-- Hermanos -->

        <?php
        //excelente
        if ($key['vr_eh'] == "excelente") {
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionH" value="excelente" checked>
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionH" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php   
        // bueno
        }elseif($key['vr_eh'] == "bueno"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionH" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionH" value="bueno" checked>
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // regular  
        }elseif($key['vr_eh'] == "regular"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionH" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionH" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="regular" checked >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // malo
        }elseif($key['vr_eh'] == "malo"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionH" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionH" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="malo"  checked>
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // no aplica
        }elseif($key['vr_eh'] == "no_aplica"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionH" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionH" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionH" value="no_aplica" checked >
                </div>
            </td>
          
        </tr>
        <?php  
        //cierre de if del hermanos
        }
        ?>


        
        <!-- abuelos -->
      

        <?php
        //excelente
        if ($key['vr_ea'] == "excelente") {
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionA" value="excelente" checked>
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionA" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php   
        // bueno
        }elseif($key['vr_ea'] == "bueno"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionA" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionA" value="bueno" checked>
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // regular  
        }elseif($key['vr_ea'] == "regular"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionA" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionA" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="regular" checked >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // malo
        }elseif($key['vr_ea'] == "malo"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionA" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionA" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="malo"  checked>
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // no aplica
        }elseif($key['vr_ea'] == "no_aplica"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionA" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionA" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionA" value="no_aplica" checked >
                </div>
            </td>
          
        </tr>
        <?php  
        //cierre de if del abuelos
        }
        ?>



        <!-- padrastro o madrastra -->

        <?php
        //excelente
        if ($key['vr_eo'] == "excelente") {
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionPM" value="excelente" checked>
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionPM" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php   
        // bueno
        }elseif($key['vr_eo'] == "bueno"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionPM" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionPM" value="bueno" checked>
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // regular  
        }elseif($key['vr_eo'] == "regular"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionPM" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionPM" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="regular" checked >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // malo
        }elseif($key['vr_eo'] == "malo"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionPM" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionPM" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="malo"  checked>
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="no_aplica" >
                </div>
            </td>
          
        </tr>
        <?php  
        // no aplica
        }elseif($key['vr_eo'] == "no_aplica"){
        ?>
        <tr>
            <th scope="row" required>Con el Padre</th>
           
            <td>
                <div class="form-check form-check-inline" >
                
                    <input class="form-check-input" type="radio" name="relacionPM" value="excelente" >
                
                </div>
              
            </td>  
          
            <td>
                <div class="form-check form-check-inline">
                
                    <input class="form-check-input" type="radio" name="relacionPM" value="bueno" >
                  
                </div>
            </td>
          
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="regular"  >
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="malo" >
                </div>
            </td>

            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="relacionPM" value="no_aplica" checked >
                </div>
            </td>
          
        </tr>
        <?php  
        //cierre de if del padrastro / madrastra
        }
        ?>



    </tbody>
</table><br><br>
<div class="form-group row">
    <label class="col-2">Observaciones</label>
    <div class="col-10">
        <textarea type="text" class="form-control" name="observaciones" placeholder="Observaciones" rows="3" disabled><?php echo $key['observaciones']; ?></textarea>
    </div>
</div>
<h5 style="text-align: center ">Antecedentes Escolares</h5>

<div class="form-group row">
    <label class="col-2">Historia Escolar</label>
    <div class="col-10">
        <textarea type="text" class="form-control" name="hisoria" placeholder="Historia Escolar" rows="3" disabled><?php echo $key['historia_escol']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label class="col-2">Habitos De Estudios y Dif. Academica</label>
    <div class="col-10">
        <textarea type="text" class="form-control" name="habitos" placeholder="Habitos De Estudios y Dif. Academica"
            rows="3" disabled><?php echo $key['habitos_estu']; ?></textarea>
    </div>
</div><br>




<button href="list_perfil.php" class="btn btn-primary btn-lg">Regresar <i class="fas fa-undo-alt"></i></button>
