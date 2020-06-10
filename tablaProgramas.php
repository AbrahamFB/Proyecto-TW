<?php
    include_once 'bd/conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $consulta = "SELECT idprograma, titulo, temporada, capitulo, portada FROM programas";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<a name="programas"></a>
<h4 class="text-center text-black">PROGRAMAS</span></h4>
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
                            <th>Temporada</th>
                            <th>Capitulo</th>
                            <th>Portada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                    $im = 0;
                                    foreach ($data as $dat) {
                                        @$j++; ?>
                        <tr>
                            <td><?php echo $dat['titulo'] ?></td>
                            <td><?php echo $dat['temporada'] ?></td>
                            <td><?php echo $dat['capitulo'] ?></td>
                            <td><?php echo "<a href='#'><img src='../vista.php?id=$j' alt='Img' width='200'/></>"; ?>
                            </td>
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



<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="jquery/jquery-3.3.1.min.js"></script>
<script src="popper/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- datatables JS -->
<script type="text/javascript" src="datatables/datatables.min.js"></script>

<script type="text/javascript" src="main.js"></script>