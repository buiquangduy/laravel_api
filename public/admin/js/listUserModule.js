var ListUserModule = function() {

};

ListUserModule.prototype.init = function () {
	this.loadDataUserWhenLoadingPage();
};
// get data of product
ListUserModule.prototype.loadDataUserWhenLoadingPage = function () {
	var ListUserModule = this;
		$.ajax({
			url: "admin/user/list",
			method: "GET",
			success: function(response){
				if(response.status=="success")
				{	
					var users = response.data; // get data
					var i = 1;
					var content = '';
					$.each(users, function(key,value) {
						content += ListUserModule.userListHtml({
						i:i++,
						id: value.id,
						name: value.username,
						email:value.email,
						level:(value.id==2)?'SuperAdmin':(value.level==1)?'Admin':'Member',
						created_at:value.created_at,
						updated_at:value.updated_at
						});
					});	
				}
		document.getElementById('users').innerHTML = content;
	}					      	
	});
};
// html list user
ListUserModule.prototype.userListHtml = function(data) {
	return  '<tr>'+
                '<td><input type="checkbox" name="checkbox"/></td>'+
                '<td>'+data.i+'</td>'+
                '<td>'+data.name+'</td>'+
                '<td>'+
                    data.level +
                '</td>'+
                '<td>'+data.created_at+'</td>'+
                '<td>'+data.updated_at+'</td>'+
                '<td><a href="updateuser/'+data.id+'" class="btn btn-info">Edit</a></td>'+
                '<td><a href="admin/user/delete/'+data.id+'" class="btn btn-info">Delete</a></td>'+            
			'</tr>';
}