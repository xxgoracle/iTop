<?php

/* itop-portal-base/portal/src/views/bricks/manage/layout.html.twig */
class __TwigTemplate_e7209448413842e668d81823731dfb90a706bbc83b89fa6644f6280aefda3de2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("itop-portal-base/portal/src/views/bricks/layout.html.twig", "itop-portal-base/portal/src/views/bricks/manage/layout.html.twig", 2);
        $this->blocks = [
            'pMainHeaderTitle' => [$this, 'block_pMainHeaderTitle'],
            'pMainHeaderActions' => [$this, 'block_pMainHeaderActions'],
            'pPageReadyScripts' => [$this, 'block_pPageReadyScripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "itop-portal-base/portal/src/views/bricks/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "itop-portal-base/portal/src/views/bricks/manage/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_pMainHeaderTitle($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainHeaderTitle"));

        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 4, $this->source); })()), "GetTitle", [], "method")]), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["iCount"]) || array_key_exists("iCount", $context) ? $context["iCount"] : (function () { throw new Twig_Error_Runtime('Variable "iCount" does not exist.', 4, $this->source); })()), "html", null, true);
        echo ") ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_pMainHeaderActions($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainHeaderActions"));

        // line 7
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 7, $this->source); })()), "GetAvailablesDisplayModes", [])) > 1)) {
            // line 8
            echo "\t\t<div class=\"btn-group btn_group_explicit\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 9, $this->source); })()), "GetAvailablesDisplayModes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["sDisplay"]) {
                // line 10
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "url_generator", []), "generate", [0 => "p_manage_brick_display_as", 1 => ["sBrickId" => (isset($context["sBrickId"]) || array_key_exists("sBrickId", $context) ? $context["sBrickId"] : (function () { throw new Twig_Error_Runtime('Variable "sBrickId" does not exist.', 10, $this->source); })()), "sDisplayMode" => $context["sDisplay"]]], "method"), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 10, $this->source); })()), "GetRouteName", []), [], "array", false, true), "hash", [], "array", true, true)) {
                    echo "#";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "combodo.portal.instance.routes", [], "array"), twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 10, $this->source); })()), "GetRouteName", []), [], "array"), "hash", [], "array"), "html", null, true);
                }
                echo "\"
\t\t\t\t   id=\"btn_tab_for_";
                // line 11
                echo twig_escape_filter($this->env, $context["sDisplay"], "html", null, true);
                echo "\"
\t\t\t\t   class=\"btn btn-default ";
                // line 12
                if (($context["sDisplay"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 12, $this->source); })()), "GetPresentationDataForTileMode", [0 => (isset($context["sDisplayMode"]) || array_key_exists("sDisplayMode", $context) ? $context["sDisplayMode"] : (function () { throw new Twig_Error_Runtime('Variable "sDisplayMode" does not exist.', 12, $this->source); })())], "method"), "layoutDisplayMode", []))) {
                    echo "active";
                }
                echo "\">
                    ";
                // line 13
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [("Brick:Portal:Manage:DisplayMode:" . $context["sDisplay"])]), "html", null, true);
                echo "
\t\t\t\t</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sDisplay'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_pPageReadyScripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageReadyScripts"));

        // line 21
        echo "    ";
        $this->displayParentBlock("pPageReadyScripts", $context, $blocks);
        echo "
    ";
        // line 22
        $this->loadTemplate("itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig", "itop-portal-base/portal/src/views/bricks/manage/layout.html.twig", 22)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/bricks/manage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 22,  114 => 21,  108 => 20,  99 => 16,  90 => 13,  84 => 12,  80 => 11,  71 => 10,  67 => 9,  64 => 8,  61 => 7,  55 => 6,  40 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# itop-portal-base/portal/src/views/bricks/manage/layout.html.twig #}
{% extends 'itop-portal-base/portal/src/views/bricks/layout.html.twig' %}

{% block pMainHeaderTitle %}{{ oBrick.GetTitle()|dict_s }} ({{ iCount }}) {% endblock %}

{% block pMainHeaderActions %}
    {% if oBrick.GetAvailablesDisplayModes|length > 1 %}
\t\t<div class=\"btn-group btn_group_explicit\">
            {% for sDisplay in oBrick.GetAvailablesDisplayModes %}
\t\t\t\t<a href=\"{{ app.url_generator.generate('p_manage_brick_display_as', {'sBrickId': sBrickId, 'sDisplayMode': sDisplay}) }}{% if app['combodo.portal.instance.routes'][oBrick.GetRouteName]['hash'] is defined %}#{{ app['combodo.portal.instance.routes'][oBrick.GetRouteName]['hash'] }}{% endif %}\"
\t\t\t\t   id=\"btn_tab_for_{{ sDisplay }}\"
\t\t\t\t   class=\"btn btn-default {% if sDisplay == oBrick.GetPresentationDataForTileMode(sDisplayMode).layoutDisplayMode %}active{% endif %}\">
                    {{ ('Brick:Portal:Manage:DisplayMode:' ~ sDisplay)|dict_s }}
\t\t\t\t</a>
            {% endfor %}
\t\t</div>
    {% endif %}
{% endblock %}

{% block pPageReadyScripts %}
    {{ parent() }}
    {% include 'itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig' %}
{% endblock %}
", "itop-portal-base/portal/src/views/bricks/manage/layout.html.twig", "/var/www/itop/symfony-portal-poc/datamodels/2.x/itop-portal-base/portal-symfony/templates/itop-portal-base/portal/src/views/bricks/manage/layout.html.twig");
    }
}
