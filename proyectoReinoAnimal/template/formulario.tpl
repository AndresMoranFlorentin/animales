 <h2>Agregar a animales</h2>
        
            <form action="route.php?action=agregar" method="post" class="my-form">
             <div class="container" style="background-color:#bbb">
                <label>Nombre: <input type="text" name="nombre"></label></p>
                <label>Descripcion: <input type="text" name="descripcion"></label>
                <label>Alimentacion: <input type="text" name="alimentacion"></label>
                <label>Habitat: <input type="text" name="habitat"></label>
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
                <input type="submit">
                </div>
            </form>
        
        