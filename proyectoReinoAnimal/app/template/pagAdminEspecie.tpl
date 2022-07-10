

{if $habilito =='acceso privado'}
    {include file= "app/template/navegadorAdmin.tpl"}
    <div class="container-fluid">
    <h1> Seccion Especies</h1>
    <div>

        <label></label>
        <label></label>
        <button><a action="mostrarFormEspecies" href="{$BASE_URL}mostrarFormEspecies">Agregar info a Tabla
                Especies</a></button>
        <label></label>
        <label></label>
    {else}
    {/if}
    <table class="table table-bordered">
        <thead class="thead-dark">
            <th>
                <h2>Nombre</h2>
            </th>
            <th>
                <h2>Vertebrado?</h2>
            </th>
            {if $habilito=='acceso privado'}
                <th>
                    <h2>Borrar</h2>
                </th>
                <th>
                    <h2>Editar</h2>
                </th>
            {/if}
            {foreach $especies  item=espec}
                <tr>
                    {$id = $espec.id_especie}
                    <td>{$espec.especies}</td>
                    {if $espec.vertebrados == "0"}

                        <td>Invertebrado</td>

                    {else}
                        <td>Vertebrado</td>
                    {/if}
                    {if $habilito=='acceso privado'}
                        <td><a action="borrar" href="{$BASE_URL}borrarEspecie/{$id}">Borrar</a></td>
                        <td><a action="editar" href="{$BASE_URL}editarEspecie/{$id}">Editar</a></td>
                    {else}
                    {/if}
                    </td>
                </tr>
            {{/foreach}}
    </table>
</div>
       
</div>