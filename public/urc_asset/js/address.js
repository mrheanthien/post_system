/*
	To use: Include this file  and make sure that the 4 selectboxes are named: #pro, #dis, #com, #vil

*/

var v = {
	dis:[], 
	com:[], 
	vil:[]
};

$('#pro').change(function() {
	var me = $(this), b = true;

	set_dd($('#dis'), [], '​ជ្រើសរើស​ស្រុក៖'); $('#dis').val('0');
	set_dd($('#com'), [], '​ជ្រើសរើស​ឃុំ៖'); $('#com').val('0');
	set_dd($('#vil'), [], '​ជ្រើសរើសភូមិ៖'); $('#vil').val('0');
	
	for(k in v.dis) if(me.val() == k) { b = false; break; }				
	if(b) $.ajax({
		url: 'shp/shp_ajax.php?opt=dis&code=' + me.val(), 
		async: false, 
		dataType:'json',
		type:'GET',
		success: function(r) { if(r != '') v.dis[me.val()] = r; set_dd($('#dis'), v.dis[me.val()], '​ជ្រើសរើស​ស្រុក៖'); }
	}); 
	else set_dd($('#dis'), v.dis[me.val()], 'Select District:');
});

$('#dis').change(function() {
	var me = $(this), b = true;

	set_dd($('#com'), [], '​ជ្រើសរើស​ឃុំ៖'); $('#com').val('0');
	set_dd($('#vil'), [], '​ជ្រើសរើស​ភូមិ៖'); $('#vil').val('0');
	
	for(k in v.com) if(me.val() == k) { b = false; break; }				
	if(b) $.ajax({
		url: 'shp/shp_ajax.php?opt=com&code=' + me.val(), 
		async: false, 
		dataType:'json',
		type:'GET',
		success: function(r) { if(r != '') v.com[me.val()] = r; set_dd($('#com'), v.com[me.val()], '​ជ្រើសរើសឃុំ៖'); }
	}); 
	else set_dd($('#com'), v.dis[me.val()], '​ជ្រើសរើសឃុំ៖');
});

$('#com').change(function() {
	var me = $(this), b = true;

	set_dd($('#vil'), [], '​ជ្រើសរើស​ភូមិ៖'); $('#vil').val('0');
	
	for(k in v.vil) if(me.val() == k) { b = false; break; }				
	if(b) $.ajax({
		url: 'shp/shp_ajax.php?opt=vil&code=' + me.val(), 
		async: false, 
		dataType:'json',
		type:'GET',
		success: function(r) { if(r != '') v.vil[me.val()] = r; set_dd($('#vil'), v.vil[me.val()], '​ជ្រើសរើស​ភូមិ៖'); }
	}); 
	else set_dd($('#vil'), v.dis[me.val()], '​ជ្រើសរើស​ភូមិ៖');
});

function set_dd(n, j, ft) {
	var s = '<option value="0">' + ft + '</option>';
	for(k in j) s += '<option value="' + j[k].code + '">' + j[k].name + '</option>';
	n.html(s);
}