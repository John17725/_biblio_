<template>
    <div class="container">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary" v-on:click="searchyearData(2022)">2022</button>
            <button type="button" class="btn btn-secondary" v-on:click="searchyearData(2023)">2023</button>
            <button type="button" class="btn btn-secondary" v-on:click="searchyearData(2024)">2024</button>
        </div>
        <div class="container mt-2" v-if="showTables">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Total de ingresos en el año</th>
                        <th scope="col">Mujeres que asistieron</th>
                        <th scope="col">Hombres que asistieron</th>
                        <th scope="col">Total de prestamos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                showTables: false,
            }
        },
        methods: {
            async searchyearData(year){
                this.showTables= true;
                console.log("async search", year)
            },
        },
    }
</script>   