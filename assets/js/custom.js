/*------------------------------------------------------------------
    File Name: custom.js
    Template Name: Pluto - Responsive HTML5 Template
    Created By: html.design
    Envato Profile: https://themeforest.net/user/htmldotdesign
    Website: https://html.design
    Version: 1.0
-------------------------------------------------------------------*/

/*--------------------------------------
	sidebar
--------------------------------------*/

"use strict";

$(document).ready(function () {
  /*-- sidebar js --*/
  $('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
  });
  /*-- calendar js --*/
  $('#example14').calendar({
    inline: true
  });
  $('#example15').calendar();
  /*-- tooltip js --*/
  $('[data-toggle="tooltip"]').tooltip();
});

/*--------------------------------------
    scrollbar js
--------------------------------------*/

var ps = new PerfectScrollbar('#sidebar');
