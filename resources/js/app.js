/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 const app = new Vue({
 	el: '#app',
 });


 console.log('test');

 


 function test() {
 	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
 	$.ajax({
 		/* the route pointing to the post function */
 		url: '/postajax',
 		type: 'POST',
 		/* send the csrf-token and the input to the controller */
 		data: {_token: CSRF_TOKEN},
 		/* remind that 'data' is the response of the AjaxController */
 		success: function (ajData) { 
 			// console.log(ajData.data);
 			for (jUsers of ajData.data) {
 				// console.log(jUsers.name)
 				// user
				var user = `
				<div class="card" style="width: 30%; margin: 1.5%;">
			    	<div id='profilePicture' class="card-img-top bg-dark"> </div>
			    	<div class="card-body shadow p-3">
			      		<h5 class="card-title">Name: ${jUsers.name} ${jUsers.lastname}</h5>
			      		<p class="card-text">Email: ${jUsers.email}</p>
			      		<a href="users/${jUsers.id}" class="btn btn-primary">Go to profile</a> 
			    	</div>
			  	</div>`
 				$(".ProfilesContainer").append(user); 
 			}
 		}
 	});
 }

 test();
