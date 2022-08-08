<div class="container-fluid">
    <br>
    <form method="post" action="{$BASE_URL}confirm_registro">
        <label>Nombre <input type="text" name="name_user" /></label>
        <label>E-Mail <input type="mail" name="mail" /></label>
        <label>Contraseña <input type="password" name="password" /></label>

        <input type="submit">
    </form>
    {include file="app/template/intro.tpl"}
    <br>
</div>
{include file="app/template/footer.tpl"}