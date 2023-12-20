<template>
    <NuxtLayout v-if="pageData" :name="pageLayout">
        <component v-if="pageData?.elementalArea" v-for="(element, index) in pageData?.elementalArea?.elements" :is="Components[parseSilverStripeNames(element?.type)]" :key="index" :element="element"/>
    </NuxtLayout>
</template>

<script setup>

const props = defineProps({
    pageData: Object
});

const Components = {
    CarouselBlock: resolveComponent('CarouselBlock'),
    UpdateBlock: resolveComponent('UpdateBlock'),
};

const pageLayout = parseSilverStripeNames(props.pageData?.type)?.toLocaleLowerCase();

</script>