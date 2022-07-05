
{literal}
    <div class="container-fluid">
        <section id="template-vue-animales">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <th>
                        <h2>Nombre</h2>
                    </th>
                    <th>
                        <h2>Descripcion</h2>
                    </th>
                    <th>
                        <h2>Alimentacion</h2>
                    </th>
                    <th>
                        <h2>Habitat</h2>
                    </th>
                    <th>
                        <h2>Extinto</h2>
                    </th>
                <tbody>
                    <tr v-for = "animal in animales">
                        <td class="border-top">{{animal.nombre}}</td>
                        <td class="border-top">{{animal.descripcion}}</td>
                        <td class="border-top">{{animal.alimentacion}}</td>
                        <td class="border-top">{{animal.habitat}}</td>
                        <td v-if="animal.extinto == 0">
                            No esta extinto
                        </td>
                        <td v-else>
                            Extinto</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
    <script src="api_js/animales.js"></script>
{/literal}