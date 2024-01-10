import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue' // Fix typo here
import JobView from '../views/JobView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      component: AboutView // Fix typo here
    },
    {
      path: '/job',
      name: 'job', // Fix typo here, and make sure it's a string
      component: JobView
    }
  ]
})

export default router
