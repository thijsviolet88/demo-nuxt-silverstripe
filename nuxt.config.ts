// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  extends: [
    'github:Violet88github/Nuxt-skeleton'
  ],
  modules: [
    // '@nuxt/image',
    // '@formkit/nuxt',
    // 'nuxt-lodash',
    // 'nuxt-simple-sitemap',
    // 'nuxt-icon',
    // '@nuxtjs/tailwindcss',
    // '@vueuse/nuxt',
    '@nuxtjs/apollo'
  ],
  css: [
    '@/assets/css/main.css'
  ],
  apollo: {
    clients: {
      default: {
        httpEndpoint: 'https://event-planner.local/graphql'
      }
    },
  },
  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },
})
