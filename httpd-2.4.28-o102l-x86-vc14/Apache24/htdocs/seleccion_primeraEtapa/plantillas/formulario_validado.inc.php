<div class="form-row">
    <div class="form-group col-md-6">
        <label>Fecha 1</label>
        <input type="date" class="form-control" name="fecha1" <?php $validador->mostrarFecha1(); ?>>
        <?php $validador->mostrarError_fecha1(); ?>
    </div>
    <div class="form-group col-md-6">
        <label>Días a sumar</label>
        <input type="number" class="form-control" name="numero1" <?php $validador->mostrarNumero1(); ?>>
        <?php $validador->mostrarError_numero1(); ?>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Fecha 2</label>
        <input type="date" class="form-control" name="fecha2" <?php $validador->mostrarFecha2(); ?>>
        <?php $validador->mostrarError_fecha2(); ?>
    </div>
    <div class="form-group col-md-6">
        <label>Días a sumar</label>
        <input type="number" class="form-control" name="numero2" <?php $validador->mostrarNumero2(); ?>>
        <?php $validador->mostrarError_numero2(); ?>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Fecha 3</label>
        <input type="date" class="form-control" name="fecha3" <?php $validador->mostrarFecha3(); ?>>
        <?php $validador->mostrarError_fecha3(); ?>
    </div>
    <div class="form-group col-md-6">
        <label>Días a sumar</label>
        <input type="number" class="form-control" name="numero3" <?php $validador->mostrarNumero3(); ?>>
        <?php $validador->mostrarError_numero3(); ?>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Fecha 4</label>
        <input type="date" class="form-control" name="fecha4" <?php $validador->mostrarFecha4(); ?>>
        <?php $validador->mostrarError_fecha4(); ?>
    </div>
    <div class="form-group col-md-6">
        <label>Días a sumar</label>
        <input type="number" class="form-control" name="numero4" <?php $validador->mostrarNumero4(); ?>>
        <?php $validador->mostrarError_numero4(); ?>
    </div>
</div>
<?php $validador->mostrarError_ordenFecha(); ?>
<button type="submit" class="btn btn-block btn-primary" name="submit">Calcular</button>
