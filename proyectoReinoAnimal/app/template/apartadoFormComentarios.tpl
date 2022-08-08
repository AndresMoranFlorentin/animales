{include file="app/template/navegadorAdmin.tpl"}

<input type="hidden" value="{$permiso_logueado}" name="permisoAdmin" />
<input type="hidden" value="{$id_animal}" name="id" />

<br><br>

{if $permiso_logueado=="usuario"}

    {include file="app/template/formularioComentario.tpl"}

{/if}

{literal}

        <div id="template-vue-comentarios">
            <div v-if="vacio === false" class="container-fluid">
                <h3>Estos son los comentarios del animal seleccionado: </h3>
                <br><br>
                <div class="row">
                    <div class="col1th">
                        <h4>Comentarios</h4>
                    </div>
                    <div class="col2th">
                        <h4>Puntaje</h4>
                    </div>
                    <div v-if="permiso ==='administrador'" class="colborrarth">
                        <h4>Borrar</h4>
                    </div>
                </div>
                <div>
                    <div v-for="comentar in comentarios" class="row">
                        <div class="col1">
                            <p>{{ comentar.comentario }}</p>
                        </div>
                        <div class="col2">
                            <p>{{ comentar.puntaje }}</p>
                        </div>
                        <input type="hidden" value="comentar.id" name="id_com" />

                        <div v-if=" permiso === 'administrador'" class="colborrar">
                            <a :data_id="comentar.id" v-on:click="borrar" href="#">Eliminar</a>
                        </div>

                    </div>
                </div>

            </div>
            <div v-else>
                <h2 class="cartel_no_encontrado">No habia comentarios en la fila seleccionada.....</h2>
            </div>
        </div>


    {/literal}
 
    <script src="app/api_js/comentarios.js"></script>
{include file="app/template/footer.tpl"}