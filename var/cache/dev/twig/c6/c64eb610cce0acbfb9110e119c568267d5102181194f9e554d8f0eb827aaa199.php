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
        $__internal_bba0184a478b64a5b7d3082afbbaf779e7692280cfb88b54ca8f22a71fa98308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba0184a478b64a5b7d3082afbbaf779e7692280cfb88b54ca8f22a71fa98308->enter($__internal_bba0184a478b64a5b7d3082afbbaf779e7692280cfb88b54ca8f22a71fa98308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ff2d02c7a2f874c96714f5a50c4057df1648e2d24887d05fa7c0338d7c4b4298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2d02c7a2f874c96714f5a50c4057df1648e2d24887d05fa7c0338d7c4b4298->enter($__internal_ff2d02c7a2f874c96714f5a50c4057df1648e2d24887d05fa7c0338d7c4b4298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bba0184a478b64a5b7d3082afbbaf779e7692280cfb88b54ca8f22a71fa98308->leave($__internal_bba0184a478b64a5b7d3082afbbaf779e7692280cfb88b54ca8f22a71fa98308_prof);

        
        $__internal_ff2d02c7a2f874c96714f5a50c4057df1648e2d24887d05fa7c0338d7c4b4298->leave($__internal_ff2d02c7a2f874c96714f5a50c4057df1648e2d24887d05fa7c0338d7c4b4298_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aced3a3de4a19b8b3b041fe1bc245f6d5cfafd912616ddf63a29fc4e235ee6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aced3a3de4a19b8b3b041fe1bc245f6d5cfafd912616ddf63a29fc4e235ee6e0->enter($__internal_aced3a3de4a19b8b3b041fe1bc245f6d5cfafd912616ddf63a29fc4e235ee6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5617c81e4f18e226b20a9e890ee1733885837f64fef1578f14af6218264fe5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5617c81e4f18e226b20a9e890ee1733885837f64fef1578f14af6218264fe5bd->enter($__internal_5617c81e4f18e226b20a9e890ee1733885837f64fef1578f14af6218264fe5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5617c81e4f18e226b20a9e890ee1733885837f64fef1578f14af6218264fe5bd->leave($__internal_5617c81e4f18e226b20a9e890ee1733885837f64fef1578f14af6218264fe5bd_prof);

        
        $__internal_aced3a3de4a19b8b3b041fe1bc245f6d5cfafd912616ddf63a29fc4e235ee6e0->leave($__internal_aced3a3de4a19b8b3b041fe1bc245f6d5cfafd912616ddf63a29fc4e235ee6e0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_241479aeb0d7b06b73e522e0a28007fb79d73854003c20f8d1b46b1dd2e0b9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241479aeb0d7b06b73e522e0a28007fb79d73854003c20f8d1b46b1dd2e0b9b8->enter($__internal_241479aeb0d7b06b73e522e0a28007fb79d73854003c20f8d1b46b1dd2e0b9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae3a0a5779b66cc93877a9c9906e824a355fcf26b84923f073d09f8c83176e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3a0a5779b66cc93877a9c9906e824a355fcf26b84923f073d09f8c83176e06->enter($__internal_ae3a0a5779b66cc93877a9c9906e824a355fcf26b84923f073d09f8c83176e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ae3a0a5779b66cc93877a9c9906e824a355fcf26b84923f073d09f8c83176e06->leave($__internal_ae3a0a5779b66cc93877a9c9906e824a355fcf26b84923f073d09f8c83176e06_prof);

        
        $__internal_241479aeb0d7b06b73e522e0a28007fb79d73854003c20f8d1b46b1dd2e0b9b8->leave($__internal_241479aeb0d7b06b73e522e0a28007fb79d73854003c20f8d1b46b1dd2e0b9b8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d20bf57d116f8ef883fd62d6c211cf4a34d642b22919f82f12b7df0465417c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d20bf57d116f8ef883fd62d6c211cf4a34d642b22919f82f12b7df0465417c2->enter($__internal_5d20bf57d116f8ef883fd62d6c211cf4a34d642b22919f82f12b7df0465417c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9732b7501db89d4a123d4038304aa63b0aae0843b31436c076c4d8444c888543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9732b7501db89d4a123d4038304aa63b0aae0843b31436c076c4d8444c888543->enter($__internal_9732b7501db89d4a123d4038304aa63b0aae0843b31436c076c4d8444c888543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9732b7501db89d4a123d4038304aa63b0aae0843b31436c076c4d8444c888543->leave($__internal_9732b7501db89d4a123d4038304aa63b0aae0843b31436c076c4d8444c888543_prof);

        
        $__internal_5d20bf57d116f8ef883fd62d6c211cf4a34d642b22919f82f12b7df0465417c2->leave($__internal_5d20bf57d116f8ef883fd62d6c211cf4a34d642b22919f82f12b7df0465417c2_prof);

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
