<template>
    <section class="py-20">
        <h2 class="text-4xl font-medium">{{ element?.title }}</h2>
    </section>
</template>

<script setup lang="ts">
defineProps({
    element: Object,
});
</script>