function confirm_delete(id,control){
	var a = confirm("Anda yakin ingin menghapus record ini ?");
	if(a==true){
		window.location.href = control+id;
	}
}

function confirm_onprogress(id,control){
	var a = confirm("Anda yakin ingin memproses data ini?");
	if(a==true){
		window.location.href = control+id;
	}
}

function confirm_done(id,control){
	
	var a = confirm("Apakah sudah terkonfirmasi ?");
	if(a==true){
		window.location.href = control+id;
	}
}
function confirm_transaction(id,control,nopol){
	var a = confirm("Anda yakin ingin mengkonfirmasi kedatangan truck dengan nopol "+nopol);
	if(a==true){
		window.location.href = control+id;
	}
}
function confirm_act(id,control){
	var a = confirm("Anda yakin ingin mengaktifkan data ini ?");
	if(a==true){
		window.location.href = control+id;
	}
}

function confirm_approved(id,control){
	var a = confirm("Anda yakin ingin approve data ini ?");
	if(a==true){
		window.location.href = control+id;
	}
}

function confirm_not_approved(id,control){
	var a = confirm("Anda yakin ingin reject data ini ?");
	if(a==true){
		window.location.href = control+id;
	}
} 


function confirm_nonactive_member(id,control){
	var a = confirm("Anda yakin ingin menonaktifkan member ini ?");
	if(a==true){
		window.location.href = control+id;
	}
}

function confirm_active_member(id,control){
	var a = confirm("Anda yakin ingin mengaktifkan member ini ?");
	if(a==true){
		window.location.href = control+id;
	}
}

function confirm_activation_manual(id,control){
	var a = confirm("Anda yakin ingin aktivasi member ini ?");
	if(a==true){
		window.location.href = control+id;
	}
}