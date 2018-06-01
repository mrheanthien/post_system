/*
To use: Include this file + jquery.dropkick.js, and make sure that the 4 selectboxes are named: #pro, #dis, #com, #vil
	The #pro selectbox should already be populated. Also include:
	<link rel="stylesheet" type="text/css" href="css/dropkick/dropkick.css">
	<link rel="stylesheet" type="text/css" href="css/dropkick/dk_custom.css"> 
*/

var v = {
	dis:[], 
	com:[], 
	vil:[]
};

$('#pro').dropkick({
	theme: 'green',
	change: function (value, label) {
		dd_change('#' + $(this).attr('id'), value, label);
	}
});
$('#dis').dropkick({
	theme: 'green',
	change: function (value, label) {
		dd_change('#' + $(this).attr('id'), value, label);
	}
});
$('#com').dropkick({
	theme: 'green',
	change: function (value, label) {
		dd_change('#' + $(this).attr('id'), value, label);
	}
});
$('#vil').dropkick({theme: 'green'});

//Populate a dropdown box from an array of values
function set_dd(target_id, values_arr, title) {
	//Empty previous contents
	$(target_id).removeData("dropkick");
	$(target_id).empty();
	var container = '#dk_container_' + target_id.substr(1);
	$(container).remove();
	//Insert new values
	$(target_id).append("<option value=0>" + title + "</option>");
	for(i in values_arr) {
		$(target_id).append("<option value=" + values_arr[i].code + ">" + values_arr[i].name + "</option>");
	}
	
	$(target_id).dropkick({
		theme: 'green',
		change: function (value, label) {
			dd_change(target_id, value, label);
		}
	});
}

//Dropdown onChange()
function dd_change(target_id, value, label) {
	if(target_id != '#vil') {
		var b = true;
		var update_arr = v.dis;
		var update_id = "#dis";
		var select_title = "";
		if(target_id == '#pro')	{
			update_arr = v.dis;
			update_id = '#dis';
			select_title = '​ជ្រើសរើស​ស្រុក៖';
			updateDropkick('#dis','0');
			updateDropkick('#com','0');
			updateDropkick('#vil','0');
			set_dd('#com', [], select_title);
			set_dd('#vil', [], select_title);
		} else if(target_id == '#dis') {
			update_arr = v.com;	
			update_id = '#com';
			select_title = '​ជ្រើសរើសឃុំ៖';
			updateDropkick('#com','0');
			updateDropkick('#vil','0');
			set_dd('#vil', [], select_title);
		} else if(target_id == '#com') {
			update_arr = v.vil;
			update_id = '#vil';
			select_title = '​ជ្រើសរើស​ភូមិ៖';
			updateDropkick('#vil','0');
			
		}
		
		for(k in update_arr) 
			if(value == k) { b = false; break; }				
		if(b) {
			$.ajax({
			url: 'shp/shp_ajax.php?opt=' + update_id.substr(1) + '&code=' + value, 
			async: false, 
			dataType:'json',
			type:'GET',
			success: function(r) { if(r != '') update_arr[value] = r; set_dd(update_id, update_arr[value], select_title); }
			}); 
		} else {
			set_dd(update_id, update_arr[value], select_title);
		}
	}
}
function updateDropkick(id, value) {
    //Get the select element and dropkick container
    var select = $(id);
    var dk = select.prev('.dk_container');

    //Set the value of the select
    select.val(value);        

    //Loop through the dropkick options
    dk.find('.dk_options_inner').children("li").each(function () {
        var li = $(this);
        var link = li.children('a');

        //Remove the 'current' class if it has it
        li.removeClass('dk_option_current');

        //If the option has the value we passed in
        if (link.data('dk-dropdown-value') == value) {
            //Set the 'current' class on the option
            li.addClass('dk_option_current');

            //Set the text of the dropkick element
            dk.find('.dk_label').text(link.text());
        }
    });
}