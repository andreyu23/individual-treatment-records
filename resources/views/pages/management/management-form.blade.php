<x-slot name="header">{{ __('Management') }} </x-slot>
<x-slot name="subHeader">{{ __('You can submit Management details here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_manage"> Management <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Management here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_manage" class="form-select js-select2" data-placeholder="Select Answer" required>
                <option value="Select Answer" selected disabled> Select Answer </option>
                <option value="Breastfeeding Program Education">Breastfeeding Program Education</option>
                <option value="Counselling for Smoking Cessation">Counselling for Smoking Cessation<option>
                <option value="Counselling for Lifestyle Modification">Counselling for Lifestyle Modification</option>
                <option value="Oral Check-up and Prophylaxis">Oral Check-up and Prophylaxis</option>
                <option value="Others">Others</option>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_mo"> If Others, please specify <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Other Management here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_mo" id="inp_mo" placeholder="Enter (Required) Other Management here..." required>
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
