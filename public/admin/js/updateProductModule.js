var UpdateProductModule = function() {

};

UpdateProductModule.prototype.init = function () {
	this.loadDataProductWhenLoadingPage();
};

UpdateProductModule.prototype.loadDataProductWhenLoadingPage = function () {
			var UpdateProductModule = this;
			var selectCategoryModule = new ListCategoryModule();
        	selectCategoryModule.initSelectProduct(function() {
        		var id = $('#id').val();
    			$.ajax({
					    url: "../admin/product/getproduct/"+id,
					    method: "GET",
					    success: function(response){
					    	if(response.status == "success")
					    	{
								$('input#txtName').val(response.data.name);
								$('input#txtPrice').val(response.data.price);
								$('#txtActive').val(response.data.active);
								$('#txtContent').val(response.data.content);
								$('#txtDescription').val(response.data.description);
								$('input#img_current').val(response.data.image);
								$('#sltParent').val(response.data.cate_id);
								$(".img-current").attr("src",'http://localhost/laravel_api/resources/upload/'+response.data.image);
							} else {
								return "";
							}
					    }
					      	
					});
        	});
			
};
