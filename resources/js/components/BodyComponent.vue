
<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div v-bind:key="part" v-for="part in parts">
                    <input type="checkbox" name="body[]" v-bind:value="part.id"> {{ part.part_name }} | {{ part.part_description }} <hr>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // make a function to get all the parts that have a category of car
    export default {
        mounted() {
            console.log('Component mounted.')
            this.getParts()
        },
        data() {
            return {
                parts: []
            }
        },
        methods: {
            getParts() {
                axios.get('/api/parts/body')
                    .then(response => {
                        this.parts = response.data
                    })
                    .catch(error => {
                        console.log(error)
                    })
            }

        }
    }
</script>