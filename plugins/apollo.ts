import {
  createHttpLink,
  from,
  InMemoryCache,
  ApolloClient
} from '@apollo/client/core'
import { provideApolloClient } from '@vue/apollo-composable'
import { setContext } from '@apollo/client/link/context'

export default defineNuxtPlugin(() => {
  const { silverStripeToken, silverStripeApi } = useRuntimeConfig()

  process.env.NODE_TLS_REJECT_UNAUTHORIZED = "0";

  const httpLink = createHttpLink({
    uri: silverStripeApi
  })

  // authentication headers
  const authLink = setContext((_, { headers }) => {
    return {
      headers: {
        ...headers,
        Authrization: `Basic ${silverStripeToken}`
      }
    }
  })

  const cache = new InMemoryCache()

  const apolloClient = new ApolloClient({
    link: from([authLink, httpLink]),
    cache,
    connectToDevTools: true
  })

  provideApolloClient(apolloClient)
})
