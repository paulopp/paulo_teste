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
        $__internal_89e09bd5d06923ca0f150c435044cf49270b0d3af1cbb9acf6a364cdd48bf986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e09bd5d06923ca0f150c435044cf49270b0d3af1cbb9acf6a364cdd48bf986->enter($__internal_89e09bd5d06923ca0f150c435044cf49270b0d3af1cbb9acf6a364cdd48bf986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_db49ee6cabf998868f4d974bf64dcd8b8218d273853da82d4c5e90627d36ca10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db49ee6cabf998868f4d974bf64dcd8b8218d273853da82d4c5e90627d36ca10->enter($__internal_db49ee6cabf998868f4d974bf64dcd8b8218d273853da82d4c5e90627d36ca10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_89e09bd5d06923ca0f150c435044cf49270b0d3af1cbb9acf6a364cdd48bf986->leave($__internal_89e09bd5d06923ca0f150c435044cf49270b0d3af1cbb9acf6a364cdd48bf986_prof);

        
        $__internal_db49ee6cabf998868f4d974bf64dcd8b8218d273853da82d4c5e90627d36ca10->leave($__internal_db49ee6cabf998868f4d974bf64dcd8b8218d273853da82d4c5e90627d36ca10_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ba5073f2d280480ed804e7a05a59628222b6aadbe415ce86c310fc970165b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba5073f2d280480ed804e7a05a59628222b6aadbe415ce86c310fc970165b74->enter($__internal_9ba5073f2d280480ed804e7a05a59628222b6aadbe415ce86c310fc970165b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6150d9c9b7c12416df9552aa76adb8948c255e4da577fd9438e5355863cb4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6150d9c9b7c12416df9552aa76adb8948c255e4da577fd9438e5355863cb4b8->enter($__internal_d6150d9c9b7c12416df9552aa76adb8948c255e4da577fd9438e5355863cb4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d6150d9c9b7c12416df9552aa76adb8948c255e4da577fd9438e5355863cb4b8->leave($__internal_d6150d9c9b7c12416df9552aa76adb8948c255e4da577fd9438e5355863cb4b8_prof);

        
        $__internal_9ba5073f2d280480ed804e7a05a59628222b6aadbe415ce86c310fc970165b74->leave($__internal_9ba5073f2d280480ed804e7a05a59628222b6aadbe415ce86c310fc970165b74_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32bf95688b2c68294f0eaba2b192359dd1e689b4e074bdd718bcfd8a5d912156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bf95688b2c68294f0eaba2b192359dd1e689b4e074bdd718bcfd8a5d912156->enter($__internal_32bf95688b2c68294f0eaba2b192359dd1e689b4e074bdd718bcfd8a5d912156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c383dd5e6587d2c684a9f110229b0bb1518529ca2fcc9ed857297714873d4b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c383dd5e6587d2c684a9f110229b0bb1518529ca2fcc9ed857297714873d4b04->enter($__internal_c383dd5e6587d2c684a9f110229b0bb1518529ca2fcc9ed857297714873d4b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c383dd5e6587d2c684a9f110229b0bb1518529ca2fcc9ed857297714873d4b04->leave($__internal_c383dd5e6587d2c684a9f110229b0bb1518529ca2fcc9ed857297714873d4b04_prof);

        
        $__internal_32bf95688b2c68294f0eaba2b192359dd1e689b4e074bdd718bcfd8a5d912156->leave($__internal_32bf95688b2c68294f0eaba2b192359dd1e689b4e074bdd718bcfd8a5d912156_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1253b288438fb9bf020f212d688ebe7aa73d656232515e5ad3ca0eb3bec36ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1253b288438fb9bf020f212d688ebe7aa73d656232515e5ad3ca0eb3bec36ed->enter($__internal_b1253b288438fb9bf020f212d688ebe7aa73d656232515e5ad3ca0eb3bec36ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb2595ab2c94f39df4c251bc5a5842ae7b722de2529f56b9dbf325ce56a4f656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2595ab2c94f39df4c251bc5a5842ae7b722de2529f56b9dbf325ce56a4f656->enter($__internal_bb2595ab2c94f39df4c251bc5a5842ae7b722de2529f56b9dbf325ce56a4f656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb2595ab2c94f39df4c251bc5a5842ae7b722de2529f56b9dbf325ce56a4f656->leave($__internal_bb2595ab2c94f39df4c251bc5a5842ae7b722de2529f56b9dbf325ce56a4f656_prof);

        
        $__internal_b1253b288438fb9bf020f212d688ebe7aa73d656232515e5ad3ca0eb3bec36ed->leave($__internal_b1253b288438fb9bf020f212d688ebe7aa73d656232515e5ad3ca0eb3bec36ed_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6993a788c1d267e158dc86425051de5dce26ec0fb31aa797d3f8bfaef083f908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6993a788c1d267e158dc86425051de5dce26ec0fb31aa797d3f8bfaef083f908->enter($__internal_6993a788c1d267e158dc86425051de5dce26ec0fb31aa797d3f8bfaef083f908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_82b8e3d57b54def83bddaec433de8fe207130c53bccd4a590b0a1b4da4064d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b8e3d57b54def83bddaec433de8fe207130c53bccd4a590b0a1b4da4064d81->enter($__internal_82b8e3d57b54def83bddaec433de8fe207130c53bccd4a590b0a1b4da4064d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_82b8e3d57b54def83bddaec433de8fe207130c53bccd4a590b0a1b4da4064d81->leave($__internal_82b8e3d57b54def83bddaec433de8fe207130c53bccd4a590b0a1b4da4064d81_prof);

        
        $__internal_6993a788c1d267e158dc86425051de5dce26ec0fb31aa797d3f8bfaef083f908->leave($__internal_6993a788c1d267e158dc86425051de5dce26ec0fb31aa797d3f8bfaef083f908_prof);

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
