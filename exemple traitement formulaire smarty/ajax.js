

function browse_form_administrateur_cours(){
	var send = new String;
	send="";
	var fields = $("#administrateur_cours").serializeArray();
	jQuery.each(fields, function(i, field){
		send+=field.name+"="+field.value+"&";
	});
	return send;
}
	
$(document).ready(function(){
	var tag="#administrateur_conteneur_formulaire_cours";
	$("#administrateur_cours").live('submit', function(){
		var send = browse_form_administrateur_cours();
		$.ajax({
			url:'traitement_formulaire_cours_administrateur.php',
			type:'post',
			data: send,
			dataType:"html",
			success:function(reponse, textStatus, XMLHttpRequest){
				$(tag).html(reponse);
			}
		});
		return false;
	});
});


function browse_form_administrateur_blog(){
	var send = new String;
	send="";
	var fields = $("#administrateur_blog").serializeArray();
	jQuery.each(fields, function(i, field){
		send+=field.name+"="+field.value+"&";
	});
	return send;
}
	
$(document).ready(function(){
	var tag="#administrateur_conteneur_formulaire_blog";
	$("#administrateur_blog").live('submit', function(){
		var send = browse_form_administrateur_blog();
		$.ajax({
			url:'traitement_formulaire_blog_administrateur.php',
			type:'post',
			data: send,
			dataType:"html",
			success:function(reponse, textStatus, XMLHttpRequest){
				$(tag).html(reponse);
			}
		});
		return false;
	});
});