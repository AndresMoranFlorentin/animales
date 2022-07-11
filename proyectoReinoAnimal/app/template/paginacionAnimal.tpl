{include file="app/template/navegadorAdmin.tpl"}
<h1>Aqui podra Ver el listado de Comentarios pero en forma mas detallada</h1>
<br><br>
<br><br>
<h2>si selecciona un puntaje, se mostraran los comentarios con ese puntaje que haya elegido:</h2>
<br><br>
<div class="container-fluid">
    <form id="form_puntaje">
        <select name="puntuacion">
            <option>---Elija---</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input class="button_select" type="submit">
    </form>
    {literal}
        <div id="comentarios_filtrados">
            <h3 class="subtitulo">{{ subtitle }}</h3>
            <br><br>
            <div class="row">
                <div class="th_comentario">
                    <h2>Comentarios</h2>
                </div>
                <div class="th_comentario2">
                    <h2>Puntaje</h2>
                </div>

            </div>
            <div v-for="comenta in comentario" class="row">
                <div class="filas">
                    <p>{{ comenta.comentario }}</p>
                </div>
                <div class="filas2">
                    <p>{{ comenta.puntaje }}</p>
                </div>
            </div>
        </div>
    </div>
    <script src="app/api_js/filtrarComentarios.js"> </script>
    <br><br>
    <h2>seleccione el Orden de los comentarios por puntaje: </h2>

    <form id="form_orden_de_puntaje">
        <select name="orden">
            <option value="ascendente">Ascendente</option>
            <option value="descendente">Descendente</option>
        </select>
        <input type="submit">
    </form>

    <br><br>


    <section id="comentarios_ordenados">
        <div class="container-fluid">
            <div class="row">
                <div class="th_comentario">
                    <h2>Comentarios</h2>
                </div>
                <div class="th_comentario2">
                    <h2>Puntaje</h2>
                </div>

            </div>
            <div v-for="comentar in comentarios" class="row">
                <div class="filas">
                    <p>{{ comentar.comentario }}</p>
                </div>
                <div class="filas2">
                    <p>{{ comentar.puntaje }}</p>
                </div>
            </div>
        </div>
    </section>


{/literal}

<script src="app/api_js/ordenarComentarios.js"> </script>

{include file="app/template/footer.tpl"}