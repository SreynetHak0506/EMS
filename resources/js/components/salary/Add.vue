<template>
  <div>
    <CButton
                @click="openModalSalary = true"
                color="primary"
                >
                Add New

           </CButton>
    <CModal
      title="Add Salary"
      color="success"
      size="lg"
      :show.sync="openModalSalary"
    >
     <CRow>
      <CCol sm="6">
        <CInput
          label="Release Date:"
          type="date"
        />
      </CCol>
      <CCol sm="6">
        <CInput
          label="Paid Date:"
          type="date"
        />
      </CCol>
    </CRow>
     <CRow>
      <CCol sm="6">
        <CInput
          label="Basic Salary:"
          placeholder="Enter your salary"
        />
      </CCol>
      <CCol sm="6">
        <CInput
          label="Note:"
          placeholder="Enter your note"
        />
      </CCol>
    </CRow>
     <CRow>
       <CCol sm="6">
        <CSelect
          label="Employee Id:"
          :options="[1,2,3,4,5,]"
        />
      </CCol>
    </CRow>
    </CModal>
  </div>
</template>
<script>
export default {
   props: ['openModalSalary'],
  data () {
    return {
    //  openModalSalary: false
    }
  }
}
</script>