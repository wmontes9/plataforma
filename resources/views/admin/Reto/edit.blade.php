<form enctype="multipart/form-data" id="formUpdateReto" action="admin/retos/{fillReto.id}" method="POST">
    {{csrf_field()}}
    @method('put')
    <div class="modal fade" id="editReto">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
                    <h3 class="text-center">Editar reto</h3>
                    <button class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
                        <label for="">Titulo</label>
                        <input type="hidden" :value="'{{url('admin/retos/')}}/'" id="ruta" class="form-control">
						<input type="text" name="enunciado" v-model="fillReto.enunciado" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="">Descripción</label>
						<textarea class="form-control" rows="10" name="descripcion" v-model="fillReto.descripcion" required>
						</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Imagen</label>
                        <input type="file" id="url_imagen_e" name="url_imagen_e"  class="form-control">
					</div>
					<div class="form-group">
                        <label for="">Imagen</label>
                        <img :src="'{{asset('storage/imgReto')}}' +'/'+ fillReto.url_imagen" class="img-fluid" alt="Responsive image">
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Actualizar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>