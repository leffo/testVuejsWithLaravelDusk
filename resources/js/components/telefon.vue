<template>
    <div>
        <select>
            <option selected>+7</option>
            <option>+983</option>
            <option>+39</option>
        </select>
        <input id="inputPhone" type="text" :value="textInput" dusk="input-phone">
        <br>
        <button @click.prevent="clickButton" dusk="ok-button">OK</button>
    </div>
</template>

<script>
export default {
    name: "telefon",
    data() {
        return {
            textInput: '',
        }
    },
    methods: {
        clickButton() {
            this.textInput = '(983) 654-89-46'
            console.log('good, boy, you press me');
        }
    },
}
</script>

<style scoped>

</style>
