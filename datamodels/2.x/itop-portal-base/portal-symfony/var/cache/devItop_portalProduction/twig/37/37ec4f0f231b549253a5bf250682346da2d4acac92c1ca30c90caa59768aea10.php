<?php

/* itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig */
class __TwigTemplate_dbfd8997874838accfa368a1548475e1faafbe19f027fb8502e8d1df43787d5a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig"));

        // line 1
        echo "/**
 * When clicking on a TagSet item in a list (BrowseBrick or ManageBrick), filters the list using the item label
 * @since 2.6 N°931 AttributeTagSet
 */
\$(\"#main-content\").on(\"click\", \".table.dataTable .attribute.attribute-set.attribute-tag-set > .attribute-set-item\", function () {
\tvar \$this = \$(this),
\t\t\$dataTableWrapper = \$this.closest(\".dataTables_wrapper\"),
\t\t\$searchField = \$dataTableWrapper.find(\".dataTables_filter input.form-control\"),
\t\tiNbInputsFound = \$searchField.length;

\tif (iNbInputsFound === 0)
\t{
\t\treturn;
\t}
\tif (iNbInputsFound > 1)
\t{
\t\treturn;
\t}

\tvar sTagLabel = \$this.text();
\t\$searchField.prop(\"value\", sTagLabel);
\t\$searchField.trigger(\"keyup\");
});";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * When clicking on a TagSet item in a list (BrowseBrick or ManageBrick), filters the list using the item label
 * @since 2.6 N°931 AttributeTagSet
 */
\$(\"#main-content\").on(\"click\", \".table.dataTable .attribute.attribute-set.attribute-tag-set > .attribute-set-item\", function () {
\tvar \$this = \$(this),
\t\t\$dataTableWrapper = \$this.closest(\".dataTables_wrapper\"),
\t\t\$searchField = \$dataTableWrapper.find(\".dataTables_filter input.form-control\"),
\t\tiNbInputsFound = \$searchField.length;

\tif (iNbInputsFound === 0)
\t{
\t\treturn;
\t}
\tif (iNbInputsFound > 1)
\t{
\t\treturn;
\t}

\tvar sTagLabel = \$this.text();
\t\$searchField.prop(\"value\", sTagLabel);
\t\$searchField.trigger(\"keyup\");
});", "itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig", "/var/www/itop/symfony-portal-poc/datamodels/2.x/itop-portal-base/portal-symfony/templates/itop-portal-base/portal/src/views/helpers/tagset_clic_handler.js.twig");
    }
}
