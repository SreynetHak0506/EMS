<template>
  <div>
    <CRow>
      <CCol>
        <CCard>
          <CCardHeader>
              <h3 class="text-center">Position Lists</h3>
                <AddPosition
                :openModalPosition="openModalPosition"
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
import AddPosition from './Add.vue'
const items = [
  {  position: 'Developer', note: 'p01'},

  {  position: 'Support', note: 'p02'},

  {  position: 'Testing', note: 'p03'},

  {  position: 'Developer', note: 'p04'},

  {  position: 'Testing', note: 'p05'},
  
]

const fields = [
  'id',
  { key: 'position' },
  'note',
  { key: 'action'}
]

export default {
  name: 'Tables',
  components:{
    AddPosition
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