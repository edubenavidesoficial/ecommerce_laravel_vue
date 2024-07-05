<template>
    <VueElementLoading spinner="bar-fade-scale" color="#232d4f" :active="props.isActive" :is-full-screen="true"/>
</template>

<script>
import VueElementLoading from 'vue-element-loading';

export default {
    name: "LoadingComponent",
    components: {VueElementLoading},
    props: ['props']
}
</script>
