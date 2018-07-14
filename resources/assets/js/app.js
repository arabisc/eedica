require('./bootstrap');

window.Vue = require('vue');
import Datepicker from 'vuejs-datepicker';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data() {
        return {
            // Users Cretae Roles
            rolesSelected: [],

            // Course Create title
            courseTitle: '',
            // Course Free
            checkPrice: {},
            
        }
    },

    components: {
        Datepicker
    },

    methods: {
        // User Create Genirate Password
        generatePassword() {
            console.log(password)
        },

        // Slug Course
        courseSlug(item) {
            return item.toLowerCase().replace(/ /g, (x) => x = "-");
        },
    },
});
