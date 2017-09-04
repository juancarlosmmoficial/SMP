<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>SMP</title>

	<link rel=stylesheet href="<?=base_url()?>assets/vendors/JQueryGantt/platform.css" type="text/css">
	<link rel=stylesheet href="<?=base_url()?>assets/vendors/JQueryGantt/libs/jquery/dateField/jquery.dateField.css" type="text/css">
	<link rel=stylesheet href="<?=base_url()?>assets/vendors/JQueryGantt/gantt.css" type="text/css">
	<link rel=stylesheet href="<?=base_url()?>assets/vendors/JQueryGantt/ganttPrint.css" type="text/css" media="print">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/js/sweetalert.css">

	<style>
		.resEdit
		{
			padding: 15px;
		}

		.resLine
		{
			width: 95%;
			padding: 3px;
			margin: 5px;
			border: 1px solid #d0d0d0;
		}

		body
		{
			overflow: hidden;
		}

		.ganttButtonBar h1
		{
			color: #000000;
			font-weight: bold;
			font-size: 28px;
			margin-left: 10px;
		}
	</style>

	<script src="<?=base_url()?>assets/js/Helper/jsHelper.js"></script>

	<script src="<?=base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/vendors/jquery/dist/jquery-ui.min.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/libs/jquery/jquery.livequery.1.1.1.min.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/libs/jquery/jquery.timers.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/libs/utilities.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/libs/forms.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/libs/date.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/libs/dialogs.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/libs/layout.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/libs/i18nJs.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/libs/jquery/dateField/jquery.dateField.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/libs/jquery/JST/jquery.JST.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/vendors/JQueryGantt/libs/jquery/svg/jquery.svg.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/vendors/JQueryGantt/libs/jquery/svg/jquery.svgdom.1.8.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/ganttUtilities.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/ganttTask.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/ganttDrawerSVG.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/ganttGridEditor.js"></script>
	<script src="<?=base_url()?>assets/vendors/JQueryGantt/ganttMaster.js"></script>  
	<script src="<?php echo base_url(); ?>assets/dist/js/sweetalert-dev.js"></script>
</head>
<body style="background-color: #ffffff;overflow-x: hidden;">
	<input type="hidden" id="hdIdTareaGantt" name="hdIdTareaGantt" value="3">
	<div id="workSpace" style="padding: 0px;overflow-y: auto;overflow-x: hidden;position: relative;margin: 0 5px;width: 100%;height: 100%;"></div>

	<script>
		var ge;

		$(function()
		{
			var canWrite=true; //this is the default for test purposes

			// here starts gantt initialization
			ge = new GanttMaster();
			ge.set100OnClose=true;

			ge.init($("#workSpace"));
			loadI18n(); //overwrite with localized ones

			//in order to force compute the best-fitting zoom level
			delete ge.gantt.zoom;

			var project=loadFromLocalStorage();

			if (!project.canWrite)
			{
				$(".ganttButtonBar button.requireWrite").attr("disabled","true");
			}

			ge.loadProject(project);

			ge.checkpoint(); //empty the undo stack

			ge.editor.element.oneTime(100, "cl", function () {$(this).find("tr.emptyRow:first").click()});
		});



		function loadGanttFromServer(taskId, callback)
		{
			//this is a simulation: load data from the local storage if you have already played with the demo or a textarea with starting demo data
			loadFromLocalStorage();

			//this is the real implementation
			/*
			//var taskId = $("#taskSelector").val();
			var prof = new Profiler("loadServerSide");
			prof.reset();

			$.getJSON("ganttAjaxController.jsp", {CM:"LOADPROJECT",taskId:taskId}, function(response)
			{
				//console.debug(response);
				if(response.ok)
				{
					prof.stop();

					ge.loadProject(response.project);
					ge.checkpoint(); //empty the undo stack

					if(typeof(callback)=="function")
					{
						callback(response);
					}
				}
				else
				{
					jsonErrorHandling(response);
				}
			});
			*/
		}


		function saveGanttOnServer()
		{
			var prj=ge.saveProject();

			paginaAjaxJSON({ "idTareaGantt" : $('#hdIdTareaGantt').val(), "tareas" : JSON.stringify(prj.tasks) }, '<?=base_url()?>index.php/ET_TAREA/insertarBloque', 'POST', null, function(objectJSON)
			{
				objectJSON=JSON.parse(objectJSON);

				swal(
				{
					title: '',
					text: objectJSON.mensaje,
					type: (objectJSON.proceso=='Correcto' ? 'success' : 'error') 
				},
				function(){});

				if(objectJSON.proceso=='Error')
				{
					return false;
				}
			}, false, true);
		}

		function newProject()
		{
			clearGantt();
		}


		//-------------------------------------------  Create some demo data ------------------------------------------------------
		function setRoles()
		{
			ge.roles = [
				{
					id:"tmp_1",
					name:"Project Manager"
				},
				{
					id:"tmp_2",
					name:"Worker"
				},
				{
					id:"tmp_3",
					name:"Stakeholder"
				},
				{
					id:"tmp_4",
					name:"Customer"
				}
			];
		}

		function setResource()
		{
			var res = [];
			for (var i = 1; i <= 10; i++)
			{
				res.push({id:"tmp_" + i,name:"Resource " + i});
			}
			ge.resources = res;
		}


		function editResources()
		{

		}

		function clearGantt()
		{
			ge.reset();
		}

		function loadI18n()
		{
			GanttMaster.messages = {
			"CANNOT_WRITE":                  "CANNOT_WRITE",
			"CHANGE_OUT_OF_SCOPE":"NO_RIGHTS_FOR_UPDATE_PARENTS_OUT_OF_EDITOR_SCOPE",
			"START_IS_MILESTONE":"START_IS_MILESTONE",
			"END_IS_MILESTONE":"END_IS_MILESTONE",
			"TASK_HAS_CONSTRAINTS":"TASK_HAS_CONSTRAINTS",
			"GANTT_ERROR_DEPENDS_ON_OPEN_TASK":"GANTT_ERROR_DEPENDS_ON_OPEN_TASK",
			"GANTT_ERROR_DESCENDANT_OF_CLOSED_TASK":"GANTT_ERROR_DESCENDANT_OF_CLOSED_TASK",
			"TASK_HAS_EXTERNAL_DEPS":"TASK_HAS_EXTERNAL_DEPS",
			"GANTT_ERROR_LOADING_DATA_TASK_REMOVED":"GANTT_ERROR_LOADING_DATA_TASK_REMOVED",
			"ERROR_SETTING_DATES":"ERROR_SETTING_DATES",
			"CIRCULAR_REFERENCE":"CIRCULAR_REFERENCE",
			"CANNOT_DEPENDS_ON_ANCESTORS":"CANNOT_DEPENDS_ON_ANCESTORS",
			"CANNOT_DEPENDS_ON_DESCENDANTS":"CANNOT_DEPENDS_ON_DESCENDANTS",
			"INVALID_DATE_FORMAT":"Formato de fecha incorrecto",
			"TASK_MOVE_INCONSISTENT_LEVEL":"TASK_MOVE_INCONSISTENT_LEVEL",

			"GANTT_QUARTER_SHORT":"trim.",
			"GANTT_SEMESTER_SHORT":"sem."
			};
		}



		//-------------------------------------------  Get project file as JSON (used for migrate project from gantt to Teamwork) ------------------------------------------------------
		function getFile()
		{
			$("#gimBaPrj").val(JSON.stringify(ge.saveProject()));
			$("#gimmeBack").submit();
			$("#gimBaPrj").val("");

			/*  var uriContent = "data:text/html;charset=utf-8," + encodeURIComponent(JSON.stringify(prj));
			neww=window.open(uriContent,"dl");*/
		}


		function loadFromLocalStorage()
		{
			var ret=
			{
				"tasks": JSON.parse('<?=$arrayTask?>'),
				"selectedRow": 0,
				"deletedTaskIds": [],
				"resources": [

				],
				"roles": [

				],
				"canWrite": true,
				"canDelete":true,
				"canWriteOnParent": true,
				"zoom": "w3"
			};


			//actualize data
			/*var offset=new Date().getTime()-ret.tasks[0].start;

			for (var i=0;i<ret.tasks.length;i++)
			{
				ret.tasks[i].start = ret.tasks[i].start + offset;
			}*/

			return ret;
		}


		function saveInLocalStorage()
		{
			var prj = ge.saveProject();
			if(localStorage)
			{
				localStorage.setObject("teamworkGantDemo", prj);
			}
		}


		//-------------------------------------------  Open a black popup for managing resources. This is only an axample of implementation (usually resources come from server) ------------------------------------------------------
		function editResources()
		{
			//make resource editor
			var resourceEditor = $.JST.createFromTemplate({}, "RESOURCE_EDITOR");
			var resTbl=resourceEditor.find("#resourcesTable");

			for (var i=0;i<ge.resources.length;i++)
			{
				var res=ge.resources[i];
				resTbl.append($.JST.createFromTemplate(res, "RESOURCE_ROW"))
			}

			//bind add resource
			resourceEditor.find("#addResource").click(function()
			{
				resTbl.append($.JST.createFromTemplate({id:"new",name:"resource"}, "RESOURCE_ROW"))
			});

			//bind save event
			resourceEditor.find("#resSaveButton").click(function()
			{
				var newRes=[];
				//find for deleted res
				for (var i=0;i<ge.resources.length;i++)
				{
					var res=ge.resources[i];
					var row = resourceEditor.find("[resId="+res.id+"]");
					if(row.length>0)
					{
						//if still there save it
						var name = row.find("input[name]").val();
						if (name && name!="")
						res.name=name;
						newRes.push(res);
					}
					else 
					{
						//remove assignments
						for (var j=0;j<ge.tasks.length;j++)
						{
							var task=ge.tasks[j];
							var newAss=[];
							for(var k=0;k<task.assigs.length;k++)
							{
								var ass=task.assigs[k];
								if(ass.resourceId!=res.id)
									newAss.push(ass);
							}
							task.assigs=newAss;
						}
					}
				}

				//loop on new rows
				var cnt=0
				resourceEditor.find("[resId=new]").each(function()
				{
					cnt++;
					var row = $(this);
					var name = row.find("input[name]").val();
					if(name && name!="")
						newRes.push (new Resource("tmp_"+new Date().getTime()+"_"+cnt,name));
				});

				ge.resources=newRes;

				closeBlackPopup();
				ge.redraw();
			});


			var ndo = createModalPopup(400, 500).append(resourceEditor);
		}
	</script>

	<div id="gantEditorTemplates" style="display:none;">
		<div class="__template__" type="GANTBUTTONS"><!--
			<div class="ganttButtonBar noprint">
			<div class="buttons">
			<a href="https://gantt.twproject.com/"><img src="res/twGanttLogo.png" alt="Gantt de ET" align="absmiddle" style="max-width: 136px; padding-right: 15px"></a>

			<button onclick="$('#workSpace').trigger('undo.gantt');return false;" class="button textual icon requireCanWrite" title="undo"><span class="teamworkIcon">&#39;</span></button>
			<button onclick="$('#workSpace').trigger('redo.gantt');return false;" class="button textual icon requireCanWrite" title="redo"><span class="teamworkIcon">&middot;</span></button>
			<span class="ganttButtonSeparator requireCanWrite requireCanAdd"></span>
			<button onclick="$('#workSpace').trigger('addAboveCurrentTask.gantt');return false;" class="button textual icon requireCanWrite requireCanAdd" title="insert above"><span class="teamworkIcon">l</span></button>
			<button onclick="$('#workSpace').trigger('addBelowCurrentTask.gantt');return false;" class="button textual icon requireCanWrite requireCanAdd" title="insert below"><span class="teamworkIcon">X</span></button>
			<span class="ganttButtonSeparator requireCanWrite requireCanInOutdent"></span>
			<button onclick="$('#workSpace').trigger('outdentCurrentTask.gantt');return false;" class="button textual icon requireCanWrite requireCanInOutdent" title="un-indent task"><span class="teamworkIcon">.</span></button>
			<button onclick="$('#workSpace').trigger('indentCurrentTask.gantt');return false;" class="button textual icon requireCanWrite requireCanInOutdent" title="indent task"><span class="teamworkIcon">:</span></button>
			<span class="ganttButtonSeparator requireCanWrite requireCanMoveUpDown"></span>
			<button onclick="$('#workSpace').trigger('moveUpCurrentTask.gantt');return false;" class="button textual icon requireCanWrite requireCanMoveUpDown" title="move up"><span class="teamworkIcon">k</span></button>
			<button onclick="$('#workSpace').trigger('moveDownCurrentTask.gantt');return false;" class="button textual icon requireCanWrite requireCanMoveUpDown" title="move down"><span class="teamworkIcon">j</span></button>
			<span class="ganttButtonSeparator requireCanDelete"></span>
			<button onclick="$('#workSpace').trigger('deleteFocused.gantt');return false;" class="button textual icon delete requireCanWrite" title="Delete"><span class="teamworkIcon">&cent;</span></button>
			<span class="ganttButtonSeparator"></span>
			<button onclick="$('#workSpace').trigger('expandAll.gantt');return false;" class="button textual icon " title="EXPAND_ALL"><span class="teamworkIcon">6</span></button>
			<button onclick="$('#workSpace').trigger('collapseAll.gantt'); return false;" class="button textual icon " title="COLLAPSE_ALL"><span class="teamworkIcon">5</span></button>

			<span class="ganttButtonSeparator"></span>
			<button onclick="$('#workSpace').trigger('zoomMinus.gantt'); return false;" class="button textual icon " title="zoom out"><span class="teamworkIcon">)</span></button>
			<button onclick="$('#workSpace').trigger('zoomPlus.gantt');return false;" class="button textual icon " title="zoom in"><span class="teamworkIcon">(</span></button>
			<span class="ganttButtonSeparator"></span>
			<button onclick="print();return false;" class="button textual icon " title="Print"><span class="teamworkIcon">p</span></button>
			<span class="ganttButtonSeparator"></span>
			<button onclick="ge.gantt.showCriticalPath=!ge.gantt.showCriticalPath; ge.redraw();return false;" class="button textual icon requireCanSeeCriticalPath" title="CRITICAL_PATH"><span class="teamworkIcon">&pound;</span></button>
			<span class="ganttButtonSeparator requireCanSeeCriticalPath"></span>
			<button onclick="ge.splitter.resize(.1);return false;" class="button textual icon" ><span class="teamworkIcon">F</span></button>
			<button onclick="ge.splitter.resize(50);return false;" class="button textual icon" ><span class="teamworkIcon">O</span></button>
			<button onclick="ge.splitter.resize(100);return false;" class="button textual icon"><span class="teamworkIcon">R</span></button>
			<span class="ganttButtonSeparator"></span>
			<button onclick="$('#workSpace').trigger('fullScreen.gantt');return false;" class="button textual icon" title="FULLSCREEN" id="fullscrbtn"><span class="teamworkIcon">@</span></button>
			<button onclick="ge.element.toggleClass('colorByStatus' );return false;" class="button textual icon"><span class="teamworkIcon">&sect;</span></button>

			<button onclick="editResources();" class="button textual requireWrite" title="edit resources"><span class="teamworkIcon">M</span></button>
			&nbsp; &nbsp; &nbsp; &nbsp;
			<button onclick="saveGanttOnServer();" class="button first big requireWrite" title="Save">Guardar</button>
			<button onclick='newProject();' class='button requireWrite newproject'><em>Limpiar datos</em></button>
			<button class="button login" title="login/enroll" onclick="loginEnroll($(this));" style="display:none;">login/enroll</button>
			<button class="button opt collab" title="Start with Twproject" onclick="collaborate($(this));" style="display:none;"><em>collaborate</em></button>
			</div></div>
		--></div>

		<div class="__template__" type="TASKSEDITHEAD"><!--
			<table class="gdfTable" cellspacing="0" cellpadding="0">
			<thead>
			<tr style="height:40px">
			<th class="gdfColHeader" style="width:35px; border-right: none"></th>
			<th class="gdfColHeader" style="width:25px;"></th>
			<th class="gdfColHeader gdfResizable" style="width:100px;">Nombre corto</th>
			<th class="gdfColHeader gdfResizable" style="width:300px;">Nombre largo</th>
			<th class="gdfColHeader"  align="center" style="width:17px;" title="Inicio de la actividad."><span class="teamworkIcon" style="font-size: 8px;">^</span></th>
			<th class="gdfColHeader gdfResizable" style="width:80px;">Inicio</th>
			<th class="gdfColHeader"  align="center" style="width:17px;" title="Fin de la actividad."><span class="teamworkIcon" style="font-size: 8px;">^</span></th>
			<th class="gdfColHeader gdfResizable" style="width:80px;">Fin</th>
			<th class="gdfColHeader gdfResizable" style="width:50px;">Dur.</th>
			<th class="gdfColHeader gdfResizable" style="width:20px;">%</th>
			<th class="gdfColHeader gdfResizable requireCanSeeDep" style="width:50px;">Dep.</th>
			<th class="gdfColHeader gdfResizable" style="width:1000px; text-align: left; padding-left: 10px;">Responsable</th>
			</tr>
			</thead>
			</table>
		--></div>

		<div class="__template__" type="TASKROW"><!--
			<tr taskId="(#=obj.id#)" class="taskEditRow (#=obj.isParent()?'isParent':''#) (#=obj.collapsed?'collapsed':''#)" level="(#=level#)">
			<th class="gdfCell edit" align="right" style="cursor:pointer;"><span class="taskRowIndex">(#=obj.getRow()+1#)</span> <span class="teamworkIcon" style="font-size:12px;" >e</span></th>
			<td class="gdfCell noClip" align="center"><div class="taskStatus cvcColorSquare" status="(#=obj.status#)"></div></td>
			<td class="gdfCell"><input type="text" name="code" value="(#=obj.code?obj.code:''#)" placeholder="Nombre corto"></td>
			<td class="gdfCell indentCell" style="padding-left:(#=obj.level*10+18#)px;">
			<div class="exp-controller" align="center"></div>
			<input type="text" name="name" value="(#=obj.name#)" placeholder="Nombre" autocomplete="off">
			</td>
			<td class="gdfCell" align="center"><input type="checkbox" name="startIsMilestone"></td>
			<td class="gdfCell"><input type="text" name="start"  value="" class="date"></td>
			<td class="gdfCell" align="center"><input type="checkbox" name="endIsMilestone"></td>
			<td class="gdfCell"><input type="text" name="end" value="" class="date"></td>
			<td class="gdfCell"><input type="text" name="duration" autocomplete="off" value="(#=obj.duration#)"></td>
			<td class="gdfCell"><input type="text" name="progress" class="validated" entrytype="PERCENTILE" autocomplete="off" value="(#=obj.progress?obj.progress:''#)" (#=obj.progressByWorklog?"readOnly":""#)></td>
			<td class="gdfCell requireCanSeeDep"><input type="text" name="depends" autocomplete="off" value="(#=obj.depends#)" (#=obj.hasExternalDep?"readonly":""#)></td>
			<td class="gdfCell taskAssigs">(#=obj.getAssigsString()#)</td>
			</tr>
		--></div>

		<div class="__template__" type="TASKEMPTYROW"><!--
			<tr class="taskEditRow emptyRow" >
			<th class="gdfCell" align="right"></th>
			<td class="gdfCell noClip" align="center"></td>
			<td class="gdfCell"></td>
			<td class="gdfCell"></td>
			<td class="gdfCell"></td>
			<td class="gdfCell"></td>
			<td class="gdfCell"></td>
			<td class="gdfCell"></td>
			<td class="gdfCell"></td>
			<td class="gdfCell"></td>
			<td class="gdfCell requireCanSeeDep"></td>
			<td class="gdfCell"></td>
			</tr>
		--></div>

		<div class="__template__" type="TASKBAR"><!--
			<div class="taskBox taskBoxDiv" taskId="(#=obj.id#)" >
			<div class="layout (#=obj.hasExternalDep?'extDep':''#)">
			<div class="taskStatus" status="(#=obj.status#)"></div>
			<div class="taskProgress" style="width:(#=obj.progress>100?100:obj.progress#)%; background-color:(#=obj.progress>100?'red':'rgb(153,255,51);'#);"></div>
			<div class="milestone (#=obj.startIsMilestone?'active':''#)" ></div>

			<div class="taskLabel"></div>
			<div class="milestone end (#=obj.endIsMilestone?'active':''#)" ></div>
			</div>
			</div>
		--></div>

		<div class="__template__" type="CHANGE_STATUS"><!--
			<div class="taskStatusBox">
			<div class="taskStatus cvcColorSquare" status="STATUS_ACTIVE" title="active"></div>
			<div class="taskStatus cvcColorSquare" status="STATUS_DONE" title="completed"></div>
			<div class="taskStatus cvcColorSquare" status="STATUS_FAILED" title="failed"></div>
			<div class="taskStatus cvcColorSquare" status="STATUS_SUSPENDED" title="suspended"></div>
			<div class="taskStatus cvcColorSquare" status="STATUS_UNDEFINED" title="undefined"></div>
			</div>
		--></div>

		<div class="__template__" type="TASK_EDITOR"><!--
			<div class="ganttTaskEditor">
			<h2 class="taskData">Task editor</h2>
			<table  cellspacing="1" cellpadding="5" width="100%" class="taskData table" border="0">
			<tr>
			<td width="200" style="height: 80px"  valign="top">
			<label for="code">Nombre corto</label><br>
			<input type="text" name="code" id="code" value="" size=15 class="formElements" autocomplete='off' maxlength=255 style='width:100%' oldvalue="1">
			</td>
			<td colspan="3" valign="top"><label for="name" class="required">name</label><br><input type="text" name="name" id="name"class="formElements" autocomplete='off' maxlength=255 style='width:100%' value="" required="true" oldvalue="1"></td>
			</tr>

			<tr class="dateRow">
			<td nowrap="">
			<div style="position:relative">
			<label for="start">start</label>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" id="startIsMilestone" name="startIsMilestone" value="yes"> &nbsp;<label for="startIsMilestone">is milestone</label>&nbsp;
			<br><input type="text" name="start" id="start" size="8" class="formElements dateField validated date" autocomplete="off" maxlength="255" value="" oldvalue="1" entrytype="DATE">
			<span title="calendar" id="starts_inputDate" class="teamworkIcon openCalendar" onclick="$(this).dateField({inputField:$(this).prevAll(':input:first'),isSearchField:false});">m</span>          </div>
			</td>
			<td nowrap="">
			<label for="end">End</label>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" id="endIsMilestone" name="endIsMilestone" value="yes"> &nbsp;<label for="endIsMilestone">is milestone</label>&nbsp;
			<br><input type="text" name="end" id="end" size="8" class="formElements dateField validated date" autocomplete="off" maxlength="255" value="" oldvalue="1" entrytype="DATE">
			<span title="calendar" id="ends_inputDate" class="teamworkIcon openCalendar" onclick="$(this).dateField({inputField:$(this).prevAll(':input:first'),isSearchField:false});">m</span>
			</td>
			<td nowrap="" >
			<label for="duration" class=" ">Days</label><br>
			<input type="text" name="duration" id="duration" size="4" class="formElements validated durationdays" title="Duration is in working days." autocomplete="off" maxlength="255" value="" oldvalue="1" entrytype="DURATIONDAYS">&nbsp;
			</td>
			</tr>

			<tr>
			<td  colspan="2">
			<label for="status" class=" ">status</label><br>
			<select id="status" name="status" class="taskStatus" status="(#=obj.status#)"  onchange="$(this).attr('STATUS',$(this).val());">
			<option value="STATUS_ACTIVE" class="taskStatus" status="STATUS_ACTIVE" >active</option>
			<option value="STATUS_SUSPENDED" class="taskStatus" status="STATUS_SUSPENDED" >suspended</option>
			<option value="STATUS_DONE" class="taskStatus" status="STATUS_DONE" >completed</option>
			<option value="STATUS_FAILED" class="taskStatus" status="STATUS_FAILED" >failed</option>
			<option value="STATUS_UNDEFINED" class="taskStatus" status="STATUS_UNDEFINED" >undefined</option>
			</select>
			</td>

			<td valign="top" nowrap>
			<label>progress</label><br>
			<input type="text" name="progress" id="progress" size="7" class="formElements validated percentile" autocomplete="off" maxlength="255" value="" oldvalue="1" entrytype="PERCENTILE">
			</td>
			</tr>

			</tr>
			<tr>
			<td colspan="4">
			<label for="description">Description</label><br>
			<textarea rows="3" cols="30" id="description" name="description" class="formElements" style="width:100%"></textarea>
			</td>
			</tr>
			</table>

			<h2>Assignments</h2>
			<table  cellspacing="1" cellpadding="0" width="100%" id="assigsTable">
			<tr>
			<th style="width:100px;">name</th>
			<th style="width:70px;">Role</th>
			<th style="width:30px;">est.wklg.</th>
			<th style="width:30px;" id="addAssig"><span class="teamworkIcon" style="cursor: pointer">+</span></th>
			</tr>
			</table>

			<div style="text-align: right; padding-top: 20px">
			<span id="saveButton" class="button first" onClick="$(this).trigger('saveFullEditor.gantt');">Save</span>
			</div>

			</div>
		--></div>

		<div class="__template__" type="ASSIGNMENT_ROW"><!--
			<tr taskId="(#=obj.task.id#)" assId="(#=obj.assig.id#)" class="assigEditRow" >
			<td ><select name="resourceId"  class="formElements" (#=obj.assig.id.indexOf("tmp_")==0?"":"disabled"#) ></select></td>
			<td ><select type="select" name="roleId"  class="formElements"></select></td>
			<td ><input type="text" name="effort" value="(#=getMillisInHoursMinutes(obj.assig.effort)#)" size="5" class="formElements"></td>
			<td align="center"><span class="teamworkIcon delAssig del" style="cursor: pointer">d</span></td>
			</tr>
		--></div>

		<div class="__template__" type="RESOURCE_EDITOR"><!--
			<div class="resourceEditor" style="padding: 5px;">

			<h2>Project team</h2>
			<table  cellspacing="1" cellpadding="0" width="100%" id="resourcesTable">
			<tr>
			<th style="width:100px;">name</th>
			<th style="width:30px;" id="addResource"><span class="teamworkIcon" style="cursor: pointer">+</span></th>
			</tr>
			</table>

			<div style="text-align: right; padding-top: 20px"><button id="resSaveButton" class="button big">Save</button></div>
			</div>
		--></div>

		<div class="__template__" type="RESOURCE_ROW"><!--
			<tr resId="(#=obj.id#)" class="resRow" >
			<td ><input type="text" name="name" value="(#=obj.name#)" style="width:100%;" class="formElements"></td>
			<td align="center"><span class="teamworkIcon delRes del" style="cursor: pointer">d</span></td>
			</tr>
		--></div>
	</div>
</body>
</html>