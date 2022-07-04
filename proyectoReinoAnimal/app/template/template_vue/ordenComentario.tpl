{literal}
    <div class="container-fluid">
        <section id="template-vue-comentarios">
            
             <div class="row">
                <div class="col-8">
                   <h2>Comentarios</h2>
                </div>
                <div class="col">
                   <h2>Puntaje</h2>
                </div>
                 <div v-if ="permiso_logueado == administrador" class="col">
                   <h2>Borrar</h2>
                </div>

             </div>
             <div v-for = "comentar in comentarios" class="row">
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