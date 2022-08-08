<div class="container-fluid">
    {include file="app/template/navegadorAdmin.tpl"}
    <h1> Seccion Animales</h1>

    <button><a action="mostrarFormAnimales" href="{$BASE_URL}mostrarFormAnimales">
            Agregar info a Tabla Animal</a></button>
    <div>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <th>
                    <h2>Nombre</h2>
                </th>
                <th>
                    <h2>Especie</h2>
                </th>
                <th>
                    <h2>Descripcion</h2>
                </th>
                <th>
                    <h2>Alimentacion</h2>
                </th>
                <th>
                    <h2>Habitat</h2>
                </th>
                <th>
                    <h2>Extinto</h2>
                </th>
                <th>
                    <h2>Borrar</h2>
                </th>
                <th>
                    <h2>Editar</h2>
                </th>
                {if $permiso_logueado == "usuario"}

                    <th>
                        <h2></h2>
                    </th>
                {/if}
                {foreach $animales  item=animal}
                    <tr>
                        {$id = $animal.id_animales}
                        <td class="border-top">{$animal.nombre}</td>
                        <td>{$animal.especies}</td>
                        <td class="border-top">{$animal.descripcion}</td>
                        <td>{$animal.alimentacion}</td>
                        <td>{$animal.habitat}</td>
                        {if $animal.extinto == "0"}
                            <td>No extinto</td>

                        {else}
                            <td>Extinto</td>
                        {/if}
                        <td><a action="borrar" href="{$BASE_URL}borrarAnimal/{$id}">Borrar</a></td>
                        <td><a action="editar" href="{$BASE_URL}editarAnimal/{$id}">Editar</a></td>

                        {if $permiso_logueado == "usuario" or $permiso_logueado == "administrador"}

                            <td><a action="comentar" href="{$BASE_URL}comentarTabla/{$id}">comentar</a></td>

                        {/if}
                        </td>


                    </tr>
                {/foreach}
        </table>
    </div>
    {if $permiso_logueado == "usuario"}
        <br>
        <button><a action="apartadoComentarios" href="{$BASE_URL}apartadoComentarios">
                Seccion Todos los Comentarios Ordenados</a>
        </button>

    {/if}
    <br><br>
    {if $permiso_logueado == "usuario"}
        {literal}

            <br><br>
            <div class="presentacion_busqueda">
                <h2>Busqueda de los items avanzada, cada campo representa una columna de la tabla</h2>

                <br><br>
                <div class="row">
                    <form id="form_busqueda_avanzada_Nombre" class="form-row">

                        <div class="container-fluid" style="background-color:rgb(160, 77, 9)">
                            <label>Columna Nombre</label>
                            <input type="text" name="nombre" rows="3" placeholder="Buscar...." />

                            <input type="submit">
                        </div>
                    </form>
                    <form id="form_busqueda_avanzada_Descripcion" class="form-row">

                        <div class="container-fluid" style="background-color:rgba(25, 250, 220, 0.603)">
                            <label>Columna Descripcion</label>
                            <input type="text" name="descripcion" rows="3" placeholder="Buscar...." />

                            <input type="submit">
                        </div>
                    </form>
                    <form id="form_busqueda_avanzada_Alimentacion" class="form-row">

                        <div class="container-fluid" style="background-color:rgba(190, 79, 148, 0.603)">
                            <label>Columna Alimentacion</label>
                            <input type="text" name="alimentacion" rows="3" placeholder="Buscar...." />

                            <input type="submit">
                        </div>
                    </form>
                </div>
            </div>
            <br><br>
            <br><br>
            <div class="container-fluid">
                <section id="animales_encontrados">
                    <div v-if="encontrado==true">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <th>
                                    <h2>Nombre</h2>
                                </th>
                                <th>
                                    <h2>Descripcion</h2>
                                </th>
                                <th>
                                    <h2>Alimentacion</h2>
                                </th>
                                <th>
                                    <h2>Habitat</h2>
                                </th>
                                <th>
                                    <h2>Extinto</h2>
                                </th>
                            <tbody>
                                <tr v-for="animal in animales">
                                    <td class="border-top">{{animal.nombre}}</td>
                                    <td class="border-top">{{animal.descripcion}}</td>
                                    <td class="border-top">{{animal.alimentacion}}</td>
                                    <td class="border-top">{{animal.habitat}}</td>
                                    <td v-if="animal.extinto == 0">
                                        No esta extinto
                                    </td>
                                    <td v-else>
                                        Extinto
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div v-else="encontrado==false">
                        <h3>No se encontraron coincidencias....</h3>
                    </div>
                </section>
            </div>
            <br><br>
            <br><br>


        {/literal}
        <script src="app/api_js/busqueda_animal.js"></script>
    </div>
{/if}
{include file="app/template/footer.tpl"}