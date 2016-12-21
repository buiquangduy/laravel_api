var MultilRemoveCategoryModule = function() {

};

MultilRemoveCategoryModule.prototype.init = function () {
	this.removeAjax();
};

MultilRemoveCategoryModule.prototype.initCheckboxMultiple = function () {
	this.checkboxMultiple();
};

//function checkbox multiple
MultilRemoveCategoryModule.prototype.checkboxMultiple = function () {
	var MultilRemoveCategoryModule = this;
	$(document).ready(function(){
    	$("#checkAll").change(function(){
     		$(".ads_Checkbox").prop('checked', $(this).prop("checked"));
      	});
	});
}


//function delete Multiple
MultilRemoveCategoryModule.prototype.removeAjax = function () {
	var MultilRemoveCategoryModule = this;
	$("#delete_value").on('click',function(){
		if(confirm('are you sure'))
		{
			var i=0;
			var arr = [];
			$('.ads_Checkbox:checked').each(function () {
				arr.push($(this).val());
			});      		
			var url = "/laravel_api/admin/cate/del/";
			$.ajax({
				url: url+arr,
				method: "POST",
				data: {"arr":arr},
				success: function(response){
				if(response == "OK")
					{
						var leng = arr.length;
						for(i=0;i<leng;i++)
						{
							$("#ck_"+arr[i]).parent().parent().remove();
						}   		
					}
				}
								      	
			});
		}
		return false;
	});	
};