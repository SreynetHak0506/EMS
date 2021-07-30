
import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboad from './components/Dashboad.vue';
import Login from './components/auth/Login.vue';
import Register from './components/auth/Register.vue';
import Reset from './components/auth/Reset.vue';
// import Navbar from './components/containers/Navbar.vue';
// import component employee
 import AddEmployee from './components/employees/Add.vue';
 import DetailEmployee from './components/employees/Detail.vue';
//  import EditEmployee from './components/employees/Edit.vue';
 // import component department
 import AddDepartment from './components/department/Add.vue';
 import DetailDepartment from './components/department/Detail.vue';
//  import EditDepartment from './components/department/Edit.vue';
 // import component position
 import AddPosition from './components/position/Add.vue';
 import DetailPosition from './components/position/Detail.vue';
//  import EditPosition from './components/position/Edit.vue';
 // import component salary
 import AddSalary from './components/salary/Add.vue';
 import DetailSalary from './components/salary/Detail.vue';
//  import EditSalary from './components/salary/Edit.vue';


Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    // linkExactActiveClass: 'active',
    routes: [
         
        // dashboad
        {
            path: '/',
            name: 'dashboad',
            component: Dashboad,
            children: [
                // {
                //   path: 'navbar',
                //   name: 'navbar',
                //   component:  Navbar
                // },
            ]
        },

        // auth
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/register',
            name: 'register',
            component: Register
        },
        {
            path: '/reset',
            name: 'reset',
            component: Reset
        },
        // employee
        {
            path: '/employee/add',
            name: 'addEmploee',
            component: AddEmployee
        },
        {
            path: '/employee/detail',
            name: 'employeeDetail',
            component: DetailEmployee
        },
        {
            path: '/employee/edit',
            name: 'editEmployee',
            // component: EditEmployee
        },
        // // departiment
        {
            path: '/department/add',
            name: 'addDepartment',
            component: AddDepartment
        },
        {
            path: '/department/detail',
            name: 'detailEmployee',
            component: DetailDepartment
        },
        {
            path: '/department/edit',
            name: 'editDepartment',
            // component: EditDepartment
        },
        //Position
        {
            path: '/position/add',
            name: 'addPosition',
            component: AddPosition
        },
        {
            path: '/position/detail',
            name: 'positionDetail',
            component: DetailPosition
        },
        {
            path: '/position/edit',
            name: 'editPosition',
            // component: EditPosition
        },
        //salalry
        {
            path: '/salary/add',
            name: 'addSalary',
            component: AddSalary
        },
        {
            path: '/salary/detail',
            name: 'salaryDetail',
            component: DetailSalary
        },
        {
            path: '/salary/edit',
            name: 'editSalary',
            // component: EditSalary
        },

    ]
});

export default router;