<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_dcal extends HFile{
   function HFile_dcal(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// DCAL
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "brown", "blue");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array("DO\"\"REPEAT\"\"THEN");
$this->unindent          	= array("ELSE", "END");

// String characters and delimiters

$this->stringchars       	= array();
$this->delimiters        	= array();
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("!");
$this->blockcommenton    	= array("{");
$this->blockcommentoff   	= array("}");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"and" => "1", 
			"array" => "1", 
			"begin" => "1", 
			"by" => "1", 
			"case" => "1", 
			"const" => "1", 
			"do" => "1", 
			"else" => "1", 
			"elsif" => "1", 
			"end" => "1", 
			"external" => "1", 
			"false" => "1", 
			"for" => "1", 
			"function" => "1", 
			"if" => "1", 
			"in" => "1", 
			"include" => "1", 
			"message" => "1", 
			"mod" => "1", 
			"not" => "1", 
			"of" => "1", 
			"off" => "1", 
			"on" => "1", 
			"or" => "1", 
			"out" => "1", 
			"procedure" => "1", 
			"program" => "1", 
			"public" => "1", 
			"record" => "1", 
			"repeat" => "1", 
			"return" => "1", 
			"string" => "1", 
			"then" => "1", 
			"to" => "1", 
			"true" => "1", 
			"type" => "1", 
			"until" => "1", 
			"var" => "1", 
			"while" => "1", 
			"anglestyle" => "2", 
			"aperture" => "2", 
			"arrowsize" => "2", 
			"arrowstyl" => "2", 
			"arrowratio" => "2", 
			"atrdraw" => "2", 
			"autopath" => "2", 
			"bigcurs" => "2", 
			"boxsym" => "2", 
			"cimticcolor" => "2", 
			"circlefact" => "2", 
			"chamfera" => "2", 
			"chamferb" => "2", 
			"clockwise" => "2", 
			"constref" => "2", 
			"copyflag" => "2", 
			"curvecenters" => "2", 
			"crcdiv1" => "2", 
			"crcdiv2" => "2", 
			"curssz" => "2", 
			"centwall" => "2", 
			"cut_srch" => "2", 
			"cut_lyr" => "2", 
			"dimminustol" => "2", 
			"dimmon" => "2", 
			"distdelay" => "2", 
			"domplustolang" => "2", 
			"dimimustolang" => "2", 
			"dimlimits" => "2", 
			"dimtolerance" => "2", 
			"dimplustol" => "2", 
			"dynamicxt" => "2", 
			"dimcontrolpts" => "2", 
			"dimtxtcolor" => "2", 
			"dimorient" => "2", 
			"dimticcolor" => "2", 
			"distancesync" => "2", 
			"docut" => "2", 
			"dojamb" => "2", 
			"doorang" => "2", 
			"doorhgt" => "2", 
			"doorthk" => "2", 
			"doortype" => "2", 
			"drawlines" => "2", 
			"drawmarks" => "2", 
			"dynamic" => "2", 
			"enlcopy" => "2", 
			"filcut" => "2", 
			"filrad" => "2", 
			"findhatch" => "2", 
			"glassthk" => "2", 
			"gridang" => "2", 
			"gridorgx" => "2", 
			"gridorgy" => "2", 
			"gridshow" => "2", 
			"grifshowx" => "2", 
			"gridshowy" => "2", 
			"gridshw1" => "2", 
			"gridshw1x" => "2", 
			"gridshw1y" => "2", 
			"gridclr" => "2", 
			"gridclr1" => "2", 
			"grid1sz" => "2", 
			"gridsnap" => "2", 
			"gridsnapx" => "2", 
			"gridsnapy" => "2", 
			"hatchon" => "2", 
			"headhgt" => "2", 
			"hidepierce" => "2", 
			"hidespcg" => "2", 
			"hidecolor" => "2", 
			"hideltype" => "2", 
			"hidewidth" => "2", 
			"hither" => "2", 
			"inputstyl" => "2", 
			"jambwth" => "2", 
			"lastdist" => "2", 
			"lastenlpt" => "2", 
			"lastrotpt" => "2", 
			"layoutextents" => "2", 
			"layerswitch" => "2", 
			"lyrsearch" => "2", 
			"lineattr" => "2", 
			"linecolor" => "2", 
			"linespcg" => "2", 
			"lineosht" => "2", 
			"linetype" => "2", 
			"linewidth" => "2", 
			"maxdrag" => "2", 
			"mircopy" => "2", 
			"mirfixtext" => "2", 
			"missdis" => "2", 
			"movcopy" => "2", 
			"mrkdraw" => "2", 
			"multipen" => "2", 
			"nofloat" => "2", 
			"noisy" => "2", 
			"nounits" => "2", 
			"numdivs" => "2", 
			"orthmode" => "2", 
			"osnap_mode" => "2", 
			"osnap_num" => "2", 
			"ovrdraw" => "2", 
			"plyrect" => "2", 
			"polycntr" => "2", 
			"polydia" => "2", 
			"polyinsd" => "2", 
			"polysides" => "2", 
			"polyvert" => "2", 
			"pltcentx" => "2", 
			"pltcenty" => "2", 
			"pltcolor" => "2", 
			"pltpsize" => "2", 
			"pltpcustx" => "2", 
			"pltpcusty" => "2", 
			"pltpensort" => "2", 
			"pltpenspeed" => "2", 
			"pltpenwidth" => "2", 
			"pltrot" => "2", 
			"pltrotang" => "2", 
			"pltrotcentx" => "2", 
			"pltrotcenty" => "2", 
			"plotscalenum" => "2", 
			"regenorder" => "2", 
			"rotcopy" => "2", 
			"rubbx" => "2", 
			"ratiobox" => "2", 
			"ratioratio" => "2", 
			"rubln" => "2", 
			"savedelay" => "2", 
			"scaletype" => "2", 
			"scrolldis" => "2", 
			"selecttype" => "2", 
			"showwgt" => "2", 
			"showinspt" => "2", 
			"showneg" => "2", 
			"showz" => "2", 
			"sidedoor" => "2", 
			"sigdigits" => "2", 
			"sillhgt" => "2", 
			"sillin" => "2", 
			"sillout" => "2", 
			"smallgrid" => "2", 
			"srfgrid" => "2", 
			"srfpnts" => "2", 
			"srchquick" => "2", 
			"snaplyrsearch" => "2", 
			"snapsymfast" => "2", 
			"symang" => "2", 
			"symenlx" => "2", 
			"symenly" => "2", 
			"symenlz" => "2", 
			"symexplode" => "2", 
			"symzoffset" => "2", 
			"txtaline" => "2", 
			"txtang" => "2", 
			"txtcurs" => "2", 
			"txtsize" => "2", 
			"txtuseplt" => "2", 
			"txtweight" => "2", 
			"txtslant" => "2", 
			"txtaspect" => "2", 
			"txton" => "2", 
			"txtboxclr" => "2", 
			"txtboxmin" => "2", 
			"wallend" => "2", 
			"wallson" => "2", 
			"wallwidth" => "2", 
			"wallhilite" => "2", 
			"wallhiliteout" => "2", 
			"wallhilitecolor" => "2", 
			"wallhilitewidth" => "2", 
			"zbase" => "2", 
			"zeroangle" => "2", 
			"zhite" => "2", 
			"zuser1" => "2", 
			"zuser2" => "2", 
			"absi" => "3", 
			"absr" => "3", 
			"acos" => "3", 
			"addpnt" => "3", 
			"addr2ints" => "3", 
			"angle" => "3", 
			"answer" => "3", 
			"arc_to_bulge" => "3", 
			"asin" => "3", 
			"angnormalize" => "3", 
			"assignProc" => "3", 
			"atan" => "3", 
			"atan2" => "3", 
			"atr_2str" => "3", 
			"atr_add2ent" => "3", 
			"atr_add2lyr" => "3", 
			"atr_add2sym" => "3", 
			"atr_add2sys" => "3", 
			"atr_delent" => "3", 
			"atr_dellyr" => "3", 
			"atr_delsym" => "3", 
			"atr_delsys" => "3", 
			"atr_entfind" => "3", 
			"atr_entfirst" => "3", 
			"atr_get" => "3", 
			"atr_init" => "3", 
			"atr_lyrFind" => "3", 
			"atr_lyrfirst" => "3", 
			"atr_next" => "3", 
			"atr_symfind" => "3", 
			"atr_symfirst" => "3", 
			"atr_sysfind" => "3", 
			"atr_sysfirst" => "3", 
			"atr_update" => "3", 
			"beep" => "3", 
			"between" => "3", 
			"betweenang" => "3", 
			"bitclear" => "3", 
			"bitset" => "3", 
			"bittest" => "3", 
			"brkpress" => "3", 
			"bulge_to_arc" => "3", 
			"cart_cylind" => "3", 
			"cart_sphere" => "3", 
			"catenlrel" => "3", 
			"catmat" => "3", 
			"catrotate" => "3", 
			"catrotrel" => "3", 
			"catscale" => "3", 
			"cattran" => "3", 
			"chdir" => "3", 
			"chr" => "3", 
			"circ3pt" => "3", 
			"clip" => "3", 
			"clrGetName" => "3", 
			"clrGetPen" => "3", 
			"clrSetName" => "3", 
			"clrSetPen" => "3", 
			"configTab" => "3", 
			"cos" => "3", 
			"crossProd" => "3", 
			"crossZ" => "3", 
			"currwndw" => "3", 
			"cutout" => "3", 
			"cvangst" => "3", 
			"cvdisst" => "3", 
			"cvintst" => "3", 
			"cvlntst" => "3", 
			"cvrllst" => "3", 
			"cvstint" => "3", 
			"cvstlnt" => "3", 
			"cvstrll" => "3", 
			"cylind_cart" => "3", 
			"calctext" => "3", 
			"calcdim" => "3", 
			"degrees" => "3", 
			"dgetang" => "3", 
			"dgetdis" => "3", 
			"dgetint" => "3", 
			"dgetrl" => "3", 
			"dgetstr" => "3", 
			"dis_from_arc" => "3", 
			"dis_from_line" => "3", 
			"disfrompolyvert" => "3", 
			"dis_from_seg" => "3", 
			"distance" => "3", 
			"dotprod" => "3", 
			"drag2pt" => "3", 
			"dragBar" => "3", 
			"dragBoxMove" => "3", 
			"dragCrc3" => "3", 
			"dragDia" => "3", 
			"dragPly" => "3", 
			"dragPlyRot" => "3", 
			"dragModeMove" => "3", 
			"dragModeRot" => "3", 
			"dragRad" => "3", 
			"drawcursor" => "3", 
			"dwgname" => "3", 
			"ent_add" => "3", 
			"ent_copy" => "3", 
			"ent_del" => "3", 
			"ent_draw" => "3", 
			"ent_draw_2d" => "3", 
			"ent_draw_dl" => "3", 
			"ent_drawmode" => "3", 
			"ent_enlarge" => "3", 
			"ent_explode" => "3", 
			"ent_extent" => "3", 
			"ent_first" => "3", 
			"ent_get" => "3", 
			"ent_init" => "3", 
			"ent_move" => "3", 
			"ent_near" => "3", 
			"ent_next" => "3", 
			"ent_relink" => "3", 
			"ent_rotate" => "3", 
			"ent_setunused" => "3", 
			"ent_tran" => "3", 
			"ent_tranok" => "3", 
			"ent_update" => "3", 
			"ent2polyvert" => "3", 
			"envget" => "3", 
			"exp" => "3", 
			"expt" => "3", 
			"extents" => "3", 
			"ent_incirc" => "3", 
			"f_close" => "3", 
			"f_create" => "3", 
			"f_eof" => "3", 
			"file_copy" => "3", 
			"file_del" => "3", 
			"file_exist" => "3", 
			"file_find" => "3", 
			"file_pattern" => "3", 
			"file_ren" => "3", 
			"float" => "3", 
			"fnKeyConv" => "3", 
			"f_open" => "3", 
			"f_rdchar" => "3", 
			"f_rdint" => "3", 
			"f_rdln" => "3", 
			"f_rdreal" => "3", 
			"f_rdstr" => "3", 
			"f_seek" => "3", 
			"f_setrec" => "3", 
			"f_wrchar" => "3", 
			"f_wrint" => "3", 
			"f_wrln" => "3", 
			"f_wrreal" => "3", 
			"f_wrstr" => "3", 
			"fgetlyr" => "3", 
			"fixangs" => "3", 
			"getang" => "3", 
			"getarc" => "3", 
			"getchar" => "3", 
			"getclr" => "3", 
			"getcurrfont" => "3", 
			"getCurrInMat" => "3", 
			"getdis" => "3", 
			"getesc" => "3", 
			"getflname" => "3", 
			"getint" => "3", 
			"getlyr" => "3", 
			"getlyrcurr" => "3", 
			"getlyrname" => "3", 
			"getmode" => "3", 
			"getpath" => "3", 
			"getpoint" => "3", 
			"getpointp" => "3", 
			"getpoly" => "3", 
			"getpolyline" => "3", 
			"getrefpnt" => "3", 
			"getrll" => "3", 
			"getrubpnt" => "3", 
			"getstr" => "3", 
			"grafmode" => "3", 
			"gridCalc" => "3", 
			"getcurrlbl" => "3", 
			"gridSnapTo" => "3", 
			"hatch_mode" => "3", 
			"hide" => "3", 
			"high" => "3", 
			"inputAt" => "3", 
			"inputWhere" => "3", 
			"intand" => "3", 
			"intor" => "3", 
			"intr_arcarc" => "3", 
			"intr_crcarc" => "3", 
			"intr_crccrc" => "3", 
			"intr_linarc" => "3", 
			"intr_lincrc" => "3", 
			"intr_linlin" => "3", 
			"ints2addr" => "3", 
			"intxor" => "3", 
			"invert" => "3", 
			"islower" => "3", 
			"isnil" => "3", 
			"isupper" => "3", 
			"keyForceExit" => "3", 
			"keypress" => "3", 
			"lblmsg" => "3", 
			"lblset" => "3", 
			"lblsett" => "3", 
			"lblsinit" => "3", 
			"lblson" => "3", 
			"light" => "3", 
			"linelen3" => "3", 
			"log" => "3", 
			"low" => "3", 
			"lyr_clear" => "3", 
			"lyr_create" => "3", 
			"lyr_del" => "3", 
			"lyr_find" => "3", 
			"lyr_first" => "3", 
			"lyr_init" => "3", 
			"lyr_ison" => "3", 
			"lyr_next" => "3", 
			"lyr_nil" => "3", 
			"lyr_read" => "3", 
			"lyr_set" => "3", 
			"lyr_seton" => "3", 
			"lyr_term" => "3", 
			"lyr_viewfile" => "3", 
			"lyr_write" => "3", 
			"matmmat" => "3", 
			"max" => "3", 
			"menu1lntrim" => "3", 
			"menu2lntrim" => "3", 
			"menu3dLine" => "3", 
			"menuArc2pt" => "3", 
			"menuArc3pt" => "3", 
			"menuArccentang" => "3", 
			"menuArccentarc" => "3", 
			"menuArccentchrd" => "3", 
			"menuArctan" => "3", 
			"menuArraycirc" => "3", 
			"menuArrayrect" => "3", 
			"menuBlocks" => "3", 
			"menuChamfer" => "3", 
			"menuChange" => "3", 
			"menuChange3d" => "3", 
			"menuCleanup" => "3", 
			"menuClipCube" => "3", 
			"menuCone" => "3", 
			"menuControls" => "3", 
			"menuCopy" => "3", 
			"menuCopy3d" => "3", 
			"menuCrc3pt" => "3", 
			"menuCrcdia" => "3", 
			"menuCrcrad" => "3", 
			"menuCurves" => "3", 
			"menuCutwall" => "3", 
			"menuCylnHori" => "3", 
			"menuCylnVert" => "3", 
			"menuDataCAD3" => "3", 
			"menuDirectry" => "3", 
			"menuDisplay" => "3", 
			"menuDivide" => "3", 
			"menuDmension" => "3", 
			"menuDome" => "3", 
			"menuDoorswng" => "3", 
			"menuEdit3d" => "3", 
			"menuEditPlane" => "3", 
			"menuElevation" => "3", 
			"menuEllipse" => "3", 
			"menuEnlarge" => "3", 
			"menuEnlarge3d" => "3", 
			"menuEntity3d" => "3", 
			"menuErase" => "3", 
			"menuErase3d" => "3", 
			"menuExplode3d" => "3", 
			"menuFileio" => "3", 
			"menuFillets" => "3", 
			"menuFreehand" => "3", 
			"menuGoodies" => "3", 
			"menuGotoview" => "3", 
			"menuGotoView3d" => "3", 
			"menuGrids" => "3", 
			"menuHatch" => "3", 
			"menuHide" => "3", 
			"menuIdentify" => "3", 
			"menuIntrsect" => "3", 
			"menuLayers" => "3", 
			"menuLinetype" => "3", 
			"menuLinkline" => "3", 
			"menuLintsct" => "3", 
			"menuMarker" => "3", 
			"menuMeasures" => "3", 
			"menuMeshSurf" => "3", 
			"menuMirror" => "3", 
			"menuMove" => "3", 
			"menuMove3d" => "3", 
			"menuMovedrag" => "3", 
			"menuObjsnap" => "3", 
			"menuPartial" => "3", 
			"menuPlaneSnap" => "3", 
			"menuPlotter" => "3", 
			"menuPolygon" => "3", 
			"menuPolygons" => "3", 
			"menuPolyHori" => "3", 
			"menuPolyIncl" => "3", 
			"menuPolyRect" => "3", 
			"menuPolyVert" => "3", 
			"menuRevSurf" => "3", 
			"menuRotate" => "3", 
			"menuRotate3d" => "3", 
			"menuSaveImage" => "3", 
			"menuSetObliq" => "3", 
			"menuSetPersp" => "3", 
			"menuSettings" => "3", 
			"menuSettings3d" => "3", 
			"menuSlab" => "3", 
			"menuSlabHori" => "3", 
			"menuSlabIncl" => "3", 
			"menuSlabRect" => "3", 
			"menuSlabVert" => "3", 
			"menuSS" => "3", 
			"menuStretch" => "3", 
			"menuStretch3d" => "3", 
			"menuTangents" => "3", 
			"menuTemplate" => "3", 
			"menuText" => "3", 
			"menuTintsct" => "3", 
			"menuTorus" => "3", 
			"menuToscale" => "3", 
			"menuTruncCone" => "3", 
			"menuViewer" => "3", 
			"menuVoids" => "3", 
			"menuWalkThru" => "3", 
			"menuWeldline" => "3", 
			"menuWindowin" => "3", 
			"menuWindows" => "3", 
			"min" => "3", 
			"mkdir" => "3", 
			"mode_1lyr" => "3", 
			"mode_box" => "3", 
			"mode_enttype" => "3", 
			"mode_fence" => "3", 
			"mode_group" => "3", 
			"mode_ignore" => "3", 
			"mode_init" => "3", 
			"mode_init1" => "3", 
			"mode_lyr" => "3", 
			"mode_ss" => "3", 
			"mode_sym" => "3", 
			"mulpnt" => "3", 
			"mode_atr" => "3", 
			"menugeom" => "3", 
			"meanpnt" => "3", 
			"numlayer" => "3", 
			"odd" => "3", 
			"ord" => "3", 
			"order" => "3", 
			"pause" => "3", 
			"pixsize" => "3", 
			"pline_area" => "3", 
			"pline_centroid" => "3", 
			"pline_perim" => "3", 
			"plot_close" => "3", 
			"plot_mode" => "3", 
			"plot_open" => "3", 
			"pnt_in_poly" => "3", 
			"polar" => "3", 
			"poly_fix" => "3", 
			"polyvert2ent" => "3", 
			"polyvert_add" => "3", 
			"polyvert_copy" => "3", 
			"polyvert_count" => "3", 
			"polyvert_del" => "3", 
			"polyvert_get" => "3", 
			"polyvert_init" => "3", 
			"polyvert_ins" => "3", 
			"polyvert_update" => "3", 
			"popview" => "3", 
			"printstr" => "3", 
			"project" => "3", 
			"pushview" => "3", 
			"pntscolinear" => "3", 
			"radians" => "3", 
			"redraw" => "3", 
			"redrawall" => "3", 
			"regen" => "3", 
			"rmdir" => "3", 
			"round" => "3", 
			"round4" => "3", 
			"readclock" => "3", 
			"sappnt" => "3", 
			"scale_curr" => "3", 
			"scale_get" => "3", 
			"serCheck" => "3", 
			"setcurrfont" => "3", 
			"setenlrel" => "3", 
			"setident" => "3", 
			"setlyrname" => "3", 
			"setnil" => "3", 
			"setpath" => "3", 
			"setpoint" => "3", 
			"setrefpnt" => "3", 
			"setrotate" => "3", 
			"setrotrel" => "3", 
			"setrubpnt" => "3", 
			"setscale" => "3", 
			"settran" => "3", 
			"sin" => "3", 
			"sizeof" => "3", 
			"sphere_cart" => "3", 
			"ssdelall" => "3", 
			"sqr" => "3", 
			"sqrt" => "3", 
			"ssAdd" => "3", 
			"ssClear" => "3", 
			"ssDel" => "3", 
			"ssGetName" => "3", 
			"ssLength" => "3", 
			"ssMember" => "3", 
			"ssSetName" => "3", 
			"stopgroup" => "3", 
			"strassign" => "3", 
			"strcat" => "3", 
			"strcomp" => "3", 
			"strdel" => "3", 
			"strinc" => "3", 
			"strins" => "3", 
			"strlen" => "3", 
			"strpad" => "3", 
			"strpos" => "3", 
			"strsub" => "3", 
			"strupcase" => "3", 
			"subpnt" => "3", 
			"sym_clearref" => "3", 
			"sym_count" => "3", 
			"sym_create" => "3", 
			"sym_find" => "3", 
			"sym_first" => "3", 
			"sym_get" => "3", 
			"sym_get_atr" => "3", 
			"sym_next" => "3", 
			"sym_read" => "3", 
			"sym_ref" => "3", 
			"sym_write" => "3", 
			"tan" => "3", 
			"textmode" => "3", 
			"tolower" => "3", 
			"toupper" => "3", 
			"toview" => "3", 
			"transpose" => "3", 
			"trunc" => "3", 
			"trunc4" => "3", 
			"txtbox" => "3", 
			"view_add" => "3", 
			"view_calcoblq" => "3", 
			"view_calcorth" => "3", 
			"view_calcpara" => "3", 
			"view_calcpers" => "3", 
			"view_checkmode" => "3", 
			"view_currmode" => "3", 
			"view_del" => "3", 
			"view_first" => "3", 
			"view_get" => "3", 
			"view_getcurr" => "3", 
			"view_init" => "3", 
			"view_last" => "3", 
			"view_setcurr" => "3", 
			"view_setmode" => "3", 
			"view_update" => "3", 
			"void_add" => "3", 
			"void_del" => "3", 
			"void_del_all" => "3", 
			"void_get" => "3", 
			"void_get_di" => "3", 
			"void_init" => "3", 
			"void_update" => "3", 
			"vwptclear" => "3", 
			"windowin" => "3", 
			"wrterr" => "3", 
			"wrtLtype" => "3", 
			"wrtlvl" => "3", 
			"wrtlyr" => "3", 
			"wrtmsg" => "3", 
			"wrtscl" => "3", 
			"wrtSS" => "3", 
			"wrtstat" => "3", 
			"xformpt" => "3", 
			"abszero" => "4", 
			"atr_name_len" => "4", 
			"atr_int" => "4", 
			"atr_rl" => "4", 
			"atr_str" => "4", 
			"atr_dis" => "4", 
			"atr_ang" => "4", 
			"atr_pnt" => "4", 
			"atr_addr" => "4", 
			"clrblue" => "4", 
			"clrbrown" => "4", 
			"clrcyan" => "4", 
			"clrdkgray" => "4", 
			"clrgrn" => "4", 
			"clrltblue" => "4", 
			"clrltcyan" => "4", 
			"clrltgray" => "4", 
			"clrltgrn" => "4", 
			"clrltmgta" => "4", 
			"clrltred" => "4", 
			"clrmgta" => "4", 
			"clrred" => "4", 
			"clrwhite" => "4", 
			"clryellow" => "4", 
			"drmode_black" => "4", 
			"drmode_flip" => "4", 
			"drmode_white" => "4", 
			"entar3" => "4", 
			"entarc" => "4", 
			"entbez" => "4", 
			"entblk" => "4", 
			"entbsp" => "4", 
			"entcnt" => "4", 
			"entcon" => "4", 
			"entcrc" => "4", 
			"entcyl" => "4", 
			"entdim" => "4", 
			"entdom" => "4", 
			"entell" => "4", 
			"entln3" => "4", 
			"entlin" => "4", 
			"entmrk" => "4", 
			"entpln" => "4", 
			"entply" => "4", 
			"entrev" => "4", 
			"entslb" => "4", 
			"entsrf" => "4", 
			"entsym" => "4", 
			"enttor" => "4", 
			"enttrn" => "4", 
			"enttxt" => "4", 
			"fl_access_denice" => "4", 
			"fl_invalid_access_code" => "4", 
			"fl_invalid_function" => "4", 
			"fl_invalid_handle" => "4", 
			"fl_no_handles_left" => "4", 
			"fl_not_found" => "4", 
			"fl_ok" => "4", 
			"fl_path_not_found" => "4", 
			"fmode_read" => "4", 
			"fmode_read_write" => "4", 
			"fmode_write" => "4", 
			"f1" => "4", 
			"f2" => "4", 
			"f3" => "4", 
			"f4" => "4", 
			"f5" => "4", 
			"f6" => "4", 
			"f7" => "4", 
			"f8" => "4", 
			"f9" => "4", 
			"f0" => "4", 
			"halfpi" => "4", 
			"htype_normal" => "4", 
			"htype_outer" => "4", 
			"htype_ignore" => "4", 
			"lyr_all" => "4", 
			"lyr_curr" => "4", 
			"lyr_on" => "4", 
			"ltype_solid" => "4", 
			"ltype_dotted" => "4", 
			"ltype_dashed" => "4", 
			"ltype_dotdash" => "4", 
			"maxdash" => "4", 
			"maxpnts" => "4", 
			"osnap_center" => "4", 
			"osnap_endpoint" => "4", 
			"osnap_intsect" => "4", 
			"osnap_midpoint" => "4", 
			"osnap_nearest" => "4", 
			"osnap_npoint" => "4", 
			"osnap_perp" => "4", 
			"osnap_quad" => "4", 
			"osnap_quick" => "4", 
			"osnap_tan" => "4", 
			"oblqplan" => "4", 
			"oblqeleve" => "4", 
			"pathdwg" => "4", 
			"pathtpl" => "4", 
			"pathsym" => "4", 
			"pathfrm" => "4", 
			"pathmcr" => "4", 
			"pathchr" => "4", 
			"pathsup" => "4", 
			"pathdrv" => "4", 
			"pathlyr" => "4", 
			"pathout" => "4", 
			"pathtmp" => "4", 
			"pathswp" => "4", 
			"pathdef" => "4", 
			"pathdxf" => "4", 
			"pi" => "4", 
			"pv_vert" => "4", 
			"pv_bulge" => "4", 
			"res_normal" => "4", 
			"res_escape" => "4", 
			"s1" => "4", 
			"s2" => "4", 
			"s3" => "4", 
			"s4" => "4", 
			"s5" => "4", 
			"s6" => "4", 
			"s7" => "4", 
			"s8" => "4", 
			"s9" => "4", 
			"s0" => "4", 
			"sqrzero" => "4", 
			"twopi" => "4", 
			"vmode_orth" => "4", 
			"vmode_para" => "4", 
			"vmode_pers" => "4", 
			"vmode_oblq" => "4", 
			"vmode_edit" => "4", 
			"vmode_all" => "4", 
			"wall_cap" => "4", 
			"wall_clip" => "4", 
			"wall_none" => "4", 
			"wall_off" => "4", 
			"wall_on" => "4", 
			"x" => "4", 
			"y" => "4", 
			"z" => "4", 
			"ang" => "5", 
			"ar3mod" => "5", 
			"ar3div" => "5", 
			"ar3rad" => "5", 
			"ar3bang" => "5", 
			"ar3eang" => "5", 
			"ar3close" => "5", 
			"atrname" => "5", 
			"attr" => "5", 
			"addr" => "5", 
			"arccent" => "5", 
			"arcrad" => "5", 
			"arcbang" => "5", 
			"arceang" => "5", 
			"arcbase" => "5", 
			"archite" => "5", 
			"attrib" => "5", 
			"atrtype" => "5", 
			"bezarr" => "5", 
			"boolarr" => "5", 
			"boolean" => "5", 
			"block" => "5", 
			"beznpnt" => "5", 
			"bezpnt" => "5", 
			"bezbase" => "5", 
			"bspnpnt" => "5", 
			"bsppnt" => "5", 
			"bspbase" => "5", 
			"blkpnt" => "5", 
			"bulge" => "5", 
			"cntpnt" => "5", 
			"cnttanpnt1" => "5", 
			"cnttanpnt2" => "5", 
			"cntnpnt" => "5", 
			"cnttype" => "5", 
			"cntdics" => "5", 
			"cntstiff" => "5", 
			"char" => "5", 
			"color" => "5", 
			"crccent" => "5", 
			"crcrad" => "5", 
			"crcbase" => "5", 
			"crchite" => "5", 
			"conmod" => "5", 
			"condiv" => "5", 
			"concent" => "5", 
			"conbang" => "5", 
			"coneang" => "5", 
			"conclose" => "5", 
			"cylmod" => "5", 
			"cyldic" => "5", 
			"cylrad" => "5", 
			"cyllen" => "5", 
			"cylcent" => "5", 
			"cylbang" => "5", 
			"cyleang" => "5", 
			"cylclose" => "5", 
			"currlyr" => "5", 
			"clipmat" => "5", 
			"clipon" => "5", 
			"clipmin" => "5", 
			"clipmax" => "5", 
			"dimpt1" => "5", 
			"dimpt2" => "5", 
			"dimpt3" => "5", 
			"dimtxtpt" => "5", 
			"dimexo1" => "5", 
			"dimexo2" => "5", 
			"dimexe" => "5", 
			"dimdli" => "5", 
			"dimang" => "5", 
			"dimovr" => "5", 
			"dimtxtsize" => "5", 
			"dimarrsize" => "5", 
			"dimarration" => "5", 
			"dimtxtaspect" => "5", 
			"dimtxtang" => "5", 
			"dimbase" => "5", 
			"dimtxtslant" => "5", 
			"dimdis" => "5", 
			"diminc" => "5", 
			"dimnlpts" => "5", 
			"dimtxtweight" => "5", 
			"dimtictype" => "5", 
			"dimtype" => "5", 
			"dimleader" => "5", 
			"dimtih" => "5", 
			"dimtoh" => "5", 
			"dimse1" => "5", 
			"dimse2" => "5", 
			"dimman" => "5", 
			"dimtad" => "5", 
			"dimnolftmrk" => "5", 
			"dimnorhtmrk" => "5", 
			"dimticweight" => "5", 
			"dimdinstd" => "5", 
			"dimtxtofs" => "5", 
			"dimfont" => "5", 
			"dimldrpnts" => "5", 
			"dbase" => "5", 
			"dommod" => "5", 
			"domdiv1" => "5", 
			"domdim2" => "5", 
			"domrad" => "5", 
			"dombang1" => "5", 
			"dombang2" => "5", 
			"domeang1" => "5", 
			"domeang2" => "5", 
			"domclose" => "5", 
			"delta" => "5", 
			"dash" => "5", 
			"dashdrw" => "5", 
			"dashpart" => "5", 
			"dashtotal" => "5", 
			"entity" => "5", 
			"enttype" => "5", 
			"ellcent" => "5", 
			"ellradx" => "5", 
			"ellrady" => "5", 
			"ellbang" => "5", 
			"elleang" => "5", 
			"ellang" => "5", 
			"ellbase" => "5", 
			"ellhite" => "5", 
			"entaddr" => "5", 
			"editmat" => "5", 
			"file" => "5", 
			"frstatr" => "5", 
			"frstent" => "5", 
			"frstlyr" => "5", 
			"flag1" => "5", 
			"flag2" => "5", 
			"integer" => "5", 
			"index" => "5", 
			"inptmat" => "5", 
			"lastatr" => "5", 
			"lastent" => "5", 
			"lyr" => "5", 
			"longint" => "5", 
			"lgl_addr" => "5", 
			"ltype" => "5", 
			"linpt1" => "5", 
			"linpt2" => "5", 
			"ln3pt1" => "5", 
			"ln3pt2" => "5", 
			"last" => "5", 
			"lastlyr" => "5", 
			"mrkpnt" => "5", 
			"mkrvec" => "5", 
			"mrktyp" => "5", 
			"mrksiz" => "5", 
			"modmat" => "5", 
			"mode_type" => "5", 
			"name" => "5", 
			"next" => "5", 
			"nextpnt" => "5", 
			"numdash" => "5", 
			"ovrshut" => "5", 
			"origin" => "5", 
			"plnfrst" => "5", 
			"plnlast" => "5", 
			"plnclose" => "5", 
			"plnbase" => "5", 
			"plnhite" => "5", 
			"point" => "5", 
			"pntarr" => "5", 
			"pntmat" => "5", 
			"pnt4arr" => "5", 
			"plynpnt" => "5", 
			"plypnt" => "5", 
			"plyisln" => "5", 
			"plyfrstvoid" => "5", 
			"plylastvoid" => "5", 
			"pvtaddr" => "5", 
			"prev" => "5", 
			"pnt" => "5", 
			"positn" => "5", 
			"projtype" => "5", 
			"plot_type" => "5", 
			"perseye" => "5", 
			"persdis" => "5", 
			"real" => "5", 
			"revbang" => "5", 
			"revenag" => "5", 
			"revmod" => "5", 
			"revdiv1" => "5", 
			"revdiv2" => "5", 
			"revfrst" => "5", 
			"revlast" => "5", 
			"revtype" => "5", 
			"refflag" => "5", 
			"spacing" => "5", 
			"str8" => "5", 
			"str80" => "5", 
			"str255" => "5", 
			"symstr" => "5", 
			"sttyp" => "5", 
			"symname" => "5", 
			"symaddr" => "5", 
			"symmod" => "5", 
			"slbnpnt" => "5", 
			"slbpnt" => "5", 
			"slbthick" => "5", 
			"slbisln" => "5", 
			"slbfrstvoid" => "5", 
			"slblastvoid" => "5", 
			"srfpnt" => "5", 
			"srfsdiv" => "5", 
			"srftdiv" => "5", 
			"shape" => "5", 
			"scale" => "5", 
			"scalenum" => "5", 
			"scanlinetype" => "5", 
			"txtpnt" => "5", 
			"txtstr" => "5", 
			"txtbase" => "5", 
			"txthite" => "5", 
			"txtfont" => "5", 
			"trnmod" => "5", 
			"trndic" => "5", 
			"trncent" => "5", 
			"trnrad1" => "5", 
			"trnrad2" => "5", 
			"trnbang" => "5", 
			"trneang" => "5", 
			"trnclose" => "5", 
			"tormod" => "5", 
			"trodiv1" => "5", 
			"tordiv2" => "5", 
			"torrad1" => "5", 
			"torrad2" => "5", 
			"torbang1" => "5", 
			"torbang2" => "5", 
			"toreang1" => "5", 
			"toreang2" => "5", 
			"torclose" => "5", 
			"txtcolor" => "5", 
			"togglelyr" => "5", 
			"visible" => "5", 
			"viewaddr" => "5", 
			"view_type" => "5", 
			"viewmat" => "5", 
			"viewcent" => "5", 
			"width" => "5", 
			"windlft" => "5", 
			"windbot" => "5");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
