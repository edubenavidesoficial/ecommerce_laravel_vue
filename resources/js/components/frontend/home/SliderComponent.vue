<template>
    <LoadingComponent :props="loading" />
    <section class="mb-10 sm:mb-20">
        <div>
            <Swiper v-if="sliders.length > 0" :slides-per-view="1" :speed="1000" :loop="true" :navigation="true"
                    :pagination="{ clickable: true }" :autoplay="{ delay: 2500 }" :modules="modules"
                    class="banner-swiper">
                <SwiperSlide v-for="slider in sliders" :key="slider.id">
                    <div v-if="slider.link">
                        <a :href="slider.link" class="block w-full h-full">
                            <img class="banner-image" :src="slider.image" alt="banner" loading="lazy">
                        </a>
                    </div>
                    <div v-else class="block w-full h-full">
                        <img class="banner-image" :src="slider.image" alt="banner" loading="lazy">
                    </div>
                </SwiperSlide>
            </Swiper>
        </div>
        <div>
    <Swiper :slides-per-view="1" :speed="1000" :loop="true" :navigation="true"
            :autoplay="{ delay: 2500 }" :modules="modules"
            class="banner-swiper">
        <SwiperSlide>
            <div class="text-slider">ENVÍO GRATIS A NIVEL NACIONAL</div>
        </SwiperSlide>
        <SwiperSlide>
            <div class="text-slider">COMPRA SEGURA</div>
        </SwiperSlide>
        <SwiperSlide>
            <div class="text-slider">INSTALACIÓN GRATIS</div>
        </SwiperSlide>
        <SwiperSlide>
            <div class="text-slider">DIFERIDOS SIN INTERESES</div>
        </SwiperSlide>
    </Swiper>
</div>

    </section>
</template>

<script>
import 'swiper/css';
import {Navigation, Pagination, Autoplay} from 'swiper/modules';
import {Swiper, SwiperSlide} from 'swiper/vue';
import statusEnum from "../../../enums/modules/statusEnum";
import LoadingComponent from "../components/LoadingComponent";

export default {
    name: "SliderComponent",
    components: {
        Swiper,
        SwiperSlide,
        LoadingComponent
    },
    setup() {
        return {
            modules: [Navigation, Pagination, Autoplay],
        }
    },
    data() {
        return {
            loading: {
                isActive: false
            },
            sliderProps: {
                search: {
                    paginate: 0,
                    order_column: 'id',
                    order_type: 'desc',
                    status: statusEnum.ACTIVE
                }
            }
        }
    },
    computed: {
        sliders: function () {
            return this.$store.getters['frontendSlider/lists'];
        }
    },
    mounted() {
        this.loading.isActive = true;
        this.$store.dispatch("frontendSlider/lists", this.sliderProps.search).then((res) => {
            this.loading.isActive = false;
        }).catch((err) => {
            this.loading.isActive = false;
        });
    }
}
</script>
<style>
.banner-swiper {
    width: 100%;
}

.banner-image {
    width: 100%;
    height: 100%;
    object-fit: cover; 
}

.text-slider {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 80px; /* Ajusta según tus necesidades */
    font-size: 1em;
    font-weight: bold;
    text-align: center;
    background-color: #232d4f;
    color: #ffffff;
    padding: 10px;
}
</style>