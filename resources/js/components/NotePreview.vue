<script>
export default {
    computed: {
        select: function() {
            return this.$store.getters.getSelect
        },
        member1: function() {
            return this.$store.getters.getMember1
        },
        member2: function() {
            return this.$store.getters.getMember2
        },
        member3: function() {
            return this.$store.getters.getMember3
        },
        member4: function() {
            return this.$store.getters.getMember4
        },
        member5: function() {
            return this.$store.getters.getMember5
        },
        member6: function() {
            return this.$store.getters.getMember6
        },
        member7: function() {
            return this.$store.getters.getMember7
        },
        member8: function() {
            return this.$store.getters.getMember8
        },
        member9: function() {
            return this.$store.getters.getMember9
        },
        member10: function() {
            return this.$store.getters.getMember10
        },
        member11: function() {
            return this.$store.getters.getMember11
        },
    }
}
</script>

<template>
    <div class="col-lg-7 input-area h-screen">
        <div class="konvajs-content">
            <div class="w-full h-full">
                <div class="w-full h-full relative">
                    <div class="bg-gray-400 absolute top-0 left-0 preview-img" v-bind:class="select">
                        <div class="position-absolute text-center member member1">
                            <img :src="'/images/circle-removebg-preview.png'" class="circle" alt="" width="50px">
                            <p class="text-white font-medium mt-2 text-base">{{ member1 }}</p>
                        </div>
                        <div class="position-absolute text-center member member2">
                            <img :src="'/images/circle-removebg-preview.png'" class="circle" alt="" width="50px">
                            <p class="text-white font-medium mt-2 text-base">{{ member2 }}</p>
                        </div>
                        <div class="position-absolute text-center member member3">
                            <img :src="'/images/circle-removebg-preview.png'" class="circle" alt="" width="50px">
                            <p class="text-white font-medium mt-2 text-base">{{ member3 }}</p>
                        </div>
                        <div class="position-absolute text-center member member4">
                            <img :src="'/images/circle-removebg-preview.png'" class="circle" alt="" width="50px">
                            <p class="text-white font-medium mt-2 text-base">{{ member4 }}</p>
                        </div>
                        <div class="position-absolute text-center member member5">
                            <img :src="'/images/circle-removebg-preview.png'" class="circle" alt="" width="50px">
                            <p class="text-white font-medium mt-2 text-base">{{ member5 }}</p>
                        </div>
                        <div class="position-absolute text-center member member6">
                            <img :src="'/images/circle-removebg-preview.png'" class="circle" alt="" width="50px">
                            <p class="text-white font-medium mt-2 text-base">{{ member6 }}</p>
                        </div>
                        <div class="position-absolute text-center member member7">
                            <img :src="'/images/circle-removebg-preview.png'" class="circle" alt="" width="50px">
                            <p class="text-white font-medium mt-2 text-base">{{ member7 }}</p>
                        </div>
                        <div class="position-absolute text-center member member8">
                            <img :src="'/images/circle-removebg-preview.png'" class="circle" alt="" width="50px">
                            <p class="text-white font-medium mt-2 text-base">{{ member8 }}</p>
                        </div>
                        <div class="position-absolute text-center member member9">
                            <img :src="'/images/circle-removebg-preview.png'" class="circle" alt="" width="50px">
                            <p class="text-white font-medium mt-2 text-base">{{ member9 }}</p>
                        </div>
                        <div class="position-absolute text-center member member10">
                            <img :src="'/images/circle-removebg-preview.png'" class="circle" alt="" width="50px">
                            <p class="text-white font-medium mt-2 text-base">{{ member10 }}</p>
                        </div>
                        <div class="position-absolute text-center member member11">
                            <img :src="'/images/circle-removebg-preview.png'" class="circle" alt="" width="50px">
                            <p class="text-white font-medium mt-2 text-base">{{ member11 }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
