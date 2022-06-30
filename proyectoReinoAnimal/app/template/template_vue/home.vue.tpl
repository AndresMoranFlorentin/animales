<!----<table class="table table-bordered">
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
            {foreach $animales  item=animal}
                <tr>
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
                   
                </tr>
            {{/foreach}}
    </table>--->