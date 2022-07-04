<h1>Aqui podra Ver el listado de animales pero de forma paginada</h1>

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
        {foreach $animales  item=animal}
            <tr>

                <td class="border-top">{$animal.nombre}</td>
                <td class="border-top">{$animal.descripcion}</td>
                <td>{$animal.alimentacion}</td>
                <td>{$animal.habitat}</td>
                {if $animal.extinto == "0"}
                    <td>No extinto</td>

                {else}
                    <td>Extinto</td>
                {/if}

            </tr>
        {/foreach}
</table>

<form method="post" action="{$BASE_URL}seccionPaginada">


    <button type="submit" name="boton" value="retroceso">Retroceso</button>
    <button type="submit" name="boton" value="avance">Avance</button>

</form>
<h2>seleccione el Orden de los comentarios = </h2>
<form id="form_orden_de_puntaje" >
    <select name="orden">
        <option value="ascendente">Ascendente</option>
        <option value="descendente">Descendente</option>
    </select>
    <input type="submit">
</form>
<br><br>
{literal}
    <div class="container-fluid">
        <section id="comentarios_ordenados">
           <h1>{{subtitulo}}</h1>
            <div class="row">
                <div class="col-8">
                    <h2>Comentarios</h2>
                </div>
                <div class="col">
                    <h2>Puntaje</h2>
                </div>

            </div>
            <div v-for="comentar in comentarios" class="row">
                <div class="col-8">
                    <p>{{ comentar.comentario }}</p>
                </div>
                <div class="col">
                    <p>{{ comentar.puntaje }}</p>
                </div>
            </div>
        </section>
    </div>
    <script src="api_js/comentarios.js"> </script>
{/literal}

</div>