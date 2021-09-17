global.$ = require('jquery') ;
global.jQuery = require('jquery') ;




global.bootstrap = require('bootstrap') ;


let Swal = require("sweetalert2") ;
global.Swal = Swal.mixin({
    width: 400,
    /*   heightAuto: false,
       padding: '2.5rem',
       buttonsStyling: false,
       confirmButtonColor: null,
       cancelButtonColor: null ,
       confirmButtonClass: 'btn mx-1 fw-bold btn-light-primary',
       cancelButtonClass: 'btn mx-1 fw-bold btn-light-warning',
       confirmButtonText : "Ok, got it!",
       reverseButtons : true ,
       focusConfirm: true  ,*/
}) ;

const axios  = require('axios').default  ;
global.axios  = axios .create({
    timeout: 1000,
    headers: {
        'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content,
        'Content-Type' : 'application/json' ,
        'X-Requested-With': 'XMLHttpRequest',
    } ,

});

require('alpinejs') ;



