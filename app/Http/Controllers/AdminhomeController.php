<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\AdminModel;
use Carbon\Carbon;
use App\Helpers\Helpers;
use DB;

class AdminhomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
		$general = DB::connection("mysql")->select("select *from urc_018system3_general_info where status=1");
		$provinces     = Helpers::getProvince();
		return view('admin.dashboard',compact('general','provinces'));
    }
	
	
	public function getDistrict(request $request){
        $pro_code = $request->province_id;
        $query = Helpers::getDistrict($pro_code);
        echo json_encode($query);
    }
	
	
	
	public function getCommune(request $request){
        $district_code = $request->district_id;
        $query = Helpers::getCommune($district_code);
        echo json_encode($query);
    }
	
	
	 public function getVillage(request $request){
        $commune_code = $request->commune_id;
        $query = Helpers::getVillage($commune_code);
        echo json_encode($query);
    }

	public function delete(Request $request, $id){
		$pro = AdminModel::find($id);
		$pro->status = "0";
		$pro->save();
		return redirect()->route('view');
	}
	public function add_general(request $request){
		$data = array(
			'interview_code'=>$request->code,
			'patient_name'	=>$request->p_name,
			'age'			=>$request->ages,
			'gender'		=>$request->sex,
			'phone'			=>$request->phone,
			'pro_code'		=>$request->province,
			'dcode'			=>$request->dis,
			'ccode'			=>$request->commune,
			'vcode'			=>$request->village,
			'village_area'	=>$request->v_area,
			'status'		=>"1",
		);
		$general_info_id = AdminModel::create($data);
		//echo $general_info_id->id;exit();

		//$ff=DB::connection("mysql")->table('urc_018system3_general_info')->insert($data);
        

		
		$data_general = array(
			'patient_id'=>$general_info_id->id,
			'k2_name'	=>$request->g2_name,
			'age'		=>$request->g2_age,
			'gender'	=>$request->g2_sex,
			'phone'		=>$request->g2_phone,
			'relation'	=>$request->g2_relation,
			'status'	=>"1",
		);
		DB::connection("mysql")->table('urc_018system3_general_k2')->insert($data_general);
		$data_general2 	= array(
			'patient_id'=>$general_info_id->id,
			'k3_name'	=>$request->g3_name,
			'age'		=>$request->g3_age,
			'gender'	=>$request->g3_sex,
			'phone'		=>$request->g3_phone,
			'relation'	=>$request->g3_relation,
			'status'	=>"1",
        );
		DB::connection("mysql")->table('urc_018system3_general_k3')->insert($data_general2);

		$data_member[] = array(
			'patient_id'=>$general_info_id->id,
			'mem_name'	=>$request->m_name,
			'dob'		=>$request->m_dob,
			'age'		=>$request->m_age,
			'relation'	=>$request->m_relation,
			'job'		=>$request->m_job,
			'edu'		=>$request->m_edu,
			'status'	=>"1",
        );
		DB::connection("mysql")->table('urc_018system3_member_info')->insert($data_member);
		//
		$house_family = array(
			'patient_id'		=>$general_info_id->id,
			'owner_house'		=>$request->own_house,
			'rent_house'		=>$request->rent_house,
			'no_house'			=>$request->no_house,
			'stay_with_other'	=>$request->other_house,
			'name_institution'	=>$request->name_in,
			'phone_institution'	=>$request->phone_in,
			'monthly_rent_house'=>$request->monthly_rent,
			'total_member'		=>$request->total_member,
			'status'	=>"1",
        );
		DB::connection("mysql")->table('urc_018system3_family_house')->insert($house_family);
		//
		$u_data = array(
			'patient_id'	=>$general_info_id->id,
			'width'			=>$request->u_width,
			'lenght'		=>$request->u_lenght,
			'area'			=>$request->u_area_total,
			'status'	=>"1",
        );
		DB::connection("mysql")->table('urc_018system3_house_upinfo')->insert($u_data);
		// m
		$m_data = array(
			'patient_id'	=>$general_info_id->id,
			'width'			=>$request->m_width,
			'lenght'		=>$request->m_lenght,
			'area'			=>$request->m_area_total,
			'area_total'	=>$request->net_total,
			'status'	=>"1",
        );
		DB::connection("mysql")->table('urc_018system3_house_moreinfo')->insert($m_data);
		// 
		$d_data = array(
			'patient_id'	=>$general_info_id->id,
			'width'			=>$request->d_width,
			'lenght'		=>$request->d_lenght,
			'area'			=>$request->d_area_total,
			'status'		=>"1",
        );
		DB::connection("mysql")->table('urc_018system3_house_downinfo')->insert($d_data);
		//toilet
		$toilet = array(
			'patient_id'	=>$general_info_id->id,
			'toilet'		=>$request->toilet,
			'water_toilet'	=>$request->water_t,
			'dry_toilet'	=>$request->dry_t,
			'owner_toilet'	=>$request->owner_t,
			'public_toilet'	=>$request->public_t,
			'build_in'		=>$request->build_in,
			'prepare_status'=>$request->prepare,
			'prepare_in'	=>$request->prepare_in,
			'status'		=>"1",
        );
		DB::connection("mysql")->table('urc_018system3_toilet')->insert($toilet);
		//wall&&roof
		$wf_data = array(
			'patient_id'	=>$general_info_id->id,
			'about_wall'	=>$request->about_wall,
			'wall_status'	=>$request->wall_status,
			'about_roof'	=>$request->about_roof,
			'roof_status'	=>$request->roof_status,
			'home_status'	=>$request->home_status,
			'status'		=>"1",
        );
		DB::connection("mysql")->table('urc_018system3_house_materiel')->insert($wf_data);

		//elect_tronic_asset
		$ele_asset = array(
			'patient_id'	=>$general_info_id->id,
			'type_matereil'	=>$request->type_asset,
			'qty'			=>$request->qty_asset,
			'price'			=>$request->price_asset,
			'total'			=>$request->total_asset,
			'status'		=>"1",
        );
		DB::connection("mysql")->table('urc_018system3_assets_electronic')->insert($ele_asset);
		//electronic
		$electronic = array(
			'patient_id'		=>$general_info_id->id,
			'connect_status'	=>$request->connect,
			'price_in_kwh'		=>$request->price_in_kwh,
			'kwh_per_month'		=>$request->kwh_per_month,
			'avg_pay_per_month'	=>$request->pay_per_month,
			'machine'			=>$request->machine,
			'battery'			=>$request->battery,
			'sola_energy'		=>$request->sola,
			'lamp'				=>$request->lamp,
			'status'			=>"1",
        );
		DB::connection("mysql")->table('urc_018system3_electronic')->insert($electronic);
		
		$v_asset = array(
			'patient_id'	=>$general_info_id->id,
			'type_vehicle'	=>$request->type_v_asset,
			'qty'			=>$request->qty_v_asset,
			'price'			=>$request->price_v_asset,
			'total'			=>$request->total_v_asset,
			'status'		=>"1",
        );
		DB::connection("mysql")->table('urc_018system3_vehicle_assets')->insert($v_asset);
		
		$v_asset = array(
			'patient_id'	=>$general_info_id->id,
			'type_vehicle'	=>$request->type_v_asset,
			'qty'			=>$request->qty_v_asset,
			'price'			=>$request->price_v_asset,
			'total'			=>$request->total_v_asset,
			'status'		=>"1",
        );
		DB::connection("mysql")->table('urc_018system3_vehicle_assets')->insert($v_asset);
		return redirect()->route('view');

	}
}
 