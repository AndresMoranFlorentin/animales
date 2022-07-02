<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

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
                <div v-if ="permiso_logueado == administrador" class="col">
                    <a :data_id="comentar.id" v-on:click="borrar"  href="#">Eliminar</a>
                </div>
               
             </div> 
        </section>
    </div>
{/literal}

{include file ="app/template/formularioComentario.tpl"}

