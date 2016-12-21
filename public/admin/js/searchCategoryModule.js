var SearchCategoryModule = function() {

};

SearchCategoryModule.prototype.init = function () {
	this.loadDataCategoryWhenLoadingPage();
};
// search category 
SearchCategoryModule.prototype.loadDataCategoryWhenLoadingPage = function () {
			var SearchCategoryModule = this;
			var search = $('input#search').val();
    			$.ajax({
					    url: "/laravel_api/admin/cate/search",
					    method: "GET",
					    data:{"search":search},
					    success: function(response){
					    	if(response.status == "success")
					    	{
							  	var cates = response.data; // get data
								var content = '';
								$.each(cates, function(key,value) {
								  	content += SearchCategoryModule.cateListHtml({
								 	id: value.id,
								 	name: value.name,
								 	alias:value.alias,
								 	active:(value.active==1)?'ACTIVE':'DEACTIVE',
								 	description:value.description,
								 	created_at:value.created_at,
								 	updated_at:value.updated_at
								 	});
								});	
								$('span#sosp').text(response.count);
							} 
							document.getElementById('searchCategory').innerHTML = content;
					  	}
					      	
					});
};
SearchCategoryModule.prototype.cateListHtml = function(data) {
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