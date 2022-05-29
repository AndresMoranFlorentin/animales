<h1>Esta es la fila que se vera afectada por tu edicion:</h1>
<label></label>
<table border=1>
        <th><h2>Nombre</h2></th>
        <th><h2>Descripcion</h2></th>
        <th><h2>Alimentacion</h2></th>
        <th><h2>Habitat</h2></th>
        <th><h2>Extinto</h2></th>
        {foreach $fila  item=animal} 
            <tr>
            <td>{$animal.Nombre}</td>
            <td>{$animal.descripcion}</td>
            <td>{$animal.alimentacion}</td>
            <td>{$animal.habitat}</td>

            {if ($animal.extinto = 0)}
	          {'NO esta Extinto'}
         {else}
	           {'Extinto'}

            </td>
           
             <td>{$animal.extinto}</td>
       </tr>
       {/if}
       {{/foreach}}
        </table>
        </div>
        <h1>Escriba los datos que piensa editar a traves de este formulario:</h1>
<label></label>
<form action="route.php?action=actualizar" method="post" class="my-form">
             <div class="container" style="background-color:#bbb">
                <label>Nombre: <input type="text" name="nombre" value={$animal.Nombre}></label></p>
                <label>Descripcion: <input type="text" name="descripcion" value={$animal.descripcion}></label>
                <label>Alimentacion: <input type="text" name="alimentacion" value={$animal.alimentacion}></label>
                <label>Habitat: <input type="text" name="habitat" value={$animal.habitat}></label>
                <label>Especie:
                    <select name="especie">
                        <option >------</option>
                        <option value="1">Mamifero</option>
                        <option value="4">Reptil</option>
                        <option value="2">Molusco</option>
                        <option value="7">Aracnido</option>
                        <option value="8">Insecto</option>
                        <option value="9">Aves</option>
                        <option value="3">Anfibios</option>
                        <option value="5">Peces</option>
                        <option value="6">Gusanos</option>
                    </select>
                </label>
                <label>Extinto o no:
                    <select name="extinto">
                        <option>------</option>
                        <option value="0">Extinto</option>
                        <option value="1">No Extinto</option>
                    </select>
                </label>
                <input type="hidden" value="{$animal.id_animales}" name="id" /> 
                <input type="submit">
                </div>
            </form>