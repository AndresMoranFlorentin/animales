
 {if $tipoDeForm =='animales'}
	<h2>Agregar a animales</h2>
        
            <form action="agregarAnimales" method="post" class="my-form">
             <div class="container" style="background-color:#bbb">
                <label>Nombre: <input type="text" name="nombre"></label></p>
                <label>Descripcion: <input type="text" name="descripcion"></label>
                <label>Alimentacion: <input type="text" name="alimentacion"></label>
                <label>Habitat: <input type="text" name="habitat"></label>
                <label>Especie:
                    <select name="especie">
                        <option >------</option>
                        {foreach $especies item=nombres}
                                <option>{$nombres.especies}</option>
                        {/foreach}
                    </select>
                </label>
                <label>Extinto o no:
                    <select name="extinto">
                        <option>------</option>
                        <option value="1">Extinto</option>
                        <option value="0">No Extinto</option>
                    </select>
                </label>
                <input type="submit">
                </div>
            </form>
{elseif $tipoDeForm =='especies'}
	<h2>Agregar a especies</h2>
    <form action="agregarEspecies" method="post" class="my-form">

             <div class="container" style="background-color:rgb(132, 218, 115)">
                <label>Nombre de Especie: <input type="text" name="nombreEspecie"></label></p>
                <label>Vertebrado si o no?: 
                <select name="vertebrado">
                    <option>------</option>
                    <option value="0">Invertebrado</option>
                    <option value="1">Vertebrado</option>
                </label>
                <input type="submit">
                </div>
    </form>
{else}
	
{/if}
        