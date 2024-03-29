<div class="row pl-2 item_checklist_property_info_div">
    <div class="col-md-12 col-lg-12 bg-info mb-3">
        <h4 class="text-white pt-2">Property Information</h4>

    </div>

    <div class="col-md-12 col-lg-12">
        <div class="row" >


            <div class="col-md-6 col-lg-6">
                {{--@error('deal.data.additional_tenant_name') <span class="error">{{ $message }}</span> @enderror--}}
                <label>Additional Tenants ?</label>
                <select class="form-control" name="deal_additional_tenants" id="deal_additional_tenants"  wire:model="property.additional_tenant_check" value="{{$property->additional_tenant_check}}"  onclick="hideShow(this.value,'.deal_additional_tenant_div')" wire:ignore>
                    @foreach(YesNoDropDown::getList() as $key => $val)
                        <option value="{{$key}}" {{$key == $client->additional_tenant_check ? 'selected':''}}>{{$val}}</option>
                    @endforeach

                </select>
            </div>

            <div class="col-md-6 col-lg-6 deal_additional_tenant_div {{$property->additional_tenant_check ? '':'d-none'}}" wire:ignore >
                @error('property.additional_tenant_name') <span class="error alert-danger">{{ $message }}</span> @enderror
                <div class="">
                    <label>Name</label>
                    <input class="form-control" type="text" name="client_additional_tenant_name" value="{{$property->additional_tenant_name}}" wire:model="property.additional_tenant_name">
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-lg-12">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('property.mortgage_type_id') <span class="error alert-danger">{{ $message }}</span> @enderror
                <div class="">
                    <label>Mortgage Type ?</label>
                    <select class="form-control" name="deal_mortgage_type" wire:model="property.mortgage_type_id" wire:ignore>
                        <option value="0">Select</option>
                        @foreach(MortgageTypeDropdown::getList() as $key => $val)
                            <option value="{{$key}}" >{{$val}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>

    </div>
    {{--<div class="col-md-12 col-lg-12 pt-4">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-6 col-lg-6">--}}
                {{--@error('property.is_deal_save_checked') <span class="error alert-danger">{{ $message }}</span> @enderror--}}
                {{--<div class="">--}}
                    {{--<span><input class="" type="checkbox" name="property_country" value="" wire:model="property.deal_save_checked" wire:click="markChecklist('property','deal_save_checked')"></span>--}}
                    {{--<label>Deal Save?</label>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--@if(isset($property->deal_save_checked) && $property->deal_save_checked)--}}
            {{--<div class="col-md-6 col-lg-6">--}}
                {{--<div class="">--}}
                    {{--<label>Checked At</label>--}}
                    {{--<input type="text" class="form-control" wire:model="property.deal_save_checked_at" readonly="readonly">--}}

                {{--</div>--}}

            {{--</div>--}}

                {{--<div class="col-md-6 col-lg-6">--}}
                    {{--<label>Comment</label>--}}
                    {{--<input type="text" class="form-control" placeholder="Add Comment" wire:model="property.deal_save_checked_comment">--}}

                {{--</div>--}}
            {{--@endif--}}
        {{--</div>--}}

    {{--</div>--}}

    {{--<div class="col-md-12 col-lg-12 pt-4">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-6 col-lg-6">--}}
                {{--@error('property.deal_save_checked') <span class="error alert-danger">{{ $message }}</span> @enderror--}}

                {{--<div class="">--}}
                    {{--<label>Deal Save?</label>--}}
                    {{--<span><input class="" type="checkbox" name="property_country" value="" wire:model="property.deal_save_checked"></span>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}

   <div class="col-md-6 col-lg-6" >
       @error('property.house_number_and_street') <span class="error alert-danger">{{ $message }}</span> @enderror

       <div class="">
           <label>Property house number and street</label>
           <span><input class="form-control" type="text" name="property_country" value="" wire:model="property.house_number_and_street"></span>
       </div>
   </div>

    <div class="col-md-6 col-lg-6">
        @error('property.county') <span class="error alert-danger">{{ $message }}</span> @enderror

        <div class="">
            <label>Property County</label>
            <span><input class="form-control" type="text" name="property_country" value="" wire:model="property.county"></span>
        </div>

    </div>

    <div class="col-md-6 col-lg-6">
        @error('property.state') <span class="error alert-danger">{{ $message }}</span> @enderror

        <div class="">
            <label>Property State</label>
            <span><input  class="form-control" type="text" name="property_state" value="" wire:model="property.state"></span>
        </div>
    </div>

    <div class="col-md-6 col-lg-6">
        {{--@error('property.city') <span class="error alert-danger">{{ $message }}</span> @enderror--}}

        <div class="">
            <label>Property City</label>
            <input  class="form-control" type="text" name="property_city" value="" wire:model="property.city">
        </div>
    </div>
    <div class="col-md-6 col-lg-6">
        @error('property.zip') <span class="error alert-danger">{{ $message }}</span> @enderror

        <div class="">
            <label>Property Zip</label>
            <input  class="form-control" type="text" name="property_zip" value="" wire:model="property.zip">
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <label>New Construction</label>
                <select class="form-control" name="item_checklist_new_construction" id="item_checklist_new_construction" wire:model="property.new_construction_check" value=""  onchange="hideShow(this.value,'.item_checklist_new_construction_input_div')">
                    @foreach(YesNoDropDown::getList() as $key => $val)
                        <option value="{{$key}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 col-lg-6 d item_checklist_new_construction_input_div {{$property->new_construction_check? '':'d-none'}}"   id="item_checklist_new_construction_input_div" wire:ignore>
                <label>Builder Name</label>
                <input  class="form-control" type="text" name="builder_name" value="" placeholder="Builder Name" wire:model="property.new_construction_builder">
            </div>
        </div>
    </div>


    <div class="shadow p-2 col-md-12 price_block mt-2" >
        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('property.purchase_price') <span class="error alert-danger">{{ $message }}</span> @enderror

                <div class="">
                    <label>Purchase Price</label>
                    <input  class="form-control" type="number" name="item_check_list_purchase_price" value="" wire:model="property.purchase_price">

                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                @error('property.closing_credit_general') <span class="error alert-danger">{{ $message }}</span> @enderror

                <div class="">
                    <label>Closing Credit General</label>
                    <input  class="form-control" type="number" name="closing_credit" value="" wire:model="property.closing_credit_general">

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('property.repair_credit') <span class="error alert-danger">{{ $message }}</span> @enderror

                <div class="">
                    <label>Repair Credit</label>
                    <input  class="form-control" type="number" name="repair_credit" value="" wire:model="property.repair_credit">

                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                {{--@error('property.annual_property_tax') <span class="error alert-danger">{{ $message }}</span> @enderror--}}

                <div class="">
                    <label>Annual Property Tax</label>
                    <input  class="form-control" type="number" name="annual_property_tax" value="" wire:model="property.annual_property_tax" >

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('property.closing_cost') <span class="error alert-danger">{{ $message }}</span> @enderror

                <div class="">
                    <label>Closing Cost</label>
                    <input  class="form-control" type="number" name="closing_cost_price" value="{{$property->closing_cost ?:3500 }}" wire:model="property.closing_cost">

                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                @error('property.gross_monthly_rent') <span class="error alert-danger">{{ $message }}</span> @enderror

                <div class="">
                    <label>Gross Monthly Rent</label>
                    <input  class="form-control" type="number" name="gross_monthly_rent" value="" wire:model="property.gross_monthly_rent">

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-6">
                @error('property.annual_insurance_fee') <span class="error alert-danger">{{ $message }}</span> @enderror

                <div class="">
                    <label>Annual Insurance Fee</label>
                    <input  class="form-control" type="number" name="annual_insurance_fee" value="" wire:model="property.annual_insurance_fee">

                </div>
            </div>
        </div>
    </div>











    <div class="col-md-12 col-lg-12">
        <div class="">
            <label>HOA</label>
            <select class="form-control" name="item_checklist_hoa" id="item_checklist_hoa" onchange="hideShow(this.value,'.item_checklist_hoa_div')" wire:model="property.hoa_check">
                @foreach(YesNoDropDown::getList() as $key => $val)
                    <option value="{{$key}}">{{$val}}</option>
                @endforeach
            </select>
        </div>
        <div class="row item_checklist_hoa_div {{$property->hoa_check ?'':'d-none'}}" wire:ignore>
            <div class="col-md-6 col-lg-6">
                <span>HOA Name</span>
                <input  class="form-control" type="text" name="hoa_name" value="" placeholder="" wire:model="property.hoa_name">
            </div>
            <div class="col-md-6 col-lg-6">
                <span>HOA Contact</span>
                <input  class="form-control" type="text" name="hoa_name" value="" placeholder="" wire:model="property.hoa_phone">
            </div>

            <div class="col-md-6 col-lg-6">
                <span>HOA Annual Fee</span>
                <input  class="form-control" type="text" name="hoa_name" value="" placeholder="" wire:model="property.hoa_annual_fee">
            </div>
        </div>
    </div>

        <div class="col-md-12 mt-2 mb-2">
            <div class="row">
                @if(isset($this->property->net_monthly_rent) && !empty($this->property->net_monthly_rent))
                <div class="col-md-6 col-lg-6">
                    <div class="">
                        <label>Net Monthly Rent</label>
                        <input  class="form-control" type="number" name="net_monthly_rent" value="" wire:model="property.net_monthly_rent" disabled="true">

                    </div>
                </div>
                @endif
                    @if(isset($this->property->yield) && !empty($this->property->yield))
                <div class="col-md-6 col-lg-6">
                    <div class="">
                        <label>Yield</label>
                        <input  class="form-control" type="number" name="yield" value="" wire:model="property.yield" disabled="true">

                    </div>
                </div>
                @endif
            </div>
        </div>


    <div class="col-md-6 col-lg-6">
        @error('property.closing_date') <span class="error alert-danger">{{ $message }}</span> @enderror
        <div class="">
            <label>Closing Date</label>
                <input  class="form-control" type="date" name="closing_date" value="" wire:model="property.closing_date" />

        </div>
    </div>
    <div class="col-md-6 col-lg-6">
        @error('property.due_diligence_expire_date') <span class="error alert-danger">{{ $message }}</span> @enderror
        <div class="">
            <label>Due Diligence Expires</label>
                <input  class="form-control" type="date" name="dd_expire_date" value="" wire:model="property.due_diligence_expire_date" />
        </div>
    </div>

    <div class="col-md-12 mt-2 mb-2">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <label>Lender?</label>
                <select class="form-control" name="item_checklist_lender" id="item_checklist_lender" onchange="hideShow(this.value,'.item_checklist_lender_name_div')" wire:model="property.lender_check">
                    @foreach(YesNoDropDown::getList() as $key => $val)
                        <option value="{{$key}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>

            <div class=" col-md-6 col-lg-6 item_checklist_lender_name_div {{$property->lender_check?'':'d-none'}}" wire:ignore>
                <label>Lender Name</label>
                <input class="form-control" type="text" name="item_checklist_lender_name" value="" placeholder="Lender Name" wire:model="property.lender_name" />
            </div>
        </div>

    </div>


</div>