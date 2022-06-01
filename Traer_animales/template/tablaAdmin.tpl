<div>
    <table border=1>
        <th>
            <h2>Especie</h2>
        </th>
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
                {$id = $animal.id_animales}
                <td>{$animal.especies}</td>
                <td>{$animal.nombre}</td>
                <td>{$animal.descripcion}</td>
                <td>{$animal.alimentacion}</td>
                <td>{$animal.habitat}</td>
                {if $animal.extinto == 0}
                    <td>no extinto</td>

                {else}
                    <td>Extinto</td>
                {/if}


                <td><a action="borrar" href="route.php?action=borrar/{$id}">Borrar</a></td>
                <td><a action="editar" href="route.php?action=editar/{$id}">Editar</a></td>
                </td>

            </tr>
        {{/foreach}}
    </table>
</div>