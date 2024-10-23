<x-slot name="header">{{ __('Child Immunization') }} </x-slot>
<x-slot name="subHeader">{{ __('You can submit Child Immunization details here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_immune"> Immunization <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Immunization here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_immune" class="form-select js-select2" data-placeholder="Select Answer" required>
                <option value="Select Answer" selected disabled> Select Answer </option>
                <option value="Pneumococcal">Pneumococcal </option>
                <option value="Flu">Flu <option>
                <option value="Others">Others</option>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_oi"> Other Immunization<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Other Immunization here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_oi" id="inp_oi" placeholder="Enter (Required) Other Immunization here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_date"> Date<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Date here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" name="inp_date" id="inp_date" placeholder="Enter (Required) Date here..." required>
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


