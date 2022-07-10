
{literal}
    <div class="container-fluid">
        <section id="orden_de_comentarios">
            
             <div class="row">
                <div class="col-8">
                   <h2>Comentarios</h2>
                </div>
                <div class="col">
                   <h2>Puntaje</h2>
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
    <script src="app/api_js/paginacion.js"> </script><!--se deforma el script a proposito !revisar si se quiere usar-->
{/literal}
<!---//GET /api/animal&ORDER=ASC
//GET /api/animal/?ORDER=ASC&col=nombre--->
