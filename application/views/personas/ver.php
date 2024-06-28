<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="container">

    <br>
    <a href="../listado" class="btn btn-success">Regresar</a>
    <br><br>

        <?php echo form_open('');?>
        <div class="form-group">
            <?php
            echo form_label('Nombre','nombre');
            $input = array(
                'name'  => 'nombre',
                'value' => $nombre,
                'readonly'=> 'readonly',
                'class' => 'form-control input-lg'
        );
        echo form_input($input);
        ?>
        </div>
        <div class="form-group">
            <?php
            echo form_label('Apellido','apellido');
            $input = array(
                'name'  => 'apellido',
                'value' => $apellido,
                'readonly'=> 'readonly',
                'class' => 'form-control input-lg'
        );
        echo form_input($input);
        ?>
        </div>
        <div class="form-group">
            <?php
            echo form_label('Edad','edad');
            $input = array(
                'name'  => 'edad',
                'type'=> 'number',
                'value' => $edad,
                'readonly'=> 'readonly',
                'class' => 'form-control input-lg'
        );
        echo form_input($input);
        ?>
        </div>

        <?php echo form_close();?>
    </div>
</body>
</html>