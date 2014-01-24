<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_xml extends HFile{
   function HFile_xml(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// XML
/*************************************/
// Flags

$this->nocase            	= "0";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "brown", "blue", "purple");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array();
$this->unindent          	= array();

// String characters and delimiters

$this->stringchars       	= array("\"","'");
//$this->stringchars       	= array();
$this->delimiters        	= array("~", "@", "$", "%", "^", "&", "*", "(", ")", "+", "=", "|", "\\", "{", "}", ";", "\"", "'", "<", ">", " ", ",", "	", " ");
$this->escchar           	= "";
$this->tagbased			= true;

// Comment settings

$this->linecommenton     	= array("");
$this->blockcommenton    	= array("<!--");
$this->blockcommentoff   	= array("-->");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"**" => "1", 
			"<" => "1", 
			"<a" => "1", 
			"</a>" => "1", 
			"<abbr>" => "1", 
			"<abbr" => "1", 
			"</abbr>" => "1", 
			"<above>" => "1", 
			"<abstract>" => "1", 
			"</abstract>" => "1", 
			"<acronym>" => "1", 
			"</acronym>" => "1", 
			"<activity>" => "1", 
			"</activity>" => "1", 
			"<actor>" => "1", 
			"<actor" => "1", 
			"</actor>" => "1", 
			"<add>" => "1", 
			"<add" => "1", 
			"</add>" => "1", 
			"<addName" => "1", 
			"</addName>" => "1", 
			"<address>" => "1", 
			"<address" => "1", 
			"</address>" => "1", 
			"<addressList>" => "1", 
			"</addressList>" => "1", 
			"<addrLine>" => "1", 
			"<addSpan" => "1", 
			"<admin" => "1", 
			"</admin>" => "1", 
			"<affiliation>" => "1", 
			"</affiliation>" => "1", 
			"<alt" => "1", 
			"<altGrp" => "1", 
			"</altGrp>" => "1", 
			"<analytic>" => "1", 
			"</analytic>" => "1", 
			"<anchor" => "1", 
			"<any>" => "1", 
			"</any>" => "1", 
			"<app>" => "1", 
			"<app" => "1", 
			"</app>" => "1", 
			"<applet" => "1", 
			"</applet>" => "1", 
			"<apply" => "1", 
			"<arc" => "1", 
			"<argument>" => "1", 
			"</argument>" => "1", 
			"<array>" => "1", 
			"<area" => "1", 
			"</area" => "1", 
			"<arg" => "1", 
			"<att>" => "1", 
			"<att" => "1", 
			"</att>" => "1", 
			"<attDef>" => "1", 
			"<attDef" => "1", 
			"</attDef>" => "1", 
			"<attlDecl>" => "1", 
			"<attlDecl" => "1", 
			"</attlDecl>" => "1", 
			"<attList>" => "1", 
			"<attList" => "1", 
			"</attList>" => "1", 
			"<attName>" => "1", 
			"</attName>" => "1", 
			"<author>" => "1", 
			"</author>" => "1", 
			"<authority>" => "1", 
			"</authority>" => "1", 
			"<availability>" => "1", 
			"<availability" => "1", 
			"</availability>" => "1", 
			"<b>" => "1", 
			"<b" => "1", 
			"</b>" => "1", 
			"<back>" => "1", 
			"<back" => "1", 
			"</back>" => "1", 
			"<base" => "1", 
			"<basefont" => "1", 
			"<baseWsd" => "1", 
			"<bdo>" => "1", 
			"</bdo>" => "1", 
			"<bgsound" => "1", 
			"<bibl>" => "1", 
			"<bibl" => "1", 
			"</bibl>" => "1", 
			"<biblFull>" => "1", 
			"</biblFull>" => "1", 
			"<biblScope>" => "1", 
			"<biblStruct>" => "1", 
			"<biblStruct" => "1", 
			"</biblStruct>" => "1", 
			"<bicond>" => "1", 
			"</bicond>" => "1", 
			"<big>" => "1", 
			"<big" => "1", 
			"</big>" => "1", 
			"<birth>" => "1", 
			"<birth" => "1", 
			"</birth>" => "1", 
			"<birthDate>" => "1", 
			"<birthPlace>" => "1", 
			"<blink>" => "1", 
			"<blink" => "1", 
			"</blink>" => "1", 
			"<bloc" => "1", 
			"</bloc>" => "1", 
			"<blockquote>" => "1", 
			"<blockquote" => "1", 
			"</blockquote>" => "1", 
			"<body>" => "1", 
			"<body" => "1", 
			"</body>" => "1", 
			"<box>" => "1", 
			"</box>" => "1", 
			"<br" => "1", 
			"<br>" => "1", 
			"<br/>" => "1", 
			"<broadcast>" => "1", 
			"</broadcast>" => "1", 
			"<button>" => "1", 
			"</button>" => "1", 
			"<byline>" => "1", 
			"</byline>" => "1", 
			"<c>" => "1", 
			"<c" => "1", 
			"</c>" => "1", 
			"<caesura>" => "1", 
			"<calEvent>" => "1", 
			"</calEvent>" => "1", 
			"<camera>" => "1", 
			"</camera>" => "1", 
			"<caption>" => "1", 
			"<caption" => "1", 
			"</caption>" => "1", 
			"<case>" => "1", 
			"<castGroup>" => "1", 
			"<castGroup" => "1", 
			"</castGroup>" => "1", 
			"<castItem>" => "1", 
			"<castItem" => "1", 
			"</castItem>" => "1", 
			"<castList>" => "1", 
			"</castList>" => "1", 
			"<catDesc>" => "1", 
			"</catDesc>" => "1", 
			"<category" => "1", 
			"</category>" => "1", 
			"<catRef" => "1", 
			"<cb>" => "1", 
			"<cb" => "1", 
			"<cell>" => "1", 
			"<cell" => "1", 
			"</cell>" => "1", 
			"<center>" => "1", 
			"<center" => "1", 
			"</center>" => "1", 
			"<certainty" => "1", 
			"<cf>" => "1", 
			"</cf>" => "1", 
			"<channel" => "1", 
			"</channel>" => "1", 
			"<change>" => "1", 
			"<change" => "1", 
			"</change>" => "1", 
			"<character>" => "1", 
			"<character" => "1", 
			"</character>" => "1", 
			"<characters>" => "1", 
			"</characters>" => "1", 
			"<children>" => "1", 
			"<children" => "1", 
			"<children/>" => "1", 
			"<cit>" => "1", 
			"</cit>" => "1", 
			"<cite>" => "1", 
			"<cite" => "1", 
			"</cite>" => "1", 
			"<city>" => "1", 
			"</city>" => "1", 
			"<cl>" => "1", 
			"<cl" => "1", 
			"</cl>" => "1", 
			"<class>" => "1", 
			"<class" => "1", 
			"</class>" => "1", 
			"<classCode" => "1", 
			"<classDecl>" => "1", 
			"</classDecl>" => "1", 
			"<classDoc>" => "1", 
			"<classDoc" => "1", 
			"</classDoc>" => "1", 
			"<classes>" => "1", 
			"<classes" => "1", 
			"</classes>" => "1", 
			"<closer>" => "1", 
			"</closer>" => "1", 
			"<code>" => "1", 
			"<code" => "1", 
			"</code>" => "1", 
			"<codedCharSet>" => "1", 
			"<codedCharSet" => "1", 
			"<col>" => "1", 
			"</col>" => "1", 
			"<colgroup>" => "1", 
			"</colgroup>" => "1", 
			"<colloc>" => "1", 
			"<colloc" => "1", 
			"</colloc>" => "1", 
			"<comment>" => "1", 
			"</comment>" => "1", 
			"<commentary" => "1", 
			"</commentary>" => "1", 
			"<cond>" => "1", 
			"</cond>" => "1", 
			"<constitution" => "1", 
			"</constitution>" => "1", 
			"<contents/>" => "1", 
			"<corr>" => "1", 
			"<corr" => "1", 
			"</corr>" => "1", 
			"<correction>" => "1", 
			"</correction>" => "1", 
			"<country>" => "1", 
			"<country" => "1", 
			"</country>" => "1", 
			"<creation>" => "1", 
			"</creation>" => "1", 
			"<creationDate>" => "1", 
			"</creationDate>" => "1", 
			"<damage>" => "1", 
			"<damage" => "1", 
			"</damage>" => "1", 
			"<dataDesc>" => "1", 
			"</dataDesc>" => "1", 
			"<dataType>" => "1", 
			"<date>" => "1", 
			"<date" => "1", 
			"</date>" => "1", 
			"<dateline>" => "1", 
			"</dateline>" => "1", 
			"<dateRange" => "1", 
			"</dateRange>" => "1", 
			"<dateStruct>" => "1", 
			"<dateStruct" => "1", 
			"</dateStruct>" => "1", 
			"<day>" => "1", 
			"<day" => "1", 
			"</day>" => "1", 
			"<dd>" => "1", 
			"<dd" => "1", 
			"</dd>" => "1", 
			"<def>" => "1", 
			"</def>" => "1", 
			"<default>" => "1", 
			"<define-macro" => "1", 
			"</define-macro>" => "1", 
			"<define-script>" => "1", 
			"</define-script>" => "1", 
			"<define-style" => "1", 
			"<del>" => "1", 
			"<del" => "1", 
			"</del>" => "1", 
			"<delSpan" => "1", 
			"<derivation" => "1", 
			"</derivation>" => "1", 
			"<desc>" => "1", 
			"<desc" => "1", 
			"</desc>" => "1", 
			"<descrip>" => "1", 
			"<descrip" => "1", 
			"</descrip>" => "1", 
			"<dfn>" => "1", 
			"<dfn" => "1", 
			"</dfn>" => "1", 
			"<dft>" => "1", 
			"<dir>" => "1", 
			"<dir" => "1", 
			"</dir>" => "1", 
			"<direction" => "1", 
			"<display-group>" => "1", 
			"<display-group" => "1", 
			"</display-group>" => "1", 
			"<distance>" => "1", 
			"<distance" => "1", 
			"</distance>" => "1", 
			"<distinct" => "1", 
			"</distinct>" => "1", 
			"<distributor>" => "1", 
			"</distributor>" => "1", 
			"<div>" => "1", 
			"<div" => "1", 
			"</div>" => "1", 
			"<div0>" => "1", 
			"<div0" => "1", 
			"</div0>" => "1", 
			"<div1>" => "1", 
			"<div1" => "1", 
			"</div1>" => "1", 
			"<div2>" => "1", 
			"<div2" => "1", 
			"</div2>" => "1", 
			"<div3>" => "1", 
			"<div3" => "1", 
			"</div3>" => "1", 
			"<div4>" => "1", 
			"<div4" => "1", 
			"</div4>" => "1", 
			"<div5>" => "1", 
			"<div5" => "1", 
			"</div5>" => "1", 
			"<div6>" => "1", 
			"<div6" => "1", 
			"</div6>" => "1", 
			"<div7>" => "1", 
			"<div7" => "1", 
			"</div7>" => "1", 
			"<divGen" => "1", 
			"<dl>" => "1", 
			"<dl" => "1", 
			"</dl>" => "1", 
			"<doc>" => "1", 
			"</doc>" => "1", 
			"<docAuthor>" => "1", 
			"</docAuthor>" => "1", 
			"<docDate>" => "1", 
			"<docEdition>" => "1", 
			"</docEdition>" => "1", 
			"<docImprint>" => "1", 
			"</docImprint>" => "1", 
			"<docTitle>" => "1", 
			"</docTitle>" => "1", 
			"<domain" => "1", 
			"</domain>" => "1", 
			"<dt>" => "1", 
			"<dt" => "1", 
			"</dt>" => "1", 
			"<earliesttime" => "1", 
			"<edition>" => "1", 
			"<edition" => "1", 
			"</edition>" => "1", 
			"<editionStmt>" => "1", 
			"</editionStmt>" => "1", 
			"<editor>" => "1", 
			"<editor" => "1", 
			"</editor>" => "1", 
			"<editorialDecl>" => "1", 
			"<editorialDecl" => "1", 
			"</editorialDecl>" => "1", 
			"<education>" => "1", 
			"</education>" => "1", 
			"<eg>" => "1", 
			"</eg>" => "1", 
			"<egwd>" => "1", 
			"</egwd>" => "1", 
			"<eLeaf" => "1", 
			"<elemDecl>" => "1", 
			"<elemDecl" => "1", 
			"</elemDecl>" => "1", 
			"<em>" => "1", 
			"<em" => "1", 
			"</em>" => "1", 
			"<embed" => "1", 
			"<emph>" => "1", 
			"<emph" => "1", 
			"</emph>" => "1", 
			"<encodingDesc>" => "1", 
			"</encodingDesc>" => "1", 
			"<ent" => "1", 
			"</ent>" => "1", 
			"<entDoc>" => "1", 
			"<entDoc" => "1", 
			"</entDoc>" => "1", 
			"<entitySet>" => "1", 
			"<entitySet" => "1", 
			"<entName>" => "1", 
			"<entName" => "1", 
			"</entName>" => "1", 
			"<entry>" => "1", 
			"<entry" => "1", 
			"</entry>" => "1", 
			"<entryFree>" => "1", 
			"</entryFree>" => "1", 
			"<epigraph>" => "1", 
			"<epigraph" => "1", 
			"</epigraph>" => "1", 
			"<epilogue>" => "1", 
			"</epilogue>" => "1", 
			"<equipment>" => "1", 
			"</equipment>" => "1", 
			"<equiv" => "1", 
			"<eTree" => "1", 
			"</eTree>" => "1", 
			"<etym>" => "1", 
			"</etym>" => "1", 
			"<eval>" => "1", 
			"</eval>" => "1", 
			"<event" => "1", 
			"<exceptions>" => "1", 
			"<exceptions" => "1", 
			"</exceptions>" => "1", 
			"<exemplum>" => "1", 
			"<exemplum" => "1", 
			"</exemplum>" => "1", 
			"<expan" => "1", 
			"</expan>" => "1", 
			"<extent>" => "1", 
			"</extent>" => "1", 
			"<external-graphic" => "1", 
			"<extFigure" => "1", 
			"<f" => "1", 
			"</f>" => "1", 
			"<factuality" => "1", 
			"</factuality>" => "1", 
			"<fAlt>" => "1", 
			"<fAlt" => "1", 
			"</fAlt>" => "1", 
			"<fDecl>" => "1", 
			"<fDecl" => "1", 
			"</fDecl>" => "1", 
			"<fDescr>" => "1", 
			"</fDescr>" => "1", 
			"<fieldset>" => "1", 
			"</fieldset>" => "1", 
			"<fig>" => "1", 
			"<figDesc>" => "1", 
			"</figDesc>" => "1", 
			"<figure" => "1", 
			"</figure>" => "1", 
			"<fileDesc>" => "1", 
			"</fileDesc>" => "1", 
			"<files>" => "1", 
			"<files" => "1", 
			"</files>" => "1", 
			"<firstLang>" => "1", 
			"</firstLang>" => "1", 
			"<fLib" => "1", 
			"</fLib>" => "1", 
			"<font" => "1", 
			"</font>" => "1", 
			"<forest>" => "1", 
			"<forest" => "1", 
			"</forest>" => "1", 
			"<forestGrp>" => "1", 
			"</forestGrp>" => "1", 
			"<form" => "1", 
			"<formula" => "1", 
			"</formula>" => "1", 
			"<fs>" => "1", 
			"<fs" => "1", 
			"</fs>" => "1", 
			"<fsConstraints>" => "1", 
			"<fsConstraints" => "1", 
			"</fsConstraints>" => "1", 
			"<fsdDecl" => "1", 
			"<fsDecl" => "1", 
			"</fsDecl>" => "1", 
			"<fsDescr>" => "1", 
			"<fsLib" => "1", 
			"</fsLib>" => "1", 
			"<foreign>" => "1", 
			"<foreign" => "1", 
			"</foreign>" => "1", 
			"<foreName>" => "1", 
			"<foreName" => "1", 
			"</foreName>" => "1", 
			"<form>" => "1", 
			"</form>" => "1", 
			"<formula>" => "1", 
			"<frame" => "1", 
			"<frameset" => "1", 
			"</frameset>" => "1", 
			"<front>" => "1", 
			"</front>" => "1", 
			"<funder>" => "1", 
			"</funder>" => "1", 
			"<fvLib" => "1", 
			"</fvLib>" => "1", 
			"<fw" => "1", 
			"</fw>" => "1", 
			"<gap>" => "1", 
			"<gap" => "1", 
			"<gen>" => "1", 
			"</gen>" => "1", 
			"<genName>" => "1", 
			"</genName>" => "1", 
			"<geog>" => "1", 
			"</geog>" => "1", 
			"<geogName>" => "1", 
			"<geogName" => "1", 
			"</geogName>" => "1", 
			"</gfn>" => "1", 
			"<gi>" => "1", 
			"<gi" => "1", 
			"</gi>" => "1", 
			"<gloss>" => "1", 
			"<gloss" => "1", 
			"</gloss>" => "1", 
			"<gram" => "1", 
			"</gram>" => "1", 
			"<gramGrp>" => "1", 
			"<gramGrp" => "1", 
			"</gramGrp>" => "1", 
			"<graph" => "1", 
			"</graph>" => "1", 
			"<group>" => "1", 
			"</group>" => "1", 
			"<h>" => "1", 
			"</h>" => "1", 
			"<h1>" => "1", 
			"<h1" => "1", 
			"<h2>" => "1", 
			"<h2" => "1", 
			"<h3>" => "1", 
			"<h3" => "1", 
			"<h4>" => "1", 
			"<h4" => "1", 
			"<h5>" => "1", 
			"<h5" => "1", 
			"<h6>" => "1", 
			"<h6" => "1", 
			"</h1>" => "1", 
			"</h2>" => "1", 
			"</h3>" => "1", 
			"</h4>" => "1", 
			"</h5>" => "1", 
			"</h6>" => "1", 
			"<hand>" => "1", 
			"<hand" => "1", 
			"<handList>" => "1", 
			"</handList>" => "1", 
			"<handShift>" => "1", 
			"<handShift" => "1", 
			"<head>" => "1", 
			"<head" => "1", 
			"</head>" => "1", 
			"<headItem>" => "1", 
			"<headItem" => "1", 
			"</headItem>" => "1", 
			"<headLabel>" => "1", 
			"<headLabel" => "1", 
			"</headLabel>" => "1", 
			"<hi>" => "1", 
			"<hi" => "1", 
			"</hi>" => "1", 
			"<hom>" => "1", 
			"<hom" => "1", 
			"</hom>" => "1", 
			"<home>" => "1", 
			"</home>" => "1", 
			"<horizontal-rule/>" => "1", 
			"<hour>" => "1", 
			"<hour" => "1", 
			"</hour>" => "1", 
			"<hps" => "1", 
			"</hps>" => "1", 
			"<hr>" => "1", 
			"<hr" => "1", 
			"<hr/>" => "1", 
			"<hsn>" => "1", 
			"</hsn>" => "1", 
			"<html>" => "1", 
			"</html>" => "1", 
			"<hwd>" => "1", 
			"</hwd>" => "1", 
			"<hyph>" => "1", 
			"</hyph>" => "1", 
			"<hyphenation" => "1", 
			"</hyphenation>" => "1", 
			"<i>" => "1", 
			"<i" => "1", 
			"</i>" => "1", 
			"<id" => "1", 
			"<idno>" => "1", 
			"<idno" => "1", 
			"</idno>" => "1", 
			"<if>" => "1", 
			"<iff>" => "1", 
			"<iframe>" => "1", 
			"</iframe>" => "1", 
			"<ihs>" => "1", 
			"</ihs>" => "1", 
			"<ilayer>" => "1", 
			"</ilayer>" => "1", 
			"<img" => "1", 
			"<imprimatur>" => "1", 
			"<imprint>" => "1", 
			"</imprint>" => "1", 
			"<index" => "1", 
			"<iNode" => "1", 
			"<input>" => "1", 
			"<input" => "1", 
			"<ins>" => "1", 
			"<interaction" => "1", 
			"<interp" => "1", 
			"<interpGrp>" => "1", 
			"<interpGrp" => "1", 
			"</interpGrp>" => "1", 
			"<interpretation>" => "1", 
			"<intervaltime" => "1", 
			"<invoke" => "1", 
			"</invoke>" => "1", 
			"<isindex>" => "1", 
			"<item>" => "1", 
			"<item" => "1", 
			"</item>" => "1", 
			"<itype>" => "1", 
			"<itype" => "1", 
			"</itype>" => "1", 
			"<join" => "1", 
			"<joinGrp" => "1", 
			"</joinGrp>" => "1", 
			"<kbd>" => "1", 
			"<kbd" => "1", 
			"</kbd>" => "1", 
			"<keywords>" => "1", 
			"<keywords" => "1", 
			"</keywords>" => "1", 
			"<kinesic" => "1", 
			"<l>" => "1", 
			"<l" => "1", 
			"</l>" => "1", 
			"<label>" => "1", 
			"<label" => "1", 
			"</label>" => "1", 
			"<lacunaEnd>" => "1", 
			"<lacunaStart>" => "1", 
			"<lang>" => "1", 
			"</lang>" => "1", 
			"<langKnown>" => "1", 
			"</langKnown>" => "1", 
			"<language>" => "1", 
			"<language" => "1", 
			"</language>" => "1", 
			"<langUsage>" => "1", 
			"</langUsage>" => "1", 
			"<latesttime" => "1", 
			"<layer>" => "1", 
			"<lb>" => "1", 
			"<lb" => "1", 
			"<lbl>" => "1", 
			"<lbl" => "1", 
			"</lbl>" => "1", 
			"<leaf" => "1", 
			"<legend>" => "1", 
			"</legend>" => "1", 
			"<lem>" => "1", 
			"<lem" => "1", 
			"<lg>" => "1", 
			"<lg" => "1", 
			"</lg>" => "1", 
			"<lg1>" => "1", 
			"<lg1" => "1", 
			"</lg1>" => "1", 
			"<lg2>" => "1", 
			"<lg2" => "1", 
			"</lg2>" => "1", 
			"<lg3>" => "1", 
			"<lg3" => "1", 
			"</lg3>" => "1", 
			"<lg4>" => "1", 
			"<lg4" => "1", 
			"</lg4>" => "1", 
			"<lg5>" => "1", 
			"<lg5" => "1", 
			"</lg5>" => "1", 
			"<li>" => "1", 
			"<li" => "1", 
			"</li>" => "1", 
			"<line>" => "1", 
			"<line-field" => "1", 
			"</line-field>" => "1", 
			"<link>" => "1", 
			"<link" => "1", 
			"</link>" => "1", 
			"<linkGrp" => "1", 
			"</linkGrp>" => "1", 
			"<list>" => "1", 
			"<list" => "1", 
			"</list>" => "1", 
			"<listBibl>" => "1", 
			"</listBibl>" => "1", 
			"<listing>" => "1", 
			"</listing>" => "1", 
			"<list-item" => "1", 
			"</list-item>" => "1", 
			"<locale>" => "1", 
			"<locator" => "1", 
			"<log" => "1", 
			"<logtarget" => "1", 
			"</logtarget>" => "1", 
			"<m>" => "1", 
			"<m" => "1", 
			"</m>" => "1", 
			"<map" => "1", 
			"</map>" => "1", 
			"<marquee" => "1", 
			"</marquee>" => "1", 
			"<measure" => "1", 
			"</measure>" => "1", 
			"<meeting>" => "1", 
			"</meeting>" => "1", 
			"<mentioned>" => "1", 
			"<mentioned" => "1", 
			"</mentioned>" => "1", 
			"<menu>" => "1", 
			"<menu" => "1", 
			"</menu>" => "1", 
			"<meta" => "1", 
			"<metDecl>" => "1", 
			"<metDecl" => "1", 
			"</metDecl>" => "1", 
			"<milestone" => "1", 
			"<minus>" => "1", 
			"<minus" => "1", 
			"<minute>" => "1", 
			"<minute" => "1", 
			"</minute>" => "1", 
			"<monogr>" => "1", 
			"</monogr>" => "1", 
			"<month>" => "1", 
			"<month" => "1", 
			"</month>" => "1", 
			"<mood>" => "1", 
			"<move" => "1", 
			"<msr" => "1", 
			"<multicol>" => "1", 
			"</multicol>" => "1", 
			"<mylink" => "1", 
			"</mylink>" => "1", 
			"<name>" => "1", 
			"<name" => "1", 
			"</name>" => "1", 
			"<nameLink>" => "1", 
			"</nameLink>" => "1", 
			"<nbr" => "1", 
			"<nextid" => "1", 
			"<nobr>" => "1", 
			"</nobr>" => "1", 
			"<node" => "1", 
			"<noframes>" => "1", 
			"</noframes>" => "1", 
			"<nolayer>" => "1", 
			"</nolayer>" => "1", 
			"<none>" => "1", 
			"<normalization>" => "1", 
			"<normalization" => "1", 
			"</normalization>" => "1", 
			"<noscript>" => "1", 
			"</noscript>" => "1", 
			"<note>" => "1", 
			"<note" => "1", 
			"</note>" => "1", 
			"<notesStmt>" => "1", 
			"</notesStmt>" => "1", 
			"<null>" => "1", 
			"<num>" => "1", 
			"<num" => "1", 
			"</num>" => "1", 
			"<number>" => "1", 
			"</number>" => "1", 
			"<object>" => "1", 
			"</object>" => "1", 
			"<occasion>" => "1", 
			"<occasion" => "1", 
			"</occasion>" => "1", 
			"<occupation>" => "1", 
			"<occupation" => "1", 
			"</occupation>" => "1", 
			"<offset>" => "1", 
			"</offset>" => "1", 
			"<ofig>" => "1", 
			"<ol>" => "1", 
			"<ol" => "1", 
			"</ol>" => "1", 
			"<omit>" => "1", 
			"<omit" => "1", 
			"</omit>" => "1", 
			"<opener>" => "1", 
			"</opener>" => "1", 
			"<option>" => "1", 
			"<option" => "1", 
			"</option>" => "1", 
			"<optgroup>" => "1", 
			"</optgroup>" => "1", 
			"<oRef>" => "1", 
			"<oRef" => "1", 
			"<org>" => "1", 
			"</org>" => "1", 
			"<orgDivn" => "1", 
			"</orgDivn>" => "1", 
			"<orgName" => "1", 
			"</orgName>" => "1", 
			"<orgTitle" => "1", 
			"</orgTitle>" => "1", 
			"<orgType" => "1", 
			"</orgType>" => "1", 
			"<orig>" => "1", 
			"<orig" => "1", 
			"</orig>" => "1", 
			"<ornament" => "1", 
			"</ornament>" => "1", 
			"<orth>" => "1", 
			"<orth" => "1", 
			"</orth>" => "1", 
			"<otherForm>" => "1", 
			"<oVar>" => "1", 
			"<oVar" => "1", 
			"</oVar>" => "1", 
			"<p>" => "1", 
			"<p" => "1", 
			"</p>" => "1", 
			"<page>" => "1", 
			"<paragraph>" => "1", 
			"<paragraph" => "1", 
			"</paragraph>" => "1", 
			"<para" => "1", 
			"<param" => "1", 
			"<parents>" => "1", 
			"<part>" => "1", 
			"<part" => "1", 
			"</part>" => "1", 
			"<particDesc>" => "1", 
			"</particDesc>" => "1", 
			"<participant>" => "1", 
			"<participant" => "1", 
			"</participant>" => "1", 
			"<participantGrp>" => "1", 
			"<particLinks>" => "1", 
			"<particLinks" => "1", 
			"</particLinks>" => "1", 
			"<pause>" => "1", 
			"<pb>" => "1", 
			"<pb" => "1", 
			"<per>" => "1", 
			"<performance>" => "1", 
			"</performance>" => "1", 
			"<persName>" => "1", 
			"<persName" => "1", 
			"</persName>" => "1", 
			"<person" => "1", 
			"</person>" => "1", 
			"<personGrp>" => "1", 
			"</personGrp>" => "1", 
			"<ph>" => "1", 
			"</ph>" => "1", 
			"<phr>" => "1", 
			"<phr" => "1", 
			"</phr>" => "1", 
			"<place>" => "1", 
			"</place>" => "1", 
			"<placeName>" => "1", 
			"<placeName" => "1", 
			"</placeName>" => "1", 
			"<plus>" => "1", 
			"<plus" => "1", 
			"<pos>" => "1", 
			"</pos>" => "1", 
			"<PostBox>" => "1", 
			"</postBox>" => "1", 
			"<postCode>" => "1", 
			"</postCode>" => "1", 
			"<pr>" => "1", 
			"</pr>" => "1", 
			"<pre>" => "1", 
			"<pre" => "1", 
			"</pre>" => "1", 
			"<pReg>" => "1", 
			"<preparedness" => "1", 
			"<principal>" => "1", 
			"</principal>" => "1", 
			"<profileDesc>" => "1", 
			"</profileDesc>" => "1", 
			"<pron>" => "1", 
			"<pron" => "1", 
			"</pron>" => "1", 
			"<projectDesc>" => "1", 
			"</projectDesc>" => "1", 
			"<prologue>" => "1", 
			"</prologue>" => "1", 
			"<ptr" => "1", 
			"<publicationStmt>" => "1", 
			"</publicationStmt>" => "1", 
			"<publisher>" => "1", 
			"</publisher>" => "1", 
			"<pubPlace>" => "1", 
			"</pubPlace>" => "1", 
			"<purgetime" => "1", 
			"<purpose" => "1", 
			"<purposes>" => "1", 
			"</purposes>" => "1", 
			"<pVar" => "1", 
			"<q>" => "1", 
			"<q" => "1", 
			"</q>" => "1", 
			"<quotation" => "1", 
			"</quotation>" => "1", 
			"<quote>" => "1", 
			"</quote>" => "1", 
			"<range>" => "1", 
			"<rate" => "1", 
			"<rdg>" => "1", 
			"<rdg" => "1", 
			"</rdg>" => "1", 
			"<rdgGrp" => "1", 
			"</rdgGrp>" => "1", 
			"<re>" => "1", 
			"<re" => "1", 
			"</re>" => "1", 
			"<recording" => "1", 
			"</recording>" => "1", 
			"<recordingStmt>" => "1", 
			"</recordingStmt>" => "1", 
			"<ref>" => "1", 
			"<ref" => "1", 
			"</ref>" => "1", 
			"<refsDecl>" => "1", 
			"<refsDecl" => "1", 
			"</refsDecl>" => "1", 
			"<reg>" => "1", 
			"<reg" => "1", 
			"</reg>" => "1", 
			"<region>" => "1", 
			"<region" => "1", 
			"</region>" => "1", 
			"<relation" => "1", 
			"<relationship" => "1", 
			"</relationship>" => "1", 
			"<relPlace>" => "1", 
			"</relPlace>" => "1", 
			"<remarks>" => "1", 
			"<rendition" => "1", 
			"</rendition>" => "1", 
			"<residence>" => "1", 
			"</residence>" => "1", 
			"<resp>" => "1", 
			"</resp>" => "1", 
			"<respons" => "1", 
			"<respStmt>" => "1", 
			"</respStmt>" => "1", 
			"<restore" => "1", 
			"</restore>" => "1", 
			"<revisionDesc>" => "1", 
			"</revisionDesc>" => "1", 
			"<role>" => "1", 
			"<role" => "1", 
			"</role>" => "1", 
			"<roleDesc>" => "1", 
			"</roleDesc>" => "1", 
			"<roleName>" => "1", 
			"<roleName" => "1", 
			"</roleName>" => "1", 
			"<root>" => "1", 
			"<root" => "1", 
			"<root/>" => "1", 
			"<row>" => "1", 
			"<row" => "1", 
			"</row>" => "1", 
			"<rs>" => "1", 
			"<rs" => "1", 
			"</rs>" => "1", 
			"<rule>" => "1", 
			"<rule" => "1", 
			"</rule>" => "1", 
			"<s>" => "1", 
			"<s" => "1", 
			"</s>" => "1", 
			"<salute>" => "1", 
			"</salute>" => "1", 
			"<samp>" => "1", 
			"<samp" => "1", 
			"</samp>" => "1", 
			"<samplingDecl>" => "1", 
			"</samplingDecl>" => "1", 
			"<schedule" => "1", 
			"</schedule>" => "1", 
			"<script>" => "1", 
			"<script" => "1", 
			"</script>" => "1", 
			"<scriptStmt" => "1", 
			"</scriptStmt>" => "1", 
			"<scroll" => "1", 
			"</scroll>" => "1", 
			"<second>" => "1", 
			"<second" => "1", 
			"</second>" => "1", 
			"<seg>" => "1", 
			"<seg" => "1", 
			"</seg>" => "1", 
			"<seg1>" => "1", 
			"<seg1" => "1", 
			"</seg1>" => "1", 
			"<segmentation>" => "1", 
			"</segmentation>" => "1", 
			"<select>" => "1", 
			"<select" => "1", 
			"</select>" => "1", 
			"<select-elements>" => "1", 
			"</select-elements>" => "1", 
			"<sense>" => "1", 
			"<sense" => "1", 
			"</sense>" => "1", 
			"<sequence>" => "1", 
			"</sequence>" => "1", 
			"<series>" => "1", 
			"</series>" => "1", 
			"<seriesStmt>" => "1", 
			"</seriesStmt>" => "1", 
			"<seriesTitle>" => "1", 
			"</seriesTitle>" => "1", 
			"<set>" => "1", 
			"</set>" => "1", 
			"<setting>" => "1", 
			"<setting" => "1", 
			"</setting>" => "1", 
			"<settingDesc>" => "1", 
			"</settingDesc>" => "1", 
			"<settle>" => "1", 
			"<settle" => "1", 
			"</settle>" => "1", 
			"<settlement" => "1", 
			"</settlement>" => "1", 
			"<shift>" => "1", 
			"<shift" => "1", 
			"<sic>" => "1", 
			"<sic" => "1", 
			"</sic>" => "1", 
			"<signed>" => "1", 
			"<signed" => "1", 
			"</signed>" => "1", 
			"<small>" => "1", 
			"<small" => "1", 
			"</small>" => "1", 
			"<soCalled>" => "1", 
			"<soCalled" => "1", 
			"</soCalled>" => "1", 
			"<socecStatus>" => "1", 
			"<socecStatus" => "1", 
			"<sound>" => "1", 
			"<sound" => "1", 
			"</sound>" => "1", 
			"<sourceDesc>" => "1", 
			"</sourceDesc>" => "1", 
			"<sp>" => "1", 
			"<sp" => "1", 
			"</sp>" => "1", 
			"<space" => "1", 
			"<spacer>" => "1", 
			"<span>" => "1", 
			"<span" => "1", 
			"</span>" => "1", 
			"<spanGrp" => "1", 
			"</spanGrp>" => "1", 
			"<speaker>" => "1", 
			"</speaker>" => "1", 
			"<sponsor>" => "1", 
			"</sponsor>" => "1", 
			"<sqrt>" => "1", 
			"<stage>" => "1", 
			"<stage" => "1", 
			"</stage>" => "1", 
			"<state>" => "1", 
			"<state" => "1", 
			"</state>" => "1", 
			"<stdVals>" => "1", 
			"</stdVals>" => "1", 
			"<step" => "1", 
			"<str>" => "1", 
			"<str" => "1", 
			"</str>" => "1", 
			"<street>" => "1", 
			"</street>" => "1", 
			"<stress>" => "1", 
			"<strike>" => "1", 
			"<strike" => "1", 
			"</strike>" => "1", 
			"<string>" => "1", 
			"</string>" => "1", 
			"<strong>" => "1", 
			"<strong" => "1", 
			"</strong>" => "1", 
			"<style>" => "1", 
			"<style" => "1", 
			"</style>" => "1", 
			"<style-rule>" => "1", 
			"</style-rule>" => "1", 
			"<sub>" => "1", 
			"<sub" => "1", 
			"</sub>" => "1", 
			"<subc>" => "1", 
			"</subc>" => "1", 
			"<sup>" => "1", 
			"<sup" => "1", 
			"</sup>" => "1", 
			"<superEntry>" => "1", 
			"</superEntry>" => "1", 
			"<supplied>" => "1", 
			"<supplied" => "1", 
			"</supplied>" => "1", 
			"<surName>" => "1", 
			"<surName" => "1", 
			"</surName>" => "1", 
			"<syll>" => "1", 
			"</syll>" => "1", 
			"<sym" => "1", 
			"<symbol" => "1", 
			"<table>" => "1", 
			"<table" => "1", 
			"</table>" => "1", 
			"<tag>" => "1", 
			"</tag>" => "1", 
			"<tagDoc>" => "1", 
			"</tagDoc>" => "1", 
			"<tagsDecl>" => "1", 
			"</tagsDecl>" => "1", 
			"<tagUsage" => "1", 
			"</tagUsage>" => "1", 
			"<target-element" => "1", 
			"</target-element>" => "1", 
			"<target-element/>" => "1", 
			"<taxonomy" => "1", 
			"</taxonomy>" => "1", 
			"<tbody>" => "1", 
			"<tbody" => "1", 
			"</tbody>" => "1", 
			"<td" => "1", 
			"<td>" => "1", 
			"</td>" => "1", 
			"<tech>" => "1", 
			"<tech" => "1", 
			"</tech>" => "1", 
			"<tei.2>" => "1", 
			"</tei.2>" => "1", 
			"<teiCorpus.2>" => "1", 
			"</teiCorpus.2>" => "1", 
			"<teiFsd2>" => "1", 
			"</teiFsd2>" => "1", 
			"<teiHeader>" => "1", 
			"<teiHeader" => "1", 
			"</teiHeader>" => "1", 
			"<term>" => "1", 
			"<term" => "1", 
			"</term>" => "1", 
			"<termEntry>" => "1", 
			"<termEntry" => "1", 
			"</termEntry>" => "1", 
			"<text>" => "1", 
			"<text" => "1", 
			"</text>" => "1", 
			"<textClass>" => "1", 
			"</textClass>" => "1", 
			"<textDesc>" => "1", 
			"<textDesc" => "1", 
			"</textDesc>" => "1", 
			"<then>" => "1", 
			"<tig" => "1", 
			"</tig>" => "1", 
			"<time>" => "1", 
			"<time" => "1", 
			"</time>" => "1", 
			"<timeLine>" => "1", 
			"<timeLine" => "1", 
			"</timeLine>" => "1", 
			"<timeRange" => "1", 
			"</timeRange>" => "1", 
			"<timeStruct>" => "1", 
			"<timeStruct" => "1", 
			"</timeStruct>" => "1", 
			"<title>" => "1", 
			"<title" => "1", 
			"</title>" => "1", 
			"<titlePage>" => "1", 
			"<titlePage" => "1", 
			"</titlePage>" => "1", 
			"<titlePart>" => "1", 
			"<titlePart" => "1", 
			"</titlePart>" => "1", 
			"<titleStmt>" => "1", 
			"<titleStmt" => "1", 
			"</titleStmt>" => "1", 
			"<title-style" => "1", 
			"<tns" => "1", 
			"</tns>" => "1", 
			"<tr>" => "1", 
			"</tr>" => "1", 
			"<trailer>" => "1", 
			"</trailer>" => "1", 
			"<trans>" => "1", 
			"<trans" => "1", 
			"</trans>" => "1", 
			"<tree" => "1", 
			"</tree>" => "1", 
			"<triangle" => "1", 
			"</triangle>" => "1", 
			"<tsd>" => "1", 
			"</tsd>" => "1", 
			"<textarea" => "1", 
			"<textarea>" => "1", 
			"</textarea>" => "1", 
			"<tfoot>" => "1", 
			"<tfoot" => "1", 
			"</tfoot>" => "1", 
			"<th" => "1", 
			"<th>" => "1", 
			"</th>" => "1", 
			"<thead>" => "1", 
			"<thead" => "1", 
			"</thead>" => "1", 
			"<tr" => "1", 
			"<tt>" => "1", 
			"</tt>" => "1", 
			"<tt" => "1", 
			"<u>" => "1", 
			"<u" => "1", 
			"</u>" => "1", 
			"<ul>" => "1", 
			"<ul" => "1", 
			"</ul>" => "1", 
			"<uncertain>" => "1", 
			"<unclear>" => "1", 
			"<unclear" => "1", 
			"</unclear>" => "1", 
			"<usg>" => "1", 
			"<usg" => "1", 
			"</usg>" => "1", 
			"<val>" => "1", 
			"</val>" => "1", 
			"<valDesc>" => "1", 
			"</valDesc>" => "1", 
			"<valList>" => "1", 
			"<valList" => "1", 
			"</valList>" => "1", 
			"<valRange>" => "1", 
			"</valRange>" => "1", 
			"<vAlt>" => "1", 
			"<vAlt" => "1", 
			"</vAlt>" => "1", 
			"<var>" => "1", 
			"<var" => "1", 
			"</var>" => "1", 
			"<variantEncoding>" => "1", 
			"<variantEncoding" => "1", 
			"</variantEncoding>" => "1", 
			"<vDefault>" => "1", 
			"</vDefault>" => "1", 
			"<view>" => "1", 
			"</view>" => "1", 
			"<vocal" => "1", 
			"<vol>" => "1", 
			"<vRange>" => "1", 
			"</vRange>" => "1", 
			"<w>" => "1", 
			"<w" => "1", 
			"</w>" => "1", 
			"<warning-para" => "1", 
			"</warning-para>" => "1", 
			"<wbr>" => "1", 
			"<week>" => "1", 
			"<week" => "1", 
			"</week>" => "1", 
			"<what>" => "1", 
			"<when" => "1", 
			"<who>" => "1", 
			"</who>" => "1", 
			"<wit>" => "1", 
			"<witDetail" => "1", 
			"</witDetail>" => "1", 
			"<witEnd>" => "1", 
			"<witList>" => "1", 
			"</witList>" => "1", 
			"<witness" => "1", 
			"</witness>" => "1", 
			"<witStart>" => "1", 
			"<work>" => "1", 
			"</work>" => "1", 
			"<writing" => "1", 
			"</writing>" => "1", 
			"<writingSystemDeclaration>" => "1", 
			"<writingSystemDeclaration" => "1", 
			"</writingSystemDeclaration>" => "1", 
			"<xml>" => "1", 
			"</xml>" => "1", 
			"<xmp>" => "1", 
			"</xmp>" => "1", 
			"<xptr" => "1", 
			"<xr>" => "1", 
			"<xr" => "1", 
			"</xr>" => "1", 
			"<xref" => "1", 
			"<xsl>" => "1", 
			"</xsl>" => "1", 
			"<year>" => "1", 
			"<year" => "1", 
			"</year>" => "1", 
			"//" => "1", 
			"/>" => "1", 
			">" => "1", 
			"?>" => "1", 
			"<?php" => "1", 
			"<?phpxml" => "1", 
			"]]>" => "1", 
			"<![CDATA[" => "1", 
			"abbr=" => "2", 
			"absolute=" => "2", 
			"action=" => "2", 
			"active=" => "2", 
			"adj=" => "2", 
			"adjFrom=" => "2", 
			"adjTo=" => "2", 
			"afiicode=" => "2", 
			"age=" => "2", 
			"agent=" => "2", 
			"align=" => "2", 
			"alink=" => "2", 
			"all=" => "2", 
			"allusion=" => "2", 
			"alt=" => "2", 
			"am=" => "2", 
			"ana=" => "2", 
			"ancestor=" => "2", 
			"anchored=" => "2", 
			"arity=" => "2", 
			"assertedValue=" => "2", 
			"attribute=" => "2", 
			"authority=" => "2", 
			"background=" => "2", 
			"background-color=" => "2", 
			"baseForm=" => "2", 
			"baseType=" => "2", 
			"behavior" => "2", 
			"below" => "2", 
			"bgcolor=" => "2", 
			"border=" => "2", 
			"calendar=" => "2", 
			"cap=" => "2", 
			"cause=" => "2", 
			"cellpadding=" => "2", 
			"cellspacing=" => "2", 
			"cert=" => "2", 
			"certainty=" => "2", 
			"character=" => "2", 
			"chars=" => "2", 
			"children=" => "2", 
			"class=" => "2", 
			"classid=" => "2", 
			"clear=" => "2", 
			"code=" => "2", 
			"codebase=" => "2", 
			"codedCharSet=" => "2", 
			"color=" => "2", 
			"cols=" => "2", 
			"colspan=" => "2", 
			"complete=" => "2", 
			"composite=" => "2", 
			"content=" => "2", 
			"content-role=" => "2", 
			"coords=" => "2", 
			"copyOf=" => "2", 
			"corr=" => "2", 
			"corresp=" => "2", 
			"crdate=" => "2", 
			"creator=" => "2", 
			"data=" => "2", 
			"date=" => "2", 
			"dateCreated=" => "2", 
			"dateUpdated=" => "2", 
			"day=" => "2", 
			"decls=" => "2", 
			"definition=" => "2", 
			"default=" => "2", 
			"degree=" => "2", 
			"delim=" => "2", 
			"depend=" => "2", 
			"depPtr=" => "2", 
			"desc=" => "2", 
			"descendant=" => "2", 
			"descriptive=" => "2", 
			"dim=" => "2", 
			"dir=" => "2", 
			"direct=" => "2", 
			"direction" => "2", 
			"discrete=" => "2", 
			"doc=" => "2", 
			"doctype=" => "2", 
			"domains=" => "2", 
			"dt:type=" => "2", 
			"dt:values=" => "2", 
			"dur=" => "2", 
			"ed=" => "2", 
			"encoding=" => "2", 
			"end=" => "2", 
			"end-indent=" => "2", 
			"enjamb=" => "2", 
			"entity=" => "2", 
			"entityLoc=" => "2", 
			"entitySet=" => "2", 
			"entityStd=" => "2", 
			"eol=" => "2", 
			"exact=" => "2", 
			"excl=" => "2", 
			"exclude=" => "2", 
			"expan=" => "2", 
			"extendTarg=" => "2", 
			"extent=" => "2", 
			"evaluate=" => "2", 
			"expand=" => "2", 
			"event=" => "2", 
			"face=" => "2", 
			"feats=" => "2", 
			"feature=" => "2", 
			"field-width=" => "2", 
			"first=" => "2", 
			"first-line-start-indent=" => "2", 
			"follow=" => "2", 
			"following=" => "2", 
			"font-family=" => "2", 
			"font-family-name=" => "2", 
			"font-posture=" => "2", 
			"font-size=" => "2", 
			"font-style=" => "2", 
			"font-weight=" => "2", 
			"for=" => "2", 
			"form=" => "2", 
			"frameborder=" => "2", 
			"framespacing=" => "2", 
			"from=" => "2", 
			"fsd=" => "2", 
			"full=" => "2", 
			"function=" => "2", 
			"fVal=" => "2", 
			"gi=" => "2", 
			"given=" => "2", 
			"gradual=" => "2", 
			"group=" => "2", 
			"grpPtr=" => "2", 
			"h=" => "2", 
			"hand=" => "2", 
			"has-value=" => "2", 
			"height=" => "2", 
			"hidden=" => "2", 
			"hour=" => "2", 
			"href=" => "2", 
			"hspace=" => "2", 
			"http-equiv=" => "2", 
			"id=" => "2", 
			"ident=" => "2", 
			"image=" => "2", 
			"included=" => "2", 
			"inDegree=" => "2", 
			"index=" => "2", 
			"ink=" => "2", 
			"inline=" => "2", 
			"inst=" => "2", 
			"interval=" => "2", 
			"ismap=" => "2", 
			"iso639=" => "2", 
			"iterated=" => "2", 
			"key=" => "2", 
			"label=" => "2", 
			"label2=" => "2", 
			"lang=" => "2", 
			"language=" => "2", 
			"left-margin=" => "2", 
			"lemma=" => "2", 
			"length=" => "2", 
			"level=" => "2", 
			"level1=" => "2", 
			"level2=" => "2", 
			"level3=" => "2", 
			"level4=" => "2", 
			"lexpunc=" => "2", 
			"lines=" => "2", 
			"line-spacing=" => "2", 
			"link=" => "2", 
			"loc=" => "2", 
			"location=" => "2", 
			"locus=" => "2", 
			"loop=" => "2", 
			"macro=" => "2", 
			"mailto=" => "2", 
			"margin-bottom=" => "2", 
			"margin-left=" => "2", 
			"marginheight=" => "2", 
			"margin-top=" => "2", 
			"marginwidth=" => "2", 
			"marker=" => "2", 
			"marks=" => "2", 
			"maxOccurs=" => "2", 
			"mergedin=" => "2", 
			"met=" => "2", 
			"method=" => "2", 
			"minOccurs=" => "2", 
			"mlang=" => "2", 
			"mode=" => "2", 
			"multiple" => "2", 
			"mutual=" => "2", 
			"mutExcl=" => "2", 
			"NSDef=" => "2", 
			"n=" => "2", 
			"name=" => "2", 
			"names=" => "2", 
			"new=" => "2", 
			"next=" => "2", 
			"nohref" => "2", 
			"none=" => "2", 
			"noresize" => "2", 
			"norm=" => "2", 
			"noshade" => "2", 
			"notation=" => "2", 
			"occurs=" => "2", 
			"old=" => "2", 
			"onblur" => "2", 
			"onchange=" => "2", 
			"onclick" => "2", 
			"onfocus" => "2", 
			"onload" => "2", 
			"only=" => "2", 
			"onmouseout" => "2", 
			"onmouseover" => "2", 
			"onsubmit=" => "2", 
			"opt=" => "2", 
			"ord=" => "2", 
			"order=" => "2", 
			"org=" => "2", 
			"orig=" => "2", 
			"origin=" => "2", 
			"outDegree=" => "2", 
			"padding=" => "2", 
			"parent=" => "2", 
			"part=" => "2", 
			"passive=" => "2", 
			"pattern=" => "2", 
			"per=" => "2", 
			"perf=" => "2", 
			"place=" => "2", 
			"pm=" => "2", 
			"position=" => "2", 
			"prefix=" => "2", 
			"prev=" => "2", 
			"previous=" => "2", 
			"prompt=" => "2", 
			"quadding=" => "2", 
			"real=" => "2", 
			"reason=" => "2", 
			"refunit=" => "2", 
			"reg=" => "2", 
			"rel=" => "2", 
			"rend=" => "2", 
			"render=" => "2", 
			"required=" => "2", 
			"resp=" => "2", 
			"result=" => "2", 
			"rev=" => "2", 
			"rhyme=" => "2", 
			"right-margin=" => "2", 
			"role=" => "2", 
			"rows=" => "2", 
			"rowspan=" => "2", 
			"sameAs=" => "2", 
			"sample=" => "2", 
			"scheme=" => "2", 
			"scope=" => "2", 
			"scribe=" => "2", 
			"script=" => "2", 
			"scrolling=" => "2", 
			"select=" => "2", 
			"selected" => "2", 
			"sex=" => "2", 
			"shape=" => "2", 
			"show=" => "2", 
			"sic=" => "2", 
			"sigil=" => "2", 
			"since=" => "2", 
			"size=" => "2", 
			"social=" => "2", 
			"some=" => "2", 
			"sort=" => "2", 
			"source=" => "2", 
			"space=" => "2", 
			"space-after=" => "2", 
			"space-before=" => "2", 
			"span=" => "2", 
			"split=" => "2", 
			"src=" => "2", 
			"SrcDef=" => "2", 
			"standalone=" => "2", 
			"start" => "2", 
			"start=" => "2", 
			"start-indent=" => "2", 
			"status=" => "2", 
			"string=" => "2", 
			"style=" => "2", 
			"subtype=" => "2", 
			"synch=" => "2", 
			"TEI=" => "2", 
			"TEIForm=" => "2", 
			"target=" => "2", 
			"targetEnd=" => "2", 
			"targets=" => "2", 
			"targFunc=" => "2", 
			"targOrder=" => "2", 
			"targType=" => "2", 
			"terminal=" => "2", 
			"text=" => "2", 
			"text-align=" => "2", 
			"theme=" => "2", 
			"time=" => "2", 
			"timezone=" => "2", 
			"title=" => "2", 
			"to=" => "2", 
			"token=" => "2", 
			"topmargin=" => "2", 
			"trans=" => "2", 
			"type=" => "2", 
			"ucs-4=" => "2", 
			"uniform=" => "2", 
			"unit=" => "2", 
			"url=" => "2", 
			"usage=" => "2", 
			"use=" => "2", 
			"valign=" => "2", 
			"value=" => "2", 
			"valueTo=" => "2", 
			"varSeq=" => "2", 
			"version=" => "2", 
			"vlink=" => "2", 
			"vspace=" => "2", 
			"weights=" => "2", 
			"where=" => "2", 
			"who=" => "2", 
			"width=" => "2", 
			"wit=" => "2", 
			"wscale=" => "2", 
			"wsd=" => "2", 
			"xl-role=" => "2", 
			"xl-title=" => "2", 
			"xml:link=" => "2", 
			"xmlns" => "2", 
			"xmlns:dt" => "2", 
			"xmlns:cmi" => "2", 
			"zone=" => "2", 
			"24hour=" => "2", 
			"=" => "2", 
			"-" => "2", 
			"edit" => "3", 
			"else" => "3", 
			"enjamb" => "3", 
			"for" => "3", 
			"function" => "3", 
			"global" => "3", 
			"globincl" => "3", 
			"if" => "3", 
			"interpret" => "3", 
			"return" => "3", 
			"then" => "3", 
			"var" => "3", 
			"while" => "3", 
			"<AttributeType" => "4", 
			"</AttributeType>" => "4", 
			"<ElementType" => "4", 
			"</ElementType>" => "4", 
			"<Schema" => "4", 
			"</Schema>" => "4", 
			"<attribute" => "5", 
			"<attribute>" => "5", 
			"</attribute>" => "5", 
			"<element" => "6", 
			"<element>" => "6", 
			"</element>" => "6", 
			"/element>" => "6");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing", 
			"6" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
