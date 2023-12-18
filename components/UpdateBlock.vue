<template>
    <section class="py-20">
        <div class="w-full flex justify-between">
            <h2 class="text-3xl flex items-center gap-x-2">
                {{ element?.title }}
                <UiIcon name="🚀"/>
            </h2>
            <div>
                <UiButton label="Lees meer"/>
            </div>
        </div>
    </section>
</template>

<script setup lang="ts">
defineProps({
    element: Object,
});
</script>