<?php

/* itop-portal-base/portal/src/views/bricks/browse/layout.html.twig */
class __TwigTemplate_ffee5ed53713c6698f6b0586c88d51d6922f85968ffae96a92252896ee43fbf2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("itop-portal-base/portal/src/views/bricks/layout.html.twig", "itop-portal-base/portal/src/views/bricks/browse/layout.html.twig", 3);
        $this->blocks = [
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pPageReadyScripts' => [$this, 'block_pPageReadyScripts'],
            'pMainHeaderTitle' => [$this, 'block_pMainHeaderTitle'],
            'pMainHeaderActions' => [$this, 'block_pMainHeaderActions'],
            'pMainContentHolder' => [$this, 'block_pMainContentHolder'],
            'bBrowseMainContent' => [$this, 'block_bBrowseMainContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "itop-portal-base/portal/src/views/bricks/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "itop-portal-base/portal/src/views/bricks/browse/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_pPageBodyClass($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageBodyClass"));

        $this->displayParentBlock("pPageBodyClass", $context, $blocks);
        echo " page_browse_brick page_browse_brick_as_";
        echo twig_escape_filter($this->env, (isset($context["sBrowseMode"]) || array_key_exists("sBrowseMode", $context) ? $context["sBrowseMode"] : (function () { throw new Twig_Error_Runtime('Variable "sBrowseMode" does not exist.', 5, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_pPageReadyScripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageReadyScripts"));

        // line 8
        echo "    ";
        $this->displayParentBlock("pPageReadyScripts", $context, $blocks);
        echo "
    ";
        // line 9
        $this->loadTemplate("itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig", "itop-portal-base/portal/src/views/bricks/browse/layout.html.twig", 9)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_pMainHeaderTitle($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainHeaderTitle"));

        // line 14
        echo "\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 14, $this->source); })()), "GetTitle", [], "method")]), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_pMainHeaderActions($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainHeaderActions"));

        // line 18
        echo "\t";
        if ((twig_length_filter($this->env, (isset($context["aBrowseButtons"]) || array_key_exists("aBrowseButtons", $context) ? $context["aBrowseButtons"] : (function () { throw new Twig_Error_Runtime('Variable "aBrowseButtons" does not exist.', 18, $this->source); })())) > 1)) {
            // line 19
            echo "\t\t<div class=\"btn-group ";
            echo " btn_group_explicit\">
\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["aBrowseButtons"]) || array_key_exists("aBrowseButtons", $context) ? $context["aBrowseButtons"] : (function () { throw new Twig_Error_Runtime('Variable "aBrowseButtons" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sBrowseButton"]) {
                // line 21
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->source); })()), "url_generator", []), "generate", [0 => "p_browse_brick_mode", 1 => ["sBrickId" => (isset($context["sBrickId"]) || array_key_exists("sBrickId", $context) ? $context["sBrickId"] : (function () { throw new Twig_Error_Runtime('Variable "sBrickId" does not exist.', 21, $this->source); })()), "sBrowseMode" => $context["sBrowseButton"]]], "method"), "html", null, true);
                echo "\" class=\"btn btn-default ";
                if (((isset($context["sBrowseMode"]) || array_key_exists("sBrowseMode", $context) ? $context["sBrowseMode"] : (function () { throw new Twig_Error_Runtime('Variable "sBrowseMode" does not exist.', 21, $this->source); })()) == $context["sBrowseButton"])) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [("Brick:Portal:Browse:Mode:" . twig_capitalize_string_filter($this->env, $context["sBrowseButton"]))]), "html", null, true);
                echo "</a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sBrowseButton'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t</div>
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_pMainContentHolder($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainContentHolder"));

        // line 28
        echo "\t";
        if ((((isset($context["iItemsCount"]) || array_key_exists("iItemsCount", $context) ? $context["iItemsCount"] : (function () { throw new Twig_Error_Runtime('Variable "iItemsCount" does not exist.', 28, $this->source); })()) > 0) ||  !(null === (isset($context["sSearchValue"]) || array_key_exists("sSearchValue", $context) ? $context["sSearchValue"] : (function () { throw new Twig_Error_Runtime('Variable "sSearchValue" does not exist.', 28, $this->source); })())))) {
            // line 29
            echo "\t\t<div class=\"panel panel-default\">
\t\t\t";
            // line 30
            $this->displayBlock('bBrowseMainContent', $context, $blocks);
            // line 32
            echo "\t\t</div>
\t";
        } else {
            // line 34
            echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<h3 class=\"text-center\">";
            // line 36
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:Browse:Filter:NoData"]), "html", null, true);
            echo "</h3>
\t\t\t</div>
\t\t</div>
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_bBrowseMainContent($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bBrowseMainContent"));

        // line 31
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/bricks/browse/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 31,  166 => 30,  154 => 36,  150 => 34,  146 => 32,  144 => 30,  141 => 29,  138 => 28,  132 => 27,  123 => 23,  108 => 21,  104 => 20,  100 => 19,  97 => 18,  91 => 17,  81 => 14,  75 => 13,  68 => 9,  63 => 8,  57 => 7,  43 => 5,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# itop-portal-base/portal/src/views/bricks/browse/layout.html.twig #}
{# Browse brick base layout #}
{% extends 'itop-portal-base/portal/src/views/bricks/layout.html.twig' %}

{% block pPageBodyClass %}{{ parent() }} page_browse_brick page_browse_brick_as_{{ sBrowseMode }}{% endblock %}

{% block pPageReadyScripts %}
    {{ parent() }}
    {% include 'itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig' %}
{% endblock %}


{% block pMainHeaderTitle %}
\t{{ oBrick.GetTitle()|dict_s }}
{% endblock %}

{% block pMainHeaderActions %}
\t{% if aBrowseButtons|length > 1 %}
\t\t<div class=\"btn-group {#btn-group-sm#} btn_group_explicit\">
\t\t\t{% for sBrowseButton in aBrowseButtons %}
\t\t\t<a href=\"{{ app.url_generator.generate('p_browse_brick_mode', {'sBrickId': sBrickId, 'sBrowseMode': sBrowseButton}) }}\" class=\"btn btn-default {% if sBrowseMode == sBrowseButton %}active{% endif %}\">{{ ('Brick:Portal:Browse:Mode:'~sBrowseButton|capitalize)|dict_s }}</a>
\t\t\t{% endfor %}
\t\t</div>
\t{% endif %}
{% endblock %}

{% block pMainContentHolder%}
\t{% if iItemsCount > 0 or sSearchValue is not null %}
\t\t<div class=\"panel panel-default\">
\t\t\t{% block bBrowseMainContent %}
\t\t\t{% endblock %}
\t\t</div>
\t{% else %}
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<h3 class=\"text-center\">{{ 'Brick:Portal:Browse:Filter:NoData'|dict_s }}</h3>
\t\t\t</div>
\t\t</div>
\t{% endif %}
{% endblock %}
", "itop-portal-base/portal/src/views/bricks/browse/layout.html.twig", "/var/www/itop/symfony-portal-poc/datamodels/2.x/itop-portal-base/portal-symfony/templates/itop-portal-base/portal/src/views/bricks/browse/layout.html.twig");
    }
}
