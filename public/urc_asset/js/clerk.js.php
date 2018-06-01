var error = 0;
var patientIdTypes = '';






$(function() {	

	//======================= For Patient Register =======================
	
	$('#patientPhone').keyup(function(event){
		
		if(event.keyCode != 8)_checkPhone(this);	
	});
	$('#citizen_id').keyup(function(){
		_checkNumber(this);	
	});
	
	
	
	

	
	 
	 var d = new Date();
	 var curr_year = d.getFullYear();
	 var curr_month= parseInt(d.getMonth()) + 1;
	$('#patientDob').change(function(){
		 var dob=$(this).val();
		 var array=dob.split("-");
		 var age =curr_year - array[0];	
		 if(age >=0 && age <150) $('#patientAge').val(age);
	});
	
	$('#patientAge').keyup(function(event){
		if($(this).val()=='')$('#patientDob').val('');
		else{
			if(event.keyCode != 8)_checkPhone(this);	
			var me = parseInt($(this).val());
			if(me <0 || me >150){
            	msg.set_msg('<?php echo _t('incorrect_age'); ?>', 0);
				$(this).val('');
				$(this).focus();
				$('#patientDob').val('');
				return false;
			}else{
				var m=parseInt($('#patientMonth').val());
				var month = '01';
				
				if(m>curr_month)month = ((curr_month + 12) - m);
				if(m<curr_month)month = (curr_month - m);
				if(m==curr_month)month= 12;
				
				$('#msg').html('').hide();				
				me = Number(me);
				var cy = Number((new Date).getFullYear());
				var dob = (cy-me)+'-'+month+'-01';
				$('#patientDob').val(dob);	
			}
		}
	});
	

	
	$('#patientMonth').change(function(){
		var age = $('#patientAge').val();
		var dob = curr_year + '-' +(curr_month<10?'0'+curr_month:curr_month)+'-01';//$( "#patientDob" ).val();
		if($(this).val()=='')$( "#patientDob" ).val('');
		else{
			if(age=='')age =1;
			var d=dob.split('-');
			var m=parseInt($(this).val());
			var month = 0;
			
			if(m>curr_month){
				month = ((curr_month + 12) - m);
				d[0]=parseInt(d[0])-age;
			}
			if(m<curr_month){
				month = (curr_month - m);
				if(age!='')d[0]=parseInt(d[0])-parseInt(age);
			}
			if(m==curr_month){
				month= 12;
				d[0]=parseInt(d[0])-age;
			}
			
			if(month<10)month = '0'+month
			$( "#patientDob" ).val(d[0] + '-' + month + '-01');			
		}
	});
	
	
	

	
});



