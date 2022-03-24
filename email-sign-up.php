
<!DOCTYPE html>
<html>
<head>

<link type="text/css" href="https://app.icontact.com/icp/static/human/css/signupBuilder/formGlobalStyles.css" rel="stylesheet" media="all">
<style type="text/css" id="signupBuilderAdvancedStyles">
 #ic_signupform .elcontainer.tight .formEl:not(.hidden-field).fieldtype-radio .option-container label, #ic_signupform .elcontainer.tight .formEl:not(.hidden-field).fieldtype-checkbox .option-container label {
    line-height: 1.5em;
    color: #ffffff;
}
</style><style type="text/css" id="signupBuilderStyles">
#ic_signupform .elcontainer {
   background: #002f6d;
   text-align: left;
   max-width: 410px;
   padding: 20px 13px;
   border-radius: 3px;
   border: 0px solid #002f6d;
   font-size: 14px;
   color: #000000;
   font-family: arial;
}

#ic_signupform .elcontainer.center-aligned .formEl { 
	margin-right: auto;
	margin-left: auto; 
}

#ic_signupform .elcontainer.right-aligned .formEl { 
	margin-left: auto; 
}

#ic_signupform .form-header {
   
      display: none;
   
   background: #ffffff;
   margin-top: -20px;
   margin-left: -13px;
   margin-right: -13px;
   margin-bottom: 20px; /* using padding on purpose */
   padding-top: 20px;
   padding-right: 13px;
   padding-bottom: 20px;
   padding-left: 13px;
   border-radius: calc(3px - 0px) calc(3px - 0px) 0 0;
   text-align: center;
   font-size: 150%;
   color: #333333;
   border-bottom: 0px solid #dddddd;
}

#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-input label,
#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-dropdown label,
#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-checkbox h3,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-input label,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-dropdown label,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-checkbox h3 {
   width: 30%;
}
	   
#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-checkbox h3,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-checkbox h3 {
   line-height: 3em; 
}

#ic_signupform .elcontainer.tight.inline-label-left .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.tight.inline-label-left .formEl.fieldtype-checkbox h3,
#ic_signupform .elcontainer.tight.inline-label-right .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.tight.inline-label-right .formEl.fieldtype-checkbox h3 {
   line-height: 2em; 
}

#ic_signupform .elcontainer.generous.inline-label-left .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.generous.inline-label-left .formEl.fieldtype-checkbox h3,
#ic_signupform .elcontainer.generous.inline-label-right .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.generous.inline-label-right .formEl.fieldtype-checkbox h3 {
   line-height: 4em; 
}

#ic_signupform .elcontainer.inline-label-left .formEl input[type="text"],
#ic_signupform .elcontainer.inline-label-left .formEl select,
#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-radio .option-container,
#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-checkbox .option-container,
#ic_signupform .elcontainer.inline-label-right .formEl input[type="text"],
#ic_signupform .elcontainer.inline-label-right .formEl select,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-radio .option-container,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-checkbox .option-container {
   width: 70%;
}

#ic_signupform .elcontainer.hidden-label .formEl.required:before {
   color: #000000;
}
	   
#ic_signupform .elcontainer .formEl {
   font-size: 1em;
}

#ic_signupform .elcontainer .formEl.fieldtype-input label,
#ic_signupform .elcontainer .formEl.fieldtype-dropdown label,
#ic_signupform .elcontainer .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer .formEl.fieldtype-checkbox h3 {
   font-size: 100%;
   font-weight: bold;
   color: #ffffff;
}

#ic_signupform .elcontainer .formEl.fieldtype-input input[type="text"],
#ic_signupform .elcontainer .formEl.fieldtype-dropdown select {
   background-color: #fafafa;
   border: 0px solid #999999;
   border-radius: 0px;
}
	   
#ic_signupform .elcontainer .formEl.fieldtype-input input[type="text"],
#ic_signupform .elcontainer .formEl.fieldtype-dropdown select,
#ic_signupform .elcontainer .formEl.fieldtype-radio label,
#ic_signupform .elcontainer .formEl.fieldtype-checkbox label {
   font-size: 100%;
}

#ic_signupform .elcontainer .formEl input[type="text"]::-moz-placeholder {
   color: #000000;
   font-family: inherit;
}

#ic_signupform .elcontainer .formEl input[type="text"]::-webkit-input-placeholder {
   color: #000000;
   font-family: inherit;
}

#ic_signupform .elcontainer .formEl input[type="text"]:-ms-input-placeholder {
   color: #000000;
   font-family: inherit;
}

#ic_signupform .elcontainer .formEl input[type="text"],
#ic_signupform .elcontainer .formEl select,
#ic_signupform .elcontainer .formEl .option-container label {
   color: #000000;
   font-family: inherit;
}
	   
#ic_signupform .elcontainer.inline-button .submit-container {
	display: inline-block;
	box-sizing: border-box;
	right: -.5em;
	padding: 0 1em 0 0;
	position: relative;
	vertical-align: bottom;
	margin-bottom: 1em;
}
	
#ic_signupform .elcontainer.inline-button.tight .sortables {
	margin-bottom: -.5em;
}
	
#ic_signupform .elcontainer.inline-button .sortables {
	margin-bottom: -1em;
}
	
#ic_signupform .elcontainer.inline-button.generous .sortables {
	margin-bottom: -1.5em;
}

#ic_signupform .elcontainer .submit-container {
   text-align: center;
}

#ic_signupform .elcontainer .submit-container input[type="submit"] {
   background: #cc4452;
   border: 0px solid #cc4452;
   border-radius: 0px;
   line-height: 1em;
   padding: 12px 25px;
   color: #ffffff;
   font-size: 110%;
   font-family: inherit;
   width: auto;
}</style>

<form id="ic_signupform" captcha-key="6LeCZCcUAAAAALhxcQ5fN80W6Wa2K3GqRQK6WRjA" captcha-theme="light" new-captcha="true" method="POST" action="https://app.icontact.com/icp/core/~republictitle.com/mycontacts/signup/designer/form/?id=635&amp;cid=1713502&amp;lid=26484&amp;lpid=52"><input type="hidden" value="true" name="new_captcha"><div class="elcontainer tight stacked left-aligned"><div class="form-header"><h3>Stay in the know.</h3></div><div class="sortables"><div class="formEl fieldtype-input required" data-validation-type="1" data-label="First Name" style="display: inline-block; width: 50%;"><label>First Name<span class="indicator required">*</span></label><input type="text" placeholder="" name="data[fname]"></div><div class="formEl fieldtype-input required" data-validation-type="1" data-label="Last Name" style="display: inline-block; width: 50%;"><label>Last Name<span class="indicator required">*</span></label><input type="text" placeholder="" name="data[lname]"></div><div class="formEl fieldtype-input required" data-validation-type="1" data-label="Business" style="display: inline-block; width: 100%;"><label>Business<span class="indicator required">*</span></label><input type="text" placeholder="" name="data[business]"></div><div class="formEl fieldtype-input required" data-validation-type="1" data-label="Email" style="display: inline-block; width: 100%;"><label>Email<span class="indicator required">*</span></label><input type="text" placeholder="" name="data[email]"></div><div class="formEl fieldtype-checkbox required" dataname="listGroups" data-validation-type="1" data-label="Lists" style="display: inline-block; width: 100%;"><h3>Lists<span class="indicator required">*</span></h3><div class="option-container"><label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="50663">Castle Hills Updates</label><label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="50651">Frisco Updates</label><label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="50652">Lakewood Updates</label><label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="50653">MacArthur Updates</label><label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="50654">McKinney Updates</label><label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="50655">North Coit Updates</label><label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="50656">Park Cities Updates</label><label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="50658">Preston Parker Updates</label><label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="50666">Prosper Updates</label><label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="50659">Richardson Updates</label><label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="50661">Southlake Updates</label><label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="50662">Turtle Creek Updates</label><label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="52215">Digital Settlement Updates</label><label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="64627">Avanza Implementos eNewsletter, Monthly Stats and Class Information</label></div></div><div class="submit-container"><div class="g-recaptcha" data-sitekey="6LeCZCcUAAAAALhxcQ5fN80W6Wa2K3GqRQK6WRjA" data-callback="onValidCaptchaResponse" data-size="invisible"><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeCZCcUAAAAALhxcQ5fN80W6Wa2K3GqRQK6WRjA&amp;co=aHR0cDovL2xvY2FsaG9zdDozMDAw&amp;hl=es-419&amp;v=zLD1nfkNCJC1kEswSRdSyd-p&amp;size=invisible&amp;cb=b9px6vl7p3kk" width="256" height="60" role="presentation" name="a-sy6lnxk8q23" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div><input type="submit" value="SUBMIT" class="btn btn-submit" style="cursor: pointer;"></div></div><div class="hidden-container"></div></div></form><img alt="" src="https://app.icontact.com/icp/core/signup/tracking.gif?id=635&amp;cid=1713502&amp;lid=26484">
</div></td>
</html>