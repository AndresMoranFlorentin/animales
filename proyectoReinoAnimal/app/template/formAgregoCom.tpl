{include file="app/template/navegadorAdmin.tpl"}

<input type="hidden" value="{$permiso_logueo}" name="permisoAdmin" />
<input type="hidden" value="{$id_animal}" name="id" />



{if $permiso_logueo=="usuario"}

    {include file="app/template/formularioComentario.tpl"}

{/if}

{literal}
    <div class="container-fluid">
        <h3>Estos son los comentarios del animal seleccionado: </h3>

        <div id="template-vue-comentarios">

            <div class="row">
                <div class="col-8">
                    <h4>Comentarios</h4>
                </div>
                <div class="col">
                    <h4>Puntaje</h4>
                </div>
                <div v-if="permiso ==='administrador'" class="col">
                    <h4>Borrar</h4>
                </div>

            </div>
            <div v-for="comentar in comentarios" key="comentar.id" class="row">
                <div class="col-8">
                    <p>{{ comentar.comentario }}</p>
                </div>
                <div class="col">
                    <p>{{ comentar.puntaje }}</p>
                </div>
                <input type="hidden" value="comentar.id" name="id_com" />

                <div v-if=" permiso === 'administrador'" class="col">
                    <a :data_id="comentar.id" v-on:click="borrar" href="#">Eliminar</a>
                </div>

            </div>
        </div>
    </div>


    <script src="app/api_js/comentarios.js"></script>
{/literal}



<!--{include file="app/template/template_vue/seccionComentario.tpl"}--->






{include file="app/template/footer.tpl"}