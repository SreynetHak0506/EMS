<template>
  <div>
    <CRow>
      <CCol>
        <CCard>
          <CCardHeader>
              <h3 class="text-center">Salary Lists</h3>

                <AddSalary
                :openModalSalary= false
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
import AddSalary from './Add.vue'
const items = [
  {  release_date: '07/25/21',paid_date:'07/30/21',basic_salary:'1000$',employee_id:'01',note: 'S01'},

  {  release_date: '07/26/21',paid_date:'07/31/21', basic_salary:'2000$',employee_id:'02',note: 'S02'},

  {  release_date: '07/27/21',paid_date:'08/01/21',basic_salary:'800$',employee_id:'03',note: 'S03'},

  {  release_date: '07/28/21',paid_date:'08/02/21',basic_salary:'700$',employee_id:'04',note: 'S04'},

  {  release_date: '07/29/21',paid_date:'08/03/21',basic_salary:'900$',employee_id:'05',note: 'S05'},
  
]

const fields = [
  'id',
  { key: 'release_date' },
  'paid_date',
  'basic_salary',
  'note',
  'employee_id',
  { key: 'action'}
]

export default {
  name: 'Tables',
  components:{
   AddSalary
  },
  data () {
    return {
      items: items.map((item, id) => { return {...item, id}}),
      fields,
     successModal: false
    }
  },

}
</script>