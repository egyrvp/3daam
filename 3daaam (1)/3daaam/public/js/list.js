Vue.component('taskdata', {
	template : '#queuelist',
	data : function(){
	 return{
		 datalist : []
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
	el: '#eq'
});