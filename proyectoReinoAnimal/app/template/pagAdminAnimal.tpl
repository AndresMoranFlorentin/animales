{include file="app/template/navegadorAdmin.tpl"}

<h1> Seccion Animales</h1>
{if $permiso_logueado == "administrador"}

    {include file="app/template/permisosAdmin.tpl"}

{/if}

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

{include file="app/template/footer.tpl"}
