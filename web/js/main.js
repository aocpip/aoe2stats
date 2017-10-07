

var MAX_COMPARE_COUNT = 4;
var AGES = ['Dark', 'Feudal', 'Castle', 'Imperial'];
var LOGOS = {
	'x': '<span class="version_icon icon_dlc"><span>DLC</span></span>',
	'k': '<span class="version_icon icon_kings"><span>AoK</span></span>',
	'c': '<span class="version_icon icon_conquerors"><span>AoC</span></span>',
	'f': '<span class="version_icon icon_forgotten"><span>AoF</span></span>',
	'a': '<span class="version_icon icon_african"><span>AoAK</span></span>',
	'r': '<span class="version_icon icon_rajas"><span>AoR</span></span>'
}

var VERSION_FILTERS = {
	'x': 'dlc aof aoak aor',
	'k': 'aok',
	'c': 'aoc',
	'f': 'aof dlc',
	'a': 'aoak dlc',
	'r': 'aor ror rotr dlc'
}

var SLOW_SEARCH_TIMEOUT = 750;
var FAST_SEARCH_TIMEOUT = 250;
var SEARCH_TIMEOUT_THRESHOLD = 3;

var ACRONYMS = {
	'T': 'Type',
	'V': 'DLC version',
	'W': 'Wood',
	'F': 'Food',
	'G': 'Gold',
	'S': 'Stone',
	'C': 'Add to compare',
	'BT': 'Build time',
	'RT': 'Reload time',
	'AD': 'Attack delay',
	'MR': 'Movement rate',
	'LOS': 'Line of sight',
	'HP': 'HP (hitpoints)',
	'RA': 'Range',
	'AT': 'Attack',
	'AR': 'Melee armor/Pierce armor'
}

var TABLE_BREAKPOINTS = [
					{ name: 'inf', width: Infinity},
		            { name: 'desktop', width: 99999 },
		            { name: 'tablet',  width: 1024 },
		            { name: 'fablet',  width: 768 },
		            { name: 'phone',   width: 480 } ];



var unit_table = null;
var structure_table = null;
var technology_table = null;
var civilization_table = null;
var gathering_table = null;


function isEmpty(str) {
    return (!str || 0 === str.length);
}

function format_add_hidden(d, columns) {
	var content = "";
	var hidden_columns = $.map( columns, function ( col, i ) {
					if(col.hidden && !(col.title == '&nbsp;&nbsp;' || col.title == 'Type' ||col.title == 'expander')) {
						var long_title = col.title;
						if(typeof ACRONYMS[col.title] !== 'undefined') {
							long_title = ACRONYMS[col.title];
						}
						return '<tr>'+
                            '<td>'+long_title+'</td> '+
                            '<td>'+col.data+'</td>'+
                        '</tr>';
					}

                    return '';
                } ).join('');

	if(d.extra || hidden_columns) {
		content += "<table class=\"detail-table table table-striped table-hover table-bordered\" width=\"100%\">";
		content += hidden_columns;
		if(d.extra) {
			$.each(d.extra, function(key, value){
				content += "<tr><td>"+key+"</td><td>"+value+"</td></tr>";
			});
		}
		content += "</table>";
	}
	return content;
}

function format_add_availability(d) {
	var content = "";
	if(d.avail || d.noavail) {
		content += "<div class=\"availability\">";
		$.each(d.avail, function(idx, value) {
			content += "<span class=\"civ-avail\">"+value+"</span> ";
		});
		$.each(d.noavail, function(idx,value) {
			content += "<span class=\"civ-noavail\">"+value+"</span> ";
		});
		content += "</div>";
	}
	return content;
}

function format_add_civb(d, content) {
	var content = "";
	if(d.civb) {
		content += "<table class=\"detail-table table table-striped table-hover table-bordered\"><tr><th colspan=\"2\" class=\"detail-head\">Civilization bonuses</th></tr>";
		$.each(d.civb, function(key, value){
			content += "<tr><td>"+key+"</td><td>"+value+"</td></tr>";
		});
		content += "</table>";
	}
	return content;
}

function formatVersion (state) {
  if (!state.id) { return state.text; }
  var pstate = $(
    '<div class="version-item"><img src="images/aocversion/' + state.element.value.toLowerCase() + '_16.png" class="img-flag" />&nbsp;<span class="helper">' + state.text + '</span></div>'
  );
  return pstate;
};

function formatUnit(d, columns) {
	var content = "";

	content += format_add_hidden(d, columns);

	content += "<div>";

	content += "<p>"+d.note+"</p>";

	content += format_add_civb(d);
	content += format_add_availability(d);

	content += "</div>";
	return content;
}

function formatTechnology(d, columns) {
	var content = "";
	
	content += format_add_hidden(d, columns);
	content += "<div>";
	content += format_add_civb(d);
	content += format_add_availability(d);

	content += "</div>";
	return content;
}

function formatStructure(d, columns) {
	var content = "";

	
	content += format_add_hidden(d, columns);

	content += "<div>";
	content += format_add_civb(d);
	content += format_add_availability(d);

	content += "</div>";
	return content;
}

function formatCiv(d, columns) {
	var content = "";

	content += format_add_hidden(d, columns);

	var version = Cookies.get("aocversion");
	if(d.tt.length > 0) {
		content += "<div style='min-height: 320px;height: 100%;'>";
		content += '<iframe width="100%" height="100%" style="min-height: 320px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="images/techtrees/'+version+'/'+d.tt+'.html"></iframe>';
		content += "</div>";
	}

	return content;
}

function formatGathering(d, columns) {
	var content = "";

	content += format_add_hidden(d, columns);

	return content;
}

function openTechtree(event, civ) {
	event.stopPropagation();
	var version = Cookies.get("aocversion");
	window.location.href = "techtree.php?v="+version+"&c="+civ;
}

function formatTechtree(data) {
	var content = "";
	if(typeof data !== 'undefined' && data.length > 0) {
		content += "<button onclick=\"openTechtree(event,'"+data+"')\" class=\"btn btn-default\">" +
			"<span class='glyphicon glyphicon-fullscreen'></span> open </button>";
	} else {
		content += "<button class=\"btn btn-default disabled\">" +
			"<span class='glyphicon glyphicon-fullscreen'></span> open </button>";
	}
	return content;
}

function compare(evt, el, rowID) {
	if(is_compared(rowID)) {
		$(el).removeClass("btn-warning comparison").addClass("btn-default");
		del_comparison(rowID);
	} else {
		if(get_comparison_count() < MAX_COMPARE_COUNT) {
			$(el).removeClass("btn-default").addClass("btn-warning comparison");
			add_comparison(rowID);
		}
	}

	if (!evt)
      evt = window.event;

    //IE9 & Other Browsers
    if (evt.stopPropagation) {
      evt.stopPropagation();
    }
    //IE8 and Lower
    else {
      evt.cancelBubble = true;
    }

    updateComparisons();
}


function formatComparisonButton(rowID) {
	if(rowID == null) {
		return '';
	}

	var btnClass = "btn-default"
	if(is_compared(rowID)) {
		btnClass = "btn-warning comparison";
	}

	return '<button class="btn '+btnClass+'" onClick="compare(event, this, \''+rowID+'\')"><i class="fa fa-balance-scale""></i></button>';
}

function updateComparisons() {
	var count = get_comparison_count();
	$("#compare .badge").html(count);
	if(count == 0) {
		$("#compare").removeClass("btn-danger btn-warning comparison").addClass("btn-default disabled");
		$("#compare-clear").hide();
	} else {
		$("#compare-clear").show();
		$("#compare").removeClass("btn-default btn-warning btn-danger disabled").addClass("comparison");
		if(count >= MAX_COMPARE_COUNT) {
			$("#compare").addClass("btn-danger");
		} else {
			$("#compare").addClass("btn-warning");
		}
	}

	var redirect_url =  "compare.php?v="+Cookies.get("aocversion")+"&c="+get_comparison_query();
	$("#compare").attr("href", redirect_url);
}

function reload(version) {
	var stats_version = "?" + Cookies.get("version");
	unit_table.ajax.url("stats/build/"+version+"_units.json"+stats_version).load();
	structure_table.ajax.url("stats/build/"+version+"_structures.json"+stats_version).load();
	technology_table.ajax.url("stats/build/"+version+"_technologies.json"+stats_version).load();
	civilization_table.ajax.url("stats/build/"+version+"_civilizations.json"+stats_version).load();
	gathering_table.ajax.url("stats/build/"+version+"_gathering.json"+stats_version).load();

	setTimeout(function() {
		    	update_search();
	      	}, 500);
}

function initGroups(selector) {
	var psettings = $(selector).dataTable().fnSettings();
	psettings._collapsedID = selector;
	psettings._collapsedGroups = [];
	$.fn.dataTable.ext.search.push(
       function(settings, data, dataIndex) {
		  if(!settings._collapsedID) {
			//return true;
		  }
		  if(settings._collapsedID != selector) {
			return true;
		  }
		  if($.inArray(data[0], settings._collapsedGroups) >= 0) {
			return false;
		  }
		  return true;
       }
    );
}

function preDrawGroups(table) {
	var api = table.api();
	var porder = api.order().slice();
	if(porder.length > 0 && porder[0][0] == 0) {
		return true;
	} else {
		if((typeof table.last_order !== 'undefined') && porder.join() == table.last_order.join()) {
			porder[0][1] = 'desc';
		}
		table.last_order = porder;
		var newOrder = [[0, 'asc']];
		newOrder = newOrder.concat(porder);
		api.order(newOrder).draw();
		return false;
	}
	return true;
}

function drawGroups(table) {
	var api = table.api();
	var rows = api.rows( {page:'current'} ).nodes();
	var columncount = api.columns(/*':visible'*/).nodes().length;
	var last=null;
	var settings = table.fnSettings();
	var visibleGroups = 0;

	api.column(0, {page:'current'} ).data().each( function ( group, i ) {
		if ( last !== group ) {
			var missedGroups = "";
			if(settings._collapsedGroups) {
				$.each(settings._collapsedGroups, function(index, value) {
					if((value > last || !last) && value < group) {
						missedGroups += '<tr class="group group-collapsed"><td class="group-title" colspan="'+columncount+'">'+value+'</td></tr>';
					}
				});
			}
			$(rows).eq( i ).before(
				missedGroups+'<tr class="group parent"><td class="group-title" colspan="'+columncount+'">'+group+'</td></tr>'
			);
			visibleGroups += 1;
			last = group;
		}
	});
	settings._collapsableGroupCount = Math.max(0, visibleGroups - 1);
	
	var missedGroups = "";
	if(settings._collapsedGroups) {
		$.each(settings._collapsedGroups, function(index, value) {
			if((value > last || !last)) {
				missedGroups += '<tr class="group group-collapsed"><td  class="group-title" colspan="'+columncount+'">'+value+'</td></tr>';
			}
		});
	}
	$(rows).eq(rows.length - 1).after(missedGroups);
}

function fixColumns() {
	unit_table.columns.adjust().responsive.recalc();
	structure_table.columns.adjust().responsive.recalc();
	technology_table.columns.adjust().responsive.recalc();
	civilization_table.columns.adjust().responsive.recalc();
	gathering_table.columns.adjust().responsive.recalc();
}

function fixHeaders() {
	unit_table.fixedHeader.adjust();
	structure_table.fixedHeader.adjust();
	technology_table.fixedHeader.adjust();
	civilization_table.fixedHeader.adjust();
	gathering_table.fixedHeader.adjust();
}


var fixHeaderTimeout = null;

function fixHeadersAsync() {
	clearTimeout(fixHeaderTimeout);
    fixHeaderTimeout = setTimeout(fixHeaders, 500);
}

var fixColumnsTimeout = null;

function fixColumnsAsync() {
	clearTimeout(fixColumnsTimeout);
    fixColumnsTimeout = setTimeout(fixColumns, 500);
}

function fixColumnsWithIDAsync(tableID) {
	setTimeout(function() {
		var current_table;
		switch(tableID) {
			case 'units':
				current_table = unit_table;
				break;
			case 'structures':
				current_table = structure_table;
				break;
			case 'techs':
				current_table = technology_table;
				break;
			case 'civs':
				current_table = civilization_table;
				break;
			case 'gathers':
				current_table = gathering_table;
				break;
		}
		if(typeof current_table !== 'undefined') {
			current_table.columns.adjust().responsive.recalc();
		}
	}, 250);
}

function redraw() {
	unit_table.draw();
	structure_table.draw();
	technology_table.draw();
	civilization_table.draw();
	gathering_table.draw();
}

function columns2assoc(columns) {
	var assoc_array = [];
	$.each(columns, function(index, value){
		assoc_array[value.title] = value.data;
	});
	return assoc_array;
}

function groupClickCallback(selector, group) {
	var table = $(selector).dataTable();
	var settings = table.fnSettings();
	var index = $.inArray(group, settings._collapsedGroups);
	if(index >= 0) {
		settings._collapsedGroups.splice(index, 1 );
	} else {
		if(settings._collapsableGroupCount) {
			settings._collapsedGroups.push(group);
		}
	}
	settings._collapsedGroups.sort();
	table.api().draw();
	fixHeadersAsync();
}

function expandGroups(selector) {
	var table = $(selector).dataTable();
	var settings = table.fnSettings();
	settings._collapsedGroups = [];
	settings._collapsableGroupCount = 0;
}


function initTables(version) {
	var topOffset = $("#navbar").outerHeight();

	var stats_version = "?" + Cookies.get("version");

	unit_table = $('#unit-stats').DataTable({
		"ajax": "stats/build/"+version+"_units.json"+stats_version,
		"fixedHeader" : {
			"header": false,
			"footer": true,
			"footerOffset": -6
		},
		"initComplete": function (settings, json) {
			setTimeout(function() {
				initGroups("#unit-stats");
				fixHeadersAsync();
	      	}, 50);

    	},
		"lengthChange": false,
		"paginate": false,
		"destroy": true,
		"columns": [
            { "data": "type", "class": "bold-cell", "visible": false},
            { "data": "t",
            	"class": "control",
            	"render" : function(data, type, row) {
            		if(type == 'display') {
            			return '';
            		} else {
            			return data;
            		}
            	}, "responsivePriority": 1},
            { "data": "ver", "class": "dt-center",
        		"render": function(data, type, row) {
        			if(type == 'display') {
        				return LOGOS[data];
        			} else if (type == 'filter') {
        				return VERSION_FILTERS[data];
        			}else {
        				return data;
        			}
        		}, "responsivePriority": 10
        	},
            { "data": "name", "class": "dt-center bold-cell", "responsivePriority": 1 },
            { "data": "age", "class": "dt-center",
            	"render" : function(data, type, row) {
            		if(type == 'display' || type == 'filter') {
            			return AGES[data];
            		} else {
            			return data;
            		}
            	}, "responsivePriority": 1
        	},
            { "data": "cost", "class": "dt-center", "responsivePriority": 2 },
            { "data": "bt", "class": "dt-center", "responsivePriority": 3 },
            { "data": "fr", "class": "dt-center", "responsivePriority": 4 },
            { "data": "ad", "class": "dt-center", "responsivePriority": 7 },
            { "data": "mr", "class": "dt-center" , "responsivePriority": 4},
            { "data": "los", "class": "dt-center", "responsivePriority": 5 },
            { "data": "hp", "class": "dt-center", "responsivePriority": 2 },
            { "data": "ra", "class": "dt-center", "responsivePriority": 3 },
            { "data": "at", "class": "dt-center", "responsivePriority": 2 },
            { "data": "ar", "class": "dt-center", "responsivePriority": 2 },
            { "data": "", "class": "dt-center", "responsivePriority": 1,
        		"render": function(data, type, row) {
        			var rowID = comparison_encode_unit(row);
        			if(type == 'display') {
        				return formatComparisonButton(rowID);
        			} else {
        				return '';
        			}
        		}, "orderable": false, "searchable": false},
            { "data": "name", "className": "inf", "orderable": false, "searchable": false}],
           "order": [[0, 'asc'], [1, 'asc'], [4, 'asc']],
		   "preDrawCallback": function( settings ) {
				return preDrawGroups(this);
			  },
		   "drawCallback": function ( settings ) {
				drawGroups(this);
			},
			responsive: {
				details: {
					renderer: function ( api, rowIdx, columns ) {
						var row = api.row(rowIdx);
						var d= row.data();
						return formatUnit(d, columns);
		            },
		            type: 'column',
					target: 'tr'
				},
				breakpoints: TABLE_BREAKPOINTS
			}
	});

	unit_table.on( 'responsive-display', function ( e, datatable, row, showHide, update ) {
	    fixHeadersAsync();
	} );

	unit_table.on( 'responsive-resize', function ( e, datatable, columns ) {
	    fixHeadersAsync();
    });

	
	$('#unit-stats tbody').on('click', 'td', function (event) {
	    var tr = $(this).closest('tr');
		if(tr.hasClass('group')) {
			groupClickCallback("#unit-stats", $(this).text());
			event.stopPropagation();
			return;
		}
	} );
	

	structure_table = $('#structure-stats').DataTable({
		"ajax": "stats/build/"+version+"_structures.json" + stats_version,
		"fixedHeader" : {
			"header": false,
			"footer": true,
			"footerOffset": -6
		},
		"initComplete": function (settings, json) {
			setTimeout(function() {
				initGroups("#structure-stats");
				fixHeadersAsync();
	      	}, 50);

    	},
		"lengthChange": false,
		"paginate": false,
		"destroy": true,
		"columns": [
            { "data": "type", "class": "dt-center", "visible": false}, 
            { "data": "type", "render" : function(data, type, row) {
            			return '';
            		}, "class": "control", "orderable": false, "searchable": false},
            { "data": "ver", "class": "dt-center",
        		"render": function(data, type, row) {
        			if(type == 'display') {
        				return LOGOS[data];
        			} else if (type == 'filter') {
        				return VERSION_FILTERS[data];
        			}else {
        				return data;
        			}
        		}, "responsivePriority": 5
        	},
            { "data": "name", "class": "dt-center bold-cell", "responsivePriority": 1 },
            { "data": "age", "class": "dt-center",
            	"render" : function(data, type, row) {
            		if(type == 'display' || type == 'filter') {
            			return AGES[data];
            		} else {
            			return data;
            		}
            	}, "responsivePriority": 4
        	},
            { "data": "cost", "class": "dt-center", "responsivePriority": 2 },
            { "data": "bt", "class": "dt-center", "responsivePriority": 2 },
            { "data": "fr", "class": "dt-center", "responsivePriority": 4 },
            { "data": "los", "class": "dt-center", "responsivePriority": 4 },
            { "data": "hp", "class": "dt-center", "responsivePriority": 2 },
            { "data": "ra", "class": "dt-center", "responsivePriority": 3},
            { "data": "at", "class": "dt-center", "responsivePriority": 3 },
            { "data": "ar", "class": "dt-center", "responsivePriority": 3 },
            { "data": "GA", "class": "dt-center", "responsivePriority": 6},
            { "data": "", "class": "dt-center", "responsivePriority": 1,
        		"render": function(data, type, row) {
        			var rowID = comparison_encode_structure(row);
        			if(type == 'display') {
        				return formatComparisonButton(rowID);
        			} else {
        				return '';
        			}
        		}, "orderable": false, "searchable": false},
            { "data": "t", "className": "inf", "orderable": false, "searchable": true}],
           "order": [[0, 'asc'], [4, 'asc'], [3, 'asc']],
		   "preDrawCallback": function( settings ) {
				return preDrawGroups(this);
			  },
		   "drawCallback": function ( settings ) {
				drawGroups(this);
			},
			responsive: {
				details: {
					renderer: function ( api, rowIdx, columns ) {
						var row = api.row(rowIdx);
						var d= row.data();
						return formatStructure(d, columns);
		            },
		            type: 'column',
					target: 'tr'
				},
				breakpoints: TABLE_BREAKPOINTS
			}
	});

	structure_table.on( 'responsive-display', function ( e, datatable, row, showHide, update ) {
	    fixHeadersAsync();
	} );

	structure_table.on( 'responsive-resize', function ( e, datatable, columns ) {
	    fixHeadersAsync();
    });

	$('#structure-stats tbody').on('click', 'td', function () {
	    var tr = $(this).closest('tr');
	    var row = structure_table.row( tr );
		if(tr.hasClass('group')) {
			groupClickCallback("#structure-stats", $(this).text());
			return; 
		}
	} );

	technology_table = $('#technology-stats').DataTable({
		"ajax": "stats/build/"+version+"_technologies.json" + stats_version,
		"fixedHeader" : {
			"header": false,
			"footer": true,
			"footerOffset": -6
		},
		"initComplete": function (settings, json) {
			setTimeout(function() {
				initGroups("#technology-stats");
				fixHeadersAsync();
	      	}, 50);

    	},
		"lengthChange": false,
		"paginate": false,
		"destroy": true,
		"columns": [
            { "data": "type", "class": "dt-center", "visible": false},
            { "data": "", "render" : function(data, type, row) {
            			return '';
            		},
            		"orderable": false, "searchable": false, "class": "control"},
            { "data": "ver", "class": "dt-center",
        		"render": function(data, type, row) {
        			if(type == 'display') {
        				return LOGOS[data];
        			} else if (type == 'filter') {
        				return VERSION_FILTERS[data];
        			}else {
        				return data;
        			}
        		}, "responsivePriority": 2 
        	},
            { "data": "name", "class": "dt-center bold-cell", "responsivePriority": 1},
            { "data": "age", "class": "dt-center",
            	"render" : function(data, type, row) {
            		if(type == 'display' || type == 'filter') {
            			return AGES[data];
            		} else {
            			return data;
            		}
            	}
        	},
            { "data": "cost", "class": "dt-center", "responsivePriority": 2 },
            { "data": "time", "class": "dt-center", "responsivePriority": 2 },
            { "data": "for", "class": "dt-center", "responsivePriority": 2 },
            { "data": "", "class": "dt-center", "responsivePriority": 1,
        		"render": function(data, type, row) {
        			var rowID = comparison_encode_technology(row);
        			if(type == 'display') {
        				return formatComparisonButton(rowID);
        			} else {
        				return '';
        			}
        		}, "orderable": false, "searchable": false},
            { "data": "t", "className": "inf", "orderable": false, "searchable": true}],
           "order": [[0, 'asc'], [4, 'asc'], [3, 'asc']],
		   "preDrawCallback": function( settings ) {
				return preDrawGroups(this);
			  },
		   "drawCallback": function ( settings ) {
				drawGroups(this);
			},
			responsive: {
				details: {
					renderer: function ( api, rowIdx, columns ) {
						var row = api.row(rowIdx);
						var d= row.data();
						return formatTechnology(d, columns);
		            },
		            type: 'column',
					target: 'tr'
				},
				breakpoints: TABLE_BREAKPOINTS
			}
	});

	technology_table.on( 'responsive-display', function ( e, datatable, row, showHide, update ) {
	    fixHeadersAsync();
	} );
	technology_table.on( 'responsive-resize', function ( e, datatable, columns ) {
	    fixHeadersAsync();
    });

	$('#technology-stats tbody').on('click', 'td', function () {
	    var tr = $(this).closest('tr');
	    var row = technology_table.row( tr );
		if(tr.hasClass('group')) {
			groupClickCallback("#technology-stats", $(this).text());
			return; //ignore groups for now
		}
	} );

	civilization_table = $('#civilization-stats').dataTable({
		"ajax": "stats/build/"+version+"_civilizations.json"+stats_version,
		"fixedHeader" : {
			"header": false,
			"footer": true,
			"footerOffset": -6
		},
		"initComplete": function (settings, json) {
			setTimeout(function() {
				fixHeadersAsync();
	      	}, 50);

    	},
		"lengthChange": false,
		"paginate": false,
		"destroy": true,
		"columns": [
		 { "data": "name", "render" : function(data, type, row) {
            			return '';
            		},
            		"orderable": false, "searchable": false, "class": "control"},
            { "data": "ver", "class": "dt-center",
        		"render": function(data, type, row) {
        			if(type == 'display') {
        				return LOGOS[data];
        			} else if (type == 'filter') {
        				return VERSION_FILTERS[data];
        			}else {
        				return data;
        			}
        		}, "responsivePriority": 2
        	},
            { "data": "name", "class": "bold-cell", "responsivePriority": 1},
            { "data": "ct", "class": "dt-center", "responsivePriority": 2 },
            { "data": "uu", "class": "dt-center", "responsivePriority": 2, "render":function(data, type, row){
		    let items = data.split(",");
		    let retval = ""
		    for(item of items){
			item = $.trim(item);
			let bracketindex = item.indexOf("(");
			let unit = item;
			let comment = "";
			if( bracketindex > -1 ){
				unit = $.trim(item.substring(0, bracketindex));
				comment = item.substring(bracketindex, item.length);
			}
			retval += "<span class='searchable' onclick=\"dosearch('"+unit+"')\">"+unit+"</span>";
			if(comment != ""){
				retval += " "+comment;
			}
			retval += ", ";
		    }
		    return retval.substring(0, retval.length - 2);
		    
	        } 
            },
	    { "data": "ut", "class": "dt-center", "responsivePriority": 2, "render":function(data, type, row){
		    let items = data.split(",");
		    let retval = ""
		    for(item of items){
			    item = item.replace("<br />", "");
			    item = $.trim(item);
			    let bracketindex = item.indexOf("(");
			    let tech = item;
			    let comment = "";
			    if( bracketindex > -1 ){
				    tech = $.trim(item.substring(0, bracketindex));
				    comment = item.substring(bracketindex, item.length);
			    }
			    retval += "<span class='searchable' onclick=\"dosearch('"+tech+"')\">"+tech+"</span>";
			    if(comment != ""){
				    retval += " "+comment;
			    }
			    retval += ", <br>";
		    }
		    return retval.substring(0, retval.length - 6);
		    
		} 
		    
            },
            { "data": "tb", "class": "dt-center", "responsivePriority": 2 },
            { "data": "tt", "class": "dt-center",
            	"render" : function(data, type, row) {
            		if(type == 'display') {
            			return formatTechtree(data);
            		} else {
            			return '';
            		}
            	}, "responsivePriority": 4, "orderable": false, "searchable": false
        	},
            { "data": "bs", "class": "dt-center", "responsivePriority": 2},
            { "data": "", "class": "dt-center", "responsivePriority": 1,
        		"render": function(data, type, row) {
        			var rowID = comparison_encode_civilization(row);
        			if(type == 'display') {
        				return formatComparisonButton(rowID);
        			} else {
        				return '';
        			}
        		}, "orderable": false, "searchable": false},
            { "data": "t", "className": "inf", "orderable": false, "searchable": true}],
           "order": [[2, 'asc']],
			responsive: {
				details: {
					renderer: function ( api, rowIdx, columns ) {
						var row = api.row(rowIdx);
						var d= row.data();
						return formatCiv(d, columns);
		            },
		            type: 'column',
					target: 'tr'
				},
				breakpoints: TABLE_BREAKPOINTS
			}

	}).api();

	civilization_table.on( 'responsive-display', function ( e, datatable, row, showHide, update ) {
	    fixHeadersAsync();
	} );
	civilization_table.on( 'responsive-resize', function ( e, datatable, columns ) {
	    fixHeadersAsync();
    });

	gathering_table = $('#gathering-stats').DataTable({
		"ajax": "stats/build/"+version+"_gathering.json"+stats_version,
		"fixedHeader" : {
			"header": false,
			"footer": true,
			"footerOffset": -6
		},
		"initComplete": function (settings, json) {
			setTimeout(function() {
				initGroups("#gathering-stats");
				fixHeadersAsync();
	      	}, 50);

    	},
		"lengthChange": false,
		"paginate": false,
		"destroy": true,
		"columns": [
            { "data": "type", "class": "dt-center", "visible": false},
			{ "data": "type", "render" : function(data, type, row) {
            			return '';
            		},
            		"orderable": false, "searchable": false, "class": "control"},
            { "data": "source", "class": "dt-center bold-cell", "responsivePriority": 1},
            { "data": "speed", "class": "dt-center", "responsivePriority": 2},
            { "data": "note", "class": "dt-center", "responsivePriority": 2},
            { "data": "", "class": "dt-center", "responsivePriority": 1,
        		"render": function(data, type, row) {
        			var rowID = comparison_encode_gathering(row);
        			if(type == 'display') {
        				return formatComparisonButton(rowID);
        			} else {
        				return '';
        			}
        		}, "orderable": false, "searchable": false}
            ],
           "order": [[0, 'asc'], [3, 'desc']],
		   "preDrawCallback": function( settings ) {
				return preDrawGroups(this);
			  },
		   "drawCallback": function ( settings ) {
					drawGroups(this);
			},
			responsive: {
				details: {
					renderer: function ( api, rowIdx, columns ) {
						var row = api.row(rowIdx);
						var d= row.data();
						return formatGathering(d, columns);
		            },
		            type: 'column',
					target: 'tr'
				},
				breakpoints: TABLE_BREAKPOINTS
			}
	});

	gathering_table.on( 'responsive-display', function ( e, datatable, row, showHide, update ) {
	    fixHeadersAsync();
	} );
	gathering_table.on( 'responsive-resize', function ( e, datatable, columns ) {
	    fixHeadersAsync();
    });


	$('#gathering-stats tbody').on('click', 'td', function () {
	    var tr = $(this).closest('tr');
		if(tr.hasClass('group')) {
			groupClickCallback("#gathering-stats", $(this).text());
			return;
		}
	 });
}


var ENABLED_SECTIONS = ['units', 'structures', 'techs', 'civs', 'gathers'];
var SECTION_COUNT = ENABLED_SECTIONS.length;

function dosearch(str){
	$("#global-search").val(str);
	update_search();
}

function update_search() {

	var searchstring = $("#global-search").val();
	var empty = true;
	if(unit_table) {
		expandGroups("#unit-stats");
		unit_table.search(searchstring);
		if(unit_table.rows({ search:'applied' }).any() && $.inArray('units', ENABLED_SECTIONS) >= 0) {
			$("#units").show();
			empty = false;
		} else {
			$("#units").hide();
		}
	}
	
	if(structure_table) {
		expandGroups("#structure-stats");
		structure_table.search(searchstring);
		if(structure_table.rows({ search:'applied' }).any() && $.inArray('structures', ENABLED_SECTIONS) >= 0) {
			$("#structures").show();
			empty = false;
		} else {
			$("#structures").hide();
		}
	}
	if(technology_table) {
		expandGroups("#technology-stats");
		technology_table.search(searchstring);
		if(technology_table.rows({ search:'applied' }).any() && $.inArray('techs', ENABLED_SECTIONS) >= 0) {
			$("#techs").show();
			empty = false;
		} else {
			$("#techs").hide();
		}
	}
	if(civilization_table) {
		civilization_table.search(searchstring);
		if(civilization_table.rows({ search:'applied' }).any() && $.inArray('civs', ENABLED_SECTIONS) >= 0) {
			$("#civs").show();
			empty = false;
		} else {
			$("#civs").hide();
		}
	}
	if(gathering_table) {
		expandGroups("#gathering-stats");
		gathering_table.search(searchstring);
		if(gathering_table.rows({ search:'applied' }).any() && $.inArray('gathers', ENABLED_SECTIONS) >= 0) {
			$("#gathers").show();
			empty = false;
		} else {
			$("#gathers").hide();
		}
	}

	if(empty) {
		$("#empty").show();
	} else {
		$("#empty").hide();
	}
	
	redraw();
	fixHeadersAsync();
}


function turnOnAllSections() {
	$("#full-toggles li").addClass("active");
	ENABLED_SECTIONS = ['units', 'structures', 'techs', 'civs', 'gathers'];
	update_header();
	update_search();
	fixColumnsAsync();
}

function toggleSection(element) {
	var elementID = element.id.split('-')[0];
	var enabledIndex = $.inArray(elementID, ENABLED_SECTIONS);
	var scrollto = false;
	if(enabledIndex >= 0 && ENABLED_SECTIONS.length == SECTION_COUNT) {
		ENABLED_SECTIONS = [];
		ENABLED_SECTIONS.push(elementID);
		//scrollto = true;
	}
	else if(enabledIndex >= 0 && ENABLED_SECTIONS.length > 1) //minimum of 1 enabled section
	{
		$("#"+element.id).removeClass("active");
		ENABLED_SECTIONS.splice( enabledIndex, 1 );
	} else {
		ENABLED_SECTIONS.push(elementID);
		scrollto = true;
	}
	
	update_search();
	setTimeout(update_header(), 50);

	if(scrollto) {
		fixColumnsWithIDAsync(elementID);
		$("#"+elementID)[0].scrollIntoView();
	}
}

function update_header() {
	$("#full-toggles li").removeClass("active");
	$.each(ENABLED_SECTIONS, function(index, value){
		$("#"+value+"-toggle").addClass("active");
	});
}

$(document).ready(function() {
	
	updateComparisons();
	$('#compare-clear').click(function (event) {
		event.preventDefault();
  		event.stopImmediatePropagation();
        clear_comparisons();
        updateComparisons();

        $(".comparison").removeClass("btn-warning comparison").addClass("btn-default")
	});


	//if($("#aocversion").length){
	//	initTables($("#aocversion").val());	
	//} else {
		if(typeof Cookies.get("aocversion") === "undefined") {
			Cookies.set("aocversion", 'aoc');
		}
		var aoc_ver = Cookies.get("aocversion");
		$("#aocversion").val(aoc_ver);
		initTables(aoc_ver);
	//}

	$("#aocversion").select2({
	  templateResult: formatVersion,
	  templateSelection: formatVersion,
	  allowClear: false,
	  minimumResultsForSearch: 10
	});

	$("#aocversion").on("change", function(e){
		var aoc_version = $("#aocversion").val();
		Cookies.set("aocversion", aoc_version);
		reload(aoc_version);
	});

	$('#global-search').keypress(function(e) {
      if (e.keyCode == '13') {
         e.preventDefault();
       }
    });

	var searchTimeout;
    $("#global-search").keyup(function() {
		clearTimeout(searchTimeout);
		var searchLength = $("#global-search").val().length;
		var timeout = (searchLength >= SEARCH_TIMEOUT_THRESHOLD || searchLength == 0) ? FAST_SEARCH_TIMEOUT : SLOW_SEARCH_TIMEOUT;
		searchTimeout = setTimeout(function() {
    		update_search();
  		}, timeout);
	});
	
	$('[data-toggle="tooltip"]').tooltipster({
		'position': 'bottom',
		'theme': 'tooltipster-light'
	});
	

	update_header_padding();
});

function update_header_padding() {
	update_header();
	$("#content").css("padding-top", function() {
		return $("#navbar").height();
	});
}

function resize_callback() {
	update_header_padding();
	//fixColumnsAsync();
	fixHeadersAsync();
}

$( window ).resize(function() {
    clearTimeout(resizeId);
    resizeId = setTimeout(resize_callback, 250);

});

/* Comparison stuff */

function comparison_encode_unit(row) {
	return ['u', row['name'], row['age']].join('_');
}

function comparison_encode_structure(row) {
	return ['s', row['name'], row['age']].join('_');
}

function comparison_encode_technology(row) {
	return ['t', row['name'], row['age']].join('_');
}

function comparison_encode_gathering(row) {
	return ['g', row['source']].join('_');
}

function comparison_encode_civilization(row) {
	return ['c', row['name']].join('_');
}

var _gbl_comparables = null;

function set_comparisons(comparables) {
	_gbl_comparables = comparables;
	Cookies.set("compare", JSON.stringify(comparables));
}

function get_comparisons() 
{
	if(_gbl_comparables == null) {
		if(typeof Cookies.get("compare") === "undefined") {
			return [];
		}

		_gbl_comparables = JSON.parse(Cookies.get("compare"));	
	}
	
	return _gbl_comparables;
}

function get_comparison_count() {
	var comparables = get_comparisons();
	return comparables.length;
}

function add_comparison(id) {
	var comparables = get_comparisons();
	if(comparables.length >= MAX_COMPARE_COUNT) {
		return;
	}
	comparables.push(id);
	comparables = $.unique(comparables);
	set_comparisons(comparables);
}

function del_comparison(id) {
	var comparables = get_comparisons();
	var index = $.inArray(id, comparables);
	if(index >= 0) {
		comparables.splice(index, 1);
		set_comparisons(comparables);
	}
}

function clear_comparisons() {
	var comparables = [];
	set_comparisons(comparables);
}

function get_comparison_query() {
	var comparables = get_comparisons();
	return comparables.join(".");
}

function is_compared(id) {
	var comparables = get_comparisons();
	return $.inArray(id, comparables) >= 0;
}
