<?php

/* itop-portal-base/portal/src/views/layout.html.twig */
class __TwigTemplate_099d1a30ca3cc89b15377721fed7355543be3a708cef386c1724400fe8094c99 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pPageExtraMetas' => [$this, 'block_pPageExtraMetas'],
            'pPageTitle' => [$this, 'block_pPageTitle'],
            'pPageStylesheets' => [$this, 'block_pPageStylesheets'],
            'pStyleinline' => [$this, 'block_pStyleinline'],
            'pPageScripts' => [$this, 'block_pPageScripts'],
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pPageBodyWrapper' => [$this, 'block_pPageBodyWrapper'],
            'pEnvBannerWrapper' => [$this, 'block_pEnvBannerWrapper'],
            'pNavigationWrapper' => [$this, 'block_pNavigationWrapper'],
            'pNavigationTopMenuWrapper' => [$this, 'block_pNavigationTopMenuWrapper'],
            'pNavigationTopMenuLogo' => [$this, 'block_pNavigationTopMenuLogo'],
            'pNavigationTopBricks' => [$this, 'block_pNavigationTopBricks'],
            'pPageUIExtensionNavigationMenuTopbar' => [$this, 'block_pPageUIExtensionNavigationMenuTopbar'],
            'pNavigationSideMenuWrapper' => [$this, 'block_pNavigationSideMenuWrapper'],
            'pNavigationSideMenu' => [$this, 'block_pNavigationSideMenu'],
            'pPageUIExtensionNavigationMenuSidebar' => [$this, 'block_pPageUIExtensionNavigationMenuSidebar'],
            'pNavigationSideMenuLogo' => [$this, 'block_pNavigationSideMenuLogo'],
            'pMainWrapper' => [$this, 'block_pMainWrapper'],
            'pMainHeader' => [$this, 'block_pMainHeader'],
            'pMainContent' => [$this, 'block_pMainContent'],
            'pPageUIExtensionMainContent' => [$this, 'block_pPageUIExtensionMainContent'],
            'pPageFooter' => [$this, 'block_pPageFooter'],
            'pModalForAllWrapper' => [$this, 'block_pModalForAllWrapper'],
            'pModalForAlert' => [$this, 'block_pModalForAlert'],
            'pPageOverlay' => [$this, 'block_pPageOverlay'],
            'pPageUIExtensionBody' => [$this, 'block_pPageUIExtensionBody'],
            'pPageLiveScripts' => [$this, 'block_pPageLiveScripts'],
            'pPageLiveScriptHelpers' => [$this, 'block_pPageLiveScriptHelpers'],
            'pPageReadyScripts' => [$this, 'block_pPageReadyScripts'],
            'pPageExtensionsScripts' => [$this, 'block_pPageExtensionsScripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "itop-portal-base/portal/src/views/layout.html.twig"));

        // line 1
        echo "<!doctype html>
";
        // line 4
        echo "
";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.current_user", [], "array", true, true) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "combodo.current_user", [], "array")))) {
            // line 6
            echo "    ";
            $context["bUserConnected"] = true;
            // line 7
            echo "    ";
            $context["sUserFullname"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "combodo.current_user", [], "array"), "Get", [0 => "first_name"], "method") . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "combodo.current_user", [], "array"), "Get", [0 => "last_name"], "method"));
            // line 8
            echo "    ";
            $context["sUserEmail"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "combodo.current_user", [], "array"), "Get", [0 => "email"], "method");
            // line 9
            echo "    ";
            $context["sUserPhotoUrl"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "combodo.current_contact.photo_url", [], "array");
        } else {
            // line 11
            echo "    ";
            $context["bUserConnected"] = false;
            // line 12
            echo "    ";
            $context["sUserFullname"] = "";
            // line 13
            echo "    ";
            $context["sUserEmail"] = "";
            // line 14
            echo "    ";
            $context["sUserPhotoUrl"] = (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . "img/user-profile-default-256px.png");
        }
        // line 16
        echo "<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 22
        echo "    ";
        $this->displayBlock('pPageExtraMetas', $context, $blocks);
        // line 24
        echo "    <title>";
        $this->displayBlock('pPageTitle', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 25, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["images/favicon.ico"])), "html", null, true);
        echo "\" />

    ";
        // line 27
        $this->displayBlock('pPageStylesheets', $context, $blocks);
        // line 71
        echo "
    ";
        // line 72
        $this->displayBlock('pStyleinline', $context, $blocks);
        // line 80
        echo "
    ";
        // line 81
        $this->displayBlock('pPageScripts', $context, $blocks);
        // line 147
        echo "</head>
<body class=\"";
        // line 148
        $this->displayBlock('pPageBodyClass', $context, $blocks);
        echo "\">
";
        // line 149
        $this->displayBlock('pPageBodyWrapper', $context, $blocks);
        // line 397
        echo "
";
        // line 398
        $this->displayBlock('pPageLiveScripts', $context, $blocks);
        // line 516
        echo "
";
        // line 517
        $this->displayBlock('pPageExtensionsScripts', $context, $blocks);
        // line 525
        echo "</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_pPageExtraMetas($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageExtraMetas"));

        // line 23
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_pPageTitle($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageTitle"));

        if (((isset($context["sPageTitle"]) || array_key_exists("sPageTitle", $context)) &&  !(null === (isset($context["sPageTitle"]) || array_key_exists("sPageTitle", $context) ? $context["sPageTitle"] : (function () { throw new Twig_Error_Runtime('Variable "sPageTitle" does not exist.', 24, $this->source); })())))) {
            echo twig_escape_filter($this->env, (isset($context["sPageTitle"]) || array_key_exists("sPageTitle", $context) ? $context["sPageTitle"] : (function () { throw new Twig_Error_Runtime('Variable "sPageTitle" does not exist.', 24, $this->source); })()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_constant("ITOP_APPLICATION_SHORT"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["Page:DefaultTitle", twig_constant("ITOP_APPLICATION_SHORT")]), "html", null, true);
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_pPageStylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageStylesheets"));

        // line 28
        echo "        ";
        // line 29
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/bootstrap/css/bootstrap.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 31
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 33
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 33, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/css/dataTables.bootstrap.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 34, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/css/fixedHeader.bootstrap.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 35, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/css/responsive.bootstrap.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 36, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/css/scroller.bootstrap.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/css/select.bootstrap.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 38, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/css/select.dataTables.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 40
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["css/font-open-sans/font-open-sans.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 42
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 42, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["css/font-combodo/font-combodo.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 44
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 44, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["css/font-awesome/css/font-awesome.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 46
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/typeahead/css/typeaheadjs.bootstrap.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 47
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 47, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["css/selectize.default.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 48, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["css/magnific-popup.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["css/c3.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 51
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 51, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "themes", []), "bootstrap", [])]), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"css_bootstrap_theme\">
        ";
        // line 53
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "themes", []), "portal", [])]), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"css_portal\">
        ";
        // line 55
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.conf", [], "array", false, true), "ui_extensions", [], "any", false, true), "css_files", [], "any", true, true)) {
            // line 56
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "ui_extensions", []), "css_files", []));
            foreach ($context['_seq'] as $context["_key"] => $context["css_file"]) {
                // line 57
                echo "                <link href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [$context["css_file"]]), "html", null, true);
                echo "\" rel=\"stylesheet\">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        ";
        }
        // line 60
        echo "        ";
        // line 61
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.conf", [], "array", false, true), "properties", [], "any", false, true), "themes", [], "any", false, true), "custom", [], "any", true, true)) {
            // line 62
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 62, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "themes", []), "custom", [])]), "html", null, true);
            echo "\" rel=\"stylesheet\">
        ";
        }
        // line 64
        echo "        ";
        // line 65
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.conf", [], "array", false, true), "properties", [], "any", false, true), "themes", [], "any", false, true), "others", [], "any", true, true)) {
            // line 66
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 66, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "themes", []), "others", []));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 67
                echo "                <link href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [$context["theme"]]), "html", null, true);
                echo "\" rel=\"stylesheet\">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        ";
        }
        // line 70
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 72
    public function block_pStyleinline($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pStyleinline"));

        // line 73
        echo "        ";
        // line 74
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 74, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "ui_extensions", []), "css_inline", []))) {
            // line 75
            echo "            <style>
                ";
            // line 76
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 76, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "ui_extensions", []), "css_inline", []);
            echo "
            </style>
        ";
        }
        // line 79
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 81
    public function block_pPageScripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageScripts"));

        // line 82
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 82, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery-3.3.1.min.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 83
        if (call_user_func_array($this->env->getFunction('is_development_environment')->getCallable(), [])) {
            // line 84
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 84, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery-migrate-3.0.1.dev.js"])), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // line 86
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 86, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery-migrate-3.0.1.prod.min.js"])), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 88
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 88, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery-ui-1.11.4.custom.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 89, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery.magnific-popup.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 90, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery.iframe-transport.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 91, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery.fileupload.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 92, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/utils.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 93, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/d3.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 94, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/c3.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 95, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/bootstrap/js/bootstrap.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 96, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/latinise/latinise.min.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 98
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 98, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/jquery-visible/js/jquery.visible.min.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 100
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 100, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/jquery-base64/js/jquery.base64.min.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 102
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 102, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/moment-with-locales.min.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 104
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 104, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/js/jquery.dataTables.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 105, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/js/dataTables.bootstrap.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 106, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/js/dataTables.fixedHeader.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 107, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/js/dataTables.responsive.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 108, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/js/dataTables.scroller.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/js/dataTables.select.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 110, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/js/datetime-moment.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 111, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/dataTables.accentNeutraliseForFilter.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 113
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 113, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/export.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 115
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 115, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/ckeditor/ckeditor.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 116, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/ckeditor/adapters/jquery.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 118
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 118, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 120
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 120, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/typeahead/js/typeahead.bundle.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 121, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/handlebars/js/handlebars.min-768ddbd.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 123
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 123, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/selectize.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 124, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery.itop-set-widget.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 126
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 126, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/form_handler.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 127, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/form_field.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 128, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/subform_field.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 129, $this->source); })()), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/field_set.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 131
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 131, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/portal_form_handler.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 132, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/portal_form_field.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 133, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/portal_form_field_html.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 134, $this->source); })()), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/portal_form_field_set.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 136
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.conf", [], "array", false, true), "ui_extensions", [], "any", false, true), "js_files", [], "any", true, true)) {
            // line 137
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "ui_extensions", []), "js_files", []));
            foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
                // line 138
                echo "        <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [$context["js_file"]]), "html", null, true);
                echo "\"></script>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "        ";
        }
        // line 141
        echo "        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('.tile.tile_badge[data-toggle=\"tooltip\"]').tooltip({'html': true});
            });
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 148
    public function block_pPageBodyClass($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageBodyClass"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 149
    public function block_pPageBodyWrapper($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageBodyWrapper"));

        // line 150
        echo "    ";
        $this->displayBlock('pEnvBannerWrapper', $context, $blocks);
        // line 160
        echo "
    ";
        // line 161
        $this->displayBlock('pNavigationWrapper', $context, $blocks);
        // line 310
        echo "
    ";
        // line 311
        $this->displayBlock('pMainWrapper', $context, $blocks);
        // line 347
        echo "
    <footer id=\"footer-wrapper\">
        ";
        // line 349
        $this->displayBlock('pPageFooter', $context, $blocks);
        // line 352
        echo "    </footer>

    ";
        // line 354
        $this->displayBlock('pModalForAllWrapper', $context, $blocks);
        // line 363
        echo "    ";
        $this->displayBlock('pModalForAlert', $context, $blocks);
        // line 382
        echo "
    ";
        // line 383
        $this->displayBlock('pPageOverlay', $context, $blocks);
        // line 390
        echo "
    ";
        // line 391
        $this->displayBlock('pPageUIExtensionBody', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 150
    public function block_pEnvBannerWrapper($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pEnvBannerWrapper"));

        // line 151
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 151, $this->source); })()), "combodo.current_environment", [], "array") != "production")) {
            // line 152
            echo "            <div id=\"envbanner\" class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 153
            echo call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["Portal:EnvironmentBanner:Title", twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 153, $this->source); })()), "combodo.current_environment", [], "array"))]);
            echo "
                <button type=\"button\" onclick=\"window;location.href='";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 154, $this->source); })()), "url_generator", [], "array"), "generate", [0 => "p_home", 1 => ["switch_env" => "production"]], "method"), "html", null, true);
            echo "'\">
                    ";
            // line 155
            echo call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:EnvironmentBanner:GoToProduction"]);
            echo "
                </button>
            </div>
        ";
        }
        // line 159
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 161
    public function block_pNavigationWrapper($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pNavigationWrapper"));

        // line 162
        echo "        ";
        // line 163
        echo "        ";
        $this->displayBlock('pNavigationTopMenuWrapper', $context, $blocks);
        // line 234
        echo "
        ";
        // line 236
        echo "        ";
        $this->displayBlock('pNavigationSideMenuWrapper', $context, $blocks);
        // line 309
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 163
    public function block_pNavigationTopMenuWrapper($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pNavigationTopMenuWrapper"));

        // line 164
        echo "            <nav class=\"navbar navbar-fixed-top navbar-default visible-xs\" id=\"topbar\" role=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        ";
        // line 172
        $this->displayBlock('pNavigationTopMenuLogo', $context, $blocks);
        // line 181
        echo "                        <p class=\"navbar-text\">
                            <a class=\"navbar-link user_infos\" href=\"";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 182, $this->source); })()), "url_generator", []), "generate", [0 => "p_user_profile_brick"], "method"), "html", null, true);
        echo "\">
                                <span class=\"user_photo\" style=\"background-image: url('";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["sUserPhotoUrl"]) || array_key_exists("sUserPhotoUrl", $context) ? $context["sUserPhotoUrl"] : (function () { throw new Twig_Error_Runtime('Variable "sUserPhotoUrl" does not exist.', 183, $this->source); })()), "html", null, true);
        echo "');\"></span>
                                <span class=\"user_fullname\">";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["sUserFullname"]) || array_key_exists("sUserFullname", $context) ? $context["sUserFullname"] : (function () { throw new Twig_Error_Runtime('Variable "sUserFullname" does not exist.', 184, $this->source); })()), "html", null, true);
        echo "</span>
                            </a>
                        </p>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"navbar\">
                        <ul class=\"nav navbar-nav\">
                            ";
        // line 190
        $this->displayBlock('pNavigationTopBricks', $context, $blocks);
        // line 208
        echo "                            ";
        if ((isset($context["bUserConnected"]) || array_key_exists("bUserConnected", $context) ? $context["bUserConnected"] : (function () { throw new Twig_Error_Runtime('Variable "bUserConnected" does not exist.', 208, $this->source); })())) {
            // line 209
            echo "                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 210, $this->source); })()), "url_generator", []), "generate", [0 => "p_user_profile_brick"], "method"), "html", null, true);
            echo "\"><span class=\"brick_icon fa fa-user fa-2x fa-fw\"></span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil"]), "html", null, true);
            echo "</a></li>
                                ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 211, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "portals", []));
            foreach ($context['_seq'] as $context["_key"] => $context["aPortal"]) {
                // line 212
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["aPortal"], "id", []) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 212, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "id", []))) {
                    // line 213
                    echo "                                        ";
                    $context["sIconClass"] = (((twig_get_attribute($this->env, $this->source, $context["aPortal"], "id", []) == "backoffice")) ? ("fa-list-alt") : ("fa-external-link"));
                    // line 214
                    echo "                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aPortal"], "url", []), "html", null, true);
                    echo "\" target=\"_blank\"><span class=\"brick_icon fa ";
                    echo twig_escape_filter($this->env, (isset($context["sIconClass"]) || array_key_exists("sIconClass", $context) ? $context["sIconClass"] : (function () { throw new Twig_Error_Runtime('Variable "sIconClass" does not exist.', 214, $this->source); })()), "html", null, true);
                    echo " fa-2x fa-fw\"></span>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["aPortal"], "label", [])]), "html", null, true);
                    echo "</a></li>
                                    ";
                }
                // line 216
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aPortal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "                                ";
            // line 218
            echo "                                ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 218, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "portals", [])) > 1)) {
                // line 219
                echo "                                    <li role=\"separator\" class=\"divider\"></li>
                                ";
            }
            // line 221
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 221, $this->source); })()), "combodo.absolute_url", [], "array"), "html", null, true);
            echo "pages/logoff.php\"><span class=\"brick_icon fa fa-sign-out fa-2x fa-fw\"></span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:UserProfile:Navigation:Dropdown:Logout"]), "html", null, true);
            echo "</a></li>
                            ";
        }
        // line 223
        echo "                        </ul>
                    </div>

                    ";
        // line 226
        $this->displayBlock('pPageUIExtensionNavigationMenuTopbar', $context, $blocks);
        // line 231
        echo "                </div>
            </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 172
    public function block_pNavigationTopMenuLogo($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pNavigationTopMenuLogo"));

        // line 173
        echo "                            <a class=\"navbar-brand pull-right\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_config_parameter')->getCallable(), ["app_icon_url"]), "html", null, true);
        echo "\">
                                ";
        // line 174
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 174, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "logo", []))) {
            // line 175
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 175, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "logo", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 175, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "name", [])]), "html", null, true);
            echo "\" />
                                ";
        } else {
            // line 177
            echo "                                    iTop
                                ";
        }
        // line 179
        echo "                            </a>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 190
    public function block_pNavigationTopBricks($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pNavigationTopBricks"));

        // line 191
        echo "                                <li class=\"brick_menu_item ";
        if ( !(isset($context["oBrick"]) || array_key_exists("oBrick", $context))) {
            echo "active";
        }
        echo "\">
                                    <a href=\"";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 192, $this->source); })()), "url_generator", []), "generate", [0 => "p_home"], "method"), "html", null, true);
        echo "\">
                                        <span class=\"brick_icon fa fa-home fa-2x\"></span>
                                        ";
        // line 194
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Page:Home"]), "html", null, true);
        echo "
                                    </a>
                                </li>
                                ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 197, $this->source); })()), "bricks_collection", [], "array"), "bricks_ordering", []), "navigation_menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["brick"]) {
            // line 198
            echo "                                    ";
            if (((twig_get_attribute($this->env, $this->source, $context["brick"], "GetActive", []) && twig_get_attribute($this->env, $this->source, $context["brick"], "GetVisibleNavigationMenu", [])) &&  !(null === twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", [])))) {
                // line 199
                echo "                                        <li class=\"brick_menu_item ";
                if (((isset($context["oBrick"]) || array_key_exists("oBrick", $context)) && (twig_get_attribute($this->env, $this->source, $context["brick"], "id", []) == twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 199, $this->source); })()), "id", [])))) {
                    echo "active";
                }
                echo "\" data-brick-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brick"], "GetId", []), "html", null, true);
                echo "\">
                                            <a href=\"";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 200, $this->source); })()), "url_generator", []), "generate", [0 => twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", []), 1 => ["sBrickId" => twig_get_attribute($this->env, $this->source, $context["brick"], "GetId", [])]], "method"), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", []), [], "array", false, true), "hash", [], "array", true, true)) {
                    echo "#";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 200, $this->source); })()), "combodo.portal.instance.routes", [], "array"), twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", []), [], "array"), "hash", [], "array"), "html", null, true);
                }
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", []), [], "array", false, true), "navigation_menu_attr", [], "array", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 200, $this->source); })()), "combodo.portal.instance.routes", [], "array"), twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", []), [], "array"), "navigation_menu_attr", [], "array"));
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
                echo " ";
                if (twig_get_attribute($this->env, $this->source, $context["brick"], "GetModal", [])) {
                    echo "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
                }
                echo ">
                                            <span class=\"brick_icon ";
                // line 201
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brick"], "GetDecorationClassNavigationMenu", []), "html", null, true);
                echo "\"></span>
                                            ";
                // line 202
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["brick"], "GetTitleNavigationMenu", [])]), "html", null, true);
                echo "
                                            </a>
                                        </li>
                                    ";
            }
            // line 206
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 226
    public function block_pPageUIExtensionNavigationMenuTopbar($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageUIExtensionNavigationMenuTopbar"));

        // line 227
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.conf", [], "array", false, true), "ui_extensions", [], "any", false, true), "html", [], "any", false, true), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), [], "array", true, true)) {
            // line 228
            echo "                            ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 228, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "ui_extensions", []), "html", []), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), [], "array");
            echo "
                        ";
        }
        // line 230
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 236
    public function block_pNavigationSideMenuWrapper($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pNavigationSideMenuWrapper"));

        // line 237
        echo "            <nav class=\"navbar-default hidden-xs col-sm-3 col-md-2\" id=\"sidebar\" role=\"navigation\">
                <div class=\"user_card bg-primary\">
                    <div class=\"user_photo\" style=\"background-image: url('";
        // line 239
        echo twig_escape_filter($this->env, (isset($context["sUserPhotoUrl"]) || array_key_exists("sUserPhotoUrl", $context) ? $context["sUserPhotoUrl"] : (function () { throw new Twig_Error_Runtime('Variable "sUserPhotoUrl" does not exist.', 239, $this->source); })()), "html", null, true);
        echo "');\">
                    </div>
                    <div class=\"user_infos\">
                        <div class=\"user_fullname\">";
        // line 242
        echo twig_escape_filter($this->env, (isset($context["sUserFullname"]) || array_key_exists("sUserFullname", $context) ? $context["sUserFullname"] : (function () { throw new Twig_Error_Runtime('Variable "sUserFullname" does not exist.', 242, $this->source); })()), "html", null, true);
        echo "</div>
                        <div class=\"user_email dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"user_options\">
                                ";
        // line 245
        echo twig_escape_filter($this->env, (isset($context["sUserEmail"]) || array_key_exists("sUserEmail", $context) ? $context["sUserEmail"] : (function () { throw new Twig_Error_Runtime('Variable "sUserEmail" does not exist.', 245, $this->source); })()), "html", null, true);
        echo "
                                <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu user_options\" aria-labelledby=\"user_options\">
                                <li><a href=\"";
        // line 249
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 249, $this->source); })()), "url_generator", []), "generate", [0 => "p_user_profile_brick"], "method"), "html", null, true);
        echo "\"><span class=\"brick_icon fa fa-user fa-lg fa-fw\"></span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil"]), "html", null, true);
        echo "</a></li>
                                ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 250, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "portals", []));
        foreach ($context['_seq'] as $context["_key"] => $context["aPortal"]) {
            // line 251
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["aPortal"], "id", []) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 251, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "id", []))) {
                // line 252
                echo "                                        ";
                $context["sGlyphiconClass"] = (((twig_get_attribute($this->env, $this->source, $context["aPortal"], "id", []) == "backoffice")) ? ("fa-list-alt") : ("fa-external-link"));
                // line 253
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aPortal"], "url", []), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 253, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "allowed_portals", []), "opening_mode", []) == "tab")) {
                    echo "target=\"_blank\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["aPortal"], "label", [])]), "html", null, true);
                echo "\"><span class=\"brick_icon fa ";
                echo twig_escape_filter($this->env, (isset($context["sGlyphiconClass"]) || array_key_exists("sGlyphiconClass", $context) ? $context["sGlyphiconClass"] : (function () { throw new Twig_Error_Runtime('Variable "sGlyphiconClass" does not exist.', 253, $this->source); })()), "html", null, true);
                echo " fa-lg fa-fw\"></span>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["aPortal"], "label", [])]), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 255
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aPortal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "                                ";
        // line 257
        echo "                                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 257, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "portals", [])) > 1)) {
            // line 258
            echo "                                    <li role=\"separator\" class=\"divider\"></li>
                                ";
        }
        // line 260
        echo "                                <li><a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 260, $this->source); })()), "combodo.absolute_url", [], "array"), "html", null, true);
        echo "pages/logoff.php\"><span class=\"brick_icon fa fa-sign-out fa-lg fa-fw\"></span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:UserProfile:Navigation:Dropdown:Logout"]), "html", null, true);
        echo "</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"menu\">
                    ";
        // line 266
        $this->displayBlock('pNavigationSideMenu', $context, $blocks);
        // line 286
        echo "                </div>

                ";
        // line 288
        $this->displayBlock('pPageUIExtensionNavigationMenuSidebar', $context, $blocks);
        // line 293
        echo "
                ";
        // line 294
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 294, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "logo", []))) {
            // line 295
            echo "                    <div class=\"logo\">
                        ";
            // line 296
            $this->displayBlock('pNavigationSideMenuLogo', $context, $blocks);
            // line 305
            echo "                    </div>
                ";
        }
        // line 307
        echo "            </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 266
    public function block_pNavigationSideMenu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pNavigationSideMenu"));

        // line 267
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"brick_menu_item ";
        // line 268
        if ( !(isset($context["oBrick"]) || array_key_exists("oBrick", $context))) {
            echo "active";
        }
        echo "\">
                                <a href=\"";
        // line 269
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 269, $this->source); })()), "url_generator", []), "generate", [0 => "p_home"], "method"), "html", null, true);
        echo "\">
                                    <span class=\"brick_icon fa fa-home fa-2x\"></span>
                                    ";
        // line 271
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Page:Home"]), "html", null, true);
        echo "
                                </a>
                            </li>
                            ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 274, $this->source); })()), "bricks_collection", [], "array"), "bricks_ordering", []), "navigation_menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["brick"]) {
            // line 275
            echo "                                ";
            if (((twig_get_attribute($this->env, $this->source, $context["brick"], "GetActive", []) && twig_get_attribute($this->env, $this->source, $context["brick"], "GetVisibleNavigationMenu", [])) &&  !(null === twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", [])))) {
                // line 276
                echo "                                    <li class=\"brick_menu_item ";
                if (((isset($context["oBrick"]) || array_key_exists("oBrick", $context)) && (twig_get_attribute($this->env, $this->source, $context["brick"], "id", []) == twig_get_attribute($this->env, $this->source, (isset($context["oBrick"]) || array_key_exists("oBrick", $context) ? $context["oBrick"] : (function () { throw new Twig_Error_Runtime('Variable "oBrick" does not exist.', 276, $this->source); })()), "id", [])))) {
                    echo "active";
                }
                echo "\" data-brick-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brick"], "GetId", []), "html", null, true);
                echo "\">
                                        <a href=\"";
                // line 277
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 277, $this->source); })()), "url_generator", []), "generate", [0 => twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", []), 1 => ["sBrickId" => twig_get_attribute($this->env, $this->source, $context["brick"], "GetId", [])]], "method"), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", []), [], "array", false, true), "hash", [], "array", true, true)) {
                    echo "#";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 277, $this->source); })()), "combodo.portal.instance.routes", [], "array"), twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", []), [], "array"), "hash", [], "array"), "html", null, true);
                }
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", []), [], "array", false, true), "navigation_menu_attr", [], "array", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 277, $this->source); })()), "combodo.portal.instance.routes", [], "array"), twig_get_attribute($this->env, $this->source, $context["brick"], "GetRouteName", []), [], "array"), "navigation_menu_attr", [], "array"));
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
                echo " ";
                if (twig_get_attribute($this->env, $this->source, $context["brick"], "GetModal", [])) {
                    echo "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
                }
                echo ">
                                        <span class=\"brick_icon ";
                // line 278
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brick"], "GetDecorationClassNavigationMenu", []), "html", null, true);
                echo "\"></span>
                                        ";
                // line 279
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["brick"], "GetTitleNavigationMenu", [])]), "html", null, true);
                echo "
                                        </a>
                                    </li>
                                ";
            }
            // line 283
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "                        </ul>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 288
    public function block_pPageUIExtensionNavigationMenuSidebar($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageUIExtensionNavigationMenuSidebar"));

        // line 289
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.conf", [], "array", false, true), "ui_extensions", [], "any", false, true), "html", [], "any", false, true), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), [], "array", true, true)) {
            // line 290
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 290, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "ui_extensions", []), "html", []), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), [], "array");
            echo "
                    ";
        }
        // line 292
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 296
    public function block_pNavigationSideMenuLogo($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pNavigationSideMenuLogo"));

        // line 297
        echo "                            ";
        // line 298
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 298, $this->source); })()), "kernel", [], "array"), "debug", [])) {
            // line 299
            echo "                                <div style=\"position: fixed; bottom: 0px; left: 0px; z-index: 9999;\">Debug : Taille <span class=\"hidden-sm hidden-md hidden-lg\">XS</span><span class=\"hidden-xs hidden-md hidden-lg\">SM</span><span class=\"hidden-xs hidden-sm hidden-lg\">MD</span><span class=\"hidden-xs hidden-sm hidden-md\">LG</span></div>
                            ";
        }
        // line 301
        echo "                            <a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_config_parameter')->getCallable(), ["app_icon_url"]), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 301, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "name", [])]), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 302
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 302, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "logo", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 302, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "properties", []), "name", [])]), "html", null, true);
        echo "\" />
                            </a>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 311
    public function block_pMainWrapper($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainWrapper"));

        // line 312
        echo "        <div class=\"container-fluid\" id=\"main-wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-9 col-md-10 col-sm-offset-3 col-md-offset-2\">

                    ";
        // line 317
        echo "
                    ";
        // line 318
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 318, $this->source); })()), "combodo.current_user.session_messages", [], "array")) > 0)) {
            // line 319
            echo "                        <section class=\"row\" id=\"session-messages\">
                            <div class=\"col-xs-12\">
                                ";
            // line 321
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 321, $this->source); })()), "combodo.current_user.session_messages", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["sessionMessage"]) {
                // line 322
                echo "                                    <div class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sessionMessage"], "cssClass", [], "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sessionMessage"], "message", [], "array"), "html", null, true);
                echo "</div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sessionMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 324
            echo "                            </div>
                        </section>
                    ";
        }
        // line 327
        echo "
                    <section class=\"row\" id=\"main-header\">
                        ";
        // line 329
        $this->displayBlock('pMainHeader', $context, $blocks);
        // line 331
        echo "                    </section>

                    <section class=\"row\" id=\"main-content\">
                        ";
        // line 334
        $this->displayBlock('pMainContent', $context, $blocks);
        // line 336
        echo "                    </section>
                </div>
            </div>

            ";
        // line 340
        $this->displayBlock('pPageUIExtensionMainContent', $context, $blocks);
        // line 345
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 329
    public function block_pMainHeader($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainHeader"));

        // line 330
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 334
    public function block_pMainContent($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pMainContent"));

        // line 335
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 340
    public function block_pPageUIExtensionMainContent($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageUIExtensionMainContent"));

        // line 341
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.conf", [], "array", false, true), "ui_extensions", [], "any", false, true), "html", [], "any", false, true), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_MAIN_CONTENT"), [], "array", true, true)) {
            // line 342
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 342, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "ui_extensions", []), "html", []), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_MAIN_CONTENT"), [], "array");
            echo "
                ";
        }
        // line 344
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 349
    public function block_pPageFooter($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageFooter"));

        // line 350
        echo "            ";
        // line 351
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 354
    public function block_pModalForAllWrapper($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pModalForAllWrapper"));

        // line 355
        echo "        <div class=\"modal fade\" id=\"modal-for-all\" role=\"dialog\" tabindex=\"-1\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    ";
        // line 358
        $this->loadTemplate("itop-portal-base/portal/src/views/helpers/loader.html.twig", "itop-portal-base/portal/src/views/layout.html.twig", 358)->display($context);
        // line 359
        echo "                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 363
    public function block_pModalForAlert($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pModalForAlert"));

        // line 364
        echo "        <div class=\"modal fade\" id=\"modal-for-alert\" role=\"dialog\" tabindex=\"-1\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 368
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Button:Close"]), "html", null, true);
        echo "\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"alert\">
                        </div>
                        <div class=\"text-right\">
                            <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
        // line 375
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Button:Close"]), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 383
    public function block_pPageOverlay($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageOverlay"));

        // line 384
        echo "        <div id=\"page_overlay\" class=\"global_overlay\">
            <div class=\"overlay_content\">
                ";
        // line 386
        $this->loadTemplate("itop-portal-base/portal/src/views/helpers/loader.html.twig", "itop-portal-base/portal/src/views/layout.html.twig", 386)->display($context);
        // line 387
        echo "            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 391
    public function block_pPageUIExtensionBody($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageUIExtensionBody"));

        // line 392
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.conf", [], "array", false, true), "ui_extensions", [], "any", false, true), "html", [], "any", false, true), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_BODY"), [], "array", true, true)) {
            // line 393
            echo "            ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 393, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "ui_extensions", []), "html", []), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_BODY"), [], "array");
            echo "
        ";
        }
        // line 395
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 398
    public function block_pPageLiveScripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageLiveScripts"));

        // line 399
        echo "    <script type=\"text/javascript\">
        ";
        // line 400
        $this->displayBlock('pPageLiveScriptHelpers', $context, $blocks);
        // line 454
        echo "
        \$(document).ready(function(){
            ";
        // line 456
        $this->displayBlock('pPageReadyScripts', $context, $blocks);
        // line 513
        echo "        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 400
    public function block_pPageLiveScriptHelpers($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageLiveScriptHelpers"));

        // line 401
        echo "        // Helper to get the application root url
        var GetAbsoluteUrlAppRoot = function()
        {
            return '";
        // line 404
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 404, $this->source); })()), "combodo.absolute_url", [], "array"), "html", null, true);
        echo "';
        };
        // Helper to add a parameter to an url
        var AddParameterToUrl = function(sUrl, sParamName, sParamValue)
        {
            sUrl += (sUrl.split('?')[1] ? '&':'?') + sParamName + '=' + sParamValue;
            return sUrl;
        };
        // Test is sString is a valid JSON string
        var IsJSONString = function(sString)
        {
            try {
                JSON.parse(sString);
            } catch (oException) {
                return false;
            }
            return true;
        };
        var GetContentLoaderTemplate = function()
        {
            return '<div class=\"content_loader\"><div class=\"icon glyphicon glyphicon-refresh\"></div><div class=\"message\">";
        // line 424
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Page:PleaseWait"]), "html", null, true);
        echo "</div></div>';
        };
        var ShowLoginDialog = function()
        {
            var oModalElem = \$('#modal-for-alert').clone();
            oModalElem.attr('id', '');
            oModalElem.find('.modal-content .modal-header .modal-title').html('";
        // line 430
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Error:HTTP:401"]), "js"), "html", null, true);
        echo "');
            oModalElem.find('.modal-content .modal-body .alert').addClass('alert-danger').html('";
        // line 431
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:ErrorUserLoggedOut"]), "js"), "html", null, true);
        echo "');

            oModalElem.find('.modal-content .modal-body button').replaceWith( \$('<button type=\"button\" class=\"btn btn-primary\" onclick=\"javascript:window.location.reload();\">";
        // line 433
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:LogOff:ClickHereToLoginAgain"]), "js"), "html", null, true);
        echo "</button>') );

            oModalElem.appendTo('body');
            oModalElem.modal('show');
        };
        var ShowErrorDialog = function(sBody, sTitle)
        {
            if(sTitle === undefined)
            {
                sTitle = '";
        // line 442
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Error:HTTP:500"]), "js"), "html", null, true);
        echo "';
            }
            if(sBody === undefined)
            {
                sBody = '";
        // line 446
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["Error:XHR:Fail", twig_constant("ITOP_APPLICATION_SHORT")]), "js"), "html", null, true);
        echo "';
            }
            var oModalElem = \$('#modal-for-alert');
            oModalElem.find('.modal-content .modal-header .modal-title').html(sTitle);
            oModalElem.find('.modal-content .modal-body .alert').addClass('alert-danger').html(sBody);
            oModalElem.modal('show');
        };
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 456
    public function block_pPageReadyScripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageReadyScripts"));

        // line 457
        echo "            // Hack to enable a same modal to load content from different urls
            \$('body').on('hidden.bs.modal', '.modal#modal-for-all', function () {
                \$(this).removeData('bs.modal');
                \$(this).find('.modal-content').html(GetContentLoaderTemplate());
            });
            // Hack to enable multiple modals by making sure the .modal-open class is set to the <body> when there is at least one modal open left
            \$('body').on('hidden.bs.modal', function () {
                if(\$('.modal.in').length > 0)
                {
                    \$('body').addClass('modal-open');
                }
            });
            // Hide tooltips when a modal is opening, otherwise it might be overlapping it
            \$('body').on('show.bs.modal', function () {
                \$(this).find('.tooltip.in').tooltip('hide');
            });
            // Display a error message on modal if the content could not be loaded.
            // Note : As of now, we can't display a more detailled message based on the response because Bootstrap doesn't pass response data with the loaded event.
            \$('body').on('loaded.bs.modal', function (oEvent) {
                var sModalContent = \$(oEvent.target).find('.modal-content').html();

                if( (sModalContent === '') || (sModalContent.replace(/[\\n\\r\\t]+/g, '') === GetContentLoaderTemplate()) )
                {
                    \$(oEvent.target).modal('hide');
                }
            });

            // Handle AJAX errors (exceptions (500), logout (401), ...)
            \$(document).ajaxError(function(oEvent, oXHR, oSettings, sError){
                if(oXHR.status === 401)
                {
                    ShowLoginDialog();
                }
                else if(oXHR.status === 404)
                {
                    ShowErrorDialog('";
        // line 492
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:ObjectDoesNotExist"]), "js"), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Error:HTTP:404"]), "js"), "html", null, true);
        echo "');
                }
                else if(oXHR.responseText !== undefined && IsJSONString(oXHR.responseText) === true)
                {
                    var oData = JSON.parse(oXHR.responseText);
                    // Catching AJAX exception with detailed error.
                    if( (oData.error_message !== undefined) && (oData.error_title !== undefined) )
                    {
                        ShowErrorDialog(oData.error_message, oData.error_title);
                    }
                    else
                    {
                        ShowErrorDialog();
                    }
                }
                else
                {
                    ShowErrorDialog();
                }
            });
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 517
    public function block_pPageExtensionsScripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pPageExtensionsScripts"));

        // line 518
        echo "    ";
        // line 519
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 519, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "ui_extensions", []), "js_inline", []))) {
            // line 520
            echo "        <script type=\"text/javascript\">
            ";
            // line 521
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 521, $this->source); })()), "combodo.portal.instance.conf", [], "array"), "ui_extensions", []), "js_inline", []);
            echo "
        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/src/views/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1642 => 521,  1639 => 520,  1636 => 519,  1634 => 518,  1628 => 517,  1598 => 492,  1561 => 457,  1555 => 456,  1540 => 446,  1533 => 442,  1521 => 433,  1516 => 431,  1512 => 430,  1503 => 424,  1480 => 404,  1475 => 401,  1469 => 400,  1460 => 513,  1458 => 456,  1454 => 454,  1452 => 400,  1449 => 399,  1443 => 398,  1436 => 395,  1430 => 393,  1427 => 392,  1421 => 391,  1412 => 387,  1410 => 386,  1406 => 384,  1400 => 383,  1386 => 375,  1376 => 368,  1370 => 364,  1364 => 363,  1354 => 359,  1352 => 358,  1347 => 355,  1341 => 354,  1334 => 351,  1332 => 350,  1326 => 349,  1319 => 344,  1313 => 342,  1310 => 341,  1304 => 340,  1297 => 335,  1291 => 334,  1284 => 330,  1278 => 329,  1270 => 345,  1268 => 340,  1262 => 336,  1260 => 334,  1255 => 331,  1253 => 329,  1249 => 327,  1244 => 324,  1233 => 322,  1229 => 321,  1225 => 319,  1223 => 318,  1220 => 317,  1214 => 312,  1208 => 311,  1196 => 302,  1189 => 301,  1185 => 299,  1182 => 298,  1180 => 297,  1174 => 296,  1167 => 292,  1161 => 290,  1158 => 289,  1152 => 288,  1144 => 284,  1138 => 283,  1131 => 279,  1127 => 278,  1100 => 277,  1091 => 276,  1088 => 275,  1084 => 274,  1078 => 271,  1073 => 269,  1067 => 268,  1064 => 267,  1058 => 266,  1050 => 307,  1046 => 305,  1044 => 296,  1041 => 295,  1039 => 294,  1036 => 293,  1034 => 288,  1030 => 286,  1028 => 266,  1016 => 260,  1012 => 258,  1009 => 257,  1007 => 256,  1001 => 255,  985 => 253,  982 => 252,  979 => 251,  975 => 250,  969 => 249,  962 => 245,  956 => 242,  950 => 239,  946 => 237,  940 => 236,  933 => 230,  927 => 228,  924 => 227,  918 => 226,  911 => 207,  905 => 206,  898 => 202,  894 => 201,  867 => 200,  858 => 199,  855 => 198,  851 => 197,  845 => 194,  840 => 192,  833 => 191,  827 => 190,  819 => 179,  815 => 177,  807 => 175,  805 => 174,  800 => 173,  794 => 172,  785 => 231,  783 => 226,  778 => 223,  770 => 221,  766 => 219,  763 => 218,  761 => 217,  755 => 216,  745 => 214,  742 => 213,  739 => 212,  735 => 211,  729 => 210,  726 => 209,  723 => 208,  721 => 190,  712 => 184,  708 => 183,  704 => 182,  701 => 181,  699 => 172,  689 => 164,  683 => 163,  676 => 309,  673 => 236,  670 => 234,  667 => 163,  665 => 162,  659 => 161,  652 => 159,  645 => 155,  641 => 154,  637 => 153,  634 => 152,  631 => 151,  625 => 150,  618 => 391,  615 => 390,  613 => 383,  610 => 382,  607 => 363,  605 => 354,  601 => 352,  599 => 349,  595 => 347,  593 => 311,  590 => 310,  588 => 161,  585 => 160,  582 => 150,  576 => 149,  565 => 148,  553 => 141,  550 => 140,  541 => 138,  536 => 137,  533 => 136,  529 => 134,  525 => 133,  521 => 132,  516 => 131,  512 => 129,  508 => 128,  504 => 127,  499 => 126,  495 => 124,  490 => 123,  486 => 121,  481 => 120,  476 => 118,  472 => 116,  467 => 115,  462 => 113,  458 => 111,  454 => 110,  450 => 109,  446 => 108,  442 => 107,  438 => 106,  434 => 105,  429 => 104,  424 => 102,  419 => 100,  414 => 98,  410 => 96,  406 => 95,  402 => 94,  398 => 93,  394 => 92,  390 => 91,  386 => 90,  382 => 89,  377 => 88,  371 => 86,  365 => 84,  363 => 83,  358 => 82,  352 => 81,  345 => 79,  339 => 76,  336 => 75,  333 => 74,  331 => 73,  325 => 72,  318 => 70,  315 => 69,  306 => 67,  301 => 66,  298 => 65,  296 => 64,  290 => 62,  287 => 61,  285 => 60,  282 => 59,  273 => 57,  268 => 56,  265 => 55,  260 => 53,  255 => 51,  251 => 49,  247 => 48,  243 => 47,  238 => 46,  233 => 44,  228 => 42,  223 => 40,  219 => 38,  215 => 37,  211 => 36,  207 => 35,  203 => 34,  198 => 33,  193 => 31,  188 => 29,  186 => 28,  180 => 27,  162 => 24,  155 => 23,  149 => 22,  141 => 525,  139 => 517,  136 => 516,  134 => 398,  131 => 397,  129 => 149,  125 => 148,  122 => 147,  120 => 81,  117 => 80,  115 => 72,  112 => 71,  110 => 27,  105 => 25,  100 => 24,  97 => 22,  90 => 16,  86 => 14,  83 => 13,  80 => 12,  77 => 11,  73 => 9,  70 => 8,  67 => 7,  64 => 6,  62 => 5,  59 => 4,  56 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
{# layout.html.twig #}
{# Base layout #}

{% if app['combodo.current_user'] is defined and app['combodo.current_user'] is not null %}
    {% set bUserConnected = true %}
    {% set sUserFullname = app['combodo.current_user'].Get('first_name') ~ ' ' ~ app['combodo.current_user'].Get('last_name') %}
    {% set sUserEmail = app['combodo.current_user'].Get('email') %}
    {% set sUserPhotoUrl = app['combodo.current_contact.photo_url'] %}
{% else %}
    {% set bUserConnected = false %}
    {% set sUserFullname = '' %}
    {% set sUserEmail = '' %}
    {% set sUserPhotoUrl = app['combodo.portal.base.absolute_url'] ~ 'img/user-profile-default-256px.png' %}
{% endif %}
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {# This block can be used to add your own meta tags by extending the default template #}
    {% block pPageExtraMetas %}
    {% endblock %}
    <title>{% block pPageTitle %}{% if sPageTitle is defined and sPageTitle is not null %}{{ sPageTitle }} - {{ constant('ITOP_APPLICATION_SHORT') }}{% else %}{{ 'Page:DefaultTitle'|dict_format(constant('ITOP_APPLICATION_SHORT')) }}{% endif %}{% endblock %}</title>
    <link rel=\"shortcut icon\" href=\"{{ app['combodo.absolute_url'] ~ 'images/favicon.ico'|add_itop_version }}\" />

    {% block pPageStylesheets %}
        {# First bootstrap core, lib themes, then bootstrap theme, portal adjustements #}
        <link href=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/bootstrap/css/bootstrap.min.css'|add_itop_version }}\" rel=\"stylesheet\">
        {# - Bootstrap Datetime picker #}
        <link href=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'|add_itop_version }}\" rel=\"stylesheet\">
        {# - Datatables #}
        <link href=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/datatables/css/dataTables.bootstrap.min.css'|add_itop_version }}\" rel=\"stylesheet\">
        <link href=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/datatables/css/fixedHeader.bootstrap.min.css'|add_itop_version }}\" rel=\"stylesheet\">
        <link href=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/datatables/css/responsive.bootstrap.min.css'|add_itop_version }}\" rel=\"stylesheet\">
        <link href=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/datatables/css/scroller.bootstrap.min.css'|add_itop_version }}\" rel=\"stylesheet\">
        <link href=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/datatables/css/select.bootstrap.min.css'|add_itop_version }}\" rel=\"stylesheet\">
        <link href=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/datatables/css/select.dataTables.min.css'|add_itop_version }}\" rel=\"stylesheet\">
        {# - Font OpenSans #}
        <link href=\"{{ app['combodo.absolute_url'] ~ 'css/font-open-sans/font-open-sans.css'|add_itop_version }}\" rel=\"stylesheet\">
        {# - Font Combodo #}
        <link href=\"{{ app['combodo.absolute_url'] ~ 'css/font-combodo/font-combodo.css'|add_itop_version }}\" rel=\"stylesheet\">
        {# - Font awesome #}
        <link href=\"{{ app['combodo.absolute_url'] ~ 'css/font-awesome/css/font-awesome.min.css'|add_itop_version }}\" rel=\"stylesheet\">
        {# - Misc libs #}
        <link href=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/typeahead/css/typeaheadjs.bootstrap.css'|add_itop_version }}\" rel=\"stylesheet\">
        <link href=\"{{ app['combodo.absolute_url'] ~ 'css/selectize.default.css'|add_itop_version }}\" rel=\"stylesheet\">
        <link href=\"{{ app['combodo.absolute_url'] ~ 'css/magnific-popup.css'|add_itop_version }}\" rel=\"stylesheet\">
        <link href=\"{{ app['combodo.absolute_url'] ~ 'css/c3.min.css'|add_itop_version }}\" rel=\"stylesheet\">
        {# - Bootstrap theme #}
        <link href=\"{{ app['combodo.portal.instance.conf'].properties.themes.bootstrap|add_itop_version }}\" rel=\"stylesheet\" id=\"css_bootstrap_theme\">
        {# - Portal adjustments for BS theme #}
        <link href=\"{{ app['combodo.portal.instance.conf'].properties.themes.portal|add_itop_version }}\" rel=\"stylesheet\" id=\"css_portal\">
        {# UI Extensions CSS, in an undefined order #}
        {% if app['combodo.portal.instance.conf'].ui_extensions.css_files is defined %}
            {% for css_file in app['combodo.portal.instance.conf'].ui_extensions.css_files %}
                <link href=\"{{ css_file|add_itop_version }}\" rel=\"stylesheet\">
            {% endfor %}
        {% endif %}
        {# Custom CSS that is supposed to do adjustments to the portal #}
        {% if app['combodo.portal.instance.conf'].properties.themes.custom is defined %}
            <link href=\"{{ app['combodo.portal.instance.conf'].properties.themes.custom|add_itop_version }}\" rel=\"stylesheet\">
        {% endif %}
        {# Others CSS that will come after the theme/portal/custom, in an undefined order #}
        {% if app['combodo.portal.instance.conf'].properties.themes.others is defined %}
            {% for theme in app['combodo.portal.instance.conf'].properties.themes.others %}
                <link href=\"{{ theme|add_itop_version }}\" rel=\"stylesheet\">
            {% endfor %}
        {% endif %}
    {% endblock %}

    {% block pStyleinline %}
        {# UI Extensions inline CSS #}
        {% if app['combodo.portal.instance.conf'].ui_extensions.css_inline is not null %}
            <style>
                {{ app['combodo.portal.instance.conf'].ui_extensions.css_inline|raw }}
            </style>
        {% endif %}
    {% endblock %}

    {% block pPageScripts %}
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/jquery-3.3.1.min.js'|add_itop_version }}\"></script>
        {% if is_development_environment() %}
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/jquery-migrate-3.0.1.dev.js'|add_itop_version }}\"></script>
        {% else %}
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/jquery-migrate-3.0.1.prod.min.js'|add_itop_version }}\"></script>
        {% endif %}
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/jquery-ui-1.11.4.custom.min.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/jquery.magnific-popup.min.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/jquery.iframe-transport.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/jquery.fileupload.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/utils.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/d3.min.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/c3.min.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/bootstrap/js/bootstrap.min.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/latinise/latinise.min.js'|add_itop_version }}\"></script>
        {# Visible.js to check if an element is visible on screen #}
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/jquery-visible/js/jquery.visible.min.js'|add_itop_version }}\"></script>
        {# Base64.js #}
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/jquery-base64/js/jquery.base64.min.js'|add_itop_version }}\"></script>
        {# Moment.js with locales#}
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/moment-with-locales.min.js'|add_itop_version }}\"></script>
        {# Datatables #}
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/datatables/js/jquery.dataTables.min.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/datatables/js/dataTables.bootstrap.min.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/datatables/js/dataTables.fixedHeader.min.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/datatables/js/dataTables.responsive.min.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/datatables/js/dataTables.scroller.min.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/datatables/js/dataTables.select.min.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/datatables/js/datetime-moment.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'js/dataTables.accentNeutraliseForFilter.js'|add_itop_version }}\"></script>
        {# Export for Datatables #}
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'js/export.js'|add_itop_version }}\"></script>
        {# CKEditor files for HTML WYSIWYG #}
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/ckeditor/ckeditor.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/ckeditor/adapters/jquery.js'|add_itop_version }}\"></script>
        {# Date-time picker for Bootstrap #}
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js'|add_itop_version }}\"></script>
        {# Typeahead files for autocomplete #}
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/typeahead/js/typeahead.bundle.min.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'lib/handlebars/js/handlebars.min-768ddbd.js'|add_itop_version }}\"></script>
        {# Selectize for sets #}
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/selectize.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/jquery.itop-set-widget.js'|add_itop_version }}\"></script>
        {# Form files #}
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/form_handler.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/form_field.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/subform_field.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.absolute_url'] ~ 'js/field_set.js'|add_itop_version }}\"></script>
        {# Form files for portal #}
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'js/portal_form_handler.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'js/portal_form_field.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'js/portal_form_field_html.js'|add_itop_version }}\"></script>
        <script type=\"text/javascript\" src=\"{{ app['combodo.portal.base.absolute_url'] ~ 'js/portal_form_field_set.js'|add_itop_version }}\"></script>
        {# UI Extensions JS, in an undefined order #}
        {% if app['combodo.portal.instance.conf'].ui_extensions.js_files is defined %}
        {% for js_file in app['combodo.portal.instance.conf'].ui_extensions.js_files %}
        <script type=\"text/javascript\" src=\"{{ js_file|add_itop_version }}\"></script>
        {% endfor %}
        {% endif %}
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('.tile.tile_badge[data-toggle=\"tooltip\"]').tooltip({'html': true});
            });
        </script>
    {% endblock %}
</head>
<body class=\"{% block pPageBodyClass %}{% endblock %}\">
{% block pPageBodyWrapper %}
    {% block pEnvBannerWrapper %}
        {% if app['combodo.current_environment'] != 'production' %}
            <div id=\"envbanner\" class=\"alert alert-danger\" role=\"alert\">
                {{ 'Portal:EnvironmentBanner:Title'|dict_format( app['combodo.current_environment']|upper )|raw }}
                <button type=\"button\" onclick=\"window;location.href='{{ app['url_generator'].generate('p_home', {'switch_env': 'production'}) }}'\">
                    {{ 'Portal:EnvironmentBanner:GoToProduction'|dict_s|raw }}
                </button>
            </div>
        {% endif %}
    {% endblock %}

    {% block pNavigationWrapper %}
        {# Topbar navigation menu for mobile screens #}
        {% block pNavigationTopMenuWrapper %}
            <nav class=\"navbar navbar-fixed-top navbar-default visible-xs\" id=\"topbar\" role=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        {% block pNavigationTopMenuLogo %}
                            <a class=\"navbar-brand pull-right\" href=\"{{ get_config_parameter('app_icon_url') }}\">
                                {% if app['combodo.portal.instance.conf'].properties.logo is not null %}
                                    <img src=\"{{ app['combodo.portal.instance.conf'].properties.logo }}\" alt=\"{{ app['combodo.portal.instance.conf'].properties.name|dict_s }}\" />
                                {% else %}
                                    iTop
                                {% endif %}
                            </a>
                        {% endblock %}
                        <p class=\"navbar-text\">
                            <a class=\"navbar-link user_infos\" href=\"{{ app.url_generator.generate('p_user_profile_brick') }}\">
                                <span class=\"user_photo\" style=\"background-image: url('{{ sUserPhotoUrl }}');\"></span>
                                <span class=\"user_fullname\">{{ sUserFullname }}</span>
                            </a>
                        </p>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"navbar\">
                        <ul class=\"nav navbar-nav\">
                            {% block pNavigationTopBricks %}
                                <li class=\"brick_menu_item {% if oBrick is not defined %}active{% endif %}\">
                                    <a href=\"{{ app.url_generator.generate('p_home') }}\">
                                        <span class=\"brick_icon fa fa-home fa-2x\"></span>
                                        {{ 'Page:Home'|dict_s }}
                                    </a>
                                </li>
                                {% for brick in app['bricks_collection'].bricks_ordering.navigation_menu %}
                                    {% if brick.GetActive and brick.GetVisibleNavigationMenu and brick.GetRouteName is not null %}
                                        <li class=\"brick_menu_item {% if oBrick is defined and brick.id == oBrick.id %}active{% endif %}\" data-brick-id=\"{{ brick.GetId }}\">
                                            <a href=\"{{ app.url_generator.generate(brick.GetRouteName, {sBrickId: brick.GetId}) }}{% if app['combodo.portal.instance.routes'][brick.GetRouteName]['hash'] is defined %}#{{ app['combodo.portal.instance.routes'][brick.GetRouteName]['hash'] }}{% endif %}\" {% if app['combodo.portal.instance.routes'][brick.GetRouteName]['navigation_menu_attr'] is defined %}{% for key, value in app['combodo.portal.instance.routes'][brick.GetRouteName]['navigation_menu_attr'] %} {{ key }}=\"{{ value }}\"{% endfor %}{% endif %} {% if brick.GetModal %}data-toggle=\"modal\" data-target=\"#modal-for-all\"{% endif %}>
                                            <span class=\"brick_icon {{ brick.GetDecorationClassNavigationMenu }}\"></span>
                                            {{ brick.GetTitleNavigationMenu|dict_s }}
                                            </a>
                                        </li>
                                    {% endif %}
                                {% endfor %}
                            {% endblock %}
                            {% if bUserConnected %}
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"{{ app.url_generator.generate('p_user_profile_brick') }}\"><span class=\"brick_icon fa fa-user fa-2x fa-fw\"></span>{{ 'Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil'|dict_s }}</a></li>
                                {% for aPortal in app['combodo.portal.instance.conf'].portals %}
                                    {% if aPortal.id != app['combodo.portal.instance.conf'].properties.id %}
                                        {% set sIconClass = (aPortal.id == 'backoffice') ? 'fa-list-alt' : 'fa-external-link' %}
                                        <li><a href=\"{{ aPortal.url }}\" target=\"_blank\"><span class=\"brick_icon fa {{ sIconClass }} fa-2x fa-fw\"></span>{{ aPortal.label|dict_s }}</a></li>
                                    {% endif %}
                                {% endfor %}
                                {# We display the separator only if the user has more then 1 portal. Meaning default portal + console or several portal at least #}
                                {% if app['combodo.portal.instance.conf'].portals|length > 1 %}
                                    <li role=\"separator\" class=\"divider\"></li>
                                {% endif %}
                                <li><a href=\"{{ app['combodo.absolute_url'] }}pages/logoff.php\"><span class=\"brick_icon fa fa-sign-out fa-2x fa-fw\"></span>{{ 'Brick:Portal:UserProfile:Navigation:Dropdown:Logout'|dict_s }}</a></li>
                            {% endif %}
                        </ul>
                    </div>

                    {% block pPageUIExtensionNavigationMenuTopbar %}
                        {% if app['combodo.portal.instance.conf'].ui_extensions.html[constant('iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU')] is defined %}
                            {{ app['combodo.portal.instance.conf'].ui_extensions.html[constant('iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU')]|raw }}
                        {% endif %}
                    {% endblock %}
                </div>
            </nav>
        {% endblock %}

        {# Sidebar navigation menu for normal screens #}
        {% block pNavigationSideMenuWrapper %}
            <nav class=\"navbar-default hidden-xs col-sm-3 col-md-2\" id=\"sidebar\" role=\"navigation\">
                <div class=\"user_card bg-primary\">
                    <div class=\"user_photo\" style=\"background-image: url('{{ sUserPhotoUrl }}');\">
                    </div>
                    <div class=\"user_infos\">
                        <div class=\"user_fullname\">{{ sUserFullname }}</div>
                        <div class=\"user_email dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"user_options\">
                                {{ sUserEmail }}
                                <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu user_options\" aria-labelledby=\"user_options\">
                                <li><a href=\"{{ app.url_generator.generate('p_user_profile_brick') }}\"><span class=\"brick_icon fa fa-user fa-lg fa-fw\"></span>{{ 'Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil'|dict_s }}</a></li>
                                {% for aPortal in app['combodo.portal.instance.conf'].portals %}
                                    {% if aPortal.id != app['combodo.portal.instance.conf'].properties.id %}
                                        {% set sGlyphiconClass = (aPortal.id == 'backoffice') ? 'fa-list-alt' : 'fa-external-link' %}
                                        <li><a href=\"{{ aPortal.url }}\" {% if app['combodo.portal.instance.conf'].properties.allowed_portals.opening_mode == 'tab' %}target=\"_blank\"{% endif %} title=\"{{ aPortal.label|dict_s }}\"><span class=\"brick_icon fa {{ sGlyphiconClass }} fa-lg fa-fw\"></span>{{ aPortal.label|dict_s }}</a></li>
                                    {% endif %}
                                {% endfor %}
                                {# We display the separator only if the user has more then 1 portal. Meaning default portal + console or several portal at least #}
                                {% if app['combodo.portal.instance.conf'].portals|length > 1 %}
                                    <li role=\"separator\" class=\"divider\"></li>
                                {% endif %}
                                <li><a href=\"{{ app['combodo.absolute_url'] }}pages/logoff.php\"><span class=\"brick_icon fa fa-sign-out fa-lg fa-fw\"></span>{{ 'Brick:Portal:UserProfile:Navigation:Dropdown:Logout'|dict_s }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"menu\">
                    {% block pNavigationSideMenu %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"brick_menu_item {% if oBrick is not defined %}active{% endif %}\">
                                <a href=\"{{ app.url_generator.generate('p_home') }}\">
                                    <span class=\"brick_icon fa fa-home fa-2x\"></span>
                                    {{ 'Page:Home'|dict_s }}
                                </a>
                            </li>
                            {% for brick in app['bricks_collection'].bricks_ordering.navigation_menu %}
                                {% if brick.GetActive and brick.GetVisibleNavigationMenu and brick.GetRouteName is not null %}
                                    <li class=\"brick_menu_item {% if oBrick is defined and brick.id == oBrick.id %}active{% endif %}\" data-brick-id=\"{{ brick.GetId }}\">
                                        <a href=\"{{ app.url_generator.generate(brick.GetRouteName, {sBrickId: brick.GetId}) }}{% if app['combodo.portal.instance.routes'][brick.GetRouteName]['hash'] is defined %}#{{ app['combodo.portal.instance.routes'][brick.GetRouteName]['hash'] }}{% endif %}\" {% if app['combodo.portal.instance.routes'][brick.GetRouteName]['navigation_menu_attr'] is defined %}{% for key, value in app['combodo.portal.instance.routes'][brick.GetRouteName]['navigation_menu_attr'] %} {{ key }}=\"{{ value }}\"{% endfor %}{% endif %} {% if brick.GetModal %}data-toggle=\"modal\" data-target=\"#modal-for-all\"{% endif %}>
                                        <span class=\"brick_icon {{ brick.GetDecorationClassNavigationMenu }}\"></span>
                                        {{ brick.GetTitleNavigationMenu|dict_s }}
                                        </a>
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endblock %}
                </div>

                {% block pPageUIExtensionNavigationMenuSidebar %}
                    {% if app['combodo.portal.instance.conf'].ui_extensions.html[constant('iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU')] is defined %}
                        {{ app['combodo.portal.instance.conf'].ui_extensions.html[constant('iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU')]|raw }}
                    {% endif %}
                {% endblock %}

                {% if app['combodo.portal.instance.conf'].properties.logo is not null %}
                    <div class=\"logo\">
                        {% block pNavigationSideMenuLogo %}
                            {# This is a debug helper to know in which screen size we are #}
                            {% if app['kernel'].debug %}
                                <div style=\"position: fixed; bottom: 0px; left: 0px; z-index: 9999;\">Debug : Taille <span class=\"hidden-sm hidden-md hidden-lg\">XS</span><span class=\"hidden-xs hidden-md hidden-lg\">SM</span><span class=\"hidden-xs hidden-sm hidden-lg\">MD</span><span class=\"hidden-xs hidden-sm hidden-md\">LG</span></div>
                            {% endif %}
                            <a href=\"{{ get_config_parameter('app_icon_url') }}\" title=\"{{ app['combodo.portal.instance.conf'].properties.name|dict_s }}\">
                                <img src=\"{{ app['combodo.portal.instance.conf'].properties.logo }}\" alt=\"{{ app['combodo.portal.instance.conf'].properties.name|dict_s }}\" />
                            </a>
                        {% endblock %}
                    </div>
                {% endif %}
            </nav>
        {% endblock %}
    {% endblock %}

    {% block pMainWrapper %}
        <div class=\"container-fluid\" id=\"main-wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-9 col-md-10 col-sm-offset-3 col-md-offset-2\">

                    {#{% for label, messages in app.session.flashbag.all %}#}

                    {% if app['combodo.current_user.session_messages']|length > 0 %}
                        <section class=\"row\" id=\"session-messages\">
                            <div class=\"col-xs-12\">
                                {% for sessionMessage in app['combodo.current_user.session_messages'] %}
                                    <div class=\"{{ sessionMessage['cssClass'] }}\">{{ sessionMessage['message'] }}</div>
                                {% endfor %}
                            </div>
                        </section>
                    {% endif %}

                    <section class=\"row\" id=\"main-header\">
                        {% block pMainHeader %}
                        {% endblock %}
                    </section>

                    <section class=\"row\" id=\"main-content\">
                        {% block pMainContent %}
                        {% endblock %}
                    </section>
                </div>
            </div>

            {% block pPageUIExtensionMainContent %}
                {% if app['combodo.portal.instance.conf'].ui_extensions.html[constant('iPortalUIExtension::ENUM_PORTAL_EXT_UI_MAIN_CONTENT')] is defined %}
                    {{ app['combodo.portal.instance.conf'].ui_extensions.html[constant('iPortalUIExtension::ENUM_PORTAL_EXT_UI_MAIN_CONTENT')]|raw }}
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}

    <footer id=\"footer-wrapper\">
        {% block pPageFooter%}
            {#<a href=\"http://www.combodo.com\">iTop &copy; {{ \"now\"|date('Y') }}</a>#}
        {% endblock %}
    </footer>

    {% block pModalForAllWrapper %}
        <div class=\"modal fade\" id=\"modal-for-all\" role=\"dialog\" tabindex=\"-1\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    {% include 'itop-portal-base/portal/src/views/helpers/loader.html.twig' %}
                </div>
            </div>
        </div>
    {% endblock %}
    {% block pModalForAlert %}
        <div class=\"modal fade\" id=\"modal-for-alert\" role=\"dialog\" tabindex=\"-1\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"{{ 'Portal:Button:Close'|dict_s }}\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"alert\">
                        </div>
                        <div class=\"text-right\">
                            <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">{{ 'Portal:Button:Close'|dict_s }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}

    {% block pPageOverlay %}
        <div id=\"page_overlay\" class=\"global_overlay\">
            <div class=\"overlay_content\">
                {% include 'itop-portal-base/portal/src/views/helpers/loader.html.twig' %}
            </div>
        </div>
    {% endblock %}

    {% block pPageUIExtensionBody %}
        {% if app['combodo.portal.instance.conf'].ui_extensions.html[constant('iPortalUIExtension::ENUM_PORTAL_EXT_UI_BODY')] is defined %}
            {{ app['combodo.portal.instance.conf'].ui_extensions.html[constant('iPortalUIExtension::ENUM_PORTAL_EXT_UI_BODY')]|raw }}
        {% endif %}
    {% endblock %}
{% endblock %}

{% block pPageLiveScripts %}
    <script type=\"text/javascript\">
        {% block pPageLiveScriptHelpers %}
        // Helper to get the application root url
        var GetAbsoluteUrlAppRoot = function()
        {
            return '{{ app['combodo.absolute_url'] }}';
        };
        // Helper to add a parameter to an url
        var AddParameterToUrl = function(sUrl, sParamName, sParamValue)
        {
            sUrl += (sUrl.split('?')[1] ? '&':'?') + sParamName + '=' + sParamValue;
            return sUrl;
        };
        // Test is sString is a valid JSON string
        var IsJSONString = function(sString)
        {
            try {
                JSON.parse(sString);
            } catch (oException) {
                return false;
            }
            return true;
        };
        var GetContentLoaderTemplate = function()
        {
            return '<div class=\"content_loader\"><div class=\"icon glyphicon glyphicon-refresh\"></div><div class=\"message\">{{ 'Page:PleaseWait'|dict_s }}</div></div>';
        };
        var ShowLoginDialog = function()
        {
            var oModalElem = \$('#modal-for-alert').clone();
            oModalElem.attr('id', '');
            oModalElem.find('.modal-content .modal-header .modal-title').html('{{ 'Error:HTTP:401'|dict_s|escape('js') }}');
            oModalElem.find('.modal-content .modal-body .alert').addClass('alert-danger').html('{{ 'Portal:ErrorUserLoggedOut'|dict_s|escape('js') }}');

            oModalElem.find('.modal-content .modal-body button').replaceWith( \$('<button type=\"button\" class=\"btn btn-primary\" onclick=\"javascript:window.location.reload();\">{{ 'UI:LogOff:ClickHereToLoginAgain'|dict_s|escape('js') }}</button>') );

            oModalElem.appendTo('body');
            oModalElem.modal('show');
        };
        var ShowErrorDialog = function(sBody, sTitle)
        {
            if(sTitle === undefined)
            {
                sTitle = '{{ 'Error:HTTP:500'|dict_s|escape('js') }}';
            }
            if(sBody === undefined)
            {
                sBody = '{{ 'Error:XHR:Fail'|dict_format(constant('ITOP_APPLICATION_SHORT'))|escape('js') }}';
            }
            var oModalElem = \$('#modal-for-alert');
            oModalElem.find('.modal-content .modal-header .modal-title').html(sTitle);
            oModalElem.find('.modal-content .modal-body .alert').addClass('alert-danger').html(sBody);
            oModalElem.modal('show');
        };
        {% endblock %}

        \$(document).ready(function(){
            {% block pPageReadyScripts %}
            // Hack to enable a same modal to load content from different urls
            \$('body').on('hidden.bs.modal', '.modal#modal-for-all', function () {
                \$(this).removeData('bs.modal');
                \$(this).find('.modal-content').html(GetContentLoaderTemplate());
            });
            // Hack to enable multiple modals by making sure the .modal-open class is set to the <body> when there is at least one modal open left
            \$('body').on('hidden.bs.modal', function () {
                if(\$('.modal.in').length > 0)
                {
                    \$('body').addClass('modal-open');
                }
            });
            // Hide tooltips when a modal is opening, otherwise it might be overlapping it
            \$('body').on('show.bs.modal', function () {
                \$(this).find('.tooltip.in').tooltip('hide');
            });
            // Display a error message on modal if the content could not be loaded.
            // Note : As of now, we can't display a more detailled message based on the response because Bootstrap doesn't pass response data with the loaded event.
            \$('body').on('loaded.bs.modal', function (oEvent) {
                var sModalContent = \$(oEvent.target).find('.modal-content').html();

                if( (sModalContent === '') || (sModalContent.replace(/[\\n\\r\\t]+/g, '') === GetContentLoaderTemplate()) )
                {
                    \$(oEvent.target).modal('hide');
                }
            });

            // Handle AJAX errors (exceptions (500), logout (401), ...)
            \$(document).ajaxError(function(oEvent, oXHR, oSettings, sError){
                if(oXHR.status === 401)
                {
                    ShowLoginDialog();
                }
                else if(oXHR.status === 404)
                {
                    ShowErrorDialog('{{ 'UI:ObjectDoesNotExist'|dict_s|escape('js') }}', '{{ 'Error:HTTP:404'|dict_s|escape('js') }}');
                }
                else if(oXHR.responseText !== undefined && IsJSONString(oXHR.responseText) === true)
                {
                    var oData = JSON.parse(oXHR.responseText);
                    // Catching AJAX exception with detailed error.
                    if( (oData.error_message !== undefined) && (oData.error_title !== undefined) )
                    {
                        ShowErrorDialog(oData.error_message, oData.error_title);
                    }
                    else
                    {
                        ShowErrorDialog();
                    }
                }
                else
                {
                    ShowErrorDialog();
                }
            });
            {% endblock %}
        });
    </script>
{% endblock %}

{% block pPageExtensionsScripts %}
    {# UI Extensions inline JS #}
    {% if app['combodo.portal.instance.conf'].ui_extensions.js_inline is not null %}
        <script type=\"text/javascript\">
            {{ app['combodo.portal.instance.conf'].ui_extensions.js_inline|raw }}
        </script>
    {% endif %}
{% endblock %}
</body>
</html>", "itop-portal-base/portal/src/views/layout.html.twig", "/var/www/itop/symfony-portal-poc/datamodels/2.x/itop-portal-base/portal-symfony/templates/itop-portal-base/portal/src/views/layout.html.twig");
    }
}
