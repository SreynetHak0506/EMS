<template>
  <div class="d-flex align-items-center">
    <CContainer fluid>
      <CRow class="justify-content-center">
        <CCol md="6">
          <CCard class="mx-4 mb-0">
            <CCardBody class="p-4">
              <CForm @submit.prevent="registerUser">
            
                <div class="text-center">
                <h1>Register</h1>
                <p class="text-muted">Create your account</p>
                </div>
                <CInput
                  placeholder="Username"
                  autocomplete="username"
                  v-model="user.username"
                >
                  <template #prepend-content><CIcon name="cil-user"/></template>
                </CInput>
                <CInput
                  placeholder="Email"
                  autocomplete="email"
                  prepend="@"
                  v-model="user.email"
                />
                <CInput
                  placeholder="Password"
                  type="password"
                  autocomplete="new-password"
                  v-model="user.password"
                >
                  <template #prepend-content><CIcon name="cil-lock-locked"/></template>
                </CInput>
                <CInput
                  placeholder="Confirm password"
                  type="password"
                  autocomplete="new-password"
                  class="mb-4"
                  v-model="user.confirm_password"
                >
                  <template #prepend-content><CIcon name="cil-lock-locked"/></template>
                </CInput>
                <CButton color="success"  type="submit" block>Create Account</CButton>
              </CForm>
            </CCardBody>
          </CCard>
        </CCol>
      </CRow>
    </CContainer>
  </div>
</template>

<script>
export default {
  name: 'Register',
  data() {
            return {
                user: {}
            }
        },
        methods: {
            registerUser() {
                this.axios
                    .post('http://127.0.0.1:8000/api/user/add', this.user)
                    .then(response => (
                       this.$router.push('/'),
                        console.log(response)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }

}
</script>