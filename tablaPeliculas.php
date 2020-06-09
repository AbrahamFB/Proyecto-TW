<?php

        $consulta2 = "SELECT idpelicula, titulo, duracion, portada FROM pelicula";
        $resultado2 = $conexion->prepare($consulta2);
        $resultado2->execute();
        $data2=$resultado2->fetchAll(PDO::FETCH_ASSOC);
    ?>
        <a name="peliculas"></a>

        <h4 class="text-center text-black">PELICULAS</span></h4> 
            </header>    
            
            <br>  
            <div class="container">
                <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">        
                                <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Duración</th>                                
                                        <th>Portada</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $j = 0;
                                    foreach ($data2 as $dat) {
                                        @$j++;
                                        ?>
                                    <tr>
                                        <td><?php echo $dat['titulo'] ?></td>
                                        <td><?php echo $dat['duracion'] ?></td>
                                        <td><?php echo "<a href='#'><img src='vista2.php?id=$j' alt='Img' width='200'/></a>"; ?></td>    
                                        <td></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>                                
                                </tbody>        
                            </table>                    
                            </div>
                        </div>
                </div>  
            </div>    
      