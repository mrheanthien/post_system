/**
 * AutoComplete Field - JavaScript Code
 *
 * This is a sample source code provided by fromvega.
 * Search for the complete article at http://www.fromvega.com
 *
 * Enjoy!
 *
 * @author fromvega
 *
 */

// global variables
var acListTotal   =  0;
var acListCurrent = -1;
var acDelay		  = 500;
var acURL		  = null;
var acSearchId	  = null;
var acResultsId	  = null;
var acSearchField = null;
var acResultsDiv  = null;
var tt			= '';

function setValueTextbox(v,boxId){
	$('#'+boxId).val(v);	
	
	if(boxId.length>15 && boxId.length<19)boxId= boxId.substring(0,15);
	if(boxId.length>19)boxId= boxId.substring(0,19);
	var txtId='other_discharge';
	if(v==35533 && (boxId =='discharge_diagnosis' || boxId =='admis_diagnosis')){
		if(boxId == 'admis_diagnosis')txtId='other_admiss';
		$('#'+txtId).show();
		$('#'+txtId).focus();	
	}else{
		$('#other_discharge').hide();
		$('#other_discharge').val('');
		$('#other_admiss').hide();
		$('#other_admiss').val('');
	}
}

function setAutoComplete(field_id, results_id, get_url){
	// initialize vars
	acSearchId  = "#" + field_id;
	acResultsId = "#" + results_id;
	acURL 		= get_url;
	// create the results div
	$("body").append('<div id="' + results_id + '"></div>');

	// register mostly used vars
	acSearchField	= $(acSearchId);
	acResultsDiv	= $(acResultsId);

	// reposition div
	repositionResultsDiv();
	
	// on blur listener
	acSearchField.blur(function(){ setTimeout("clearAutoComplete()", 200) });
	
	// on key up listener
	acSearchField.keyup(function (e) {
		
		// get keyCode (window.event is for IE)
		var keyCode = e.keyCode || window.event.keyCode;
		var lastVal = $(this).val();//acSearchField.val();
		// check an treat up and down arrows
		if(updownArrow(keyCode)){
			return;
		}
		
		/*if(keyCode == 8){
			$(this).val('');
			return;
		}*/
		// check for an ENTER or ESC
		if(keyCode == 13 || keyCode == 27){			
			clearAutoComplete();
			return;
		}
		clearTimeout(tt);
		// if is text, call with delay
		tt=setTimeout(function () {autoComplete(lastVal)}, acDelay);
	});
}

// treat the auto-complete action (delayed function)
function autoComplete(lastValue)
{
	// get the field value
	var part = lastValue;//acSearchField.val();
	//var lastValue = $(sId).val();
	// if it's empty clear the resuts box and return
	if(part == ''){
		clearAutoComplete();
		return;
	}
	
	// if it's equal the value from the time of the call, allow
	if(lastValue != part){
		return;
	}
	
	// get remote data as JSON
	$.getJSON(acURL + part, function(json){
		// get the total of results
		var ansLength = acListTotal = json.length;

		// if there are results populate the results div
		if(ansLength > 0){

			var newData = '';
			var values  = '';
			// create a div for each result
			for(i=0; i < ansLength; i++) {
				values = json[i].split(':');
				newData += '<div class="unselected" onclick="setValueTextbox('+values[0]+',\''+values[2]+'\')";>' + values[1] + '</div>';
			}

			// update the results div
			acResultsDiv.html(newData);
			acResultsDiv.css("display","block");
			
			// for all divs in results
			var divs = $(acResultsId + " > div");
		
			// on mouse over clean previous selected and set a new one
			divs.mouseover( function() {
				divs.each(function(){ this.className = "unselected"; });
				this.className = "selected";
			})
			var txt	 = '';
			var text = '';
			// on click copy the result text to the search field and hide
			divs.click( function() {
				text = this.childNodes[0].nodeValue;
				text = text.split('-');
				if(text.length >1)txt=text[0]+'-' +text[1];else txt = this.childNodes[0].nodeValue;
				acSearchField.val(txt);
				clearAutoComplete();
			});

		} else {
			clearAutoComplete();
		}
	});
}

// clear auto complete box
function clearAutoComplete()
{
	acResultsDiv.html('');
	acResultsDiv.css("display","none");
}

// reposition the results div accordingly to the search field
function repositionResultsDiv()
{
	// get the field position
	var sf_pos    = acSearchField.offset();
	var sf_top    = sf_pos.top;
	var sf_left   = sf_pos.left;

	// get the field size
	var sf_height = acSearchField.height();
	var sf_width  = acSearchField.width();

	// apply the css styles - optimized for Firefox
	acResultsDiv.css("position","absolute");
	acResultsDiv.css("left", sf_left - 2);
	acResultsDiv.css("top", sf_top + sf_height + 5);
}


// treat up and down key strokes defining the next selected element
function updownArrow(keyCode) {
	if(keyCode == 40 || keyCode == 38){

		if(keyCode == 38){ // keyUp
			if(acListCurrent == 0 || acListCurrent == -1){
				acListCurrent = acListTotal-1;
			}else{
				acListCurrent--;
			}
		} else { // keyDown
			if(acListCurrent == acListTotal-1){
				acListCurrent = 0;
			}else {
				acListCurrent++;
			}
		}

		// loop through each result div applying the correct style
		acResultsDiv.children().each(function(i){
			if(i == acListCurrent){
				acSearchField.val(this.childNodes[0].nodeValue);
				this.className = "selected";
			} else {
				this.className = "unselected";
			}
		});

		return true;
	} else {
		// reset
		acListCurrent = -1;
		return false;
	}
}