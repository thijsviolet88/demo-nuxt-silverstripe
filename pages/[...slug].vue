<template>
  <div>
    <h2>
      {{ data }}
    </h2>
  </div>
</template>

<script setup lang="ts">
const route = useRoute();

const query = gql`
  query GetPageBySlug($slug: String!) {
    readOnePage(filter: { title: { eq: $slug } }) {
      id
      title
      content
    }
  }
`
const variables = { slug: route.params.slug[0] }
const { data } = await useAsyncQuery(query, variables)
</script>
