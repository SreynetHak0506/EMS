<template>
  <div>
    <CCard>
      <CCardHeader>
          <h3 class="text-center">Users List</h3>
           <CNavbar
          expandable="md"
          color="info"
        >
          <CToggler inNavbar @click="show=!show"/>
          <!-- <CNavbarBrand href="#">Tables</CNavbarBrand> -->
          <CCollapse :show="show" navbar>
            <CNavbarNav>
              <CNavItem>
                <CLink
                class="text-white"
                to="/employee/detail">
                EMPLOYEE
                </CLink>
              </CNavItem>
              <CNavItem><CLink
                class="text-white"
                to="department/detail">
                DEPARTMENT
                </CLink></CNavItem>
               <CNavItem><CLink
                class="text-white"
                to="position/detail">
                POSITION
                </CLink></CNavItem>
              <CNavItem><CLink
                class="text-white"
                to="salary/detail">
                SALARY
                </CLink></CNavItem>
            </CNavbarNav>
            <!-- Right aligned nav items -->
            <CNavbarNav class="ml-auto">
              <CForm inline class="align-middle">
                <CInput
                  class="mr-2 my-0"
                  placeholder="Search"
                  size="sm"
                />
                <CButton color="light" size="sm">
                  Search
                </CButton>
              
              </CForm>
              <CDropdown
                in-nav
                toggler-text="User"
              >
                <CDropdownItem class="text-center"><router-link to="/login" >Logout</router-link></CDropdownItem>
                <!-- <CDropdownItem><router-link to="/">Signout</router-link></CDropdownItem> -->
              </CDropdown>
            </CNavbarNav>
          </CCollapse>
        </CNavbar>
      </CCardHeader>
      <CCardBody>
      <Tables/>
      </CCardBody>
    </CCard>
  </div>
</template>
<script>
import Tables from './Tables.vue'
export default {
  name: 'Navbar',
  components:{
      Tables
  },
  data () {
    return {
      show: false,
      navbarText: false,
      navbarDropdown: false
    }
  }
}
</script>