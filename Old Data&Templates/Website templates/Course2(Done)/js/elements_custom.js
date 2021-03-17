$(document).ready(function()
{"use strict";var hamb=$('.hamburger');var header=$('.header');var hambActive=false;var menuActive=false;var ctrl=new ScrollMagic.Controller();setHeader();$(window).on('resize',function()
{setHeader();});$(document).on('scroll',function()
{setHeader();});initHamburger();initParallax();initProgressBars();initAccordions();initLoaders();initMilestones();function setHeader()
{if(window.innerWidth<992)
{if($(window).scrollTop()>100)
{header.addClass('scrolled');}
else
{header.removeClass('scrolled');}}
else
{if($(window).scrollTop()>100)
{header.addClass('scrolled');}
else
{header.removeClass('scrolled');}}
if(window.innerWidth>991&&menuActive)
{closeMenu();}}
function initHamburger()
{if($('.hamburger_container').length)
{var hamb=$('.hamburger_container');hamb.on('click',function(event)
{event.stopPropagation();if(!menuActive)
{openMenu();$(document).one('click',function cls(e)
{if($(e.target).hasClass('menu_mm'))
{$(document).one('click',cls);}
else
{closeMenu();}});}
else
{$('.menu_container').removeClass('active');menuActive=false;}});}}
function openMenu()
{var fs=$('.menu_container');fs.addClass('active');hambActive=true;menuActive=true;}
function closeMenu()
{var fs=$('.menu_container');fs.removeClass('active');hambActive=false;menuActive=false;}
function initParallax()
{if($('.slider_prlx').length)
{var homeBcg=$('.slider_prlx');var homeBcgScene=new ScrollMagic.Scene({triggerElement:homeBcg,triggerHook:1,duration:"100%"}).setTween(TweenMax.to(homeBcg,1,{y:'15%',ease:Power0.easeNone})).addTo(ctrl);}
if($('.prlx_parent').length&&$('.prlx').length)
{var elements=$('.prlx_parent');elements.each(function()
{var ele=this;var bcg=$(ele).find('.prlx');var slideParallaxScene=new ScrollMagic.Scene({triggerElement:ele,triggerHook:1,duration:"200%"}).setTween(TweenMax.from(bcg,1,{y:'-30%',ease:Power0.easeNone})).addTo(ctrl);});}}
function initProgressBars()
{if($('.skill_bars').length)
{var bars=$('.skill_bars');bars.each(function()
{var ele=$(this);var elePerc=ele.data('perc');var eleName='#'+ele.attr('id');var statsScene=new ScrollMagic.Scene({triggerElement:this,triggerHook:'onEnter',reverse:false}).on('start',function()
{var pbar=new ProgressBar.Line(eleName,{strokeWidth:0.5,easing:'easeInOut',duration:1400,color:'#ffb606',trailColor:'#ffffff',trailWidth:1,svgStyle:{display:'block',width:'100%',height:'100%'},text:{style:{fontFamily:'Open Sans',textAlign:'right',fontSize:'14px',width:'40px',color:'#1a1a1a',position:'absolute',right:0,top:'-33px',padding:0,margin:0,transform:null},autoStyleContainer:false},from:{color:'#00bcd5'},to:{color:'#00bcd5'},step:function(state,bar){bar.setText(Math.round(bar.value()*100)+' %');}});pbar.animate(elePerc);}).addTo(ctrl);})}}
function initAccordions()
{if($('.accordion').length)
{var accs=$('.accordion');accs.each(function()
{var acc=$(this);acc.on('click',function()
{acc.toggleClass('active');var panel=$(acc.next());var panelH=panel.prop('scrollHeight')+"px";if(panel.css('max-height')=="0px")
{panel.css('max-height',panel.prop('scrollHeight')+"px");}
else
{panel.css('max-height',"0px");}});});}}
function initLoaders()
{if($('.loader').length)
{var loaders=$('.loader');loaders.each(function()
{var loader=this;var endValue=$(loader).data('perc');var loaderScene=new ScrollMagic.Scene({triggerElement:this,triggerHook:'onEnter',reverse:false}).on('start',function()
{var bar=new ProgressBar.Circle(loader,{color:'#aaa',strokeWidth:4,trailWidth:10,trailColor:'#f8f4f4',easing:'easeInOut',duration:1400,text:{autoStyleContainer:false},from:{color:'#ffb606',width:2},to:{color:'#ffb606',width:2},step:function(state,circle)
{circle.path.setAttribute('stroke',state.color);circle.path.setAttribute('stroke-width',state.width);var value=Math.round(circle.value()*100);if(value===0)
{circle.setText('0%');}
else
{circle.setText(value+"%");}}});bar.text.style.fontFamily='"Roboto", sans-serif';bar.text.style.fontSize='48px';bar.text.style.fontWeight='400';bar.text.style.color="#ffb606";bar.animate(endValue);}).addTo(ctrl);});}}
function initMilestones()
{if($('.milestone_counter').length)
{var milestoneItems=$('.milestone_counter');milestoneItems.each(function(i)
{var ele=$(this);var endValue=ele.data('end-value');var eleValue=ele.text();var signBefore="";var signAfter="";if(ele.attr('data-sign-before'))
{signBefore=ele.attr('data-sign-before');}
if(ele.attr('data-sign-after'))
{signAfter=ele.attr('data-sign-after');}
var milestoneScene=new ScrollMagic.Scene({triggerElement:this,triggerHook:'onEnter',reverse:false}).on('start',function()
{var counter={value:eleValue};var counterTween=TweenMax.to(counter,4,{value:endValue,roundProps:"value",ease:Circ.easeOut,onUpdate:function()
{document.getElementsByClassName('milestone_counter')[i].innerHTML=signBefore+counter.value+signAfter;}});}).addTo(ctrl);});}}});