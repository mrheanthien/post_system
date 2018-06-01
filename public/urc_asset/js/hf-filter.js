/**
 * This object is used to init health facility coverage filter by user
 * 
 * Dependencies
 * 		"ajax/getHFCoverage.php, jquery"
 * Params
 * 		includeClosedHF: If you want the filter to include closed health facilities as well
 * 		facTypes: type of facility you want to include in filters
 * 					hp: Health Post
 * 					hc: Health Center
 * 					fdh: Former District Hospital
 * 					rh: Referral Hospital
 * 					ph: Provincial Hopsital
 * 					nh: National Hospital
 * 				- Multiple facility types must be seperated by "-" Ex: "rh-ph-nh" 
 * 		hfDOM: id of health facility filter select box
 * 		odDOM: id of OD filter select box
 * 		proDOM: id of Province filter select box
 * 		autoSelect: allow filter to auto select if there is only 1 option if true
 * 		user: User ID for HF Coverage. 
 * 					'' : current user,
 * 					1: Administrator (all hf)
 * 		init(options): to load data into filter 
 */
var HFFilter = {
	includeClosedHF: false,
	facTypes : '',
	hfDOM: 'pl-hf',
	odDOM: 'pl-od',
	proDOM: 'pl-pro',
	autoSelect: true,
	defaultHF: '',
	lang: 'kh',
	user: '',
	init: function(options){
		var obj = this;
		for(key in options) {
			if(this.hasOwnProperty(key)) {
				this[key] = options[key]
			}
		}
		
		this.getHFCoverage('pro', '').done(function(r){
			var str = '';
			$.each(r, function(index, pro){
				str +='<option value="'+ pro.code +'">' + pro.name + '</option>';
			});
			$('#'+obj.proDOM + ' option:first-child').after(str);
			
			if(r.length == 1 && obj.autoSelect){
				$('#' + obj.proDOM + ' option:nth-child(2)').attr('selected','selected');
				$('#' + obj.proDOM).change();
			}
		});
		
		if(obj.defaultHF !== ''){
			obj.getRelatedHFCodes(obj.defaultHF).done(function(r){
				$('#' + obj.proDOM).val(r.province_code);
				$('#' + obj.proDOM).change();
                $('#' + obj.odDOM).val(r.od_code);
                $('#' + obj.odDOM).change();
                $('#' + obj.hfDOM).val(obj.defaultHF);
                $('#' + obj.hfDOM).change();


				
			});
		}
		
		$('#' + obj.proDOM).live('change', function(e){
			provinceCode = $(this).val();
			obj.getHFCoverage('od', provinceCode).done(function(r){
				// OD options
				var ods = '';
				$.each(r.od, function(index, od){
					ods +='<option value="'+ od.code +'">' + od.name + '</option>';
				});
				$('#' + obj.odDOM + ' option').not(':first').remove();
				$('#' + obj.odDOM + ' option:first-child').after(ods);
				
				if(r.od.length == 1 && obj.autoSelect && r.hf.length == 0){
					$('#' + obj.odDOM + ' option:nth-child(2)').attr('selected','selected');	
					$('#' + obj.odDOM).change();
				}
				// HF Options for Provincial & National Hospital
				var hfs = '';
				$.each(r.hf, function(index, hf){
					hfs +='<option value="'+ hf.code +'">' + hf.name + '</option>';
				});
				
				$('#' + obj.hfDOM + ' option').not(':first').remove();
				$('#' + obj.hfDOM + ' option:first-child').after(hfs);
				if(r.hf.length == 1 && obj.autoSelect && r.od.length == 0){
					$('#' + obj.hfDOM + ' option:nth-child(2)').attr('selected','selected');	
				}
				$('#' + obj.hfDOM).change();
			});
		});

		$('#' + obj.odDOM).live('change', function(e){
			odCode = $(this).val();
			if(odCode != ''){
				obj.getHFCoverage('hf', odCode).done(function(r){
					var str = '';
					$.each(r.hf, function(index, hf){
						str +='<option value="'+ hf.code +'">' + hf.name + '</option>';
					});
					$('#' + obj.hfDOM +' option').not(':first').remove();
					$('#' + obj.hfDOM +' option:first-child').after(str);
					if(r.hf.length == 1 && obj.autoSelect){
						$('#' + obj.hfDOM + ' option:nth-child(2)').attr('selected','selected');	
					}
					$('#' + obj.hfDOM).change();
				});
			}else{
				$('#' + obj.proDOM).change();
			}
		});
	},
	getHFCoverage: function(opt, code){
		var data = {};
		data.opt = opt;
		data.code = code; 
		data.includeClosedHF = (this.includeClosedHF == true ? 1:0);
		if(this.user != '') data.userID = this.user;
		if(this.facTypes != '') data.type = this.facTypes;
		return	$.ajax({
					url: "ajax/getHFCoverage.php?l=" + this.lang,
					dataType: "JSON",
					type: "GET",
					async: false,
					data: data
				});
	},
	getRelatedHFCodes: function(code){
		return	$.ajax({
			url: "ajax/getRelatedHFCodes.php?code=" + code,
			dataType: "JSON",
			type: "GET"
		});
	}
}

