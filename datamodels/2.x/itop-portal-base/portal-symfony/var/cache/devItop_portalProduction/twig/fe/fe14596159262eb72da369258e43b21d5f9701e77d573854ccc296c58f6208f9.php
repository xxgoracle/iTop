<?php

/* itop-portal-base/portal/src/views/bricks/tile.html.twig */
class __TwigTemplate_1163b4aa1084080a15158f73ebc4225866d52ab339e8da286764e1b3e3d83e72 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "itop-portal-base/portal/src/views/bricks/tile.html.twig"));

        // line 3
        echo "
<div class=\"col-xs-12 col-sm-";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new Twig_Error_Runtime('Variable "brick" does not exist.', 4, $this->source); })()), "GetWidth", []), "html", null, true);
        echo "\">
\t";
        // line 5
        $this->displayBlock('pTileWrapper', $context, $blocks);
        // line 22
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_pTileWrapper($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pTileWrapper"));

        // line 6
        echo "\t\t<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "url_generator", []), "generate", [0 => twig_get_attribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new Twig_Error_Runtime('Variable "brick" does not exist.', 6, $this->source); })()), "GetRouteName", []), 1 => ["sBrickId" => twig_get_attribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new Twig_Error_Runtime('Variable "brick" does not exist.', 6, $this->source); })()), "GetId", [])]], "method"), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), twig_get_attribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new Twig_Error_Runtime('Variable "brick" does not exist.', 6, $this->source); })()), "GetRouteName", []), [], "array", false, true), "hash", [], "array", true, true)) {
            echo "#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "combodo.portal.instance.routes", [], "array"), twig_get_attribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new Twig_Error_Runtime('Variable "brick" does not exist.', 6, $this->source); })()), "GetRouteName", []), [], "array"), "hash", [], "array"), "html", null, true);
        }
        echo "\"
\t\t\t";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), twig_get_attribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new Twig_Error_Runtime('Variable "brick" does not exist.', 7, $this->source); })()), "GetRouteName", []), [], "array", false, true), "navigation_menu_attr", [], "array", true, true)) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "combodo.portal.instance.routes", [], "array"), twig_get_attribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new Twig_Error_Runtime('Variable "brick" does not exist.', 7, $this->source); })()), "GetRouteName", []), [], "array"), "navigation_menu_attr", [], "array"));
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
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new Twig_Error_Runtime('Variable "brick" does not exist.', 8, $this->source); })()), "GetModal", [])) {
            echo "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
        }
        // line 9
        echo "\t\t\t class=\"tile";
        echo "\" id=\"brick-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new Twig_Error_Runtime('Variable "brick" does not exist.', 9, $this->source); })()), "GetId", []), "html", null, true);
        echo "\" data-brick-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new Twig_Error_Runtime('Variable "brick" does not exist.', 9, $this->source); })()), "GetId", []), "html", null, true);
        echo "\">
\t\t<div class=\"tile_decoration\">
\t\t\t<span class=\"icon ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new Twig_Error_Runtime('Variable "brick" does not exist.', 11, $this->source); })()), "GetDecorationClassHome", []), "html", null, true);
        echo "\"></span>
\t\t\t
\t\t</div>
\t\t\t<div class=\"tile_body\">
\t\t\t\t<div class=\"tile_title\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new Twig_Error_Runtime('Variable "brick" does not exist.', 15, $this->source); })()), "GetTitleHome", [])]), "html", null, true);
        echo "</div>
\t\t\t\t";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new Twig_Error_Runtime('Variable "brick" does not exist.', 16, $this->source); })()), "HasDescription", [])) {
            // line 17
            echo "\t\t\t\t\t<div class=\"tile_description\">";
            echo call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["brick"]) || array_key_exists("brick", $context) ? $context["brick"] : (function () { throw new Twig_Error_Runtime('Variable "brick" does not exist.', 17, $this->source); })()), "GetDescription", [])]);
            echo "</div>
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t</div>
\t\t</a>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/bricks/tile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  100 => 17,  98 => 16,  94 => 15,  87 => 11,  78 => 9,  73 => 8,  58 => 7,  49 => 6,  43 => 5,  36 => 22,  34 => 5,  30 => 4,  27 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# itop-portal-base/portal/src/views/bricks/tile.html.twig #}
{# Base brick tile layout #}

<div class=\"col-xs-12 col-sm-{{ brick.GetWidth }}\">
\t{% block pTileWrapper %}
\t\t<a href=\"{{ app.url_generator.generate(brick.GetRouteName, {sBrickId: brick.GetId}) }}{% if app['combodo.portal.instance.routes'][brick.GetRouteName]['hash'] is defined %}#{{ app['combodo.portal.instance.routes'][brick.GetRouteName]['hash'] }}{% endif %}\"
\t\t\t{% if app['combodo.portal.instance.routes'][brick.GetRouteName]['navigation_menu_attr'] is defined %}{% for key, value in app['combodo.portal.instance.routes'][brick.GetRouteName]['navigation_menu_attr'] %} {{ key }}=\"{{ value }}\"{% endfor %}{% endif %}
\t\t\t{% if brick.GetModal %}data-toggle=\"modal\" data-target=\"#modal-for-all\"{% endif %}
\t\t\t class=\"tile{# vertical-center#}\" id=\"brick-{{ brick.GetId }}\" data-brick-id=\"{{ brick.GetId }}\">
\t\t<div class=\"tile_decoration\">
\t\t\t<span class=\"icon {{ brick.GetDecorationClassHome }}\"></span>
\t\t\t
\t\t</div>
\t\t\t<div class=\"tile_body\">
\t\t\t\t<div class=\"tile_title\">{{ brick.GetTitleHome|dict_s }}</div>
\t\t\t\t{% if brick.HasDescription %}
\t\t\t\t\t<div class=\"tile_description\">{{ brick.GetDescription|dict_s|raw }}</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</a>
\t{% endblock %}
</div>", "itop-portal-base/portal/src/views/bricks/tile.html.twig", "/var/www/itop/symfony-portal-poc/datamodels/2.x/itop-portal-base/portal-symfony/templates/itop-portal-base/portal/src/views/bricks/tile.html.twig");
    }
}
