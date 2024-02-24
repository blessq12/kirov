import { defineStore, acceptHMRUpdate } from "pinia";

export const telegramStore = defineStore('telegram', {
    state:()=>({
        url: ''
    }),
    getters:{},
    actions:{
        
    },
})

if (import.meta.hot) {
    import.meta.hot.accept(acceptHMRUpdate(telegramStore, import.meta.hot))
}