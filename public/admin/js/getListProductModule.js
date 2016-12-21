var GetListProductModule = function() {

};

GetListProductModule.prototype.init = function () {
	this.loadDataProductWhenLoadingPage();
};

GetListProductModule.prototype.loadDataProductWhenLoadingPage = function () {
			var GetListProductModule = this;
			var id = $('#id').val();
    			$.ajax({
					    url: "../admin/product/getproduct/"+id,
					    method: "GET",
					    success: function(response){
					    	if(response.status == "success")
					    	{
					    	 	var content = '';
								content += GetListProductModule.productListHtml({
									id: response.data.id,
									name: response.data.name,
									active:(response.data.active==1)?'ACTIVE':'DEACTIVE',
									description:response.data.description,
									created_at:response.data.created_at,
									updated_at:response.data.updated_at
								});
							} else {
								return "";
							}
							document.getElementById('getproducts').innerHTML = content;
					    }
					      	
					});
};

GetListProductModule.prototype.productListHtml = function(data) {
	return  '<tr>'+
                '<td><input type="checkbox" name="checkbox"/></td>'+
                '<td>'+data.id+'</td>'+
                '<td>'+data.name+'</td>'+
                '<td>'+data.price+'</td>'+
                '<td>'+data.description+'</td>'+
                '<td><span class="text-success">'+data.active+'</span></td>'+
                '<td>'+ data.created_at+'</td>'+
                '<td>'+ data.updated_at+'</td>'+
                '<td>'+
                    '<a href="#" class="btn btn-info">Delete</a>'+
                '</td>'+
                '<td>  <a href="#" class="btn btn-info btn-edit">Edit</a>'+
                '</td>'+
    		'</tr>';
}