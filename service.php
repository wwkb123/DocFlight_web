<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script> 
$(function(){
  $("#header").load("header.html"); 
  $("#footer").load("footer.html"); 
});
</script>
<script language="javascript">
$(document).ready(function()
{
      $(".service_button1").click(function(){
  $( "div.service_page1" ).hide();
  $( "div.service_page2" ).hide();
  $( "div.service_page3" ).hide();
  $( "div.service_page4" ).hide();
  $("div.service_page1").fadeIn();
  $( "#arrow-left" ).animate({
 top:"275px"},300);
  $( ".service_button1" ).animate({
 width:"100%"},300);
   $( ".service_button2" ).animate({
 width:"50%"},300);
   $( ".service_button3" ).animate({
 width:"50%"},300);
   $( ".service_button4" ).animate({
 width:"50%"},300);

      });
	  
	   $(".service_button2").click(function(){
  $( "div.service_page1" ).hide();
  $( "div.service_page2" ).hide();
  $( "div.service_page3" ).hide();
  $( "div.service_page4" ).hide();
  $("div.service_page2").fadeIn();
    $( "#arrow-left" ).animate({
 top:"405px"},300);
   $( ".service_button1" ).animate({
 width:"50%"},300);
   $( ".service_button2" ).animate({
 width:"100%"},300);
   $( ".service_button3" ).animate({
 width:"50%"},300);
   $( ".service_button4" ).animate({
 width:"50%"},300);
      });
	  
	    $(".service_button3").click(function(){
  $( "div.service_page1" ).hide();
  $( "div.service_page2" ).hide();
  $( "div.service_page3" ).hide();
  $( "div.service_page4" ).hide();
  $("div.service_page3").fadeIn();
      $( "#arrow-left" ).animate({
 top:"539px"},300);
    $( ".service_button1" ).animate({
 width:"50%"},300);
   $( ".service_button2" ).animate({
 width:"50%"},300);
   $( ".service_button3" ).animate({
 width:"100%"},300);
   $( ".service_button4" ).animate({
 width:"50%"},300);
      });
	  
	  $(".service_button4").click(function(){
  $( "div.service_page1" ).hide();
  $( "div.service_page2" ).hide();
  $( "div.service_page3" ).hide();
  $( "div.service_page4" ).hide();
  $("div.service_page4").fadeIn();
      $( "#arrow-left" ).animate({
 top:"685px"},300);
    $( ".service_button1" ).animate({
 width:"50%"},300);
   $( ".service_button2" ).animate({
 width:"50%"},300);
   $( ".service_button3" ).animate({
 width:"50%"},300);
   $( ".service_button4" ).animate({
 width:"100%"},300);
      });
  
});
</script>
 <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style/screen.css">
    <link rel="stylesheet" type="text/css" href="style/navbar.css">
    <link rel="stylesheet" type="text/css" href="style/button.css">
    <link rel="stylesheet" type="text/css" href="style/carousel.css">
    <link rel="stylesheet" type="text/css" href="style/grid-vertical.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body ><div id="header"></div>
<div class="team_title"><h2>服务介绍</h2></div>
<div class="team_box"><div class="team_line"><div class="team_triangle"></div></div></div>
<center><div><span id="arrow-left"></span>

<table width="95%" height="100%" border="0"> <tr>
    <td width="30%" valign="top"><center><div class="service_button1"><img width="30%" src="images/service/video.png"><br><h3>视频问诊</h3></div></center></td>
    <td   rowspan="4" valign="top"><center><div class="service_page1">
	<p><span class="service_headline">视频问诊</span><hr><br>
	服务简介：<br>
美约名医将根据患者的病情和意愿，推荐美国相关疾病领域的知名医生对患者进行视频问诊，并制定个性化治疗方案。<br>
适用人群：<br>
长期不能确诊<br>
目前的治疗疗效不理想或产生很大的副作用<br>
被诊断患有非常严重的疾病（如癌症，白血病，罕见病等）<br>
目前国内对所患疾病没有十分完善的治疗方案<br>
希望寻求全方位的医疗体验和个体化治疗方案，享受世界顶尖水平的医疗资源<br>
服务流程：<br>
1)	初步咨询：患者首先就自身病情，国内治疗方案等信息与美约医学顾问进行初步沟通。<br>
2)	医生匹配：我们将在医生资源库中寻找并推荐相应疾病领域的权威专家，将患者的病情与医生的专长精准匹配。<br>
3)	医学资料提供及翻译：患者向美约名医提供详细的医学资料，美约医学团队会在最短时间内将医学资料准确翻译。<br>
4)	远程会诊：医生通过美约名医线上远程视频平台对患者进行问诊，制定个性化治疗方案。美约名医提供在线同声传译服务，保证美国医生和患者交流顺畅。<br>
5) 	诊后随访：诊后3个月内，我们会对患者的治疗情况进行定期跟踪并及时解答患者的问题。</p></div>

<div class="service_page2 page-invisible">
	<p><span class="service_headline">书面问诊</span><hr><br>
服务简介：<br>
美约名医将根据患者的病情和意愿，推荐美国相关疾病领域的知名医生对患者进行书面问诊，制定个性化治疗方案并出具权威报告。<br>
适用人群：<br>
长期不能确诊<br>
目前的治疗疗效不理想或产生很大的副作用<br>
被诊断患有非常严重的疾病（如癌症，白血病，罕见病等）<br>
目前国内对所患疾病没有十分完善的治疗方案<br>
希望寻求全方位的医疗体验和个体化治疗方案，享受世界顶尖水平的医疗资源<br>
服务流程：<br>
1)	初步咨询：患者首先就自身病情，国内治疗方案等信息与美约名医医学顾问进行初步沟通。<br>
2)	医生匹配：我们将在医生资源库中寻找相应疾病领域的权威专家，将患者的病情与医生的专长精准匹配。<br>
3)	医学资料提供及翻译：患者向美约名医提供详细的医学资料，由专业的医学翻译会在最短时间内将医学资料准确翻译并递交给专家。<br>
4)	书面问诊：医生根据患者提供的资料对病情进行全面评估，结合患者自身情况为其量身定做治疗方案，并出具权威的书面报告。<br>
5)	诊后随访：诊后3个月内，我们会对患者的治疗情况进行定期跟踪并及时解答患者的问题。
</p>
</div>

<div class="service_page3 page-invisible">
<p><span class="service_headline">赴美就医</span><hr><br>
服务简介：对于有赴美需求的病人，我们将推荐及预约知名医院和权威名医，并帮助患者及家属提供专业医学翻译、医院预约、交通、食宿等相关事宜。<br>
适用人群：<br> 
长期不能确诊<br>
目前的治疗疗效不理想或产生很大的副作用<br>
被诊断患有非常严重的疾病（如癌症，白血病，罕见病等）<br>
目前国内对所患疾病没有十分完善的治疗方案<br>
希望寻求全方位的医疗体验和个体化治疗方案，享受世界顶尖水平的医疗资源<br>
自身有赴美意愿，身体状况适合赴美就医，且经济实力足够的患者。<br>
服务流程：<br>
1)	确定诊治医院和专家：美约名医将根据患者的病情及个人意愿为其选择匹配度最高的权威医院及专家。<br>
2)	医院预约：患者向美约名医提供详细的医学资料，我们将在美国权威医院和顶级名医领域中寻找相应疾病领域的权威专家，将患者的病情与医院和医生的专长精准匹配，预约成功后，开具医院邀请函和医生预约函。<br>
3)	签证办理：患者持邀请函和预约函赴大使馆办理签证。<br>
4)	赴美就医：在患者就医期间，我们的专业的翻译团队会陪同患者，保证医生和患者间的顺畅沟通（按不同的服务套餐，陪同时间有差别）。同时，我们还将按照患者的需求为您安排交通、住宿、饮食等附加服务，全面保证赴美就医体验。如果患者需要海外购药服务，我们也将提供协助。
</p>
</div>

<div class="service_page4 page-invisible">
	<p><span class="service_headline">私人医生</span><hr><br>
服务简介：私人医生被誉为“健康的守门人”，是发达国家保障人民健康极为重要的一部分。70%的美国有享有私人医生和健康管理服务，而在中国，能够享有私人医生服务的尚不足0.1%。因此美约名医利用领先的远程医疗科技和雄厚的医生资源，打造了美国私人医生服务，让美国顶级名医来守护您全家的健康。
服务流程：<br>
1)	创建个人家庭医疗档案<br>
2)	预约美国家庭专家<br>
3)	视频问诊<br>
4)	因需转诊专科医生<br>
5)	诊断和治疗建议书<br>
6)	协调本地医院落实治疗
</p>
</div>

</center>
</td>
  </tr>
  <tr>
    <td  valign="top"><center><div class="service_button2"><img width="30%" src="images/service/book.png"><br><h3>书面问诊</h3></div></center></td>
  </tr>
  <tr>
    <td  valign="top"><center><div class="service_button3"><img width="30%" src="images/service/airplane.png"><br><h3>赴美医疗</h3></div></center></td>
  </tr>
  <tr>
    <td  valign="top"><center><div class="service_button4"><img width="30%" src="images/service/doctor.png"><br><h3>私人醫生</h3></div></center></td>
  </tr>
  </table></div></center>


<div id="footer"></div>
</body>
