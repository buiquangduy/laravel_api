var ListProductModule = function() {

};

ListProductModule.prototype.init = function () {
	this.loadDataProductWhenLoadingPage();
};
// get data of product
ListProductModule.prototype.loadDataProductWhenLoadingPage = function () {
	var ListProductModule = this;
		$.ajax({
			url: "admin/product/list",
			method: "GET",
			success: function(response){
				if(response.status=="success")
				{	
					var products = response.data; // get data
					var i;
					var content = '';
					for(i = 0 ;i < products.length ; i++)
					{
						product = products[i];
						content += ListProductModule.productListHtml({
						id: product.id,
						name: product.name,
						price:product.price,
						description:product.description,
						active:(product.active==1)?'ACTIVE':'DEACTIVE',
						created_at:product.created_at,
						updated_at:product.updated_at
						});
					}
				} else {
					return "";
				}
		document.getElementById('products').innerHTML = content;
	}					      	
	});
};
// html list product
ListProductModule.prototype.productListHtml = function(data) {
	return  '<tr>'+
                '<td><input type="checkbox" name="selector[]" class="ads_Checkbox" id="ck_'+data.id+'" value="'+data.id+'" /></td>'+
                '<td>'+data.id+'</td>'+
                '<td>'+data.name+'</td>'+
                '<td>'+data.price+'</td>'+
                '<td>'+data.description+'</td>'+
                '<td><span class="text-success">'+data.active+'</span></td>'+
                '<td>'+ data.created_at+'</td>'+
                '<td>'+ data.updated_at+'</td>'+
                '<td>'+
                    '<a href="admin/product/delete/'+data.id+'" class="btn btn-info">Delete</a>'+
                '</td>'+
                '<td>  <a href="updateproduct/'+data.id+'" class="btn btn-info btn-edit">Edit</a>'+
                '</td>'+
    		'</tr>';
}