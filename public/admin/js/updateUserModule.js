var UpdateUserModule = function() {

};

UpdateUserModule.prototype.init = function () {
	this.loadDataUserWhenLoadingPage();
};

UpdateUserModule.prototype.loadDataUserWhenLoadingPage = function () {
	var UpdateUserModule = this;
	var id = $('#id').val();
    $.ajax({
		url: "../admin/user/getuser/"+id,
		method: "GET",
		success: function(response){
			if(response.status == "success")
			{
				$('input#txtUsername').val(response.data.username);
				$('input#txtEmail').val(response.data.email);
				$('input#rdoLevel').val(response.data.level);
			}
		}
	});
};
