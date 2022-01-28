<div>
    <div class="container-xl">
        <form>
            <div class="mb-3 row">
                <h1 class="text-center mt-3">Informacion del inmueble</h1>
                <div class="col-12 col-md-6">
                    <label for="title" class="form-label fs-5 ">Titulo</label>
                    <input type="text" class="form-control" name="title" id="title"
                        placeholder="Ej: Casa en Sol Amado 2 Pisos">
                </div>
                <div class="col-12 col-md-6">
                    <label for="desc" class="form-label fs-5">Descripcion</label>


                    <textarea class="form-control" name=desc"" id="desc" rows="7"></textarea>


                </div>
                <div class="col-12 col-md-6">

                     <label for="category" class="form-label fs-5">Categoria</label>
                     <select class="form-control" name="category" id="category">
                       <option>Casas</option>
                       <option>Apartamentos</option>

                     </select>

                </div>

                <div class="col-12 col-md-6">

                    <label for="status" class="form-label fs-5">Status</label>
                    <select class="form-control" name="status" id="status">
                      <option>En venta</option>
                      <option>En alquiler </option>

                    </select>

               </div>
            </div>
            <div class="mb-3 row">
                <h1 class="text-center mt-3">Contenido del inmueble</h1>
                <div class="col-12 col-md-6">
                    <label for="area" class="form-label fs-5 ">Area (Mts)</label>
                    <input type="number" class="form-control" name="area" id="area">
                </div>
                <div class="col-12 col-md-6">
                    <label for="hab" class="form-label fs-5 ">Habitaciones</label>
                    <input type="number" class="form-control" name="hab" id="hab">
                </div>

                <div class="col-12 col-md-6">
                    <label for="bath" class="form-label fs-5 ">Baños</label>
                    <input type="number" class="form-control" name="bath" id="bath">
                </div>

                <div class="col-12 col-md-6">
                    <label for="est" class="form-label fs-5 ">Estacionanmientos</label>
                    <input type="number" class="form-control" name="est" id="est">
                </div>

                <div class="col-12 col-md-6">
                    <label for="parq" class="form-label fs-5 ">Parques</label>
                    <input type="number" class="form-control" name="parq" id="parq">
                </div>


                <div class="col-12 col-md-6">
                    <label for="pool" class="form-label fs-5 ">Piscinas</label>
                    <input type="number" class="form-control" name="pool" id="pool">
                </div>



            </div>

            <div class="mb-3 row">
                <h1 class="text-center mt-3">Direccion del inmueble</h1>
                <div class="col-12 col-md-6">
                    <label for="locality" class="form-label fs-5 ">Localidad</label>
                    <input type="text" class="form-control" name="locality" id="locality">
                </div>


            </div>

            <div class="mb-3 row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Action</button>
                </div>
            </div>
        </form>
    </div>
</div>
