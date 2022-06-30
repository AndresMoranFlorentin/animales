<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<div class="container-fluid">
<h1> Seccion Especies</h1>
{if $habilito=='acceso privado'}
    {include file= "app/template/navegadorAdmin.tpl"}
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
        {if $permiso_logueado=="administrador" && $habilito !== "publico"}
            <h1>ERES ADMINISTRADOR</h1>

        {elseif $permiso_logueado=="usuario" && $habilito !== "publico"}
            <h1>ERES ENTONCES UN USUARIO</h1>
        {else}

        {/if}
</div>