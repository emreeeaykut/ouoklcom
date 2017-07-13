// var images='';
var TreeHtml = '';
function img_ekle(response){
	$("#gorseller").append("<li><img src='" + base_url + "photos/" + response + "' style='width:120px;'><img class='close remove-image' data-filename='" + response + "' src='" + base_url + "assets/admin/uploadify/uploadify-cancel.png'></li>");
}


var Login = {
	enter : function(email,password){
		$.post(base_url + 'manage/login/enter',{email:email,password:password},function(result){
			if(result > 0){
				location.href= base_url + 'manage/welcome';
			}else{
				alert('E-Mail Adresi veya Şifreniz Yanlış.');
			}
		});
	}
}


var PostApp = {
	app : function(form,post_url,back_page,img){
		var data = $('#'+form).serializeArray();
		var list = {};
		for(var i in data){
			list[data[i]['name']]=data[i]['value'];
		}

		if(typeof img != "undefined"){
			list['photo_url'] = img;
		}


		$.post(base_url + post_url,{
			data : list
		},function(result){
			if(result > 0){
				window.location.href=base_url + back_page;
			}
		});
	},
	remove : function(id,post_url,back_page){
		$.post(base_url + post_url,{id : id},function(result){
			if(result > 0){
				window.location.href=base_url + back_page;
			}
		});
	}
}



$(document).on('click','#lg_submit',function(){
	Login.enter($('#lg_email').val(),$('#lg_password').val());
});


