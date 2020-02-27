<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\helpers\Url;
 $i = 1;
?>
<div class="site-index">
    <div class="body-content">

        <div class="row">
            
            <?php for($i = 1; $i<=35; $i++) : ?>
            <div class="col-lg-2">
                <h3>Ejercicio <?= $i ?></h3>
                <p><a href="<?= Url::To('@web/site/ejercicio'.$i); ?>">Ejercicio <?=$i ?></a></p>     
            </div>
            <?php endfor; ?>
            <div>
                <p>19-numero de empleados que sean vendedores</p>
            </div>
            <div>
                <p>20-datos de los empleados cuyos apellidos comiencen por M o N ordenados por apellido (ascendente)</p>
            </div>
            <div>
                <p>21-empleados vendedores, mostrando datos ordenados por apellido (ascendente)</p>
            </div>
            <div>
                <p>22-apellidos del empledo que mas gana</p>
            </div>
            <div>
                <p>23-empleados del departamento 10 que sean analistas, ordenar resultado por apellido y oficio (no es muy logico lo de por oficio) de manera ascendente</p>
            </div>
            <div>
                <p>24-listar los distintos meses en que los empleados se han dado el alta</p>
            </div>
            <div>
                <p>25-listar los distintos años en que los empleados se han dado el alta</p>
            </div>
            <div>
                <p>26-listar los distintos dias del mes en que los empleados se han dado el alta</p>
            </div>
            <div>
                <p>27-apellidos de los empleados que tengan salario >2000 o sean del departamento 20</p>
            </div>
            <div>
                <p>28-lista los apellidos del empleado y nombre del departamento</p>
            </div>
            <div>
                <p>29-listar apellido del empleado, oficio del empleado y nombre de departamento ordenado por apellido (descendente)</p>
            </div>
            <div>
                <p>30-listar empleados por departamento (salida igual a la foto)</p>
            </div>
            <div>
                <p>31-lo mismo que antes pero con el nombre en vez del numero</p>
            </div>
            <div>
                <p>32-listar apellido de los empleados ordenados por oficio y nombre</p>
            </div>
            <div>
                <p>33-selecionar de emple los empleados cuyo apellido empiece por A</p>
            </div>
            <div>
                <p>34-selecionar de emple los empleados cuyo apellido empiece por A o M</p>
            </div>
            <div>
                <p>35-selecionar de emple los empleados cuyo apellido no termine en Z</p>
            </div>
        </div>
    </div>
</div>
