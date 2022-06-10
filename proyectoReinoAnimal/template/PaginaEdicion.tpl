<h1>Escriba los datos que piensa editar a traves de este formulario:</h1>

{if $tipoDeEdicion =='editar animal'}
    <label></label>
    <form action="{$BASE_URL}actualizarAnimal" method="post" class="my-form">
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
                {if $animal.extinto == 0}
                    <option selected value="0">No Extinto</option>
                    <option value="1">Extinto</option>
                {else}
                    <option value="0">No Extinto</option>
                    <option selected value="1">Extinto</option>
                {/if}
                </select>
            </label>
            <input type="hidden" value="{$animal.id_animales}" name="id" />
            <input type="submit">
        </div>
    </form>
{elseif $tipoDeEdicion =='editar especie'}

    <form action="{$BASE_URL}actualizarEspecie" method="post" class="my-form">

        <div class="container" style="background-color:rgb(132, 218, 115)">
            <label>Nombre de Especie: <input type="text" name="nombreEspecie" value="{$especie.especies}"></label></p>
            <label>Vertebrado si o no?:
                <select name="vertebrado">
                    {if $especie.vertebrados == "1"}
                        <option>-----</option>
                        <option selected value="1">Vertebrado</option>
                        <option value="0">Invertebrado</option>
                    {else}
                        <option>-----</option>
                        <option selected value="0">Invertebrado</option>
                        <option value="1">Vertebrado</option>
                    {/if}
            </label>
            <input type="hidden" value="{$especie.id_especie}" name="id" />
            <input type="submit">
        </div>
    </form>
{else}

{/if}
