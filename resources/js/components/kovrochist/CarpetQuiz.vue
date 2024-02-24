<script>
import { object, string } from 'yup'
import { mapStores } from 'pinia'
import { telegramStore } from '../../stores/TelegramStore'
export default {
    props:{
        setup: Object
    },
    mounted(){

    },
    data:()=>({
        formHeight: null,
        schema: object({

        }),

    }),
    methods:{},
    watch:{},
    computed:{
        
    }
}
</script>

<template>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">
                    узнать стоимость услуги 
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex align-items-center text-light bg-image position-relative py-5" style="background: url(https://catherineasquithgallery.com/uploads/posts/2021-02/1613302199_113-p-sinii-teksturnii-fon-181.jpg);min-height:400px;">
        <div class="overlay"></div>
        <div class="container position-relative">
            <div class="row row-cols-1 row-cols-md-2 align-items-center">
                <div class="col mb-4 mb-md-0">
                    <p class="text-light opacity-50 mb-0" style="font-size: 10px;">
                        *мы не передаем информацию третьим лицам
                    </p>
                    <h4 class="mb-4">Пройдите короткий опрос, чтобы мы могли сказать точную стоимость чистки</h4>
                    <p class="">
                        Либо свяжитесь с намии любым другим удобным способом и мы оперативно оценим стоимость
                    </p>
                    <div class="row row-cols-2 g-2">
                        <div class="col">
                            <a href="tel" class="btn btn-light rounded-pill w-100">Позвонить</a>
                        </div>
                        <div class="col">
                            <a href="tel" class="btn btn-success rounded-pill w-100">WhatsApp</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="border border-light h-100 rounded p-2 p-md-3" style="min-height: 300px;">
                        <div class="progress" role="progressbar" aria-label="progress" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<style lang="sass" scope>
.bg-primary
    background: #4badf1 !important
    color: #fff !important
</style>