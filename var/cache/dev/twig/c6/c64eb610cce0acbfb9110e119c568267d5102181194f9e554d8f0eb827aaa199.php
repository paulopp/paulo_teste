<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_465eb1d00d8847b28a6c5a542c4296992f5140bd50112a454913824394c0ccfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465eb1d00d8847b28a6c5a542c4296992f5140bd50112a454913824394c0ccfd->enter($__internal_465eb1d00d8847b28a6c5a542c4296992f5140bd50112a454913824394c0ccfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b6b98de1fa947c58bfee7642eb3615923a69111af9280d2edd5c310967e8bffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b98de1fa947c58bfee7642eb3615923a69111af9280d2edd5c310967e8bffa->enter($__internal_b6b98de1fa947c58bfee7642eb3615923a69111af9280d2edd5c310967e8bffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_465eb1d00d8847b28a6c5a542c4296992f5140bd50112a454913824394c0ccfd->leave($__internal_465eb1d00d8847b28a6c5a542c4296992f5140bd50112a454913824394c0ccfd_prof);

        
        $__internal_b6b98de1fa947c58bfee7642eb3615923a69111af9280d2edd5c310967e8bffa->leave($__internal_b6b98de1fa947c58bfee7642eb3615923a69111af9280d2edd5c310967e8bffa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8aaa286faf232ff6893b65926b1fc34f689bba72f8e8a7890d244ac3f76fafe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aaa286faf232ff6893b65926b1fc34f689bba72f8e8a7890d244ac3f76fafe0->enter($__internal_8aaa286faf232ff6893b65926b1fc34f689bba72f8e8a7890d244ac3f76fafe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_780204e17e9ea6d48e53ac24ad2622b5ea0cfc7a815ac037809f2707e4024046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780204e17e9ea6d48e53ac24ad2622b5ea0cfc7a815ac037809f2707e4024046->enter($__internal_780204e17e9ea6d48e53ac24ad2622b5ea0cfc7a815ac037809f2707e4024046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_780204e17e9ea6d48e53ac24ad2622b5ea0cfc7a815ac037809f2707e4024046->leave($__internal_780204e17e9ea6d48e53ac24ad2622b5ea0cfc7a815ac037809f2707e4024046_prof);

        
        $__internal_8aaa286faf232ff6893b65926b1fc34f689bba72f8e8a7890d244ac3f76fafe0->leave($__internal_8aaa286faf232ff6893b65926b1fc34f689bba72f8e8a7890d244ac3f76fafe0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06947dff5aaead8ce983e0c977b98518c343455605dacaa78c5ea4e6c4ca7c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06947dff5aaead8ce983e0c977b98518c343455605dacaa78c5ea4e6c4ca7c14->enter($__internal_06947dff5aaead8ce983e0c977b98518c343455605dacaa78c5ea4e6c4ca7c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_23f5292e6de5d48683498963eeca07bbd4afe5dcb74f26155064702317523f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f5292e6de5d48683498963eeca07bbd4afe5dcb74f26155064702317523f96->enter($__internal_23f5292e6de5d48683498963eeca07bbd4afe5dcb74f26155064702317523f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_23f5292e6de5d48683498963eeca07bbd4afe5dcb74f26155064702317523f96->leave($__internal_23f5292e6de5d48683498963eeca07bbd4afe5dcb74f26155064702317523f96_prof);

        
        $__internal_06947dff5aaead8ce983e0c977b98518c343455605dacaa78c5ea4e6c4ca7c14->leave($__internal_06947dff5aaead8ce983e0c977b98518c343455605dacaa78c5ea4e6c4ca7c14_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f58dfeebf7f6a55cb23f1632c50590c1b0ebc578b8de8e46562975637acda018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58dfeebf7f6a55cb23f1632c50590c1b0ebc578b8de8e46562975637acda018->enter($__internal_f58dfeebf7f6a55cb23f1632c50590c1b0ebc578b8de8e46562975637acda018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b5f31ee0e49d3c362c4041914fa9433f9bf5aaa7310bed4ab0857b1e45fa43ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f31ee0e49d3c362c4041914fa9433f9bf5aaa7310bed4ab0857b1e45fa43ab->enter($__internal_b5f31ee0e49d3c362c4041914fa9433f9bf5aaa7310bed4ab0857b1e45fa43ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b5f31ee0e49d3c362c4041914fa9433f9bf5aaa7310bed4ab0857b1e45fa43ab->leave($__internal_b5f31ee0e49d3c362c4041914fa9433f9bf5aaa7310bed4ab0857b1e45fa43ab_prof);

        
        $__internal_f58dfeebf7f6a55cb23f1632c50590c1b0ebc578b8de8e46562975637acda018->leave($__internal_f58dfeebf7f6a55cb23f1632c50590c1b0ebc578b8de8e46562975637acda018_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/paulo_teste/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
