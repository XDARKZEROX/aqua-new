
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#container-main',
    data: {
        items: [],
        hasError: true,
        hasDeleted: true
    },
    mounted : function() {
        this.getCart();
    },
    methods : {
        getCart: function () {
            axios.get('/listCart').then(response => {
                this.items = response.data;
                console.log(this.items);
            })
        },
        addProduct: function(codigo) {
            var self = this;
            axios.post('/addProductToCart', {
                code: codigo,
                quantity: $('#quantity-'+codigo).val()
            }).then(function (response) {
                self.getCart();
            }).catch(function (error) {
                console.log(error);
            });
        },
        deleteItem: function(item) {
            axios.post('/addProductToCart/'+item.rowId).then((response) => {
                this.getCart();
            });

        }
    }
});
