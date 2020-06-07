<script>
  function popUp(){

    swal({
  title: "Welcome Back",
  text: "Please login/register to proceed",
  icon: "",
  button:"OK",
});
  }
</script>

<!-- <?php
echo "Name: ".$_GET['name']." &nbsp;&nbsp;&nbsp;  Email: " .$_GET['email'];
echo "Name: ".$_GET['phone']." &nbsp;&nbsp;&nbsp;  Email: " .$_GET['r_type'];
echo "Name: ".$_GET['unique_id']." &nbsp;&nbsp;&nbsp;  Email: " .$_GET['seat'];
//$image = $_GET['image'];
?>  -->
<!-- <img src="<?php echo $image ?>"> -->

 <?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $r_type = $_GET['r_type'];
    $event = $_GET['event'];
    $ticket = $_GET['ticket'];
    $unique_id = $_GET['unique_id'];
    $seat = $_GET['seat'];
    $image = $_GET['image'];

  ?>
  <!-- <body>
<form  action="page2.php"  id="myForm" >
 
	
	<input type="text" id="name" name="name" value="<?php echo $name ?>" readonly=""><br>
	<input type="text" id="email" name="email" value="<?php echo $email ?>" readonly=""><br>
	<input type="text" id="phone" name="phone" value="<?php echo $phone ?>" readonly=""><br>
	<input type="text" id="r_type" name="r_type" value="<?php echo $r_type ?>" readonly=""><br>
	<input type="text" id="event" name="event" value="<?php echo $event ?>" readonly=""><br>
	<input type="text" id="ticket" name="ticket" value="<?php echo $ticket ?>" readonly=""><br>
	<input type="text" id="unique_id" name="unique_id" value="<?php echo $unique_id ?>" readonly=""><br>
	<input type="text" id="seat" name="seat" value="<?php echo $seat ?>" readonly=""><br>
	<input type="text" id="image" name="image" value="<?php echo $image ?>" readonly=""><br>

    

	



	<input type="submit" name="Next Page">
 </form>
</body> -->



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US"  class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F201565042891050" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F201565042891050" title="oEmbed Form">
<meta property="og:title" content="Event Registration Form" >
<meta property="og:url" content="https://form.jotform.com/201565042891050" >
<meta property="og:description" content="Please click the link to complete this form.">
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.com/201565042891050" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Event Registration Form</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.18254" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.18254" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.18254" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.18254" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.18254" />
<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    body, html{
        margin:0;
        padding:0;
        background:#fff;
    }

    .form-all{
        margin:0px auto;
        padding-top:20px;
        width:690px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*__INSPECT_SEPERATOR__*/
.form-label.form-label-auto {
        
      display: block;
      float: none;
      text-align: left;
      width: 100%;
    
      }
    /* Injected CSS Code */
</style>

<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.18254" type="text/javascript"></script>
<script type="text/javascript">
  JotForm.init(function(){
  JotForm.newDefaultTheme = false;
  JotForm.newPaymentUIForNewCreatedForms = true;
      JotForm.alterTexts(undefined);
  JotForm.clearFieldOnHide="disable";
  JotForm.submitError="jumpToFirstError";
    /*INIT-END*/
  });

   JotForm.prepareCalculationsOnTheFly([null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"description":"","name":"name","qid":"16","text":"Name","type":"control_fullname"},{"description":"","name":"email","qid":"17","text":"Email","type":"control_fullname"},{"description":"","name":"phone","qid":"18","text":"Phone","type":"control_fullname"},{"description":"","name":"eventType","qid":"19","text":"Event Type","type":"control_fullname"},{"description":"","name":"registrationType","qid":"20","text":"Registration Type","type":"control_fullname"},{"description":"","name":"numberOf","qid":"21","text":"Number Of Tickets","type":"control_fullname"},null,{"description":"","name":"uniqueId","qid":"23","text":"Unique ID","type":"control_fullname"},{"description":"","name":"seatingArrangement","qid":"24","text":"Seating Arrangement","type":"control_fullname"},{"name":"submit","qid":"25","text":"Submit","type":"control_button"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"description":"","name":"name","qid":"16","text":"Name","type":"control_fullname"},{"description":"","name":"email","qid":"17","text":"Email","type":"control_fullname"},{"description":"","name":"phone","qid":"18","text":"Phone","type":"control_fullname"},{"description":"","name":"eventType","qid":"19","text":"Event Type","type":"control_fullname"},{"description":"","name":"registrationType","qid":"20","text":"Registration Type","type":"control_fullname"},{"description":"","name":"numberOf","qid":"21","text":"Number Of Tickets","type":"control_fullname"},null,{"description":"","name":"uniqueId","qid":"23","text":"Unique ID","type":"control_fullname"},{"description":"","name":"seatingArrangement","qid":"24","text":"Seating Arrangement","type":"control_fullname"},{"name":"submit","qid":"25","text":"Submit","type":"control_button"}]);}, 20); 
</script>
<script>
  function myFunction()
  {
    document.getElementById("myForm").submit();
  }
</script>
</head>
<body onload="myFunction()">
<form class="jotform-form" action="https://submit.jotform.com/submit/201565042891050/" method="post" name="form_201565042891050" id="myForm" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="201565042891050" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li class="form-line" data-type="control_fullname" id="id_16">
        <label class="form-label form-label-top form-label-auto" id="label_16" for="first_16"> Name </label>
        <div id="cid_16" class="form-input-wide">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_16" name="q16_name[first]" class="form-textbox" size="10" value="<?php echo $name ?>" data-component="first" aria-labelledby="label_16 sublabel_16_first" />
              <label class="form-sub-label" for="first_16" id="sublabel_16_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_16" name="q16_name[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_16 sublabel_16_last" />
              <label class="form-sub-label" for="last_16" id="sublabel_16_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_17">
        <label class="form-label form-label-top form-label-auto" id="label_17" for="first_17"> Email </label>
        <div id="cid_17" class="form-input-wide">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_17" name="q17_email[first]" class="form-textbox" size="10" value="<?php echo $email ?>" data-component="first" aria-labelledby="label_17 sublabel_17_first" />
              <label class="form-sub-label" for="first_17" id="sublabel_17_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_17" name="q17_email[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_17 sublabel_17_last" />
              <label class="form-sub-label" for="last_17" id="sublabel_17_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_18">
        <label class="form-label form-label-top form-label-auto" id="label_18" for="first_18"> Phone </label>
        <div id="cid_18" class="form-input-wide">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_18" name="q18_phone[first]" class="form-textbox" size="10" value="<?php echo $phone ?>" data-component="first" aria-labelledby="label_18 sublabel_18_first" />
              <label class="form-sub-label" for="first_18" id="sublabel_18_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_18" name="q18_phone[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_18 sublabel_18_last" />
              <label class="form-sub-label" for="last_18" id="sublabel_18_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_19">
        <label class="form-label form-label-top form-label-auto" id="label_19" for="first_19"> Event Type </label>
        <div id="cid_19" class="form-input-wide">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_19" name="q19_eventType[first]" class="form-textbox" size="10" value="<?php echo $event ?>" data-component="first" aria-labelledby="label_19 sublabel_19_first" />
              <label class="form-sub-label" for="first_19" id="sublabel_19_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_19" name="q19_eventType[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_19 sublabel_19_last" />
              <label class="form-sub-label" for="last_19" id="sublabel_19_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_20">
        <label class="form-label form-label-top form-label-auto" id="label_20" for="first_20"> Registration Type </label>
        <div id="cid_20" class="form-input-wide">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_20" name="q20_registrationType[first]" class="form-textbox" size="10" value="<?php echo $r_type ?>" data-component="first" aria-labelledby="label_20 sublabel_20_first" />
              <label class="form-sub-label" for="first_20" id="sublabel_20_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_20" name="q20_registrationType[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_20 sublabel_20_last" />
              <label class="form-sub-label" for="last_20" id="sublabel_20_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_21">
        <label class="form-label form-label-top form-label-auto" id="label_21" for="first_21"> Number Of Tickets </label>
        <div id="cid_21" class="form-input-wide">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_21" name="q21_numberOf[first]" class="form-textbox" size="10" value="<?php echo $ticket ?>" data-component="first" aria-labelledby="label_21 sublabel_21_first" />
              <label class="form-sub-label" for="first_21" id="sublabel_21_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_21" name="q21_numberOf[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_21 sublabel_21_last" />
              <label class="form-sub-label" for="last_21" id="sublabel_21_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_23">
        <label class="form-label form-label-top form-label-auto" id="label_23" for="first_23"> Unique ID </label>
        <div id="cid_23" class="form-input-wide">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_23" name="q23_uniqueId[first]" class="form-textbox" size="10" value="<?php echo $unique_id ?>" data-component="first" aria-labelledby="label_23 sublabel_23_first" />
              <label class="form-sub-label" for="first_23" id="sublabel_23_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_23" name="q23_uniqueId[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_23 sublabel_23_last" />
              <label class="form-sub-label" for="last_23" id="sublabel_23_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_24">
        <label class="form-label form-label-top form-label-auto" id="label_24" for="first_24"> Seating Arrangement </label>
        <div id="cid_24" class="form-input-wide">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_24" name="q24_seatingArrangement[first]" class="form-textbox" size="10" value="<?php echo $seat ?>" data-component="first" aria-labelledby="label_24 sublabel_24_first" />
              <label class="form-sub-label" for="first_24" id="sublabel_24_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_24" name="q24_seatingArrangement[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_24 sublabel_24_last" />
              <label class="form-sub-label" for="last_24" id="sublabel_24_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_25">
        <div id="cid_25" class="form-input-wide">
          <div style="margin-left:156px" data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_25" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" id="simple_spc" name="simple_spc" value="201565042891050" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "201565042891050-201565042891050";
  </script>
  <div class="formFooter-heightMask">
  </div>
  <div class="formFooter f6">
    <a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=201565042891050&utm_content=jotform_logo&utm_campaign=powered_by_jotform_le" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo/logo-new@1x.png" alt="Jotform Logo" style="height: 44px;"></a>
    <div class="formFooter-rightSide">
      <span class="formFooter-text">
        Now create your own JotForm - It's free!
      </span>
      <a class="formFooter-button" href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=201565042891050&utm_content=jotform_button&utm_campaign=powered_by_jotform_le" target="_blank">Create your own JotForm</a>
    </div>
  </div>
</form></body>
</html>




