<template>
  <div>
    <CButton
                @click="openModelDepartment = true"
                color="primary"
                >
                Add New
           </CButton>
    <CModal
      title="Add Department"
      color="success"
      size="lg"
      :show.sync="openModelDepartment"
    >
     <CRow>
      <CCol sm="6">
        <CInput
          label="Department:"
          placeholder="Enter your department"
        />
      </CCol>
      <CCol sm="6">
        <CInput
          label="Note:"
          placeholder="Enter your note"
        />
      </CCol>
    </CRow>
    </CModal>
  </div>
</template>
<script>
export default {
 props:['openModelDepartment'],
  data () {
    return {
    //  successModal: false
    }
  }
}
</script>