<div class="container-fluid">


        <h1>Login : </h1>
        <div class="form-group" style="background-color:rgb(132, 230, 200)">
                <form action="{$BASE_URL}loguearse" method="post" class="my-form">
                        <label>Contraseña: <input type="password" class="form-control" name="contraseña"
                                        placeholder="Ingrese su contraseña" required></label>
                        <label>Mail: <input type="text" name="mail" placeholder="Ingrese su email" required></label>
                        <button class="btn btn-primary">Login</button>
        </div>
        <br><br>
        {include file="app/template/intro.tpl"}

</div>
{include file="app/template/footer.tpl"}