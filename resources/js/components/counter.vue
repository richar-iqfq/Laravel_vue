<script>
    export default {
        data()
        {
            return {
                message : 'Here is a child component',
                value : 0
            }
        },
        methods : 
        {
            increase() {
                this.value ++
            },
            decrease() {
                this.value --
            }

        },
        computed: 
        {
            isButtonDisable() {
                return this.value == 0 ? true : false
            }
        }
    }
</script>

<template>
    <br>{{message}}<br>
    El valor es: {{value}}<br><br>
    <button @click="increase">Incrementar</button>
    <button @click="decrease" :disabled="isButtonDisable">Disminuir</button>
</template>