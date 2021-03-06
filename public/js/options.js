var viewModel = function(){
	var self = this;
	this.collect = ko.observable(false);
	this.basic_name = ko.observable();
	this.basic_pass = ko.observable();
	this.recurly_private = ko.observable();
	this.recurly_public = ko.observable();
};

var	vm = new viewModel();

$(function(){
	ko.applyBindings(vm);
	$.get(BASE+'options', function(data){
		if (data.activate_pn === "0"){
			vm.collect(false);
		} else {
			vm.collect(true);
		}
		vm.basic_pass(data.basic_pass);
		vm.basic_name(data.basic_name);
		vm.recurly_public(data.recurly_public);
		vm.recurly_private(data.recurly_private);
	});
});