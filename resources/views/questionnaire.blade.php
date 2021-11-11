@extends('layouts.app')

@section('content')

<!-- ========== HEADER ========== -->
<header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide"
    data-hs-header-options='{
      "fixMoment": 1000,
      "fixEffect": "slide"
    }'>
</header>
<!-- ========== END HEADER ========== -->
<!-- Content -->
<div class="container content-space-2">
  <!-- Step Form -->
  <form class="js-step-form"
        data-hs-step-form-options='{
          "progressSelector": "#uploadResumeStepFormProgress",
          "stepsSelector": "#uploadResumeStepFormContent",
          "endSelector": "#uploadResumeFinishBtn",
          "isValidate": false
        }'>
    <div class="row">
      <div class="col-lg-4">
        <!-- Sticky Block -->
        <div id="stickyBlockStartPoint">
          <div class="js-sticky-block"
               data-hs-sticky-block-options='{
                 "parentSelector": "#stickyBlockStartPoint",
                 "breakpoint": "lg",
                 "startPoint": "#stickyBlockStartPoint",
                 "endPoint": "#stickyBlockEndPoint",
                 "stickyOffsetTop": 20,
                 "stickyOffsetBottom": 0
               }'>
            <!-- Step -->
            <ul id="uploadResumeStepFormProgress" class="js-step-progress step step-icon-xs step-border-last-0 mt-5">
              <li class="step-item">
                <a class="step-content-wrapper" href="javascript:;"
                   data-hs-step-form-next-options='{
                    "targetSelector": "#uploadResumeStepBasics"
                  }'>
                  <span class="step-icon step-icon-soft-dark">1</span>
                  <div class="step-content">
                    <span class="step-title">Inscription</span>
                    <span class="step-title-description step-text">General info about you</span>
                  </div>
                </a>
              </li>

              <li class="step-item">
                <a class="step-content-wrapper" href="javascript:;"
                   data-hs-step-form-next-options='{
                    "targetSelector": "#uploadResumeStepEducation"
                  }'>
                  <span class="step-icon step-icon-soft-dark">2</span>
                  <div class="step-content">
                    <span class="step-title">Education</span>
                    <span class="step-title-description step-text">Add education info</span>
                  </div>
                </a>
              </li>

              <li class="step-item">
                <a class="step-content-wrapper" href="javascript:;"
                   data-hs-step-form-next-options='{
                    "targetSelector": "#uploadResumeStepWork"
                  }'>
                  <span class="step-icon step-icon-soft-dark">3</span>
                  <div class="step-content">
                    <span class="step-title">Work experience</span>
                    <span class="step-title-description step-text">Add work experience</span>
                  </div>
                </a>
              </li>

              <li class="step-item">
                <a class="step-content-wrapper" href="javascript:;"
                   data-hs-step-form-next-options='{
                    "targetSelector": "#uploadResumeStepJobSkills"
                  }'>
                  <span class="step-icon step-icon-soft-dark">4</span>
                  <div class="step-content">
                    <span class="step-title">Skills</span>
                    <span class="step-title-description step-text">Add skills</span>
                  </div>
                </a>
              </li>

              <li class="step-item">
                <a class="step-content-wrapper" href="javascript:;"
                   data-hs-step-form-next-options='{
                    "targetSelector": "#uploadResumeStepTypeOfJob"
                  }'>
                  <span class="step-icon step-icon-soft-dark">5</span>
                  <div class="step-content">
                    <span class="step-title">Job type</span>
                    <span class="step-title-description step-text">The type of job you are looking for</span>
                  </div>
                </a>
              </li>
            </ul>
            <!-- End Step -->
          </div>
        </div>
        <!-- End Sticky Block -->
      </div>
      <!-- End Col -->

      <div id="formContainer" class="col-lg-8">
        <!-- Content Step Form -->
        <div id="uploadResumeStepFormContent">
          <!-- Card -->
          <div id="uploadResumeStepBasics" class="card active">
            <!-- Header -->
            <div class="card-header bg-img-start" style="background-image: url(../assets/svg/components/card-1.svg);">
              <div class="flex-grow-1">
                <span class="d-lg-none">Step 1 of 5</span>
                <h3 class="card-header-title">Basics</h3>
              </div>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <!-- Form -->
              <div class="mb-4">
                <label for="adress" class="form-label">Adresse postale du projet</label>
                <input type="text" class="form-control" name="adress" id="adressLabel" placeholder="Veuillez saisir l'adresse du projet" aria-label="Adresse postale du projet">
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label for="lastNameLabel" class="form-label">Last name</label>
                <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Williams" aria-label="Williams">
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label for="countryLabel" class="form-label">Country</label>

                <!-- Select -->
                <select id="countryLabel" class="form-select" name="countrySelect">
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Aland Islands</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia (Plurinational State of)</option>
                  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                  <option value="BA">Bosnia and Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BR">Brazil</option>
                  <option value="IO">British Indian Ocean Territory</option>
                  <option value="BN">Brunei Darussalam</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="CV">Cabo Verde</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CX">Christmas Island</option>
                  <option value="CC">Cocos (Keeling) Islands</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CW">Curaçao</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="CI">Côte d'Ivoire</option>
                  <option value="CD">Democratic Republic of the Congo</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GB">England</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FK">Falkland Islands</option>
                  <option value="FO">Faroe Islands</option>
                  <option value="FM">Federated States of Micronesia</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GF">French Guiana</option>
                  <option value="PF">French Polynesia</option>
                  <option value="TF">French Southern Territories</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GP">Guadeloupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GG">Guernsey</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="VA">Holy See</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran (Islamic Republic of)</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IM">Isle of Man</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JE">Jersey</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Laos</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macau</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="YT">Mayotte</option>
                  <option value="MX">Mexico</option>
                  <option value="MD">Moldova</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="ME">Montenegro</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="NC">New Caledonia</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="KP">North Korea</option>
                  <option value="MK">North Macedonia</option>
                  <option value="GB">Northern Ireland</option>
                  <option value="MP">Northern Markna Islands</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PN">Pitcairn</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="CG">Republic of the Congo</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russia</option>
                  <option value="RW">Rwanda</option>
                  <option value="RE">Réunion</option>
                  <option value="BL">Saint Barthélemy</option>
                  <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                  <option value="KN">Saint Kitts and Nevis</option>
                  <option value="LC">Saint Lucia</option>
                  <option value="MF">Saint Martin</option>
                  <option value="PM">Saint Pierre and Miquelon</option>
                  <option value="VC">Saint Vincent and the Grenadines</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome and Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="GB">Scotland</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SX">Sint Maarten</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="GS">South Georgia and the South Sandwich Islands</option>
                  <option value="KR">South Korea</option>
                  <option value="SS">South Sudan</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="PS">State of Palestine</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SJ">Svalbard and Jan Mayen</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syrian Arab Republic</option>
                  <option value="TW">Taiwan</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania</option>
                  <option value="TH">Thailand</option>
                  <option value="TL">Timor-Leste</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="TC">Turks and Caicos Islands</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="UM">United States Minor Outlying Islands</option>
                  <option value="US">United States of America</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela (Bolivarian Republic of)</option>
                  <option value="VN">Vietnam</option>
                  <option value="VG">Virgin Islands (British)</option>
                  <option value="VI">Virgin Islands (U.S.)</option>
                  <option value="GB">Wales</option>
                  <option value="WF">Wallis and Futuna</option>
                  <option value="EH">Western Sahara</option>
                  <option value="YE">Yemen</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
                </select>
                <!-- End Select -->
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label class="form-label">Employment eligibility</label>

                <div class="d-grid gap-2">
                  <!-- Radio Check -->
                  <label class="form-control" for="employmentRadio1">
                    <span class="form-check">
                      <input type="radio" class="form-check-input" name="employmentRadioName" id="employmentRadio1" checked>
                      <span class="form-check-label">Authorized to work in the UK for any employer</span>
                    </span>
                  </label>
                  <!-- End Radio Check -->

                  <!-- Radio Check -->
                  <label class="form-control" for="employmentRadio2">
                    <span class="form-check">
                      <input type="radio" class="form-check-input" name="employmentRadioName" id="employmentRadio2">
                      <span class="form-check-label">Sponsorship required to work in the UK</span>
                    </span>
                  </label>
                  <!-- End Radio Check -->

                  <!-- Radio Check -->
                  <label class="form-control" for="employmentRadio3">
                    <span class="form-check">
                      <input type="radio" class="form-check-input" name="employmentRadioName" id="employmentRadio3">
                      <span class="form-check-label">No specified</span>
                    </span>
                  </label>
                  <!-- End Radio Check -->
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label for="contactInformationLabel" class="form-label">Contact information</label>
                <p class="small mt-n2">Only provided to employers you apply to respond to.</p>
                <input type="email" class="form-control" name="contactInformationName" id="contactInformationLabel" placeholder="email@site.com" aria-label="email@site.com">
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label for="phoneLabel" class="form-label">Phone number</label>
                <p class="small mt-n2">Only provided to employers you apply to respond to.</p>
                <div class="input-group">
                  <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx"
                         data-hs-mask-options='{
                          "mask": "+{0}(000)000-00-00"
                        }'>

                  <!-- Select -->
                  <select class="form-select" name="phoneSelect" style="max-width: 8rem;">
                    <option value="Mobile" selected>Mobile</option>
                    <option value="Home">Home</option>
                    <option value="Work">Work</option>
                    <option value="Fax">Fax</option>
                    <option value="Direct">Direct</option>
                  </select>
                  <!-- End Select -->
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <!-- Check -->
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="callPermissionCheckbox">
                  <label class="form-check-label" for="callPermissionCheckbox">Call and send me text messages at this phone number</label>
                </div>
                <!-- End Check -->
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label for="CVPrivacySwitch" class="form-label">CV privacy settings <span class="badge bg-primary text-uppercase ms-1">PRO</span></label>

                <div class="row">
                  <div class="col">
                    <label for="CVPrivacySwitch" class="form-label text-body">Your CV is not visible. Employers cannot find your CV, but you can attach it when you apply to a job.</label>
                  </div>

                  <div class="col-auto">
                    <!-- Form Switch -->
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="CVPrivacySwitch">
                    </div>
                    <!-- End Form Switch -->
                  </div>
                </div>
                <!-- End Row -->
              </div>
              <!-- End Form -->
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer pt-0">
              <div class="d-flex justify-content-end align-items-center">
                <button type="button" class="btn btn-primary"
                        data-hs-step-form-next-options='{
                          "targetSelector": "#uploadResumeStepEducation"
                        }'>
                  Save and continue <i class="bi-chevron-right small ms-1"></i>
                </button>
              </div>
            </div>
            <!-- End Footer -->
          </div>
          <!-- End Card -->

          <div id="uploadResumeStepEducation" class="card" style="display: none;">
            <!-- Header -->
            <div class="card-header bg-img-start" style="background-image: url(../assets/svg/components/card-1.svg);">
              <div class="flex-grow-1">
                <span class="d-lg-none">Step 2 of 5</span>
                <h3 class="card-header-title">Education</h3>
              </div>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <div class="js-add-field"
                   data-hs-add-field-options='{
                      "template": "#addEducationFieldTemplate",
                      "container": "#addEducationFieldContainer",
                      "defaultCreated": 0
                    }'>
                <!-- Form -->
                <div class="mb-4">
                  <label for="educationLabel" class="form-label">Education</label>

                  <!-- Select -->
                  <select id="educationLabel" class="form-select" name="educationSelect">
                    <option value="education1">Middle school education</option>
                    <option value="education2">High school diploma</option>
                    <option value="education3">Associate's degree</option>
                    <option value="education4">Bachelor's degree</option>
                    <option value="education5">Master's degree</option>
                    <option value="education6">Doctoral degree</option>
                  </select>
                  <!-- End Select -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="fieldOfStudyNameLabel" class="form-label">Field of study</label>
                  <input type="text" class="form-control" name="fieldOfStudyName" id="fieldOfStudyNameLabel" placeholder="Accounting" aria-label="Accounting">
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="schoolNameLabel" class="form-label">School</label>
                  <input type="text" class="form-control" name="schoolName" id="schoolNameLabel" placeholder="University of Oxford" aria-label="University of Oxford">
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="educationCountryLabel" class="form-label">Country</label>

                  <!-- Select -->
                  <select id="educationCountryLabel" class="form-select" name="educationCountrySelect">
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Aland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia (Plurinational State of)</option>
                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="CV">Cabo Verde</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curaçao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="CI">Côte d'Ivoire</option>
                    <option value="CD">Democratic Republic of the Congo</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GB">England</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FM">Federated States of Micronesia</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="VA">Holy See</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran (Islamic Republic of)</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Laos</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macau</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="KP">North Korea</option>
                    <option value="MK">North Macedonia</option>
                    <option value="GB">Northern Ireland</option>
                    <option value="MP">Northern Markna Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="CG">Republic of the Congo</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russia</option>
                    <option value="RW">Rwanda</option>
                    <option value="RE">Réunion</option>
                    <option value="BL">Saint Barthélemy</option>
                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="GB">Scotland</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="KR">South Korea</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="PS">State of Palestine</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="US">United States of America</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela (Bolivarian Republic of)</option>
                    <option value="VN">Vietnam</option>
                    <option value="VG">Virgin Islands (British)</option>
                    <option value="VI">Virgin Islands (U.S.)</option>
                    <option value="GB">Wales</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                  </select>
                  <!-- End Select -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="schoolTimePeriodCheckbox" class="form-label">Time period</label>

                  <!-- Check -->
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="schoolTimePeriodCheckbox">
                    <label class="form-check-label" for="schoolTimePeriodCheckbox">Currently entitled</label>
                  </div>
                  <!-- End Check -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="schoolFromMonthLabel" class="form-label">From</label>

                  <div class="row gx-2">
                    <div class="col-sm-8 mb-2 mb-sm-0">
                      <!-- Select -->
                      <select id="schoolFromMonthLabel" class="form-select" name="schoolFromMonthSelect">
                        <option value="month1">January</option>
                        <option value="month2">February</option>
                        <option value="month3">March</option>
                        <option value="month4">April</option>
                        <option value="month5">May</option>
                        <option value="month6">June</option>
                        <option value="month7">July</option>
                        <option value="month8">August</option>
                        <option value="month9">September</option>
                        <option value="month10">October</option>
                        <option value="month11">November</option>
                        <option value="month12">December</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-4">
                      <!-- Select -->
                      <select class="form-select" name="schoolFromYearSelect">
                        <option value="yearBuiltSelect2017">2017</option>
                        <option value="yearBuiltSelect2016">2016</option>
                        <option value="yearBuiltSelect2015">2015</option>
                        <option value="yearBuiltSelect2014">2014</option>
                        <option value="yearBuiltSelect2013">2013</option>
                        <option value="yearBuiltSelect2012">2012</option>
                        <option value="yearBuiltSelect2011">2011</option>
                        <option value="yearBuiltSelect2010">2010</option>
                        <option value="yearBuiltSelect2009">2009</option>
                        <option value="yearBuiltSelect2008">2008</option>
                        <option value="yearBuiltSelect2007">2007</option>
                        <option value="yearBuiltSelect2006">2006</option>
                        <option value="yearBuiltSelect2005">2005</option>
                        <option value="yearBuiltSelect2004">2004</option>
                        <option value="yearBuiltSelect2003">2003</option>
                        <option value="yearBuiltSelect2002">2002</option>
                        <option value="yearBuiltSelect2001">2001</option>
                        <option value="yearBuiltSelect2000">2000</option>
                        <option value="yearBuiltSelect1999">1999</option>
                        <option value="yearBuiltSelect1998">1998</option>
                        <option value="yearBuiltSelect1997">1997</option>
                        <option value="yearBuiltSelect1996">1996</option>
                        <option value="yearBuiltSelect1995">1995</option>
                        <option value="yearBuiltSelect1994">1994</option>
                        <option value="yearBuiltSelect1993">1993</option>
                        <option value="yearBuiltSelect1992">1992</option>
                        <option value="yearBuiltSelect1991">1991</option>
                        <option value="yearBuiltSelect1990">1990</option>
                        <option value="yearBuiltSelect1989">1989</option>
                        <option value="yearBuiltSelect1988">1988</option>
                        <option value="yearBuiltSelect1987">1987</option>
                        <option value="yearBuiltSelect1986">1986</option>
                        <option value="yearBuiltSelect1985">1985</option>
                        <option value="yearBuiltSelectOlder">Older</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label">To</label>

                  <div class="row gx-2">
                    <div class="col-sm-8 mb-2 mb-sm-0">
                      <!-- Select -->
                      <select class="form-select" name="schoolMonthToSelect">
                        <option value="month1">January</option>
                        <option value="month2">February</option>
                        <option value="month3">March</option>
                        <option value="month4">April</option>
                        <option value="month5">May</option>
                        <option value="month6">June</option>
                        <option value="month7">July</option>
                        <option value="month8">August</option>
                        <option value="month9">September</option>
                        <option value="month10">October</option>
                        <option value="month11">November</option>
                        <option value="month12">December</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-4">
                      <!-- Select -->
                      <select class="form-select" name="schoolToSelect">
                        <option value="yearBuiltSelect2017">2017</option>
                        <option value="yearBuiltSelect2016">2016</option>
                        <option value="yearBuiltSelect2015">2015</option>
                        <option value="yearBuiltSelect2014">2014</option>
                        <option value="yearBuiltSelect2013">2013</option>
                        <option value="yearBuiltSelect2012">2012</option>
                        <option value="yearBuiltSelect2011">2011</option>
                        <option value="yearBuiltSelect2010">2010</option>
                        <option value="yearBuiltSelect2009">2009</option>
                        <option value="yearBuiltSelect2008">2008</option>
                        <option value="yearBuiltSelect2007">2007</option>
                        <option value="yearBuiltSelect2006">2006</option>
                        <option value="yearBuiltSelect2005">2005</option>
                        <option value="yearBuiltSelect2004">2004</option>
                        <option value="yearBuiltSelect2003">2003</option>
                        <option value="yearBuiltSelect2002">2002</option>
                        <option value="yearBuiltSelect2001">2001</option>
                        <option value="yearBuiltSelect2000">2000</option>
                        <option value="yearBuiltSelect1999">1999</option>
                        <option value="yearBuiltSelect1998">1998</option>
                        <option value="yearBuiltSelect1997">1997</option>
                        <option value="yearBuiltSelect1996">1996</option>
                        <option value="yearBuiltSelect1995">1995</option>
                        <option value="yearBuiltSelect1994">1994</option>
                        <option value="yearBuiltSelect1993">1993</option>
                        <option value="yearBuiltSelect1992">1992</option>
                        <option value="yearBuiltSelect1991">1991</option>
                        <option value="yearBuiltSelect1990">1990</option>
                        <option value="yearBuiltSelect1989">1989</option>
                        <option value="yearBuiltSelect1988">1988</option>
                        <option value="yearBuiltSelect1987">1987</option>
                        <option value="yearBuiltSelect1986">1986</option>
                        <option value="yearBuiltSelect1985">1985</option>
                        <option value="yearBuiltSelectOlder">Older</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Form -->

                <!-- Container For Input Field -->
                <div id="addEducationFieldContainer"></div>

                <a href="javascript:;" class="js-create-field form-link">
                  <i class="bi-plus-circle me-1"></i> Add education
                </a>
              </div>

              <!-- Add Education Input Field -->
              <div id="addEducationFieldTemplate" style="display: none;">
                <hr>

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label">Education</label>

                  <!-- Select -->
                  <select class="form-select" data-name="additionalEducationSelect">
                    <option value="education1">Middle school education</option>
                    <option value="education2">High school diploma</option>
                    <option value="education3">Associate's degree</option>
                    <option value="education4">Bachelor's degree</option>
                    <option value="education5">Master's degree</option>
                    <option value="education6">Doctoral degree</option>
                  </select>
                  <!-- End Select -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="addFieldOfStudyNameLabel" class="form-label">Field of study</label>

                  <input type="text" class="form-control" data-name="addFieldOfStudyName" id="addFieldOfStudyNameLabel" placeholder="Accounting" aria-label="Accounting">
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="addSchoolNameLabel" class="form-label">School</label>

                  <input type="text" class="form-control" data-name="addSchoolName" id="addSchoolNameLabel" placeholder="University of Oxford" aria-label="University of Oxford">
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label">Country</label>

                  <!-- Select -->
                  <select class="form-select" data-name="additionalEducationCountrySelect">
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Aland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia (Plurinational State of)</option>
                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="CV">Cabo Verde</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curaçao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="CI">Côte d'Ivoire</option>
                    <option value="CD">Democratic Republic of the Congo</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GB">England</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FM">Federated States of Micronesia</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="VA">Holy See</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran (Islamic Republic of)</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Laos</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macau</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="KP">North Korea</option>
                    <option value="MK">North Macedonia</option>
                    <option value="GB">Northern Ireland</option>
                    <option value="MP">Northern Markna Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="CG">Republic of the Congo</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russia</option>
                    <option value="RW">Rwanda</option>
                    <option value="RE">Réunion</option>
                    <option value="BL">Saint Barthélemy</option>
                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="GB">Scotland</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="KR">South Korea</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="PS">State of Palestine</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="US">United States of America</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela (Bolivarian Republic of)</option>
                    <option value="VN">Vietnam</option>
                    <option value="VG">Virgin Islands (British)</option>
                    <option value="VI">Virgin Islands (U.S.)</option>
                    <option value="GB">Wales</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                  </select>
                  <!-- End Select -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="addSchoolTimePeriodCheckbox" class="form-label">Time period</label>

                  <!-- Check -->
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="addSchoolTimePeriodCheckbox">
                    <label class="form-check-label" for="addSchoolTimePeriodCheckbox">Currently entitled</label>
                  </div>
                  <!-- End Check -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label">From</label>

                  <div class="row gx-2">
                    <div class="col-sm-8 mb-2 mb-sm-0">
                      <!-- Select -->
                      <select class="form-select" data-name="additionalSchoolFromMonthSelect">
                        <option value="month1">January</option>
                        <option value="month2">February</option>
                        <option value="month3">March</option>
                        <option value="month4">April</option>
                        <option value="month5">May</option>
                        <option value="month6">June</option>
                        <option value="month7">July</option>
                        <option value="month8">August</option>
                        <option value="month9">September</option>
                        <option value="month10">October</option>
                        <option value="month11">November</option>
                        <option value="month12">December</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-4">
                      <!-- Select -->
                      <select class="form-select" data-name="additionalSchoolFromYearSelect">
                        <option value="yearBuiltSelect2017">2017</option>
                        <option value="yearBuiltSelect2016">2016</option>
                        <option value="yearBuiltSelect2015">2015</option>
                        <option value="yearBuiltSelect2014">2014</option>
                        <option value="yearBuiltSelect2013">2013</option>
                        <option value="yearBuiltSelect2012">2012</option>
                        <option value="yearBuiltSelect2011">2011</option>
                        <option value="yearBuiltSelect2010">2010</option>
                        <option value="yearBuiltSelect2009">2009</option>
                        <option value="yearBuiltSelect2008">2008</option>
                        <option value="yearBuiltSelect2007">2007</option>
                        <option value="yearBuiltSelect2006">2006</option>
                        <option value="yearBuiltSelect2005">2005</option>
                        <option value="yearBuiltSelect2004">2004</option>
                        <option value="yearBuiltSelect2003">2003</option>
                        <option value="yearBuiltSelect2002">2002</option>
                        <option value="yearBuiltSelect2001">2001</option>
                        <option value="yearBuiltSelect2000">2000</option>
                        <option value="yearBuiltSelect1999">1999</option>
                        <option value="yearBuiltSelect1998">1998</option>
                        <option value="yearBuiltSelect1997">1997</option>
                        <option value="yearBuiltSelect1996">1996</option>
                        <option value="yearBuiltSelect1995">1995</option>
                        <option value="yearBuiltSelect1994">1994</option>
                        <option value="yearBuiltSelect1993">1993</option>
                        <option value="yearBuiltSelect1992">1992</option>
                        <option value="yearBuiltSelect1991">1991</option>
                        <option value="yearBuiltSelect1990">1990</option>
                        <option value="yearBuiltSelect1989">1989</option>
                        <option value="yearBuiltSelect1988">1988</option>
                        <option value="yearBuiltSelect1987">1987</option>
                        <option value="yearBuiltSelect1986">1986</option>
                        <option value="yearBuiltSelect1985">1985</option>
                        <option value="yearBuiltSelectOlder">Older</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label">To</label>

                  <div class="row gx-2">
                    <div class="col-sm-8 mb-2 mb-sm-0">
                      <!-- Select -->
                      <select class="form-select" data-name="additionalSchoolFromMonthSelect">
                        <option value="month1">January</option>
                        <option value="month2">February</option>
                        <option value="month3">March</option>
                        <option value="month4">April</option>
                        <option value="month5">May</option>
                        <option value="month6">June</option>
                        <option value="month7">July</option>
                        <option value="month8">August</option>
                        <option value="month9">September</option>
                        <option value="month10">October</option>
                        <option value="month11">November</option>
                        <option value="month12">December</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-4">
                      <!-- Select -->
                      <select class="form-select" data-name="additionalSchoolToSelect">
                        <option value="yearBuiltSelect2017">2017</option>
                        <option value="yearBuiltSelect2016">2016</option>
                        <option value="yearBuiltSelect2015">2015</option>
                        <option value="yearBuiltSelect2014">2014</option>
                        <option value="yearBuiltSelect2013">2013</option>
                        <option value="yearBuiltSelect2012">2012</option>
                        <option value="yearBuiltSelect2011">2011</option>
                        <option value="yearBuiltSelect2010">2010</option>
                        <option value="yearBuiltSelect2009">2009</option>
                        <option value="yearBuiltSelect2008">2008</option>
                        <option value="yearBuiltSelect2007">2007</option>
                        <option value="yearBuiltSelect2006">2006</option>
                        <option value="yearBuiltSelect2005">2005</option>
                        <option value="yearBuiltSelect2004">2004</option>
                        <option value="yearBuiltSelect2003">2003</option>
                        <option value="yearBuiltSelect2002">2002</option>
                        <option value="yearBuiltSelect2001">2001</option>
                        <option value="yearBuiltSelect2000">2000</option>
                        <option value="yearBuiltSelect1999">1999</option>
                        <option value="yearBuiltSelect1998">1998</option>
                        <option value="yearBuiltSelect1997">1997</option>
                        <option value="yearBuiltSelect1996">1996</option>
                        <option value="yearBuiltSelect1995">1995</option>
                        <option value="yearBuiltSelect1994">1994</option>
                        <option value="yearBuiltSelect1993">1993</option>
                        <option value="yearBuiltSelect1992">1992</option>
                        <option value="yearBuiltSelect1991">1991</option>
                        <option value="yearBuiltSelect1990">1990</option>
                        <option value="yearBuiltSelect1989">1989</option>
                        <option value="yearBuiltSelect1988">1988</option>
                        <option value="yearBuiltSelect1987">1987</option>
                        <option value="yearBuiltSelect1986">1986</option>
                        <option value="yearBuiltSelect1985">1985</option>
                        <option value="yearBuiltSelectOlder">Older</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Form -->
              </div>
              <!-- End Add Education Input Field -->
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer pt-0">
              <div class="d-flex align-items-center">
                <button type="button" class="btn btn-ghost-secondary"
                   data-hs-step-form-prev-options='{
                     "targetSelector": "#uploadResumeStepBasics"
                   }'>
                  <i class="bi-chevron-left small ms-1"></i> Previous step
                </button>

                <div class="ms-auto">
                  <button type="button" class="btn btn-primary"
                          data-hs-step-form-next-options='{
                            "targetSelector": "#uploadResumeStepWork"
                          }'>
                    Save and continue <i class="bi-chevron-right small ms-1"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- End Footer -->
          </div>

          <div id="uploadResumeStepWork" class="card" style="display: none;">
            <!-- Header -->
            <div class="card-header bg-img-start" style="background-image: url(../assets/svg/components/card-1.svg);">
              <div class="flex-grow-1">
                <span class="d-lg-none">Step 3 of 5</span>
                <h3 class="card-header-title">Work experience</h3>
                <p class="card-text">Tell job seekers the pay and receive up to two times more applications</p>
              </div>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <div class="js-add-field"
                   data-hs-add-field-options='{
                      "template": "#addWorkFieldTemplate",
                      "container": "#addWorkFieldContainer",
                      "defaultCreated": 0
                    }'>
                <!-- Form -->
                <div class="mb-4">
                  <label for="jobTitleLabel" class="form-label">Job title</label>
                  <input type="text" class="form-control" name="jobTitleName" id="jobTitleLabel" placeholder="UI/UX Designer" aria-label="UI/UX Designer">
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="companyLabel" class="form-label">Company</label>
                  <input type="text" class="form-control" name="companyName" id="companyLabel" placeholder="Htmlstream" aria-label="Htmlstream">
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="workCountryLabel" class="form-label">Country</label>

                  <!-- Select -->
                  <select id="workCountryLabel" class="form-select" data-name="additionalWorkCountrySelect">
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Aland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia (Plurinational State of)</option>
                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="CV">Cabo Verde</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curaçao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="CI">Côte d'Ivoire</option>
                    <option value="CD">Democratic Republic of the Congo</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GB">England</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FM">Federated States of Micronesia</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="VA">Holy See</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran (Islamic Republic of)</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Laos</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macau</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="KP">North Korea</option>
                    <option value="MK">North Macedonia</option>
                    <option value="GB">Northern Ireland</option>
                    <option value="MP">Northern Markna Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="CG">Republic of the Congo</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russia</option>
                    <option value="RW">Rwanda</option>
                    <option value="RE">Réunion</option>
                    <option value="BL">Saint Barthélemy</option>
                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="GB">Scotland</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="KR">South Korea</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="PS">State of Palestine</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="US">United States of America</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela (Bolivarian Republic of)</option>
                    <option value="VN">Vietnam</option>
                    <option value="VG">Virgin Islands (British)</option>
                    <option value="VI">Virgin Islands (U.S.)</option>
                    <option value="GB">Wales</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                  </select>
                  <!-- End Select -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="workTimePeriodCheckbox" class="form-label">Time period</label>

                  <!-- Check -->
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="workTimePeriodCheckbox">
                    <label class="form-check-label" for="workTimePeriodCheckbox">I currently work here</label>
                  </div>
                  <!-- End Check -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label">From</label>

                  <div class="row gx-2">
                    <div class="col-sm-8 mb-2 mb-sm-0">
                      <!-- Select -->
                      <select class="form-select" data-name="additionalWorkFromMonthSelect">
                        <option value="month1">January</option>
                        <option value="month2">February</option>
                        <option value="month3">March</option>
                        <option value="month4">April</option>
                        <option value="month5">May</option>
                        <option value="month6">June</option>
                        <option value="month7">July</option>
                        <option value="month8">August</option>
                        <option value="month9">September</option>
                        <option value="month10">October</option>
                        <option value="month11">November</option>
                        <option value="month12">December</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-4">
                      <!-- Select -->
                      <select class="form-select" data-name="additionalWorkFromYearSelect">
                        <option value="yearBuiltSelect2017">2017</option>
                        <option value="yearBuiltSelect2016">2016</option>
                        <option value="yearBuiltSelect2015">2015</option>
                        <option value="yearBuiltSelect2014">2014</option>
                        <option value="yearBuiltSelect2013">2013</option>
                        <option value="yearBuiltSelect2012">2012</option>
                        <option value="yearBuiltSelect2011">2011</option>
                        <option value="yearBuiltSelect2010">2010</option>
                        <option value="yearBuiltSelect2009">2009</option>
                        <option value="yearBuiltSelect2008">2008</option>
                        <option value="yearBuiltSelect2007">2007</option>
                        <option value="yearBuiltSelect2006">2006</option>
                        <option value="yearBuiltSelect2005">2005</option>
                        <option value="yearBuiltSelect2004">2004</option>
                        <option value="yearBuiltSelect2003">2003</option>
                        <option value="yearBuiltSelect2002">2002</option>
                        <option value="yearBuiltSelect2001">2001</option>
                        <option value="yearBuiltSelect2000">2000</option>
                        <option value="yearBuiltSelect1999">1999</option>
                        <option value="yearBuiltSelect1998">1998</option>
                        <option value="yearBuiltSelect1997">1997</option>
                        <option value="yearBuiltSelect1996">1996</option>
                        <option value="yearBuiltSelect1995">1995</option>
                        <option value="yearBuiltSelect1994">1994</option>
                        <option value="yearBuiltSelect1993">1993</option>
                        <option value="yearBuiltSelect1992">1992</option>
                        <option value="yearBuiltSelect1991">1991</option>
                        <option value="yearBuiltSelect1990">1990</option>
                        <option value="yearBuiltSelect1989">1989</option>
                        <option value="yearBuiltSelect1988">1988</option>
                        <option value="yearBuiltSelect1987">1987</option>
                        <option value="yearBuiltSelect1986">1986</option>
                        <option value="yearBuiltSelect1985">1985</option>
                        <option value="yearBuiltSelectOlder">Older</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label">To</label>

                  <div class="row gx-2">
                    <div class="col-sm-8 mb-2 mb-sm-0">
                      <!-- Select -->
                      <select class="form-select" data-name="additionalWorkMonthToSelect">
                        <option value="month1">January</option>
                        <option value="month2">February</option>
                        <option value="month3">March</option>
                        <option value="month4">April</option>
                        <option value="month5">May</option>
                        <option value="month6">June</option>
                        <option value="month7">July</option>
                        <option value="month8">August</option>
                        <option value="month9">September</option>
                        <option value="month10">October</option>
                        <option value="month11">November</option>
                        <option value="month12">December</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-4">
                      <!-- Select -->
                      <select class="form-select" data-name="additionalWorkToSelect">
                        <option value="yearBuiltSelect2017">2017</option>
                        <option value="yearBuiltSelect2016">2016</option>
                        <option value="yearBuiltSelect2015">2015</option>
                        <option value="yearBuiltSelect2014">2014</option>
                        <option value="yearBuiltSelect2013">2013</option>
                        <option value="yearBuiltSelect2012">2012</option>
                        <option value="yearBuiltSelect2011">2011</option>
                        <option value="yearBuiltSelect2010">2010</option>
                        <option value="yearBuiltSelect2009">2009</option>
                        <option value="yearBuiltSelect2008">2008</option>
                        <option value="yearBuiltSelect2007">2007</option>
                        <option value="yearBuiltSelect2006">2006</option>
                        <option value="yearBuiltSelect2005">2005</option>
                        <option value="yearBuiltSelect2004">2004</option>
                        <option value="yearBuiltSelect2003">2003</option>
                        <option value="yearBuiltSelect2002">2002</option>
                        <option value="yearBuiltSelect2001">2001</option>
                        <option value="yearBuiltSelect2000">2000</option>
                        <option value="yearBuiltSelect1999">1999</option>
                        <option value="yearBuiltSelect1998">1998</option>
                        <option value="yearBuiltSelect1997">1997</option>
                        <option value="yearBuiltSelect1996">1996</option>
                        <option value="yearBuiltSelect1995">1995</option>
                        <option value="yearBuiltSelect1994">1994</option>
                        <option value="yearBuiltSelect1993">1993</option>
                        <option value="yearBuiltSelect1992">1992</option>
                        <option value="yearBuiltSelect1991">1991</option>
                        <option value="yearBuiltSelect1990">1990</option>
                        <option value="yearBuiltSelect1989">1989</option>
                        <option value="yearBuiltSelect1988">1988</option>
                        <option value="yearBuiltSelect1987">1987</option>
                        <option value="yearBuiltSelect1986">1986</option>
                        <option value="yearBuiltSelect1985">1985</option>
                        <option value="yearBuiltSelectOlder">Older</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label">Description</label>

                  <!-- Quill -->
                  <div class="quill-custom">
                    <div class="js-quill" style="height: 15rem;"
                         data-hs-quill-options='{
                         "placeholder": "Describe your position and any significant accomplishments...",
                          "modules": {
                            "toolbar": [
                              ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                            ]
                          }
                         }'>
                    </div>
                  </div>
                  <!-- End Quill -->
                </div>
                <!-- End Form -->

                <!-- Container For Input Field -->
                <div id="addWorkFieldContainer"></div>

                <a href="javascript:;" class="js-create-field form-link">
                  <i class="bi-plus-circle me-1"></i> Add work
                </a>
              </div>

              <!-- Add Work Input Field -->
              <div id="addWorkFieldTemplate" style="display: none;">
                <hr>

                <!-- Form -->
                <div class="mb-4">
                  <label for="addJobTitleLabel" class="form-label">Job title</label>
                  <input type="text" class="form-control" data-name="addJobTitleName" id="addJobTitleLabel" placeholder="UI/UX Designer" aria-label="UI/UX Designer">
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="addCompanyLabel" class="form-label">Company</label>
                  <input type="text" class="form-control" data-name="addCompanyName" id="addCompanyLabel" placeholder="Htmlstream" aria-label="Htmlstream">
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label">Country</label>

                  <!-- Select -->
                  <select class="form-select" data-name="additionalWorkCountrySelect">
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Aland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia (Plurinational State of)</option>
                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="CV">Cabo Verde</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curaçao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="CI">Côte d'Ivoire</option>
                    <option value="CD">Democratic Republic of the Congo</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GB">England</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FM">Federated States of Micronesia</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="VA">Holy See</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran (Islamic Republic of)</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Laos</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macau</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="KP">North Korea</option>
                    <option value="MK">North Macedonia</option>
                    <option value="GB">Northern Ireland</option>
                    <option value="MP">Northern Markna Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="CG">Republic of the Congo</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russia</option>
                    <option value="RW">Rwanda</option>
                    <option value="RE">Réunion</option>
                    <option value="BL">Saint Barthélemy</option>
                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="GB">Scotland</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="KR">South Korea</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="PS">State of Palestine</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="US">United States of America</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela (Bolivarian Republic of)</option>
                    <option value="VN">Vietnam</option>
                    <option value="VG">Virgin Islands (British)</option>
                    <option value="VI">Virgin Islands (U.S.)</option>
                    <option value="GB">Wales</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                  </select>
                  <!-- End Select -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="addWorkTimePeriodCheckbox" class="form-label">Time period</label>

                  <!-- Check -->
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="addWorkTimePeriodCheckbox">
                    <label class="form-check-label" for="addWorkTimePeriodCheckbox">I currently work here</label>
                  </div>
                  <!-- End Check -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label">From</label>

                  <div class="row gx-2">
                    <div class="col-sm-8 mb-2 mb-sm-0">
                      <!-- Select -->
                      <select class="form-select" data-name="additionalWorkFromMonthSelect">
                        <option value="month1">January</option>
                        <option value="month2">February</option>
                        <option value="month3">March</option>
                        <option value="month4">April</option>
                        <option value="month5">May</option>
                        <option value="month6">June</option>
                        <option value="month7">July</option>
                        <option value="month8">August</option>
                        <option value="month9">September</option>
                        <option value="month10">October</option>
                        <option value="month11">November</option>
                        <option value="month12">December</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-4">
                      <!-- Select -->
                      <select class="form-select" data-name="additionalWorkFromYearSelect">
                        <option value="yearBuiltSelect2017">2017</option>
                        <option value="yearBuiltSelect2016">2016</option>
                        <option value="yearBuiltSelect2015">2015</option>
                        <option value="yearBuiltSelect2014">2014</option>
                        <option value="yearBuiltSelect2013">2013</option>
                        <option value="yearBuiltSelect2012">2012</option>
                        <option value="yearBuiltSelect2011">2011</option>
                        <option value="yearBuiltSelect2010">2010</option>
                        <option value="yearBuiltSelect2009">2009</option>
                        <option value="yearBuiltSelect2008">2008</option>
                        <option value="yearBuiltSelect2007">2007</option>
                        <option value="yearBuiltSelect2006">2006</option>
                        <option value="yearBuiltSelect2005">2005</option>
                        <option value="yearBuiltSelect2004">2004</option>
                        <option value="yearBuiltSelect2003">2003</option>
                        <option value="yearBuiltSelect2002">2002</option>
                        <option value="yearBuiltSelect2001">2001</option>
                        <option value="yearBuiltSelect2000">2000</option>
                        <option value="yearBuiltSelect1999">1999</option>
                        <option value="yearBuiltSelect1998">1998</option>
                        <option value="yearBuiltSelect1997">1997</option>
                        <option value="yearBuiltSelect1996">1996</option>
                        <option value="yearBuiltSelect1995">1995</option>
                        <option value="yearBuiltSelect1994">1994</option>
                        <option value="yearBuiltSelect1993">1993</option>
                        <option value="yearBuiltSelect1992">1992</option>
                        <option value="yearBuiltSelect1991">1991</option>
                        <option value="yearBuiltSelect1990">1990</option>
                        <option value="yearBuiltSelect1989">1989</option>
                        <option value="yearBuiltSelect1988">1988</option>
                        <option value="yearBuiltSelect1987">1987</option>
                        <option value="yearBuiltSelect1986">1986</option>
                        <option value="yearBuiltSelect1985">1985</option>
                        <option value="yearBuiltSelectOlder">Older</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label">To</label>

                  <div class="row gx-2">
                    <div class="col-sm-8 mb-2 mb-sm-0">
                      <!-- Select -->
                      <select class="form-select" data-name="additionalWorkMonthToSelect">
                        <option value="month1">January</option>
                        <option value="month2">February</option>
                        <option value="month3">March</option>
                        <option value="month4">April</option>
                        <option value="month5">May</option>
                        <option value="month6">June</option>
                        <option value="month7">July</option>
                        <option value="month8">August</option>
                        <option value="month9">September</option>
                        <option value="month10">October</option>
                        <option value="month11">November</option>
                        <option value="month12">December</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-4">
                      <!-- Select -->
                      <select class="form-select" data-name="additionalWorkToSelect">
                        <option value="yearBuiltSelect2017">2017</option>
                        <option value="yearBuiltSelect2016">2016</option>
                        <option value="yearBuiltSelect2015">2015</option>
                        <option value="yearBuiltSelect2014">2014</option>
                        <option value="yearBuiltSelect2013">2013</option>
                        <option value="yearBuiltSelect2012">2012</option>
                        <option value="yearBuiltSelect2011">2011</option>
                        <option value="yearBuiltSelect2010">2010</option>
                        <option value="yearBuiltSelect2009">2009</option>
                        <option value="yearBuiltSelect2008">2008</option>
                        <option value="yearBuiltSelect2007">2007</option>
                        <option value="yearBuiltSelect2006">2006</option>
                        <option value="yearBuiltSelect2005">2005</option>
                        <option value="yearBuiltSelect2004">2004</option>
                        <option value="yearBuiltSelect2003">2003</option>
                        <option value="yearBuiltSelect2002">2002</option>
                        <option value="yearBuiltSelect2001">2001</option>
                        <option value="yearBuiltSelect2000">2000</option>
                        <option value="yearBuiltSelect1999">1999</option>
                        <option value="yearBuiltSelect1998">1998</option>
                        <option value="yearBuiltSelect1997">1997</option>
                        <option value="yearBuiltSelect1996">1996</option>
                        <option value="yearBuiltSelect1995">1995</option>
                        <option value="yearBuiltSelect1994">1994</option>
                        <option value="yearBuiltSelect1993">1993</option>
                        <option value="yearBuiltSelect1992">1992</option>
                        <option value="yearBuiltSelect1991">1991</option>
                        <option value="yearBuiltSelect1990">1990</option>
                        <option value="yearBuiltSelect1989">1989</option>
                        <option value="yearBuiltSelect1988">1988</option>
                        <option value="yearBuiltSelect1987">1987</option>
                        <option value="yearBuiltSelect1986">1986</option>
                        <option value="yearBuiltSelect1985">1985</option>
                        <option value="yearBuiltSelectOlder">Older</option>
                      </select>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label class="form-label">Description</label>

                  <!-- Quill -->
                  <div class="quill-custom">
                    <div class="js-quill-dynamic" style="min-height: 15rem;"
                         data-hs-quill-options='{
                         "placeholder": "Describe your position and any significant accomplishments...",
                          "modules": {
                            "toolbar": [
                              ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                            ]
                          }
                         }'>
                    </div>
                  </div>
                  <!-- End Quill -->
                </div>
                <!-- End Form -->
              </div>
              <!-- End Add Work Input Field -->
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer pt-0">
              <div class="d-flex align-items-center">
                <button type="button" class="btn btn-ghost-secondary"
                   data-hs-step-form-prev-options='{
                     "targetSelector": "#uploadResumeStepEducation"
                   }'>
                  <i class="bi-chevron-left small ms-1"></i> Previous step
                </button>

                <div class="ms-auto">
                  <button type="button" class="btn btn-primary"
                          data-hs-step-form-next-options='{
                            "targetSelector": "#uploadResumeStepJobSkills"
                          }'>
                    Save and continue <i class="bi-chevron-right small ms-1"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- End Footer -->
          </div>

          <div id="uploadResumeStepJobSkills" class="card" style="display: none;">
            <!-- Header -->
            <div class="card-header bg-img-start" style="background-image: url(../assets/svg/components/card-1.svg);">
              <div class="flex-grow-1">
                <span class="d-lg-none">Step 4 of 5</span>
                <h3 class="card-header-title">Skills</h3>
              </div>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <!-- Form -->
              <div class="mb-4">
                <label class="form-label">Do you have any of these top skills employers are looking for?</label>

                <div class="row gx-2">
                  <div class="col-sm-6 mb-2 mb-sm-0">
                    <div class="d-grid gap-2">
                      <!-- Radio Check -->
                      <label class="form-control" for="skillsCheckbox1">
                        <span class="form-check">
                          <input type="checkbox" class="form-check-input" name="skillsCheckboxName" id="skillsCheckbox1">
                          <span class="form-check-label">Front-End Developer</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->

                      <!-- Radio Check -->
                      <label class="form-control" for="skillsCheckbox2">
                        <span class="form-check">
                          <input type="checkbox" class="form-check-input" name="skillsCheckboxName" id="skillsCheckbox2">
                          <span class="form-check-label">Git</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->

                      <!-- Radio Check -->
                      <label class="form-control" for="skillsCheckbox3">
                        <span class="form-check">
                          <input type="checkbox" class="form-check-input" name="skillsCheckboxName" id="skillsCheckbox3">
                          <span class="form-check-label">Ajax</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->

                      <!-- Radio Check -->
                      <label class="form-control" for="skillsCheckbox4">
                        <span class="form-check">
                          <input type="checkbox" class="form-check-input" name="skillsCheckboxName" id="skillsCheckbox4">
                          <span class="form-check-label">GitHub</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <div class="d-grid gap-2">
                      <!-- Radio Check -->
                      <label class="form-control" for="skillsCheckbox5">
                        <span class="form-check">
                          <input type="checkbox" class="form-check-input" name="skillsCheckboxName" id="skillsCheckbox5">
                          <span class="form-check-label">JavaScript</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->

                      <!-- Radio Check -->
                      <label class="form-control" for="skillsCheckbox6">
                        <span class="form-check">
                          <input type="checkbox" class="form-check-input" name="skillsCheckboxName" id="skillsCheckbox6">
                          <span class="form-check-label">Angular</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->

                      <!-- Radio Check -->
                      <label class="form-control" for="skillsCheckbox7">
                        <span class="form-check">
                          <input type="checkbox" class="form-check-input" name="skillsCheckboxName" id="skillsCheckbox7">
                          <span class="form-check-label">MySQL</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->

                      <!-- Radio Check -->
                      <label class="form-control" for="skillsCheckbox8">
                        <span class="form-check">
                          <input type="checkbox" class="form-check-input" name="skillsCheckboxName" id="skillsCheckbox8">
                          <span class="form-check-label">APIs</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->
                    </div>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label for="addSkillLabel" class="form-label">Add a new skill</label>
                <input type="text" class="form-control" name="addSkill" id="addSkillLabel" placeholder="Figma" aria-label="Figma">
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label for="yearsOfExperienceLabel" class="form-label">Years of experience</label>

                <!-- Select -->
                <select id="yearsOfExperienceLabel" class="form-select" name="yearsOfExperienceSelect">
                  <option value="less than 1 year">Less than 1 year</option>
                  <option value="1 year">1 year</option>
                  <option value="2 years">2 years</option>
                  <option value="3 years">3 years</option>
                  <option value="4 years">4 years</option>
                  <option value="5 years">5 years</option>
                  <option value="6 years">6 years</option>
                  <option value="7 years">7 years</option>
                  <option value="8 years">8 years</option>
                  <option value="9 years">9 years</option>
                  <option value="10+ years">10+ years</option>
                </select>
                <!-- End Select -->
              </div>
              <!-- End Form -->
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer pt-0">
              <div class="d-flex align-items-center">
                <button type="button" class="btn btn-ghost-secondary"
                   data-hs-step-form-prev-options='{
                     "targetSelector": "#uploadResumeStepWork"
                   }'>
                  <i class="bi-chevron-left small ms-1"></i> Previous step
                </button>

                <div class="ms-auto">
                  <button type="button" class="btn btn-primary"
                          data-hs-step-form-next-options='{
                            "targetSelector": "#uploadResumeStepTypeOfJob"
                          }'>
                    Save and continue <i class="bi-chevron-right small ms-1"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- End Footer -->
          </div>

          <div id="uploadResumeStepTypeOfJob" class="card" style="display: none;">
            <!-- Header -->
            <div class="card-header bg-img-start" style="background-image: url(../assets/svg/components/card-1.svg);">
              <div class="flex-grow-1">
                <span class="d-lg-none">Step 5 of 5</span>
                <h3 class="card-header-title">What kind of job are you looking for?</h3>
                <p class="card-text">This information will help us find the job that's right for you.</p>
              </div>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <!-- Form -->
              <div class="mb-4">
                <label for="desiredJobTitleLabel" class="form-label">Desired job title</label>
                <input type="text" class="form-control" name="desiredJobTitle" id="desiredJobTitleLabel" placeholder="UI Designer/Developer" aria-label="UI Designer/Developer">
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label class="form-label">Desired job types</label>

                <div class="row gx-2">
                  <div class="col-sm-6 mb-2 mb-sm-0">
                    <div class="d-grid gap-2">
                      <!-- Radio Check -->
                      <label class="form-control" for="desiredJobTypesCheckbox1">
                        <span class="form-check">
                          <input type="checkbox" class="form-check-input" name="desiredJobTypesCheckboxName" id="desiredJobTypesCheckbox1">
                          <span class="form-check-label">Full time</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->

                      <!-- Radio Check -->
                      <label class="form-control" for="desiredJobTypesCheckbox2">
                        <span class="form-check">
                          <input type="checkbox" class="form-check-input" name="desiredJobTypesCheckboxName" id="desiredJobTypesCheckbox2">
                          <span class="form-check-label">Contract</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->

                      <!-- Radio Check -->
                      <label class="form-control" for="desiredJobTypesCheckbox3">
                        <span class="form-check">
                          <input type="checkbox" class="form-check-input" name="desiredJobTypesCheckboxName" id="desiredJobTypesCheckbox3">
                          <span class="form-check-label">Internship</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <div class="d-grid gap-2">
                      <!-- Radio Check -->
                      <label class="form-control" for="desiredJobTypesCheckbox4">
                        <span class="form-check">
                          <input type="checkbox" class="form-check-input" name="desiredJobTypesCheckboxName" id="desiredJobTypesCheckbox4">
                          <span class="form-check-label">Part time</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->

                      <!-- Radio Check -->
                      <label class="form-control" for="desiredJobTypesCheckbox5">
                        <span class="form-check">
                          <input type="checkbox" class="form-check-input" name="desiredJobTypesCheckboxName" id="desiredJobTypesCheckbox5">
                          <span class="form-check-label">Temporary</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->

                      <!-- Radio Check -->
                      <label class="form-control" for="desiredJobTypesCheckbox6">
                        <span class="form-check">
                          <input type="checkbox" class="form-check-input" name="desiredJobTypesCheckboxName" id="desiredJobTypesCheckbox6">
                          <span class="form-check-label">Commission</span>
                        </span>
                      </label>
                      <!-- End Radio Check -->
                    </div>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label class="form-label">Desired work schedule</label>

                <div class="row gx-2">
                  <div class="col-sm-6 mb-2 mb-sm-0">
                    <label class="form-label">Schedule</label>

                    <!-- Radio Check -->
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="desiredWorkScheduleCheckboxName" id="desiredWorkScheduleCheckbox1">
                      <label class="form-check-label" for="desiredWorkScheduleCheckbox1">Overtime</label>
                    </div>
                    <!-- End Radio Check -->

                    <!-- Radio Check -->
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="desiredWorkScheduleCheckboxName" id="desiredWorkScheduleCheckbox2">
                      <label class="form-check-label" for="desiredWorkScheduleCheckbox2">On Call</label>
                    </div>
                    <!-- End Radio Check -->

                    <!-- Radio Check -->
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="desiredWorkScheduleCheckboxName" id="desiredWorkScheduleCheckbox3">
                      <label class="form-check-label" for="desiredWorkScheduleCheckbox3">Overnight Shift</label>
                    </div>
                    <!-- End Radio Check -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6 mb-2 mb-sm-0">
                    <label class="form-label">Days</label>

                    <!-- Radio Check -->
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="desiredWorkScheduleCheckboxName" id="desiredWorkScheduleCheckbox4">
                      <label class="form-check-label" for="desiredWorkScheduleCheckbox4">Monday to Friday</label>
                    </div>
                    <!-- End Radio Check -->

                    <!-- Radio Check -->
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="desiredWorkScheduleCheckboxName" id="desiredWorkScheduleCheckbox5">
                      <label class="form-check-label" for="desiredWorkScheduleCheckbox5">Weekends</label>
                    </div>
                    <!-- End Radio Check -->

                    <!-- Radio Check -->
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="desiredWorkScheduleCheckboxName" id="desiredWorkScheduleCheckbox6">
                      <label class="form-check-label" for="desiredWorkScheduleCheckbox6">Holidays</label>
                    </div>
                    <!-- End Radio Check -->

                    <!-- Radio Check -->
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="desiredWorkScheduleCheckboxName" id="desiredWorkScheduleCheckbox7">
                      <label class="form-check-label" for="desiredWorkScheduleCheckbox7">No Weekends</label>
                    </div>
                    <!-- End Radio Check -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <label class="form-label">Shifts</label>

                    <!-- Radio Check -->
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="desiredWorkScheduleCheckboxName" id="desiredWorkScheduleCheckbox8">
                      <label class="form-check-label" for="desiredWorkScheduleCheckbox8">Day Shift</label>
                    </div>
                    <!-- End Radio Check -->

                    <!-- Radio Check -->
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="desiredWorkScheduleCheckboxName" id="desiredWorkScheduleCheckbox9">
                      <label class="form-check-label" for="desiredWorkScheduleCheckbox9">8 Hour Shift</label>
                    </div>
                    <!-- End Radio Check -->

                    <!-- Radio Check -->
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="desiredWorkScheduleCheckboxName" id="desiredWorkScheduleCheckbox10">
                      <label class="form-check-label" for="desiredWorkScheduleCheckbox10">Night Shift</label>
                    </div>
                    <!-- End Radio Check -->

                    <!-- Radio Check -->
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="desiredWorkScheduleCheckboxName" id="desiredWorkScheduleCheckbox11">
                      <label class="form-check-label" for="desiredWorkScheduleCheckbox11">12 Hour Shift</label>
                    </div>
                    <!-- End Radio Check -->

                    <!-- Radio Check -->
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="desiredWorkScheduleCheckboxName" id="desiredWorkScheduleCheckbox12">
                      <label class="form-check-label" for="desiredWorkScheduleCheckbox12">10 Hour Shift</label>
                    </div>
                    <!-- End Radio Check -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label class="form-label">Desired salary</label>

                <div class="row gx-2">
                  <div class="col-12 col-lg-4 mb-2">
                    <!-- Select -->
                    <select class="form-select">
                      <option value="currency1" selected>USD (United States Dollar)</option>
                      <option value="currency2">GBP (United Kingdom Pound)</option>
                      <option value="currency3">Euro (Euro Member Countries)</option>
                    </select>
                    <!-- End Select -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-8 col-lg-5 mb-2">
                    <input type="text" class="form-control" name="desiredPay" id="desiredPayLabel" placeholder="0" aria-label="0">
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-4 col-lg-3">
                    <!-- Select -->
                    <select class="form-select" name="jobSalaryPeriodSelect">
                      <option value="jobSalaryPeriod1">per hour</option>
                      <option value="jobSalaryPeriod2">per day</option>
                      <option value="jobSalaryPeriod3">per week</option>
                      <option value="jobSalaryPeriod4">per month</option>
                      <option value="jobSalaryPeriod5" selected>per year</option>
                    </select>
                    <!-- End Select -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label for="relocationCheckbox" class="form-label">Relocation</label>

                <!-- Check -->
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="relocationCheckbox">
                  <label class="form-check-label" for="relocationCheckbox">I am willing to relocate</label>
                </div>
                <!-- End Check -->
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="js-add-field mb-4"
                   data-hs-add-field-options='{
                      "template": "#addLinksFieldTemplate",
                      "container": "#addLinksFieldContainer",
                      "defaultCreated": 0
                    }'>
                <label for="linksLabel" class="form-label">Links</label>
                <p class="small mt-n2">Address of your blog, personal homepage, Facebook or Twitter profile.</p>
                <input type="text" class="form-control" name="links" id="linksLabel" placeholder="https://www.site.com" aria-label="https://www.site.com">

                <!-- Container For Input Field -->
                <div id="addLinksFieldContainer"></div>

                <a href="javascript:;" class="js-create-field form-link">
                  <i class="bi-plus-circle me-1"></i> Add link
                </a>

                <!-- Add Links Input Field -->
                <div id="addLinksFieldTemplate" style="display: none;">
                  <div class="mt-2">
                    <input type="text" class="form-control" data-name="links" placeholder="https://www.site.com" aria-label="https://www.site.com">
                  </div>
                </div>
                <!-- End Add Links Input Field -->
              </div>
              <!-- End Form -->
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer pt-0">
              <div class="d-flex align-items-center">
                <button type="button" class="btn btn-ghost-secondary"
                   data-hs-step-form-prev-options='{
                     "targetSelector": "#uploadResumeStepJobSkills"
                   }'>
                  <i class="bi-chevron-left small ms-1"></i> Previous step
                </button>

                <div class="ms-auto">
                  <div class="d-flex gap-2">
                    <button type="button" class="btn btn-white">Save in drafts</button>
                    <button id="uploadResumeFinishBtn" type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Footer -->
          </div>
        </div>

        <!-- Message Body -->
        <div id="successMessageContent" style="display: none;">
          <div class="text-center">
            <img class="img-fluid mb-3" src="../assets/svg/illustrations/medal.svg" alt="Image Description" style="max-width: 15rem;">

            <div class="mb-4">
              <h2>Successful!</h2>
              <p>Your resume job has been successfully created.</p>
            </div>

            <div class="d-flex justify-content-center">
              <a class="btn btn-primary" href="../demo-jobs/employee.html">
                Go to profile <i class="bi-chevron-right small ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- End Message Body -->

        <!-- Sticky Block End Point -->
        <div id="stickyBlockEndPoint"></div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </form>
  <!-- End Step Form -->
</div>
<!-- End Content -->

<!-- JS Implementing Plugins -->
<script src="../assets/vendor/hs-step-form/dist/hs-step-form.min.js"></script>
<script src="../assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>
<script src="../assets/vendor/hs-add-field/dist/hs-add-field.min.js"></script>
<script src="../assets/vendor/imask/dist/imask.min.js"></script>
<script src="../assets/vendor/quill/dist/quill.min.js"></script>

<!-- JS Front -->

<!-- JS Plugins Init. -->
<script>
  (function() {
    // INITIALIZATION OF STICKY BLOCKS
    // =======================================================
    new HSStickyBlock('.js-sticky-block', {
      targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
    })


    // INITIALIZATION OF STEP FORM
    // =======================================================
    new HSStepForm('.js-step-form', {
        finish: () => {
          document.getElementById("uploadResumeStepFormProgress").style.display = 'none'
          document.getElementById("uploadResumeStepFormContent").style.display = 'none'
          document.getElementById("successMessageContent").style.display = 'block'
          scrollToTop('#header');
          const formContainerEg1 = document.getElementById('formContainerEg1')
          formContainerEg1.classList.remove('col-lg-8')
          formContainerEg1.classList.add('col-lg-12')
        },
        onNextStep: function () {
          scrollToTop()
        },
        onPrevStep: function () {
          scrollToTop()
        }
      })

    function scrollToTop(el = '.js-step-form') {
      el = document.querySelector(el)
      window.scrollTo({
        top: (el.getBoundingClientRect().top + window.scrollY) - 30,
        left: 0,
        behavior: 'smooth'
      })
    }


    // INITIALIZATION OF ADD FIELD
    // =======================================================
    new HSAddField('.js-add-field', {
      addedField: field => {
        HSCore.components.HSQuill.init(field.querySelector('.js-quill-dynamic'))
      }
    })


    // INITIALIZATION OF QUILLJS EDITOR
    // =======================================================
    HSCore.components.HSQuill.init('.js-quill')


    // INITIALIZATION OF INPUT MASK
    // =======================================================
    HSCore.components.HSMask.init('.js-input-mask')
  })()
</script>
@endsection
