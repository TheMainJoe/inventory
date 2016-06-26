$(document).ready(function(){

	$('#invadd').click(function(){
		var add = $('#frmadd').serialize();
		$.post('addinv',add,function(ret){ $("#mydiv").load(location.href + " #mydiv"); });
	});

	$('#invupdt').click(function(){		
		var update = $('#frmeditinv').serialize();
		$.post('updateinv','id='+id+'&'+update,function(ret){ $("#mydiv").load(location.href + " #mydiv"); });
	});

	$('#invdel').click(function(){
		var id = $(this).attr('data-id');
		$.post('delinv','id='+id,function(ret){ $("#mydiv").load(location.href + " #mydiv"); });
	});

});