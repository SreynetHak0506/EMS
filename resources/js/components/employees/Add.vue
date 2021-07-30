<template>
  <div>
    <CButton
                @click="successModal = true"
                color="primary"
                >
                Add New
               
           </CButton>
    <CModal
      title="Add Employee"
      color="success"
      size="lg"
      :show.sync="successModal"
    >
     <CRow>
      <CCol sm="6">
        <CInput
          label="Code:"
          placeholder="Enter your code"
        />
      </CCol>
      <CCol sm="6">
        <CInput
          label="Name:"
          placeholder="Enter your name"
        />
      </CCol>
    </CRow>
     <CRow>
      <CCol sm="6">
          <CSelect
          label="Gender:"
          :options="['Female','Male']"
        />
      </CCol>
      <CCol sm="6">
        <CInput
          label="Phone Number:"
          placeholder="Enter your phone number"
        />
      </CCol>
    </CRow>
    <CRow>
      <CCol sm="6">
          <CInput
                label="Date Of Day:"
                type="date"
              />
      </CCol>
      <CCol sm="6">
          <CInput
                label="Photo:"
                type="file"
                
              />
      </CCol>
    </CRow>
    <CRow>
      <CCol sm="6">
          <CInput
                label="Address:"
                placeholder="Enter your address"
              />
      </CCol>
      <CCol sm="6">
        <CInput
                label="Status:"
                placeholder="Enter your status"
        />
      </CCol>
    </CRow>
     <CRow>
      <CCol sm="6">
          <CInput
                label="Joning Date:"
                type="date"
              />
      </CCol>
       <CCol sm="6">
          <CInput
                label="Leaving Date:"
                type="date"
              />
      </CCol>
    </CRow>
    <CRow>
        <CCol sm="6">
          <CInput
                label="Basic Salary:"
                placeholder="Enter your basic salary"
              />
      </CCol>
      <CCol sm="6">
          <CInput
                label="Others:"
                placeholder="Others"
              />
      </CCol>
    </CRow>
    <CRow>
      <CCol sm="6">
        <CSelect
          label="Department Id:"
          :options="[1,2,3,4,5,]"
        />
      </CCol>
      <CCol sm="6">
        <CSelect
          label="Position Id:"
          :options="[1,2,3,4,5,]"
        />
      </CCol>
    </CRow>
    </CModal>
  </div>
</template>
<script>

export default {
props:['successModal'],
  data () {
    return {
    //  successModal: false
    }
  }
  
}
</script>