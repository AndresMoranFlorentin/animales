
<h1>llegaste al lugar para agregar comentarios</h1>

<form id="form-agregar-comentario" class="form-row">

    <div class="container-fluid" style="background-color:rgba(180, 21, 21, 0.603)">
       <textarea name="comentario" rows="3"></textarea>

        <select name="puntaje">
            <option>------</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>

        </select>

        <input type="hidden" value="5" name="id">

        <input type="submit"/>
    </div>
</form>

<script src="api_js/comentarios.js"> </script>
