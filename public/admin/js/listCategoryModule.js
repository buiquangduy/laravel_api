var ListCategoryModule = function() {

};

ListCategoryModule.prototype.init = function () {
	this.loadDataCategoryWhenLoadingPage();
};

ListCategoryModule.prototype.initSelectProduct = function (callback) {
	this.loadDataCategoryWhenSelectingProduct(callback);
};

ListCategoryModule.prototype.initSelectAddProduct = function () {
	this.loadDataCategoryWhenSelectingAddProduct();
};

ListCategoryModule.prototype.initRemoveCategory = function () {
	this.deleteCategory();
};

ListCategoryModule.prototype.loadDataCategoryWhenLoadingPage = function () {
	var ListCategoryModule = this;
		$.ajax({
			url: "admin/cate/list",
			method: "GET",
			success: function(response){
				if(response.status=="success")
				{	
					var cates = response.data; // get data
					var content = '';
					$.each(cates, function(key,value) {
					 	content += ListCategoryModule.cateListHtml({
						id: value.id,
						name: value.name,
						alias:value.alias,
						active:(value.active==1)?'ACTIVE':'DEACTIVE',
						description:value.description,
						created_at:value.created_at,
						updated_at:value.updated_at
						});
					});	
				} 
				
				document.getElementById('cates').innerHTML = content;
				}					      	
			});
};
// 
ListCategoryModule.prototype.loadDataCategoryWhenSelectingProduct = function (callback) {
	var ListCategoryModule = this;
		$.ajax({
			url: "../admin/cate/list",
			method: "GET",
			success: function(response) {
					if(response.status=="success") {	
						var cates = response.data; // get data
						var content = '<option></option>';
						$.each(cates, function(key,value) {
						 	content += ListCategoryModule.cateListHtmlSelect({
							id: value.id,
							name: value.name
							});
						});	
					} else {
						return "";
					}
					document.getElementById('sltParent').innerHTML = content;

					callback();
				}					      	
			});
};
// 
ListCategoryModule.prototype.loadDataCategoryWhenSelectingAddProduct = function () {
	var ListCategoryModule = this;
		$.ajax({
			url: "admin/cate/list",
			method: "GET",
			success: function(response){
				if(response.status=="success") {	
					var cates = response.data; // get data
					var content = '';
					$.each(cates, function(key,value) {
					 	content += ListCategoryModule.cateListHtmlSelect({
						id: value.id,
						name: value.name
						});
					});	
				} else {
					return "";
				}
				document.getElementById('sltParent').innerHTML = content;
				}					      	
			});
};
//html list category
ListCategoryModule.prototype.cateListHtml = function(data) {
	return  '<tr>' + 
  				'<td><input type="checkbox" name="selector[]" class="ads_Checkbox" id="ck_'+data.id+'" value="'+data.id+'" /></td>' +
        		'<td>' + data.id + '</td>' +
        		'<td><div id="name">' + data.name + '</div></td>' +
        		'<td>'+ data.alias+'</td>'+
                '<td><span class="text-success">'+data.active+'</span></td>'+
                '<td>'+ data.description+'</td></td>'+
                '<td>'+ data.created_at+'</td>'+
                '<td>'+ data.updated_at+'</td>'+
                '<td>'+
                    '<a href="admin/cate/delete/'+data.id+'" class="btn btn-info btn-remove">Delete</a>'+
                '</td>'+
                '<td>  <a href="updatecategory/'+data.id+'" class="btn btn-info btn-edit">Edit</a>'+
                '</td>'+
    		'</tr>';
}
//html select category 
ListCategoryModule.prototype.cateListHtmlSelect = function(data) {
	return  '<option value = "'+data.id+'">'+data.name+'</option>';
}

//js delete category
// ListCategoryModule.prototype.deleteCategory = function() {
	// $(document).ready(function(){
	// 	$('.btn-remove').click(function(){
	// 		if(confirm('are you sure'))
	// 		{
	// 			return true;
	// 		}
	// 		return false;
	// 	});
	// });

// }
