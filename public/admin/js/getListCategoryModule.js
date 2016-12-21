var GetListCategoryModule = function() {

};

GetListCategoryModule.prototype.init = function () {
	this.loadDataCategoryWhenLoadingPage();
};

GetListCategoryModule.prototype.loadDataCategoryWhenLoadingPage = function () {
			var GetListCategoryModule = this;
			var id = $('#id').val();
    			$.ajax({
					    url: "../admin/cate/getcategory/"+id,
					    method: "GET",
					    success: function(response){
					    	if(response.status == "success")
					    	{
							 	var content = '';
								content += GetListCategoryModule.cateListHtml({
									id: response.data.id,
									name: response.data.name,
									alias:response.data.alias,
									active:(response.data.active==1)?'ACTIVE':'DEACTIVE',
									description:response.data.description,
									created_at:response.data.created_at,
									updated_at:response.data.updated_at
								});
							} else {
								return "";
							}

							 document.getElementById('getcates').innerHTML = content;
					    }
					      	
					});
};

GetListCategoryModule.prototype.cateListHtml = function(data) {
	return  '<tr>' + 
  				'<td><input type="checkbox" name="selector[]" class="ads_Checkbox" /></td>' +
        		'<td>' + data.id + '</td>' +
        		'<td><div id="name">' + data.name + '</div></td>' +
        		'<td>'+ data.alias+'</td>'+
                '<td><span class="text-success">'+data.active+'</span></td>'+
                '<td>'+ data.description+'</td></td>'+
                '<td>'+ data.created_at+'</td>'+
                '<td>'+ data.updated_at+'</td>'+
                '<td>'+
                    '<a href="#" class="btn btn-info">Delete</a>'+
                '</td>'+
                '<td>  <a href="#" class="btn btn-info btn-edit">Edit</a>'+
                '</td>'+
    		'</tr>';
}