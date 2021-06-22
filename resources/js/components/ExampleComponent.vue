<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                    <hr>
                    <h4>Footer</h4>
                    <br>
                    <a href="/input" id="input-href">input</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Telefon from "./telefon";
    export default {
        components: { Telefon },
        mounted() {
            console.log('Component mounted.')
        },
    }
</script>
