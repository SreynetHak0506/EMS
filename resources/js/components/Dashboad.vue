<template>
  <div>
    <!-- <SideBar/> -->
   <Navbar
   class="ml-5"
   
   />
  </div>
</template>
<script>
import Narbar from './containers/Navbar.vue'
// import SideBar from './containers/SideBar.vue'
export default {
  name: 'Dashboad',
  components:{
      Narbar,
      // SideBar;
  }
}
</script>
