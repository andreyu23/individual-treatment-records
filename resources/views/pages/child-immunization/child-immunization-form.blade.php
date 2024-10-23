<x-slot name="header">{{ __('Child Immunization') }} </x-slot>
<x-slot name="subHeader">{{ __('You can submit Child Immunization details here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_bw"> Birth Weight<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Birth Weight here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_bw" id="inp_bw" placeholder="Enter (Required) Birth Weight here..." required>
        </div>
    </div>
</div>

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
                <option value="Hepa B w/n 24hrs">Hepa B w/n 24hrs </option>
                <option value="Hepa B z 24hrs">Hepa B z 24hrs <option>
                <option value="PENTA 1">PENTA 1</option>
                <option value="PENTA 2">PENTA 2</option>
                <option value="PENTA 3">PENTA 3</option>
                <option value="OPV 1">OPV 1</option>
                <option value="OPV 2">OPV 2</option>
                <option value="OPV 3">OPV 3</option>
                <option value="MCV 1 (AMV)">MCV 1 (AMV)</option>
                <option value="MCV 2 (AMV)">MCV 2 (AMV)</option>
                <option value="ROTA 1">ROTA 1</option>
                <option value="ROTA 2">ROTA 2</option>
                <option value="PCV 1">PCV 1</option>
                <option value="PCV 2">PCV 2</option>
                <option value="PCV 3">PCV 3</option>
                <option value="HEPA B2">HEPA B2</option>
                <option value="HEPA B3">HEPA B3</option>
                <option value="HEPA A">HEPA A</option>
                <option value="Pneumonia">Pneumonia</option>
                <option value="Influenza">Influenza</option>
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


