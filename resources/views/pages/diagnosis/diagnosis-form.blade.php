<x-slot name="header">{{ __('Diagnosis') }} </x-slot>
<x-slot name="subHeader">{{ __('You can submit Diagnosis details here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_diagnosis"> Diagnosis <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Diagnosis here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_diagnosis" class="form-select js-select2" data-placeholder="Select Answer" required>
                <option value="Select Answer" selected disabled> Select Answer </option>
                <option value="None">None</option>
                <option value="Allergy">Allergy<option>
                <option value="Asthma">Asthma</option>
                <option value="Stroke/Aneurysm">Stroke/Aneurysm</option>
                <option value="Mental Illness">Mental Illness</option>
                <option value="Heart Disease">Heart Disease</option>
                <option value="Renal Disease">Renal Disease</option>
                <option value="Diabetes Milletus">Diabetes Milletus</option>
                <option value="Lung Disease">Lung Disease</option>
                <option value="Epilepsy/Seizure">Epilepsy/Seizure</option>
                <option value="High Cholesterol">High Cholesterol</option>
                <option value="Peptic Ulcer">Peptic Ulcer</option>
                <option value="Pneumonia">Pneumonia</option>
                <option value="Hypertension">Hypertension</option>
                <option value="Thyroid Disease">Thyroid Disease</option>
                <option value="Tuberculosis">Tuberculosis</option>
                <option value="UTI">UTI</option>
                <option value="Others">Others</option>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_do"> If Others, please specify <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Other Diagnosis here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_do" id="inp_do" placeholder="Enter (Required) Other Diagnosis here..." required>
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
