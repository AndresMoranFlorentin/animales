{include file= "app/template/navegadorAdmin.tpl"}
<div class="container-fluid">
    <h1>Escriba los datos que piensa editar a traves de este formulario:</h1>

    {if $tipoDeEdicion =='editar animal'}

        <form action="{$BASE_URL}actualizarAnimal" method="post" class="my-form">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre</label>
                <input type="text" name="nombre" value="{$animal.nombre}" required>>
            </div>
            <label>Descripcion</label>
            <textarea class="form-control" name="descripcion" rows="3" value="{$animal.descripcion}"
                required>{$animal.descripcion}</textarea>
            <label></label>
            <textarea class="form-control" name="alimentacion" rows="3" value="{$animal.alimentacion}"
                required>{$animal.alimentacion}</textarea>
            <label></label>
            <textarea class="form-control" name="habitat" rows="2" value="{$animal.habitat}"
                required>{$animal.habitat}</textarea>

            <div class="form-group">
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
            </div>
            <input type="hidden" value="{$animal.id_animales}" name="id" />
                <input class="btn-primary" type="submit">
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
</div>