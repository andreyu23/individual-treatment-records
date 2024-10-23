<?php

namespace App\Http\Controllers;

use App\Models\AdultModel;
use App\Models\ChildModel;
use App\Models\DiagnosisModel;
use App\Models\FamilyModel;
use App\Models\GeneralModel;
use App\Models\LabImageModel;
use App\Models\ManageModel;
use App\Models\PersonnelModel;
use App\Models\PatientInfoModel;
use App\Models\PertinentModel;
use App\Models\PostpartumModel;
use App\Models\PrenatalModel;
use App\Models\PurposeVisitModel;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public static function patient_index(){
        $patient = PatientInfoModel::get();
        return view('pages.patients.patient-information-index')->with(['patient' => $patient]);
    }

    public static function patient_store(Request $request){

        // Validate the request
        $request->validate([
            'inp_pin' => 'required|string|max:255',
            'inp_fn' => 'required|string|max:255',
            'inp_mn' => 'required|string|max:255',
            'inp_ln' => 'required|string|max:255',
            'inp_ex' =>  'required|string|max:255',
            'inp_age' => 'required|string|max:255',
            'inp_resadd' => 'required|string|max:255',
        ]);

        // Save customer record
        PatientInfoModel::create([
            'patient_phic_pin' => $request->inp_pin,
            'patient_first_name' => $request->inp_fn,
            'patient_middle_name' => $request->inp_mn,
            'patient_last_name' => $request->inp_ln,
            'patient_extension' => $request->inp_ex,
            'patient_age' => $request->inp_age,
            'patient_resident_add' => $request->inp_resadd,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Patient added successfully!');
    }


    public static function personnel_index(){
        $personnel = PersonnelModel::get();
        return view('pages.chu-rhu-personnel.chu-rhu-personnel-index')->with(['personnel' => $personnel]);
    }

    public static function personnel_store(Request $request){

        // Validate the request
        $request->validate([
            'inp_mot' => 'required|string|max:255',
            'inp_doc' => 'required|date|max:255',
            'inp_time' => 'required|string|max:255',
            'inp_bp' => 'required|string|max:255',
            'inp_temp' =>  'required|string|max:255',
            'inp_rr' => 'required|string|max:255',
            'inp_hr' => 'required|string|max:255',
            'inp_osat' => 'required|string|max:255',
            'inp_pr' => 'required|string|max:255',
            'inp_wc' => 'required|string|max:255',
            'inp_height' => 'required|string|max:255',
            'inp_weight' => 'required|string|max:255',
            'inp_ab' => 'required|string|max:255',
            'inp_rf' => 'required|string|max:255',
            'inp_rt' => 'required|string|max:255',
            'inp_ror' => 'required|string|max:255',
            'inp_rb' => 'required|string|max:255',
            'inp_nov' => 'required|string|max:255',
            'inp_ap' => 'required|string|max:255',
        ]);

        // Save customer record
        PersonnelModel::create([
            'chu_rhu_mode_transact' => $request->inp_mot,
            'chu_rhu_date' => $request->inp_doc,
            'chu_rhu_time' => $request->inp_time,
            'chu_rhu_bp' => $request->inp_bp,
            'chu_rhu_temperature' => $request->inp_temp,
            'chu_rhu_rr' => $request->inp_rr,
            'chu_rhu_hr' => $request->inp_hr,
            'chu_rhu_o_sat' => $request->inp_osat,
            'chu_rhu_pr' => $request->inp_pr,
            'chu_rhu_waist_circumference' => $request->inp_wc,
            'chu_rhu_height' => $request->inp_height,
            'chu_rhu_weight' => $request->inp_weight,
            'chu_rhu_administered_by' => $request->inp_ab,
            'chu_rhu_referred_from' => $request->inp_rf,
            'chu_rhu_referred_to' => $request->inp_rt,
            'chu_rhu_reason_refer' => $request->inp_ror,
            'chu_rhu_referred_by' => $request->inp_rb,
            'chu_rhu_nature_visit' => $request->inp_nov,
            'chu_rhu_attending_provider' => $request->inp_ap,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Information added successfully!');
    }


    public static function visit_index(){
        $visit = PurposeVisitModel::get();
        return view('pages.purpose-visit.purpose-visit-index')->with(['visit' => $visit]);
    }

    public static function visit_store(Request $request){

        // Validate the request
        $request->validate([
            'inp_toc' => 'required|string|max:255',
            'inp_cc' => 'required|string|max:255',
            'inp_oc' => 'required|string|max:255',
        ]);

        // Save customer record
        PurposeVisitModel::create([
            'purpose_visit_type' => $request->inp_toc,
            'purpose_visit_chief_complaints' => $request->inp_cc,
            'purpose_visit_other_complaints' => $request->inp_oc,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Purpose of VIsit added successfully!');
    }

    public static function pertinent_index(){
        $pertinent = PertinentModel::get();
        return view('pages.pertinent-findings.pertinent-findings-index')->with(['pertinent' => $pertinent]);
    }

    public static function pertinent_store(Request $request){

        // Validate the request
        $request->validate([
            'inp_ho' => 'required|string|max:255',
            'inp_oho' => 'required|string|max:255',
            'inp_cl' => 'required|string|max:255',
            'inp_ocl' => 'required|string|max:255',
            'inp_hp' =>  'required|string|max:255',
            'inp_ohp' => 'required|string|max:255',
            'inp_ab' => 'required|string|max:255',
            'inp_oab' => 'required|string|max:255',
            'inp_gas' => 'required|string|max:255',
            'inp_ogas' => 'required|string|max:255',
            'inp_ss' => 'required|string|max:255',
            'inp_en' => 'required|string|max:255',
            'inp_oen' => 'required|string|max:255',
            'inp_gen' => 'required|string|max:255',
            'inp_ogen' => 'required|string|max:255',
            'inp_dre' => 'required|string|max:255',
            'inp_odre' => 'required|string|max:255',
            'inp_res' => 'required|string|max:255',
            'inp_ores' => 'required|string|max:255',
            'inp_se' => 'required|string|max:255',
            'inp_ose' => 'required|string|max:255',
            'inp_np' => 'required|string|max:255',
            'inp_onp' => 'required|string|max:255',
        ]);

        // Save customer record
        PertinentModel::create([
            'pertinent_heent' => $request->inp_ho,
            'pertinent_heent_other' => $request->inp_oho,
            'pertinent_chest' => $request->inp_cl,
            'pertinent_chest_other' => $request->inp_ocl,
            'pertinent_heart' => $request->inp_hp,
            'pertinent_heart_other' => $request->inp_ohp,
            'pertinent_abdomen' => $request->inp_ab,
            'pertinent_abdomen_other' => $request->inp_oab,
            'pertinent_gastrointestinal' => $request->inp_gas,
            'pertinent_gastrointestinal_other' => $request->inp_ogas,
            'pertinent_skeletal' => $request->inp_ss,
            'pertinent_endocrine' => $request->inp_en,
            'pertinent_endocrine_other' => $request->inp_oen,
            'pertinent_genitourinary' => $request->inp_gen,
            'pertinent_genitourinary_other' => $request->inp_ogen,
            'pertinent_recital_exam' => $request->inp_dre,
            'pertinent_recital_exam_other' => $request->inp_odre,
            'pertinent_respiratory' => $request->inp_res,
            'pertinent_respiratory_other' => $request->inp_ores,
            'pertinent_skin' => $request->inp_se,
            'pertinent_skin_other' => $request->inp_ose,
            'pertinent_neurological' => $request->inp_np,
            'pertinent_neurological_other' => $request->inp_onp,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Information added successfully!');
    }
    public static function diagnosis_index(){
        $diagnosis = DiagnosisModel::get();
        return view('pages.diagnosis.diagnosis-index')->with(['diagnosis' => $diagnosis]);
    }

    public static function diagnosis_store(Request $request){

        // Validate the request
        $request->validate([
            'inp_diagnosis' => 'required|string|max:255',
            'inp_do' => 'required|string|max:255',
        ]);

        // Save customer record
        DiagnosisModel::create([
            'diagnosis_diagnosis' => $request->inp_diagnosis,
            'diagnosis_other' => $request->inp_do,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Purpose of VIsit added successfully!');
    }

    public static function manage_index(){
        $manage = ManageModel::get();
        return view('pages.management.management-index')->with(['manage' => $manage]);
    }

    public static function manage_store(Request $request){

        // Validate the request
        $request->validate([
            'inp_manage' => 'required|string|max:255',
            'inp_mo' => 'required|string|max:255',
        ]);

        // Save customer record
        ManageModel::create([
            'management_manage' => $request->inp_manage,
            'management_other' => $request->inp_mo,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Purpose of VIsit added successfully!');
    }


    public static function family_index(){
        $family = FamilyModel::get();
        return view('pages.family-planning.family-planning-index')->with(['family' => $family]);
    }

    public static function family_store(Request $request){

        // Validate the request
        $request->validate([
            'inp_toc' => 'required|string|max:255',
            'inp_meth' => 'required|string|max:255',
            'inp_drop' => 'required|string|max:255',
            'inp_sched' => 'required|date|max:255',

        ]);

        // Save customer record
        FamilyModel::create([
            'fam_client_type' => $request->inp_toc,
            'fam_method' => $request->inp_meth,
            'fam_reason' => $request->inp_drop,
            'fam_schedule' => $request->inp_sched,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Purpose of VIsit added successfully!');
    }


    public static function lab_index(){
        $lab = LabImageModel::get();
        return view('pages.lab-imaging-exam.lab-imaging-exam-index')->with(['lab' => $lab]);
    }

    public static function lab_store(Request $request){

        // Validate the request
        $request->validate([
            'inp_rbs' => 'required|string|max:255',
            'inp_cpc' => 'required|string|max:255',
            'inp_cx' => 'required|string|max:255',
            'inp_cre' => 'required|string|max:255',
            'inp_ecg' => 'required|string|max:255',
            'inp_fbs' => 'required|string|max:255',
            'inp_fob' => 'required|string|max:255',
            'inp_fec' => 'required|string|max:255',
            'inp_hb' => 'required|string|max:255',
            'inp_lp' => 'required|string|max:255',
            'inp_og' => 'required|string|max:255',
            'inp_ps' => 'required|string|max:255',
            'inp_ppd' => 'required|string|max:255',
            'inp_sm' => 'required|string|max:255',
            'inp_uri' => 'required|string|max:255',
            'inp_other' => 'required|string|max:255',

        ]);

        // Save customer record
        LabImageModel::create([
            'lab_random_blood' => $request->inp_rbs,
            'lab_cbc_platelet' => $request->inp_cpc,
            'lab_chest_xray' => $request->inp_cx,
            'lab_creatine' => $request->inp_cre,
            'lab_elctrocardiogram' => $request->inp_ecg,
            'lab_fasting_blood' => $request->inp_fbs,
            'lab_occult_blood' => $request->inp_fob,
            'lab_fecalysis' => $request->inp_fec,
            'lab_hba' => $request->inp_hb,
            'lab_lipid_profile' => $request->inp_lp,
            'lab_oral_glucose' => $request->inp_og,
            'lab_pap_smear' => $request->inp_ps,
            'lab_ppd_test' => $request->inp_ppd,
            'lab_sputum_microscopy' => $request->inp_sm,
            'lab_urinalysis' => $request->inp_uri,
            'lab_others' => $request->inp_other,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Laboratory/Imgaging Examination added successfully!');
    }

    public static function child_index(){
        $child = ChildModel::get();
        return view('pages.child-immunization.child-immunization-index')->with(['child' => $child]);
    }

    public static function child_store(Request $request){

        // Validate the request
        $request->validate([
            'inp_bw' => 'required|string|max:255',
            'inp_immune' => 'required|string|max:255',
            'inp_oi' => 'required|string|max:255',
            'inp_date' => 'required|date|max:255',

        ]);

        // Save customer record
        ChildModel::create([
            'child_weight' => $request->inp_bw,
            'child_immunization' => $request->inp_immune,
            'child_immunization_other' => $request->inp_oi,
            'child_date' => $request->inp_date,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Child Immunization added successfully!');
    }

    public static function adult_index(){
        $adult = AdultModel::get();
        return view('pages.adult-immunization.adult-immunization-index')->with(['adult' => $adult]);
    }

    public static function adult_store(Request $request){

        // Validate the request
        $request->validate([
            'inp_immune' => 'required|string|max:255',
            'inp_oi' => 'required|string|max:255',
            'inp_date' => 'required|date|max:255',

        ]);

        // Save customer record
        AdultModel::create([
            'adult_immunization' => $request->inp_immune,
            'adult_immunization_other' => $request->inp_oi,
            'adult_date' => $request->inp_date,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Adult Immunization added successfully!');
    }


    public static function prenatal_index(){
        $prenatal = PrenatalModel::get();
        return view('pages.prenatal.prenatal-index')->with(['prenatal' => $prenatal]);
    }

    public static function prenatal_store(Request $request){

        // Validate the request
        $request->validate([
            'inp_grad' => 'required|string|max:255',
            'inp_par' => 'required|string|max:255',
            'inp_term' => 'required|string|max:255',
            'inp_pt' => 'required|string|max:255',
            'inp_lb' => 'required|string|max:255',
            'inp_abort' => 'required|string|max:255',
            'inp_sr' => 'required|string|max:255',
            'inp_pen' => 'required|string|max:255',
            'inp_sched' => 'required|date|max:255',
            'inp_fh' => 'required|string|max:255',
            'inp_lmp' => 'required|string|max:255',
            'inp_edc' => 'required|string|max:255',
            'inp_iron' => 'required|string|max:255',
            'inp_aog' => 'required|string|max:255',
            'inp_tt' => 'required|string|max:255',
            'inp_fht' => 'required|string|max:255',
            'inp_other' => 'required|string|max:255',
            'inp_pv' => 'required|string|max:255',

        ]);

        // Save customer record
        PrenatalModel::create([
            'prenatal_gradivity' => $request->inp_grad,
            'prenatal_parity' => $request->inp_par,
            'prenatal_term' => $request->inp_term,
            'prenatal_preterm' => $request->inp_pt,
            'prenatal_live_birth' => $request->inp_lb,
            'prenatal_abortion' => $request->inp_abort,
            'prenatal_syphilis_result' => $request->inp_sr,
            'prenatal_penicillin' => $request->inp_pen,
            'prenatal_schedule' => $request->inp_sched,
            'prenatal_fundic_height' => $request->inp_fh,
            'prenatal_lmp' => $request->inp_lmp,
            'prenatal_edc' => $request->inp_edc,
            'prenatal_iron' => $request->inp_iron,
            'prenatal_aog' => $request->inp_aog,
            'prenatal_tt' => $request->inp_tt,
            'prenatal_other' => $request->inp_fht,
            'prenatal_fetal_heart' => $request->inp_other,
            'prenatal_visits' => $request->inp_pv,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Prenatal added successfully!');
    }

    public static function postpartum_index(){
        $postpartum = PostpartumModel::get();
        return view('pages.postpartum.postpartum-index')->with(['postpartum' => $postpartum]);
    }
    public static function postpartum_store(Request $request){

        // Validate the request
        $request->validate([
            'inp_po' => 'required|string|max:255',
            'inp_ln' => 'required|string|max:255',
            'inp_fn' => 'required|string|max:255',
            'inp_mn' => 'required|string|max:255',
            'inp_sex' => 'required|string|max:255',
            'inp_bl' => 'required|string|max:255',
            'inp_bw' => 'required|string|max:255',
            'inp_pd' => 'required|string|max:255',
            'inp_pod' => 'required|string|max:255',
            'inp_mod' => 'required|string|max:255',
            'inp_aab' => 'required|string|max:255',
            'inp_dd' => 'required|date|max:255',
            'inp_dt' => 'required|string|max:255',
            'inp_di' => 'required|date|max:255',
            'inp_tib' => 'required|string|max:255',
            'inp_dop' => 'required|date|max:255',
            'inp_dopw' => 'required|date|max:255',
            'inp_dsm' => 'required|string|max:255',
            'inp_dsb' => 'required|string|max:255',
            'inp_dva' => 'required|date|max:255',
            'inp_dig' => 'required|date|max:255',
            'inp_noig' => 'required|string|max:255',

        ]);

        // Save customer record
        PostpartumModel::create([
            'postpartum_prenatal_outcome' => $request->inp_po,
            'postpartum_child_last_name' => $request->inp_ln,
            'postpartum_child_first_name' => $request->inp_fn,
            'postpartum_child_middle_name' => $request->inp_mn,
            'postpartum_child_sex' => $request->inp_sex,
            'postpartum_child_length' => $request->inp_bl,
            'postpartum_child_weight' => $request->inp_bw,
            'postpartum_prenatal_delivered' => $request->inp_pd,
            'postpartum_place_delivery' => $request->inp_pod,
            'postpartum_mode_delivery' => $request->inp_mod,
            'postpartum_attendant' => $request->inp_aab,
            'postpartum_delivery_date' => $request->inp_dd,
            'postpartum_delivery_time' => $request->inp_dt,
            'postpartum_date_initiatied' => $request->inp_di,
            'postpartum_time_breastfeed' => $request->inp_tib,
            'postpartum_date_after_day' => $request->inp_dop,
            'postpartum_date_after_week' => $request->inp_dopw,
            'postpartum_danger_mother' => $request->inp_dsm,
            'postpartum_danger_baby' => $request->inp_dsb,
            'postpartum_date_vitamin' => $request->inp_dva,
            'postpartum_date_iron' => $request->inp_dig,
            'postpartum_number_iron' => $request->inp_noig,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Prenatal added successfully!');
    }

    public static function general_index(){
        $general = GeneralModel::get();
        return view('pages.general-consultation.general-consultation-index')->with(['general' => $general]);
    }

    public static function general_store(Request $request){

        // Validate the request
        $request->validate([
            'inp_date' => 'required|date|max:255',
            'inp_hoi' => 'required|string|max:255',
            'inp_pe' => 'required|string|max:255',
            'inp_ai' => 'required|string|max:255',
            'inp_tmp' => 'required|string|max:255',
            'inp_sched' => 'required|date|max:255',

        ]);

        // Save customer record
        GeneralModel::create([
            'general_date' => $request->inp_date,
            'general_history' => $request->inp_hoi,
            'general_physical_exam' => $request->inp_pe,
            'general_assessment' => $request->inp_ai,
            'general_treatment' => $request->inp_tmp,
            'general_schedule' => $request->inp_sched,

        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'General Consultation added successfully!');
    }
}
