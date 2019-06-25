<form enctype="multipart/form-data" action="{{route('retos.store')}}" method="POST">
	{{csrf_field()}}
	<div class="modal fade" id="newReto">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
                    <h3 class="text-center">Reto</h3>
                    <button class="close" data-dismiss="modal">&times;</button>					
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">Encabezado</label>
						<input type="text" name="enunciado" v-model="enunciado" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="">Descripción</label>
						<textarea class="form-control" rows="2" name="descripcion" v-model="descripcion" required>
						</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Imagen</label>
                        <input type="file" id="url_imagen" name="url_imagen"  class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Crear</button>
					</div>				
				</div>
			</div>
		</div>
	</div>
</form>