@extends('layouts.app')

@section('content')
@push('styles')
<style>
    ul{list-style-type: none}
    .gfield_radio li, .gfield_checkbox li {display: inline-block; padding:0 10px;}
    label{margin-top:20px;font-size: 1.6em}
    .gfield_checkbox label, .gfield_radio label{font-size:1em; margin-top:10px;}
</style>
@endpush

   <div class="album text-muted">

     <div class="container">

       <div class="row">

         <h1>Add A New Client</h1>
<div class="col-md-12">

<form method="post" enctype="multipart/form-data" id="gform_4" action="/client-store">
    {{ @csrf_field() }}
    <div class="gform_heading">
        <h3 class="gform_title">Intake Form</h3>
        <span class="gform_description">Intake form for CP Re-entry Program!</span>
    </div>
    <div class="gform_body"><ul id="gform_fields_4" class="gform_fields top_label form_sublabel_below description_below">
        <li id="field_4_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
        <label class="gfield_label" for="input_4_1">First Name<span class="gfield_required">*</span></label>
        <div class="ginput_container ginput_container_text"><input name="input_1" id="input_4_1" type="text"  class="form-control" value="" class="medium" maxlength="20" tabindex="1" placeholder="Your First Name" aria-required="true" aria-invalid="false">
        <div class="charleft ginput_counter warningTextareaInfo">20 max characters</div></div></li>
        <li id="field_4_2" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
        <label class="gfield_label" for="input_4_2">Last Name<span class="gfield_required">*</span></label>
        <div class="ginput_container ginput_container_text">
        <input name="last_name" id="input_4_2" type="text"  class="form-control" value="" class="medium" tabindex="2" placeholder="Your Last Name" aria-required="true" aria-invalid="false"></div></li>
        <li id="field_4_3" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
        <label class="gfield_label" for="input_4_3">Primary Phone</label><div class="ginput_container ginput_container_phone">
        <input name="primary_phone" id="input_4_3" type="text"  class="form-control" value="" class="medium" tabindex="3" placeholder="Primary Phone Number" aria-invalid="false"></div></li>
        <li id="field_4_4" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
        <label class="gfield_label" for="input_4_4">Secondary Phone</label>
        <div class="ginput_container ginput_container_phone">
        <input name="secondary_phone" id="input_4_4" type="text"  class="form-control" value="" class="medium" tabindex="4" placeholder="Secondary Phone Number" aria-invalid="false"></div></li>
        <li id="field_4_5" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
        <label class="gfield_label" for="input_4_5">Citizenship Status<span class="gfield_required">*</span></label>
        <div class="ginput_container ginput_container_select">
                                                <select class="form-control" name="citizenship" id="input_4_5" class="medium gfield_select" tabindex="5" aria-required="true" aria-invalid="false">
                                                    <option value="" selected="selected" class="gf_placeholder">Your citizenship Status</option>
                                                    <option value="US Citizen">US Citizen</option><option value="Registered Alien">Registered Alien</option>
                                                    <option value="Veteran">Veteran</option></select></div></li>
                                                    <li id="field_4_6" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                                        <label class="gfield_label" for="input_4_6">What Forms of ID do you posess?<span class="gfield_required">*</span></label>
                                                        <div class="ginput_container ginput_container_select">
                                                            <select class="form-control" name="citizenship" id="input_4_6" class="medium gfield_select" tabindex="6" aria-required="true" aria-invalid="false">
                                                            <option value="" selected="selected" class="gf_placeholder">Your citizenship Status</option>
                                                            <option value="US Drivers License">US Drivers License</option>
                                                            <option value="Birth Certificate">Birth Certificate</option>
                                                            <option value="Social Security Card">Social Security Card</option>
                                                            <option value="Government ID">Government ID</option>
                                                            <option value="No ID">No ID</option></select></div></li>
            <li>
                    <label class="gfield_label" for="input_4_6">Preferred Sex <span class="gfield_required">*</span></label>

                <select name="sex" id="sex" class="form-control">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Prefer Not To Disclose</option>
                </select>
            </li>
            
              {{--                                               <li id="field_4_8" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label">Do you feel that you have a substance abuse problem?<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_radio"><ul class="gfield_radio" id="input_4_8"><li class="gchoice_4_8_0"><input name="input_8" type="radio" value="Yes" id="choice_4_8_0" tabindex="7" onclick="gf_apply_rules(4,[9,11]);" onkeypress="gf_apply_rules(4,[9,11]);"><label for="choice_4_8_0" id="label_4_8_0">Yes</label></li><li class="gchoice_4_8_1"><input name="input_8" type="radio" value="No" id="choice_4_8_1" tabindex="8" onclick="gf_apply_rules(4,[9,11]);" onkeypress="gf_apply_rules(4,[9,11]);"><label for="choice_4_8_1" id="label_4_8_1">No</label></li></ul></div></li><li id="field_4_9" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible" style="display: none;"><label class="gfield_label">Would you like help reducing your substance use?<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_radio"><ul class="gfield_radio" id="input_4_9"><li class="gchoice_4_9_0"><input name="input_9" type="radio" value="Yes" id="choice_4_9_0" tabindex="9" onclick="gf_apply_rules(4,[10]);" onkeypress="gf_apply_rules(4,[10]);"><label for="choice_4_9_0" id="label_4_9_0">Yes</label></li><li class="gchoice_4_9_1"><input name="input_9" type="radio" value="No" id="choice_4_9_1" tabindex="10" onclick="gf_apply_rules(4,[10]);" onkeypress="gf_apply_rules(4,[10]);"><label for="choice_4_9_1" id="label_4_9_1">No</label></li></ul></div></li><li id="field_4_10" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible" style="display: none;"><label class="gfield_label">If yes, level of care desired:<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_radio"><ul class="gfield_radio" id="input_4_10"><li class="gchoice_4_10_0"><input name="input_10" type="radio" value="12 Step Program" id="choice_4_10_0" tabindex="11"><label for="choice_4_10_0" id="label_4_10_0">12 Step Program</label></li><li class="gchoice_4_10_1"><input name="input_10" type="radio" value="Methadone Clinic" id="choice_4_10_1" tabindex="12"><label for="choice_4_10_1" id="label_4_10_1">Methadone Clinic</label></li><li class="gchoice_4_10_2"><input name="input_10" type="radio" value="Outpatient Substance Abuse Program" id="choice_4_10_2" tabindex="13"><label for="choice_4_10_2" id="label_4_10_2">Outpatient Substance Abuse Program</label></li><li class="gchoice_4_10_3"><input name="input_10" type="radio" value="gf_other_choice" id="choice_4_10_3" tabindex="14" onfocus="jQuery(this).next('input').focus();"><input id="input_4_10_other" name="input_10_other" type="text"  class="form-control" value="Other" aria-label="Other" tabindex="14"></li></ul></div></li><li id="field_4_11" class="gfield field_sublabel_below field_description_below gfield_visibility_visible" style="display: none;"><label class="gfield_label" for="input_4_11">What previous treatment efforts and lessons learned</label><div class="ginput_container ginput_container_textarea"><textarea  class="form-control"  class="form-control" name="input_11" id="input_4_11" class="textarea medium" tabindex="15" aria-invalid="false" rows="10" cols="50"></textarea></div></li><li id="field_4_13" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label">Where are you currently residing?</label><div class="ginput_container ginput_container_checkbox"><ul class="gfield_checkbox" id="input_4_13"><li class="gchoice_4_13_1">

            <input name="input_13.1" type="checkbox" value="Own apartment" id="choice_4_13_1" tabindex="16">
            <label for="choice_4_13_1" id="label_4_13_1">Own apartment</label>
        </li><li class="gchoice_4_13_2">
            <input name="input_13.2" type="checkbox" value="Friend’s couch" id="choice_4_13_2" tabindex="17">
            <label for="choice_4_13_2" id="label_4_13_2">Friend’s couch</label>
        </li><li class="gchoice_4_13_3">
            <input name="input_13.3" type="checkbox" value="Family" id="choice_4_13_3" tabindex="18">
            <label for="choice_4_13_3" id="label_4_13_3">Family</label>
        </li><li class="gchoice_4_13_4">
            <input name="input_13.4" type="checkbox" value="Shelter" id="choice_4_13_4" tabindex="19">
            <label for="choice_4_13_4" id="label_4_13_4">Shelter</label>
        </li><li class="gchoice_4_13_5">
            <input name="input_13.5" type="checkbox" value="Streets" id="choice_4_13_5" tabindex="20">
            <label for="choice_4_13_5" id="label_4_13_5">Streets</label>
        </li><li class="gchoice_4_13_6">
            <input name="input_13.6" type="checkbox" value="Transitional Program" id="choice_4_13_6" tabindex="21">
            <label for="choice_4_13_6" id="label_4_13_6">Transitional Program</label>
        </li></ul></div></li><li id="field_4_14" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label gfield_label_before_complex" for="input_4_14_1">Address</label>    
<div class="ginput_complex ginput_container has_street has_street2 has_city has_state has_zip has_country ginput_container_address gfield_trigger_change" id="input_4_14">
     <span class="ginput_full address_line_1" id="input_4_14_1_container">
                    <input type="text"  class="form-control" name="street_address" id="input_4_14_1" value="" tabindex="22">
                    <label for="input_4_14_1" id="input_4_14_1_label">Street Address</label>
                </span><span class="ginput_full address_line_2" id="input_4_14_2_container">
                    <input type="text"  class="form-control" name="s treet_address" id="input_4_14_2" value="" tabindex="23">
                    <label for="input_4_14_2" id="input_4_14_2_label">Address Line 2</label>
                </span><span class="ginput_left address_city" id="input_4_14_3_container">
                <input type="text"  class="form-control" name="city" id="input_4_14_3" value="" tabindex="24">
                <label for="input_4_14_3" id="input_4_14_3_label">City</label>
             </span><span class="ginput_right address_state" id="input_4_14_4_container">
                    <input type="text"  class="form-control" name="state" id="input_4_14_4" value="" tabindex="26">
                    <label for="input_4_14_4" id="input_4_14_4_label">State / Province / Region</label>
                  </span><span class="ginput_left address_zip" id="input_4_14_5_container">
                <input type="text"  class="form-control" name="zip" id="input_4_14_5" value="" tabindex="27">
                <label for="input_4_14_5" id="input_4_14_5_label">ZIP / Postal Code</label>
            </span>
<div class="gf_clear gf_clear_complex"></div>
</div></li><li id="field_4_15" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_15">Number of people in residence including children.</label><div class="ginput_container ginput_container_number"><input name="input_15" id="input_4_15" type="text"  class="form-control" value="" class="medium" tabindex="29" aria-invalid="false"><div class="instruction ">Please enter a value between <strong>0</strong> and <strong>10</strong>.</div></div></li><li id="field_4_16" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_16">Would you like assistance with independent living skills?</label><div class="ginput_container ginput_container_select"><select class="form-control" name="input_16" id="input_4_16" class="medium gfield_select" tabindex="30" aria-invalid="false"><option value="Select One">Select One</option><option value="Yes">Yes</option><option value="No">No</option></select></div></li><li id="field_4_17" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_17">Does client need housing?</label><div class="ginput_container ginput_container_select"><select class="form-control" name="input_17" id="input_4_17" class="medium gfield_select" tabindex="31" aria-invalid="false"><option value="Select One">Select One</option><option value="Yes">Yes</option><option value="No">No</option></select></div></li><li id="field_4_19" class="gfield gsection field_sublabel_below field_description_below gfield_visibility_visible"><h2 class="gsection_title">Physical/Mental Health</h2></li><li id="field_4_20" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_20">Do you have any physical or mental health concerns?</label><div class="ginput_container ginput_container_select"><select class="form-control" name="input_20" id="input_4_20" onchange="gf_apply_rules(4,[21,22,25,26,27]);" class="medium gfield_select" tabindex="32" aria-invalid="false"><option value="Select One">Select One</option><option value="Yes">Yes</option><option value="No">No</option></select></div></li><li id="field_4_21" class="gfield field_sublabel_below field_description_below gfield_visibility_visible" style="display: none;"><label class="gfield_label" for="input_4_21">Have you ever been diagnosed and or received mental health services?</label><div class="ginput_container ginput_container_select"><select class="form-control" name="input_21" id="input_4_21" class="medium gfield_select" aria-invalid="false"><option value="Select One">Select One</option><option value="Yes">Yes</option><option value="No">No</option></select></div></li><li id="field_4_22" class="gfield field_sublabel_below field_description_below gfield_visibility_visible" style="display: none;"><label class="gfield_label" for="input_4_22">Do you have a therapist or psychologist in the community?</label><div class="ginput_container ginput_container_select"><select class="form-control" name="input_22" id="input_4_22" onchange="gf_apply_rules(4,[23,24]);" class="medium gfield_select" aria-invalid="false"><option value="Select One">Select One</option><option value="Yes">Yes</option><option value="No">No</option></select></div></li><li id="field_4_23" class="gfield field_sublabel_below field_description_below gfield_visibility_visible" style="display: none;"><label class="gfield_label" for="input_4_23">If Yes, Give Name:</label><div class="ginput_container ginput_container_text"><input name="input_23" id="input_4_23" type="text"  class="form-control" value="" class="medium" tabindex="35" aria-invalid="false"></div></li><li id="field_4_24" class="gfield field_sublabel_below field_description_below gfield_visibility_visible" style="display: none;"><label class="gfield_label" for="input_4_24">What Agency?</label><div class="ginput_container ginput_container_text"><input name="input_24" id="input_4_24" type="text"  class="form-control" value="" class="medium" tabindex="36" aria-invalid="false"></div></li><li id="field_4_25" class="gfield field_sublabel_below field_description_below gfield_visibility_visible" style="display: none;"><label class="gfield_label" for="input_4_25">Do you have a disability, health care needs, or are you in need of special accommodations that should be considered in creating this plan?</label><div class="ginput_container ginput_container_select"><select class="form-control" name="input_25" id="input_4_25" class="medium gfield_select" aria-invalid="false"><option value="Select One">Select One</option><option value="Yes">Yes</option><option value="No">No</option></select></div></li><li id="field_4_26" class="gfield field_sublabel_below field_description_below gfield_visibility_visible" style="display: none;"><label class="gfield_label" for="input_4_26">Are you connected with a healthcare center in the community?</label><div class="ginput_container ginput_container_select"><select class="form-control" name="input_26" id="input_4_26" class="medium gfield_select" aria-invalid="false"><option value="Select One">Select One</option><option value="Yes">Yes</option><option value="No">No</option></select></div></li><li id="field_4_27" class="gfield field_sublabel_below field_description_below gfield_visibility_visible" style="display: none;"><label class="gfield_label" for="input_4_27">Do you require mental/physical health care services?</label><div class="ginput_container ginput_container_select"><select class="form-control" name="input_27" id="input_4_27" class="medium gfield_select" aria-invalid="false"><option value="Select One">Select One</option><option value="Yes">Yes</option><option value="No">No</option></select></div></li><li id="field_4_29" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label">Do you need support around any of the following family related issues?</label><div class="ginput_container ginput_container_checkbox"><ul class="gfield_checkbox" id="input_4_29"><li class="gchoice_4_29_1">
            <input name="input_29.1" type="checkbox" value="Domestic violence" id="choice_4_29_1" tabindex="40">
            <label for="choice_4_29_1" id="label_4_29_1">Domestic violence</label>
        </li><li class="gchoice_4_29_2">
            <input name="input_29.2" type="checkbox" value="Parenting skills" id="choice_4_29_2" tabindex="41">
            <label for="choice_4_29_2" id="label_4_29_2">Parenting skills</label>
        </li><li class="gchoice_4_29_3">
            <input name="input_29.3" type="checkbox" value="Family reunification" id="choice_4_29_3" tabindex="42">
            <label for="choice_4_29_3" id="label_4_29_3">Family reunification</label>
        </li><li class="gchoice_4_29_4">
            <input name="input_29.4" type="checkbox" value="Childcare" id="choice_4_29_4" tabindex="43">
            <label for="choice_4_29_4" id="label_4_29_4">Childcare</label>
        </li><li class="gchoice_4_29_5">
            <input name="input_29.5" type="checkbox" value="Family counseling" id="choice_4_29_5" tabindex="44">
            <label for="choice_4_29_5" id="label_4_29_5">Family counseling</label>
        </li><li class="gchoice_4_29_6">
            <input name="input_29.6" type="checkbox" value="Legal advocacy" id="choice_4_29_6" tabindex="45">
            <label for="choice_4_29_6" id="label_4_29_6">Legal advocacy</label>
        </li><li class="gchoice_4_29_7">
            <input name="input_29.7" type="checkbox" value="Child Support" id="choice_4_29_7" tabindex="46">
            <label for="choice_4_29_7" id="label_4_29_7">Child Support</label>
        </li></ul></div></li><li id="field_4_30" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_30">1. List a person and phone number who has been involved in your transition from jail to the community.<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_textarea"><textarea  class="form-control"  class="form-control" name="input_30" id="input_4_30" class="textarea medium" tabindex="47" aria-required="true" aria-invalid="false" rows="10" cols="50"></textarea></div></li><li id="field_4_31" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label">1. Did they sign a release?</label><div class="ginput_container ginput_container_checkbox"><ul class="gfield_checkbox" id="input_4_31"><li class="gchoice_4_31_1">
            <input name="input_31.1" type="checkbox" value="Yes" id="choice_4_31_1" tabindex="48">
            <label for="choice_4_31_1" id="label_4_31_1">Yes</label>
        </li><li class="gchoice_4_31_2">
            <input name="input_31.2" type="checkbox" value="No" id="choice_4_31_2" tabindex="49">
            <label for="choice_4_31_2" id="label_4_31_2">No</label>
        </li></ul></div></li><li id="field_4_32" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_32">2. List a person and phone number who has been involved in your transition from jail to the community.<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_textarea"><textarea  class="form-control"  class="form-control" name="input_32" id="input_4_32" class="textarea medium" tabindex="50" aria-required="true" aria-invalid="false" rows="10" cols="50"></textarea></div></li><li id="field_4_33" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label">2. Did they sign a release?</label><div class="ginput_container ginput_container_checkbox"><ul class="gfield_checkbox" id="input_4_33"><li class="gchoice_4_33_1">
            <input name="input_33.1" type="checkbox" value="Yes" id="choice_4_33_1" tabindex="51">
            <label for="choice_4_33_1" id="label_4_33_1">Yes</label>
        </li><li class="gchoice_4_33_2">
            <input name="input_33.2" type="checkbox" value="No" id="choice_4_33_2" tabindex="52">
            <label for="choice_4_33_2" id="label_4_33_2">No</label>
        </li></ul></div></li><li id="field_4_35" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_35">What is your highest grade completed?</label><div class="ginput_container ginput_container_select"><select class="form-control" name="input_35" id="input_4_35" class="medium gfield_select" tabindex="53" aria-invalid="false"><option value="5 or below">5 or below</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="Associates Degree">Associates Degree</option><option value="Some College">Some College</option><option value="Bachelors Degree">Bachelors Degree</option><option value="Masters Degree or higher">Masters Degree or higher</option></select></div></li><li id="field_4_36" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_36">Are you interested in going back to school?</label><div class="ginput_container ginput_container_select"><select class="form-control" name="input_36" id="input_4_36" class="medium gfield_select" tabindex="54" aria-invalid="false"><option value="Yes">Yes</option><option value="No">No</option></select></div></li><li id="field_4_37" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_37">Current Employment Status?</label><div class="ginput_container ginput_container_select"><select class="form-control" name="input_37" id="input_4_37" onchange="gf_apply_rules(4,[38]);" class="medium gfield_select" tabindex="55" aria-invalid="false"><option value="Employed">Employed</option><option value="Under Employed">Under Employed</option><option value="Unemployed">Unemployed</option></select></div></li><li id="field_4_49" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_49">Unemployed</label><div class="ginput_container ginput_container_select"><select class="form-control" name="input_49" id="input_4_49" class="medium gfield_select" tabindex="56" aria-invalid="false"><option value="Employed">Employed</option><option value="Under Employed">Under Employed</option><option value="Unemployed">Unemployed</option></select></div></li><li id="field_4_38" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_38">What industry</label><div class="ginput_container ginput_container_text"><input name="input_38" id="input_4_38" type="text"  class="form-control" value="" class="medium" tabindex="57" aria-invalid="false"></div></li><li id="field_4_39" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_39">List any skills that you may have.</label><div class="ginput_container ginput_container_textarea"><textarea  class="form-control"  class="form-control" name="input_39" id="input_4_39" class="textarea medium" tabindex="58" aria-invalid="false" rows="10" cols="50"></textarea></div></li><li id="field_4_40" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_40">List any interests that you may have.</label><div class="ginput_container ginput_container_textarea"><textarea  class="form-control"  class="form-control" name="input_40" id="input_4_40" class="textarea medium" tabindex="59" aria-invalid="false" rows="10" cols="50"></textarea></div></li><li id="field_4_41" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_41">Do you need educational training<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_select"><select class="form-control" name="input_41" id="input_4_41" class="medium gfield_select" tabindex="60" aria-required="true" aria-invalid="false"><option value="Yes">Yes</option><option value="No">No</option></select></div></li><li id="field_4_43" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label">What benefits are you interested in?<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_checkbox"><ul class="gfield_checkbox" id="input_4_43"><li class="gchoice_4_43_1">
            <input name="input_43.1" type="checkbox" value="Public Assistance" id="choice_4_43_1" tabindex="61">
            <label for="choice_4_43_1" id="label_4_43_1">Public Assistance</label>
        </li><li class="gchoice_4_43_2">
            <input name="input_43.2" type="checkbox" value="SNAP Benefits" id="choice_4_43_2" tabindex="62">
            <label for="choice_4_43_2" id="label_4_43_2">SNAP Benefits</label>
        </li><li class="gchoice_4_43_3">
            <input name="input_43.3" type="checkbox" value="Medicaid" id="choice_4_43_3" tabindex="63">
            <label for="choice_4_43_3" id="label_4_43_3">Medicaid</label>
        </li><li class="gchoice_4_43_4">
            <input name="input_43.4" type="checkbox" value="SSI" id="choice_4_43_4" tabindex="64">
            <label for="choice_4_43_4" id="label_4_43_4">SSI</label>
        </li><li class="gchoice_4_43_5">
            <input name="input_43.5" type="checkbox" value="SSD" id="choice_4_43_5" tabindex="65">
            <label for="choice_4_43_5" id="label_4_43_5">SSD</label>
        </li><li class="gchoice_4_43_6">
            <input name="input_43.6" type="checkbox" value="Veteran" id="choice_4_43_6" tabindex="66">
            <label for="choice_4_43_6" id="label_4_43_6">Veteran</label>
        </li><li class="gchoice_4_43_7">
            <input name="input_43.7" type="checkbox" value="I'm NOT Interested in any benefits." checked="checked" id="choice_4_43_7" tabindex="67">
            <label for="choice_4_43_7" id="label_4_43_7">I'm NOT Interested in any benefits.</label>
        </li></ul></div></li><li id="field_4_44" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label">I am also interested in...<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_checkbox"><ul class="gfield_checkbox" id="input_4_44"><li class="gchoice_4_44_1">
            <input name="input_44.1" type="checkbox" value="Transportation" id="choice_4_44_1" tabindex="68">
            <label for="choice_4_44_1" id="label_4_44_1">Transportation</label>
        </li><li class="gchoice_4_44_2">
            <input name="input_44.2" type="checkbox" value="Clothing" id="choice_4_44_2" tabindex="69">
            <label for="choice_4_44_2" id="label_4_44_2">Clothing</label>
        </li><li class="gchoice_4_44_3">
            <input name="input_44.3" type="checkbox" value="Food" id="choice_4_44_3" tabindex="70">
            <label for="choice_4_44_3" id="label_4_44_3">Food</label>
        </li><li class="gchoice_4_44_4">
            <input name="input_44.4" type="checkbox" value="I'm NOT Interested in any of these." checked="checked" id="choice_4_44_4" tabindex="71">
            <label for="choice_4_44_4" id="label_4_44_4"> I'm NOT Interested in any of these.</label>
        </li></ul></div></li><li id="field_4_45" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_4_45">If not listed above, please specify</label><div class="ginput_container ginput_container_textarea"><textarea  class="form-control"  class="form-control" name="input_45" id="input_4_45" class="textarea medium" tabindex="72" aria-invalid="false" rows="10" cols="50"></textarea></div>
        </li><li id="field_4_51" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
            <label class="gfield_label" for="input_4_51">Discussion Notes</label>
            <div class="ginput_container ginput_container_textarea">
                <textarea  class="form-control"  class="form-control" name="input_51" id="input_4_51" class="textarea medium" tabindex="73" aria-invalid="false" rows="10" cols="50"></textarea></div>
            </li><li id="field_4_52" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                <label class="gfield_label" for="input_4_52">Add Assignee<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_select">
                    <select class="form-control" name="input_52" id="input_4_52" class="medium gfield_select" tabindex="74" aria-required="true" aria-invalid="false">
                        <optgroup label="Users"><option value="user_id|1264">Angela Wilson</option><option value="user_id|1497">Tonya Shaw</option></optgroup></select></div></li>
                        
        </ul></div>  --}}
        <button type="submit">Submit</button>
    </form>
  
</div>

     </div>

   </div>

@endsection






<b></b>