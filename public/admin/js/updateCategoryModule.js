var UpdateCategoryModule = function() {

};

UpdateCategoryModule.prototype.init = function () {
	this.loadDataCategoryWhenLoadingPage();
};

UpdateCategoryModule.prototype.loadDataCategoryWhenLoadingPage = function () {
			var UpdateCategoryModule = this;
			var id = $('#id').val();
    			$.ajax({
					    url: "../admin/cate/getcategory/"+id,
					    method: "GET",
					    success: function(response){
					    	if(response.status == "success")
					    	{
								$('input#catename').val(response.data.name);
								$('input#catedescript').val(response.data.description);
								$('#cateactive').val(response.data.active);
							} else {
								return "";
							}
					    }
					      	
					});
};
