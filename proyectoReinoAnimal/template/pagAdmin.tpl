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
{foreach $fila  item=animal}
    <tr>
        <td>{$animal.especies}</td>
        <td>{$animal.nombre}</td>
        <td>{$animal.descripcion}</td>
        <td>{$animal.alimentacion}</td>
        <td>{$animal.habitat}</td>

        {if $animal.extinto == 0}
            <td>no extinto</td>

        {else}
            <td>extinto</td>
        {/if}
        </td>
    </tr>
{/foreach}
</table>
</div>