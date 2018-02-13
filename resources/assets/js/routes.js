
import Main from './components/Main.vue';
import Test from './components/Test.vue';

import Barang from './components/barang/index.vue';
import CreateBarang from './components/barang/create.vue';
import EditBarang from './components/barang/edit.vue';


import User from './components/user/index.vue';
import CreateUser from './components/user/create.vue';
import EditUser from './components/user/edit.vue';


const route = [
{
	name: 'Home',
	path: '/',
	component: Main

},
{
	name: 'Test',
	path: '/test',
	component: Test
},

{
	name: 'Barang',
	path: '/barang/view',
	component: Barang
},

{
	name: 'CreateBarang',
	path: '/barang/create',
	component: CreateBarang
},

{
	name: 'EditBarang',
	path: '/barang/edit/:id',
	component: EditBarang
},
{
	name: 'User',
	path: '/user/view',
	component: User

},
{
	name: 'CreateUser',
	path: '/user/create',
	component: CreateUser

},
{
	name: 'EditUser',
	path: '/user/edit/:id',
	component: EditUser

}

];



export default route;