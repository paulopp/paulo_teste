<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41b46ee18fe5973922f471e68effc72a98bb46d99b215600b1f21c6e36dd60cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b46ee18fe5973922f471e68effc72a98bb46d99b215600b1f21c6e36dd60cf->enter($__internal_41b46ee18fe5973922f471e68effc72a98bb46d99b215600b1f21c6e36dd60cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bfaa31b085cbc3f0d1350bf940f10b90ae471ca56dcb45eccc9defea9896db09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfaa31b085cbc3f0d1350bf940f10b90ae471ca56dcb45eccc9defea9896db09->enter($__internal_bfaa31b085cbc3f0d1350bf940f10b90ae471ca56dcb45eccc9defea9896db09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_41b46ee18fe5973922f471e68effc72a98bb46d99b215600b1f21c6e36dd60cf->leave($__internal_41b46ee18fe5973922f471e68effc72a98bb46d99b215600b1f21c6e36dd60cf_prof);

        
        $__internal_bfaa31b085cbc3f0d1350bf940f10b90ae471ca56dcb45eccc9defea9896db09->leave($__internal_bfaa31b085cbc3f0d1350bf940f10b90ae471ca56dcb45eccc9defea9896db09_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d57e3424e164e0fae9269fa18de834fd39e7d9616d199140d58b2959da7d0224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d57e3424e164e0fae9269fa18de834fd39e7d9616d199140d58b2959da7d0224->enter($__internal_d57e3424e164e0fae9269fa18de834fd39e7d9616d199140d58b2959da7d0224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_775048842abbadfbe49b2dcf173fbb40ea722dd6635ddf1d7076312772cb6848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775048842abbadfbe49b2dcf173fbb40ea722dd6635ddf1d7076312772cb6848->enter($__internal_775048842abbadfbe49b2dcf173fbb40ea722dd6635ddf1d7076312772cb6848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_775048842abbadfbe49b2dcf173fbb40ea722dd6635ddf1d7076312772cb6848->leave($__internal_775048842abbadfbe49b2dcf173fbb40ea722dd6635ddf1d7076312772cb6848_prof);

        
        $__internal_d57e3424e164e0fae9269fa18de834fd39e7d9616d199140d58b2959da7d0224->leave($__internal_d57e3424e164e0fae9269fa18de834fd39e7d9616d199140d58b2959da7d0224_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e14edc163d9e437d9f7a4fc13afa0efb1f7e144b3116a7c8b9b6c07cdfec68bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14edc163d9e437d9f7a4fc13afa0efb1f7e144b3116a7c8b9b6c07cdfec68bd->enter($__internal_e14edc163d9e437d9f7a4fc13afa0efb1f7e144b3116a7c8b9b6c07cdfec68bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_83ae77def107ec50cbe2736bd543fa31d22f012461f0fef76bd9b94c1d9426e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ae77def107ec50cbe2736bd543fa31d22f012461f0fef76bd9b94c1d9426e7->enter($__internal_83ae77def107ec50cbe2736bd543fa31d22f012461f0fef76bd9b94c1d9426e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_83ae77def107ec50cbe2736bd543fa31d22f012461f0fef76bd9b94c1d9426e7->leave($__internal_83ae77def107ec50cbe2736bd543fa31d22f012461f0fef76bd9b94c1d9426e7_prof);

        
        $__internal_e14edc163d9e437d9f7a4fc13afa0efb1f7e144b3116a7c8b9b6c07cdfec68bd->leave($__internal_e14edc163d9e437d9f7a4fc13afa0efb1f7e144b3116a7c8b9b6c07cdfec68bd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc122427f59b7893b85d2b1fec43c06f58451799e4c6e3620e7b66994c52cb90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc122427f59b7893b85d2b1fec43c06f58451799e4c6e3620e7b66994c52cb90->enter($__internal_dc122427f59b7893b85d2b1fec43c06f58451799e4c6e3620e7b66994c52cb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cdf8130d157a7c67434ff8f58cbed56b24bac43ff5a306f0722d89b3f2fd7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cdf8130d157a7c67434ff8f58cbed56b24bac43ff5a306f0722d89b3f2fd7d8->enter($__internal_3cdf8130d157a7c67434ff8f58cbed56b24bac43ff5a306f0722d89b3f2fd7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3cdf8130d157a7c67434ff8f58cbed56b24bac43ff5a306f0722d89b3f2fd7d8->leave($__internal_3cdf8130d157a7c67434ff8f58cbed56b24bac43ff5a306f0722d89b3f2fd7d8_prof);

        
        $__internal_dc122427f59b7893b85d2b1fec43c06f58451799e4c6e3620e7b66994c52cb90->leave($__internal_dc122427f59b7893b85d2b1fec43c06f58451799e4c6e3620e7b66994c52cb90_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c231cfa8bf1af6e0cd8c9786cf648fe8bd7191711eff6184832535b985a3c687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c231cfa8bf1af6e0cd8c9786cf648fe8bd7191711eff6184832535b985a3c687->enter($__internal_c231cfa8bf1af6e0cd8c9786cf648fe8bd7191711eff6184832535b985a3c687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_65740e7bd9577c6597b51e78330ed8bfcdd870ed0155f51792381bad659dd9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65740e7bd9577c6597b51e78330ed8bfcdd870ed0155f51792381bad659dd9e2->enter($__internal_65740e7bd9577c6597b51e78330ed8bfcdd870ed0155f51792381bad659dd9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_65740e7bd9577c6597b51e78330ed8bfcdd870ed0155f51792381bad659dd9e2->leave($__internal_65740e7bd9577c6597b51e78330ed8bfcdd870ed0155f51792381bad659dd9e2_prof);

        
        $__internal_c231cfa8bf1af6e0cd8c9786cf648fe8bd7191711eff6184832535b985a3c687->leave($__internal_c231cfa8bf1af6e0cd8c9786cf648fe8bd7191711eff6184832535b985a3c687_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/paulo_teste/app/Resources/views/base.html.twig");
    }
}
