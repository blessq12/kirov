<script>
export default {
    props:{
        tickets: Array
    },
    mounted(){

    }
}
</script>

<template>

    <div class="overflow-hidden">
        <div class="ticker">
            <ul>
                <li v-for="e in tickets">{{ e }}</li>
            </ul>
        </div>
    </div>

</template>

<style lang="sass" scoped>
ul
    list-style: none
    padding: 0
    margin: 0
    display: flex
    align-items: center
    li
        display: inline-block
        background: purple
        white-space: nowrap
</style>