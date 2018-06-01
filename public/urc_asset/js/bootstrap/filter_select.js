// JavaScript Document
jQuery.fn.filterByText = function(textbox, selectSingleMatch) {
	  return this.each(function() {
	    var select = this;
	    var options = [], cl='', hef='', ty='', co='', ab='', pr='', tl='', tt='';
	    $(select).find('option').each(function() {
	      options.push({cl: $(this).attr('class'),
		  				hef: $(this).attr('hef_price'),
						ty: $(this).attr('type'),
						co: $(this).attr('code'),
						ab: $(this).attr('abbr'),
						tl: $(this).attr('data-toggle'),
						tt: $(this).attr('title'),
						pr: $(this).attr('price'), 
						text: $(this).text()});
	    });
	    $(select).data('options', options);
	    $(textbox).bind('change keyup', function() {
	      var options = $(select).empty().scrollTop(0).data('options');
	      var search = $.trim($(this).val());
       	  var regex = new RegExp(search,'gi');
	 
	      $.each(options, function(i) {
	        var option = options[i];
	        if(option.text.match(regex) !== null) {
	          $(select).append(
	             $('<option>').text(option.text).attr({class:option.cl + ' hint--info',
				 									   hef_price:option.hef,
													   type:option.ty,
													   code:option.co,
													   abbr:option.ab,
													   'data-hint':option.pr,
													   price:option.pr})
				
	          );
			  
	        }
	      });
	      if (selectSingleMatch === true &&
	          $(select).children().length === 1) {
	          $(select).children().get(0).selected = true;
	      }
	    });
	  });
};