<?php

/* itop-portal-base/portal/src/views/bricks/layout.html.twig */
class __TwigTemplate_e92d4b314e2268cb24e70ca12179a2ec9efa4b33d8d8c613f5c3dda620b26997 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pPageTitle' => [$this, 'block_pPageTitle'],
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pMainHeader' => [$this, 'block_pMainHeader'],
            'pMainHeaderTitle' => [$this, 'block_pMainHeaderTitle'],
            'pMainHeaderActions' => [$this, 'block_pMainHeaderActions'],
            'pMainContent' => [$this, 'block_pMainContent'],
            'pMainContentHolder' => [$this, 'block_pMainContentHolder'],
            'pPageLiveScriptHelpers' => [$this, 'block_pPageLiveScriptHelpers'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "templates", []), "layout", []), "itop-portal-base/portal/src/views/bricks/layout.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "itop-portal-base/portal/src/views/bricks/layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_pPageTitle($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageTitle"));

        // line 6
        echo "\t";
        // line 7
        echo "\t";
        if ((((isset($context["oBrick"]) || array_key_exists("oBrick", $context)) &&  !(null === (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 7, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 7, $this->source); })()), "GetTitle", [], "method") != ""))) {
            // line 8
            echo "\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 8, $this->source); })()), "GetTitle", [], "method")]), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_constant("ITOP_APPLICATION_SHORT"), "html", null, true);
            echo "
\t";
        } else {
            // line 10
            echo "\t\t";
            $this->displayParentBlock("pPageTitle", $context, $blocks);
            echo "
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_pPageBodyClass($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageBodyClass"));

        $this->displayParentBlock("pPageBodyClass", $context, $blocks);
        echo " ";
        if (((isset($context["oBrick"]) || array_key_exists("oBrick", $context)) &&  !(null === (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 14, $this->source); })())))) {
            echo "page_brick_of_id_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 14, $this->source); })()), "GetId", [], "method"), "html", null, true);
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_pMainHeader($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainHeader"));

        // line 17
        echo "\t<div class=\"col-xs-12\">
\t\t<div id=\"main-header-title\">
\t\t\t<h2>";
        // line 19
        $this->displayBlock('pMainHeaderTitle', $context, $blocks);
        echo "</h2>
\t\t</div>
\t\t<div id=\"main-header-actions\">
\t\t\t";
        // line 22
        $this->displayBlock('pMainHeaderActions', $context, $blocks);
        // line 24
        echo "\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_pMainHeaderTitle($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainHeaderTitle"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_pMainHeaderActions($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainHeaderActions"));

        // line 23
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_pMainContent($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainContent"));

        // line 29
        echo "<div class=\"col-xs-12\">
\t";
        // line 30
        $this->displayBlock('pMainContentHolder', $context, $blocks);
        // line 32
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_pMainContentHolder($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainContentHolder"));

        // line 31
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_pPageLiveScriptHelpers($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageLiveScriptHelpers"));

        // line 36
        echo "    ";
        $this->displayParentBlock("pPageLiveScriptHelpers", $context, $blocks);
        echo "

\t// Helpers used for brick's opening target
\tvar SetActionUrl = function(oElem, sUrl)
\t{
\t\toElem.attr('href', sUrl);
\t};
\tvar SetActionOpeningTarget = function(oElem, sMode)
\t{
\t\tif(sMode === '";
        // line 45
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\PortalBrick::ENUM_OPENING_TARGET_MODAL"), "html", null, true);
        echo "')
\t\t{
\t\t\toElem.attr('data-toggle', 'modal').attr('data-target', '#modal-for-all');
\t\t}
\t\telse if(sMode === '";
        // line 49
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\PortalBrick::ENUM_OPENING_TARGET_SELF"), "html", null, true);
        echo "')
\t\t{
\t\t\toElem.attr('target', '_self');
\t\t}
\t\telse if(sMode === '";
        // line 53
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\PortalBrick::ENUM_OPENING_TARGET_NEW"), "html", null, true);
        echo "')
\t\t{
\t\t\toElem.attr('target', '_blank');
\t\t}
\t};
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/bricks/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 53,  200 => 49,  193 => 45,  180 => 36,  174 => 35,  167 => 31,  161 => 30,  153 => 32,  151 => 30,  148 => 29,  142 => 28,  135 => 23,  129 => 22,  118 => 19,  109 => 24,  107 => 22,  101 => 19,  97 => 17,  91 => 16,  74 => 14,  63 => 10,  55 => 8,  52 => 7,  50 => 6,  44 => 5,  29 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# itop-portal-base/portal/src/views/bricks/layout.html.twig #}
{# Brick base layout #}
{% extends app['combodo.portal.instance.conf'].properties.templates.layout %}

{% block pPageTitle %}
\t{# Overloading the default template's title to show the brick's title #}
\t{% if oBrick is defined and oBrick is not null and oBrick.GetTitle() != '' %}
\t\t{{ oBrick.GetTitle()|dict_s }} - {{ constant('ITOP_APPLICATION_SHORT') }}
\t{% else %}
\t\t{{ parent() }}
\t{% endif %}
{% endblock %}

{% block pPageBodyClass %}{{ parent() }} {% if oBrick is defined and oBrick is not null %}page_brick_of_id_{{ oBrick.GetId() }}{% endif %}{% endblock %}

{% block pMainHeader %}
\t<div class=\"col-xs-12\">
\t\t<div id=\"main-header-title\">
\t\t\t<h2>{% block pMainHeaderTitle %}{% endblock %}</h2>
\t\t</div>
\t\t<div id=\"main-header-actions\">
\t\t\t{% block pMainHeaderActions %}
\t\t\t{% endblock %}
\t\t</div>
\t</div>
{% endblock %}

{% block pMainContent %}
<div class=\"col-xs-12\">
\t{% block pMainContentHolder%}
\t{% endblock %}
</div>
{% endblock %}

{% block pPageLiveScriptHelpers %}
    {{ parent() }}

\t// Helpers used for brick's opening target
\tvar SetActionUrl = function(oElem, sUrl)
\t{
\t\toElem.attr('href', sUrl);
\t};
\tvar SetActionOpeningTarget = function(oElem, sMode)
\t{
\t\tif(sMode === '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\PortalBrick::ENUM_OPENING_TARGET_MODAL') }}')
\t\t{
\t\t\toElem.attr('data-toggle', 'modal').attr('data-target', '#modal-for-all');
\t\t}
\t\telse if(sMode === '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\PortalBrick::ENUM_OPENING_TARGET_SELF') }}')
\t\t{
\t\t\toElem.attr('target', '_self');
\t\t}
\t\telse if(sMode === '{{ constant('Combodo\\\\iTop\\\\Portal\\\\Brick\\\\PortalBrick::ENUM_OPENING_TARGET_NEW') }}')
\t\t{
\t\t\toElem.attr('target', '_blank');
\t\t}
\t};
{% endblock %}", "itop-portal-base/portal/src/views/bricks/layout.html.twig", "/var/www/itop/symfony-portal-poc/datamodels/2.x/itop-portal-base/portal-symfony/templates/itop-portal-base/portal/src/views/bricks/layout.html.twig");
    }
}
