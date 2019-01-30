<?php

/* itop-portal-base/portal/src/views/home/layout.html.twig */
class __TwigTemplate_3205ad34c3693bcb3fd1663e86be7ab12b141006ea64bebc615d310fe461d706 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pMainWrapper' => [$this, 'block_pMainWrapper'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "templates", []), "layout", []), "itop-portal-base/portal/src/views/home/layout.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "itop-portal-base/portal/src/views/home/layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_pPageBodyClass($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageBodyClass"));

        echo "home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_pMainWrapper($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainWrapper"));

        // line 8
        $context["iCurrentTileIndex"] = 0;
        // line 9
        echo "<div class=\"container-fluid\" id=\"main-wrapper\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-9 col-md-10 col-sm-offset-3 col-md-offset-2\">
\t\t\t<section class=\"row tiles_wrapper\">
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "bricks_collection", [], "array"), "bricks_ordering", []), "home", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["brick"]) {
            // line 14
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["brick"], "GetVisibleHome", [])) {
                // line 15
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["aTilesRendering"] ?? null), twig_get_attribute($this->env, $this->source, $context["brick"], "GetId", []), [], "array", true, true)) {
                    // line 16
                    echo "\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["aTilesRendering"]) || array_key_exists("aTilesRendering", $context) ? $context["aTilesRendering"] : (function () { throw new Twig_Error_Runtime('Variable "aTilesRendering" does not exist.', 16, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["brick"], "GetId", []), [], "array");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 18
                    echo "\t\t\t\t\t\t\t";
                    $this->loadTemplate(("" . twig_get_attribute($this->env, $this->source, $context["brick"], "GetTileTemplatePath", [])), "itop-portal-base/portal/src/views/home/layout.html.twig", 18)->display(array_merge($context, ["oBrick" => $context["brick"]]));
                    // line 19
                    echo "\t\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t</section>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/home/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 22,  102 => 21,  99 => 20,  96 => 19,  93 => 18,  87 => 16,  84 => 15,  81 => 14,  64 => 13,  58 => 9,  56 => 8,  50 => 7,  38 => 5,  23 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# itop-portal-base-base/portal/src/views/home/layout.html.twig #}
{# Home layout #}
{% extends app['combodo.portal.instance.conf'].properties.templates.layout %}

{% block pPageBodyClass %}home{% endblock %}

{% block pMainWrapper %}
{% set iCurrentTileIndex = 0 %}
<div class=\"container-fluid\" id=\"main-wrapper\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-9 col-md-10 col-sm-offset-3 col-md-offset-2\">
\t\t\t<section class=\"row tiles_wrapper\">
\t\t\t\t{% for brick in app['bricks_collection'].bricks_ordering.home %}
\t\t\t\t\t{% if brick.GetVisibleHome %}
\t\t\t\t\t\t{% if aTilesRendering[brick.GetId] is defined %}
\t\t\t\t\t\t\t{{ aTilesRendering[brick.GetId]|raw }}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% include '' ~ brick.GetTileTemplatePath with {oBrick: brick} %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</section>
\t\t</div>
\t</div>
</div>
{% endblock %}", "itop-portal-base/portal/src/views/home/layout.html.twig", "/var/www/itop/symfony-portal-poc/datamodels/2.x/itop-portal-base/portal-symfony/templates/itop-portal-base/portal/src/views/home/layout.html.twig");
    }
}
