<template>
  <div>
    <CRow>
      <CCol>
        <CCard>
          <CCardHeader>
              <h3 class="text-center">Department Lists</h3>
           <AddDepartment
           :openModelDepartment="openModelDepartment"
           />
          </CCardHeader>
          <CCardBody>
                <CDataTable
                :items="items"
                :fields="fields"
                >

                <template #action>
                    <td>
                    <CButton
                        color="warning"
                    >
                        Edit
                    </CButton>
                    </td>
                      <td>
                     <CButton
                        color="danger"
                    >
                        Delete
                    </CButton>
                    </td>
                </template>
                </CDataTable>
            </CCardBody>
          <CCardFooter>
            Standard Footer.
          </CCardFooter>
        </CCard>
      </CCol>
    </CRow>
  </div>
</template>
<script>
import AddDepartment from './Add.vue'
const items = [
  {  department: 'IT', note: 'D01'},

  {  department: 'Finance', note: 'D02'},

  {  department: 'Manager', note: 'D03'},

  {  department: 'Staff', note: 'D04'},

  {  department: 'IT', note: 'D05'},
  
]

const fields = [
  'id',
  { key: 'department' },
  'note',
  { key: 'action'}
]

export default {
  name: 'Tables',
  components:{
  AddDepartment
  },
  data () {
    return {
      items: items.map((item, id) => { return {...item, id}}),
      fields,
    //  successModal: false
    }
  },

}
</script>