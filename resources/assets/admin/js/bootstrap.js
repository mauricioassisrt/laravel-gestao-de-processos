window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
    require('admin-lte');
    require('gijgo');

    require( 'datatables.net-buttons')(window, $);
    require( 'datatables.net-buttons-bs4')(window, $);
    require( 'datatables.net-buttons/js/buttons.html5.min.js' )(window, $);
    require( 'datatables.net-buttons/js/buttons.print.min.js' )(window, $);

    let pdfMake = require('pdfmake/build/pdfmake.js');
    let pdfFonts = require('pdfmake/build/vfs_fonts.js');
    pdfMake.vfs = pdfFonts.pdfMake.vfs;

} catch (e) {}

/*window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';*/
