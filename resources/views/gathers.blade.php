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
    <main class="main-wrapper">
      <section class="section_about-header">
        <div class="padding-global">
          <div class="container-large"></div>
        </div>
      </section>
      <section class="section_about-video">
        <div class="padding-global">
          <div class="container-large"></div>
        </div>
      </section>
      <section class="section_about-awards">
        <div class="padding-global">
          <div class="container-large"></div>
        </div>
      </section>
      <section class="section_about-journey">
        <div class="padding-global">
          <div class="container-large"></div>
        </div>
      </section>
      <section class="section_about-team">
        <div class="padding-global">
          <div class="container-large"></div>
        </div>
      </section>
    </main>
    <div class="volunteer-popup_component">
      <div data-w-id="adf36a31-94e4-ccac-253b-ca75c63722a4" class="volunteer-popup_close"></div>
      <div class="volunteer-popup_modal">
        <div data-w-id="adf36a31-94e4-ccac-253b-ca75c63722a6" class="volunteer-popup_close-button">
          <div class="volunteer-popup_close-icon w-embed"><svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 13L13 1" stroke="currentColor" stroke-width="1.5"></path>
              <path d="M1 1L13 13" stroke="currentColor" stroke-width="1.5"></path>
            </svg></div>
        </div>
        <div class="volunteer-popup_title-wrapper">
          <h2 class="heading-remove">Join as a volunteer</h2>
        </div>
        <div class="margin-bottom margin-medium">
          <p class="text-size-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspen varius enim in eros elementum tristique. </p>
        </div>
        <div class="contact_form-wrapper w-form">
          <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" class="contact_form" data-wf-page-id="6602b879fc661a10d13b5393" data-wf-element-id="adf36a31-94e4-ccac-253b-ca75c63722af">
            <div class="contact_form-grid">
              <div class="form_field-wrapper"><label for="name-4">First name</label><input class="form_input w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="" type="text" id="name-3"></div>
              <div class="form_field-wrapper"><label for="name-4">Last name</label><input class="form_input w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="" type="text" id="name-3"></div>
              <div id="w-node-adf36a31-94e4-ccac-253b-ca75c63722b9-c63722a3" class="form_field-wrapper"><label for="name-4">Email ID</label><input class="form_input w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="" type="text" id="name-3"></div>
              <div id="w-node-adf36a31-94e4-ccac-253b-ca75c63722bd-c63722a3" class="form_field-wrapper"><label for="name-4">Tell us about yourself</label><textarea placeholder="Your message here" maxlength="5000" id="field" name="field" data-name="field" class="form_input is-text-area w-input"></textarea></div>
            </div>
            <div class="contact_form-button-wrapper is-left-aligned"><input type="submit" data-wait="Please wait..." class="buttonseemore w-button" value="Send message"></div>
          </form>
          <div class="form_message-success w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="form_message-error w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="gather-gatherheader">
    <div class="container-9">
      <h1 class="centered-heading-5 margin-bottom-32px">Збори</h1>
    </div>
  </section>
  <section class="gather-gatherbuttons">
    <div class="container-9"></div>
    <div class="w-layout-blockcontainer gathersbuttons w-container">
      <a href="#" class="button-3 w-button">Всі збори</a>
      <a href="#" class="button-3 w-button">Актуальні</a>
      <a href="#" class="button-3 w-button">Закриті</a>
      <a href="#" class="button-3 w-button">privat-конверти</a>
      <a href="#" class="button-3 w-button">mono-банки</a>
    </div>
    <div class="w-layout-blockcontainer gathersbuttons2 w-container">
      <a href="#" class="button-3 w-button">Техніка</a>
      <a href="#" class="button-3 w-button">Їжа</a>
      <a href="#" class="button-3 w-button">Ліки</a>
      <a href="#" class="button-3 w-button">Одяг</a>
    </div>
  </section>
  <section class="gathers-gathers">
    <div class="gathersblock">
      <div class="hashtags">#Їжа #mono-банка #Закритий</div>
      <div class="gathername">Назва збору</div>
      <div class="gathergoal">Мета збору: ___ грн<br></div>
      <div class="earnedmoneytext">Вже зібрали ___ грн</div>
      <div class="dividerline">---------------------------------------------------------</div>
      <a data-w-id="c1e5c398-c893-d297-bfe5-4ead0d926a01" style="background-color:rgb(230,230,230)" href="{{ route('gatherExample') }}" class="moreaboutgather w-inline-block">
        <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="top-line"></div>
        <div class="button3-text-2">Більше про збір</div>
        <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="bottom-line"></div>
        <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="left-line"></div>
        <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="right-line"></div>
      </a>
    </div>
  </section>
@stop