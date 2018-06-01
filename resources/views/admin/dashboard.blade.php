@extends('layouts.admin')

@section('content')
    <div class="w-buttons">
        <div id="tabs">
			<ul>
				<li class="t_1"><a href="#tabs-1">ព័ត៌មានទូទៅ</a></li>
				<li class="t_2"><a href="#tabs-2">ព័ត៌មានសំខាន់ៗអំពីសមាជិក​គ្រួសារ​ទាំងអស់</a></li>
				<li class="t_3"><a href="#tabs-3">ស្ថានភាពទូទៅរបស់គ្រួសារ</a></li>
			</ul>
            <div style="margin:-17px;" id="tabs-1">
				<div style="margin:0; border: 1px solid #ddd; border-top:none; padding:5px;">
				<form action="{{route('general.insert')}}" method="POST">
						{{ csrf_field() }}
					<h4>ក) ព័ត៌មានទូទៅ</h4>
						<hr>
						<h5><b><u>ក.១ ព័ត៌មានទូទៅ</u></b></h5>
						<table class="tb_none tb_grid" style="width:100%;">
							<tr>
								<td></td>
								<td></td>
								<td><b>លេខកូដសម្ភាសន៍:</b></td>
								<td><input type="text" class="dd" id="pl-pro" name="code" value=" BTB18022301"></td>
							</tr>
							<tr>
								<td>ឈ្មោះឈ្មោះអ្នកជំងឺ :</td>
								<td><input type="text" class="dd" id="pl-pro" name="p_name"></td>
								<td>អាយុ :</td>
								<td><input type="number" class="dd" id="pl-pro" name="ages"></td>                     
							</tr>
							<tr>
								<td>ភេទ :</td>
								<td>
									<label>ប្រុស</label> <input name="sex" id="m" class="radio_box" value="Male" style="margin-right:10px;" type="radio">
									<label>ស្រី</label> <input name="sex" id="m" class="radio_box" value="Female" style="margin-right:10px;" type="radio">
								</td>
								<td>លេខទូរស័ព្ធ :</td>
								<td><input type="text" class="dd" id="pl-pro" name="phone"></td>                     
							</tr>
							<tr>
								<td>ខេត្ត :</td>
								<td>
									<select class="dd" id="pro" name="province">
										<option value="">...</option>
										@foreach($provinces as $key=>$value)
										<option value="{{$value->code}}">{{$value->name_kh}}</option>
										@endforeach
									</select>
								</td>
								<td>ស្រុក :</td>
								<td>
									<select class="dd" id="dis" name="dis">
										<option value="">...</option>
										
									</select>
								</td>                     
							</tr>
							<tr>
								<td>ឃំុ :</td>
								<td>
									<select class="dd" id="com" name="commune">
										<option value="">...</option>
									</select>
								</td>
								<td>ភូមិ :</td>
								<td>
									<select class="dd" id="vill" name="village">
										<option value="">...</option>
									</select>
								</td>                     
							</tr>
							<tr>
								<td>ទីតាំងនៅក្នុងភូមិ :</td>
								<td>
									<select class="dd" id="pl-od" name="v_area">
										<option value="">...</option>
										<option value="1">A</option>
										<option value="2">B</option>
										<option value="3">C</option>
									</select>
								</td>
								<td></td>
								<td></td>                     
							</tr>
						</table>
						<h5><b><u>ក.២ ព័ត៌មានអំពីអ្នកដែលផ្តល់ចំលើយ(អ្នកដែលបានសំភាសន៏) </u></b></h5>
						<table class="tb_none tb_grid" style="width:100%;">
							<tr>
								<td>ឈ្មោះ :</td>
								<td><input type="text" class="dd" id="pl-pro" name="g2_name"></td>
								<td>អាយុ :</td>
								<td><input type="number" class="dd" id="pl-pro" name="g2_age"></td>                     
							</tr>
							<tr>
								<td>ភេទ :</td>
								<td>
									<label>ប្រុស</label> <input name="g2_sex" id="m" class="radio_box" value="Male" style="margin-right:10px;" type="radio">
									<label>ស្រី</label> <input name="g2_sex" id="m" class="radio_box" value="Female" style="margin-right:10px;" type="radio">
								</td>
								<td>លេខទូរស័ព្ធ :</td>
								<td><input type="text" class="dd" id="pl-pro" name="g2_phone"></td>                     
							</tr>
							<tr>
								<td>ត្រូវជា(ទំនាក់ទំនងជាមួយមេគ្រួសារ) :</td>
								<td>
									<select name="g2_relation" class="dd">
										<option value="1">...</option>
										<option value="1">កូន</option>
										<option value="2">ប្តី</option>
										<option value="3">ប្រពន្ធ</option>
										<option value="4">តា</option>
										<option value="5">យាយ</option>
										<option value="6">ផ្សេងៗ</option>
									</select>
							</td>
								<td></td>
								<td></td>                     
							</tr>
						</table>
						<h5 style="padding:4px 0;"><b><u>ក.៣ ព័ត៌មានអំពី​ អ្នកដែលអាចបញ្ជាក់ពីស្ថានភាពគ្រួសារ (ដែលមិនមែនសមាជិកគ្រួសារ)ដូចជាមេភូមិ អ្នកជិតខាង​ មិត្តភ័ក្រ្ត </u></b></h4>
						<table class="tb_none tb_grid" style="width:100%;">
							<tr>
								<td>ឈ្មោះ :</td>
								<td><input type="text" class="dd" id="pl-pro" name="g3_name"></td>
								<td>អាយុ :</td>
								<td><input type="number" class="dd" id="pl-pro" name="g3_age"></td>                     
							</tr>
							<tr>
								<td>ភេទ :</td>
								<td>
									<label>ប្រុស</label> <input name="g3_sex" id="m" class="radio_box" value="Male" style="margin-right:10px;" type="radio">
									<label>ស្រី</label> <input name="g3_sex" id="f" class="radio_box" value="Female" style="margin-right:10px;" type="radio">
								</td>
								<td>លេខទូរស័ព្ធ :</td>
								<td><input type="text" class="dd" id="pl-pro" name="g3_phone"></td>                     
							</tr>
							<tr>
								<td>ត្រូវជា(ទំនាក់ទំនងជាមួយមេគ្រួសារ) :</td>
								<td>
									<select name="g3_relation" class="dd">
										<option value="1">...</option>
										<option value="1">កូន</option>
										<option value="2">ប្តី</option>
										<option value="3">ប្រពន្ធ</option>
										<option value="4">តា</option>
										<option value="5">យាយ</option>
										<option value="6">ផ្សេងៗ</option>
									</select>
								</td>
								<td></td>
								<td></td>                     
							</tr>
						</table>
					<div class="w_button">
						<input class="bt_blue next_general" value="រក្សាទុក​និង​ជំហានបន្ទាប់" id="generate" style="width:150px;" data-toggle="modal" data-target="#myModal_k"/>
					</div>
				</div>
				<hr>
				<div style="margin:0; border: 1px solid #ddd;">
				<h4 style="padding:5px 0 0 20px">ទិន្នន័យអ្នកសម្ភាស</h4>
				<hr>
					<table class="table table-bordered table-striped datatable1">
						<thead>
							<th>ល.រ</th>
							<th>ឈ្មោះឈ្មោះអ្នកជំងឺ</th>
							<th>ភេទ</th>
							<th>អាយុ</th>
							<th>លេខទូរស័ព្ធ</th>
							<th>ទីតាំងនៅក្នុងភូមិ</th>
							<th>កែប្រែ</th>
						</thead>
						<tbody>
							@foreach($general as $key=>$values)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$values->patient_name}}</td>
								<td>{{$values->gender}}</td>
								<td>{{$values->age}}</td>
								<td>{{$values->phone}}</td>
								<td>{{$values->village_area}}</td>
								<td>
								<a href="{{route('delete',$values->id)}}" onClick="return confirm('Do you want to delete?')"><i class="fa fa-trash" style="color: black;"></i></a> 
								<a href=""><i class="fa fa-edit" onClick="return confirm('Do you want to Update?')" style="color: black;"></i><a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
            </div>
            <!-- ......//កកកកកកកក....-->
            
            <!-- ........ខខខខខខខខ.....-->
            
            <div style="margin:0; border: 1px solid #ddd; border-top: none;" id="tabs-2">
            <h4>ខ) ព័ត៌មានសំខាន់ៗអំពីសមាជិក​គ្រួសារ​ទាំងអស់</h4>
			<p>មនុស្ស​ដែល​គេ​ចាត់ទុកថាជាសមាជិក​គ្រួសារលុះ​ត្រាតែ​រស់​នៅជាប្រចាំ​ក្នុង​គ្រួសារ ឬ​អវត្តមាន​តិច​ជាង​ ៦ខែ​​ (ត្រូវមានឯកសារយោងដូចជា សៀវភៅគ្រួសារ សៀវភៅស្នាក់នៅ សំបុត្រកំណើត លិខិតបញ្ជាក់ពីអាជ្ញាធរ)</p>
            <hr>
					<table class="tb_none tb_grid" style="border-color: #B0B0B0;" border="1" bordercolor="#B0B0B0">
						<thead>
							<tr>
								<th rowspan="2">ល.រ</th>
								<th rowspan="2">នាមត្រកូល នាមខ្លួន ឈ្មោះហៅក្រៅ</th>
								
								<th colspan="2"><p align="center">ឆ្នាំកំណើត ឬ អាយុ</p></th>
								<th rowspan="2">ទំនាក់ទំនង​ជាមួយ​មេ​គ្រួសារ (1)</th>
								<th rowspan="2">មុខងារ/​មុខរបរ  (2)</th>
								<th rowspan="2">កម្រិតវប្បធម៌(3) </th>
								<th rowspan="2">Actions</th>
							</tr>
							<tr>
								<th>ឆ្នាំ​កំណើត</th>
								<th>អាយុ</th>
							</tr>
						</thead>
						<tbody class="new_rows">
							<tr>
								<td>1</td>
								<td><input type="text" class="form-control" id="m_name" name="m_name"></td>
								<td><input type="text" class="form-control" id="m_dob" name="m_dob"></td>
								<td><input type="text" class="form-control" id="m_age" name="m_age"></td>
								<td><input type="text" class="form-control" id="m_relation" name="m_relation"></td>
								<td><input type="text" class="form-control" id="m_job" name="m_job"></td>
								<td><input type="text" class="form-control" id="m_edu" name="m_edu"></td>
							</tr>
						</tbody>
					</table>
					<p style="padding: 10px 0;">
					<input type="button" class="btn btn-primary" id="add_rows"  style="float:right;" value="បញ្ចូលបន្ថែម"></p>
	<!--				<a id="add_rows"><img src="{{asset('images/plus.png')}}"  style="float:right; width: 40px;"></a>-->
					<br>
					<p style="padding: 10px 0;">
						(1)= មេ​គ្រួសារ ប្តី/​ប្រពន្ធ កូន ឪពុក​ម្តាយ ក្មួយ ផ្សេងៗ  (2)= ប្រភេទមុខរបរចម្បងរបស់គាត់/នាង ដូចជា កសិករ កម្មករ មន្ត្រីរាជការ រកស៊ី សិស្ស នៅផ្ទះ
						<p>
						(3)= បើនៅរៀន បញ្ជាក់ពីថ្នាក់ទីប៉ុន្មាន។ បើជាមនុស្សពេញវ័យឬជាកុមារអាយុចាប់ពី៥ឆ្នាំតែឈប់រៀន សូមបញ្ជាក់ពីកម្រិតថ្នាក់នៅពេលឈប់រៀន</p>
					</p>
					<div class="w_button">
					<input class="bt_blue next_member" type="button" value="រក្សាទុក និង ជំហានបន្ទាប់" id="generate" style="width:150px;" />
					<input class="bt_blue back_general" type="button" value="ត្រលប់ក្រោយ" id="excel" style="width:150px;"/>
					</div>

            </div>
            
			<!-- ........//ខខខខខខខខ.....-->
			
			<!-- ........គគគគគគគគគ.....-->
            <div style="margin:0; border: 1px solid #ddd; border-top: none;" id="tabs-3">
			<h4>គ) ស្ថានភាពទូទៅរបស់គ្រួសារ</h4>

			<hr>
				<h5><b><u>គ.១  ផ្ទះសម្បែងរបស់ក្រុមគ្រួសារ</u></b></h5>
				<p>តើពួកគាត់រស់នៅទីកន្លែងណា? (សូមគូស ធេក នៅចំលើយតែមួយ) </p>
					<p class="check_p">
						<span>ក) <input type="checkbox" name="own_house"​​ value="1">ផ្ទះផ្ទាល់ខ្លួន</span>
						<span>ខ) <input type="checkbox" name="rent_house"​​ value="1">ជួលផ្ទះ</span>
						<span>គ) <input type="checkbox" name="other_house"​​ value="1">ស្នាក់នៅជាមួយគេដោយអត់បង់ថ្លៃ</span>
						<span>ឃ) <input type="checkbox" name="no_house"​​ value="1">គ្មានផ្ទះសម្បែង</span><br>
						<span class="g">ង) <input type="checkbox" name="institude"​​ value="1">ស្នាក់នៅស្ថាប័ន : <input type="text" class="d" id="pl-pro" name="name_in">
						ឈ្មោះស្ថាប័នលេខទូរសព្ទបុគ្គលទំនាក់ទំនងនៅស្ថាប័ន :<input type="text" class="d" id="pl-pro" name="phone_in">
						</span>
					</p>
					<br>
				<h5><b><u>គ.២ តើ​មាន​មនុស្សសរុប​ចំនួន​ប៉ុន្មាន​នាក់ រស់​នៅក្នុងផ្ទះដែលអ្នកស្នាក់នៅ (រាប់ទាំង​សមាជិក​គ្រួសារ និង​អ្នកផ្សេង)?</u></b></h5>
					<table class="tb_none tb_grid" style="width:100%;">
						<tr>
							<td>សរុប(នាក់) :</td>
							<td><input type="text" class="dd" id="pl-pro" name="total_member"></td>                 
						</tr>
					</table>
				<h5><b><u>គ.៣ តើ​ផ្ទៃ​ក្រឡា​ទីលំនៅរបស់ក្រុម​គ្រួសារ ​មាន​ចំនួន​ប៉ុន្មាន​ម៉ែត្រ​ក្រឡា​?​</u></b></h5>
					<table class="tb_none tb_grid" style="width:100%;">
							<tr>
								<td><b>ផ្ទះជាន់ក្រោម៖</b></td>
								<td><input type="text" class="dd" id="pl-pro" name="d_width" placeholder="បណ្តោយ(ម៉ែត្រ)​..."></td>
								<td><input type="text" class="dd" id="pl-pro" name="d_lenght" placeholder="ទទឹង(ម៉ែត្រ)..."></td>
								<td><input type="text" class="dd" id="pl-pro" name="d_area_total" placeholder="ផ្ទៃ(ម៉ែត្រក្រឡា)..."></td>                     
							</tr>
								<tr>
								<td><b>ផ្ទះជាន់លើ(បើមាន)៖</b></td>
								<td><input type="text" class="dd" id="pl-pro" name="u_width" placeholder="បណ្តោយ(ម៉ែត្រ)​..."></td>
								<td><input type="text" class="dd" id="pl-pro" name="u_lenght" placeholder="ទទឹង(ម៉ែត្រ)..."></td>
								<td><input type="text" class="dd" id="pl-pro" name="u_area_total" placeholder="ផ្ទៃ(ម៉ែត្រក្រឡា)..."></td>                     
							</tr>
							<tr>
								<td><b>សំណង់បន្ថែម ឧ. ផ្ទះបាយ... (បើមាន)៖ </b></td>
								<td><input type="text" class="dd" id="pl-pro" name="m_width" placeholder="បណ្តោយ(ម៉ែត្រ)​..."></td>
								<td><input type="text" class="dd" id="pl-pro" name="m_lenght" placeholder="ទទឹង(ម៉ែត្រ)..."></td>
								<td><input type="text" class="dd" id="pl-pro" name="m_area_total" placeholder="ផ្ទៃ(ម៉ែត្រក្រឡា)..."></td>                     
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><b style="float:right;">ផ្ទៃកម្រាលសរុប (ម៉ែត្រ​ក្រឡា) :</b></td>
								<td><input type="text" class="dd" id="pl-pro" name="net_total" placeholder="ផ្ម៉ែត្រក្រឡា..."></td>                     
							</tr>
					</table>
				<h5><b><u>គ.៤ បង្គន់ : តើគ្រួសាររបស់អ្នកមានបង្គន់ប្រើដែរឬទេ?​</u></b>  
				<span><input type="checkbox" name="toilet" value="1"> មាន</span> <span><input type="checkbox" name="toilet" value="0"> គ្មាន</span></h5>
					<p>
					បើមាន តើជាបង្គន់ចាក់ទឹក ឬ បង្គន់ស្ងួត?:
						<span><input type="checkbox" name="water_t" value="1"> បង្គន់ចាក់ទឹក</span>
						<span><input type="checkbox" name="dry_t" value="1"> បង្គន់ស្ងួត</span>
					</p>
					<p>
					ជាបង្គន់​របស់នរណា?:
						<span><input type="checkbox" name="owner_t" value="1"> ជាបង្គន់របស់គ្រួសារអ្នកផ្ទាល់</span>
						<span><input type="checkbox" name="public_t" value="1"> ជាបង្គន់រួមជាមួយគ្រួសារដទៃ</span>
					</p>
					<p>-សម្រាប់គ្រួសារមានផ្ទះផ្ទាល់ខ្លួន ឬ ​ នៅជាមួយគេដោយអត់បង់ថ្លៃ  (សម្រាប់គ្រួសារជួលផ្ទះគេ​ មិនបាច់បំពេញចំណុច គ៥ គ៦ និង គ៧ ហើយរំលងទៅ គ៨)</p>
					<p>
					ផ្ទះសាងសង់នៅឆ្នាំណា?:
						<span><input type="year" class="d" id="pl-pro" name="build_in"></span>
						<span>ធ្លាប់ជួសជុលឬទេ ៖
						<span><input type="checkbox" value="0" name="prepare"> មិនបាន</span>
						<span><input type="checkbox" value="1" name="prepare"> បាន នៅឆ្នាំ​​ <input type="text" class="d" id="pl-pro" name="prepare_in"></span>
					</p>
					<h5><b><u>គ.៥ ដំបូល</u></b>
					<table class="tb_none tb_grid" style="width:100%;">
						<tr>
							<td>ដំបូលធ្វើអំពី :</td>
							<td><input type="text" class="dd" id="pl-pro" name="about_roof" placeholder="​..."></td>
							<td>និង​ស្ថានភាព : </td>
							<td><input type="text" class="dd" id="pl-pro" name="roof_status" placeholder="..."></td>                     
						</tr>
					</table>
					<h5><b><u>គ.៦ ​ជញ្ជាំង</u></b>
					<table class="tb_none tb_grid" style="width:100%;">
						<tr>
							<td>​ជញ្ជាំងធ្វើអំពី :</td>
							<td><input type="text" class="dd" id="pl-pro" name="about_wall" placeholder="​..."></td>
							<td>និង​ស្ថានភាព : </td>
							<td><input type="text" class="dd" id="pl-pro" name="wall_status" placeholder="..."></td>                     
						</tr>
					</table>
					<h5><b><u>គ.៧) ស្ថានភាពទូទៅផ្ទះសម្បែង ​</u>:</b>  
						<span><input type="checkbox" value="3" name="home_status"> ទ្រុឌទ្រោម</span> 
						<span><input type="checkbox" value="2" name="home_status"> មធ្យម</span>
						<span><input type="checkbox" value="1" name="home_status"> ល្អ</span>
					</h5>
					<h5><b><u>គ.៨) សម្រាប់គ្រួសារជួលផ្ទះគេ​ (សម្រាប់គ្រួសារមានផ្ទះផ្ទាល់ខ្លួន ឬ ​ នៅជាមួយគេដោយអត់បង់ថ្លៃ មិនបាច់បំពេញចំណុច គ៨ ហើយរំលងទៅ គ៩)</u></b></h5>
					<table class="tb_none tb_grid" style="width:100%;">
						<tr>
							<td>តើថ្លៃជួលប្រចាំខែជាមធ្យមប៉ុន្មាន?:</td>
							<td><input type="text" class="dd" id="pl-pro" name="monthly_rent" placeholder="​..."></td>                     
						</tr>
					</table>
					<h5><b><u>គ.៩) ទ្រព្យ​សម្បត្តិសំភារៈប្រើប្រាស់អេឡិចត្រូនិច​របស់​គ្រួសារ</u></b></h5>
					<p>
					<table class="tb_none tb_grid">
						<thead>
							<tr>
								<th>ល.រ</th>
								<th>ប្រភេទសម្ភារប្រើបា្រស់</th>
								<th>ចំនួន</th>
								<th>តម្លៃទីផ្សារ ប្រសិន​លក់​វា​ចេញចំនួនតម្លៃឯកត្តា</th>
								<th>តម្លៃ​សរុប (រៀល)</td>
							</tr>
						</thead>
						<tbody class="new_rows_elect">
							<tr>
								<td>1</td>
								<td><input type="text" class="tt_1" id="pl-pro" name="type_asset"></td>
								<td><input type="text" class="dd" id="pl-pro" name="qty_asset"></td>
								<td><input type="text" class="dd" id="pl-pro" name="price_asset"></td>
								<td><input type="text" class="tt_1" id="pl-pro" name="total_asset"></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td><b style="float:right">សរុប​តម្លៃ​សម្ភារ</b></td>
								<td><input type="text" class="tt_1" id="pl-pro" name="net_total_asset"></td>
							</tr>
						</tfoot>
					</table></p>
					<p style="padding: 10px 25px 60px 0;">
						<input type="button" class="btn btn-primary" id="add_rows_elect" style="float:right;" value="បញ្ចូលបន្ថែម">
					</p>
					<hr style="border: 1px dashed #F3EFEF;">
					<p>
						<h5><b><u>គ.១០) អគ្គិសនី</u></b></h5>
						<p>តើបានតបណ្តាញអគ្គិសនី (រដ្ឋឬឯកជន) ដែរឬទេ?​ 
							<span><input type="checkbox" name="connect" value="1"> បានទ</span> 
							<span><input type="checkbox" name="connect" value="0"> មិនបានត</span>
						</p>
						<p><b>ប្រសិនបានតបណ្តាញអគ្គិសនី :</b>  តម្លៃក្នុងមួយគីឡូវ៉ាត់/ម៉ោង <input type="text" name="price_in_kwh" >ចំនួនគីឡូវ៉ាត់ដែលប្រើជាមធ្យមក្នុងមួយខែ <input type="text" name="kwh_per_month"> 
						<p>ចំណាយ​ជា​មធ្យមក្នុងមួយខែ <input type="text" name="pay_per_month"></p>
						</p>
					</p>
					<p><b>ប្រសិនមិនបានតបណ្តាញអគ្គិសនី :</b>
							<span><input type="checkbox" name="machine" value="1"> ប្រើម៉ាស៊ីនភ្លើង</span> 
							<span><input type="checkbox" name="battery" value="1"> ប្រើអាគុយ</span>
							<span><input type="checkbox" name="lamp" value="1"> ប្រើចង្កៀងប្រេងកាត</span>
							<span><input type="checkbox" name="sola" value="1"> ថាមពលព្រះអាទិត្យ</span>
						</p>
					<br>
					<hr style="border: 1px dashed #F3EFEF;">
					<h5><b><u>គ.១១) យានជំនិះជាទ្រព្យសម្បត្តិផ្ទាល់របស់​គ្រួសារ</u></b></h5>
					<p><b>តើអ្នកប្រើមធ្យោបាយអ្វីមកមន្ទីរពេទ្យ?</b> <input type="text" name=""></p>
					<table class="tb_none tb_grid">
						<thead>
							<tr>
								<th>ល.រ</th>
								<th>ប្រភេទសម្ភារប្រើបា្រស់</th>
								<th>ចំនួន</th>
								<th>តម្លៃទីផ្សារ ប្រសិន​លក់​វា​ចេញចំនួនតម្លៃឯកត្តា</th>
								<th>តម្លៃ​សរុប (រៀល)</td>
							</tr>
						</thead>
						<tbody class="new_rows_v">
							<tr>
								<td>1</td>
								<td><input type="text" class="tt_1" id="pl-pro" name="type_v_asset"></td>
								<td><input type="text" class="dd" id="pl-pro" name="qty_v_asset"></td>
								<td><input type="text" class="dd" id="pl-pro" name="price_v_asset"></td>
								<td><input type="text" class="tt_1" id="pl-pro" name="total_v_asset"></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td><b style="float:right">សរុប​តម្លៃ​សម្ភារ</b></td>
								<td><input type="text" class="tt_1" id="pl-pro" name="age"></td>
							</tr>
						</tfoot>
					</table>
					<p style="padding: 10px 25px 60px 0;">
						<input type="button" class="btn btn-primary" id="add_rows_v" style="float:right;" value="បញ្ចូលបន្ថែម">
					</p>
					<hr style="border: 1px dashed #F3EFEF;">
					<h5><b><u>គ.១២) ចំណូល</u></b></h5>
					<p><b><u>គ.១២.១) ចំណូល​ ពីសកម្មភាពកសិកម្ម ផ្ទាល់ខ្លួន</u></b></p>
					<p><b><u>គ.១២.១.១) ការចិញ្ចឹមសត្វ</u></b></p>
					<table class="tb_none tb_grid">
						<thead>
							<tr>
								<th>ល.រ</th>
								<th>ប្រភេទសត្វ</th>
								<th>ចំនួនសត្វធំ</th>
								<th>ចំនួនកូនសត្វ</th>
								<th>កំណត់សម្គាល់ (បញ្ជាក់ បើសិនជាសត្វប្រវាស់គេ)</td>
							</tr>
						</thead>
						<tbody class="new_rows_ani">
							<tr>
								<td>1</td>
								<td><input type="text" class="tt_1" id="pl-pro" name="age"></td>
								<td><input type="text" class="dd" id="pl-pro" name="age"></td>
								<td><input type="text" class="dd" id="pl-pro" name="age"></td>
								<td><input type="text" class="tt_1" id="pl-pro" name="age"></td>
							</tr>
						</tbody>
					</table></p>
					<p style="padding: 10px 25px 60px 0;">
						<input type="button" class="btn btn-primary" id="add_row_ani" style="float:right;" value="បញ្ចូលបន្ថែម">
					</p>
					<hr style="border: 1px dashed #F3EFEF;">
					<p><b><u>គ.១២.១.២​)មាន​ដីកសិកម្ម ឬ​ទេ </u>? </b>  
							<span><input type="checkbox"> គ្មាន</span> 
							<span><input type="checkbox"> ដីជួលគេ</span>
							<span><input type="checkbox"> ដីផ្ទាល់ខ្លួន</span>
					</p>
					<p>ប្រសិនបើមានដីផ្ទាល់ខ្លួន ឫជួលគេ សូមបញ្ជាក់ ទំហំដីកសិកម្ម (សុំសរសេរជាទំហំសរុបដោយបូកគ្រប់កន្លែង និងបញ្ជាក់ពីឯកតា)</p>
					<table class="tb_none tb_grid">
						<tr>
							<td>-មាន ៖</td>
							<td><input type="text" class="dd" id="pl-pro" name="age"></td>
							<td>កន្លែង.  ទំហំសរុប :</td>
							<td><input type="text" class="dd" id="pl-pro" name="age"></td>
						</tr>
						<tr>
							<td>-ដីចំការ៖ </td>
							<td><input type="text" class="dd" id="pl-pro" name="age"></td>
							<td>កន្លែង.  ទំហំសរុប :</td>
							<td><input type="text" class="dd" id="pl-pro" name="age"></td>
						</tr>
					</table>
					
					<hr style="border: 1px dashed #F3EFEF;">
					<p><b><u>គ.១២.២) ចំណូល ផ្សេងពី សកម្មភាពកសិកម្ម ផ្ទាល់ខ្លួន​ (បញ្ជាក់ការងារកម្មករផ្នែកកសិកម្មត្រូវបញ្ចូលក្នុងតារាងនេះ)  បញ្ជាក់ ៖ ចុះ​តែ​សមាជិក​គ្រួសារ​ដែល​រក​ប្រាក់​ចំណូល​បាន។ ចំពោះសមាជិកដែលមានប្រភពចំណូលលើសពីមួយ សូមសរសេរ​នៅក្នុងជួរដោយឡែកពីគ្នា។</u></b></p>
					<p>ប្រសិនបើគ្រួសារមិនមានចំណូលពីសកម្មភាពកសិកម្មត្រូវផ្ដល់ពិន្ទុតាមឯកសារណែនាំចំណុច 7B.2</p>
					<table class="tb_none tb_grid">
						<thead>
							<tr>
								<th>ល.រ</th>
								<th>ឈ្មោះសមាជិកគ្រូសាររកប្រាក់ចំណូល</th>
								<th>អាយុ​< 18 </th>
								<th>មុខរបររកចំណូល</th>
								<th>ឯកតា</td>
								<th>ចំនួនឯកតាក្នុងមួខែ</td>
								<th>ទឹកប្រាក់មធ្យមក្នុងមួយឯកតា</td>
								<th>ចំណូលមធ្យមប្រចាំខែ  (ចំនួន x តម្លៃឯកត្តា)</td>
							</tr>
						</thead>
						<tbody class="new_rows_income">
							<tr>
								<td><input type="text" class="form-control" id="pl-pro" name="age"></td>
								<td><input type="text" class="form-control" id="pl-pro" name="age"></td>
								<td><input type="text" class="form-control" id="pl-pro" name="age"></td>
								<td><input type="text" class="form-control" id="pl-pro" name="age"></td>
								<td><input type="text" class="form-control" id="pl-pro" name="age"></td>
								<td><input type="text" class="form-control" id="pl-pro" name="age"></td>
								<td><input type="text" class="form-control" id="pl-pro" name="age"></td>
								<td><input type="text" class="form-control" id="pl-pro" name="age"></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="5"><span style="float: right;">សរុបចំណូល ប្រចាំខែ សម្រាប់គ្រួសារទាំងមូល (គិតជារៀល):</span></td>
								<td><input type="text" class="form-control" id="pl-pro" name="age"></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="5"><span style="float: right;">ចំណូលក្រៅពីកសិកម្មជាមធ្យមប្រចាំខែសម្រាប់មនុស្សម្នាក់​​ (១) :</span></td>
								<td><input type="text" class="form-control" id="pl-pro" name="age"></td>
								<td></td>
								<td></td>
							</tr>
						</tfoot>
					</table>
					<p style="padding: 10px 15px 60px 0;">
						<input type="button" class="btn btn-primary" id="add_row_income" style="float:right;" value="បញ្ចូលបន្ថែម">	
					</p>
					<hr style="border: 1px dashed #F3EFEF;">
					<h5><b><u>គ.១៣) សុខភាព និងពិការភាព</u></b></h5>
					<table class="tb_none tb_grid" border="1">
							<tr>
								<td colspan="2"></td>
								<td>ក្មេង + អ្នក  អាយុ < 65ឆ្នាំ </td>
								<td> ចាស អាយុ≥65 ឆ្នាំ</td>
							</tr>
							<tr>
								<td colspan="2">ចំនួន​សមាជិក​គ្រួសារ ​ដែលបាត់បង់លទ្ធភាពពលកម្មស្ទើរទាំងស្រុង ដោយសារមានជម្ងឺធ្ងន់ធ្ងរ/រ៉ាំរ៉ៃ ឬពិការធ្ងន់ធ្ងរ</td>
								<td>1</td>
								<td>2</td>
							</tr>
							<tr>
								<td colspan="2">ចំនួន​សមាជិក​គ្រួសារ ​ដែលបាត់បង់លទ្ធភាពពលកម្មប្រហែល៥០ % ដោយសារមានជម្ងឺធ្ងន់ធ្ងរ/រ៉ាំរ៉ៃ ឬពិការធ្ងន់ធ្ងរ</td>
								<td>2</td>
								<td>1</td>
							</tr>
						</tbody>
					</table>
					<hr style="border: 1px dashed #F3EFEF;">
					<h5><b><u>គ.១៤) បំណុលគ្រួសារ</u></b></h5>
					<p>តើ​គ្រួសារ​របស់​អ្នក​នៅមាន​បំណុល/​កម្ចី​មិនទាន់​បាន​សង​ដែរ​ឬ​ទេ?</p>
					<p><span><input type="checkbox"> -មិនមាន​បំណុលទេ​ => បើអ្នកត្រូវការលុយប្រហែល៤០,០០០០រៀល តើអ្នកអាចខ្ចីគេបានទេ?</span>
					<span><input type="checkbox">បាន</span> 
					<span><input type="checkbox">មិនសសបាន</span> 
					</p>
					<p><span><input type="checkbox"> -មិមាន​បំណុល => ចំនួនបំណុលដែលមិនទាន់សងគិតមកដល់បច្ចុប្បន្ន</span>
					<span><input type="text">រៀល</span> 
					</p>
					<hr style="border: 1px dashed #F3EFEF;">
					<h5><b><u>គ.១៥) ព័ត៍មានផ្សេងៗបន្ថែម ឬមតិយោបល់របស់អ្នកសម្ភាសន៍ (បើមាន)</u></b></h5>
					<p><textarea class="form-control"></textarea></p>
					<div class="w_button">
						<input class="bt_blue btn_save" type="submit" value="រក្សាទុក​​ និង បញ្ចប់" id="generate" style="width:150px;" />
						<input class="bt_blue back_member" type="button" value="ត្រលប់ក្រោយ" id="excel" style="width:150px;" />
					</div>
           		</div>
        	</form> 
        	<div style="clear:both;"></div>
		</div>
    </div>
</div>

<!--***********************
Modal of general_info
**************************-->
<!--
<div class="modal fade" id="myModal_k" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding: 20px !important;">
  <div class="modal-dialog" role="document" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ព័ត៌មានទូទៅ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <table class="table table-bordered table-striped datatable1">
			<thead>
				<th>ល.រ</th>
				<th>ឈ្មោះឈ្មោះអ្នកជំងឺ</th>
				<th>ភេទ</th>
				<th>អាយុ</th>
				<th>លេខទូរស័ព្ធ</th>
				<th>ទីតាំងនៅក្នុងភូមិ</th>
				<th>កែប្រែ</th>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>aa</td>
					<td>aa</td>
					<td>aa</td>
					<td>aa</td>
					<td>aa</td>
					<td>
						<a href=""><i class="fa fa-trash" onClick="return confirm('Do you want to delete?')" style="color: black;"></i><a> <a href="" onCls><i class="fa fa-edit" style="color: black;"></i></a>
					</td>
				</tr>
			</tbody>
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ត្រលបក្រោយ</button>
		<a class="next_general"><button type="button" data-dismiss="modal" class="btn btn-primary">ចូលទៅជំហានបន្ទាប់</button></a>
      </div>
    </div>
  </div>
</div>
-->

<!--***********************
//Modal of general_info
**************************-->

<script type="text/javascript">	
	
	$(document).ready(function(){
		/*========================================================================
		===============// select province code append district //=================
		==========================================================================*/
		$("#pro").change(function () {
			var province_id = $('#pro').val();
			$.ajax({
				type: 'GET',
				url: "{{ route('getDistrict') }}",
				data: {'province_id': province_id},
				success: function (data) {
					// console.log(data);
					var obj = JSON.parse(data);

					$("#dis").empty();
					$("#dis").append('<option selected="selected">...</option>');
					$.each(obj, function (index, element) {
						$("#dis").append(new Option(element.name_kh, element.code));
					});
				},
				error: function (report){
					console.log(report);
				}
			});
		});
		
		
		/*========================================================================
		===============// select district code append commune //=================
		==========================================================================*/
		$("#dis").change(function () {
			var district_id = $('#dis').val();
			$.ajax({
				type: 'GET',
				url: "{{ route('getCommune') }}",
				data: {'district_id': district_id},
				success: function (data) {
					// console.log(data);
					var obj = JSON.parse(data);

					$("#com").empty();
					$("#com").append('<option selected="selected">...</option>');
					$.each(obj, function (index, element) {
						$("#com").append(new Option(element.name_kh, element.code));
					});
				},
				error: function (report){
					console.log(report);
				}
			});
		});
		
		
		/*========================================================================
	   ===============// select district code append commune //=================
	   ==========================================================================*/
		$("#com").change(function () {
			var commune_id = $('#com').val();
			$.ajax({
				type: 'GET',
				url: "{{ route('getVillage') }}",
				data: {'commune_id': commune_id},
				success: function (data) {
					 console.log(data);
					var obj = JSON.parse(data);

					$("#vill").empty();
					$("#vill").append('<option selected="selected">...</option>');
					$.each(obj, function (index, element) {
						$("#vill").append(new Option(element.name_kh, element.code));
					});
				},
				error: function (report){
					console.log(report);
				}
			});
		});

		
		/*========================================================================
		 ===============// select district code append Village //=================
		 ==========================================================================*/
		
		$('.t_2').hide();
		$('.t_3').hide();
		
		$('.next_general').click(function(){
			 $('.t_1').hide();
			 $('#tabs-1').hide();
			 $('.t_2').addClass('ui-state-active');
			 $('.t_2').show();
			 $('#tabs-2').show();
		});
		
		$('.back_general').click(function(){
			$('.t_2').hide();
			$('#tabs-2').hide();
			$('.t_1').addClass('ui-state-active');
			$('.t_1').show();
			$('#tabs-1').show();
		});
		$('.next_member').click(function(){
			$('.t_1').hide();
			$('#tabs-1').hide();
			$('.t_2').hide();
			$('#tabs-2').hide();
			$('.t_3').addClass('ui-state-active');
			$('.t_3').show();
			$('#tabs-3').show();
		});
		
		$('.back_member').click(function(){
			$('.t_1').hide();
			$('#tabs-1').hide();
			$('.t_3').hide();
			$('#tabs-3').hide();
			$('.t_2').addClass('ui-state-active');
			$('.t_2').show();
			$('#tabs-2').show();
		});
		
		//tab
		$(function(){
			$("#tabs").tabs();
		 });

		//កកកកកកកកក
		// $('#myModal_k').click(function(){
		//   var modal = $(this)
		//   modal.show('.modal-body');
		// });
		
		//ខខខខខខខខខ
		$m_id=2;
		$('#add_rows').click(function(){
			var tab_rows ='<tr>'+
				'<td>'+$m_id+'</td>'+
				'<td><input type="text" name="m_name" id="m_name'+$m_id+'" class="form-control"/></td>'+
				'<td><input type="text" name="m_dob" id="m_dob'+$m_id+'" class="form-control" /></td>'+
				'<td><input type="text" name="m_age" id="m_age'+$m_id+'" class="form-control"/></td>'+
				'<td><input type="text" name="m_relation" id="m_relation'+$m_id+'" class="form-control"/></td>'+
				'<td><input type="text" name="m_job" id="m_job'+$m_id+'" class="form-control"/></td>'+
				'<td><input type="text" name="m_edu" id="m_edu'+$m_id+'" class="form-control"/></td>'+
				'<td style="text-align:center;"><a status="0" class="remove_rows_kh" style="color:red; cursor: pointer;"><img src="{{asset('images/remove.png')}}"  style="width: 30px;"></a></td>'+
				//'<td><a status="0" class="remove_rows_kh" style="color:red; cursor: pointer;"><i class="fa fa-trash" aria-hidden="true" align="center"></i></a></td>'+
			'</tr>';
			$(".new_rows").append(tab_rows);
			$('#m_id'+$m_id+'').val(0);
			$m_id++;
			$('.remove_rows_kh').click(function(){
				remove_rows_kh = $(this).closest('tr');
				remove_rows_kh.fadeOut(500, function(){ remove_rows_kh.remove(); });

				var confirm_remove_rows_kh = confirm('តើអ្នកចង់លុប មែនទេ?');
				if(confirm_remove_rows_kh == true){}
				else{
					return false;
				}
			});
		});
		//គគគគគគគគគគ
		//គ.៩) ទ្រព្យ​សម្បត្តិសំភារៈប្រើប្រាស់អេឡិចត្រូនិច​របស់​គ្រួសារ
		$ids=2;
		$('#add_rows_elect').click(function(){
			var tab_rows_ele ='<tr>'+
				'<td>'+$ids+'</td>'+
				'<td class=""><input type="text" name="m_name" id="m_name'+$ids+'" class="form-control"/></td>'+
				'<td class="buil_floor"><input type="text" name="m_dob" id="m_dob'+$ids+'" class="form-control"/></td>'+
				'<td class="buil_floor"><input type="text" name="m_age" id="m_age'+$ids+'" class="form-control"/></td>'+
				'<td class="buil_floor"><input type="text" name="m_relation" id="m_relation'+$ids+'" class="form-control"/></td>'+
				'<td style="text-align:center;"><a status="0" class="remove_rows_kh" style="color:red; cursor: pointer;"><img src="{{asset('images/remove.png')}}"  style="width: 30px;"></a></td>'+
				//'<td><a status="0" class="remove_rows_kh" style="color:red; cursor: pointer;"><i class="fa fa-trash" aria-hidden="true" align="center"></i></a></td>'+
			'</tr>';
			$(".new_rows_elect").append(tab_rows_ele);
			$('#m_id'+$ids+'').val(0);
			$ids++;
			$('.remove_rows_kh').click(function(){
				remove_rows_kh = $(this).closest('tr');
				remove_rows_kh.fadeOut(500, function(){ remove_rows_kh.remove(); });

				var confirm_remove_rows_kh = confirm('តើអ្នកចង់លុប មែនទេ?');
				if(confirm_remove_rows_kh == true){}
				else{
					return false;
				}
			});
		});
		//គ.១១) យានជំនិះជាទ្រព្យសម្បត្តិផ្ទាល់របស់​គ្រួសារ
		$i=2;
		$('#add_rows_v').click(function(){
			var tab_rows ='<tr>'+
				'<td>'+$i+'</td>'+
				'<td class=""><input type="text" name="m_name" id="m_name'+$i+'" class="form-control"/></td>'+
				'<td class="buil_floor"><input type="text" name="m_dob" id="m_dob'+$i+'" class="form-control"/></td>'+
				'<td class="buil_floor"><input type="text" name="m_age" id="m_age'+$i+'" class="form-control"/></td>'+
				'<td class="buil_floor"><input type="text" name="m_relation" id="m_relation'+$i+'" class="form-control"/></td>'+
				'<td style="text-align:center;"><a status="0" class="remove_rows_kh" style="color:red; cursor: pointer;"><img src="{{asset('images/remove.png')}}"  style="width: 30px;"></a></td>'+
				//'<td><a status="0" class="remove_rows_kh" style="color:red; cursor: pointer;"><i class="fa fa-trash" aria-hidden="true" align="center"></i></a></td>'+
			'</tr>';
			$(".new_rows_v").append(tab_rows);
			$('#m_id'+$i+'').val($i);
			$i++;
			$('.remove_rows_kh').click(function(){
				remove_rows_kh = $(this).closest('tr');
				remove_rows_kh.fadeOut(500, function(){ remove_rows_kh.remove(); });

				var confirm_remove_rows_kh = confirm('តើអ្នកចង់លុប មែនទេ?');
				if(confirm_remove_rows_kh == true){}
				else{
					return false;
				}
			});
		});
		
	});
		/*==== Start ======================================*
		*==== Calculate floor in building only ===========*/
		function calculate_floor(id){
			var c_width 	= $('#cwidth'+id+'').val();
			var c_length 	= $('#clength'+id+'').val();
			var c_storey 	= $('#cstorey'+id+'').val();
			$('#cgfa'+id+'').val(c_width * c_length * c_storey);
		}
</script>
@endsection
