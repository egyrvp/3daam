
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./select2');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 
 /*
var daily = {
	
  template: "	<div class='dhe-example-section' id='ex-1-3'><div class='dhe-example-section-header'><h3 class='dhe-h3 dhe-example-title'>The Queue of the Appointment </h3><div class='dhe-example-description'>Drag and drop items within and between lists. A visual helper is displayed indicating where the item will be positioned if dropped.</div></div><div class='dhe-example-section-content'><!-- BEGIN: XHTML for example 1.3 --><div id='example-1-3'><div class='queuecolumn queueleft first'><ul class='queuesortable-list'><li class='queuesortable-item'>Mohammed Ali ----> 7:00 - 7:20</li><li class='queuesortable-item'>Manal Hamed ----> 7:25 - 7:35</li><li class='queuesortable-item'>Safaa Mohsen ----> 7:45 - 8:00</li><li class='queuesortable-item'>Mai Reda ----> 8:10 - 8:35</li></ul></div><!--	<div class='queuecolumn queueleft'><ul class='queuesortable-list'><li class='queuesortable-item'>Sortable item C</li><li class='queuesortable-item'>Sortable item D</li></ul></div><div class='queuecolumn queueleft'><ul class='queuesortable-list'><li class='queuesortable-item'>Sortable item E</li></ul></div> --><div class='queueclearer'>&nbsp;</div></div><!-- END: XHTML for example 1.3 --></div></div>"
}


;
var weekly = {
  template: '<label></label> '
};




var app1 = new Vue({
  el: '#app1',
 data: {
    currentComponent: 'weekly'
  },
  components: {
    'daily': daily,
    'weekly': weekly
  },
  methods: {
    setComponent: function (component) {
        this.currentComponent = component;
    }
  }
});

*/

Vue.component('taskdata', {
	template : '#queuelist',
	data : function(){
	 return{
		 datalist:["",""]
	 };
},
	created: function(){
		this.fetchTaskData();
	},
	methods:{
		fetchTaskData:function(){
			this.$http.get('recqueues/data', function(jsonArray){
			this.datalist = jsonArray;
		}.bind(this));
		}
	}
	
});
new Vue({
	el: '#eeee'
});


$(function () {
    //Initialize Select2 Elements
  $(".select2").select2();
  
  $('#datepicker').datepicker({
      autoclose: true
    });
	
	});