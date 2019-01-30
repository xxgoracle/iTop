<?php

/* itop-portal-base/portal/src/views/bricks/manage/tile-default.html.twig */
class __TwigTemplate_033883b10d4385bafa589cf97545414b6041e864e077d40d3cb0ad55141b4ef8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pTileWrapper' => [$this, 'block_pTileWrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "itop-portal-base/portal/src/views/bricks/manage/tile-default.html.twig"));

        // line 3
        echo "
<div class=\"col-xs-12 col-sm-";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 4, $this->source); })()), "GetWidth", []), "html", null, true);
        echo "\">
    ";
        // line 5
        $this->displayBlock('pTileWrapper', $context, $blocks);
        // line 21
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_pTileWrapper($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pTileWrapper"));

        // line 6
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "url_generator", []), "generate", [0 => twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 6, $this->source); })()), "GetRouteName", []), 1 => ["sBrickId" => twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 6, $this->source); })()), "GetId", [])]], "method"), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 6, $this->source); })()), "GetRouteName", []), [], "array", false, true), "hash", [], "array", true, true)) {
            echo "#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "combodo.portal.instance.routes", [], "array"), twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 6, $this->source); })()), "GetRouteName", []), [], "array"), "hash", [], "array"), "html", null, true);
        }
        echo "\"
        ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 7, $this->source); })()), "GetRouteName", []), [], "array", false, true), "navigation_menu_attr", [], "array", true, true)) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "combodo.portal.instance.routes", [], "array"), twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 7, $this->source); })()), "GetRouteName", []), [], "array"), "navigation_menu_attr", [], "array"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 8
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 8, $this->source); })()), "GetModal", [])) {
            echo "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
        }
        // line 9
        echo "        class=\"tile vertical-center\" id=\"brick-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 9, $this->source); })()), "GetId", []), "html", null, true);
        echo "\" data-brick-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 9, $this->source); })()), "GetId", []), "html", null, true);
        echo "\">
        <div class=\"tile_decoration\">
            <span class=\"icon ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 11, $this->source); })()), "GetDecorationClassHome", []), "html", null, true);
        echo "\"></span>
        </div>
        <div class=\"tile_body\">
            <div class=\"tile_title\">";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 14, $this->source); })()), "GetTitleHome", [])]), "html", null, true);
        echo "</div>
            ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 15, $this->source); })()), "HasDescription", [])) {
            // line 16
            echo "                <div class=\"tile_description\">";
            echo call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 16, $this->source); })()), "GetDescription", [])]);
            echo "</div>
            ";
        }
        // line 18
        echo "        </div>
        </a>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/bricks/manage/tile-default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 18,  98 => 16,  96 => 15,  92 => 14,  86 => 11,  78 => 9,  73 => 8,  58 => 7,  49 => 6,  43 => 5,  36 => 21,  34 => 5,  30 => 4,  27 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# itop-portal-base/portal/src/views/bricks/tile.html.twig #}
{# Base brick tile layout #}

<div class=\"col-xs-12 col-sm-{{ oBrick.GetWidth }}\">
    {% block pTileWrapper %}
        <a href=\"{{ app.url_generator.generate(oBrick.GetRouteName, {sBrickId: oBrick.GetId}) }}{% if app['combodo.portal.instance.routes'][oBrick.GetRouteName]['hash'] is defined %}#{{ app['combodo.portal.instance.routes'][oBrick.GetRouteName]['hash'] }}{% endif %}\"
        {% if app['combodo.portal.instance.routes'][oBrick.GetRouteName]['navigation_menu_attr'] is defined %}{% for key, value in app['combodo.portal.instance.routes'][oBrick.GetRouteName]['navigation_menu_attr'] %} {{ key }}=\"{{ value }}\"{% endfor %}{% endif %}
        {% if oBrick.GetModal %}data-toggle=\"modal\" data-target=\"#modal-for-all\"{% endif %}
        class=\"tile vertical-center\" id=\"brick-{{ oBrick.GetId }}\" data-brick-id=\"{{ oBrick.GetId }}\">
        <div class=\"tile_decoration\">
            <span class=\"icon {{ oBrick.GetDecorationClassHome }}\"></span>
        </div>
        <div class=\"tile_body\">
            <div class=\"tile_title\">{{ oBrick.GetTitleHome|dict_s }}</div>
            {% if oBrick.HasDescription %}
                <div class=\"tile_description\">{{ oBrick.GetDescription|dict_s|raw }}</div>
            {% endif %}
        </div>
        </a>
    {% endblock %}
</div>", "itop-portal-base/portal/src/views/bricks/manage/tile-default.html.twig", "/var/www/itop/symfony-portal-poc/datamodels/2.x/itop-portal-base/portal-symfony/templates/itop-portal-base/portal/src/views/bricks/manage/tile-default.html.twig");
    }
}
