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
                      <h1>Reset Password</h1>
                 </div>
                  <CInput
                  placeholder="Email"
                  autocomplete="email"
                  prepend="@"
                />
                  <CRow>
                    <CCol col="6" class="text-left">
                      <CButton color="primary" class="px-4"> Send Code </CButton>
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
  name: 'Login'
}
</script>