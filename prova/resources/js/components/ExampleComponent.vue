<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-header">Login</div>

                    <div class="card-body">
                        Usuario:
                        <input type="text" v-model="usuario">
                        <a class="tinybutt" href="/main"> Login </a>
                    </div>

                    <div class="card-body">
                        Senha:
                        <input type="text" v-model="senha">
                        <a class="tinybutt" href="/main"> Esqueceu senha? </a>
                    </div>

                </div>


            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data:() =>{
            return {
                usuario: '',
                senha: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
