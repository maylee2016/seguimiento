<?php include("views/global/header.view.php") ?>

<?php include('views/global/title.view.php') ?>



    <div class="main">

        <h6>UNIVERSIDAD MAYOR DE SAN SIMON</h6>
        <h6>VICERECTORADO</h6>

        <div class="container">
            <div align="center"><h3>SEGUIMIENTO ACADEMICO DOCENTE</h3></div>

            <table>
                <tbody>
                <?php
                foreach ($arregloDocentesRoles as $arregloDocenteRol){ ?>
                    <tr>
                        <td><?= $arregloDocenteRol['NOMBRE_ROL']?></td>
                        <td><pre><?= $arregloDocenteRol['NOMBRE_DOC']?></pre></td>
                        <td><pre><?= $arregloDocenteRol['APELLPA_DOC']?></pre></td>
                        <td><pre><?= $arregloDocenteRol['APELLMA_DOC']?></pre></td>
                        <td><pre><?= $arregloDocenteRol['CI_DOC']?>  <?= $arregloDocenteRol['EXPEDIDO_CI_DOC']?></pre></td>

                    </tr>
                <?php }
                ?>
                </tbody>
           </table>


            <table>
                <tbody>
                <thead>
                <tr>
                    <th> </th>
                    <th><h5>NOMBRES</h5></th>
                    <th><h5><strong>APELLIDO PATERNO</strong></h5></th>
                    <th>APELLIDO MATERNO</th>
                    <th>CI</th>
                </tr>
                </thead>
                </tbody>
            </table>

            <table>
                <thead>
                <tr>
                    <h6>FACULTAD:</h6>
                    <h6>CARRERA:</h6>
                    <h6>DEPARTAMENTO:</h6>
                    <h6>MATERIAS</h6>
                    <h6>SIGLAS</h6>
                    <h6>HR.TEORIA</h6>
                    <h6>HR.PRACTICA</h6>
                </tr>
                </thead>
            </table>




            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>nombre docente</th>
                    <th>apellido paterno docente</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($arregloDocentes as $arregloDocente) { ?>
                    <tr>
                        <td><?= $arregloDocente["NOMBRE_DOC"] ?></td>
                        <td><?= $arregloDocente["APELLPA_DOC"] ?></td>
                    </tr>
                <?php }
                ?>
                </tbody>
            </table>

        </div>
    </div>


<?php include('views/global/footer.view.php') ?>