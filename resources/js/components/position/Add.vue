<template>
  <div>
    <CButton
                @click="openModalPosition = true"
                color="primary"
                >
           Add New
           </CButton>
    <CModal
      title="Add Position"
      color="success"
      size="lg"
      :show.sync="openModalPosition"
    >
     <CRow>
      <CCol sm="6">
        <CInput
          label="Position:"
          placeholder="Enter your position"
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
   props: ['openModalPosition'],
  data () {
    return {
    //  openModalPosition: false
    }
  }
}
</script>