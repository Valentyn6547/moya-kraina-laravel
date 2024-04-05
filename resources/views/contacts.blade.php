@extends('layouts.app')

@section('content')
<style>
/* Make text look crisper and more legible in all browsers */
body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}
/* Focus state style for keyboard navigation for the focusable elements */
*[tabindex]:focus-visible,
  input[type="file"]:focus-visible {
   outline: 0.125rem solid #4d65ff;
   outline-offset: 0.125rem;
}
/* Get rid of top margin on first element in any rich text element */
.w-richtext > :not(div):first-child, .w-richtext > div:first-child > :first-child {
  margin-top: 0 !important;
}
/* Get rid of bottom margin on last element in any rich text element */
.w-richtext>:last-child, .w-richtext ol li:last-child, .w-richtext ul li:last-child {
	margin-bottom: 0 !important;
}
/* Prevent all click and hover interaction with an element */
.pointer-events-off {
	pointer-events: none;
}
/* Enables all click and hover interaction with an element */
.pointer-events-on {
  pointer-events: auto;
}
/* Create a class of .div-square which maintains a 1:1 dimension of a div */
.div-square::after {
	content: "";
	display: block;
	padding-bottom: 100%;
}
/* Make sure containers never lose their center alignment */
.container-medium,.container-small, .container-large {
	margin-right: auto !important;
  margin-left: auto !important;
}
/* 
Make the following elements inherit typography styles from the parent and not have hardcoded values. 
Important: You will not be able to style for example "All Links" in Designer with this CSS applied.
Uncomment this CSS to use it in the project. Leave this message for future hand-off.
*/
a,
.w-input,
.w-select,
.w-tab-link,
.w-nav-link,
.w-dropdown-btn,
.w-dropdown-toggle,
.w-dropdown-link {
  color: inherit;
  text-decoration: inherit;
  font-size: inherit;
}
/* Apply "..." after 3 lines of text */
.text-style-3lines {
	display: -webkit-box;
	overflow: hidden;
	-webkit-line-clamp: 3;
	-webkit-box-orient: vertical;
}
/* Apply "..." after 2 lines of text */
.text-style-2lines {
	display: -webkit-box;
	overflow: hidden;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
}
/* Adds inline flex display */
.display-inlineflex {
  display: inline-flex;
}
/* These classes are never overwritten */
.hide {
  display: none !important;
}
@media screen and (max-width: 991px) {
    .hide, .hide-tablet {
        display: none !important;
    }
}
  @media screen and (max-width: 767px) {
    .hide-mobile-landscape{
      display: none !important;
    }
}
  @media screen and (max-width: 479px) {
    .hide-mobile{
      display: none !important;
    }
}
.margin-0 {
  margin: 0rem !important;
}
.padding-0 {
  padding: 0rem !important;
}
.spacing-clean {
padding: 0rem !important;
margin: 0rem !important;
}
.margin-top {
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-top {
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-right {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-right {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-bottom {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-bottom {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
.margin-left {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-left {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-horizontal {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-horizontal {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-vertical {
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-vertical {
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
</style>
    </div>
  </div>
  <section class="contact-header">
    <div class="container-11">
      <h1 class="contact-heading margin-bottom-32px">Зв&#x27;яжіться з нами !</h1>
    </div>
  </section>
  <section>
    <div class="div-block-46">
      <div class="contact_form-wrapper w-form">
        <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" class="contact_form" data-wf-page-id="660fea7bd94f84a8c3bedfd4" data-wf-element-id="9f2fff50-fe7d-2530-a346-a6716e1c9c5e">
          <div class="contact_form-grid-2">
            <div class="form_field-wrapper"><label for="name">Ім&#x27;я</label><input class="form_input-2 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="" type="text" id="name-3"></div>
            <div class="form_field-wrapper"><label for="name">Прізвище</label><input class="form_input-2 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="" type="text" id="name-3"></div>
            <div class="form_field-wrapper"><label for="name">Пошта</label><input class="form_input-2 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="" type="text" id="name-3"></div>
            <div class="form_field-wrapper"><label for="name">Тема</label><input class="form_input-2 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="" type="text" id="name-3"></div>
            <div id="w-node-_9f2fff50-fe7d-2530-a346-a6716e1c9c70-c3bedfd4" class="form_field-wrapper"><label for="field">Повідомлення</label><textarea placeholder="Ваше повідомлення..." maxlength="5000" id="field-2" name="field-2" data-name="Field 2" class="form_input-2 is-text-area w-input"></textarea></div>
          </div>
        </form>
        <div class="form_message-success-2 w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="form_message-error-2 w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
      <a href="#" class="button-5 w-button">Надіслати</a>
      <div class="contact_header_details-wrapper">
        <div class="text-size-large text-weight-bold">Давайте поговоримо !</div>
        <div class="contact_header_link-row-2">
          <a href="#" class="text-weight-normal">+1 23 456 789</a>
          <a href="#" class="text-weight-normal">hello@finsweet.com</a>
        </div>
        <div class="margin-top margin-medium">
          <div class="text-size-medium text-weight-bold">Head office</div>
          <div class="margin-top margin-xsmall">
            <p>8 Brewery Drive, Hudson, NH 03051<br>USA</p>
          </div>
        </div>
        <div class="margin-top margin-medium">
          <div class="text-size-medium text-weight-bold">Branch office</div>
          <div class="margin-top margin-xsmall">
            <p>178 Marconi St., Venice, 34293<br>Italy</p>
          </div>
        </div>
        <div class="margin-top margin-medium">
          <div class="social_wrapper">
            <a aria-label="Facebook link" href="http://www.finsweet.com" target="_blank" class="social_link w-inline-block">
              <div class="social_icon w-embed"><svg aria-hidden="true" width="100%" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 11.993 2.92547 15.3027 6.75 15.9028V10.3125H4.71875V8H6.75V6.2375C6.75 4.2325 7.94438 3.125 9.77172 3.125C10.6467 3.125 11.5625 3.28125 11.5625 3.28125V5.25H10.5538C9.56 5.25 9.25 5.86672 9.25 6.5V8H11.4688L11.1141 10.3125H9.25V15.9028C13.0745 15.3027 16 11.993 16 8Z" fill="currentcolor"></path>
                </svg></div>
            </a>
            <a aria-label="Twitter link" href="http://www.finsweet.com" target="_blank" class="social_link w-inline-block">
              <div class="social_icon w-embed"><svg aria-hidden="true" width="100%" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0)">
                    <path d="M5.03344 14.5C11.0697 14.5 14.3722 9.4978 14.3722 5.16124C14.3722 5.02062 14.3691 4.87687 14.3628 4.73624C15.0052 4.27164 15.5597 3.69617 16 3.03687C15.4017 3.30307 14.7664 3.47692 14.1159 3.55249C14.8009 3.14194 15.3137 2.49698 15.5594 1.73718C14.915 2.11904 14.2104 2.38841 13.4756 2.53374C12.9806 2.00771 12.326 1.65941 11.6131 1.5427C10.9003 1.42599 10.1688 1.54737 9.53183 1.88806C8.89486 2.22876 8.38787 2.7698 8.08923 3.42754C7.7906 4.08528 7.71695 4.82308 7.87969 5.52687C6.575 5.46139 5.29862 5.12247 4.13332 4.53207C2.96802 3.94166 1.9398 3.11296 1.11531 2.09968C0.696266 2.82216 0.568038 3.6771 0.756687 4.49073C0.945337 5.30436 1.43671 6.01563 2.13094 6.47999C1.60975 6.46344 1.09998 6.32312 0.64375 6.07062V6.11124C0.643283 6.86943 0.905399 7.60439 1.38554 8.19118C1.86568 8.77797 2.53422 9.18037 3.2775 9.32999C2.7947 9.46209 2.28799 9.48133 1.79656 9.38624C2.0063 10.0383 2.41438 10.6086 2.96385 11.0176C3.51331 11.4265 4.17675 11.6537 4.86156 11.6675C3.69895 12.5807 2.26278 13.0761 0.784375 13.0737C0.522191 13.0733 0.260266 13.0573 0 13.0256C1.5019 13.9892 3.24902 14.5009 5.03344 14.5Z" fill="currentColor"></path>
                  </g>
                  <defs>
                    <clippath id="clip0">
                      <rect width="16" height="16" fill="white"></rect>
                    </clippath>
                  </defs>
                </svg></div>
            </a>
            <a aria-label="Linkedin link" href="http://www.finsweet.com" target="_blank" class="social_link w-inline-block">
              <div class="social_icon w-embed"><svg aria-hidden="true" width="100%" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.8156 0H1.18125C0.528125 0 0 0.515625 0 1.15313V14.8438C0 15.4813 0.528125 16 1.18125 16H14.8156C15.4688 16 16 15.4813 16 14.8469V1.15313C16 0.515625 15.4688 0 14.8156 0ZM4.74687 13.6344H2.37188V5.99687H4.74687V13.6344ZM3.55938 4.95625C2.79688 4.95625 2.18125 4.34062 2.18125 3.58125C2.18125 2.82188 2.79688 2.20625 3.55938 2.20625C4.31875 2.20625 4.93437 2.82188 4.93437 3.58125C4.93437 4.3375 4.31875 4.95625 3.55938 4.95625ZM13.6344 13.6344H11.2625V9.92188C11.2625 9.0375 11.2469 7.89687 10.0281 7.89687C8.79375 7.89687 8.60625 8.8625 8.60625 9.85938V13.6344H6.2375V5.99687H8.5125V7.04063H8.54375C8.85938 6.44063 9.63438 5.80625 10.7875 5.80625C13.1906 5.80625 13.6344 7.3875 13.6344 9.44375V13.6344Z" fill="currentColor"></path>
                </svg></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop