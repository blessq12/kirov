<script>
export default {
    data:()=>({
        show: false
    }),
    mounted(){
        
    }
}
</script>

<template>
    <button class="btn btn-outline-primary d-block d-lg-none" @click="show = !show">
          Меню
          <i class="fa fa-bars"></i>
    </button>
    <teleport to="body">
        <transition 
            enter-active-class="animate__animated animate__slideInDown"
            leave-active-class="animate__animated animate__slideOutUp"
        >
            <div class="mobile-menu" v-if="show" ref="mMenu">

            </div>
        </transition>
    </teleport>
</template>

<style lang="sass" scoped>
.mobile-menu
    position: fixed
    top: 50px
    left: 0
    width: 100%
    height: 300px
    z-index: 9
    background: $color-main
    border-radius: 0 0 20px 20px
</style>