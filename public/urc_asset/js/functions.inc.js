function set_gazetteers(n, opt, code, ft) {
	return $.getJSON('ajax/gazetteers.php', {'l': _lang, 'opt': opt, 'code':code}, function(r) {
		var s = '<option value="">' + ft + '</option>';
		if(r.e == 0) for(var i = 0; i < r.m.length; i++) s += '<option value="' + r.m[i].code + '">' + r.m[i].name + '</option>';
		n.html(s);
	});
}

function addCommas(nStr) {
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}

function fixLength(s, l, c) { 
	s = ''+s;
	if(s.length < l) 
		for(var i = s.length; i < l; i++) s = c + s;
	return s;
}
  
function Tr() {
	var row = [];
	var row_id = [];
	var _class = [];
	var attr = [];
	this.addClass = function(c) {_class[row.length - 1] = c;}
	this.addValue = function(td) {row.push(td); attr[row.length - 1] = new Attr();}
	this.addIndex = function(i) {row_id[row.length - 1] = i;}
	this.addAttr = function(a, v) {attr[row.length - 1].add(a, v);}
	this.getHtml = function(arr) {
		var rows = getRows();
		if(arr) return rows();
		else {
			var s = '';
			for(var i in rows) s += rows[i];
			return s;
		}
	}
	
	function getRows() {
		var s = [];
		for(var i in row) {
			s[i] = '<tr';
			if(row_id[i]) s[i] += ' id=' + q('tr' + row_id[i]);
			if(_class[i]) s[i] +=' class=' + q(_class[i]);
			if(attr[i]) s[i] += ' ' + attr[i].getHtml();
			s[i] += '>';
			s[i] += row[i].getHtml() + '</tr>'; 
		}
		return s;
	}
}

function Td(c) {
	if(!c) c = [];
	var cell = c;
	var _class = [];
	var attr = [];
	this.addClass = function(c) {_class.push(c);}
	this.addValue = function(html) {cell.push(html);}
	this.addArray = function(a) {cell = a;}
	this.addAttr = function(n, v) {attr.push({name: n, value: v});}
	this.getValue = function() {return cell;}
	this.getHtml = function(arr) {
		if(arr) { var s = []; for(var i in cell) s[i] = '<td ' + getAttr(attr) + ' class="td' + i + (_class[i] ? ' ' + _class[i] : '') + '">' + cell[i] + '</td>'; return s;}
		else { var s = '';  for(var i in cell) s += '<td ' + getAttr(attr) + ' class="td' + i + (_class[i] ? ' ' + _class[i] : '') + '">' + cell[i] + '</td>'; return s;}
	}
	
	function getAttr(attr) { 
		var s = '';
		if(attr.length) for(var i in attr) s += attr[i].name + '="' + attr[i].value + '" ';
		return s;
	}
	
	
}

function Attr() {
	var att = [];
	this.add = function(a, v) {
		att.push([a, v]);
	}
	this.getHtml = function() {
		var s = '';
		for(var i in att) s += att[i][0] + ' = ' + q(att[i][1]);
		return s;
	}
}

function q(s) {return '"' + s + '"';}

function inArray(v, a) {
	for(var i in a) if(v == a[i]) return true;
	return false;
}

function removeArray(arr, index) {
	var temp = [];
	for(var i in arr) if(i != index) temp.push(arr[i]);
	return temp;
}

$(function() {

	$('.dd').each(function() {
		var val = $(this).val();
		if(val == 0 || val == '') $(this).addClass('dd_gray');
	});
	

	$('.dd').live('change', function() {
		var val = $(this).val();
		if(val != '' && val != 0) $(this).removeClass('dd_gray');
		else $(this).addClass('dd_gray');
	});
	
	$('.toggle').live('click', function() {
		$(this).parent().children('.toggle').removeClass('on');
		$(this).addClass('on');
	});
	
	$('.calendar').live('change', function() {
		var val = $(this).val(), title = $(this).attr('title');
		if(val == '' || val == title) {
			$(this).addClass('tf_gray');
			if(title) $(this).val(title);
		}
		else $(this).removeClass('tf_gray');
	});
	
	$('.menu-select').change(function() {
		var dir = $('.menu-select option:selected').attr('dir');
		var go  = '?l='+_lang+'&p='+$(this).val();
		if(dir == 1)go=$(this).val();
		window.location = go;
	});
	
	$('.float-input').on('keypress', function(event){
		if(event.which == 8 || event.which == 0){
			return true;
		}
		if(event.which < 46 || event.which > 59) {
			return false;
			//event.preventDefault();
		} // prevent if not number/dot

		if(event.which == 46 && $(this).val().indexOf('.') != -1) {
			return false;
			//event.preventDefault();
		} // prevent if already dot
	});
	
	$('.int-input').on('keypress', function(event){
		if(event.which == 8 || event.which == 0){
			return true;
		}
		if(event.which < 47 || event.which > 59) {
			return false;
			//event.preventDefault();
		} // prevent if not number/dot

	});
	
	
	$body = $("body");

    $(document).on({
        ajaxStart: function() { $body.addClass("loading");    },
        ajaxStop: function() { $body.removeClass("loading"); }
    });
});


function isNumber(n) {
	var reg = new RegExp("^[-]?[0-9]+[\.]?[0-9]+$");
	return reg.test(n);
}


//Convert JS Date to dd-mm-yyyy, with offset of day from the start date
function getDate(start, offset) {
	var d = new Date();
	d.setTime(start.getTime()+offset*86400000);
	var day = d.getDate();
	if(day < 10)
		day = "0" + day;
	var month = d.getMonth()+1;
	if(month < 10)
		month = "0" + month;
	return day + "-" + month + "-" + d.getFullYear();
}

//Convert JS Date to MySQL-style date
//Input: JS Date object
//Return: Datetime string ready to be inserted to MySQL, or null
function getDateTime(input) {
	if(!input) return '';
		
	var d = input;
	var day = d.getDate();
	if(day < 10)
		day = "0" + day;
		
	var month = d.getMonth()+1;
	if(month < 10)
		month = "0" + month;
		
	var hour = d.getHours();
	if(hour < 10)
		hour = "0" + hour;
		
	var minute = d.getMinutes();
	if(minute < 10)
		minute = "0" + minute;
		
	var sec = d.getSeconds();
	if(sec < 10)
		sec = "0" + sec;
	return d.getFullYear() + "-" + month + "-" + day + " " + hour + ":" + minute +":" + sec;
}

//Convert MySQL datetime into Javascript date
function parseDatetime(input) {
	if(input) {
		// Split timestamp into [ Y, M, D, h, m, s ]
		var t = input.split(/[- :]/);
		// Apply each element to the Date function
		return new Date(t[0], t[1]-1, t[2], t[3], t[4], t[5]);
	} else 
		return '';
}
//

function clone(dupeObj) {
	var retObj = new Object();
	if(dupeObj == null) return null;
	if (typeof(dupeObj) == 'object') {
		if (typeof(dupeObj.length) != 'undefined')
			var retObj = new Array();
		for (var objInd in dupeObj) {	
			if (typeof(dupeObj[objInd]) == 'object') {
				retObj[objInd] = clone(dupeObj[objInd]);
			} else if (typeof(dupeObj[objInd]) == 'string') {
				retObj[objInd] = dupeObj[objInd];
			} else if (typeof(dupeObj[objInd]) == 'number') {
				retObj[objInd] = dupeObj[objInd];
			} else if (typeof(dupeObj[objInd]) == 'boolean') {
				((dupeObj[objInd] == true) ? retObj[objInd] = true : retObj[objInd] = false);
			}
		}
	}
	return retObj;
}

//START nsophal:Validation
function fjGetFullMonthIndex(str){
	var lListArr = ['January','February','March','April','May','June','July','August','September','October','November','December'];
	var lIndexInt= lListArr.indexOf(str)+1;
	return lIndexInt;
}
//END nsophal:Validation



//Closure
(function() {
  /**
   * Decimal adjustment of a number.
   *
   * @param {String}  type  The type of adjustment.
   * @param {Number}  value The number.
   * @param {Integer} exp   The exponent (the 10 logarithm of the adjustment base).
   * @returns {Number} The adjusted value.
   */
  function decimalAdjust(type, value, exp) {
    // If the exp is undefined or zero...
    if (typeof exp === 'undefined' || +exp === 0) {
      return Math[type](value);
    }
    value = +value;
    exp = +exp;
    // If the value is not a number or the exp is not an integer...
    if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
      return NaN;
    }
    // Shift
    value = value.toString().split('e');
    value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
    // Shift back
    value = value.toString().split('e');
    return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
  }

  // Decimal round
  if (!Math.round10) {
    Math.round10 = function(value, exp) {
      return decimalAdjust('round', value, exp);
    };
  }
  // Decimal floor
  if (!Math.floor10) {
    Math.floor10 = function(value, exp) {
      return decimalAdjust('floor', value, exp);
    };
  }
  // Decimal ceil
  if (!Math.ceil10) {
    Math.ceil10 = function(value, exp) {
      return decimalAdjust('ceil', value, exp);
    };
  }
})();