<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8e5ce525f9f4e5b5c1263f02fd3d0cc4fd996297451a21dd23a918aea656b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e5ce525f9f4e5b5c1263f02fd3d0cc4fd996297451a21dd23a918aea656b5a->enter($__internal_d8e5ce525f9f4e5b5c1263f02fd3d0cc4fd996297451a21dd23a918aea656b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_235e8986b69c7ffce7a109d4ef16be65156363636ae11cafc1d069d59ebbbe9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235e8986b69c7ffce7a109d4ef16be65156363636ae11cafc1d069d59ebbbe9f->enter($__internal_235e8986b69c7ffce7a109d4ef16be65156363636ae11cafc1d069d59ebbbe9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8e5ce525f9f4e5b5c1263f02fd3d0cc4fd996297451a21dd23a918aea656b5a->leave($__internal_d8e5ce525f9f4e5b5c1263f02fd3d0cc4fd996297451a21dd23a918aea656b5a_prof);

        
        $__internal_235e8986b69c7ffce7a109d4ef16be65156363636ae11cafc1d069d59ebbbe9f->leave($__internal_235e8986b69c7ffce7a109d4ef16be65156363636ae11cafc1d069d59ebbbe9f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_516cacc8135bf780e339be883b1dd1d0766538a586f90c16ef03974df219e1b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516cacc8135bf780e339be883b1dd1d0766538a586f90c16ef03974df219e1b6->enter($__internal_516cacc8135bf780e339be883b1dd1d0766538a586f90c16ef03974df219e1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9ea139e36ca4f13bc22574a833d146d51fd9be919d4d5e27d7c0227830d8c90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea139e36ca4f13bc22574a833d146d51fd9be919d4d5e27d7c0227830d8c90d->enter($__internal_9ea139e36ca4f13bc22574a833d146d51fd9be919d4d5e27d7c0227830d8c90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9ea139e36ca4f13bc22574a833d146d51fd9be919d4d5e27d7c0227830d8c90d->leave($__internal_9ea139e36ca4f13bc22574a833d146d51fd9be919d4d5e27d7c0227830d8c90d_prof);

        
        $__internal_516cacc8135bf780e339be883b1dd1d0766538a586f90c16ef03974df219e1b6->leave($__internal_516cacc8135bf780e339be883b1dd1d0766538a586f90c16ef03974df219e1b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e46322e465c769ce5cf44821dfd76e6271d2846eebdf4f3735ef713031922ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46322e465c769ce5cf44821dfd76e6271d2846eebdf4f3735ef713031922ca3->enter($__internal_e46322e465c769ce5cf44821dfd76e6271d2846eebdf4f3735ef713031922ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fc3c81745df633014b49c395f575b28a97133bb7fd6ff11553ba140780b2e3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3c81745df633014b49c395f575b28a97133bb7fd6ff11553ba140780b2e3b3->enter($__internal_fc3c81745df633014b49c395f575b28a97133bb7fd6ff11553ba140780b2e3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc3c81745df633014b49c395f575b28a97133bb7fd6ff11553ba140780b2e3b3->leave($__internal_fc3c81745df633014b49c395f575b28a97133bb7fd6ff11553ba140780b2e3b3_prof);

        
        $__internal_e46322e465c769ce5cf44821dfd76e6271d2846eebdf4f3735ef713031922ca3->leave($__internal_e46322e465c769ce5cf44821dfd76e6271d2846eebdf4f3735ef713031922ca3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06e502b32e47eb8315ecdc98e31f8226beb38605abc75a267b7586041c72b62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e502b32e47eb8315ecdc98e31f8226beb38605abc75a267b7586041c72b62b->enter($__internal_06e502b32e47eb8315ecdc98e31f8226beb38605abc75a267b7586041c72b62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e64146875909727601739fb2089e5f8f681385c5ae6704c6a11860472bcf8105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64146875909727601739fb2089e5f8f681385c5ae6704c6a11860472bcf8105->enter($__internal_e64146875909727601739fb2089e5f8f681385c5ae6704c6a11860472bcf8105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e64146875909727601739fb2089e5f8f681385c5ae6704c6a11860472bcf8105->leave($__internal_e64146875909727601739fb2089e5f8f681385c5ae6704c6a11860472bcf8105_prof);

        
        $__internal_06e502b32e47eb8315ecdc98e31f8226beb38605abc75a267b7586041c72b62b->leave($__internal_06e502b32e47eb8315ecdc98e31f8226beb38605abc75a267b7586041c72b62b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/paulo_teste/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
