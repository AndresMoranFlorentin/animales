{include file="app/template/navegadorAdmin.tpl"}
<br>
<div class="container-fluid">
        <div class="cartel_completo_div">

                <h2 class="error_ejecucion">Debera borrar primero los siguientes animales, si desea eliminar esa
                        especie:</h2>
                <br><br>
                <ul>
                        {foreach $nombres item=nombr}

                                <li>{$nombr.nombre}</li>

                        {/foreach}
                </ul>
        </div>
</div>
<br><br>
{include file="app/template/footer.tpl"}