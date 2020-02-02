



//Loading view
var global_cookie_prefix = 'Hackowasp';
//pageload functions
function showHome(){
	$('#ReplaceHere').loadingView({'state':true});
	$.get('homepage.php',function(data){

		$('#ReplaceHere').html(data);
		$('#ReplaceHere').loadingView({'state':false});

	});
}

function showSignup(){
	$('#ReplaceHere').loadingView({'state':true});
	$.get('examples/signup-page.php',function(data){

		$('#ReplaceHere').html(data);
		$('#ReplaceHere').loadingView({'state':false});

	});
}
function showSociety(){
	$('#ReplaceHere').loadingView({'state':true});
	$.get('examples/allsocieties.php',function(data){

		$('#ReplaceHere').html(data);
		$('#ReplaceHere').loadingView({'state':false});

	});
}
function showlogin(){
	$('#ReplaceHere').loadingView({'state':true});
	$.get('examples/login-page.php',function(data){
		$('#ReplaceHere').html(data);
		$('#ReplaceHere').loadingView({'state':false});
	});
}
function showAdmin(){
	window.location.href="../admin/examples/#";
	$(window).bind('hashchange', function ()
		{
			hash();
		});

	}

function showformlist(){
	$('.wrapper').loadingView({'state':true});
	$.get('forms.php?list',function(data){

		$('.wrapper').html(data);
		$('.wrapper').loadingView({'state':false});
	});
}
function showtrack(){
	$('.wrapper').loadingView({'state':true});
	$.get('track.php',function(data){

		$('.wrapper').html(data);
		$('.wrapper').loadingView({'state':false});

	});
}
function showDash(){
	//$('#wrapper').loadingView({'state':true});
	$.get('dash.php',function(data){
linkChange('#users_dashboard');
		$('#wrapper').html(data);
		
		//$('#wrapper').loadingView({'state':false});
	});
}
function showDept(){
	//$('#wrapper').loadingView({'state':true});
	$.get('add_dept.php',function(data){
linkChange('#header_dept');
		$('#wrapper').html(data);
		
		//$('#wrapper').loadingView({'state':false});
	});
}
function showEvent(){
	//$('#wrapper').loadingView({'state':true});
	$.get('add_event.php',function(data){
		$('#wrapper').html(data);
		linkChange('#header_event');
		//$('#wrapper').loadingView({'state':false});
	});
}
function showUsers(){
	//$('#wrapper').loadingView({'state':true});
	$.get('members.php',function(data){
		$('#wrapper').html(data);
		linkChange('#header_members');
		//$('#wrapper').loadingView({'state':false});
	});
}
function showUserP(){
	$.get('user.php',function(data){
		$('#wrapper').html(data);
		linkChange('#user_profile');
		//$('#wrapper').loadingView({'state':false});
	});
}
function showattendance(){
	$.get('attendance.php',function(data){
		$('#wrapper').html(data);
		linkChange('#header_attendance');
		//$('#wrapper').loadingView({'state':false});
	});
}
function showTask(){
	$.get('task.php',function(data){
		$('#wrapper').html(data);
		linkChange('#header_task');
		//$('#wrapper').loadingView({'state':false});
	});
}
function showQuery(){
	$.get('query.php',function(data){
		$('#wrapper').html(data);
		linkChange('#header_query');
		//$('#wrapper').loadingView({'state':false});
	});
}
function showReminder(){
	$.get('reminder.php',function(data){
		$('#wrapper').html(data);
		linkChange('#header_reminder');
		//$('#wrapper').loadingView({'state':false});
	});
}
function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});


//document ready functions
$(document).ready( function()
{
	// Detect touch support
	if('ontouchstart' in document.documentElement)
	{
		onclick_event = 'touchstart';
		offclick_event = 'touchend';
	}
	else
	{
		onclick_event = 'mousedown';
		offclick_event = 'mouseup';
	}

	$(document).on('click','.logout_button',function(){
		logout();
	})

	//Form1 Reponsiveness
		
	//Forms
		$(document).on('click','.login_button',function(){ dologin(); });
		$(document).on('click','.signup_button',function(){ signup(); });
		$(document).on('click','.filter_tag',function(){ var id=this.id.split(':');
														filter(id[0]); });
	//Admin panel buttons
	//Department
		$(document).on('click','#show_add_dept_button',function(){ showAddDept(); });
		$(document).on('submit','#event_form',function(){ var data=form_submit("#event_form","add_event.php?submitevent"); });
		$(document).on('submit','#dept_form',function(){ var data=form_submit("#dept_form","add_dept.php?add_dept"); });
		$(document).on('submit','#profile_form',function(){ var data=form_submit("#profile_form","user.php?update_user"); });
		$(document).on('submit','#task_form',function(){ var data=form_submit("#task_form","task.php?addtask"); });
		$(document).on('submit','#member_form',function(){ var data=form_submit("#member_form","members.php?adduser"); });
		$(document).on('submit','#announcement_form',function(){ var data=form_submit("#announcement_form","add_event.php?submitannouncement"); });
		$(document).on('click','.add_dept_button',function(){ addDept(); });
		$(document).on('click','.dept_show_edit_button',function(){
			var array = this.id.split(':');
			showEditDept(array[1]); });
	$(document).on('click','.dept_edit_button',function(){
			var array = this.id.split(':');
			editDept(array[1]); });
		$(document).on('click','.dept_show_delete_button',function(){ var array = this.id.split(':');
			showDeleteDept(array[1],array[2]); });
	$(document).on('click','.dept_delete_button',function(){ var array = this.id.split(':');
			deleteDept(array[1],array[2]); });

});
//Form Control
$(document).on('click','.form_toggle',function(){ var array = this.id.split(':');
			formToggle(array[1],array[2]); });
$(document).on('click','.form_show_edit_button',function(){ var array = this.id.split(':');
			formShowEdit(array[1]); });
$(document).on('click','.update_form_control_button',function(){ var array = this.id.split(':');
			editForm(array[1]); });

//Users
$(document).on('click','.show_add_user_button',function(){showAddUser() });
$(document).on('click','.add_user_button',function(){addUser() });
$(document).on('click','.user_show_edit_button',function(){ var array = this.id.split(':');
			showEditUser(array[1]); });
$(document).on('click','.edit_user_button',function(){ var array = this.id.split(':');
			editUser(array[1]); });
$(document).on('click','.user_show_delete_button',function(){ var array = this.id.split(':');
			showDeleteUser(array[1],array[2]); });
	$(document).on('click','.user_delete_button',function(){ var array = this.id.split(':');
			deleteUser(array[1],array[2]); });
$(window).load(function()
{
	// Make sure cookies are enabled
	$.cookie(global_cookie_prefix+'_cookies_test', '1');
	var test_cookies_cookie = $.cookie(global_cookie_prefix+'_cookies_test');

	if(test_cookies_cookie == null)
	{
		window.location.replace('error.php?error_code=3');
	}
	else
	{
		$.cookie(global_cookie_prefix+'_cookies_test', null);

		hash();

		$(window).bind('hashchange', function ()
		{
			hash();
		});
	}
});
$(document).ready( function()
{
	$.ajaxSetup({ cache: false });
});
function hash()
{
	var hash = window.location.hash.slice(1);
	if(hash == 'login')
		showlogin();
	else if(hash == 'signup')
		showSignup();
	else if (hash == 'home')
		showHome();
	else if (hash == 'societies')
		showSociety();
	else if(window.location.href.indexOf('/admin')>0)
		{
			if(hash == '')
				showDash();
			else if(hash == 'dept')
				showDept();
			else if(hash == 'event')
				showEvent();
			else if(hash == 'members')
				showUsers();
			else if(hash == 'profile')
				showUserP();
			else if(hash == 'attendance')
				showattendance();
			else if(hash == 'task')
				showTask();
			else if(hash == 'query')
				showQuery();
			else if(hash == 'logout')
				logout();
			else if(hash == 'reminder')
				showReminder();
			
			
		}
}
function dologin(){
	var username=$('#username').val();
	var password=$('#password').val();
	$.post('examples/login-page.php?login',{username:username,password:password},function(data){
		if(data==1){
			notify('Logging In',4,'success');
			showAdmin();
		}
		else if (data==0)
			notify('Incorrect Username/Password',4,'danger');
		else if (data==-1)
			notify('User does not exist.',4,'danger');
		else
			notify(data,4,'danger');
	})}

function notify(text, time,type)
{
	$('#notification_div').attr('style','display:block');
	if(typeof text != 'undefined')
	{
		if(typeof notify_timeout != 'undefined')
		{
			clearTimeout(notify_timeout);
		}
		if(type=='success')
			{
				text =  '<div class="alert alert-success" role="alert"><div class="container"><div class="alert-icon"><i class="now-ui-icons ui-2_like"></i></div><strong>'+text+'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="now-ui-icons ui-1_simple-remove"></i></span>            </button>          </div>        </div>';
			}
		else if(type== 'danger')
			{
				text =  '<div class="alert alert-danger" role="alert"><div class="container"><div class="alert-icon"><i class="now-ui-icons objects_support-17"></i></div><strong>'+text+'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="now-ui-icons ui-1_simple-remove"></i></span>            </button>          </div>        </div>';
			}

		$('#notification_inner_cell_div').css('opacity', '1');

		if($('#notification_div').is(':visible'))
		{
			$('#notification_inner_cell_div').html(text);
			$('#notification_div').slideDown('fast');
		}
		else
		{
			$('#notification_inner_cell_div').animate({ opacity: 0 }, 250, function() { $('#notification_inner_cell_div').html(text); $('#notification_inner_cell_div').animate({ opacity: 1 }, 250); });
		}

		notify_timeout = setTimeout(function() { $('#notification_inner_cell_div').animate({ opacity: 0 }, 250, function() { $('#notification_div').slideUp('fast'); }); }, 1000 * time);
	}
	else
	{
		if($('#notification_div').is(':visible'))
		{
			$('#notification_inner_cell_div').animate({ opacity: 0 }, 250, function() { $('#notification_div').slideUp('fast'); });
		}

}}
function filter(id){
	$('#modal-content').loadingView({'state':true});
	$.post('homepage.php?filter_tag',{id:id},function(data){
		$('#modal-content').html(data);
		console.log(data);
		$('#modal-content').loadingView({'state':false});
	});
}
function logout(){
	$.get('../../user/examples/login-page.php?logout',function(data){
		if (data==1)
			location.reload();
		$(window).bind('hashchange', function ()
		{
			hash();
		});
	})
}
function linkChange(id){
	var ids=['#users_dashboard','#user_profile','#header_dept','#header_attendance','#header_task','#header_event','#header_members','header_query','header_reminder'];
	$.each(ids,function(index,value){
		if(id==value){
			$(value).addClass('active');
		}
		else
			$(value).removeClass('active');
	});
}
function validate_name(name){
	var regex = new RegExp("/^[a-zA-Z\s]+$/");
	if(regex.test(name))
		return 1;
	else
		return 0;

}
function validate_number(number,len){
	var regex =new RegExp(/^[0-9-+]+$/);
	if(regex.test(number)&& number.length==len)
		return 1;
	else
		return 0;

}
function form_error(text,input){
	$('#error_span').html(text);
	input_focus(input);
}
function showAddDept(){
	$('#modal-content').loadingView({'state':true});
	var data='<div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Add a New Department</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">            <span aria-hidden="true">&times;</span>          </button>        </div>        <div class="modal-body">          <form>            <div class="form-group">              <label for="department_name">Department Name :</label>              <input type="text" class="form-control" id="department_name" aria-describedby="emailHelp" placeholder="">            </div>            <div class="form-group">              <label for="department_abbr">Department Abbreviation :</label>              <input type="text" class="form-control" id="department_abbr" placeholder="">            </div>          </form><span id="error_span"></span>        </div>        <div class="modal-footer">          <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>          <button type="button" class="btn btn-primary add_dept_button">Add Department</button>        </div>';
	$('#modal-content').html(data);
		$('#modal-content').loadingView({'state':false});
	}

function showEditDept(dept_id){
	$('#modal-content').loadingView({'state':true});
	$.post('pages/dept.php?show_edit_dept',{dept_id:dept_id},function(data){
		$('#modal-content').html(data);
		$('#modal-content').loadingView({'state':false});
	});
}
function showDeleteDept(name,id){
	$('#modal-content').loadingView({'state':true});
	var data='<div class="modal-header">          <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>          <button type="button" class="close" data-dismiss="modal" aria-label="Close">            <span aria-hidden="true">&times;</span>          </button>        </div>        <div class="modal-body">          <p>Are you sure you want to delete department "'+name+'".</p><span id="error_span"></span>        </div>        <div class="modal-footer">          <button type="button" class="btn btn-primary dept_delete_button" id="delete:'+name+':'+id+'" >Delete</button>                        </div>';
		$('#modal-content').html(data);
		$('#modal-content').loadingView({'state':false});

}
function showDeptTable(){
	$('#department_table').loadingView({'state':true});
	$.get('pages/dept.php?show_dept',function(data){
		$('#department_table').html(data);
		$('#department_table').loadingView({'state':false});
	});
}
function showFormTable(){
	$('#forms_table').loadingView({'state':true});
	$.get('pages/form_control.php?show_forms',function(data){
		$('#forms_table').html(data);
		$('#forms_table').loadingView({'state':false});
	});
}
function showUserTable(){
	$('#users_table').loadingView({'state':true});
	$.get('pages/users.php?show_users',function(data){
		$('#users_table').html(data);
		$('#users_table').loadingView({'state':false});
	});
}
function addDept(){
	var name=$('#department_name').val();
	var abbr=$('#department_abbr').val();
	if(name.length==0)
		form_error('Department Name cannot be blank.','#department_name');
	else if(abbr.length==0)
		form_error('Department Abbreviation cannot be blank.','#department_abbr');
	else{
		$('#modal-content').loadingView({'state':true});
		$.post('pages/dept.php?add_dept',{name:name,abbr:abbr},function(data){
		$('#modal-content').html(data);
		$('#modal-content').loadingView({'state':false});
			showDeptTable();

	});

	}
}
function editDept(id){
	var name=$('#department_name').val();
	var abbr=$('#department_abbr').val();
	if(name.length==0)
		form_error('Department Name cannot be blank.','#department_name');
	else if(abbr.length==0)
		form_error('Department Abbreviation cannot be blank.','#department_abbr');
	else{
		$('#modal-content').loadingView({'state':true});
		$.post('pages/dept.php?update_dept',{name:name,abbr:abbr,id:id},function(data){
		$('#modal-content').html(data);
		$('#modal-content').loadingView({'state':false});
			showDeptTable();

	});

	}
}
function deleteDept(name,id){
		$('#modal-content').loadingView({'state':true});
		$.post('pages/dept.php?delete_dept',{name:name,id:id},function(data){
		$('#modal-content').html(data);
		$('#modal-content').loadingView({'state':false});
			showDeptTable();

	});

	}
function formToggle(state,id){
	$('#modal-content').loadingView({'state':true});
		$.post('pages/form_control.php?form_toggle',{state:state,id:id},function(data){
		$('#modal-content').html(data);
		$('#modal-content').loadingView({'state':false});
			showFormTable();

	});
}
function formShowEdit(id){
	$('#modal-content').loadingView({'state':true});
	$.post('pages/form_control.php?show_edit',{id:id},function(data){
		$('#modal-content').html(data);
		$('#modal-content').loadingView({'state':false});
	});
}
function editForm(id){
	var title=$('#form_update_title').val();
	var subtitle=$('#form_update_subtitle').val();
	var guidelines=$('#form_update_guidelines').val();
	var intro=$('#form_update_intro').val();
	var docs=$('#form_update_docs').val();
	$('#modal-content').loadingView({'state':true});
	$.post('pages/form_control.php?edit_form',{id:id,title:title,subtitle:subtitle,guidelines:guidelines,intro:intro,docs:docs},function(data){
		$('#modal-content').html(data);
		$('#modal-content').loadingView({'state':false});
		showFormTable();
	});
}
function showAddUser(){
	$('#modal-content').loadingView({'state':true});
	var data='<div class="modal-header">          <h5 class="modal-title" id="exampleModalLabel">Add a New User</h5>         <button type="button" class="close" data-dismiss="modal" aria-label="Close">            <span aria-hidden="true">&times;</span>          </button>        </div>        <div class="modal-body">          <form>            <div class="form-group">              <label for="exampleInputEmail1">Username :</label>              <input type="text" class="form-control" id="add_user_username" aria-describedby="emailHelp" placeholder="">            </div>            <div class="form-group">              <label for="exampleInputPassword1">Name :</label>              <input type="text" class="form-control" id="add_user_first_name" placeholder="">                          </div>       <div class="form-group">              <label for="exampleInputPassword1">Email :</label>              <input type="text" class="form-control" id="add_user_email" placeholder="">            </div>                 <div class="form-group">              <label for="exampleInputPassword1">Department :</label>             <input type="text" class="form-control" id="add_user_department" placeholder="">           </div>            <div class="form-group">              <label for="exampleInputPassword1">Role :</label>              <input type="text" class="form-control" id="add_user_role" placeholder="">                  </div>  </form> </div>        <div class="modal-footer">          <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>          <button type="button" class="btn btn-primary add_user_button">Add User</button> </div>      </div>';
	$('#modal-content').html(data);
		$('#modal-content').loadingView({'state':false});
	
}
function showEditUser(id){
	$('#modal-content').loadingView({'state':true});
	$.post('pages/users.php?show_edit_user',{id:id},function(data){
		$('#modal-content').html(data);
		
		$('#modal-content').loadingView({'state':false});
	});
}
function signup(){
	$('#ReplaceHere').loadingView({'state':true});
	var username=$('#username').val();
	var name=$('#name').val();
	var email=$('#useremail').val();
	var mob=$('#usermob').val();
	var pass=$('#userpass').val();
	$.post('examples/signup-page.php?create_user',{username:username,name:name,useremail:email,usermob:mob,userpass:pass},function(data){
		$('#modal-content').html(data);
		if(data==1){
			notify('Signed Up Successfully',4,'success');
			window.location = "#login";
		}
		else{
		notify(data,4,'danger');}
		$('#modal-content').loadingView({'state':false});
	});
}
function editUser(id){
	$('#modal-content').loadingView({'state':true});
	var username=$('#add_user_username').val();	
	var first=$('#add_user_first_name').val();
	var email=$('#add_user_email').val();
	var department=$('#add_user_department').val();
	var role=$('#add_user_role').val();
	$.post('pages/users.php?edit_user',{username:username,first:first,dept:department,role:role,id:id,email:email},function(data){
		$('#modal-content').html(data);
		
		$('#modal-content').loadingView({'state':false});
		showUserTable();
	});
}
function deleteUser(name,id){
	$('#modal-content').loadingView({'state':true});
	$.post('pages/users.php?delete_user',{id:id},function(data){
		$('#modal-content').html(data);
		$('#modal-content').loadingView({'state':false});
		showUserTable();
	});
}
function showDeleteUser(name,id){
	$('#modal-content').loadingView({'state':true});
	var data='<div class="modal-header">          <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>          <button type="button" class="close" data-dismiss="modal" aria-label="Close">            <span aria-hidden="true">&times;</span>          </button>        </div>        <div class="modal-body">          <p>Are you sure you want to delete user "'+name+'".</p><span id="error_span"></span>        </div>        <div class="modal-footer">          <button type="button" class="btn btn-primary user_delete_button" id="delete:'+name+':'+id+'" >Delete</button>                        </div>';
		$('#modal-content').html(data);
		$('#modal-content').loadingView({'state':false});

}
function form_submit(id,url){
	var form=$(id)[0];
	var formdata=new FormData(form);
		//$("#submitForm").prop("disabled", true);
			//$('#form1').loadingView({'state':true});
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: url,
            data: formdata,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
				//$('#container').html(data);
				//$("#btnSubmit").prop("disabled", false);
				//$('#form1').loadingView({'state':false});
				 console.log("success : ", data);
				location.reload();
				return data;
				
            },
            error: function (e) {

                form_error('Error submitting form please try again.','#submitForm')
                console.log("ERROR : ", e);
               // $("#btnSubmit").prop("disabled", false);
				//$('#form1').loadingView({'state':false});

            }
		});
	}
