<template>
  <CSidebar 
    class="mr-5"
  
  >
   
  <CButton color="info">
      Post
  </CButton>
   
  </CSidebar>
</template>

<script>
import nav from './_nav'
export default {
  name: 'Sidebar',
  nav,
//   computed: {
//     show () {
//       return this.$store.state.sidebarShow 
//     },
//     minimize () {
//       return this.$store.state.sidebarMinimize 
//     }
//   }
}
</script>
© 2021 GitHub, Inc.