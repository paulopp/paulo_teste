<?php

/* default/index.html.twig */
class __TwigTemplate_dceb56a59c18c48718e8d29e4a25e98e5177db0f33ab183da65e3deae3ceaade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e894f8defd7a00c559f7c671972597ba2c770bef8cc7684aed4ce4bdbe3b29b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e894f8defd7a00c559f7c671972597ba2c770bef8cc7684aed4ce4bdbe3b29b3->enter($__internal_e894f8defd7a00c559f7c671972597ba2c770bef8cc7684aed4ce4bdbe3b29b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_5bd797b7da55fc3a1a9cc04305d882962ca7fc74b40a8570b4aa71e509d7e170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd797b7da55fc3a1a9cc04305d882962ca7fc74b40a8570b4aa71e509d7e170->enter($__internal_5bd797b7da55fc3a1a9cc04305d882962ca7fc74b40a8570b4aa71e509d7e170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e894f8defd7a00c559f7c671972597ba2c770bef8cc7684aed4ce4bdbe3b29b3->leave($__internal_e894f8defd7a00c559f7c671972597ba2c770bef8cc7684aed4ce4bdbe3b29b3_prof);

        
        $__internal_5bd797b7da55fc3a1a9cc04305d882962ca7fc74b40a8570b4aa71e509d7e170->leave($__internal_5bd797b7da55fc3a1a9cc04305d882962ca7fc74b40a8570b4aa71e509d7e170_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44b732493d8ea1089779d465349327586be8f61f0a63f515a2054f20262c4f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b732493d8ea1089779d465349327586be8f61f0a63f515a2054f20262c4f59->enter($__internal_44b732493d8ea1089779d465349327586be8f61f0a63f515a2054f20262c4f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14a18628e046ec52b04d071cbdaf11e38476da6ded873617b30bb87abcb6ff92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a18628e046ec52b04d071cbdaf11e38476da6ded873617b30bb87abcb6ff92->enter($__internal_14a18628e046ec52b04d071cbdaf11e38476da6ded873617b30bb87abcb6ff92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h3><span>Teste prático para a Arca Solutions (pauloamp@hotmail.com)</h3>
                <center><h4> Pesquisa de Empresas</h4></center>
            </div>
            
            <div id=\"formularioPesq\">
                <form>
                    <p>Informe o argumento de pesquisa: <input type=\"search\" name=\"busca\" placeholder=\"Search\">&nbsp;<button name=\"button\">Pesquisar</button></p>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_14a18628e046ec52b04d071cbdaf11e38476da6ded873617b30bb87abcb6ff92->leave($__internal_14a18628e046ec52b04d071cbdaf11e38476da6ded873617b30bb87abcb6ff92_prof);

        
        $__internal_44b732493d8ea1089779d465349327586be8f61f0a63f515a2054f20262c4f59->leave($__internal_44b732493d8ea1089779d465349327586be8f61f0a63f515a2054f20262c4f59_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a6f75d5ef40664d585c116290237e7e1cb666df76e0e99e6a2f0f8ffa34f0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6f75d5ef40664d585c116290237e7e1cb666df76e0e99e6a2f0f8ffa34f0c1->enter($__internal_1a6f75d5ef40664d585c116290237e7e1cb666df76e0e99e6a2f0f8ffa34f0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_969353888f589a6235fb33c0c7f01bcab0fb6b76e3feef4aae033f96f9ff98fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969353888f589a6235fb33c0c7f01bcab0fb6b76e3feef4aae033f96f9ff98fd->enter($__internal_969353888f589a6235fb33c0c7f01bcab0fb6b76e3feef4aae033f96f9ff98fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_969353888f589a6235fb33c0c7f01bcab0fb6b76e3feef4aae033f96f9ff98fd->leave($__internal_969353888f589a6235fb33c0c7f01bcab0fb6b76e3feef4aae033f96f9ff98fd_prof);

        
        $__internal_1a6f75d5ef40664d585c116290237e7e1cb666df76e0e99e6a2f0f8ffa34f0c1->leave($__internal_1a6f75d5ef40664d585c116290237e7e1cb666df76e0e99e6a2f0f8ffa34f0c1_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  74 => 20,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h3><span>Teste prático para a Arca Solutions (pauloamp@hotmail.com)</h3>
                <center><h4> Pesquisa de Empresas</h4></center>
            </div>
            
            <div id=\"formularioPesq\">
                <form>
                    <p>Informe o argumento de pesquisa: <input type=\"search\" name=\"busca\" placeholder=\"Search\">&nbsp;<button name=\"button\">Pesquisar</button></p>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "default/index.html.twig", "/var/www/html/paulo_teste/app/Resources/views/default/index.html.twig");
    }
}
