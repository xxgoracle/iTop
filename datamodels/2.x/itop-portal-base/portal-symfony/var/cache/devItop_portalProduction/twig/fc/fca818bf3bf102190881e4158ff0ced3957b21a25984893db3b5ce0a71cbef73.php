<?php

/* itop-portal-base/portal/src/views/bricks/browse/mode_list.html.twig */
class __TwigTemplate_4313254cb7c73ae9bdebcc34da171a56c7569d7bb89459db485863205d62f7b8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("itop-portal-base/portal/src/views/bricks/browse/layout.html.twig", "itop-portal-base/portal/src/views/bricks/browse/mode_list.html.twig", 3);
        $this->blocks = [
            'bBrowseMainContent' => [$this, 'block_bBrowseMainContent'],
            'pPageLiveScripts' => [$this, 'block_pPageLiveScripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "itop-portal-base/portal/src/views/bricks/browse/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "itop-portal-base/portal/src/views/bricks/browse/mode_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_bBrowseMainContent($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bBrowseMainContent"));

        // line 6
        echo "\t<table id=\"brick-content-table\" class=\"table table-striped table-bordered responsive\" cellspacing=\"0\" width=\"100%\">
\t\t<tbody>
\t\t</tbody>
\t</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_pPageLiveScripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageLiveScripts"));

        // line 13
        echo "\t";
        $this->displayParentBlock("pPageLiveScripts", $context, $blocks);
        echo "
\t\t
\t<script type=\"text/javascript\">
\t\tvar sBrowseMode = '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["sBrowseMode"]) || array_key_exists("sBrowseMode", $context) ? $context["sBrowseMode"] : (function () { throw new Twig_Error_Runtime('Variable "sBrowseMode" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "';
\t\tvar sDataLoading = '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["sDataLoading"]) || array_key_exists("sDataLoading", $context) ? $context["sDataLoading"] : (function () { throw new Twig_Error_Runtime('Variable "sDataLoading" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "';
\t\tvar oLevelsProperties = ";
        // line 18
        echo (isset($context["aLevelsProperties"]) || array_key_exists("aLevelsProperties", $context) ? $context["aLevelsProperties"] : (function () { throw new Twig_Error_Runtime('Variable "aLevelsProperties" does not exist.', 18, $this->source); })());
        echo ";
\t\tvar oRawDatas = ";
        // line 19
        echo (isset($context["aItems"]) || array_key_exists("aItems", $context) ? $context["aItems"] : (function () { throw new Twig_Error_Runtime('Variable "aItems" does not exist.', 19, $this->source); })());
        echo ";
\t\tvar oTable;
\t\t// Used for ajax throttling
\t\tvar iSearchThrottle = 600;
\t\tvar oKeyTimeout;
\t\tvar aKeyTimeoutFilteredKeys = [9, 16, 17, 18, 19, 27, 33, 34, 35, 36, 37, 38, 39, 40]; // Tab, Shift, Ctrl, Alt, Pause, Esc, Page Up/Down, Home, End, Left/Up/Right/Down arrows
\t\t
\t\t// Show a loader inside the table
\t\tvar showTableLoader = function(oElem)
\t\t{
\t\t\toElem.children('tbody').html('<tr><td class=\"datatables_overlay\" colspan=\"100\">' + \$('#page_overlay').html() + '</td></tr>');
\t\t};
\t\t// Columns definition for the table from the oLevelsProperties
\t\tvar getColumnsDefinition = function()
\t\t{
\t\t\tvar aColumnsDefinition = [];
\t\t\t
\t\t\tfor(sKey in oLevelsProperties)
\t\t\t{
\t\t\t\t// Level main column
\t\t\t\taColumnsDefinition.push({
\t\t\t\t\t\"width\": \"auto\",
\t\t\t\t\t\"searchable\": true,
\t\t\t\t\t\"sortable\": (sDataLoading === '";
        // line 42
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\AbstractBrick::ENUM_DATA_LOADING_FULL"), "html", null, true);
        echo "'),
\t\t\t\t\t\"title\": oLevelsProperties[sKey].title,
\t\t\t\t\t\"defaultContent\": \"\",
\t\t\t\t\t\"type\": \"html\",
\t\t\t\t\t\"data\": oLevelsProperties[sKey].alias,
\t\t\t\t\t\"render\": function(data, type, row){
\t\t\t\t\t\tvar cellElem;
\t\t\t\t\t\tvar levelAltId = data.level_alias+'_'+data.id;
\t\t\t\t\t\tvar levelActions;
\t\t\t\t\t\tvar levelActionsKeys;
\t\t\t\t\t\tvar drilldownActionIndex;
\t\t\t\t\t\tvar levelPrimaryAction;
\t\t\t\t\t\tvar url = '';
\t\t\t\t\t\t
\t\t\t\t\t\t// Preparing actions on the cell
\t\t\t\t\t\tlevelActions = oLevelsProperties[data.level_alias].actions;
\t\t\t\t\t\t// - Removing explicit (not default) drilldown action as it has no prupose on that browse mode
\t\t\t\t\t\tdelete levelActions['";
        // line 59
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_DRILLDOWN"), "html", null, true);
        echo "'];
\t\t\t\t\t\t// - Removing implciit (default) drilldown action
\t\t\t\t\t\tif( (levelActions['default'] !== undefined) && (levelActions['default'].type === '";
        // line 61
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_DRILLDOWN"), "html", null, true);
        echo "') ) 
\t\t\t\t\t\t{
\t\t\t\t\t\t\tdelete levelActions['default'];
\t\t\t\t\t\t}
\t\t\t\t\t\tlevelActionsKeys = Object.keys(levelActions);
\t\t\t\t\t\t
\t\t\t\t\t\t// Preparing the cell data
\t\t\t\t\t\tcellElem = (levelActionsKeys.length > 0) ? \$('<a></a>') : \$('<span></span>');
\t\t\t\t\t\tcellElem.attr('data-item-id', data.id).attr('data-level-alias', data.level_alias);
\t\t\t\t\t\t
\t\t\t\t\t\t// Building tooltip for the node
\t\t\t\t\t\t// We have to concatenate the HTML as we return the raw HTML of the cell. If we did a jQuery.insertAfter, the tooltip would not be returned.
\t\t\t\t\t\t// For the same reason, tooltip widget is created in \"drawCallback\" instead of here.
\t\t\t\t\t\tif( (data.tooltip !== undefined) && (data.tooltip !== ''))
\t\t\t\t\t\t{
\t\t\t\t\t\t\tcellElem.html( \$('<span></span>').attr('title', data.tooltip).attr('data-toggle', 'tooltip').html(data.name).prop('outerHTML') );
\t\t\t\t\t\t}
\t\t\t\t\t\telse
\t\t\t\t\t\t{
\t\t\t\t\t\t\tcellElem.html(data.name);
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t// Building actions
\t\t\t\t\t\tif(levelActionsKeys.length > 0)
\t\t\t\t\t\t{
\t\t\t\t\t\t\t// - Primary action (click on item)
\t\t\t\t\t\t\tlevelPrimaryAction = levelActions[levelActionsKeys[0]];
\t\t\t\t\t\t\tswitch(levelPrimaryAction.type)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tcase '";
        // line 90
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_VIEW"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\turl = '";
        // line 91
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 91, $this->source); })()), "url_generator", []), "generate", [0 => "p_object_view", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method");
        echo "'.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
                                    break;
\t\t\t\t\t\t\t\tcase '";
        // line 93
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_EDIT"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\turl = '";
        // line 94
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 94, $this->source); })()), "url_generator", []), "generate", [0 => "p_object_edit", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method");
        echo "'.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\tcase '";
        // line 96
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_CREATE_FROM_THIS"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\turl = levelPrimaryAction.url.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\turl = AddParameterToUrl(url, 'ar_token', data.action_rules_token[levelPrimaryAction.type]);
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\t    url = '#';
\t\t\t\t\t\t\t\t\t//console.log('Action \"'+levelPrimaryAction.type+'\" not implemented');
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t}
                            SetActionUrl(cellElem, url);
                            SetActionOpeningTarget(cellElem, levelPrimaryAction.opening_target);

\t\t\t\t\t\t\t// - Secondary actions
\t\t\t\t\t\t\tif(levelActionsKeys.length > 1)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t// Retrieving secondary action (Now we also display primary action)
\t\t\t\t\t\t\t\tvar actionsButtons = {};
\t\t\t\t\t\t\t\tfor(j = 0; j < levelActionsKeys.length; j++)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tactionsButtons[levelActionsKeys[j]] = levelActions[levelActionsKeys[j]];
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t// Preparing secondary actions container
\t\t\t\t\t\t\t\tvar actionsElem = \$('<div></div>').addClass('pull-right group-actions');
\t\t\t\t\t\t\t\tcellElem.append(actionsElem);
\t\t\t\t\t\t\t\t// Preparing secondary actions
\t\t\t\t\t\t\t\tvar actionsSSTogglerElem = \$('<a class=\"glyphicon glyphicon-menu-hamburger\" data-toggle=\"collapse\" data-target=\"#item-actions-menu-'+levelAltId+'\"></a>');
\t\t\t\t\t\t\t\tvar actionsSSMenuElem = \$('<div id=\"item-actions-menu-'+levelAltId+'\" class=\"item-action-wrapper panel panel-default\"></div>');
\t\t\t\t\t\t\t\tvar actionsSSMenuContainerElem = \$('<div class=\"panel-body\"></div>');
\t\t\t\t\t\t\t\tactionsSSMenuElem.append(actionsSSMenuContainerElem);
\t\t\t\t\t\t\t\tactionsElem.append(actionsSSTogglerElem);
\t\t\t\t\t\t\t\tactionsElem.append(actionsSSMenuElem);

\t\t\t\t\t\t\t\t// Adding secondary actions
\t\t\t\t\t\t\t\tfor(j in actionsButtons)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tvar action = actionsButtons[j];
\t\t\t\t\t\t\t\t\tvar actionElem = \$('<a></a>');
\t\t\t\t\t\t\t\t\tvar actionIconElem = \$('<span></span>').appendTo(actionElem);
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tswitch(action.type)
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tcase '";
        // line 138
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_VIEW"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\t\t\turl = '";
        // line 139
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 139, $this->source); })()), "url_generator", []), "generate", [0 => "p_object_view", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method");
        echo "'.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase '";
        // line 141
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_EDIT"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\t\t\turl = '";
        // line 142
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 142, $this->source); })()), "url_generator", []), "generate", [0 => "p_object_edit", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method");
        echo "'.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase '";
        // line 144
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_CREATE_FROM_THIS"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\t\t\turl = action.url.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\t\t\turl = AddParameterToUrl(url, 'ar_token', data.action_rules_token[action.type]);
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\t\t\t    url = '#';
\t\t\t\t\t\t\t\t\t\t\t//console.log('Action \"'+action.type+'\" not implemented for secondary action');
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t}
                                    SetActionUrl(actionElem, url);
                                    SetActionOpeningTarget(actionElem, action.opening_target);
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t// Adding title if present
\t\t\t\t\t\t\t\t\tif(action.title !== undefined)
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tactionElem.attr('title', action.title);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t// Adding icon class if present
\t\t\t\t\t\t\t\t\tif(action.icon_class !== undefined)
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tactionIconElem.addClass(action.icon_class);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tactionElem.append(action.title);
\t\t\t\t\t\t\t\t\tactionsSSMenuContainerElem.append( \$('<p></p>').append(actionElem) );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\treturn cellElem.prop('outerHTML');
\t\t\t\t\t},
\t\t\t\t});
\t\t\t\t
\t\t\t\t// Level's fields columns
\t\t\t\tif(oLevelsProperties[sKey].fields !== undefined)
\t\t\t\t{
\t\t\t\t\tfor(var i in oLevelsProperties[sKey].fields)
\t\t\t\t\t{
\t\t\t\t\t\taColumnsDefinition.push({
\t\t\t\t\t\t\t\"width\": \"auto\",
\t\t\t\t\t\t\t\"searchable\": true,
\t\t\t\t\t\t\t\"sortable\": false,
\t\t\t\t\t\t\t\"visible\": !oLevelsProperties[sKey].fields[i].hidden,
\t\t\t\t\t\t\t\"title\": oLevelsProperties[sKey].fields[i].label,
\t\t\t\t\t\t\t\"defaultContent\": \"\",
\t\t\t\t\t\t\t\"type\": \"html\",
\t\t\t\t\t\t\t\"data\": oLevelsProperties[sKey].alias+\".fields.\"+oLevelsProperties[sKey].fields[i].code
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\treturn aColumnsDefinition;
\t\t};
\t\t
\t\t\$(document).ready(function()
\t\t{
\t\t\tshowTableLoader(\$('#brick-content-table'));
\t\t\t
\t\t\t// Note : Those options should be externalized in an library so we can use them on any DataTables for the portal.
\t\t\t// We would just have to override / complete the necessary elements
\t\t\toTable = \$('#brick-content-table').DataTable({
\t\t\t\t\"language\": {
\t\t\t\t\t\"processing\":\t  \"";
        // line 207
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Processing"]), "html", null, true);
        echo "\",
\t\t\t\t\t\"search\":\t\t  \"";
        // line 208
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Search"]), "html", null, true);
        echo "\",
\t\t\t\t\t\"lengthMenu\":\t  \"";
        // line 209
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:LengthMenu"]), "html", null, true);
        echo "\",
\t\t\t\t\t\"zeroRecords\":\t \"";
        // line 210
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:ZeroRecords"]), "html", null, true);
        echo "\",
\t\t\t\t\t\"info\":\t\t\t\"";
        // line 211
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Info"]), "html", null, true);
        echo "\",
\t\t\t\t\t\"infoEmpty\":\t   \"";
        // line 212
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:InfoEmpty"]), "html", null, true);
        echo "\",
\t\t\t\t\t\"infoFiltered\":\t\"(";
        // line 213
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:InfoFiltered"]), "html", null, true);
        echo ")\",
\t\t\t\t\t\"emptyTable\":\t  \"";
        // line 214
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:EmptyTable"]), "html", null, true);
        echo "\",
\t\t\t\t\t\"paginate\": {
\t\t\t\t\t\t\"first\":\t  \"";
        // line 216
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:First"]), "html", null, true);
        echo "\",
\t\t\t\t\t\t\"previous\":   \"";
        // line 217
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:Previous"]), "html", null, true);
        echo "\",
\t\t\t\t\t\t\"next\":\t   \"";
        // line 218
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:Next"]), "html", null, true);
        echo "\",
\t\t\t\t\t\t\"last\":\t   \"";
        // line 219
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:Last"]), "html", null, true);
        echo "\"
\t\t\t\t\t},
\t\t\t\t\t\"aria\": {
\t\t\t\t\t\t\"sortAscending\":  \": ";
        // line 222
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Sort:Ascending"]), "html", null, true);
        echo "\",
\t\t\t\t\t\t\"sortDescending\": \": ";
        // line 223
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Sort:Descending"]), "html", null, true);
        echo "\"
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t\"lengthMenu\": [[10, 20, 50, -1], [10, 20, 50, \"";
        // line 226
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:DisplayLength:All"]), "html", null, true);
        echo "\"]],
\t\t\t\t\"displayLength\": ";
        // line 227
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::DEFAULT_LIST_LENGTH"), "html", null, true);
        echo ",
\t\t\t\t\"dom\": '<\"row\"<\"col-sm-6\"l><\"col-sm-6\"<f><\"visible-xs\"p>>>t<\"row\"<\"col-sm-6\"i><\"col-sm-6\"p>>',
\t\t\t\t\"columns\": getColumnsDefinition(),
\t\t\t\t\"order\": [],
\t\t\t\t\"drawCallback\": function(settings){
\t\t\t\t\t// Tooltip has to been created here, as the render callback only returns a string, not an object.
\t\t\t\t\t\$(this).find('[data-toggle=\"tooltip\"]').tooltip({container: 'body', html: true, trigger: 'hover', placement: 'right'});\t// container option is necessary when in a table
\t\t\t\t\t// Hiding pagination if only one page
\t\t\t\t\tif(\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2)
\t\t\t\t\t{
\t\t\t\t\t\t\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
\t\t\t\t\t}
\t\t\t\t\telse
\t\t\t\t\t{
\t\t\t\t\t\t\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t";
        // line 244
        if (((isset($context["sDataLoading"]) || array_key_exists("sDataLoading", $context) ? $context["sDataLoading"] : (function () { throw new Twig_Error_Runtime('Variable "sDataLoading" does not exist.', 244, $this->source); })()) == twig_constant("Combodo\\iTop\\Portal\\Brick\\AbstractBrick::ENUM_DATA_LOADING_FULL"))) {
            // line 245
            echo "\t\t\t\t\t\"data\": oRawDatas,
\t\t\t\t";
        } else {
            // line 247
            echo "\t\t\t\t\t\"processing\": true,
\t\t\t\t\t\"serverSide\": true,
\t\t\t\t\t\"ajax\": {
\t\t\t\t\t\t\"url\": \"";
            // line 250
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 250, $this->source); })()), "url_generator", []), "generate", [0 => "p_browse_brick_mode", 1 => ["sBrickId" => (isset($context["sBrickId"]) || array_key_exists("sBrickId", $context) ? $context["sBrickId"] : (function () { throw new Twig_Error_Runtime('Variable "sBrickId" does not exist.', 250, $this->source); })()), "sBrowseMode" => twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_BROWSE_MODE_LIST")]], "method");
            echo "\",
\t\t\t\t\t\t\"data\": function(d){
\t\t\t\t\t\t\td.iPageNumber = Math.floor(d.start/d.length) + 1;
\t\t\t\t\t\t\td.iListLength = d.length;
\t\t\t\t\t\t\td.sDataLoading = \"";
            // line 254
            echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\AbstractBrick::ENUM_DATA_LOADING_LAZY"), "html", null, true);
            echo "\";
\t\t\t\t\t\t\td.columns = null;
\t\t\t\t\t\t\td.orders = null;
\t\t\t\t\t\t\t";
            // line 257
            if ( !(null === (isset($context["sSearchValue"]) || array_key_exists("sSearchValue", $context) ? $context["sSearchValue"] : (function () { throw new Twig_Error_Runtime('Variable "sSearchValue" does not exist.', 257, $this->source); })()))) {
                // line 258
                echo "\t\t\t\t\t\t\t\t// Sets default filter value
\t\t\t\t\t\t\t\tif(d.draw === 1)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\$('#brick-content-table_filter input').val('";
                // line 261
                echo twig_escape_filter($this->env, (isset($context["sSearchValue"]) || array_key_exists("sSearchValue", $context) ? $context["sSearchValue"] : (function () { throw new Twig_Error_Runtime('Variable "sSearchValue" does not exist.', 261, $this->source); })()), "html", null, true);
                echo "');
\t\t\t\t\t\t\t\t\td.search.value = \$('#brick-content-table_filter input').val();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 265
            echo "\t\t\t\t\t\t\tif(d.search.value)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\td.sSearchValue = d.search.value;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
        }
        // line 272
        echo "\t\t\t});
\t\t\t// Overrides filter input to apply throttle. Otherwise, an ajax request is send each time a key is pressed
\t\t\t// Also removes accents from search string
\t\t\t// Note : The '.off()' call is to unbind event from DataTables that where triggered before we could intercept anything
\t\t\t\$('#brick-content-table_filter input').off().on('keyup', function(event){
\t\t\t\tvar me = this;
\t\t\t\t
\t\t\t\t// We trigger the search only if those keys where not pressed
\t\t\t\tif(aKeyTimeoutFilteredKeys.indexOf(event.which) < 0)
\t\t\t\t{
\t\t\t\t\tclearTimeout(oKeyTimeout);
\t\t\t\t\toKeyTimeout = setTimeout(function() {
\t\t\t\t\t\toTable.search(me.value.latinise()).draw();
\t\t\t\t\t}, iSearchThrottle);
\t\t\t\t}
\t\t\t});
\t\t\t// Shows a loader in the table when processing
\t\t\t\$('#brick-content-table').on('processing.dt', function(event, settings, processing){
\t\t\t\tif(processing === true)
\t\t\t\t{
\t\t\t\t\tshowTableLoader(\$(this));
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t// Auto collapse item actions popup
\t\t\t\$('body').click(function(){
\t\t\t\t\$('table .item-action-wrapper.collapse.in').collapse('hide');
\t\t\t});
\t\t});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/bricks/browse/mode_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 272,  434 => 265,  427 => 261,  422 => 258,  420 => 257,  414 => 254,  407 => 250,  402 => 247,  398 => 245,  396 => 244,  376 => 227,  372 => 226,  366 => 223,  362 => 222,  356 => 219,  352 => 218,  348 => 217,  344 => 216,  339 => 214,  335 => 213,  331 => 212,  327 => 211,  323 => 210,  319 => 209,  315 => 208,  311 => 207,  245 => 144,  240 => 142,  236 => 141,  231 => 139,  227 => 138,  182 => 96,  177 => 94,  173 => 93,  168 => 91,  164 => 90,  132 => 61,  127 => 59,  107 => 42,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  62 => 13,  56 => 12,  45 => 6,  39 => 5,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# itop-portal-base/portal/src/views/bricks/browse/mode_list.html.twig #}
{# Browse brick list mode layout #}
{% extends 'itop-portal-base/portal/src/views/bricks/browse/layout.html.twig' %}

{% block bBrowseMainContent%}
\t<table id=\"brick-content-table\" class=\"table table-striped table-bordered responsive\" cellspacing=\"0\" width=\"100%\">
\t\t<tbody>
\t\t</tbody>
\t</table>
{% endblock %}

{% block pPageLiveScripts %}
\t{{ parent() }}
\t\t
\t<script type=\"text/javascript\">
\t\tvar sBrowseMode = '{{ sBrowseMode }}';
\t\tvar sDataLoading = '{{ sDataLoading }}';
\t\tvar oLevelsProperties = {{ aLevelsProperties|raw }};
\t\tvar oRawDatas = {{ aItems|raw }};
\t\tvar oTable;
\t\t// Used for ajax throttling
\t\tvar iSearchThrottle = 600;
\t\tvar oKeyTimeout;
\t\tvar aKeyTimeoutFilteredKeys = [9, 16, 17, 18, 19, 27, 33, 34, 35, 36, 37, 38, 39, 40]; // Tab, Shift, Ctrl, Alt, Pause, Esc, Page Up/Down, Home, End, Left/Up/Right/Down arrows
\t\t
\t\t// Show a loader inside the table
\t\tvar showTableLoader = function(oElem)
\t\t{
\t\t\toElem.children('tbody').html('<tr><td class=\"datatables_overlay\" colspan=\"100\">' + \$('#page_overlay').html() + '</td></tr>');
\t\t};
\t\t// Columns definition for the table from the oLevelsProperties
\t\tvar getColumnsDefinition = function()
\t\t{
\t\t\tvar aColumnsDefinition = [];
\t\t\t
\t\t\tfor(sKey in oLevelsProperties)
\t\t\t{
\t\t\t\t// Level main column
\t\t\t\taColumnsDefinition.push({
\t\t\t\t\t\"width\": \"auto\",
\t\t\t\t\t\"searchable\": true,
\t\t\t\t\t\"sortable\": (sDataLoading === '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\AbstractBrick::ENUM_DATA_LOADING_FULL') }}'),
\t\t\t\t\t\"title\": oLevelsProperties[sKey].title,
\t\t\t\t\t\"defaultContent\": \"\",
\t\t\t\t\t\"type\": \"html\",
\t\t\t\t\t\"data\": oLevelsProperties[sKey].alias,
\t\t\t\t\t\"render\": function(data, type, row){
\t\t\t\t\t\tvar cellElem;
\t\t\t\t\t\tvar levelAltId = data.level_alias+'_'+data.id;
\t\t\t\t\t\tvar levelActions;
\t\t\t\t\t\tvar levelActionsKeys;
\t\t\t\t\t\tvar drilldownActionIndex;
\t\t\t\t\t\tvar levelPrimaryAction;
\t\t\t\t\t\tvar url = '';
\t\t\t\t\t\t
\t\t\t\t\t\t// Preparing actions on the cell
\t\t\t\t\t\tlevelActions = oLevelsProperties[data.level_alias].actions;
\t\t\t\t\t\t// - Removing explicit (not default) drilldown action as it has no prupose on that browse mode
\t\t\t\t\t\tdelete levelActions['{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\BrowseBrick::ENUM_ACTION_DRILLDOWN') }}'];
\t\t\t\t\t\t// - Removing implciit (default) drilldown action
\t\t\t\t\t\tif( (levelActions['default'] !== undefined) && (levelActions['default'].type === '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\BrowseBrick::ENUM_ACTION_DRILLDOWN') }}') ) 
\t\t\t\t\t\t{
\t\t\t\t\t\t\tdelete levelActions['default'];
\t\t\t\t\t\t}
\t\t\t\t\t\tlevelActionsKeys = Object.keys(levelActions);
\t\t\t\t\t\t
\t\t\t\t\t\t// Preparing the cell data
\t\t\t\t\t\tcellElem = (levelActionsKeys.length > 0) ? \$('<a></a>') : \$('<span></span>');
\t\t\t\t\t\tcellElem.attr('data-item-id', data.id).attr('data-level-alias', data.level_alias);
\t\t\t\t\t\t
\t\t\t\t\t\t// Building tooltip for the node
\t\t\t\t\t\t// We have to concatenate the HTML as we return the raw HTML of the cell. If we did a jQuery.insertAfter, the tooltip would not be returned.
\t\t\t\t\t\t// For the same reason, tooltip widget is created in \"drawCallback\" instead of here.
\t\t\t\t\t\tif( (data.tooltip !== undefined) && (data.tooltip !== ''))
\t\t\t\t\t\t{
\t\t\t\t\t\t\tcellElem.html( \$('<span></span>').attr('title', data.tooltip).attr('data-toggle', 'tooltip').html(data.name).prop('outerHTML') );
\t\t\t\t\t\t}
\t\t\t\t\t\telse
\t\t\t\t\t\t{
\t\t\t\t\t\t\tcellElem.html(data.name);
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t// Building actions
\t\t\t\t\t\tif(levelActionsKeys.length > 0)
\t\t\t\t\t\t{
\t\t\t\t\t\t\t// - Primary action (click on item)
\t\t\t\t\t\t\tlevelPrimaryAction = levelActions[levelActionsKeys[0]];
\t\t\t\t\t\t\tswitch(levelPrimaryAction.type)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tcase '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\BrowseBrick::ENUM_ACTION_VIEW') }}':
\t\t\t\t\t\t\t\t\turl = '{{ app.url_generator.generate('p_object_view', {'sObjectClass': '-objectClass-', 'sObjectId': '-objectId-'})|raw }}'.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
                                    break;
\t\t\t\t\t\t\t\tcase '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\BrowseBrick::ENUM_ACTION_EDIT') }}':
\t\t\t\t\t\t\t\t\turl = '{{ app.url_generator.generate('p_object_edit', {'sObjectClass': '-objectClass-', 'sObjectId': '-objectId-'})|raw }}'.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\tcase '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\BrowseBrick::ENUM_ACTION_CREATE_FROM_THIS') }}':
\t\t\t\t\t\t\t\t\turl = levelPrimaryAction.url.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\turl = AddParameterToUrl(url, 'ar_token', data.action_rules_token[levelPrimaryAction.type]);
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\t    url = '#';
\t\t\t\t\t\t\t\t\t//console.log('Action \"'+levelPrimaryAction.type+'\" not implemented');
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t}
                            SetActionUrl(cellElem, url);
                            SetActionOpeningTarget(cellElem, levelPrimaryAction.opening_target);

\t\t\t\t\t\t\t// - Secondary actions
\t\t\t\t\t\t\tif(levelActionsKeys.length > 1)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t// Retrieving secondary action (Now we also display primary action)
\t\t\t\t\t\t\t\tvar actionsButtons = {};
\t\t\t\t\t\t\t\tfor(j = 0; j < levelActionsKeys.length; j++)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tactionsButtons[levelActionsKeys[j]] = levelActions[levelActionsKeys[j]];
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t// Preparing secondary actions container
\t\t\t\t\t\t\t\tvar actionsElem = \$('<div></div>').addClass('pull-right group-actions');
\t\t\t\t\t\t\t\tcellElem.append(actionsElem);
\t\t\t\t\t\t\t\t// Preparing secondary actions
\t\t\t\t\t\t\t\tvar actionsSSTogglerElem = \$('<a class=\"glyphicon glyphicon-menu-hamburger\" data-toggle=\"collapse\" data-target=\"#item-actions-menu-'+levelAltId+'\"></a>');
\t\t\t\t\t\t\t\tvar actionsSSMenuElem = \$('<div id=\"item-actions-menu-'+levelAltId+'\" class=\"item-action-wrapper panel panel-default\"></div>');
\t\t\t\t\t\t\t\tvar actionsSSMenuContainerElem = \$('<div class=\"panel-body\"></div>');
\t\t\t\t\t\t\t\tactionsSSMenuElem.append(actionsSSMenuContainerElem);
\t\t\t\t\t\t\t\tactionsElem.append(actionsSSTogglerElem);
\t\t\t\t\t\t\t\tactionsElem.append(actionsSSMenuElem);

\t\t\t\t\t\t\t\t// Adding secondary actions
\t\t\t\t\t\t\t\tfor(j in actionsButtons)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tvar action = actionsButtons[j];
\t\t\t\t\t\t\t\t\tvar actionElem = \$('<a></a>');
\t\t\t\t\t\t\t\t\tvar actionIconElem = \$('<span></span>').appendTo(actionElem);
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tswitch(action.type)
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tcase '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\BrowseBrick::ENUM_ACTION_VIEW') }}':
\t\t\t\t\t\t\t\t\t\t\turl = '{{ app.url_generator.generate('p_object_view', {'sObjectClass': '-objectClass-', 'sObjectId': '-objectId-'})|raw }}'.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\BrowseBrick::ENUM_ACTION_EDIT') }}':
\t\t\t\t\t\t\t\t\t\t\turl = '{{ app.url_generator.generate('p_object_edit', {'sObjectClass': '-objectClass-', 'sObjectId': '-objectId-'})|raw }}'.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tcase '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\BrowseBrick::ENUM_ACTION_CREATE_FROM_THIS') }}':
\t\t\t\t\t\t\t\t\t\t\turl = action.url.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\t\t\turl = AddParameterToUrl(url, 'ar_token', data.action_rules_token[action.type]);
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\t\t\t    url = '#';
\t\t\t\t\t\t\t\t\t\t\t//console.log('Action \"'+action.type+'\" not implemented for secondary action');
\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t}
                                    SetActionUrl(actionElem, url);
                                    SetActionOpeningTarget(actionElem, action.opening_target);
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t// Adding title if present
\t\t\t\t\t\t\t\t\tif(action.title !== undefined)
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tactionElem.attr('title', action.title);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t// Adding icon class if present
\t\t\t\t\t\t\t\t\tif(action.icon_class !== undefined)
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tactionIconElem.addClass(action.icon_class);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tactionElem.append(action.title);
\t\t\t\t\t\t\t\t\tactionsSSMenuContainerElem.append( \$('<p></p>').append(actionElem) );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\treturn cellElem.prop('outerHTML');
\t\t\t\t\t},
\t\t\t\t});
\t\t\t\t
\t\t\t\t// Level's fields columns
\t\t\t\tif(oLevelsProperties[sKey].fields !== undefined)
\t\t\t\t{
\t\t\t\t\tfor(var i in oLevelsProperties[sKey].fields)
\t\t\t\t\t{
\t\t\t\t\t\taColumnsDefinition.push({
\t\t\t\t\t\t\t\"width\": \"auto\",
\t\t\t\t\t\t\t\"searchable\": true,
\t\t\t\t\t\t\t\"sortable\": false,
\t\t\t\t\t\t\t\"visible\": !oLevelsProperties[sKey].fields[i].hidden,
\t\t\t\t\t\t\t\"title\": oLevelsProperties[sKey].fields[i].label,
\t\t\t\t\t\t\t\"defaultContent\": \"\",
\t\t\t\t\t\t\t\"type\": \"html\",
\t\t\t\t\t\t\t\"data\": oLevelsProperties[sKey].alias+\".fields.\"+oLevelsProperties[sKey].fields[i].code
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\treturn aColumnsDefinition;
\t\t};
\t\t
\t\t\$(document).ready(function()
\t\t{
\t\t\tshowTableLoader(\$('#brick-content-table'));
\t\t\t
\t\t\t// Note : Those options should be externalized in an library so we can use them on any DataTables for the portal.
\t\t\t// We would just have to override / complete the necessary elements
\t\t\toTable = \$('#brick-content-table').DataTable({
\t\t\t\t\"language\": {
\t\t\t\t\t\"processing\":\t  \"{{ 'Portal:Datatables:Language:Processing'|dict_s }}\",
\t\t\t\t\t\"search\":\t\t  \"{{ 'Portal:Datatables:Language:Search'|dict_s }}\",
\t\t\t\t\t\"lengthMenu\":\t  \"{{ 'Portal:Datatables:Language:LengthMenu'|dict_s }}\",
\t\t\t\t\t\"zeroRecords\":\t \"{{ 'Portal:Datatables:Language:ZeroRecords'|dict_s }}\",
\t\t\t\t\t\"info\":\t\t\t\"{{ 'Portal:Datatables:Language:Info'|dict_s }}\",
\t\t\t\t\t\"infoEmpty\":\t   \"{{ 'Portal:Datatables:Language:InfoEmpty'|dict_s }}\",
\t\t\t\t\t\"infoFiltered\":\t\"({{ 'Portal:Datatables:Language:InfoFiltered'|dict_s }})\",
\t\t\t\t\t\"emptyTable\":\t  \"{{ 'Portal:Datatables:Language:EmptyTable'|dict_s }}\",
\t\t\t\t\t\"paginate\": {
\t\t\t\t\t\t\"first\":\t  \"{{ 'Portal:Datatables:Language:Paginate:First'|dict_s }}\",
\t\t\t\t\t\t\"previous\":   \"{{ 'Portal:Datatables:Language:Paginate:Previous'|dict_s }}\",
\t\t\t\t\t\t\"next\":\t   \"{{ 'Portal:Datatables:Language:Paginate:Next'|dict_s }}\",
\t\t\t\t\t\t\"last\":\t   \"{{ 'Portal:Datatables:Language:Paginate:Last'|dict_s }}\"
\t\t\t\t\t},
\t\t\t\t\t\"aria\": {
\t\t\t\t\t\t\"sortAscending\":  \": {{ 'Portal:Datatables:Language:Sort:Ascending'|dict_s }}\",
\t\t\t\t\t\t\"sortDescending\": \": {{ 'Portal:Datatables:Language:Sort:Descending'|dict_s }}\"
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t\"lengthMenu\": [[10, 20, 50, -1], [10, 20, 50, \"{{ 'Portal:Datatables:Language:DisplayLength:All'|dict_s }}\"]],
\t\t\t\t\"displayLength\": {{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\BrowseBrick::DEFAULT_LIST_LENGTH') }},
\t\t\t\t\"dom\": '<\"row\"<\"col-sm-6\"l><\"col-sm-6\"<f><\"visible-xs\"p>>>t<\"row\"<\"col-sm-6\"i><\"col-sm-6\"p>>',
\t\t\t\t\"columns\": getColumnsDefinition(),
\t\t\t\t\"order\": [],
\t\t\t\t\"drawCallback\": function(settings){
\t\t\t\t\t// Tooltip has to been created here, as the render callback only returns a string, not an object.
\t\t\t\t\t\$(this).find('[data-toggle=\"tooltip\"]').tooltip({container: 'body', html: true, trigger: 'hover', placement: 'right'});\t// container option is necessary when in a table
\t\t\t\t\t// Hiding pagination if only one page
\t\t\t\t\tif(\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2)
\t\t\t\t\t{
\t\t\t\t\t\t\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
\t\t\t\t\t}
\t\t\t\t\telse
\t\t\t\t\t{
\t\t\t\t\t\t\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t{% if sDataLoading == constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\AbstractBrick::ENUM_DATA_LOADING_FULL') %}
\t\t\t\t\t\"data\": oRawDatas,
\t\t\t\t{% else %}
\t\t\t\t\t\"processing\": true,
\t\t\t\t\t\"serverSide\": true,
\t\t\t\t\t\"ajax\": {
\t\t\t\t\t\t\"url\": \"{{ app.url_generator.generate('p_browse_brick_mode', {'sBrickId': sBrickId, 'sBrowseMode': constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\BrowseBrick::ENUM_BROWSE_MODE_LIST')})|raw }}\",
\t\t\t\t\t\t\"data\": function(d){
\t\t\t\t\t\t\td.iPageNumber = Math.floor(d.start/d.length) + 1;
\t\t\t\t\t\t\td.iListLength = d.length;
\t\t\t\t\t\t\td.sDataLoading = \"{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\AbstractBrick::ENUM_DATA_LOADING_LAZY') }}\";
\t\t\t\t\t\t\td.columns = null;
\t\t\t\t\t\t\td.orders = null;
\t\t\t\t\t\t\t{% if sSearchValue is not null %}
\t\t\t\t\t\t\t\t// Sets default filter value
\t\t\t\t\t\t\t\tif(d.draw === 1)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\$('#brick-content-table_filter input').val('{{ sSearchValue }}');
\t\t\t\t\t\t\t\t\td.search.value = \$('#brick-content-table_filter input').val();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\tif(d.search.value)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\td.sSearchValue = d.search.value;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t{% endif %}
\t\t\t});
\t\t\t// Overrides filter input to apply throttle. Otherwise, an ajax request is send each time a key is pressed
\t\t\t// Also removes accents from search string
\t\t\t// Note : The '.off()' call is to unbind event from DataTables that where triggered before we could intercept anything
\t\t\t\$('#brick-content-table_filter input').off().on('keyup', function(event){
\t\t\t\tvar me = this;
\t\t\t\t
\t\t\t\t// We trigger the search only if those keys where not pressed
\t\t\t\tif(aKeyTimeoutFilteredKeys.indexOf(event.which) < 0)
\t\t\t\t{
\t\t\t\t\tclearTimeout(oKeyTimeout);
\t\t\t\t\toKeyTimeout = setTimeout(function() {
\t\t\t\t\t\toTable.search(me.value.latinise()).draw();
\t\t\t\t\t}, iSearchThrottle);
\t\t\t\t}
\t\t\t});
\t\t\t// Shows a loader in the table when processing
\t\t\t\$('#brick-content-table').on('processing.dt', function(event, settings, processing){
\t\t\t\tif(processing === true)
\t\t\t\t{
\t\t\t\t\tshowTableLoader(\$(this));
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t// Auto collapse item actions popup
\t\t\t\$('body').click(function(){
\t\t\t\t\$('table .item-action-wrapper.collapse.in').collapse('hide');
\t\t\t});
\t\t});
\t</script>
{% endblock %}
", "itop-portal-base/portal/src/views/bricks/browse/mode_list.html.twig", "/var/www/itop/symfony-portal-poc/datamodels/2.x/itop-portal-base/portal-symfony/templates/itop-portal-base/portal/src/views/bricks/browse/mode_list.html.twig");
    }
}
