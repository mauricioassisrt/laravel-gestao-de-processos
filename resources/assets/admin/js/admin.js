require('./bootstrap');
/*window.Vue = require('vue');

Vue.component('api-status', require('./components/ApiStatus'));

import VueTheMask from 'vue-the-mask';
Vue.use(VueTheMask);

const admin = new Vue({
    el: '#app'
});
*/

let today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());

$('.datepicker').datetimepicker({
    format: 'yyyy-mm-dd HH:MM',
    footer: true,
    modal: true,
    uiLibrary: 'bootstrap4',
    iconsLibrary: 'fontawesome'
});

$('#start_date').datepicker({
    format: 'yyyy-mm-dd',
    uiLibrary: 'bootstrap4',
    iconsLibrary: 'fontawesome',
    maxDate: today
});

$('#end_date').datepicker({
    format: 'yyyy-mm-dd',
    uiLibrary: 'bootstrap4',
    iconsLibrary: 'fontawesome',
    minDate: function () {
        return $('#start_date').val();
    },
});
