  function cate_list (data) {
 
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

  $(document).ready(function(){    
    			$.ajax({
					    url: "admin/cate/list",
					    method: "GET",
					    success: function(response){
							var cates = response.data; // get data
							var i;
							var content = '';

							for(i = 0 ;i < cates.length ; i++)
							{
								cate = cates[i];
								content += cate_list({
									id: cate.id,
									name: cate.name,
									alias:cate.alias,
									active:(cate.active==1)?'ACTIVE':'DEACTIVE',
									description:cate.description,
									created_at:cate.created_at,
									updated_at:cate.updated_at
								});
							}

							document.getElementById('cates').innerHTML = content;
							//console.log(arr[0]['name']); // get name element have id 0
					    	//$('#name').text(arr[0]['name']);
					    }
					      	
					});

  });
   $(document).ready(function(){    
   				var id = $('#id').val();
    			$.ajax({
					    url: "../admin/cate/getcategory/"+id,
					    method: "GET",
					    success: function(response){
							// var cates = response.data; // get data
							// var i;
							 var content = '';
							// var user;
								content += cate_list({
									id: response.data.id,
									name: response.data.name,
									alias:response.data.alias,
									active:(response.data.active==1)?'ACTIVE':'DEACTIVE',
									description:response.data.description,
									created_at:response.data.created_at,
									updated_at:response.data.updated_at
								});
							

							 document.getElementById('getcates').innerHTML = content;
							//console.log(response.data.id); // get name element have id 0
					    	//$('#name').text(arr[0]['name']);
					    }
					      	
					});

  });
