<label></label>
<label></label>
<label></label>
<div class="container">
<h3>Para eliminar usuarios o darles permiso de administrador, observe las siguientes opciones:</h3>

<table class="table table-bordered">
    <thead class="thead-dark">
        <th>
            <h2>Nombre</h2>
        </th>
        <th>
            <h2>Email</h2>
        </th>
        <th>
            <h2>Rol</h2>
        </th>
        <th>
            <h2>opcion 1</h2>
        </th>
        <th>
            <h2>opcion 2</h2>
        </th>
        {foreach $los_usuarios  item=user}
            <tr>
                {$id = $user.id_usuario}
                <td class="table-warning">{$user.nombre}</td>
                <td class="table-primary">{$user.mail}</td>
                <td class="table-danger">{$user.rol}</td>

                {if $user.rol =="administrador" && $user.nombre !="Andres"}
                    <td><a action="noSerAdmin" href="{$BASE_URL}noSerAdmin/{$id}">Quitar Administrador</a></td>
                    <td></td>
                {elseif $user.rol =="administrador" && $user.nombre =="Andres"}
                    <td>No Esta permitido modificarlo</td>
                {else}
                    <td><a action="borrar" href="{$BASE_URL}borrarUsuario/{$id}">Borrar Usuario</a></td>
                    <td><a action="editar" href="{$BASE_URL}hacerAdmin/{$id}">Hacer Administrador</a></td>
                {/if}


            </tr>
        {{/foreach}}
</table>
</div>
<br>