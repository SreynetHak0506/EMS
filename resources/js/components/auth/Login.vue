<template>
  <div class="c-app flex-row align-items-center">
    <CContainer>
      <CRow class="justify-content-center">
        <CCol md="6">
          <CCardGroup>
            <CCard class="p-4">
              <CCardBody>
                <CForm>
                 <div class="text-center"> 
                      <h1>Login</h1>
                  <p class="text-muted">Sign In to your account</p>
                 </div>
                  <CInput
                    placeholder="Username"
                    autocomplete="username email"
                  >
                  
                    <template #prepend-content><CIcon name="cil-user"/></template>
                  </CInput>
                  <CInput
                    placeholder="Password"
                    type="password"
                    autocomplete="curent-password"
                  >
                    <template #prepend-content><CIcon name="cil-lock-locked"/></template>
                  </CInput>
                  <CRow>
                    <CCol col="6" class="text-left">
                      <CButton color="primary" class="px-4">Login</CButton>
                    </CCol>
                    <CCol col="6" class="text-right">
                      <CButton color="link" class="px-0"> <router-link to="/reset">Forgot password?</router-link></CButton>
                      <CButton color="link">
                          <router-link to="/register">Register now!</router-link>
                          
                      </CButton>
                    </CCol>
                  </CRow>
                </CForm>
              </CCardBody>
            </CCard>
          </CCardGroup>
        </CCol>
      </CRow>
    </CContainer>
  </div>
</template>

<script>

export default {
   name: 'Login',
    data() {
            return {
                users: [],
                email: "",
                password: "",
                error: null
            }
        },
    created() {
            this.axios
                .get('http://127.0.0.1:8000/api/user')
                .then(response => {
                    this.users= response.data.data;
                    // console.log(response.data.data, this.users)
                    
                   
                });
        },
}
</script>