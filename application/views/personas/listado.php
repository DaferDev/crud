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
    <a href="guardar" class="btn btn-success">Guardar</a>
    <br><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Edad</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach ($personas as $key => $p) : ?>
    <tr>
      <th scope="row"><?php echo $p->persona_id ?></th>
      <td><?php echo $p->nombre ?></td>
      <td><?php echo $p->apellido ?></td>
      <td><?php echo $p->edad ?></td>
      <td>
        <a href="guardar/<?php echo $p->persona_id ?>">Editar</a>
        <br>
        <a href="ver/<?php echo $p->persona_id ?>">Ver</a>
        <br>
        <a href="#"
        data-toggle="modal" 
        data-target="#DeletePerson" 
        data-id="<?php echo $p->persona_id ?>"
        data-name="<?php echo $p->nombre ?>">Borrar</a>

      </td>
    </tr>
    <?php endforeach; ?>    
  </tbody>
</table>
        <div class="modal fade" id="DeletePerson" tabindex="-1" role="dialog" aria-labelledby="DeletePersonLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DeletePersonLabel"></h5>
                ¿Seguro que quieres eliminar el Registro?
                <span></span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary"id="b-borrar">Borrar</button>
            </div>
            </div>
        </div>
        </div> 
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"></script>
        <script>
            var id;
            var link;
            
        $('#DeletePerson').on('show.bs.modal', function (event) {
            link = $(event.relatedTarget) 
            id = link.data('id') 
            var name = link.data('name') 


            var modal = $(this)
            modal.find('.modal-title span').text(name);
            })
    $("#b-borrar").click(function(){
              $.ajax({
          url: "<?php echo base_url() ?>personas/borrar_ajax/"+id,
          context: document.body
        }).done(function(res) {
          console.log(res)
          $("#DeletePerson").modal('hide');
          $(link).parent().parent().remove()
        });

    });
      </script> 
    </div>
</body>
</html>