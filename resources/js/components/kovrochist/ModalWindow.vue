<script>
export default {
    data:()=>({
        modal: false
    }),
    watch:{
        modal(val){
            if (val){
                document.body.classList.add('overflow-hidden')
                return
            }
            document.body.classList.remove('overflow-hidden')
        }
    }
}
</script>

<template>
    
    <button type="button" @click="modal = !modal" class="btn btn-primary w-100 rounded-pill">
        <slot></slot>
    </button>

    <teleport to="body">
        <transition
            enter-active-class="animate__animated animate__fadeIn"
            leave-active-class="animate__animated animate__fadeOut"
        >
            <div class="wrapper" v-if="modal">
                
                <div class="m-window position-relative rounded">
                    <div class="header border-bottom">
                        <span>
                            Оставить заявку
                        </span>
                        <button class="btn-close" @click="modal = !modal"></button>
                    </div>
                    <form @submit.prevent="()=>{console.log('asdad')}" method="post">
                        <div class="content py-3">
                                <div class="form-group mb-3">
                                    <label for="name">Введите имя:</label>
                                    <input type="text" name="name" id="name" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="tel">Номер телефона:</label>
                                    <input type="text" name="tel" id="tel" class="form-control" v-maska data-maska="+7 (###) ###-##-##">
                                </div>
                                
                        </div>
                        <div class="footer">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded-pill">Отправить</button>
                                <button type="reset" class="btn btn-outline-primary rounded-pill mx-2">Очистить</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </transition>
    </teleport>

</template>

<style lang="sass" scoped>
.wrapper
    position: fixed
    top: 0
    left: 0
    width: 100%
    height: 100%
    background: rgba(0, 0, 0, .6)
    z-index: 15
    display: flex
    align-items: center
    padding: 12px
    .m-window
        width: 100%
        min-height: 200px
        background: $color-white
        padding: 24px 12px
        z-index: 20
        .header 
            display: flex
            align-items: center
            justify-content: space-between
            height: 40px
            padding-bottom: 12px
            span
                font-size: 1.4rem
                display: block
                font-weight: 600
                font-family: geo

        
</style>