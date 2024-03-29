<div class="row pl-2 item_checklist_pre_closing">
    <div class="col-md-12 col-lg-12 bg-info">
        <h4 class="text-white pt-2">Pre Closing Checklist </h4>
    </div>

    <div class="col-md-12 col-lg-12 pt-4">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="">
                    @error('pre_closing.deal_save_checked') <span class="error alert-danger">{{ $message }}</span> @enderror
                    <input class="" type="checkbox" name="deal_save_checked" value="" wire:model="pre_closing.deal_save_checked" wire:click="markChecklist('pre_closing','deal_save_checked')">
                    <label>Deal Save?</label>
                </div>

            </div>
        </div>
        @if($pre_closing->deal_save_checked)
            <x-checkedt-at-comment>
                <x-slot name="checked">
                    pre_closing.deal_save_checked_at
                </x-slot>

                <x-slot name="comment">
                    pre_closing.deal_save_checked_comment
                </x-slot>
            </x-checkedt-at-comment>
        @endif
    </div>


    <div class="col-md-12 col-lg-12 pt-2">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('pre_closing.welcome_payment_checked') <span class="error alert-danger">{{ $message }}</span> @enderror
                <div class="">
                    <input type="checkbox"  class="" name="" wire:model="pre_closing.welcome_payment_checked"  wire:click="markChecklist('pre_closing','welcome_payment_checked')">
                    <label>$500 Welcome Payment ?</label>

                </div>
            </div>
        </div>

            @if($pre_closing->welcome_payment_checked)
                <x-checkedt-at-comment>
                    <x-slot name="checked">
                        pre_closing.welcome_payment_checked_at
                    </x-slot>

                    <x-slot name="comment">
                        pre_closing.welcome_payment_checked_comment
                    </x-slot>
                </x-checkedt-at-comment>
            @endif
    </div>



    <div class="col-md-12 col-lg-12 pt-2">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('pre_closing.rental_verification_checked') <span class="error alert-danger">{{ $message }}</span> @enderror
                <div class="">
                    <input type="checkbox"  name="rental_verification_checked" class="" wire:model="pre_closing.rental_verification_checked" wire:click="markChecklist('pre_closing','rental_verification_checked')" />
                    <label>Rental Verification</label>

                </div>
            </div>
        </div>

            @if($pre_closing->rental_verification_checked)
                <x-checkedt-at-comment>
                    <x-slot name="checked">
                        pre_closing.rental_verification_checked_at
                    </x-slot>

                    <x-slot name="comment">
                        pre_closing.rental_verification_checked_comment
                    </x-slot>
                </x-checkedt-at-comment>
            @endif

    </div>

@include('livewire.client.item-checklist.pre-closing.letter_of_commitment')

    <div class="col-md-12 col-lg-12 pt-2">

            <div class="row">
                <div class="col-md-6 col-lg-6">
                @error('pre_closing.on_boarding_fee_payment_checked') <span class="error alert-danger">{{ $message }}</span> @enderror
                <div class="">
                    <input  class="" type="checkbox" name="rent" wire:model="pre_closing.on_boarding_fee_payment_checked" wire:click="markChecklist('pre_closing','on_boarding_fee_payment_checked')" />
                    <label>On Board Fee Payment</label>
                </div>
            </div>
        </div>


        @if(isset($pre_closing->on_boarding_fee_payment_checked) && $pre_closing->on_boarding_fee_payment_checked)

                <x-checkedt-at-comment>
                    <x-slot name="checked">
                        pre_closing.on_boarding_fee_payment_checked_at
                    </x-slot>

                    <x-slot name="comment">
                        pre_closing.on_boarding_fee_payment_checked_comment
                    </x-slot>
                </x-checkedt-at-comment>
        @endif
    </div>








    <div class="col-md-12 col-lg-12 no-gutters mb-2">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('pre_closing.inspection_checked') <span class="error alert-danger">{{ $message }}</span> @enderror

                <div>
                    <input  class="" type="checkbox" name="item_checklist_inspection_checkbox" onclick="hideShow(this.checked,'.item_checklist_option_list_inspection_date_div')" wire:model="pre_closing.inspection_checked" wire:click="markChecklist('pre_closing','inspection_checked')" >
                    <label>Inspection?</label>
                </div>
            </div>
        </div>


            @if(isset($pre_closing->inspection_checked) && $pre_closing->inspection_checked)
                <x-checkedt-at-comment>
                    <x-slot name="checked">
                        pre_closing.inspection_checked_at
                    </x-slot>

                    <x-slot name="comment">
                        pre_closing.inspection_checked_comment
                    </x-slot>
                </x-checkedt-at-comment>

            @endif

        {{--<div class="row">--}}
        {{--@error('pre_closing.inspection_check_date') <span class="error alert-danger">{{ $message }}</span> @enderror--}}
        {{--<div class="col-md-6 col-lg-6 item_checklist_option_list_inspection_date_div {{$client->inspection_check ?'':'d-none'}}" wire:ignore>--}}
        {{--<label>Date</label>--}}
        {{--<input  class="form-control" type="date" name="item_checklist_option_list_inspection_date" value="" wire:model="pre_closing.inspection_check_date">--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>

    <div class="col-md-12 col-lg-12">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('pre_closing.termite_checked') <span class="error alert-danger">{{ $message }}</span> @enderror
                <div>
                    <input  class="" type="checkbox" name="item_checklist_termite_checkbox" value="" wire:model="pre_closing.termite_checked"  wire:click="markChecklist('pre_closing','termite_checked')">
                    <label>Termite ?</label>
                </div>
            </div>
        </div>


            @if($pre_closing->termite_checked)
                <x-checkedt-at-comment>
                    <x-slot name="checked">
                        pre_closing.termite_checked_at
                    </x-slot>

                    <x-slot name="comment">
                        pre_closing.termite_checked_comment
                    </x-slot>
                </x-checkedt-at-comment>

            @endif
        {{--@if(!$client->termite_checked)--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 col-lg-6 item_checklist_termite_paid_by_div">--}}
                    {{--<div class="">--}}
                        {{--<label>Paid BY</label>--}}
                        {{--<select class="form-control" name="item_checklist_termite_paid_by" id="item_checklist_termite_paid_by" wire:model="pre_closing.termite_paid_by">--}}
                            {{--<option value="0">Seller</option>--}}
                            {{--<option value="1">Dream</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endif--}}
    </div>


    <div class="col-md-12 col-lg-12 mt-2">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('pre_closing.appraisal_value_checked') <span class="error alert-danger">{{ $message }}</span> @enderror
                <div>
                    <input  class="" type="checkbox" name="item_checklist_appraisal_value_checkbox" value=""  wire:model="pre_closing.appraisal_value_checked" wire:click="markChecklist('pre_closing','appraisal_value_checked')">
                    <label>Appraisal Value?</label>
                </div>
            </div>
        </div>
        @if($pre_closing->appraisal_value_checked)

            {{--<div class="row">--}}
                @if($pre_closing->appraisal_value_checked)
                    <x-checkedt-at-comment>
                        <x-slot name="checked">
                            pre_closing.appraisal_value_checked_at
                        </x-slot>

                        <x-slot name="comment">
                            pre_closing.appraisal_value_checked_comment
                        </x-slot>
                    </x-checkedt-at-comment>
                @endif
            {{--</div>--}}

            <div class="row">
                <div class=" col-md-6 col-lg-6 item_checklist_appraisal_value_div">
                    @error('pre_closing.appraisal_value') <span class="error alert-danger">{{ $message }}</span> @enderror
                    <div class="">
                        <label>Value</label>
                        <input  class="form-control" type="number" name="item_checklist_appraisal_value" value="" wire:model="pre_closing.appraisal_value">
                    </div>
                </div>
            </div>
        @endif
    </div>
    @if(isset($client->co_applicant_email) && !empty($client->co_applicant_email))



    <div class="col-md-12 col-lg-12">
        <div class="row">

            <div class="col-md-6 col-lg-6">
                @error('pre_closing.driver_license_applicant_checked') <span class="error alert-danger">{{ $message }}</span> @enderror

                <div>
                    <input class="" type="checkbox" name="item_checklist_driver_license_applicant" value="" wire:model="pre_closing.driver_license_applicant_checked" wire:click="markChecklist('pre_closing','driver_license_applicant_checked')">
                    <label>Driver license applicant</label>
                </div>

            </div>

        </div>

        @if($pre_closing->driver_license_applicant_checked)
            <x-checkedt-at-comment>
                <x-slot name="checked">
                    pre_closing.driver_license_applicant_checked_at
                </x-slot>

                <x-slot name="comment">
                    pre_closing.driver_license_applicant_checked_comment
                </x-slot>
            </x-checkedt-at-comment>
        @endif
    </div>
    <div class="col-md-12 col-lg-12">

        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('pre_closing.driver_license_co_applicant_checked') <span class="error alert-danger">{{ $message }}</span> @enderror
                <div>
                    <input  class="" type="checkbox" name="item_checklist_co_driver_license_applicant" value="" wire:model="pre_closing.driver_license_co_applicant_checked" wire:click="markChecklist('pre_closing','driver_license_co_applicant_checked')">
                    <label>Co Driver license applicant</label>
                </div>
            </div>
        </div>
        @if($pre_closing->driver_license_co_applicant_checked)
            <x-checkedt-at-comment>
                <x-slot name="checked">
                    pre_closing.driver_license_co_applicant_checked_at
                </x-slot>

                <x-slot name="comment">
                    pre_closing.driver_license_co_applicant_checked_comment
                </x-slot>
            </x-checkedt-at-comment>
        @endif
    </div>



    <div class="col-md-12 col-lg-12">
        <div class="row">

            <div class="col-md-6 col-lg-6">
                @error('pre_closing.soc_sec_card_applicant_checked') <span class="error alert-danger">{{ $message }}</span> @enderror
                <div>
                    <input class="" type="checkbox" name="item_checklist_soc_sec_card_applicant" value="" wire:model="pre_closing.soc_sec_card_applicant_checked" wire:click="markChecklist('pre_closing','soc_sec_card_applicant_checked')">
                    <label>Soc Sec card Applicant</label>
                </div>

            </div>
        </div>
        @if($pre_closing->soc_sec_card_applicant_checked)
            <x-checkedt-at-comment>
                <x-slot name="checked">
                    pre_closing.soc_sec_card_applicant_checked_at
                </x-slot>

                <x-slot name="comment">
                    pre_closing.soc_sec_card_applicant_checked_comment
                </x-slot>
            </x-checkedt-at-comment>
        @endif
    </div>
    <div class="col-md-12 col-lg-12">
        <div class="row">

            <div class="col-md-6 col-lg-6">
                @error('pre_closing.soc_sec_card_co_applicant_checked') <span class="error alert-danger">{{ $message }}</span> @enderror

                <div class="">
                    <input  class="" type="checkbox" name="item_checklist_soc_sec_card_co_applicant" value="" wire:model="pre_closing.soc_sec_card_co_applicant_checked" wire:click="markChecklist('pre_closing','soc_sec_card_co_applicant_checked')">
                    <label>Soc Sec card Co Applicant</label>
                </div>
            </div>
        </div>
        @if($pre_closing->soc_sec_card_co_applicant_checked)
            <x-checkedt-at-comment>
                <x-slot name="checked">
                    pre_closing.soc_sec_card_co_applicant_checked_at
                </x-slot>

                <x-slot name="comment">
                    pre_closing.soc_sec_card_co_applicant_checked_comment
                </x-slot>
            </x-checkedt-at-comment>
        @endif
    </div>


    @endif

    <div class="col-md-12 col-lg-12">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('pre_closing.renter_insurance_checked') <span class="error alert-danger">{{ $message }}</span> @enderror

                <div>
                    <input  class="" type="checkbox" name="item_checklist_renters_insurance_checkbox" value=""  wire:model="pre_closing.renter_insurance_checked"  wire:click="markChecklist('pre_closing','renter_insurance_checked')">
                    <label>Renters insurance?</label>
                </div>

            </div>

        </div>
        @if($pre_closing->renter_insurance_checked)
            <div class="row">
                <div class="col-md-6 col-lg-6 item_checklist_renters_insurance_div">
                    <label>Company</label>
                    <input  class="form-control" type="text" name="item_checklist_renters_insurance_company" value="" wire:model="pre_closing.renter_insurance_name">
                </div>
            </div>

            <x-checkedt-at-comment>
                <x-slot name="checked">
                    pre_closing.renter_insurance_checked_at
                </x-slot>

                <x-slot name="comment">
                    pre_closing.renter_insurance_checked_comment
                </x-slot>
            </x-checkedt-at-comment>

        @endif

    </div>
    <div class="col-md-12 col-lg-12">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('pre_closing.flood_certificate_checked') <span class="error alert-danger">{{ $message }}</span> @enderror
                <div>

                    <input  class="" type="checkbox" name="item_checklist_renters_insurance" value="" wire:model="pre_closing.flood_certificate_checked" wire:click="markChecklist('pre_closing','flood_certificate_checked')">
                    <label>Flood Certificate</label>
                </div>
            </div>
        </div>

        @if($pre_closing->flood_certificate_checked)
            <x-checkedt-at-comment>
                <x-slot name="checked">
                    pre_closing.flood_certificate_checked_at
                </x-slot>

                <x-slot name="comment">
                    pre_closing.flood_certificate_checked_comment
                </x-slot>
            </x-checkedt-at-comment>
        @endif
    </div>

    <div class="col-md-12 col-lg-12">
        <div class="row">

            <div class="col-md-6 col-lg-6">
                @error('pre_closing.landlord_insurance_checked') <span class="error alert-danger">{{ $message }}</span> @enderror

                <div>
                    <input  class="" type="checkbox" name="item_checklist_renters_insurance" value="" wire:model="pre_closing.landlord_insurance_checked" wire:click="markChecklist('pre_closing','landlord_insurance_checked')">
                    <label>Landlord Insurance</label>
                </div>

            </div>
        </div>
        @if($pre_closing->landlord_insurance_checked)
            <x-checkedt-at-comment>
                <x-slot name="checked">
                    pre_closing.landlord_insurance_checked_at
                </x-slot>

                <x-slot name="comment">
                    pre_closing.landlord_insurance_checked_comment
                </x-slot>
            </x-checkedt-at-comment>
        @endif
    </div>
    <div class="col-md-12 col-lg-12">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('pre_closing.warranty_checked') <span class="error alert-danger">{{ $message }}</span> @enderror
                <div>
                    <input  class="" type="checkbox" name="item_checklist_warranty_checkbox" value="" wire:model="pre_closing.warranty_checked" wire:click="markChecklist('pre_closing','warranty_checked')">
                    <label>Warranty?</label>
                </div>

            </div>
        </div>
        @if($pre_closing->warranty_checked)
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <input  class="form-control" type="text" name="item_checklist_warranty_company" value="" wire:model="pre_closing.warranty_company_name">
                    <label>Company Name</label>
                </div>
            </div>

            <x-checkedt-at-comment>
                <x-slot name="checked">
                    pre_closing.warranty_checked_at
                </x-slot>

                <x-slot name="comment">
                    pre_closing.warranty_checked_comment
                </x-slot>
            </x-checkedt-at-comment>

        @endif

    </div>
    <div class="col-md-12 col-lg-12">
        {{--<div class="col-md-12 col-lg-12 item_checklist_warranty_div d-none">--}}
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <label>Warranty paid by seller</label>
                <select class="form-control" name="item_checklist_warranty_paid_by_seller" id="item_checklist_warranty_paid_by_seller" wire:model="pre_closing.warranty_paid_by_seller_checked">
                    @foreach(YesNoDropDown::getList() as $key => $val)
                        <option value="{{$key}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('pre_closing.lease_signed_checked') <span class="error alert-danger">{{ $message }}</span> @enderror

                <div>
                    <input  class="" type="checkbox" name="item_checklist_lease_checkbox" value="" wire:model="pre_closing.lease_signed_checked" wire:click="markChecklist('pre_closing','lease_signed_checked')">
                    <label>Lease Signed?</label>
                </div>

            </div>
        </div>
        @if($pre_closing->lease_signed_checked)
            <div class="row item_checklist_lease_div">
                <div class="col-md-6 col-lg-6 ">
                    <input  class="form-control" type="date" name="item_checklist_lease_expire" value="" wire:model="pre_closing.lease_expire_date">
                    <label>Lease Expire</label>
                </div>
            </div>

            <x-checkedt-at-comment>
                <x-slot name="checked">
                    pre_closing.lease_signed_checked_at
                </x-slot>

                <x-slot name="comment">
                    pre_closing.lease_signed_checked_comment
                </x-slot>
            </x-checkedt-at-comment>

        @endif
    </div>



    <div class="col-md-12 col-lg-12">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <label>Septic inspection</label>
                <select class="form-control" name="item_checklist_septic_inspection" id="item_checklist_septic_inspection" wire:model="pre_closing.septic_inspection_checked">
                    @foreach(YesNoDropDown::getList() as $key => $val)
                        <option value="{{$key}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    {{--<div class="col-md-12 col-lg-12">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-6 col-md-6">--}}
                {{--<label>Clear Now Rent/Payment Enrollment</label>--}}
                {{--<select class="form-control" name="item_checklist_septic_inspection" id="item_checklist_septic_inspection" wire:model="pre_closing.clear_now_rent_payment_enrollment_check">--}}
                    {{--@foreach(YesNoDropDown::getList() as $key => $val)--}}
                        {{--<option value="{{$key}}">{{$val}}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-12 col-lg-12">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-6 col-lg-6">--}}
                {{--<label>Prorated Rent ?</label>--}}
                {{--<input  class="" type="checkbox" name="item_checklist_prorated_rent_checkbox" value="" wire:model="pre_closing.prorated_rent_check">--}}
            {{--</div>--}}

        {{--</div>--}}
        {{--@if(!$client->prorated_rent_check)--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 col-lg-6 item_checklist_prorated_rent_div ">--}}
                    {{--<div class="">--}}
                        {{--<label>Rent</label>--}}
                        {{--<input  class="form-control" type="number" name="item_checklist_prorated_rent" value="" wire:model="pre_closing.prorated_rent">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endif--}}
    {{--</div>--}}


    <div class="col-md-12 col-lg-12">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <input  class="" type="checkbox" name="item_checklist_other_checkbox" value="" wire:model="pre_closing.other_checked" wire:click="markChecklist('pre_closing','other_checked')">
                <label>Other?</label>
            </div>
        </div>
        @if($pre_closing->other_checked)
            <div class="row">


                <div class="col-md-6 col-lg-6 item_checklist_other_input_div">
                    {{--@error('pre_closing.other_value') <span class="error alert-danger">{{ $message }}</span> @enderror--}}
                    <div class="">
                        <label>Other</label>
                        <input  class="form-control" type="text" name="item_checklist_other" value="" wire:model="pre_closing.other_value">
                    </div>
                </div>
            </div>
            {{--<x-checkedt-at-comment>--}}
                {{--<x-slot name="checked">--}}
                    {{--pre_closing.other_checked_at--}}
                {{--</x-slot>--}}

                {{--<x-slot name="comment">--}}
                    {{--pre_closing.other_checked--}}
                {{--</x-slot>--}}
            {{--</x-checkedt-at-comment>--}}

        @endif
    </div>
</div>

@push('scripts')
    {{--<script type="text/javascript">--}}

        {{--$(document).ready(function() {--}}
            {{--$('#payment_options').select2({--}}
                {{--placeholder: '{{__('Select your option')}}',--}}
                {{--allowClear: true--}}
            {{--});--}}
            {{--triggerPaymentOptions();--}}
        {{--});--}}

        {{--// $('#payment_options').on('change',function () {--}}
        {{--// @this.payment_option($(this).val());--}}
        {{--// })--}}

    {{--</script>--}}


    {{--<script type="text/javascript">--}}

        {{--function hideShow(val,div) {--}}
            {{--if(val == true)--}}
                {{--$(div).removeClass('d-none');--}}
            {{--if(val == 1)--}}
                {{--$(div).removeClass('d-none');--}}
            {{--else--}}
                {{--$(div).addClass('d-none');--}}
        {{--}--}}
        {{--//--}}
        {{--function selectChange(_this) {--}}
            {{--// alert(_this)--}}
            {{--var val = $(_this).val();--}}
            {{--console.log(val);--}}
           {{--@this.payment_option(val);--}}

        {{--}--}}

        {{--function triggerPaymentOptions() {--}}
            {{--var values = [];--}}
            {{--$('.option_list_value_div').each(function (j,i) {--}}
                {{--values.push($(i).attr('id'));--}}
            {{--});--}}
            {{--$('#payment_options').val(values).trigger('change');--}}
            {{--// $('#due_diligence_option').val()--}}
        {{--}--}}
    {{--</script>--}}

@endpush