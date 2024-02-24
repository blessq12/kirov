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
                <div class="container">
                    <div class="row mb-4">
                        <div class="col">
                            <span class="text-light d-block">Адрес:</span>
                            <p class="mb-0">Киров, ул.Романа Ердякова, 25</p>
                        </div>
                        <div class="col">
                            <span class="text-light d-block">Телефон:</span>
                            <p class="mb-0">
                                <a href="tel:">+7 (901) 479-49-40</a>
                            </p>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-12 mb-2">
                            <a href="" class="btn btn-light rounded-pill w-100" target="_blank">
                                <i class="fa fa-map-marker"></i>
                                Проложить маршрут
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="" class="btn btn-success rounded-pill w-100" target="_blank">
                                <i class="fa fa-whatsapp"></i>
                                WhatsApp
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="" class="btn btn-light rounded-pill w-100" target="_blank">
                                <i class="fa fa-phone"></i>
                                Позвонить
                            </a>
                        </div>
                    </div>
                </div>
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
    min-height: 300px
    z-index: 9
    background: $color-main
    border-radius: 0 0 20px 20px
    padding-top: 70px
    padding-bottom: 24px
    span
        font-weight: 600
        margin-bottom: 8px
        font-size: 1rem
    p
        font-size: 1.2rem
        color: $color-white !important
        a
            color: inherit
</style>