$('#add_category').submit(function () {
	category = $('#category').val();
	//console.log('h');
	//data=new FormData($('#add_category')[0]);
	url = $(this).attr('action');
	$.post(url, {
		'name': category
	}, function (fb) {
		if (fb.match("1")) {
			alert("Category Successfully Added!");
			setTimeout(function () {
				location.reload()
			}, 2000);
		} else {
			alert(fb);
		}
	});
	return false;
});

$('#update_sub_cat').submit(function(){
	name=$('#name').val();
	url=$(this).attr('action');
	$.post(url,{'name':name},function(fb){
		if(fb.match('1'))
		{
			alert('Category Successfully Updated');
			setTimeout(function(){
		window.location.href="http://localhost/tutorial/hms/index.php/marquee/category";
			},2000);
		}
		else 
		{
			alert('Category Not Updated')
		}
	});
	return false;
});


$('#add_package').submit(function(){
	Package_Name=$('#Package_Name').val();
	Package_Category=$('#Package_Category').val();
	No_of_items=$('#No_of_items').val();
	charges=$('#charges').val();
	url=$(this).attr('action');
	$.post(url,{'Package_Name':Package_Name,'Package_Category':Package_Category,'No_of_items':No_of_items,'charges':charges},function(fb){
		if(fb.match('1'))
		{
			alert('Package Successfully Added');
			setTimeout(function(){
				location.reload();
			},2000);
		}
		else 
		{
			alert(fb)
		}
	});
	return false; 
});
$('#update_sub_package').submit(function(){
		Package_Name=$('#Package_Name').val();
	Package_Category=$('#Package_Category').val();
	No_of_items=$('#No_of_items').val();
	charges=$('#charges').val();
	
	url=$(this).attr('action');
	$.post(url,{'Package_Name':Package_Name,'Package_Category':Package_Category,'No_of_items':No_of_items,'charges':charges},function(fb){
		if(fb.match('1'))
		{
			alert('Package Successfully Updated');
			setTimeout(function(){
		window.location.href="http://localhost/tutorial/hms/index.php/marquee/package";
			},2000);
		}
		else 
		{
			alert('Package Not Updated')
		}
	});
	return false;
});


$('#add_emp').submit(function(){
	P_Name=$('#P_Name').val();
	P_Address=$('#P_Address').val();
	P_Email=$('#P_Email').val();
	P_ContactNo=$('#P_ContactNo').val();
	P_CNIC=$('#P_CNIC').val();
	Designation=$('#Designation').val();
	Type=$('#Type').val();
	E_Salary=$('#E_Salary').val();
	UserName=$('#UserName').val();
	password=$('#password').val();
	url=$(this).attr('action');
	$.post(url,{'P_Name':P_Name,'P_Address':P_Address,'P_Email':P_Email,'P_ContactNo':P_ContactNo,'P_CNIC':P_CNIC,'Designation':Designation,'Type':Type,'E_Salary':E_Salary,'UserName':UserName,'password':password},function(fb){
		if(fb.match('1'))
		{
			alert('Employee Successfully Added');
			setTimeout(function(){
				location.reload();
			},2000);
		}
		else 
		{
			alert(fb)
		}
	});
	return false; 
});

$('#update_sub_emp').submit(function(){
		P_Name=$('#P_Name').val();
	P_Address=$('#P_Address').val();
	P_Email=$('#P_Email').val();
	P_ContactNo=$('#P_ContactNo').val();
	P_CNIC=$('#P_CNIC').val();
	Designation=$('#Designation').val();
	Type=$('#Type').val();
	E_Salary=$('#E_Salary').val();
	UserName=$('#UserName').val();
	password=$('#password').val();
	
	url=$(this).attr('action');
	$.post(url,{'P_Name':P_Name,'P_Address':P_Address,'P_Email':P_Email,'P_ContactNo':P_ContactNo,'P_CNIC':P_CNIC,'Designation':Designation,'Type':Type,'E_Salary':E_Salary,'UserName':UserName,'password':password},function(fb){
		if(fb.match('1'))
		{alert('Employee Not Updated');
			
		}
		else 
		{
			alert('Employee Successfully Updated');
			setTimeout(function(){
		window.location.href="http://localhost/tutorial/hms/index.php/person/register_emp";
			},2000);
		}
	});
	return false;
});

$('#add_sup').submit(function(){
	sup_Type=$('#sup_Type').val();
	P_Name=$('#P_Name').val();
	P_Address=$('#P_Address').val();
	P_Email=$('#P_Email').val();
	P_ContactNo=$('#P_ContactNo').val();
	P_CNIC=$('#P_CNIC').val();
	
	url=$(this).attr('action');
	$.post(url,{'sup_Type':sup_Type,'P_Name':P_Name,'P_Address':P_Address,'P_Email':P_Email,'P_ContactNo':P_ContactNo,'P_CNIC':P_CNIC},function(fb){
		if(fb.match('1'))
		{
			alert('Supplier Successfully Added');
			setTimeout(function(){
				location.reload();
			},2000);
		}
		else 
		{
			alert(fb)
		}
	});
	return false; 
});

$('#update_sub_sup').submit(function(){
	sup_Type=$('#sup_Type').val();	
	P_Name=$('#P_Name').val();
	P_Address=$('#P_Address').val();
	P_Email=$('#P_Email').val();
	P_ContactNo=$('#P_ContactNo').val();
	P_CNIC=$('#P_CNIC').val();
	
	
	url=$(this).attr('action');
	$.post(url,{'sup_Type':sup_Type,'P_Name':P_Name,'P_Address':P_Address,'P_Email':P_Email,'P_ContactNo':P_ContactNo,'P_CNIC':P_CNIC},function(fb){
		if(fb.match('1'))
		{alert('Supplier Not Updated');
			
		}
		else 
		{
			alert('Supplier Successfully Updated');
			setTimeout(function(){
		window.location.href="http://localhost/tutorial/hms/index.php/person/register_sup";
			},2000);
		}
	});
	return false;
});