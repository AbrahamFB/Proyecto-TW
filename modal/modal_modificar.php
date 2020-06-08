<form id="actualidarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar país:</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>
          <div class="form-group">
            <label for="titulo" class="control-label">Titulo:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required maxlength="2">
			<input type="hidden" class="form-control" id="idprograma" name="idprograma">
          </div>
		  <div class="form-group">
            <label for="temporada" class="control-label">Temporada:</label>
            <input type="text" class="form-control" id="temporada" name="temporada" required maxlength="45">
          </div>
		  <div class="form-group">
            <label for="capitulo" class="control-label">Capitulo:</label>
            <input type="text" class="form-control" id="capitulo" name="capitulo" required maxlength="3">
          </div>

          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>