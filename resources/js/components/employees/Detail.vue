<template>
  <div>
    <CRow>
      <CCol>
        <CCard>
          <CCardHeader>
              <h3 class="text-center">Employee List</h3>
                <Add
                :successModal= "successModal"
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
import Add from './Add.vue'
const items = [
  {  code: 'Admin', name: 'sreynet hak', gender: 'Admin', phone_number: 'Admin',date_of_birth: '1500$',
  photo:'069617811',address:'kompong cham',status:'Single',department_id:'0',position_id:'0'},

  {  code: 'Staff', name: 'sreynoch hak', gender: 'Staff', phone_number: 'Developer',date_of_birth: '800$',
  photo:'069617811',address:'kompot',status:'Single',department_id:'1',position_id:'1'},

  {  code: 'Manager', name: 'Rak smey', gender: 'Manager', phone_number: 'Manager Team',date_of_birth: '1000$',
  photo:'069617811',address:'kompong thom',status:'Single',department_id:'2',position_id:'2'},

  {  code: 'Staff', name: 'Karona', gender: 'Staff', phone_number: 'Developer',date_of_birth: '700$',
  photo:'069617811',address:'kadal',status:'Single',department_id:'3',position_id:'3'},

  {  code: 'Staff', name: 'Piseth', gender: 'Staff', phone_number: 'Developer',date_of_birth: '900$',
  photo:'069617811',address:'koh kong',status:'Single',department_id:'4',position_id:'4'},
  
]

const fields = [
  'id',
  { key: 'code' },
  'name',
  { key: 'gender' },
  { key: 'phone_number' },
  { key: 'date_of_birth'},
  { key: 'photo'},
  { key: 'address'},
  { key: 'status'},
  { key: 'department_id'},
  { key: 'position_id',},
  { key: 'action'}
]

export default {
  name: 'Tables',
  components:{
  Add
  },
  data () {
    return {
      items: items.map((item, id) => { return {...item, id}}),
      fields,
    //  successModal: false,
   
    }
  },

}
</script>