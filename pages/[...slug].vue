<template>
    <DynamicPage v-if="pageData" :page-data="setupPageObject(pageData?.readOnePage)" />
</template>

<script setup>
definePageMeta({
  layout: false,
})

const route = useRoute()
const pageData = ref({})

const query = gql`
  query GetPageBySlug($slug: String!) {
    readOnePage(filter: { title: { eq: $slug } }) {
      id
      title
      className
      elementalArea {
        elements {
          nodes {
            title
            className
          }
        }
      }
    }
  }
`

const variables = { slug: route.params.slug[0] }
const { data } = await useAsyncQuery (query, variables)
pageData.value = data.value
</script>
