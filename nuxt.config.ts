// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  extends: [
    'github:Violet88github/Nuxt-skeleton'
  ],
  modules: [
    '@nuxtjs/apollo'
  ],
  apollo: {
    clients: {
      default: {
        httpEndpoint: 'http://demo-nuxt-silverstripe.local/graphql'
      }
    },
  },
  runtimeConfig: {
    silverStripeToken: process.env.API_TOKEN,
    silverStripeApi: process.env.API_URL,
  },
})
