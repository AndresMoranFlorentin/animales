<h1>Escriba los datos que piensa editar a traves de este formulario:</h1>
<label></label>
<form action="route.php?action=actualizar" method="post" class="my-form">
    <div class="form-group" style="background-color:rgb(132, 230, 200)">
        <label>Nombre: <input type="text" name="nombre" value="{$animal.nombre}" required></label>
        <label>Descripcion: <input type="text" name="descripcion" value="{$animal.descripcion}" required></label>
        <label>Alimentacion: <input type="text" name="alimentacion" value="{$animal.alimentacion}" required></label>
        <label>Habitat: <input type="text" name="habitat" value="{$animal.habitat}" required></label>
        <label>Especie:
            <select name="especie" class="form-control">
                <option>--Seleccionar--</option>
                {foreach $especie item=subespecie}
                    {if $animal.id_especie != $subespecie.id_especie}
                        <option value="{$subespecie.id_especie}">{$subespecie.especies}</option>
                    {else}
                        <option selected value="{$subespecie.id_especie}">{$subespecie.especies}</option>
                    {/if}
                {/foreach}
            </select>
        </label>
        <label>Extinto o no:
            <select name="extinto">
                <option value="0">Extinto</option>
                <option value="1">No Extinto</option>
            </select>
        </label>
        <input type="hidden" value="{$animal.id_animales}" name="id" />
        <input type="submit">
    </div>
</form>