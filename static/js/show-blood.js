function onEditClick(id){
	document.getElementById('unit_edit'+id).style.display = "none";
	document.getElementById('unit_save'+id).style.display = "block";
	document.getElementById('unit'+id).readOnly = false;
    document.getElementById('unit'+id).focus();
}

