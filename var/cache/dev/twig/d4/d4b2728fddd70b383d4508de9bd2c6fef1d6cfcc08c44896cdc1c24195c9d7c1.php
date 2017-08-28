<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_01f51919ce56e22c3d95ec38d6d0b067f66d7a28a249c0157031c603493cf748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2adde3a4f9339e48ff925869390f98b91d5c735f0fc565012e6978117c093626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adde3a4f9339e48ff925869390f98b91d5c735f0fc565012e6978117c093626->enter($__internal_2adde3a4f9339e48ff925869390f98b91d5c735f0fc565012e6978117c093626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_77522574267f4b8da902ffb0b5983a808a7e3decef6b5eb78eda3b8fa3ed9146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77522574267f4b8da902ffb0b5983a808a7e3decef6b5eb78eda3b8fa3ed9146->enter($__internal_77522574267f4b8da902ffb0b5983a808a7e3decef6b5eb78eda3b8fa3ed9146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2adde3a4f9339e48ff925869390f98b91d5c735f0fc565012e6978117c093626->leave($__internal_2adde3a4f9339e48ff925869390f98b91d5c735f0fc565012e6978117c093626_prof);

        
        $__internal_77522574267f4b8da902ffb0b5983a808a7e3decef6b5eb78eda3b8fa3ed9146->leave($__internal_77522574267f4b8da902ffb0b5983a808a7e3decef6b5eb78eda3b8fa3ed9146_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_535ca5cd7484a7df7e083cd4a8e6a6a05aa2afddcfcd50995f3de3e2cc0336ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535ca5cd7484a7df7e083cd4a8e6a6a05aa2afddcfcd50995f3de3e2cc0336ea->enter($__internal_535ca5cd7484a7df7e083cd4a8e6a6a05aa2afddcfcd50995f3de3e2cc0336ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_64711d528260220bd1680ec30504ebeb701114d76bd3ff2989921cbf30dd7a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64711d528260220bd1680ec30504ebeb701114d76bd3ff2989921cbf30dd7a87->enter($__internal_64711d528260220bd1680ec30504ebeb701114d76bd3ff2989921cbf30dd7a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_64711d528260220bd1680ec30504ebeb701114d76bd3ff2989921cbf30dd7a87->leave($__internal_64711d528260220bd1680ec30504ebeb701114d76bd3ff2989921cbf30dd7a87_prof);

        
        $__internal_535ca5cd7484a7df7e083cd4a8e6a6a05aa2afddcfcd50995f3de3e2cc0336ea->leave($__internal_535ca5cd7484a7df7e083cd4a8e6a6a05aa2afddcfcd50995f3de3e2cc0336ea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/paulo_teste/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
