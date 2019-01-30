<?php

/* itop-portal-base/portal/src/views/bricks/manage/layout-table.html.twig */
class __TwigTemplate_4ffe5513268a096164eacb7ea4f25e4281888c6e49742b09d2c299c897e47bcd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("itop-portal-base/portal/src/views/bricks/manage/layout.html.twig", "itop-portal-base/portal/src/views/bricks/manage/layout-table.html.twig", 3);
        $this->blocks = [
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pMainContentHolder' => [$this, 'block_pMainContentHolder'],
            'pPageLiveScripts' => [$this, 'block_pPageLiveScripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "itop-portal-base/portal/src/views/bricks/manage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "itop-portal-base/portal/src/views/bricks/manage/layout-table.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_pPageBodyClass($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageBodyClass"));

        $this->displayParentBlock("pPageBodyClass", $context, $blocks);
        echo " page_manage_brick";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_pMainContentHolder($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainContentHolder"));

        // line 8
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["aGroupingTabsValues"]) || array_key_exists("aGroupingTabsValues", $context) ? $context["aGroupingTabsValues"] : (function () { throw new Twig_Error_Runtime('Variable "aGroupingTabsValues" does not exist.', 8, $this->source); })())) > 1)) {
            // line 9
            echo "        <ul class=\"nav nav-pills grouping_tabs\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["aGroupingTabsValues"]) || array_key_exists("aGroupingTabsValues", $context) ? $context["aGroupingTabsValues"] : (function () { throw new Twig_Error_Runtime('Variable "aGroupingTabsValues" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["aGroupingTab"]) {
                // line 11
                echo "                <li";
                if (((isset($context["sGroupingTab"]) || array_key_exists("sGroupingTab", $context)) && ((isset($context["sGroupingTab"]) || array_key_exists("sGroupingTab", $context) ? $context["sGroupingTab"] : (function () { throw new Twig_Error_Runtime('Variable "sGroupingTab" does not exist.', 11, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["aGroupingTab"], "value", [])))) {
                    echo " class=\"active\"";
                }
                echo ">
                    <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "url_generator", []), "generate", [0 => "p_manage_brick", 1 => ["sBrickId" => (isset($context["sBrickId"]) || array_key_exists("sBrickId", $context) ? $context["sBrickId"] : (function () { throw new Twig_Error_Runtime('Variable "sBrickId" does not exist.', 12, $this->source); })()), "sDisplayMode" => "default", "sGroupingTab" => twig_get_attribute($this->env, $this->source, $context["aGroupingTab"], "value", [])]], "method"), "html", null, true);
                echo "\"
                       id=\"btn_tab_for_";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aGroupingTab"], "value", []), "html", null, true);
                echo "\">
                        ";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["aGroupingTab"], "label", []);
                echo "
                        ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 15, $this->source); })()), "GetShowTabCounts", [], "method")) {
                    // line 16
                    echo "                            <span class=\"badge\">";
                    echo twig_get_attribute($this->env, $this->source, $context["aGroupingTab"], "count", []);
                    echo "</span>
                        ";
                }
                // line 18
                echo "                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aGroupingTab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
    ";
        }
        // line 23
        echo "    ";
        $context["iTableCount"] = 0;
        // line 24
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["aGroupingAreasData"]) || array_key_exists("aGroupingAreasData", $context) ? $context["aGroupingAreasData"] : (function () { throw new Twig_Error_Runtime('Variable "aGroupingAreasData" does not exist.', 24, $this->source); })())) > 0)) {
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["aGroupingAreasData"]) || array_key_exists("aGroupingAreasData", $context) ? $context["aGroupingAreasData"] : (function () { throw new Twig_Error_Runtime('Variable "aGroupingAreasData" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["aAreaData"]) {
                // line 26
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["aAreaData"], "iItemsCount", []) > 0)) {
                    // line 27
                    echo "                ";
                    $context["iTableCount"] = ((isset($context["iTableCount"]) || array_key_exists("iTableCount", $context) ? $context["iTableCount"] : (function () { throw new Twig_Error_Runtime('Variable "iTableCount" does not exist.', 27, $this->source); })()) + 1);
                    // line 28
                    echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading clearfix\">
                        <h3 class=\"panel-title\" style=\"float: left;\">";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aAreaData"], "sTitle", []), "html", null, true);
                    echo "</h3>
                        ";
                    // line 31
                    if ((isset($context["bCanExport"]) || array_key_exists("bCanExport", $context) ? $context["bCanExport"] : (function () { throw new Twig_Error_Runtime('Variable "bCanExport" does not exist.', 31, $this->source); })())) {
                        // line 32
                        echo "                            <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->source); })()), "url_generator", []), "generate", [0 => "p_manage_brick_excel_export_start", 1 => ["sBrickId" => (isset($context["sBrickId"]) || array_key_exists("sBrickId", $context) ? $context["sBrickId"] : (function () { throw new Twig_Error_Runtime('Variable "sBrickId" does not exist.', 32, $this->source); })()), "sGroupingTab" => (isset($context["sGroupingTab"]) || array_key_exists("sGroupingTab", $context) ? $context["sGroupingTab"] : (function () { throw new Twig_Error_Runtime('Variable "sGroupingTab" does not exist.', 32, $this->source); })()), "sGroupingArea" => twig_get_attribute($this->env, $this->source, $context["aAreaData"], "sId", [])]], "method");
                        echo "\"
                               id=\"btn_export_excel_for_";
                        // line 33
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aAreaData"], "sId", []), "html", null, true);
                        echo "\"
                               data-toggle=\"modal\" data-target=\"#modal-for-all\">
                                <span class=\"fa fa-download fa-lg\" style=\"float: right;\"
                                   data-toggle=\"tooltip\" data-delay=\"300\" data-placement=\"left\"
                                   title=\"";
                        // line 37
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["ExcelExporter:ExportMenu"]), "html", null, true);
                        echo "\"></span>
                            </a>
                        ";
                    }
                    // line 40
                    echo "                    </div>
                    <div class=\"panel-body\">
                        <table id=\"table-";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aAreaData"], "sId", []), "html", null, true);
                    echo "\" class=\"table table-striped table-bordered responsive\" width=\"100%\"></table>
                    </div>
                </div>
            ";
                }
                // line 46
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aAreaData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    ";
        }
        // line 48
        echo "
    ";
        // line 49
        if (((isset($context["iTableCount"]) || array_key_exists("iTableCount", $context) ? $context["iTableCount"] : (function () { throw new Twig_Error_Runtime('Variable "iTableCount" does not exist.', 49, $this->source); })()) == 0)) {
            // line 50
            echo "        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <h3 class=\"text-center\">";
            // line 52
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:Manage:Table:NoData"]), "html", null, true);
            echo "</h3>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_pPageLiveScripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageLiveScripts"));

        // line 59
        echo "    ";
        $this->displayParentBlock("pPageLiveScripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        var sDataLoading = '";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["sDataLoading"]) || array_key_exists("sDataLoading", $context) ? $context["sDataLoading"] : (function () { throw new Twig_Error_Runtime('Variable "sDataLoading" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "';
        // Used for ajax throttling
        var iSearchThrottle = 300;
        var oKeyTimeout;
        var aKeyTimeoutFilteredKeys = [16, 17, 18, 19, 27, 33, 34, 35, 36, 37, 38, 39, 40]; // Shift, Ctrl, Alt, Pause, Esc, Page Up/Down, Home, End, Left/Up/Right/Down arrows

        var columnsProperties = {
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aGroupingAreasData"]) || array_key_exists("aGroupingAreasData", $context) ? $context["aGroupingAreasData"] : (function () { throw new Twig_Error_Runtime('Variable "aGroupingAreasData" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["aAreaData"]) {
            // line 70
            echo "                '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aAreaData"], "sId", []), "html", null, true);
            echo "': ";
            echo json_encode(twig_get_attribute($this->env, $this->source, $context["aAreaData"], "aColumnsDefinition", []));
            echo ",
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aAreaData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        };
        var rawData = {
            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aGroupingAreasData"]) || array_key_exists("aGroupingAreasData", $context) ? $context["aGroupingAreasData"] : (function () { throw new Twig_Error_Runtime('Variable "aGroupingAreasData" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["aAreaData"]) {
            // line 75
            echo "                '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aAreaData"], "sId", []), "html", null, true);
            echo "': ";
            echo json_encode(twig_get_attribute($this->env, $this->source, $context["aAreaData"], "aItems", []));
            echo ",
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aAreaData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        };

        // Show a loader inside the table
        var showTableLoader = function (oElem) {
            oElem.children('tbody').html('<tr><td class=\"datatables_overlay\" colspan=\"100\">' + \$('#page_overlay').html() + '</td></tr>');
        };
        // Columns definition for the table from the columnsProperties
        var getColumnsDefinition = function (tableName) {
            var tableProperties = columnsProperties[tableName];

            if (tableProperties === undefined && window.console) {
                console.log('Could not retrieve columns properties for table \"' + tableName + '\"');
                return false;
            }
            if (rawData[tableName] === undefined && window.console) {
                console.log('Could not retrieve data for table \"' + tableName + '\"');
                return false;
            }

            var columnsDefinition = [];

            for (key in tableProperties) {
                // Regular attribute columns
                if (key !== '_ui_extensions') {
                    columnsDefinition.push({
                        \"width\": \"auto\",
                        \"searchable\": true,
                        \"sortable\": (sDataLoading === '";
        // line 104
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\AbstractBrick::ENUM_DATA_LOADING_FULL"), "html", null, true);
        echo "'),
                        \"title\": tableProperties[key].title,
                        \"defaultContent\": \"\",
                        \"type\": \"html\",
                        \"data\": \"attributes.\" + key + \".att_code\",
                        \"render\": {
                        \t_: function (att_code, type, row) {
\t\t\t\t\t\t\t\tvar cellElem;
\t\t\t\t\t\t\t\tvar itemActions;
\t\t\t\t\t\t\t\tvar itemPrimarayAction;

\t\t\t\t\t\t\t\t// Preparing action on the cell
\t\t\t\t\t\t\t\t// Note : For now we will use only one action, the secondary actions are therefore not implemented. Only the data structure is done.
\t\t\t\t\t\t\t\titemActions = row.attributes[att_code].actions;

\t\t\t\t\t\t\t\t// Preparing the cell data
\t\t\t\t\t\t\t\tcellElem = (itemActions.length > 0) ? \$('<a></a>') : \$('<span></span>');
\t\t\t\t\t\t\t\tcellElem.html(row.attributes[att_code].value);
\t\t\t\t\t\t\t\t// Building actions
\t\t\t\t\t\t\t\tif (itemActions.length > 0) {
\t\t\t\t\t\t\t\t\t// - Primary action
\t\t\t\t\t\t\t\t\titemPrimaryAction = itemActions[0];
\t\t\t\t\t\t\t\t\tswitch (itemPrimaryAction.type) {
\t\t\t\t\t\t\t\t\t\tcase '";
        // line 127
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\ManageBrick::ENUM_ACTION_VIEW"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\t\t\turl = '";
        // line 128
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 128, $this->source); })()), "url_generator", []), "generate", [0 => "p_object_view", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method");
        echo "'.replace(/-objectClass-/, itemPrimaryAction.class).replace(/-objectId-/, itemPrimaryAction.id);
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase '";
        // line 130
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\ManageBrick::ENUM_ACTION_EDIT"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\t\t\turl = '";
        // line 131
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 131, $this->source); })()), "url_generator", []), "generate", [0 => "p_object_edit", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method");
        echo "'.replace(/-objectClass-/, itemPrimaryAction.class).replace(/-objectId-/, itemPrimaryAction.id);
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\t\t\t\turl = '#';
\t\t\t\t\t\t\t\t\t\t\t//console.log('Action \"'+itemPrimaryAction+'\" not implemented');
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tSetActionUrl(cellElem, url);
\t\t\t\t\t\t\t\t\tSetActionOpeningTarget(cellElem, itemPrimaryAction.opening_target);

\t\t\t\t\t\t\t\t\t// - Secondary actions
\t\t\t\t\t\t\t\t\t// Not done for now, only the data structure is ready in case we need it later
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\treturn cellElem.prop('outerHTML');
\t\t\t\t\t\t\t},
\t                        sort: function (att_code, type, row) {
                        \t\treturn row.attributes[att_code].sort_value;
\t\t\t\t\t\t\t},
\t\t\t\t\t\t},
                    });
                }
                // UI extensions buttons
                else {
                    columnsDefinition.push({
                        \"width\": \"auto\",
                        \"searchable\": false,
                        \"sortable\": (sDataLoading === '";
        // line 158
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\AbstractBrick::ENUM_DATA_LOADING_FULL"), "html", null, true);
        echo "'),
                        \"title\": tableProperties[key].title,
                        \"defaultContent\": \"\",
                        \"type\": \"html\",
                        \"data\": \"attributes.\" + key + \".att_code\",
                        \"render\": function (att_code, type, row) {
                            var cellElem = \$('<div class=\"group-actions-wrapper\"></div>');
                            var actionsCount = row.actions.length;

                            // Adding menu wrapper in case there are several actions
                            var actionsElem = \$('<div></div>');
                            actionsElem.appendTo(cellElem);
                            if (actionsCount > 1) {
                                actionsElem.addClass('group-actions pull-right');

                                // Adding hamburger icon toggler
                                actionsElem.append(
                                    \$('<a class=\"glyphicon glyphicon-menu-hamburger\" data-toggle=\"collapse\" data-target=\"#item-actions-menu-' + row.id + '\"></a>')
                                );

                                // Adding sub menu
                                var actionsSSMenuElem = \$('<div id=\"item-actions-menu-' + row.id + '\" class=\"item-action-wrapper panel panel-default\"></div>')
                                    .appendTo(actionsElem);
                                var actionsSSMenuContainerElem = \$('<div class=\"panel-body\"></div>')
                                    .appendTo(actionsSSMenuElem);
                            }

                            // Adding actions
                            for (var i in row.actions) {
                                var actionDef = row.actions[i];
                                var actionElem = \$('<a></a>')
                                    .attr('href', actionDef.url)
                                    .append(\$('<span></span>').html(actionDef.label));

                                // Adding css classes to action
                                for (var j in actionDef.css_classes) {
                                    actionElem.addClass(actionDef.css_classes[j]);
                                }

                                // Performing specific treatment regarding the action type
                                if (actionDef.type === 'button') {
                                    // External files
                                    // Note: Not supported yet

                                    // On click callback
                                    actionElem.attr('onclick', actionDef.onclick);
                                }
                                else if (actionDef.type === 'link') {
                                    actionElem.attr('target', actionDef.target);
                                }

                                if (actionsCount > 1) {
                                    actionsSSMenuContainerElem.append(\$('<p></p>').append(actionElem));
                                }
                                else {
                                    actionsElem.append(actionElem);
                                }
                            }

                            return cellElem.prop('outerHTML');
                        }
                    });
                }
            }

            return columnsDefinition;
        };

        \$(document).ready(function () {
            ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aGroupingAreasData"]) || array_key_exists("aGroupingAreasData", $context) ? $context["aGroupingAreasData"] : (function () { throw new Twig_Error_Runtime('Variable "aGroupingAreasData" does not exist.', 227, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["aAreaData"]) {
            // line 228
            echo "                ";
            $context["sAreaId"] = twig_get_attribute($this->env, $this->source, $context["aAreaData"], "sId", []);
            // line 229
            echo "
                showTableLoader(\$('#table-";
            // line 230
            echo twig_escape_filter($this->env, (isset($context["sAreaId"]) || array_key_exists("sAreaId", $context) ? $context["sAreaId"] : (function () { throw new Twig_Error_Runtime('Variable "sAreaId" does not exist.', 230, $this->source); })()), "html", null, true);
            echo "'));
                var oTable";
            // line 231
            echo twig_escape_filter($this->env, (isset($context["sAreaId"]) || array_key_exists("sAreaId", $context) ? $context["sAreaId"] : (function () { throw new Twig_Error_Runtime('Variable "sAreaId" does not exist.', 231, $this->source); })()), "html", null, true);
            echo " = \$('#table-";
            echo twig_escape_filter($this->env, (isset($context["sAreaId"]) || array_key_exists("sAreaId", $context) ? $context["sAreaId"] : (function () { throw new Twig_Error_Runtime('Variable "sAreaId" does not exist.', 231, $this->source); })()), "html", null, true);
            echo "').DataTable({
                    \"language\": {
                        \"processing\": \"";
            // line 233
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Processing"]), "html", null, true);
            echo "\",
                        \"search\": \"";
            // line 234
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Search"]), "html", null, true);
            echo "\",
                        \"lengthMenu\": \"";
            // line 235
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:LengthMenu"]), "html", null, true);
            echo "\",
                        \"zeroRecords\": \"";
            // line 236
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:ZeroRecords"]), "html", null, true);
            echo "\",
                        \"info\": \"";
            // line 237
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Info"]), "html", null, true);
            echo "\",
                        \"infoEmpty\": \"";
            // line 238
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:InfoEmpty"]), "html", null, true);
            echo "\",
                        \"infoFiltered\": \"(";
            // line 239
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:InfoFiltered"]), "html", null, true);
            echo ")\",
                        \"emptyTable\": \"";
            // line 240
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:EmptyTable"]), "html", null, true);
            echo "\",
                        \"paginate\": {
                            \"first\": \"";
            // line 242
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:First"]), "html", null, true);
            echo "\",
                            \"previous\": \"";
            // line 243
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:Previous"]), "html", null, true);
            echo "\",
                            \"next\": \"";
            // line 244
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:Next"]), "html", null, true);
            echo "\",
                            \"last\": \"";
            // line 245
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:Last"]), "html", null, true);
            echo "\"
                        },
                        \"aria\": {
                            \"sortAscending\": \": ";
            // line 248
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Sort:Ascending"]), "html", null, true);
            echo "\",
                            \"sortDescending\": \": ";
            // line 249
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Sort:Descending"]), "html", null, true);
            echo "\"
                        }
                    },
                    \"lengthMenu\": [[10, 20, 50, -1], [10, 20, 50, \"";
            // line 252
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:DisplayLength:All"]), "html", null, true);
            echo "\"]],
                    \"displayLength\": ";
            // line 253
            echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\ManageBrick::DEFAULT_LIST_LENGTH"), "html", null, true);
            echo ",
                    \"dom\": '<\"row\"<\"col-sm-6\"l><\"col-sm-6\"<f><\"visible-xs\"p>>>t<\"row\"<\"col-sm-6\"i><\"col-sm-6\"p>>',
                    \"columns\": getColumnsDefinition('";
            // line 255
            echo twig_escape_filter($this->env, (isset($context["sAreaId"]) || array_key_exists("sAreaId", $context) ? $context["sAreaId"] : (function () { throw new Twig_Error_Runtime('Variable "sAreaId" does not exist.', 255, $this->source); })()), "html", null, true);
            echo "'),
                    \"order\": [],
                    \"rowCallback\": function (oRow, oData) {
                        if (oData.highlight_class !== undefined) {
                            var sHighlightClass = oData.highlight_class;
                            var sBSHiglightClass = '';

                            // Adding classic iTop class
                            \$(oRow).addClass(sHighlightClass);
                            // Adding mapped BS class
                            if (sHighlightClass === '";
            // line 265
            echo twig_escape_filter($this->env, twig_constant("HILIGHT_CLASS_CRITICAL"), "html", null, true);
            echo "') {
                                sBSHiglightClass = 'danger';
                            }
                            else if (sHighlightClass === '";
            // line 268
            echo twig_escape_filter($this->env, twig_constant("HILIGHT_CLASS_WARNING"), "html", null, true);
            echo "') {
                                sBSHiglightClass = 'warning';
                            }
                            else if (sHighlightClass === '";
            // line 271
            echo twig_escape_filter($this->env, twig_constant("HILIGHT_CLASS_OK"), "html", null, true);
            echo "') {
                                sBSHiglightClass = 'success';
                            }
                            \$(oRow).addClass(sBSHiglightClass);
                        }
                    },
                    \"drawCallback\": function (settings) {
                        // Hiding pagination if only one page
                        if (\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2) {
                            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
                        }
                        else {
                            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
                        }
                    },
                    ";
            // line 286
            if (((isset($context["sDataLoading"]) || array_key_exists("sDataLoading", $context) ? $context["sDataLoading"] : (function () { throw new Twig_Error_Runtime('Variable "sDataLoading" does not exist.', 286, $this->source); })()) == twig_constant("Combodo\\iTop\\Portal\\Brick\\AbstractBrick::ENUM_DATA_LOADING_FULL"))) {
                // line 287
                echo "                        \"data\": rawData['";
                echo twig_escape_filter($this->env, (isset($context["sAreaId"]) || array_key_exists("sAreaId", $context) ? $context["sAreaId"] : (function () { throw new Twig_Error_Runtime('Variable "sAreaId" does not exist.', 287, $this->source); })()), "html", null, true);
                echo "'],
                    ";
            } else {
                // line 289
                echo "                    \"processing\": true,
                    \"serverSide\": true,
                    ";
                // line 292
                echo "                    \"ajax\": {
                        \"url\": \"";
                // line 293
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 293, $this->source); })()), "url_generator", []), "generate", [0 => "p_manage_brick_lazy", 1 => ["sBrickId" => (isset($context["sBrickId"]) || array_key_exists("sBrickId", $context) ? $context["sBrickId"] : (function () { throw new Twig_Error_Runtime('Variable "sBrickId" does not exist.', 293, $this->source); })()), "sGroupingTab" => (isset($context["sGroupingTab"]) || array_key_exists("sGroupingTab", $context) ? $context["sGroupingTab"] : (function () { throw new Twig_Error_Runtime('Variable "sGroupingTab" does not exist.', 293, $this->source); })()), "sGroupingArea" => (isset($context["sAreaId"]) || array_key_exists("sAreaId", $context) ? $context["sAreaId"] : (function () { throw new Twig_Error_Runtime('Variable "sAreaId" does not exist.', 293, $this->source); })())]], "method");
                echo "\",
                        \"data\": function (d) {
                            d.iPageNumber = Math.floor(d.start / d.length) + 1;
                            d.iListLength = d.length;
                            d.columns = null;
                            d.orders = null;

                            ";
                // line 300
                if ( !(null === (isset($context["sSearchValue"]) || array_key_exists("sSearchValue", $context) ? $context["sSearchValue"] : (function () { throw new Twig_Error_Runtime('Variable "sSearchValue" does not exist.', 300, $this->source); })()))) {
                    // line 301
                    echo "                            // Sets default filter value
                            if (d.draw === 1) {
                                \$('#table-";
                    // line 303
                    echo twig_escape_filter($this->env, (isset($context["sAreaId"]) || array_key_exists("sAreaId", $context) ? $context["sAreaId"] : (function () { throw new Twig_Error_Runtime('Variable "sAreaId" does not exist.', 303, $this->source); })()), "html", null, true);
                    echo "_filter input').val('";
                    echo twig_escape_filter($this->env, (isset($context["sSearchValue"]) || array_key_exists("sSearchValue", $context) ? $context["sSearchValue"] : (function () { throw new Twig_Error_Runtime('Variable "sSearchValue" does not exist.', 303, $this->source); })()), "html", null, true);
                    echo "');
                                d.search.value = \$('#table-";
                    // line 304
                    echo twig_escape_filter($this->env, (isset($context["sAreaId"]) || array_key_exists("sAreaId", $context) ? $context["sAreaId"] : (function () { throw new Twig_Error_Runtime('Variable "sAreaId" does not exist.', 304, $this->source); })()), "html", null, true);
                    echo "_filter input').val();
                            }
                            ";
                }
                // line 307
                echo "                            if (d.search.value) {
                                d.sSearchValue = d.search.value;
                            }
                        }
                    }
                    ";
            }
            // line 313
            echo "                });

                // Overrides filter input to apply throttle. Otherwise, an ajax request is send each time a key is pressed
                // Also removes accents from search string
                // Note : The '.off()' call is to unbind event from DataTables that where triggered before we could intercept anything
                \$('#table-";
            // line 318
            echo twig_escape_filter($this->env, (isset($context["sAreaId"]) || array_key_exists("sAreaId", $context) ? $context["sAreaId"] : (function () { throw new Twig_Error_Runtime('Variable "sAreaId" does not exist.', 318, $this->source); })()), "html", null, true);
            echo "_filter input').off().on('keyup', function () {
                    var me = this;

                    clearTimeout(oKeyTimeout);
                    oKeyTimeout = setTimeout(function () {
                        oTable";
            // line 323
            echo twig_escape_filter($this->env, (isset($context["sAreaId"]) || array_key_exists("sAreaId", $context) ? $context["sAreaId"] : (function () { throw new Twig_Error_Runtime('Variable "sAreaId" does not exist.', 323, $this->source); })()), "html", null, true);
            echo ".search(me.value.latinise()).draw();
                    }, iSearchThrottle);
                });// Shows a loader in the table when processing
                \$('#table-";
            // line 326
            echo twig_escape_filter($this->env, (isset($context["sAreaId"]) || array_key_exists("sAreaId", $context) ? $context["sAreaId"] : (function () { throw new Twig_Error_Runtime('Variable "sAreaId" does not exist.', 326, $this->source); })()), "html", null, true);
            echo "').on('processing.dt', function (event, settings, processing) {
                if (processing === true) {
                    showTableLoader(\$(this));
                }
            });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aAreaData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 332
        echo "
            // Enable tooltips
\t\t\t\$(function () {
\t\t\t\t\$('[data-toggle=\"tooltip\"]').tooltip()
\t\t\t});

            // Auto collapse item actions popup
            \$('body').click(function () {
                \$('table .item-action-wrapper.collapse.in').collapse('hide');
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/bricks/manage/layout-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  639 => 332,  627 => 326,  621 => 323,  613 => 318,  606 => 313,  598 => 307,  592 => 304,  586 => 303,  582 => 301,  580 => 300,  570 => 293,  567 => 292,  563 => 289,  557 => 287,  555 => 286,  537 => 271,  531 => 268,  525 => 265,  512 => 255,  507 => 253,  503 => 252,  497 => 249,  493 => 248,  487 => 245,  483 => 244,  479 => 243,  475 => 242,  470 => 240,  466 => 239,  462 => 238,  458 => 237,  454 => 236,  450 => 235,  446 => 234,  442 => 233,  435 => 231,  431 => 230,  428 => 229,  425 => 228,  421 => 227,  349 => 158,  319 => 131,  315 => 130,  310 => 128,  306 => 127,  280 => 104,  251 => 77,  240 => 75,  236 => 74,  232 => 72,  221 => 70,  217 => 69,  207 => 62,  200 => 59,  194 => 58,  182 => 52,  178 => 50,  176 => 49,  173 => 48,  170 => 47,  164 => 46,  157 => 42,  153 => 40,  147 => 37,  140 => 33,  135 => 32,  133 => 31,  129 => 30,  125 => 28,  122 => 27,  119 => 26,  114 => 25,  111 => 24,  108 => 23,  104 => 21,  96 => 18,  90 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  69 => 11,  65 => 10,  62 => 9,  59 => 8,  53 => 7,  40 => 5,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# itop-portal-base/portal/src/views/bricks/manage/layout-table.html.twig #}
{# Manage brick base layout #}
{% extends 'itop-portal-base/portal/src/views/bricks/manage/layout.html.twig' %}

{% block pPageBodyClass %}{{ parent() }} page_manage_brick{% endblock %}

{% block pMainContentHolder %}
    {% if aGroupingTabsValues|length > 1 %}
        <ul class=\"nav nav-pills grouping_tabs\">
            {% for aGroupingTab in aGroupingTabsValues %}
                <li{% if sGroupingTab is defined and sGroupingTab == aGroupingTab.value %} class=\"active\"{% endif %}>
                    <a href=\"{{ app.url_generator.generate('p_manage_brick', {'sBrickId': sBrickId, 'sDisplayMode': 'default', 'sGroupingTab': aGroupingTab.value}) }}\"
                       id=\"btn_tab_for_{{ aGroupingTab.value }}\">
                        {{ aGroupingTab.label|raw }}
                        {% if oBrick.GetShowTabCounts() %}
                            <span class=\"badge\">{{ aGroupingTab.count|raw }}</span>
                        {% endif %}
                    </a>
                </li>
            {% endfor %}
        </ul>
    {% endif %}
    {% set iTableCount = 0 %}
    {% if aGroupingAreasData|length > 0 %}
        {% for aAreaData in aGroupingAreasData %}
            {% if aAreaData.iItemsCount > 0 %}
                {% set iTableCount = iTableCount + 1 %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading clearfix\">
                        <h3 class=\"panel-title\" style=\"float: left;\">{{ aAreaData.sTitle }}</h3>
                        {% if bCanExport %}
                            <a href=\"{{ app.url_generator.generate('p_manage_brick_excel_export_start', {'sBrickId': sBrickId, 'sGroupingTab': sGroupingTab, 'sGroupingArea': aAreaData.sId})|raw }}\"
                               id=\"btn_export_excel_for_{{ aAreaData.sId }}\"
                               data-toggle=\"modal\" data-target=\"#modal-for-all\">
                                <span class=\"fa fa-download fa-lg\" style=\"float: right;\"
                                   data-toggle=\"tooltip\" data-delay=\"300\" data-placement=\"left\"
                                   title=\"{{ 'ExcelExporter:ExportMenu'|dict_s }}\"></span>
                            </a>
                        {% endif %}
                    </div>
                    <div class=\"panel-body\">
                        <table id=\"table-{{ aAreaData.sId }}\" class=\"table table-striped table-bordered responsive\" width=\"100%\"></table>
                    </div>
                </div>
            {% endif %}
        {% endfor %}
    {% endif %}

    {% if iTableCount == 0 %}
        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <h3 class=\"text-center\">{{ 'Brick:Portal:Manage:Table:NoData'|dict_s }}</h3>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block pPageLiveScripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        var sDataLoading = '{{ sDataLoading }}';
        // Used for ajax throttling
        var iSearchThrottle = 300;
        var oKeyTimeout;
        var aKeyTimeoutFilteredKeys = [16, 17, 18, 19, 27, 33, 34, 35, 36, 37, 38, 39, 40]; // Shift, Ctrl, Alt, Pause, Esc, Page Up/Down, Home, End, Left/Up/Right/Down arrows

        var columnsProperties = {
            {% for aAreaData in aGroupingAreasData %}
                '{{ aAreaData.sId }}': {{ aAreaData.aColumnsDefinition|json_encode()|raw }},
            {% endfor %}
        };
        var rawData = {
            {% for aAreaData in aGroupingAreasData %}
                '{{ aAreaData.sId }}': {{ aAreaData.aItems|json_encode()|raw }},
            {% endfor %}
        };

        // Show a loader inside the table
        var showTableLoader = function (oElem) {
            oElem.children('tbody').html('<tr><td class=\"datatables_overlay\" colspan=\"100\">' + \$('#page_overlay').html() + '</td></tr>');
        };
        // Columns definition for the table from the columnsProperties
        var getColumnsDefinition = function (tableName) {
            var tableProperties = columnsProperties[tableName];

            if (tableProperties === undefined && window.console) {
                console.log('Could not retrieve columns properties for table \"' + tableName + '\"');
                return false;
            }
            if (rawData[tableName] === undefined && window.console) {
                console.log('Could not retrieve data for table \"' + tableName + '\"');
                return false;
            }

            var columnsDefinition = [];

            for (key in tableProperties) {
                // Regular attribute columns
                if (key !== '_ui_extensions') {
                    columnsDefinition.push({
                        \"width\": \"auto\",
                        \"searchable\": true,
                        \"sortable\": (sDataLoading === '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\AbstractBrick::ENUM_DATA_LOADING_FULL') }}'),
                        \"title\": tableProperties[key].title,
                        \"defaultContent\": \"\",
                        \"type\": \"html\",
                        \"data\": \"attributes.\" + key + \".att_code\",
                        \"render\": {
                        \t_: function (att_code, type, row) {
\t\t\t\t\t\t\t\tvar cellElem;
\t\t\t\t\t\t\t\tvar itemActions;
\t\t\t\t\t\t\t\tvar itemPrimarayAction;

\t\t\t\t\t\t\t\t// Preparing action on the cell
\t\t\t\t\t\t\t\t// Note : For now we will use only one action, the secondary actions are therefore not implemented. Only the data structure is done.
\t\t\t\t\t\t\t\titemActions = row.attributes[att_code].actions;

\t\t\t\t\t\t\t\t// Preparing the cell data
\t\t\t\t\t\t\t\tcellElem = (itemActions.length > 0) ? \$('<a></a>') : \$('<span></span>');
\t\t\t\t\t\t\t\tcellElem.html(row.attributes[att_code].value);
\t\t\t\t\t\t\t\t// Building actions
\t\t\t\t\t\t\t\tif (itemActions.length > 0) {
\t\t\t\t\t\t\t\t\t// - Primary action
\t\t\t\t\t\t\t\t\titemPrimaryAction = itemActions[0];
\t\t\t\t\t\t\t\t\tswitch (itemPrimaryAction.type) {
\t\t\t\t\t\t\t\t\t\tcase '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\ManageBrick::ENUM_ACTION_VIEW') }}':
\t\t\t\t\t\t\t\t\t\t\turl = '{{ app.url_generator.generate('p_object_view', {'sObjectClass': '-objectClass-', 'sObjectId': '-objectId-'})|raw }}'.replace(/-objectClass-/, itemPrimaryAction.class).replace(/-objectId-/, itemPrimaryAction.id);
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\ManageBrick::ENUM_ACTION_EDIT') }}':
\t\t\t\t\t\t\t\t\t\t\turl = '{{ app.url_generator.generate('p_object_edit', {'sObjectClass': '-objectClass-', 'sObjectId': '-objectId-'})|raw }}'.replace(/-objectClass-/, itemPrimaryAction.class).replace(/-objectId-/, itemPrimaryAction.id);
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\t\t\t\turl = '#';
\t\t\t\t\t\t\t\t\t\t\t//console.log('Action \"'+itemPrimaryAction+'\" not implemented');
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tSetActionUrl(cellElem, url);
\t\t\t\t\t\t\t\t\tSetActionOpeningTarget(cellElem, itemPrimaryAction.opening_target);

\t\t\t\t\t\t\t\t\t// - Secondary actions
\t\t\t\t\t\t\t\t\t// Not done for now, only the data structure is ready in case we need it later
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\treturn cellElem.prop('outerHTML');
\t\t\t\t\t\t\t},
\t                        sort: function (att_code, type, row) {
                        \t\treturn row.attributes[att_code].sort_value;
\t\t\t\t\t\t\t},
\t\t\t\t\t\t},
                    });
                }
                // UI extensions buttons
                else {
                    columnsDefinition.push({
                        \"width\": \"auto\",
                        \"searchable\": false,
                        \"sortable\": (sDataLoading === '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\AbstractBrick::ENUM_DATA_LOADING_FULL') }}'),
                        \"title\": tableProperties[key].title,
                        \"defaultContent\": \"\",
                        \"type\": \"html\",
                        \"data\": \"attributes.\" + key + \".att_code\",
                        \"render\": function (att_code, type, row) {
                            var cellElem = \$('<div class=\"group-actions-wrapper\"></div>');
                            var actionsCount = row.actions.length;

                            // Adding menu wrapper in case there are several actions
                            var actionsElem = \$('<div></div>');
                            actionsElem.appendTo(cellElem);
                            if (actionsCount > 1) {
                                actionsElem.addClass('group-actions pull-right');

                                // Adding hamburger icon toggler
                                actionsElem.append(
                                    \$('<a class=\"glyphicon glyphicon-menu-hamburger\" data-toggle=\"collapse\" data-target=\"#item-actions-menu-' + row.id + '\"></a>')
                                );

                                // Adding sub menu
                                var actionsSSMenuElem = \$('<div id=\"item-actions-menu-' + row.id + '\" class=\"item-action-wrapper panel panel-default\"></div>')
                                    .appendTo(actionsElem);
                                var actionsSSMenuContainerElem = \$('<div class=\"panel-body\"></div>')
                                    .appendTo(actionsSSMenuElem);
                            }

                            // Adding actions
                            for (var i in row.actions) {
                                var actionDef = row.actions[i];
                                var actionElem = \$('<a></a>')
                                    .attr('href', actionDef.url)
                                    .append(\$('<span></span>').html(actionDef.label));

                                // Adding css classes to action
                                for (var j in actionDef.css_classes) {
                                    actionElem.addClass(actionDef.css_classes[j]);
                                }

                                // Performing specific treatment regarding the action type
                                if (actionDef.type === 'button') {
                                    // External files
                                    // Note: Not supported yet

                                    // On click callback
                                    actionElem.attr('onclick', actionDef.onclick);
                                }
                                else if (actionDef.type === 'link') {
                                    actionElem.attr('target', actionDef.target);
                                }

                                if (actionsCount > 1) {
                                    actionsSSMenuContainerElem.append(\$('<p></p>').append(actionElem));
                                }
                                else {
                                    actionsElem.append(actionElem);
                                }
                            }

                            return cellElem.prop('outerHTML');
                        }
                    });
                }
            }

            return columnsDefinition;
        };

        \$(document).ready(function () {
            {% for aAreaData in aGroupingAreasData %}
                {% set sAreaId = aAreaData.sId %}

                showTableLoader(\$('#table-{{ sAreaId }}'));
                var oTable{{ sAreaId }} = \$('#table-{{ sAreaId }}').DataTable({
                    \"language\": {
                        \"processing\": \"{{ 'Portal:Datatables:Language:Processing'|dict_s }}\",
                        \"search\": \"{{ 'Portal:Datatables:Language:Search'|dict_s }}\",
                        \"lengthMenu\": \"{{ 'Portal:Datatables:Language:LengthMenu'|dict_s }}\",
                        \"zeroRecords\": \"{{ 'Portal:Datatables:Language:ZeroRecords'|dict_s }}\",
                        \"info\": \"{{ 'Portal:Datatables:Language:Info'|dict_s }}\",
                        \"infoEmpty\": \"{{ 'Portal:Datatables:Language:InfoEmpty'|dict_s }}\",
                        \"infoFiltered\": \"({{ 'Portal:Datatables:Language:InfoFiltered'|dict_s }})\",
                        \"emptyTable\": \"{{ 'Portal:Datatables:Language:EmptyTable'|dict_s }}\",
                        \"paginate\": {
                            \"first\": \"{{ 'Portal:Datatables:Language:Paginate:First'|dict_s }}\",
                            \"previous\": \"{{ 'Portal:Datatables:Language:Paginate:Previous'|dict_s }}\",
                            \"next\": \"{{ 'Portal:Datatables:Language:Paginate:Next'|dict_s }}\",
                            \"last\": \"{{ 'Portal:Datatables:Language:Paginate:Last'|dict_s }}\"
                        },
                        \"aria\": {
                            \"sortAscending\": \": {{ 'Portal:Datatables:Language:Sort:Ascending'|dict_s }}\",
                            \"sortDescending\": \": {{ 'Portal:Datatables:Language:Sort:Descending'|dict_s }}\"
                        }
                    },
                    \"lengthMenu\": [[10, 20, 50, -1], [10, 20, 50, \"{{ 'Portal:Datatables:Language:DisplayLength:All'|dict_s }}\"]],
                    \"displayLength\": {{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\ManageBrick::DEFAULT_LIST_LENGTH') }},
                    \"dom\": '<\"row\"<\"col-sm-6\"l><\"col-sm-6\"<f><\"visible-xs\"p>>>t<\"row\"<\"col-sm-6\"i><\"col-sm-6\"p>>',
                    \"columns\": getColumnsDefinition('{{ sAreaId }}'),
                    \"order\": [],
                    \"rowCallback\": function (oRow, oData) {
                        if (oData.highlight_class !== undefined) {
                            var sHighlightClass = oData.highlight_class;
                            var sBSHiglightClass = '';

                            // Adding classic iTop class
                            \$(oRow).addClass(sHighlightClass);
                            // Adding mapped BS class
                            if (sHighlightClass === '{{ constant('HILIGHT_CLASS_CRITICAL') }}') {
                                sBSHiglightClass = 'danger';
                            }
                            else if (sHighlightClass === '{{ constant('HILIGHT_CLASS_WARNING') }}') {
                                sBSHiglightClass = 'warning';
                            }
                            else if (sHighlightClass === '{{ constant('HILIGHT_CLASS_OK') }}') {
                                sBSHiglightClass = 'success';
                            }
                            \$(oRow).addClass(sBSHiglightClass);
                        }
                    },
                    \"drawCallback\": function (settings) {
                        // Hiding pagination if only one page
                        if (\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2) {
                            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
                        }
                        else {
                            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
                        }
                    },
                    {% if sDataLoading == constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\AbstractBrick::ENUM_DATA_LOADING_FULL') %}
                        \"data\": rawData['{{ sAreaId }}'],
                    {% else %}
                    \"processing\": true,
                    \"serverSide\": true,
                    {#\"searchDelay\": 1000, // can be used to increase time between server calls when typing search query#}
                    \"ajax\": {
                        \"url\": \"{{ app.url_generator.generate('p_manage_brick_lazy', {'sBrickId': sBrickId, 'sGroupingTab': sGroupingTab, 'sGroupingArea': sAreaId})|raw }}\",
                        \"data\": function (d) {
                            d.iPageNumber = Math.floor(d.start / d.length) + 1;
                            d.iListLength = d.length;
                            d.columns = null;
                            d.orders = null;

                            {% if sSearchValue is not null %}
                            // Sets default filter value
                            if (d.draw === 1) {
                                \$('#table-{{ sAreaId }}_filter input').val('{{ sSearchValue }}');
                                d.search.value = \$('#table-{{ sAreaId }}_filter input').val();
                            }
                            {% endif %}
                            if (d.search.value) {
                                d.sSearchValue = d.search.value;
                            }
                        }
                    }
                    {% endif %}
                });

                // Overrides filter input to apply throttle. Otherwise, an ajax request is send each time a key is pressed
                // Also removes accents from search string
                // Note : The '.off()' call is to unbind event from DataTables that where triggered before we could intercept anything
                \$('#table-{{ sAreaId }}_filter input').off().on('keyup', function () {
                    var me = this;

                    clearTimeout(oKeyTimeout);
                    oKeyTimeout = setTimeout(function () {
                        oTable{{ sAreaId }}.search(me.value.latinise()).draw();
                    }, iSearchThrottle);
                });// Shows a loader in the table when processing
                \$('#table-{{ sAreaId }}').on('processing.dt', function (event, settings, processing) {
                if (processing === true) {
                    showTableLoader(\$(this));
                }
            });
            {% endfor %}

            // Enable tooltips
\t\t\t\$(function () {
\t\t\t\t\$('[data-toggle=\"tooltip\"]').tooltip()
\t\t\t});

            // Auto collapse item actions popup
            \$('body').click(function () {
                \$('table .item-action-wrapper.collapse.in').collapse('hide');
            });
        });
    </script>
{% endblock %}", "itop-portal-base/portal/src/views/bricks/manage/layout-table.html.twig", "/var/www/itop/symfony-portal-poc/datamodels/2.x/itop-portal-base/portal-symfony/templates/itop-portal-base/portal/src/views/bricks/manage/layout-table.html.twig");
    }
}
