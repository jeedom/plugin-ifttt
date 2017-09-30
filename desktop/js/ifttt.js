
/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

 $("#table_cmd").delegate(".listCmdInfo", 'click', function () {
    var el = $(this).closest('.cmd').find('.cmdAttr[data-l2key=' + $(this).attr('data-input') + ']');
    jeedom.cmd.getSelectModal({cmd: {type: 'info'}}, function (result) {
        el.atCaret('insert', result.human);
    });
});

/*
 * Fonction pour l'ajout de commande, appellé automatiquement par plugin.template
 */
 function addCmdToTable(_cmd) {
    if (!isset(_cmd)) {
        var _cmd = {configuration: {}};
    }
    if (!isset(_cmd.configuration)) {
        _cmd.configuration = {};
    }
    var tr = '<tr class="cmd" data-cmd_id="' + init(_cmd.id) + '">';
    tr += '<td>';
    tr += '<span class="cmdAttr" data-l1key="id"></span>';
    tr += '</td>';
    tr += '<td>';
    tr += '<input class="cmdAttr form-control input-sm" data-l1key="name" style="width : 140px;" placeholder="{{Nom}}">';
    tr += '</td>';
    tr += '<td>';
    tr += '<span class="type" type="' + init(_cmd.type) + '">' + jeedom.cmd.availableType() + '</span>';
    tr += '<span class="subType" subType="' + init(_cmd.subType) + '"></span>';
    tr += '</td>';
    tr += '<td>';
    tr += '<input class="cmdAttr form-control type input-sm" data-l1key="configuration" data-l2key="event" placeholder="{{Evènement}}" />';		
    tr += '</td>';		
    tr += '<td>';
    tr += '<div class="actionMode">';
    tr += '<div class="input-group">';
    tr += '<input class="cmdAttr form-control type input-sm" data-l1key="configuration" data-l2key="value1" placeholder="{{Valeur 1}}" />';
    tr += '<span class="input-group-btn">';
    tr += ' <a class="btn btn-default btn-sm listCmdInfo btn-default" data-input="value1" ><i class="fa fa-list-alt"></i></a>';
    tr += '</span>';
    tr += '</div>';
    tr += '<div class="input-group">';
    tr += '<input class="cmdAttr form-control type input-sm" data-l1key="configuration" data-l2key="value2" placeholder="{{Valeur 2}}" />';
    tr += '<span class="input-group-btn">';
    tr += ' <a class="btn btn-default btn-sm listCmdInfo btn-default" data-input="value2" ><i class="fa fa-list-alt"></i></a>';
    tr += '</span>';
    tr += '</div>';
    tr += '<div class="input-group">';
    tr += '<input class="cmdAttr form-control type input-sm" data-l1key="configuration" data-l2key="value3" placeholder="{{Valeur 3}}" />';
    tr += '<span class="input-group-btn">';
    tr += ' <a class="btn btn-default btn-sm listCmdInfo btn-default" data-input="value3" ><i class="fa fa-list-alt"></i></a>';
    tr += '</span>';
    tr += '</div>';
    tr += '</div>';
    tr += '</td>';
    tr += '<td>';
    tr += '<span><label class="checkbox-inline"><input type="checkbox" class="cmdAttr checkbox-inline" data-l1key="isVisible" checked/>{{Afficher}}</label><span> ';
    tr += '<span><label class="checkbox-inline"><input type="checkbox" class="cmdAttr checkbox-inline" data-l1key="configuration" data-l2key="interact::allow" />{{Autoriser interaction}}</label><span> ';
    tr += '</td>';
    tr += '<td>';
    if (is_numeric(_cmd.id)) {
        tr += '<a class="btn btn-default btn-xs cmdAction expertModeVisible" data-action="configure"><i class="fa fa-cogs"></i></a> ';
        tr += '<a class="btn btn-default btn-xs cmdAction" data-action="test"><i class="fa fa-rss"></i> {{Tester}}</a>';
    }
    tr += '<i class="fa fa-minus-circle pull-right cmdAction cursor" data-action="remove"></i></td>';
    tr += '</tr>';
    $('#table_cmd tbody').append(tr);
    $('#table_cmd tbody tr:last').setValues(_cmd, '.cmdAttr');
    jeedom.cmd.changeType($('#table_cmd tbody tr:last'), init(_cmd.subType));
}

$('#table_cmd tbody').on('change','.cmd .cmdAttr[data-l1key=subType]',function(){
    var cmd = $(this).closest('.cmd');
    if($(this).value() == 'info'){
        cmd.find('.actionMode').hide();
    }else{
        cmd.find('.actionMode').show();
    }
});

$('#table_cmd tbody').on('change','.cmd .cmdAttr[data-l1key=subType]',function(){
    var cmd = $(this).closest('.cmd');
    if($(this).value() == 'string'){
        cmd.find('.cmdAttr[data-l1key=configuration][data-l2key="interact::allow"]').parent().show();
    }else{
        cmd.find('.cmdAttr[data-l1key=configuration][data-l2key="interact::allow"]').parent().hide();
    }
});
