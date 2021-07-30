<template>
  <div>
    <CRow>
      <CCol>
        <CCard>
          <CCardHeader>
              <h3 class="text-center">User List</h3>
                <!-- <Add
                :successModal= "successModal"
                /> -->
          </CCardHeader>
          <CCardBody>
                <CDataTable
                :items="users"
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

const items = [
  {  username: '', email: '', password: '',confirm_password: ''},

  
  
]

const fields = [
  'id',
  'username',
  'email',
  'password',
  'confirm_password',
  'action'
]

export default {
  name: 'Tables',
  // components:{
  // Add
  // },
  data () {
    return {
      items: items.map((item, id) => { return {...item, id}}),
      fields,
      users:[],
    }
  },
   created() {
            this.axios
                .get('http://127.0.0.1:8000/api/user')
                .then(response => {
                    this.users= response.data.data;
                    // console.log("sreynet",this.users[username])
                });
        },

}
</script>