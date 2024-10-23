<x-slot name="header">{{ __('Type of Consultation/Purpose of VIsit') }} </x-slot>
<x-slot name="subHeader">{{ __('You can submit Type of Consultation/Purpose of Visit details here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_toc"> Type of Consultation/Purpose of Visit <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Type of Consultation/Purpose of Visit here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_toc" class="form-select js-select2" data-placeholder="Select Answer" required>
                <option value="Select Answer" selected disabled> Select Answer </option>
                <option value="General"> General </option>
                <option value="Prenatal"> Prenatal<option>
                <option value="Child Care"> Child Care</option>
                <option value="Child Nutrition"> Child Nutrition</option>
                <option value="Injury"> Injury</option>
                <option value="Adult Immunization"> Adult Immunization</option>
                <option value="Family Planning"> Family Planning</option>
                <option value="Postpartum"> Postpartum</option>
                <option value="Tuberculosis"> Tuberculosis</option>
                <option value="Child Immunization"> Child Immunization</option>
                <option value="Sick Child"> Sick Child</option>
                <option value="Firecracker Injury"> Firecracker Injury</option>
                <option value="Animal Bite"> Animal Bite</option>
                <option value="Covid"> Covid</option>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_cc"> Chief Complaints <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Chief of Complaints here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_cc" class="form-select js-select2" data-placeholder="Select Answer" required>
                <option value="Select Answer" selected disabled> Select Answer </option>
                <option value="Abdominal Cramp/Pain">Abdominal Cramp/Pain</option>
                <option value="Altered Mental Sensorium">Altered Mental Sensorium<option>
                <option value="Anorexia">Anorexia</option>
                <option value="Bleeding Gums">Bleeding Gums</option>
                <option value="Blurring of Vision">Blurring of Vision</option>
                <option value="Body Weakness">Body Weakness</option>
                <option value="Chest Pain/Discomfort">Chest Pain/Discomfort</option>
                <option value="Constipation">Constipation</option>
                <option value="Cough">Cough</option>
                <option value="Wound">Wound</option>
                <option value="Diarrhea">Diarrhea</option>
                <option value="Dizziness">Dizziness</option>
                <option value="Dysphagia">Dysphagia</option>
                <option value="Dyspnea">Dyspnea</option>
                <option value="Dysuria">Dysuria</option>
                <option value="Epistaxis">Epistaxis</option>
                <option value="Fever">Fever</option>
                <option value="Frequency of Urination">Frequency of Urination</option>
                <option value="Headache">Headache</option>
                <option value="Hematemesis">Hematemesis</option>
                <option value="Hematuria">Hematuria</option>
                <option value="Hemoptysis">Hemoptysis</option>
                <option value="Irritability">Irritability</option>
                <option value="Jaundice">Jaundice</option>
                <option value="Lower Extremity Edema">Lower Extremity Edema</option>
                <option value="Myalgia">Myalgia</option>
                <option value="Orthopnea">Orthopnea</option>
                <option value="Pain">Pain</option>
                <option value="Palpitation">Palpitation</option>
                <option value="Seizures">Seizures</option>
                <option value="Skin Rashes">Skin Rashes</option>
                <option value="Stool, Bloody/Black Tarry/Mucold"> Stool, Bloody/Black Tarry/Mucold</option>
                <option value="Swelling">Swelling</option>
                <option value="Urgency">Urgency</option>
                <option value="Vomiting/Nausea">Vomiting/Nausea</option>
                <option value="Weight Loss">Weight Loss</option>
                <option value="Others">Others</option>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_oc"> If Others, please specify <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Other Complaints here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_oc" id="inp_oc" placeholder="Enter (Required) Other Complaints here..." required>
        </div>
    </div>
</div>


<div class="col-lg-5">
</div>
<div class="col-lg-7 justify-end" style="float: right">
<hr>
<div class="form-group mt-2 mb-2 justify-end">
    <button type="reset" class="btn btn-danger bg-dark mx-3">
        <em class="icon ni ni-repeat"></em>
         Reset
    </button>
    <button  type="submit" class="btn btn-success">
        <em class="icon ni ni-save"></em>
         Submit Form
    </button>
</div>
</div>
