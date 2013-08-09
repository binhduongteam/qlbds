<?php
/* @var $this SiteController */

$this->pageTitle= "Project";
?>

<h2>Welcome to <i><?php echo CHtml::encode(Yii::app()->name) . " Project A"; ?></i></h2>

<img src="<?php echo Yii::app()->request->baseUrl ?>/images/test.jpg" width="600" height="477" border="0" usemap="#Map" class="test"/>
<map name="Map" id="Map">
  <area shape="poly" coords="522,40,552,54,554,64,547,83,533,84,509,65,514,63,509,56,515,48,515,36" href="#" alt="5" />
  <area class="{alwaysOn: true, fillColor:'red'}" shape="poly" coords="497,65,522,87,517,89,511,92,506,97,502,103,498,109,493,110,486,106,485,95,484,74,496,66" href="#" alt="7" />
  <area shape="poly" coords="459,83,461,83,474,84,477,119,442,114,445,97,460,78" href="#" alt="9" />
  <area shape="poly" coords="441,116,475,121,476,135,466,142,457,151,424,134,430,127,438,123,441,116" href="#" alt="11" />
  <area shape="poly" coords="421,139,455,156,447,173,420,170,412,159,413,151,422,139" href="#" alt="13" />
  <area shape="poly" coords="426,176,447,179,435,209,413,207,414,201,412,193,415,186,419,178,425,179,426,175" href="#" alt="15" />
  <area shape="poly" coords="423,219,443,220,425,256,398,239,396,235,398,226,404,222,408,217" href="#" alt="17" />
  <area shape="poly" coords="393,242,394,244,397,242,422,256,409,284,377,265,391,242" href="#" alt="19" />
  <area shape="poly" coords="374,267,407,286,402,296,404,313,361,289,361,282,367,275,371,272,374,267" href="#" alt="21" />
  <area shape="poly" coords="337,341,318,345,299,357,284,321,288,319,298,322,302,319,314,331,326,338,337,340" href="#" alt="25" />
  <area shape="poly" coords="307,314,304,300,312,292,289,269,255,284,274,300,283,320,287,318,298,321,302,318,306,314" href="#" alt="27" />
  <area shape="poly" coords="315,258,334,250,338,258,354,270,351,277,349,284,349,291,350,297,351,302,352,310,350,318,340,321,324,295,314,258" href="#" alt="20" />
  <area shape="poly" coords="340,249,340,252,358,266,369,257,383,235,363,226,357,243,339,249" href="#" alt="18" />
  <area shape="poly" coords="376,199,398,210,393,212,390,217,388,220,386,225,385,230,383,234,363,225,376,200" href="#" alt="16" />
  <area shape="poly" coords="400,201,378,191,397,157,405,165,407,170,408,174,406,178,402,182,401,185,400,190,400,194,400,200" href="#" alt="14" />
  <area shape="poly" coords="440,84,415,80,415,114,426,116,431,112,432,107,433,101,434,96,437,89,441,84" href="#" alt="12" />
  <area shape="poly" coords="423,79,428,71,432,64,436,60,441,58,449,54,457,52,462,54,465,57,469,62,471,68,466,67,460,67,455,69,452,72,447,77,447,76,441,83,423,80" href="#" alt="10" />
  <area shape="poly" coords="362,291,403,315,402,329,345,340,343,337,349,335,354,332,357,328,361,324,363,319,364,313,364,306,363,301,362,296,362,291" href="#" alt="23" />
</map>

<script class="example" type="text/javascript"> 
// Create the tooltips only when document ready
jQuery(document).ready(function()
{
   // Use the each() method to gain access to each elements attributes
   jQuery('area').each(function()
   {
      jQuery(this).qtip(
      {
         content: {
            text: '<img class="tipcontent" src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg">Can ho cao cap quan ly bat dong san.',
            title: 'Lot Number ' + jQuery(this).attr('alt'), // Use the ALT attribute of the area map
         },
         style: {
            name: 'cream', // Give it the preset cream style
            border: {
               width: 0, 
               radius: 4 
            }, 
            tip: true // Apply a tip at the default tooltip corner
         },
         hide: { fixed: true, delay: 500 }
      });
   });
});
</script>
<script type="text/javascript">
jQuery(function(){
  jQuery('.test').maphilight({
    strokeWidth: 2,
    alwaysOn: true,
    neverOn: false,
    groupBy: false,
    wrapClass: true,
    shadow: true,
    shadowX: 0,
    shadowY: 0,
    shadowRadius: 6,
    shadowColor: '000000',
    shadowOpacity: 0.8,
    shadowPosition: 'outside',
    shadowFrom: false         
  });
 });
</script>